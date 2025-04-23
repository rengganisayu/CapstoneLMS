<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Course</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body {
      background-color: #f8f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      min-height: 100%;
      transition: padding-left 0.3s ease;
    }
    
    .course-container {
      margin: 5% 5% 5% 45vh;
      transition: margin-left 0.3s ease;
      flex: 1;
    }

    body.sidebar-collapsed .course-container {
      margin: 5%;
    }

    .course-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 3fr));
      gap: 20px;
    }

    .course-card {
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: box-shadow 0.3s ease;
      position: relative;
    }

    .course-card:hover {
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .course-thumbnail {
      width: 100%;
      height: 120px;
      background-size: cover;
      background-position: center;
      background-image: url('https://i.pinimg.com/736x/49/5f/d6/495fd6b6b92ded7b62023352a90881ee.jpg');
    }

    .course-info {
      padding: 15px;
    }

    .course-info h3 {
      font-size: 16px;
      margin-bottom: 5px;
      color: #003c5f;
    }

    .course-info p {
      font-size: 13px;
      color: #333;
    }

    .triangle-label {
      position: absolute;
      top: 0;
      right: 0;
      width: 0;
      height: 0;
      border-top: 75px solid #38a745;
      border-left: 75px solid transparent;
      z-index: 2;
    }

    .triangle-label span {
      position: absolute;
      top: -60px;
      right: 5px;
      transform: rotate(45deg);
      color: white;
      font-size: 14px;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <!-- Sidebar (include) -->
  @include('teacher-sidebar')

  <!-- Konten Utama -->
  <section class="course-container">
    <h2 class="mb-4">Course</h2>

    <!-- Course List -->
    <div class="course-list">        
      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">  
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 1 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>

      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">  
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 2 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>

      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">  
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 3 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>

      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">  
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 4 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>

      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">  
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 5 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>

      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">  
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 6 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>

      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">  
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 7 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>

      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">  
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 8 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>

      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 9 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>

      <a href="teacher-summary" style="text-decoration: none;">
        <div class="course-card">
          <div class="course-thumbnail"></div>
          <div class="course-info">
            <h3>Bab 10 - Informatika dan Keterampilan Generik</h3>
            <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
          </div>
        </div>
      </a>
    </div>
  </section>

  <!-- Footer -->
  @include('teacher-footer')

  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      const body = document.querySelector('body');
      const icon = document.getElementById('toggle-icon');

      sidebar.classList.toggle('sidebar-collapsed');
      body.classList.toggle('sidebar-collapsed');

      // Toggle the icon between "x" and "list"
      if (sidebar.classList.contains('sidebar-collapsed')) {
        icon.classList.remove('bi-x-lg');
        icon.classList.add('bi-list');
      } else {
        icon.classList.remove('bi-list');
        icon.classList.add('bi-x-lg');
      }
    }
  </script>

</body>
</html>
