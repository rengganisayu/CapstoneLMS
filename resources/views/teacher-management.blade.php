<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Manajemen Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <style>
    * {
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      margin: 0;
      background-color: #f7f9fc;
      display: flex;
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
      padding: 30px;
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

    .main-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .main-header h2 {
      margin: 0;
      font-size: 18px;
    }

    .profile {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #ccc;
    }

    .delete-btn {
      background: none;
      border: none;
      color: red;
      cursor: pointer;
      font-size: 16px;
    }

    .delete-btn:hover {
      color: darkred;
    }

    /* Tabel */
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      border: 1px solid #ccc;
      text-align: center;
    }

    thead th {
      background-color: #f1f5f9;
      padding: 12px;
      border: 1px solid #ccc;
      font-size: 14px;
      font-weight: bold;
    }

    thead th:last-child {
      color: red;
      text-align: center;
    }

    tbody td {
      padding: 12px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    tbody td:last-child {
      color: red;
      text-align: center;
      cursor: pointer;
    }

    /* Pagination */
    .pagination {
      text-align: center;
      margin-top: 15px;
      justify-content: center;
    }

    .pagination button {
      border: 1px solid #ccc;
      background-color: white;
      padding: 5px 10px;
      margin: 0 2px;
      cursor: pointer;
      border-radius: 5px;
    }

    .pagination button.active {
      background-color: #0f172a;
      color: white;
    }

    .pagination button:hover {
      background-color: #1e293b;
      color: white;
    }
  </style>
</head>
<body>
  @include('teacher-sidebar')
  <section class="kelas-section container">
    <div class="wrapper">
  <div class="main">
    <div class="main-header">
      <div>
        <h2 style="font-weight: 600; font-size:x-large">Manajemen Siswa</h2>
      </div>
      <div class="profile" style="font-size: large; font-weight: 600;">Teacher<span><img src="" alt=""></span></div>
    </div>

    <table>
      <thead>
        <tr>
          <th style="width: 10vw;">No</th>
          <th style="width: 30vw;">Nama Lengkap</th>
          <th style="width: 45vw;">Email</th>
          <th style="width: 20vw;">Hapus</th>
        </tr>
      </thead>
      <tbody id="table-body"></tbody>
    </table>

    <div class="pagination">
      <button>&lt;</button>
      <button class="active">1</button>
      <button>2</button>
      <button>3</button>
      <button>&gt;</button>
    </div>
  </div>

  <script>
  const tbody = document.getElementById("table-body");

  for (let i = 1; i <= 10; i++) {
    const row = document.createElement("tr");

    const no = document.createElement("td");
    no.textContent = i;

    const name = document.createElement("td");
    name.textContent = "";

    const email = document.createElement("td");
    email.textContent = "";

    const deleteCell = document.createElement("td");
    const deleteBtn = document.createElement("button");
    deleteBtn.innerHTML = '<i class="fas fa-trash"></i>';
    deleteBtn.className = "delete-btn";
    
    deleteBtn.onclick = () => {
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data akan dihapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          row.remove();
          Swal.fire(
            'Terhapus!',
            'Data berhasil dihapus.',
            'success'
          );
        }
      });
    };

    deleteCell.appendChild(deleteBtn);

    row.appendChild(no);
    row.appendChild(name);
    row.appendChild(email);
    row.appendChild(deleteCell);

    tbody.appendChild(row);
  }
</script>

  </section>
</body>
</html>