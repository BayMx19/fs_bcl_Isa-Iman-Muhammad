<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin BCL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-brand { font-weight: bold; color: #1e90ff; }
        .card { border-radius: 1rem; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .btn-primary { background-color: #1e90ff; border: none; }
        .btn-primary:hover { background-color: #0d6efd; }
        table th, table td { vertical-align: middle; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="">BCL Admin</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('admin.jenis-kendaraan.index') }}" class="nav-link">Jenis Kendaraan</a></li>
                <li class="nav-item"><a href="{{ route('admin.armada.index') }}" class="nav-link">Armada</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pengiriman</a></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm btn-outline-danger">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
