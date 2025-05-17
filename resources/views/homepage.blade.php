<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informatika Pak Yudi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    
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
        font-family: 'Helvetica Neue', sans-serif;
      color: #111;
      }

      main {
        flex: 1;
      }

      .hero1 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0;
      flex-wrap: wrap;
      /* background-color: red; */
      margin-bottom: 60px;
    }

    .hero1-text {
      max-width: 50%;
      /* background-color: blueviolet; */
    }

    .subhead {
      color: #ff6a00;
      font-weight: 700;
      letter-spacing: 1px;
      margin-bottom: 1rem;
    }

    .hero1-text h1 {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 30px;
      line-height: 1.2;
    }

    .highlight {
      position: relative;
      display: inline-block;
      z-index: 1;
    }

    .highlight::after {
      content: "";
      position: absolute;
      left: 180px;
      bottom: -20px;
      width: 57%;
      height: 0.6em;
      background: url('data:image/svg+xml;utf8,<svg width="100%" height="10" viewBox="0 0 100 10" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5 Q 5 0, 10 5 T 20 5 T 30 5 T 40 5 T 50 5 T 60 5 T 70 5 T 80 5 T 90 5 T 100 5" stroke="blue" stroke-width="3" fill="none"/></svg>') no-repeat;
      background-size: 100% 100%;
      z-index: -1;
    }

    .description {
      margin: 1rem 0 2rem 0;
      color: #555;
      font-size: 1rem;
      max-width: 450px;
    }

    .hero1-image img {
      max-width: 500px;
      width: 100%;
      max-height: 250px;
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
        /* background-color: yellow; */
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

      /* tambahan our fitur */
  .program-section {
    padding: 4rem 1rem 0 1rem;
    font-family: 'Poppins', sans-serif;
  }

  .program-section .container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
    gap: 2rem;
  }

  .program-intro {
    flex: 1 1 250px;
  }

  .program-intro h2 {
    font-size: 2.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1rem;
  }

  .highlight-title {
    position: relative;
    display: inline-block;
  }

  .highlight-title::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0.1em;
    width: 100%;
    height: 0.4em;
    background: #ffa726;
    z-index: -1;
  }

  .program-intro p {
    font-size: 1rem;
    color: #444;
  }

  .program-cards {
    display: flex;
    flex: 2 1 600px;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 2rem;
  }

  .program-card {
    flex: 1 1 200px;
    text-align: center;
  }

  .program-card i {
    /* color: red; */
    font-size: 2.5rem;
  }

  .program-card img {
    width: 70px;
    margin-bottom: 1rem;
  }

  .program-card h3 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
  }

  .program-card p {
    font-size: 0.95rem;
    color: #555;
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
        <!-- <div class="row align-items-center mb-3"> -->
          <!-- Gambar Informatika -->
            <!-- <div class="card" >
              <img src="https://i.pinimg.com/736x/57/46/8d/57468d8387042651790a73ade6a0d224.jpg" alt="gambar informatika" />
            </div>
          </div> -->

          <!-- Teks Informatika -->
          <!-- <div class="col-md-6">
            <div class="card">
              <h2 class="fw-bold" style= "margin-left: 30px">Apa sih Informatika?</h2>
              <p class="text-muted" style= "margin-left: 30px">Informatika adalah pembelajaran yang mengajarkan cara berpikir logis, kreatif, dan sistematis dalam menyelesaikan masalah menggunakan teknologi digital.</p>
            </div>
          </div> -->
          <div class="hero1">
    <div class="hero1-text">
      <p class="subhead">INTRODUCING INTERACTIVE</p>
      <h1>
        Learning courses <br />
        <span class="highlight">by top teachers.</span>
      </h1>
      <p class="description">
        Choose from over 4,000 courses on topics like cartoon design, graphic
        design, fashion design, and much more.
      </p>
    </div>

    <div class="hero1-image">
      <!-- Ganti src ini ke gambar kamu -->
      <img src="https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg" alt="Course illustration" />
    </div>
    </div>

        <!-- Bagian AI -->
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="hero-text">
              <h2 class="fw-bold">Kamu bisa belajar dengan AI</h2>
              <p class="text-muted" style="margin: 1rem 0 2rem 0; color: #555; font-size: 1rem; max-width: 450px;">
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

        <!-- tambahan fitur -->
      <section class="program-section">
  <div class="container">
    <div class="program-intro">
      <h2>Fitur<br><span>Kita</span></h2>
      <p>Kita menawarkan beberapa fitur<br>Coba di cek.</p>
    </div>
    <div class="program-cards">
      <div class="program-card">
      <i class="bi bi-robot"></i> 
        <h3>BotTiK</h3>
        <p>kamu bisa chat bersama bot</p>
      </div>
      <div class="program-card">
        <img src="https://cdn-icons-png.flaticon.com/512/1041/1041916.png" alt="materi">
        <h3>Baca Materi</h3>
        <p>Learn how to shape your career with sessions!</p>
      </div>
      <div class="program-card">
        <img src="https://cdn-icons-png.flaticon.com/512/3030/3030333.png" alt="tugas">
        <h3>Penugasan</h3>
        <p>kerjain tugas yaaaaaaaaaaaa!</p>
      </div>
    </div>
  </div>
</section>
      </section>

      

      <section class="kelas-section container">
        <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 10px;">
          <h3 class="mb-0"><strong>Materi</strong></h3>
          <a href="/course" style="text-decoration:none !important;">
            <h6 class="mb-0 text-muted" style="font-size: 0.9rem; cursor: pointer; ">Lihat Semua ➔</h6>
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
