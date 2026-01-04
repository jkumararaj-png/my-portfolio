<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/b6c835e11d.js" crossorigin="anonymous"></script>

  <!-- Locomotive Scroll CSS & JS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js" defer></script>

  <!-- Main style & script -->
  <link rel="stylesheet" href="style.css?<?= time() ?>" />
  <script src="script.js?<?= time() ?>"></script>

  <title>Joash Kumararaj</title>
</head>

<body>
  <!-- Including the navbar from a seperate HTML file for code optimization -->
  <?php include "nav.html"; ?>

  <div data-scroll-container>

    <!-- Home -->
    <section id="Home" data-scroll-section>
      <div class="noise"></div>
      <div class="container">
        <div class="hero">
          <div class="hero-content">
            <h1><em>Hey,</em> I'm
              <span class="name">Joash
                <span class="nav-tooltip">/ˈdʒoʊæʃ/ <br> Jo•ash</span>
              </span>
            </h1>
            <div class="dashed-line"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Work -->
    <section id="About" data-scroll-section>
      <div class="container">
        <div class="about-content">
          <div class="about-title">
            <div class="about-img">
              <div class="bar bar-1"></div>
              <div class="bar bar-2"></div>
              <div class="bar bar-3"></div>
              <div class="bar bar-4"></div>
              <div class="bar bar-5"></div>
              <img src="./assets/Me.png" alt="A selfie of me">
            </div>
            <h2>About me</h2>
          </div>
          <div class="about-bio">
            <p>👋 Hey (again!), <br>
              my name is <b>Joash Kumararaj</b>.<br>
              I'm a newbie Software Engineer <br> studying at <b style="text-decoration: underline;">Forward
                College</b>.

              <br> <br>

              I love coding and problem-solving, always curious about how things work and how to make them better,
              paying great
              attention to detail.

              <br> <br>

              When I'm <em>not</em> sitting on my computer, I like to take pictures of the sky and
              unwind
              with
              a hot cup of masala tea. ☕
            </p>
            <div class="about-misc-pics">
              <img src="./assets/misc-img1.jpeg" alt="A picture I took" />
              <img src="./assets/misc-img2.jpeg" alt="A picture I took" />
              <img src="./assets/misc-img3.jpeg" alt="A picture I took" />
              <img src="./assets/misc-img4.jpeg" alt="A picture I took" />
              <img src="./assets/misc-img5.jpeg" alt="A picture I took" />
              <img src="./assets/misc-img6.jpeg" alt="A picture I took" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</body>

</html>