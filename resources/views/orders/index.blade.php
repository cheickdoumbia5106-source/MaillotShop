@extends('layouts.shop')

@section('title', 'Mes commandes')

@section('content')

    <h2 class="mb-4">Mes commandes</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($orders->count() > 0)
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>N° commande</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Statut</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>{{ $order->created_at->format('d/m/Y') }}</td>
                        <td>{{ $order->total }} MAD</td>
                        <td>
                            <span class="badge bg-secondary">{{ ucfirst(str_replace('_', ' ', $order->status)) }}</span>
                        </td>
                        <td>
                            <a href="{{ route('orders.show', $order) }}" class="btn btn-sm btn-outline-dark">Détails</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Vous n'avez pas encore passé de commande.</p>
        <a href="{{ route('products.index') }}" class="btn btn-outline-dark">Voir les maillots</a>
    @endif

@endsection