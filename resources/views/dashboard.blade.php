<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mon compte
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
                <h3 class="text-lg font-semibold mb-2">Bonjour {{ auth()->user()->name }} 👋</h3>
                <p class="text-gray-600">Bienvenue sur votre espace MaillotShop.</p>
                <div class="mt-4 flex gap-3">
                    <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-800 text-white rounded">Voir la boutique</a>
                    <a href="{{ route('orders.index') }}" class="px-4 py-2 border border-gray-800 text-gray-800 rounded">Toutes mes commandes</a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Dernières commandes</h3>

                @if ($orders->count() > 0)
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b">
                                <th class="py-2">N°</th>
                                <th class="py-2">Date</th>
                                <th class="py-2">Total</th>
                                <th class="py-2">Statut</th>
                                <th class="py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr class="border-b">
                                    <td class="py-2">#{{ $order->id }}</td>
                                    <td class="py-2">{{ $order->created_at->format('d/m/Y') }}</td>
                                    <td class="py-2">{{ $order->total }} MAD</td>
                                    <td class="py-2">{{ ucfirst(str_replace('_', ' ', $order->status)) }}</td>
                                    <td class="py-2">
                                        <a href="{{ route('orders.show', $order) }}" class="text-blue-600 underline">Détails</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-gray-600">Vous n'avez pas encore passé de commande.</p>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>