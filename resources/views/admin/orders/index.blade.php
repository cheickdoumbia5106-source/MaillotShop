@extends('layouts.admin')

@section('title', 'Gestion des commandes')

@section('content')

    <h2 class="fw-bold mb-4">Gestion des commandes</h2>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th class="ps-3">N°</th>
                        <th>Client</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Statut</th>
                        <th class="pe-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td class="ps-3">#{{ $order->id }}</td>
                            <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                            <td>{{ $order->created_at->format('d/m/Y') }}</td>
                            <td class="fw-semibold">{{ $order->total }} MAD</td>
                            <td>
                                @php
                                    $statusColors = [
                                        'en_attente' => 'warning',
                                        'confirmée' => 'info',
                                        'expédiée' => 'primary',
                                        'livrée' => 'success',
                                        'annulée' => 'danger',
                                    ];
                                @endphp
                                <span class="badge rounded-pill bg-{{ $statusColors[$order->status] ?? 'secondary' }}">
                                    {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                </span>
                            </td>
                            <td class="pe-3">
                                <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-outline-dark">Voir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">{{ $orders->links() }}</div>

@endsection