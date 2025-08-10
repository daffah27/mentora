<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Mentora</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #3171df, #0b2e6b);
      color: white;
      height: 100vh;
      display: flex;
      align-items: center;
    }
    .card {
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }
    .form-control {
      border-radius: 50px;
    }
    .btn-rounded {
      border-radius: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-4 bg-white text-dark">
          <div class="card-body">
            <h3 class="text-center mb-4 fw-bold text-primary">Login ke Mentora</h3>
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" placeholder="nama@email.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" placeholder="********">
              </div>
              <div class="d-grid">
                {{-- <button type="submit" class="btn btn-primary btn-rounded">Masuk</button> --}}
                <a href="/dashboard" class="btn btn-primary btn-rounded">Masuk</a>
              </div>
              <p class="text-center mt-3 small">Belum punya akun? <a href="/register" class="text-primary">Daftar sekarang</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
