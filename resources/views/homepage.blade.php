<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informatika Pak Yudi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    
    <style>

      :root {
        --font-main: 'Poppins', sans-serif;
        --font-weight-regular: 400;
        --font-weight-semibold: 600;
        --font-weight-bold: 700;
        --font-weight-extrabold: 800;

        --font-size-xs: 1rem;      /* 16px */
        --font-size-sm: 1.25rem;   /* 20px */
        --font-size-md: 1.5rem;    /* 24px */
        --font-size-lg: 2rem;      /* 32px */
        --font-size-xl: 2.5rem;    /* 40px */
        --font-size-xxl: 3rem;     /* 48px */

        --color-primary: #27374D;
        --color-secondary: #3D5DED;
        --color-bg: #f8f9fc;
        --color-text: #111;
        --color-subtext: #555;
      }

      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        font-family: var(--font-main); /* Ganti font default ke Poppins */
      }

      body {
        background-color: var(--color-bg); 
        padding-top: 0;
        color: var(--color-text);
      }


      main {
        flex: 1;
      }


      .hero3 {
  position: relative;
  height: 80vh;
  background: url('/assets/image/hero.jpg') no-repeat center center/cover;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
}

.hero3-overlay {
  position: absolute;
  inset: 0;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero3-overlay h2 {
  color: white;
  font-family: var(--font-main);
  font-size: var(--font-size-xxl);
  font-weight: var(--font-weight-bold);
  text-shadow: 2px 2px 5px rgba(0,0,0,1);
}

.wave {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 120px;
  z-index: 2;
}

.menuchat-section {
  display: flex;
  align-items: center;
  gap: 60px;
  padding: 0 0 60px 0;
}

.images-wrapper {
  position: relative;
  width: fit-content;
  height: fit-content;
  margin-right: 5rem;
}

.image-bg {
  width: 500px;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.image-front {
  width: 400px;
  position: absolute;
  bottom: -20px;
  right: -20px;
  width: 70%;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  z-index: 1;
}

.text-content {
  width: max-content;
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
      max-width: 80%;
      /* background-color: blueviolet; */
    }

    .subhead {
      color: #ff6a00;
      font-weight: var(--font-weight-bold);
      letter-spacing: 1px;
      margin-bottom: 1rem;
    }

    .hero1-text h1 {
      font-size: var(--font-size-xxl);
      font-weight: var(--font-weight-extrabold);
      margin-bottom: 30px;
      padding-top: 30px;
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
      background: url('data:image/svg+xml;utf8,<svg width="100%" height="10" viewBox="0 0 100 10" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5 Q 5 0, 10 5 T 20 5 T 30 5 T 40 5 T 50 5 T 60 5 T 70 5 T 80 5 T 90 5 T 100 5" stroke="%233D5DED" stroke-width="3" fill="none"/></svg>') no-repeat;
      background-size: 100% 100%;
      z-index: -1;
    }

    /* .description {
      margin: 1rem 0 2rem 0;
      color: #555;
      font-size: var(--font-size-xs);
      max-width: 450px;
    } */

    .hero1-image img {
      max-width: 500px;
      width: 100%;
      max-height: 250px;
    }

      .btn-dark {
        font-weight: var(--font-weight-semibold);
        background-color: #27374D;
        border-style: none;
      }

      .btn-dark:hover {
        background-color: #526D82;
      }

      .hero {
        padding: 40px 20px;
        /* background-color: purple; */
      }

      .hero-img {
        width: 100%;
        height: 300px;
        background-color: #d9d9d9;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: var(--font-size-lg);
        color: #555;
        border-radius: 10px;
      }

      /* tambahan our fitur */
  .program-section {
    padding: 3rem;
    font-family: var(--font-main);
    background-color: #efefef;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
  }

  .program-section .container {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
    gap: 2rem;
    /* background-color: yellow; */
    padding: 0;
  }

  .program-intro {
    flex: 1 1 250px;
  }

  .program-intro h2 {
    font-size: var(--font-size-xl);
    font-weight: var(--font-weight-bold);
    line-height: 1.2;
    margin-bottom: 1rem;
    /* background-color: green; */
  }

  .program-intro p {
    font-size: var(--font-size-xs);
    color: #444;
    /* background-color: blue; */
  }

  .program-cards {
    display: flex;
    flex: 2 1 600px;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .program-card {
    flex: 1 1 200px;
    padding: 0 1.5rem;
    text-align: center;
    /* background-color: orange; */
  }

  .program-card i {
    /* color: red; */
    font-size: var(--font-size-xl);
  }

  .program-card img {
    width: 150px;
    margin-bottom: 1rem;
  }

  .program-card h3 {
    font-size: var(--font-size-sm);
    font-weight: var(--font-weight-semibold);
    margin-bottom: 0.5rem;
  }

  .program-card p {
    font-size: var(--font-size-xs);
    color: #555;
  }

      .kelas-section {
        background-color: #f8f9fc;
        padding: 0px 20px;
        margin-bottom: 40px;
      }

      .card-course {
        height: 180px;
        object-fit: cover;
        width: 250px;
        border-radius: 12px;
        transition: transform 0.6s;
        margin-right: 12px;
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

      .card-body {
        background-color: #3D5DED;
        border-radius: 8px;
        min-height: 100px;
      }

      .card-body h5 {
        font-family: var(--font-main);
        font-weight:var(--font-weight-semibold);
        font-size:var(--font-size-md);
      }

      .card-body p {
        margin: 0;
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
        font-size: var(--font-size-);
      }
    </style>
  </head>

  <body>
    @include('navbar')

    <main>

          <!-- hero image -->
      <section class="hero3">
  <div class="hero3-overlay">
    <h2>INFORMATIKA<br>SMAN 1 KALIDAWIR</h2>
  </div>
  <svg class="wave" viewBox="0 0 1440 120" preserveAspectRatio="none">
    <path d="M0,60 C120,20 240,100 360,60 C480,20 600,100 720,60 C840,20 960,100 1080,60 C1200,20 1320,100 1440,60 L1440,120 L0,120 Z" fill="#0f172a"/>
    <path d="M0,100 C120,60 240,140 360,100 C480,60 600,140 720,100 C840,60 960,140 1080,100 C1200,60 1320,140 1440,100 L1440,160 L0,120 Z" fill="#f8f9fc"/>
  </svg>
</section>

      <section class="hero container">
<section class="menuchat-section">
  <div class="images-wrapper">
    <img src="/assets/image/hero.jpg" class="image-bg" />
    <img src="/assets/image/kecil.jpg" class="image-front" />
  </div>
  <div class="text-content">
              <div class="hero1">
            <div class="hero1-text">
              <!-- <p class="subhead">INFORMATIKA</p> -->
              <h1>
                Kamu bisa belajar dengan AI!
                <!-- <span class="highlight">by top teachers.</span> -->
              </h1>
              <div class="hero-text">
                <p class="text-muted" style="margin: 1rem 0 2rem 0; color: #555; font-size: var(--font-size-xs); max-width: 450px;">
                  Kamu bisa mencari materi tambahan, menemukan referensi baru, penjelasan yang lebih lengkap, hingga contoh soal dan informasi terkini yang mendukung pembelajaranmu. Temukan pengalaman belajar yang menyenangkan dan penuh wawasan bareng AI!
                </p>
                <a href="{{ url('/chatbot1') }}" class="btn btn-dark" style="background-color: #0F172A;">
                  Yuk belajar! <span class="ms-1">➔</span>
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

        <!-- tambahan fitur -->
      <section class="program-section">
  <div class="container">
    <div class="program-intro">
      <h2>Apa yang bisa kamu lakukan disini?</h2>
      <p>Kamu dapat temukan cara baru untuk belajar Informatika yang mudah, fleksibel, dan menyenangkan.</p>
    </div>
    <div class="program-cards">
      <div class="program-card">
        <img src="/assets/icon/ChatBot.svg" alt="chat bot">
        <h3>BotTIK</h3>
        <p>Chat bot membantu belajar secara mandiri dan menjawab pertanyaan seputar materi kapan saja.</p>
      </div>
      <div class="program-card">
        <img src="/assets/icon/Materi.svg" alt="materi">
        <h3>Baca Materi</h3>
        <p>Kamu dapat mengakses materi pelajaran Informatika yang disusun sistematis dan mudah dipahami.</p>
      </div>
      <div class="program-card">
        <img src="/assets/icon/Tugas.svg" alt="tugas">
        <h3>Penugasan</h3>
        <p>Platform ini memudahkanmu untuk mengunggah dan mengumpulkan tugas secara langsung kapan saja.</p>
      </div>
    </div>
  </div>
</section>
      </section>      

      <section class="kelas-section container">
        <div class="d-flex justify-content-between align-items-baseline" style="margin-bottom: 10px;">
          <h3 class="mb-0" style="font-family: var(--font-main); color: var(--color-text); font-weight: var(--font-weight-semibold);">Materi</h3>
          <a href="/course" style="text-decoration:none !important;">
            <h6 class="mb-0 text-muted" style="font-size: var(--font-size-xs); cursor: pointer; ">Lihat Semua ➔</h6>
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
  <h3 class="mb-4" style="font-family: var(--font-main); color: var(--color-text); font-weight: var(--font-weight-semibold);">Jadwal Belajar Mingguan</h3>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
    <div class="col">
      <div class="card text-white">
        <div class="card-body">
          <h5>Minggu 1</h5>
          <p style="font-size:var(--font-size-xs);">Bab 1: Pengenalan Informatika</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card text-white">
        <div class="card-body">
          <h5>Penugasan</h5>
          <p style="font-size:var(--font-size-xs); margin-bottom: 0.5rem;">Bab 1: Pengenalan Informatika</p>
          <p>Batas Waktu: 20 April 2025</p>
        </div>
      </div>
    </div>
  </div>
    </section>

    </main>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
