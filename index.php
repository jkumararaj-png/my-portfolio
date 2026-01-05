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

  <!-- Loading screen -->

  <div class="loading-screen">
    <div class="loader-icon"><img src="./assets/Portfolio-logo.svg" alt="Icon" /></div>
  </div>

  <!-- Navbar & footer from seperate HTML files for code optimization -->

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

    <section id="Work" data-scroll-section>
      <div class="container">
        <div class="work-content">
          <div class="work-title">
            <h2>What I Do <em>(And What I've Done)</em></h2>
          </div>
          <div class="work-bio">
            <p>
              I’ve worked across a mix of <b>education</b>, <b>web-based projects</b>, and a <em>little bit</em> of
              <b>app
                development</b>.
            </p>

            <div class="card card-1">
              <div class="collage-imgs-2">
                <img src="./assets/Chromebooks.jpeg" alt="A few Chromebooks I set up">
                <img src="./assets/Student-using-Chromebook.jpeg" alt="A student using a Chromebook I set up">
              </div>
              <p>
                I've
                managed
                and configured Chromebooks with the <b>Google Admin Console</b> for a learning centre, handling device
                restrictions & network
                filtering for students <br>
                brand staff.
              </p>
            </div>

            <div class="card card-2">
              <p>
                I’ve also built and planned web projects like static sites for hosting and organizing audio content
                <em>(for
                  the
                  learning centre)</em>, automation workflows with <b>Google Apps Script</b>.
              </p>
              <div class="collage-imgs-2">
                <img src="./assets/cge-audio-files.jpg" alt="An image of the audio files website I created">
                <img src="./assets/apps-script.jpg" alt="An image of some of my code in Google Apps Script">
              </div>
            </div>
            <p>
              also did student records automation with <b>Google Sheets.</b> <em>(a whole lotta Google 🤞)</em>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->

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

              When I'm <em>not</em> sitting at my computer either configuring Chromebooks or watching Netflix, I like to
              take pictures of the sky and
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

    <!-- My Resume -->

    <section id="Resume" data-scroll-section>
      <div class="container">
        <div class="resume-content">
          <div class="resume-title">
            <p>Want to know more about my work experiences, education, and more?</p>
            <a href="https://www.canva.com/design/DAGf0V-4viY/OMLaQP7FL0kz3q4MZV0uRA/view?utm_content=DAGf0V-4viY&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=h0a294ecc8b"
              target="_blank">
              <div class="resume-link">
                <h2>View my resume</h2>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->

    <div class="contact-footer" data-scroll-section>
      <section id="Contact">
        <div class="container">
          <div class="contact-content">
            <fieldset class="contact-form-wrapper">
              <legend align="center">
                <h2>Get in touch</h2>
              </legend>
              <form class="contact-form">
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Message" rows="5" required></textarea>
                <button type="submit">Send</button>
              </form>
            </fieldset>
          </div>
        </div>


      </section>
      <?php include "footer.html"; ?>

    </div>

  </div>
</body>

</html>