<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .register-box {
      max-width: 500px;
      margin: 80px auto;
      padding: 30px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .register-box h2 {
      margin-bottom: 20px;
    }
    .btn-primary {
      width: 100%;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="register-box">
      <h2 class="text-center fw-bold">Masuk</h2>
      <form action="/login" method="POST">
        @csrf
        
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <!-- <button type="submit" class="btn btn-primary">Masuk</button> -->
        <a href="/homepage" class="btn btn-primary" style="margin-bottom: 20px;">Masuk Sebagai Siswa</a>
        <a href="/teacher-dashboard" class="btn btn-primary">Masuk Sebagai Guru</a>
      </form>
      
      <p class="mt-3 text-center">Belum punya akun? <a href="/register">Daftar di sini</a></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
