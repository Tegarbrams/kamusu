<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | KAMUSU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="text-center mb-4">Masuk ke KAMUSU</h3>
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Email / Username</label>
                <input type="text" class="form-control" id="email" placeholder="nama@example.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" placeholder="••••••••">
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
            <p class="text-center mt-3 mb-0">
              Belum punya akun? <a href="register.html">Daftar di sini</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
