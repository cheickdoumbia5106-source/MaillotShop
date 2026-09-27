<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\SendCommandMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function checkout()
    {
        $cart = session('cart', []);

        if (count($cart) === 0) {
            return redirect()->route('cart.index')->with('error', 'Votre panier est vide.');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return view('orders.checkout', compact('cart', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        $cart = session('cart', []);

        if (count($cart) === 0) {
            return redirect()->route('cart.index')->with('error', 'Votre panier est vide.');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $order = DB::transaction(function () use ($request, $cart, $total) {

        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'status' => 'en_attente',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
        ]);

        foreach ($cart as $productId => $item) {

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);

            Product::where('id', $productId)
                ->decrement('stock', $item['quantity']);
        }

        return $order;
    });

    $order->load('orderItems.product');

    // Envoyer un email à tous les administrateurs
    $admins = User::where('role', 'admin')
        ->whereNotNull('email')
        ->get();

    foreach ($admins as $admin) {
        Mail::to($admin->email)
            ->send(new SendCommandMail($order));
    }

    session()->forget('cart');

    return redirect()
        ->route('orders.index')
        ->with('success', 'Votre commande a été passée avec succès !');
    }

    public function index()
    {
        $orders = Auth::user()->orders()->latest()->get();

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }

        $order->load('orderItems.product');

        return view('orders.show', compact('order'));
    }
}
