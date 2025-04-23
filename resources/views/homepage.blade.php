<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informatika Pak Yudi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
      }

      body {
        background-color: #f8f9fc; 
        padding-top: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      main {
        flex: 1;
      }

      .btn-dark {
        font-weight: 600;
        background-color: #27374D;
        border-style: none;
      }

      .btn-dark:hover {
        background-color: #526D82;
      }

      .hero {
        padding: 60px 20px;
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

      .card {
        border: none;
        background-color: #f8f9fc; 
        margin-top: 0px;
      }

      .card-course {
        height: 180px;
        object-fit: cover;
        width: 250px;
        border-radius: 12px;
        transition: transform 0.6s;
        margin-right: 12px;
      }

      .card img{
        border-radius: 12px;
      }

      .card img:hover {
        transform: rotateY(180deg);
        transition: transform ease;
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

      .footer {
        background-color: #0F172A;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
      }

      .footer p {
        margin: 0;
        font-size: 14px;
      }
    </style>
  </head>

  <body>
    @include('navbar')

    <main>
      <section class="hero container">
        <div class="row align-items-center mb-3">
          <!-- Gambar Informatika -->
          <div class="col-md-6 mb-3 mb-md-6" >
            <div class="card" >
              <img src="https://i.pinimg.com/736x/57/46/8d/57468d8387042651790a73ade6a0d224.jpg" alt="gambar informatika" />
            </div>
          </div>

          <!-- Teks Informatika -->
          <div class="col-md-6">
            <div class="card">
              <h2 class="fw-bold" style= "margin-left: 30px">Apa sih Informatika?</h2>
              <p class="text-muted" style= "margin-left: 30px">Informatika adalah pembelajaran yang mengajarkan cara berpikir logis, kreatif, dan sistematis dalam menyelesaikan masalah menggunakan teknologi digital.</p>
            </div>
          </div>
        </div>

        <!-- Bagian AI -->
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="hero-text">
              <h2 class="fw-bold">Kamu bisa belajar dengan AI</h2>
              <p class="text-muted">
                Kamu bisa mencari materi tambahan, menemukan referensi baru, penjelasan yang lebih lengkap, hingga contoh soal dan informasi terkini yang mendukung pembelajaranmu. Temukan pengalaman belajar yang menyenangkan dan penuh wawasan bareng AI!
              </p>
              <a href="{{ url('/chatbot1') }}" class="btn btn-dark">
                Yuk belajar! <span class="ms-1">➔</span>
              </a>
            </div>
          </div>
          <div class="col-md-6 text-center">
            <img class="hero-img mt-4 mt-md-0" src="https://i.pinimg.com/736x/57/46/8d/57468d8387042651790a73ade6a0d224.jpg" alt="">
          </div>
        </div>
      </section>

      <section class="kelas-section container">
        <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 10px;">
          <h5 class="mb-0"><strong>Materi</strong></h5>
          <a href="/course">
            <h6 class="mb-0 text-muted" style="font-size: 0.9rem; cursor: pointer; text-decoration:underline;">Lihat Semua ➔</h6>
          </a>
        </div>

        <div class="kelas-scroll-wrapper d-flex overflow-auto py-2">
          <div class="card-container">
            <img class="card-course" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
            <div class="card-overlay">Ini adalah deskripsi</div>
          </div>
          <div class="card-container">
            <img class="card-course" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
            <div class="card-overlay">Ini adalah deskripsi</div>
          </div>
          <div class="card-container">
            <img class="card-course" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
            <div class="card-overlay">Ini adalah deskripsi</div>
          </div>
          <div class="card-container">
            <img class="card-course" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
            <div class="card-overlay">Ini adalah deskripsi</div>
          </div>
          <div class="card-container">
            <img class="card-course" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
            <div class="card-overlay">Ini adalah deskripsi</div>
          </div>
          <div class="card-container">
            <img class="card-course" src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="">
            <div class="card-overlay">Ini adalah deskripsi</div>
          </div>
        </div>
      </section>

  <section class="container my-5">
  <h3 class="mb-4 fw-bold">Jadwal Belajar Mingguan</h3>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
    <div class="col">
      <div class="card text-white bg-primary h-100">
        <div class="card-body">
          <h5 class="card-title">Minggu 1</h5>
          <p class="card-text">Bab 1: Pengenalan Informatika</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card text-white bg-success h-100">
        <div class="card-body">
          <h5 class="card-title">Penugasan</h5>
          <p class="card-text">Bab 1: Pengenalan Informatika</p>
          <p class="card-text">Batas Waktu: 20 April 2025</p>
        </div>
      </div>
    </div>
    </section>

    </main>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
