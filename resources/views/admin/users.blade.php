@extends('layouts.admin')

@section('title', 'Utilisateurs')

@section('content')

    <h2 class="fw-bold mb-4">Liste des clients</h2>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th class="ps-3">Nom</th>
                        <th>Email</th>
                        <th>Commandes</th>
                        <th class="pe-3">Inscrit le</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="ps-3 fw-semibold">{{ $user->name }}</td>
                            <td class="text-muted">{{ $user->email }}</td>
                            <td>
                                <span class="badge rounded-pill bg-light text-dark border">{{ $user->orders()->count() }}</span>
                            </td>
                            <td class="pe-3 text-muted">{{ $user->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection