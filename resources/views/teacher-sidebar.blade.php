<style>
  .sidebar {
    width: 40vh;
    height: 100vh;
    background-color: #0F172A;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    padding: 20px;
    transition: transform 0.3s ease;
    z-index: 998;
  }

  .sidebar .logo {
    display: flex;
    align-items: center;
    justify-content: center; /* Agar teks + logo ke tengah */
    margin-top: 8vh;
    margin-bottom: 40px;
  }

  .sidebar .logo img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 10px; /* bisa dihapus kalau tidak mau jarak */
  }

  .sidebar h4 {
    color: #ffffff;
    margin-bottom: 30px;
    margin-top: 8vh;
    font-size: x-large;
  }

  .sidebar a {
    color: #ffffff;
    text-decoration: none;
    display: block;
    margin-bottom: 15px;
    font-weight: 500;
  }

  .sidebar a.active,
  .sidebar a:hover {
    color: #526D82;
  }

  .sidebar-collapsed .sidebar {
    transform: translateX(-100%);
  }

  .sidebar-toggle-btn {
    position: fixed;
    top: 20px;
    left: 20px;
    z-index: 999;
    background-color: #27374D;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 20px;
    height: 32px;
    width: 32px
  }
  .sidebar-toggle-btn:hover {
    background-color: #526D82;
  }
  .navbar {
    background-color: #9DB2BF;
    box-shadow: 0 1px 2px rgba(0,0,0,0.1);
    width: 100vw;
  }
</style>

<!-- Tombol Sidebar -->
<button class="sidebar-toggle-btn" onclick="toggleSidebar()" style=" top: 15px; left: 15px; z-index: 1000;"><i id="toggle-icon" class="bi bi-x-lg"></i></button>

<!-- Sidebar -->
<aside class="sidebar">
  <div class="logo">
    <img src="https://shorturl.at/M3g26" alt="Logo">
    <span><strong style="font-size: x-large;">Informatika</strong></span>
  </div>
  <a href="teacher-dashboard">Dashboard</a>
  <a href="teacher-course">Courses</a>
  <a href="teacher-management">Manajemen Siswa</a>
  <button onclick="confirmLogout()" class="btn btn-danger btn-sm mt-3">Logout</button>
</aside>

<!-- Script -->
<script>
  function toggleSidebar() {
    const body = document.body;
    const icon = document.getElementById("toggle-icon");
    body.classList.toggle("sidebar-collapsed");

    if (body.classList.contains("sidebar-collapsed")) {
      icon.classList.remove("bi-x-lg");
      icon.classList.add("bi-list");
    } else {
      icon.classList.remove("bi-list");
      icon.classList.add("bi-x-lg");
    }
  }

  function confirmLogout() {
    Swal.fire({
      title: 'Anda yakin ingin keluar?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, keluar',
      cancelButtonText: 'Tidak'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '/login';
      }
    });
  }
</script>