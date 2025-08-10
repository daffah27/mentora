<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - Mentora</title>
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
      <div class="col-md-7">
        <div class="card p-4 bg-white text-dark">
          <div class="card-body">
            <h3 class="text-center mb-4 fw-bold text-primary">Daftar di Mentora</h3>
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" placeholder="Nama lengkap">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" placeholder="nama@email.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" placeholder="********">
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="********">
              </div>
              <div class="d-grid">
                {{-- <button type="submit" class="btn btn-primary btn-rounded">Daftar Sekarang</button> --}}
                <a href="/login" class="btn btn-primary btn-rounded">Daftar Sekarang</a>
              </div>
              <p class="text-center mt-3 small">Sudah punya akun? <a href="/login" class="text-primary">Masuk di sini</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
