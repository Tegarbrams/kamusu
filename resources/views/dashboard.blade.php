<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'KAMUSU')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @stack('styles')
</head>
<body>

    {{-- HEADER --}}
    <!-- resources/views/partials/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" style="position: fixed; top: 0; width: 100%; z-index: 1001;">
    <div class="container-fluid">
        <!-- Logo di pojok kiri -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('asset/logo.png') }}" alt="Logo" height="40" class="me-2">
            <strong>KAMUSU</strong>
        </a>

        <!-- Hamburger button untuk mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar items -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="d-flex">
        {{-- SIDEBAR --}}
        @include('dashboard.sidebar')

        {{-- MAIN CONTENT --}}
        <main style="margin-left: 240px; width: calc(100% - 240px); min-height: 100vh; padding-top: 76px;">
            <div class="container-fluid p-4">
                <h1>SELAMAT DATANG DI DASHBOARD</h1>
            </div>
        </main>
    </div>

    {{-- FOOTER --}}
    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>