@extends('layouts.shop')

@section('title', 'Mon panier')

@section('content')

    <h2 class="mb-4">Mon panier</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (count($cart) > 0)
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Sous-total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $productId => $item)
                    <tr>
                        <td class="d-flex align-items-center gap-2">
                            <img src="{{ asset($item['image']) }}" style="width:60px;height:60px;object-fit:cover;" class="rounded">
                            {{ $item['name'] }}
                        </td>
                        <td>{{ $item['price'] }} MAD</td>
                        <td>
                            <form method="POST" action="{{ route('cart.update', $productId) }}" class="d-flex gap-2">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control" style="width:80px;">
                                <button type="submit" class="btn btn-sm btn-outline-dark">Mettre à jour</button>
                            </form>
                        </td>
                        <td>{{ $item['price'] * $item['quantity'] }} MAD</td>
                        <td>
                            <form method="POST" action="{{ route('cart.remove', $productId) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end">
            <h4>Total : {{ $total }} MAD</h4>
            <a href="{{ route('orders.checkout') }}" class="btn btn-dark mt-2">Passer la commande</a>
            
        </div>
    @else
        <p>Votre panier est vide.</p>
        <a href="{{ route('products.index') }}" class="btn btn-outline-dark">Voir les maillots</a>
    @endif

@endsection