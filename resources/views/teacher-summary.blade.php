<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LMS Informatika</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
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
      width: 100%; /* Pastikan selebar kontainer */
      /* background-color: white; */
      border-bottom: 1px solid #e2e8f0;
    }

    .tab {
      flex: 1; /* Bagi ruang secara merata */
      text-align: center; /* Tengahin teks dalam tab */
      padding: 12px 16px;
      font-weight: 500;
      border-bottom: 3px solid transparent;
      background-color: transparent;
      cursor: pointer;
      color: #64748b;
      border-color: #64748b;
      margin: 0 150px;
    }

    .tab.active {
      border-color: #3b82f6;
      color: #1e3a8a;
    }


    .content {
      background-color: #f1f5f9;
      padding: 40px 30px;
      flex: 1;
      margin-top: 30px;
      border-radius: 15px;
    }

    .content h2 {
      font-size: 24px;
      color: #1e293b;
      margin-bottom: 10px;
    }

    .content p {
      color: #475569;
      line-height: 1.6;
      max-width: 850px;
      margin-bottom: 30px;
    }

    .section {
      margin-bottom: 30px;
    }

    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 12px;
    }

    .section-header h3 {
      font-size: 18px;
      font-weight: 600;
      color: #1e293b;
    }

    .add-btn {
      background-color: #3b82f6;
      color: white;
      border: none;
      padding: 8px 32px;
      border-radius: 30px;
      cursor: pointer;
      font-size: 14px;
    }

    .file-item {
      background-color: white;
      border-radius: 10px;
      padding: 12px 16px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 1px 4px rgba(0,0,0,0.06);
      margin-bottom: 10px;
      max-width: 500px;
    }

    .file-item button {
      background: none;
      border: none;
      color: #ef4444;
      font-size: 18px;
      cursor: pointer;
    }

    .footer {
      background-color: #f1f5f9;
      text-align: center;
      padding: 15px;
      font-size: 13px;
      color: #475569;
      border-top: 1px solid #e2e8f0;
    }

    /* Overlay tugas */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(15, 23, 42, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .overlay-content {
      background: #f1f5f9;
      border-radius: 12px;
      width: 400px;
      padding: 20px 24px;
      position: relative;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .overlay-content h3 {
      margin-top: 0;
      font-size: 18px;
      font-weight: 600;
      color: #1e293b;
    }

    .overlay-content input,
    .overlay-content textarea {
      width: 100%;
      margin-top: 8px;
      margin-bottom: 16px;
      padding: 10px;
      font-size: 14px;
      border-radius: 6px;
      border: 1px solid #cbd5e1;
      background-color: white;
    }

    .overlay-content .close-btn {
      position: absolute;
      top: 14px;
      right: 18px;
      font-size: 20px;
      color: #1e293b;
      background: none;
      border: none;
      cursor: pointer;
    }

    .overlay-content .submit-btn {
      background-color: #1e3a8a;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 8px;
      width: 100%;
      font-size: 14px;
      cursor: pointer;
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
    width: max-content;
    cursor: pointer;
    }

    .btn-save:hover {
      background-color: #45a049;
    }
  </style>

  <script>
    function triggerFileUpload() {
      document.getElementById("fileUploadInput").click();
    }

    function handleFileChange(event) {
      const files = event.target.files;
      if (files.length > 0) {
        alert("File terpilih: " + files[0].name);
      }
    }

    function openOverlay() {
      document.getElementById("taskOverlay").style.display = "flex";
    }

    function closeOverlay() {
      document.getElementById("taskOverlay").style.display = "none";
    }

    function submitTask() {
      const title = document.getElementById("taskTitle").value;
      const desc = document.getElementById("taskDesc").value;
      const deadline = document.getElementById("taskDeadline").value;

      if (!title || !desc || !deadline) {
      Swal.fire({
        icon: 'warning',
        title: 'Data belum lengkap!',
        text: 'Mohon lengkapi semua data tugas.',
        confirmButtonText: 'Oke'
      });
      return;
    }
      closeOverlay();
    }
  </script>
</head>
<body>

@include('teacher-sidebar')
  <section class="kelas-section container">
    <div class="wrapper">
    <div class="main-content">
    <div class="topbar">
      <h2 style="font-size: x-large; font-weight:600;">Course</h2>
    </div>

    <div class="tabs">
      <div class="tab active">Ringkasan</div>
      <a class="tab" href="/teacher-grade" style="text-decoration: none;">Penilaian</a>
    </div>

    <div class="content">
      <div class="section">
        <h2>Deskripsi Bab</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>

      <div class="section">
        <div class="section-header">
          <h3>File</h3>
          <div>
            <button class="add-btn" onclick="triggerFileUpload()">+ Tambah File</button>
            <input type="file" id="fileUploadInput" style="display: none" onchange="handleFileChange(event)">
          </div>
        </div>
        <div class="file-item">
          <span>Bab-1.pdf</span>
          <button>&times;</button>
        </div>
      </div>

      <div class="section">
        <div class="section-header">
          <h3>Penugasan</h3>
          <button class="add-btn" onclick="openOverlay()">+ Tambah Tugas</button>
        </div>
        <p>
          Buatlah program sederhana menggunakan array atau list yang dapat menyimpan data nama-nama siswa di kelas kalian.
        </p>
      </div>

      <div>
        <button class="btn-save" type="button" id="btnSimpan">Simpan</button>
      </div>
    </div>
  </div>
    </div>
  </section>
  
  @include('teacher-footer')

  <!-- Overlay Penugasan -->
  <div class="overlay" id="taskOverlay">
    <div class="overlay-content">
      <button class="close-btn" onclick="closeOverlay()">&times;</button>
      <div class="title">
      <h3>Buat Penugasan</h3>
      <p style="font-weight: normal; margin-bottom: 10px;">Bab 1 - Informatika</p>
      </div>
      <input type="text" id="taskTitle" placeholder="Judul Tugas" />
      <textarea id="taskDesc" rows="4" placeholder="Deskripsi Tugas"></textarea>
      <label for="taskDeadline" style="font-weight: bold; color: #1e293b;">Deadline</label>
      <input type="datetime-local" id="taskDeadline" />
      <button class="submit-btn" onclick="submitTask()">Selesai</button>
    </div>
  </div>

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