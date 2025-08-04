<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar | KAMUSU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="text-center mb-4">Pendaftaran Anggota</h3>
            <form role="form text-left" method="POST" action="{{ route('daftar') }}">
                @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama lengkap Anda">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Nomor HP</label>
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="08xxxxxxxxxx" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email / Username</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="nama@example.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="••••••••">
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-success">Daftar</button>
              </div>
            </form>
            <p class="text-center mt-3 mb-0">
              Sudah punya akun? <a href="login.html">Login di sini</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
