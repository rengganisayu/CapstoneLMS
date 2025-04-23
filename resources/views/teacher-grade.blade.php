<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Penilaian Tugas - LMS Informatika</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      height: 100vh;
      background-color: #f8f9fc;
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
      flex: 1;
      display: flex;
      flex-direction: column;
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

    .topbar {
      padding: 20px 30px 10px;
    }

    .topbar h2 {
      font-size: 24px;
    }

    .tabs {
      display: flex;
      padding-left: 30px;
      border-bottom: 1px solid #e2e8f0;
      background-color: white;
    }

    .tab {
      padding: 12px 16px;
      font-weight: 500;
      border-bottom: 3px solid transparent;
      background-color: transparent;
      cursor: pointer;
      color: #64748b;
    }

    .tab.active {
      border-color: #3b82f6;
      color: #1e3a8a;
    }

    .content {
      display: flex;
      padding: 30px;
      gap: 40px;
      flex: 1;
    }

    .left-panel {
      flex: 1;
    }

    .left-panel h3 {
      font-size: 18px;
      margin-bottom: 1rem;
      color: #1e293b;
    }

    .student-list {
      background-color: white;
      border-radius: 10px;
      padding: 10px 0;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
    }

    .student-item {
      display: flex;
      justify-content: space-between;
      padding: 8px 20px;
      border-bottom: 1px solid #f1f5f9;
      align-items: center;
    }

    .student-name {
      color: #1e293b;
      font-size: 14px;
    }

    .score {
      text-align: center;
    }

    .nilai-wrapper {
      display: flex;
      align-items: baseline;
      gap: 4px;
      justify-content: center;
    }

    .nilai-input {
      border: none;
      border-bottom: 2px solid #10b981;
      outline: none;
      width: 30px;
      font-size: 14px;
      text-align: right;
      color: #10b981;
      background-color: transparent;
      padding: 2px 4px;
    }

    .outof {
      color: #10b981;
      font-weight: bold;
      font-size: 14px;
    }

    .tepat-waktu {
      display: block;
      margin-top: 4px;
      color: #10b981;
      font-size: 12px;
      text-align: center;
    }

    .right-panel {
      flex: 1.2;
    }

    .stats {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }

    .stat-box {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      flex: 1;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
    }

    .stat-box h2 {
      font-size: 28px;
      margin-bottom: 5px;
      color: #1e3a8a;
    }

    .stat-box span {
      color: #475569;
      font-size: 14px;
    }

    .files-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
      gap: 16px;
    }

    .file-card {
      background-color: white;
      border-radius: 10px;
      padding: 16px;
      text-align: center;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
    }

    .file-card img {
      width: 50px;
      margin-bottom: 8px;
    }

    .file-card span {
      font-size: 13px;
      color: #1e293b;
    }
    
    .btn-save {
    display: block;
    margin: 0 auto; /* Ini yang bikin tombol di tengah secara horizontal */
    padding: 8px 32px;
    font-size: 14.5px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    width: max-content;
    }

    .btn-save:hover {
      background-color: #45a049;
    }

  </style>
</head>
<body>
  @include('teacher-sidebar')
  <section class="kelas-section container">
    <div class="wrapper">
    <div class="main-content">
    <div class="topbar">
      <h2 style="font-size:x-large; font-weight:600;">Course</h2>
    </div>

    <div class="tabs">
      <a class="tab" href="/teacher-summary" style="text-decoration: none;">Ringkasan</a>
      <div class="tab active">Penilaian</div>
    </div>

    <div class="content">
      <!-- Left Panel -->
      <div class="left-panel">
        <h3>Bab 1 - Informatika 1</h3>
        <div class="student-list">
          <!-- Item Siswa (ulang sesuai jumlah siswa) -->
          <div class="student-item">
            <span class="student-name">Arsy Kurnia</span>
            <span class="score">
              <div class="nilai-wrapper">
                <input type="text" class="nilai-input" maxlength="3" />
                <span class="outof">/100</span>
              </div>
              <small class="tepat-waktu">Tepat waktu</small>
            </span>
          </div>
          <!-- Duplikat untuk siswa lainnya -->
          <div class="student-item">
            <span class="student-name">Arsy Kurnia</span>
            <span class="score">
              <div class="nilai-wrapper">
                <input type="text" class="nilai-input" maxlength="3" />
                <span class="outof">/100</span>
              </div>
              <small class="tepat-waktu">Tepat waktu</small>
            </span>
          </div>
          <div class="student-item">
            <span class="student-name">Arsy Kurnia</span>
            <span class="score">
              <div class="nilai-wrapper">
                <input type="text" class="nilai-input" maxlength="3" />
                <span class="outof">/100</span>
              </div>
              <small class="tepat-waktu">Tepat waktu</small>
            </span>
          </div><div class="student-item">
            <span class="student-name">Arsy Kurnia</span>
            <span class="score">
              <div class="nilai-wrapper">
                <input type="text" class="nilai-input" maxlength="3" />
                <span class="outof">/100</span>
              </div>
              <small class="tepat-waktu">Tepat waktu</small>
            </span>
          </div><div class="student-item">
            <span class="student-name">Arsy Kurnia</span>
            <span class="score">
              <div class="nilai-wrapper">
                <input type="text" class="nilai-input" maxlength="3" />
                <span class="outof">/100</span>
              </div>
              <small class="tepat-waktu">Tepat waktu</small>
            </span>
          </div>
          <!-- Tambahkan lebih banyak sesuai kebutuhan -->
        </div>
      </div>

      <!-- Right Panel -->
      <div class="right-panel">
        <div class="stats">
          <div class="stat-box">
            <h2>36</h2>
            <span>Ditugaskan</span>
          </div>
          <div class="stat-box">
            <h2>6</h2>
            <span>Mengumpulkan</span>
          </div>
        </div>
        <div class="files-grid">
          <!-- Display Materials -->
          @foreach($materials as $material)
            <div class="file-card">
              <img src="https://img.icons8.com/ios/50/pdf.png" alt="pdf icon"/>
              <span>{{ $material->file_name }}</span>
              <a href="{{ asset('storage/' . $material->file_path) }}" target="_blank">Lihat Materi</a>
            </div>
          @endforeach

          <!-- Display Assignments -->
          <h5 style="grid-column: 1 / -1; margin: 20px 0 10px 0;">Tugas yang Dikumpulkan</h5>
          @foreach($assignments as $assignment)
            <div class="file-card">
              <img src="https://img.icons8.com/ios/50/link.png" alt="link icon" style="width: 20px; height: 20px;"/>
              <div>{{ $assignment->user->name }}</div>
              <a href="{{ $assignment->tugas_link }}" target="_blank">Lihat Tugas</a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div>
          <button class="btn-save" type="button" id="btnSimpan">Simpan</button>
        </div>
  </div>
    </div>
  </section>

  @include('teacher-footer')

  <script>
    document.getElementById('btnSimpan').addEventListener('click', function() {
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Berhasil disimpan.',
        confirmButtonText: 'Oke'
      }).then(() => {
        window.location.href = '/teacher-course';
      });
    });
  </script>
  
</body>
</html>