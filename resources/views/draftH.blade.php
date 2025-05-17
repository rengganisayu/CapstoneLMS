<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Learnings Hero</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Helvetica Neue', sans-serif;
      color: #111;
      background-color: #fffaf6;
    }

    /* Hero Section */
    .hero1 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 3rem;
      flex-wrap: wrap;
    }

    .hero1-text {
      max-width: 50%;
    }

    .subhead {
      color: #ff6a00;
      font-weight: 700;
      letter-spacing: 1px;
      margin-bottom: 1rem;
    }

    .hero1-text h1 {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 30px;
      line-height: 1.2;
    }

    .highlight {
      position: relative;
      display: inline-block;
      z-index: 1;
    }

    .highlight::after {
      content: "";
      position: absolute;
      left: 180px;
      bottom: -20px;
      width: 57%;
      height: 0.6em;
      background: url('data:image/svg+xml;utf8,<svg width="100%" height="10" viewBox="0 0 100 10" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5 Q 5 0, 10 5 T 20 5 T 30 5 T 40 5 T 50 5 T 60 5 T 70 5 T 80 5 T 90 5 T 100 5" stroke="blue" stroke-width="3" fill="none"/></svg>') no-repeat;
      background-size: 100% 100%;
      z-index: -1;
    }

    .description {
      margin: 1rem 0 2rem 0;
      color: #555;
      font-size: 1rem;
      max-width: 450px;
    }

    .hero1-image img {
      max-width: 500px;
      width: 100%;
      height: auto;
    }

  </style>
</head>
<body>

  <section class="hero">
    <div class="hero-text">
      <p class="subhead">INTRODUCING INTERACTIVE</p>
      <h1>
        Learning courses <br />
        <span class="highlight">by top teachers.</span>
      </h1>
      <p class="description">
        Choose from over 4,000 courses on topics like cartoon design, graphic
        design, fashion design, and much more.
      </p>
    </div>

    <div class="hero-image">
      <!-- Ganti src ini ke gambar kamu -->
      <img src="https://via.placeholder.com/500x400.png?text=Illustration" alt="Course illustration" />
    </div>
  </section>
</body>
</html>
