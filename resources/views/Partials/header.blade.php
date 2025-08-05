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
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#program">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                 <!-- Dropdown Lainnya -->
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="lainnyaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Artikel
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="lainnyaDropdown">
                        <li><a class="dropdown-item" href="/struktur">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="/dokumentasi">Dokumentasi</a></li>
                        <li><a class="dropdown-item" href="#berita">Berita</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>