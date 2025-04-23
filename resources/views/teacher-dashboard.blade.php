<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
      body {
        background-color: #f8f9fc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        min-height: 100%;
        transition: padding-left 0.3s ease;
      }
      body.sidebar-collapsed {
        width: 100vw;
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
      .kelas-section {
        position: relative;
        background-color: #f8f9fc;
        margin: 3% 3% 3% 45vh;
        transition: margin-left 0.3s ease;
        flex: 1;
        width: auto;
        max-width: 100vw;
      }
      body.sidebar-collapsed .kelas-section {
        margin: 3%;
      }
      .main {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        background-color: #f8f9fc;
      }
      .main-content {
        flex: 1;
        max-width: 100%;
        background-color: #f8f9fc;
      }
      body.sidebar-collapsed .main-content{
          width: 100%;
          transition: margin-left 0.3s ease;
      }
      .profile {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 12px;
        padding: 1vh 0;
      }
      .profile img {
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #cbd5e1;
      }
      .topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .card-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        flex-wrap: wrap;
        position: relative;
        height: max-content;
        overflow: hidden;
        border-radius: 10px;
        cursor: pointer;
        padding-bottom: 5vh;
      }
      .card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 1.5rem;
        min-width: 300px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      }
      .card small {
        display: inline-block;
        background-color: #f1f5f9;
        padding: 4px 10px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        color: #334155;
        margin-bottom: 10px;
        width: max-content;
      }
      .card h4 {
        margin: 0 0 12px 0;
        font-size: 16px;
        font-weight: 700;
        color: #0f172a;
        border-bottom: 1px solid #e2e8f0;
        padding-bottom: 8px;
      }
      .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem 2rem;
        margin-top: 1rem;
      }
      
      .info-grid div {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      .info-grid div span {
        font-size: 18px;
        font-weight: 700;
        color: #0f172a;
      }

      .info-grid div label {
        font-size: 14px;
        color: #64748b;
      }

      .info-boxes {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
      }
      .info-box {
        background: white;
        border-radius: 10px;
        padding: 1rem;
        width: 15vw;
        text-align: center;
        border: 1px solid #e2e8f0;
      }
      .badge {
        font-size: 12px;
        background: #f87171;
        color: white;
        border-radius: 6px;
        padding: 0.2rem 0.5rem;
        margin-top: 0.5rem;
        display: inline-block;
      }
      .badge.yellow {
        background: #facc15;
        color: black;
      }
    </style>
  </head>

  <body>
    
    @include('teacher-sidebar')

    <section class="kelas-section container">
      <div class="wrapper">
      <!-- <main class="main"> -->
        <div class="main-content">
          <div class="profile" style="font-size: large; font-weight: 600;">
            <a href="/teacher-profile" style="text-decoration: none; color:#0f172a">Teacher</a><span><img src="" alt=""></span></div>
          <div class="topbar">        
            <div>
              <h2>Dashboard</h2>
              <p>Jumlah Siswa</p>
            </div>
          </div>
          <div class="info-boxes">
            <div class="info-box">
              <div style="font-size: 20px; font-weight: bold;">50</div>
              <div>Laki-laki</div>
              <div class="badge">Aktif</div>
            </div>
            <div class="info-box">
              <div style="font-size: 20px; font-weight: bold;">50</div>
              <div>Perempuan</div>
              <div class="badge yellow">Aktif</div>
            </div>
          </div>
          <h3>Materi</h3>
          <div class="card-container">
            <div class="card">
              <small>Minggu ke-1</small>
              <h4>Bab 1 - Informatika 1</h4>
              <div class="info-grid">
                <div><span>2</span><label>File</label></div>
                <div><span>2</span><label>Penugasan</label></div>
                <div><span>25</span><label>Ditugaskan</label></div>
                <div><span>7</span><label>Selesai</label></div>
              </div>
            </div>
            <div class="card">
              <small>Minggu ke-2</small>
              <h4>Bab 2 - Informatika 2</h4>
              <div class="info-grid">
                <div><span>2</span><label>File</label></div>
                <div><span>2</span><label>Penugasan</label></div>
                <div><span>25</span><label>Ditugaskan</label></div>
                <div><span>7</span><label>Selesai</label></div>
              </div>
            </div>
            <div class="card">
              <small>Minggu ke-3</small>
              <h4>Bab 3 - Informatika 3</h4>
              <div class="info-grid">
                <div><span>2</span><label>File</label></div>
                <div><span>2</span><label>Penugasan</label></div>
                <div><span>25</span><label>Ditugaskan</label></div>
                <div><span>7</span><label>Selesai</label></div>
              </div>
            </div>
            <div class="card">
              <small>Minggu ke-3</small>
              <h4>Bab 3 - Informatika 3</h4>
              <div class="info-grid">
                <div><span>2</span><label>File</label></div>
                <div><span>2</span><label>Penugasan</label></div>
                <div><span>25</span><label>Ditugaskan</label></div>
                <div><span>7</span><label>Selesai</label></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('teacher-footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      function toggleSidebar() {
        document.body.classList.toggle("sidebar-collapsed");

        const icon = document.getElementById("toggle-icon");
        if (document.body.classList.contains("sidebar-collapsed")) {
          icon.classList.replace("bi-x-lg", "bi-list");
        } else {
          icon.classList.replace("bi-list", "bi-x-lg");
        }
      }
    </script>

  </body>
</html>
