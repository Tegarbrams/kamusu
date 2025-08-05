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
    @include('partials.header')

    <div class="d-flex">
        {{-- SIDEBAR --}}
        @include('partials.sidebar')

        {{-- MAIN CONTENT --}}
        <main style="margin-left: 240px; width: calc(100% - 240px); min-height: 100vh; padding-top: 76px;">
            <div class="container py-5">
                <h2 class="text-center mb-4 fw-bold">Struktur Organisasi</h2>
                <div class="row g-4 justify-content-center">
            
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="org-card">
                      <img src="{{ asset('asset/profil.jpeg') }}" alt="profil">
                      <h5>Nama Ketua</h5>
                      <p>Ketua Umum</p>
                    </div>
                  </div>
            
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="org-card">
                      <img src="{{ asset('asset/profil.jpeg') }}" alt="profil">
                      <h5>Nama Wakil</h5>
                      <p>Wakil Ketua</p>
                    </div>
                  </div>
            
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="org-card">
                      <img src="{{ asset('asset/profil.jpeg') }}" alt="profil">
                      <h5>Nama Sekretaris</h5>
                      <p>Sekretaris</p>
                    </div>
                  </div>
            
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="org-card">
                      <img src="{{ asset('asset/profil.jpeg') }}" alt="profil">
                      <h5>Nama Bendahara</h5>
                      <p>Bendahara</p>
                    </div>
                  </div>
                  
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="org-card">
                      <img src="{{ asset('asset/profil.jpeg') }}" alt="profil">
                      <h5>Nama Bendahara</h5>
                      <p>Bendahara</p>
                    </div>
                  </div>

                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="org-card">
                      <img src="{{ asset('asset/profil.jpeg') }}" alt="profil">
                      <h5>Nama Bendahara</h5>
                      <p>Bendahara</p>
                    </div>
                  </div>

                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="org-card">
                      <img src="{{ asset('asset/profil.jpeg') }}" alt="profil">
                      <h5>Nama Bendahara</h5>
                      <p>Bendahara</p>
                    </div>
                  </div>

                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="org-card">
                      <img src="{{ asset('asset/profil.jpeg') }}" alt="profil">
                      <h5>Nama Bendahara</h5>
                      <p>Bendahara</p>
                    </div>
                  </div>
            
                </div>
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



