<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #c2c7d0;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            font-size: 1.1rem;
        }
        .sidebar a:hover, .sidebar a.active {
            background: #495057;
            color: #fff;
            border-left: 4px solid #f7b500;
        }
        .navbar-custom {
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar col-md-2 d-none d-md-block">
            <h4 class="text-center fw-bold text-white mb-4">Admin Panel</h4>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.artikel.index') }}" class="{{ request()->routeIs('admin.artikel.*') ? 'active' : '' }}">Artikel</a>
            <a href="{{ route('admin.company_profile.index') }}" class="{{ request()->routeIs('admin.company_profile.*') ? 'active' : '' }}">Profil Perusahaan</a>
            <a href="{{ route('admin.product.index') }}" class="{{ request()->routeIs('admin.product.*') ? 'active' : '' }}">Produk / Layanan</a>
            <a href="{{ route('admin.gallery.index') }}" class="{{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">Galeri</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-custom py-3 px-4">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1 fw-bold text-dark">@yield('title')</span>
                    <div class="d-flex align-items-center">
                        <span class="me-3">Halo, {{ Auth::user()->name }}</span>
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                        </form>
                    </div>
                </div>
            </nav>

            <div class="container-fluid p-4">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
