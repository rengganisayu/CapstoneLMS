<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - LMS Informatika</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }
    body {
      margin: 0;
      display: flex;
      flex-direction: row;
      height: 100vh;
      background: #f8f9fc;
    }
    .sidebar {
      width: 220px;
      background: #0f172a;
      color: white;
      display: flex;
      flex-direction: column;
      padding: 1rem;
    }
    .sidebar h2 {
      color: white;
      margin-bottom: 2rem;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 0.75rem 1rem;
      margin: 0.25rem 0;
      display: block;
      border-radius: 8px;
    }
    .sidebar a:hover,
    .sidebar a.active {
      background: #1e293b;
    }
    .main {
      flex: 1;
      display: flex;
      flex-direction: column;
      padding: 2rem;
      min-height: 100vh;
      box-sizing: border-box;
    }
    .main-content {
      flex: 1;
    }
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }
    .card-container {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
    }
    .card {
      background: white;
      border: 1px solid #e2e8f0;
      border-radius: 12px;
      padding: 1.5rem;
      width: 300px;
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
      text-align: left;
    }
    .info-grid div span {
      display: block;
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
      width: 120px;
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
    footer {
      text-align: center;
      padding: 1rem;
      font-size: 12px;
      color: #64748b;
    }
  </style>
</head>
<body>
  <aside class="sidebar">
    <h2>Informatika</h2>
    <a class="active" href="#">Dashboard</a>
    <a href="course.html">Courses</a>
    <a href="#">Manajemen Siswa</a>
    <a href="#">Setting</a>
  </aside>
  <main class="main">
    <div class="main-content">
      <div class="topbar">
        <div>
          <h2>Dashboard</h2>
          <p>Jumlah Siswa</p>
        </div>
        <div>Teacher <div style="display:inline-block; width:30px; height:30px; border-radius:50%; background:#cbd5e1; margin-left:px;"></div></div>
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
      </div>
    </div>
    <footer>
      &copy; 2025 LMS Informatika | Dikembangkan untuk Kelas X SMAN 1 Kalidawir
    </footer>
  </main>
</body>
</html>