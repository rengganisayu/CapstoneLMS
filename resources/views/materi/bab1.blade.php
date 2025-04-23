<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
      body {
        background-color: #f8f9fc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 8px;
      }
      .content-container {
        max-width: 800px;
        margin: 24px auto;
        padding: 24px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      }
      .course-title {
        font-size: 28px;
        color: #003c5f;
        margin-bottom: 16px;
        font-weight: 600;
      }
      .course-description {
        font-size: 16px;
        color: #333;
        margin-bottom: 24px;
      }
      .lesson-content h4 {
        font-size: 20px;
        color: #004d72;
        margin-top: 24px;
        margin-bottom: 8px;
      }
      .lesson-content p,
      .lesson-content li {
        font-size: 16px;
        color: #444;
        line-height: 1.6;
      }
      .lesson-content ul {
        margin-left: 16px;
      }
      iframe {
        border: none;
        border-radius: 8px;
        margin-top: 16px;
      }
      .assignment-section {
        background-color: #ffcccc;
        padding: 24px;
        border-radius: 8px;
        margin-top: 32px;
      }
      .assignment-section h4 {
        margin-top: 0;
        margin-bottom: 16px;
      }
      .assignment-section p {
        margin-bottom: 24px;
      }
      .btn-back {
        margin-bottom: 24px;
      }
    </style>
  </head>

  <body>

    @include('navbar')

    <div class="content-container">
      <a href="{{ url()->previous() }}" class="btn btn-outline-primary btn-back">&larr; Kembali</a>

      <div class="course-title">{{ $judul }}</div>

      <div class="course-description">
        Dalam materi ini kamu akan mempelajari teknik-teknik dasar dan lanjutan dalam analisis data kuantitatif menggunakan alat statistik.
      </div>

      <div class="lesson-content">
        <h4>Tujuan Pembelajaran</h4>
        <ul>
          <li>Memahami jenis-jenis data kuantitatif</li>
          <li>Mampu memilih teknik analisis yang sesuai</li>
          <li>Melakukan uji statistik dasar seperti uji-t dan ANOVA</li>
        </ul>

        <h4>Materi PDF</h4>
        <iframe src="{{ asset('assets/pdf/PPT.pdf') }}" width="100%" height="600px"></iframe>

        <!-- Form Submission Tugas -->
        <div class="assignment-section">
          <h4>Penugasan</h4>
          <p>Kerjakan latihan soal berikut di akhir modul dan upload hasilnya dalam format PDF.</p>

          <form id="submissionForm" method="POST" action="#">
            @csrf
            <div class="mb-3">
              <label for="tugas" class="form-label">Link atau catatan tugas:</label>
              <textarea class="form-control" id="tugas" name="tugas" rows="4" placeholder="Contoh: https://drive.google.com/..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Tugas</button>
          </form>
        </div>
      </div>
    </div>

    @include('footer')

    <script>
  document.getElementById('submissionForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const textarea = document.getElementById('tugas');

    if (textarea.value.trim() === '') {
      Swal.fire({
        title: 'Ups!',
        text: 'Silakan isi link atau catatan tugas terlebih dahulu.',
        icon: 'warning',
        confirmButtonColor: '#d33',
        confirmButtonText: 'Oke'
      });
      return;
    }

    // Emoji interaktif
    Swal.fire({
      title: 'Bagaimana perasaanmu setelah mengumpulkan tugas?',
      html: `
        <div style="font-size: 2rem; display: flex; justify-content: center; gap: 20px;">
          <span class="emoji-option" data-feel="😊">😊</span>
          <span class="emoji-option" data-feel="😐">😐</span>
          <span class="emoji-option" data-feel="😟">😟</span>
        </div>
        <p style="margin-top: 10px;">Klik salah satu emoji di atas</p>
      `,
      showConfirmButton: false,
      didOpen: () => {
        document.querySelectorAll('.emoji-option').forEach(emoji => {
          emoji.style.cursor = 'pointer';
          emoji.addEventListener('click', () => {
            const feeling = emoji.getAttribute('data-feel');
            Swal.fire({
              title: `${feeling} Terima kasih!`,
              text: 'Tugas kamu sudah berhasil dikumpulkan.',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Oke'
            });
            e.target.reset();
          });
        });
      }
    });
  });
</script>


  </body>
</html>
