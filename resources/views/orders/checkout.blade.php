@extends('layouts.shop')

@section('title', 'Finaliser la commande')

@section('content')

    <h2 class="fw-bold mb-4">Finaliser la commande</h2>

    <div class="row g-4">
        <div class="col-md-7">
            <div class="bg-white rounded-4 shadow-sm p-4">
                <form method="POST" action="{{ route('orders.store') }}">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Prénom</label>
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" required>
                            @error('first_name') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Nom</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" required>
                            @error('last_name') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Téléphone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" required>
                            @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Adresse</label>
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" required>
                            @error('address') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-12">
                            <label class="form-label">Ville</label>
                            <input type="text" name="city" value="{{ old('city') }}" class="form-control" required>
                            @error('city') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <div class="alert alert-info rounded-3 mt-4">💵 Paiement à la livraison.</div>

                    <button type="submit" class="btn btn-dark btn-lg w-100">Valider la commande</button>
                </form>
            </div>
        </div>

        <div class="col-md-5">
            <div class="bg-white rounded-4 shadow-sm p-4">
                <h5 class="fw-bold mb-3">Récapitulatif</h5>
                <ul class="list-group list-group-flush mb-3">
                    @foreach ($cart as $item)
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <span>{{ $item['name'] }} x{{ $item['quantity'] }}</span>
                            <span>{{ $item['price'] * $item['quantity'] }} MAD</span>
                        </li>
                    @endforeach
                </ul>
                <h5 class="d-flex justify-content-between mb-0">
                    <span>Total</span>
                    <span style="color:#16213e;">{{ $total }} MAD</span>
                </h5>
            </div>
        </div>
    </div>

@endsection