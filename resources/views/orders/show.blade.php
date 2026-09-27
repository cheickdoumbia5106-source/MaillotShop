@extends('layouts.shop')

@section('title', 'Commande #' . $order->id)

@section('content')

    <h2 class="mb-4">Commande #{{ $order->id }}</h2>

    <div class="row">
        <div class="col-md-7">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Sous-total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->orderItems as $item)
                        <tr>
                            <td class="d-flex align-items-center gap-2">
                                <img src="{{ asset($item->product->image) }}" style="width:50px;height:50px;object-fit:cover;" class="rounded">
                                {{ $item->product->name }}
                            </td>
                            <td>{{ $item->price }} MAD</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->price * $item->quantity }} MAD</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h5 class="text-end">Total : {{ $order->total }} MAD</h5>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informations de livraison</h5>
                    <p class="mb-1"><strong>{{ $order->first_name }} {{ $order->last_name }}</strong></p>
                    <p class="mb-1">{{ $order->phone }}</p>
                    <p class="mb-1">{{ $order->address }}, {{ $order->city }}</p>
                    <p class="mt-3">
                        <span class="badge bg-secondary">Statut : {{ ucfirst(str_replace('_', ' ', $order->status)) }}</span>
                    </p>
                </div>
            </div>
            <a href="{{ route('orders.index') }}" class="btn btn-link mt-3">&larr; Retour à mes commandes</a>
        </div>
    </div>

@endsection