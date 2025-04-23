<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar dengan AI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        background-color: #f8f9fc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      .btn-dark {
        font-weight: 600;
        background-color: #27374D;
        border-style: none;
      }
    .btn-dark:hover {
        background-color: #526D82;
        border-style: none;
      }
      .hero {
        padding: 60px 20px;
      }
      .hero-text {
        max-width: 500px;
      }
      .hero-img {
        width: 100%;
        height: 300px;
        background-color: #d9d9d9;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: #555;
        border-radius: 10px;
      }
      .kelas-section {
        background-color: #f8f9fc;
        padding: 0px 20px;
        margin-bottom: 40px;
      }
      .kelas-section h5 {
        margin-bottom: 20px;
      }
      .kelas-card {
        height: 150px;
        background-color: #d9d9d9;
        border-radius: 6px;
      }
      .card-img {
        width: 250px;
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
      }
      .card-container {
        position: relative;
        margin: 0 5px;
        cursor: pointer;
      }
      .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 250px;
        height: 180px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        text-align: center;
        padding: 10px;
        border-radius: 10px;
      }
      .card-container:hover .card-overlay {
        opacity: 1;
      }
    </style>
  </head>

  <body>
  @include('navbar')
    <section class="hero container d-flex flex-column flex-md-row align-items-center justify-content-between">
      <div class="hero-text">
        <h2 class="fw-bold">Kamu bisa belajar dengan AI</h2>
        <p class="text-muted">
          Kamu bisa mencari materi tambahan, menemukan referensi baru, penjelasan yang lebih lengkap, hingga contoh soal dan informasi terkini yang mendukung pembelajaranmu. Temukan pengalaman belajar yang menyenangkan dan penuh wawasan bareng AI!
        </p>
        <a href="{{ url('/chatbot') }}" class="btn btn-dark">
          Yuk belajar! <span class="ms-1">➔</span>
        </a>
      </div>
      <div >
        <img class="hero-img mt-4 mt-md-0" src="https://i.pinimg.com/736x/57/46/8d/57468d8387042651790a73ade6a0d224.jpg" alt="">
      </div>
    </section>

    <section class="kelas-section container">
      <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 10px;">
        <h5 class="mb-0"><strong>Materi</strong></h5>
        <a href="/course"><h6 class="mb-0 text-muted" style="font-size: 0.9rem; cursor: pointer; text-decoration:underline;">Lihat Semua ➔</h6></a>
      </div>
      
      <!-- Scroll wrapper -->
      <div class="kelas-scroll-wrapper d-flex overflow-auto py-2">
        <div class="card-container">
          <img class="card-img" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
          <div class="card-overlay">Ini adalah deskripsi</div>
        </div>
        <div class="card-container">
          <img class="card-img" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
          <div class="card-overlay">Ini adalah deskripsi</div>
        </div>
        <div class="card-container">
          <img class="card-img" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
          <div class="card-overlay">Ini adalah deskripsi</div>
        </div>
        <div class="card-container">
          <img class="card-img" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
          <div class="card-overlay">Ini adalah deskripsi</div>
        </div>
        <div class="card-container">
          <img class="card-img" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
          <div class="card-overlay">Ini adalah deskripsi</div>
        </div>
        <div class="card-container">
          <img class="card-img" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
          <div class="card-overlay">Ini adalah deskripsi</div>
        </div>
      </div>

      <div class="card-overlay">
        Ini adalah deskripsi yang muncul saat di-hover.
      </div>
    </section>

  @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
