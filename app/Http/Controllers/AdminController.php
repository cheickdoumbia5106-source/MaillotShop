<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalProducts = Product::count();
        $totalUsers = User::where('role', 'client')->count();
        $totalOrders = Order::count();
        $totalRevenue = Order::where('status', '!=', 'annulée')->sum('total');
        $pendingOrders = Order::where('status', 'en_attente')->count();

        return view('admin.dashboard', compact(
            'totalProducts', 'totalUsers', 'totalOrders', 'totalRevenue', 'pendingOrders'
        ));
    }

    public function users()
    {
        $users = User::where('role', 'client')->latest()->get();

        return view('admin.users', compact('users'));
    }
}