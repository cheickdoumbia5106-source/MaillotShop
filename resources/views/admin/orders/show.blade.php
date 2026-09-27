@extends('layouts.admin')

@section('title', 'Commande #' . $order->id)

@section('content')

    <h2 class="fw-bold mb-4">Commande #{{ $order->id }}</h2>

    <div class="row g-4">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="ps-3">Produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th class="pe-3">Sous-total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderItems as $item)
                                <tr>
                                    <td class="ps-3 d-flex align-items-center gap-2">
                                        <img src="{{ asset($item->product->image) }}" style="width:50px;height:50px;object-fit:cover;" class="rounded-3">
                                        {{ $item->product->name }}
                                    </td>
                                    <td>{{ $item->price }} MAD</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td class="pe-3 fw-semibold">{{ $item->price * $item->quantity }} MAD</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <h5 class="text-end mt-3">Total : <span class="fw-bold" style="color:#16213e;">{{ $order->total }} MAD</span></h5>
        </div>

        <div class="col-md-5">
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Client</h5>
                    <p class="mb-1"><strong>{{ $order->first_name }} {{ $order->last_name }}</strong></p>
                    <p class="mb-1 text-muted">{{ $order->phone }}</p>
                    <p class="mb-1 text-muted">{{ $order->address }}, {{ $order->city }}</p>
                    @if ($order->user)
                        <p class="text-muted small mb-0">Email : {{ $order->user->email }}</p>
                    @endif
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Statut de la commande</h5>
                    <form method="POST" action="{{ route('admin.orders.updateStatus', $order) }}">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="form-select mb-3">
                            @foreach (['en_attente' => 'En attente', 'confirmée' => 'Confirmée', 'expédiée' => 'Expédiée', 'livrée' => 'Livrée', 'annulée' => 'Annulée'] as $value => $label)
                                <option value="{{ $value }}" {{ $order->status == $value ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-dark w-100">Mettre à jour le statut</button>
                    </form>
                </div>
            </div>

            <a href="{{ route('admin.orders.index') }}" class="btn btn-link mt-3 ps-0">&larr; Retour aux commandes</a>
        </div>
    </div>

@endsection