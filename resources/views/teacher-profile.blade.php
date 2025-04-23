<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
      body {
        background-color: #f8f9fc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        height: 100%;
        margin: 0;
        padding: 0;
      }
      section {
        height: 100%;
        display: flex;
        flex-direction: column;
      }
      .profile-container {
        display: -ms-flexbox;
        background: #ffffff; 
        border-radius: 10px; 
        padding: 16px; 
        margin: 60px auto 30px auto;
        width: 400px; 
        text-align: center; 
        box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        border-top: 4px solid #d5aefb;
        border-radius: 10px;
      }
      .profile-container img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-top: -40px;
        border: 4px solid white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .profile-container h2 {
        margin: 16px;
        font-size: 20px;
        color: #333;
      }
      .profile-container p {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 6px;
        margin-bottom: 20px;
      }
      button {
        background-color: #003c5f;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
      }
      button:hover {
        background-color: #002a40;
      }
    </style>
  </head>
  <body>
    @include('navbar')

    <section>
      <div class="profile-container">
        <img src="https://i.pinimg.com/736x/e2/3e/e4/e23ee4ff3ace0f6bf5b8c944aa6f03c2.jpg" alt="Foto Profil" >
        <h2>Nama Lengkap</h2>
        <p>alamatemail@gmail.com</p>
        <button onclick="confirmLogout()">Logout</button>
      </div>
    </section>

    @include('teacher-footer')

    <script>
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
            window.location.href = '/login'; // ganti dengan route login kamu
          }
        });
      }
    </script>

  </body>
</html>
