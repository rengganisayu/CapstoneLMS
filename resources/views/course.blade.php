<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        background-color: #f8f9fc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      .course-container {
        max-width: 100%;
        margin: 30px 0;
        flex-grow: 1;
      }

      h2 {
        font-size: 24px;
      }

      .course-list {
        display: grid;
        grid-template-columns: repeat(3, minmax(280px, 1fr));
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
        flex-grow: 1;
      }

      .course-info h3 {
        font-size: 16px;
        margin: 0 0 5px;
        color: #003c5f;
        text-decoration: none;
      }

      .course-info p {
        margin: 2px 0;
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

      footer {
        margin-top: auto;
      }
    </style>
  </head>

  <body>
    @include('navbar')

    <section class="hero container d-flex flex-column flex-md-row align-items-center justify-content-between">
      <div class="course-container container">
        <h2 class="mb-4">Materi</h2>

        <!-- Course List -->
        <div class="course-list">        
          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <div class="triangle-label"><span>Done</span></div>
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 1 - Informatika dan Keterampilan Generik</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>

          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <div class="triangle-label"><span>Done</span></div>
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 2 - Informatika dan Keterampilan Generik</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>

          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <div class="triangle-label"><span>Done</span></div>
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 3 - Sistem Komputer</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>

          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <div class="triangle-label"><span>Done</span></div>
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 4 - Informatika dan Keterampilan Generik</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>

          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <div class="triangle-label"><span>Done</span></div>
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 5 - Informatika dan Keterampilan Generik</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>

          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <div class="triangle-label"><span>Done</span></div>
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 6 - Informatika dan Keterampilan Generik</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>

          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <div class="triangle-label"><span>Done</span></div>
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 7 - Informatika dan Keterampilan Generik</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>

          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <div class="triangle-label"><span>Done</span></div>
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 8 - Informatika dan Keterampilan Generik</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>

          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <!-- <div class="triangle-label"><span>Done</span></div> -->
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 9 - Informatika dan Keterampilan Generik</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>

          <a href="{{ url('/materi/bab-1') }}" style="text-decoration: none;">
            <div class="course-card">
              <!-- <div class="triangle-label"><span>Done</span></div> -->
              <div class="course-thumbnail"></div>
              <div class="course-info">
                <h3>Bab 10 - Informatika dan Keterampilan Generik</h3>
                <p>Belajar kolaborasi dan komunikasi efektif dalam tim.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <script>
      document.querySelectorAll('.course-card').forEach(card => {
        const progress = card.dataset.progress;
        if (progress === "100") {
          const label = document.createElement('div');
          label.className = 'triangle-label';
          label.innerHTML = '<span>Done</span>';
          card.appendChild(label);
        }
      });
    </script>

    @include('footer')
  </body>
</html>
