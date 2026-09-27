<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f5f7;
        }
        .admin-sidebar {
            background: linear-gradient(180deg, #0b1120, #16213e);
            min-height: 100vh;
            width: 240px;
        }
        .admin-sidebar .nav-link {
            color: #cfd3dc;
            border-radius: 10px;
            padding: 10px 14px;
            margin-bottom: 4px;
            font-size: 0.95rem;
        }
        .admin-sidebar .nav-link:hover,
        .admin-sidebar .nav-link.active {
            background-color: rgba(255,255,255,0.1);
            color: #fff;
        }
        .admin-sidebar form button.nav-link {
            width: 100%;
            text-align: left;
            border: none;
            background: none;
        }
        .card {
            border: none;
            border-radius: 14px;
        }
        .btn-dark {
            background-color: #16213e;
            border: none;
        }
        .btn-dark:hover {
            background-color: #0b1120;
        }
        table thead {
            background-color: #f1f3f6;
        }
    </style>
</head>
<body>

    <div class="d-flex">
        <nav class="admin-sidebar text-white p-3 d-flex flex-column">
            <h5 class="mb-4 px-2">⚽ Admin</h5>
            <ul class="nav flex-column flex-grow-1">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">📊 Dashboard</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">👕 Produits</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}">📦 Commandes</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}" href="{{ route('admin.users') }}">👤 Utilisateurs</a></li>
                <li class="nav-item mt-4"><a class="nav-link" href="{{ route('products.index') }}">&larr; Retour au site</a></li>
            </ul>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link">🚪 Déconnexion</button>
            </form>
        </nav>

        <main class="flex-fill p-4">
            @if (session('success'))
                <div class="alert alert-success rounded-4">{{ session('success') }}</div>
            @endif

            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>