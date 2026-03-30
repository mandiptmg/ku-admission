<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <title>Khalifa University – IEEE EMBS</title> -->
  <title>
    Khalifa University - Admissions
  </title>

  <!-- Favicon for standard browsers -->
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />

  <!-- Splide CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />



  <!-- Our custom SCSS (compiled to CSS) -->
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <!--  header SECTION  -->
  <?php include 'includes/header.php'; ?>


  <section class="ku-hero">
    <div class="ku-hero__overlay"></div>

    <div class="ku-hero__content container">
      <h1 class="ku-hero__title">
        Start Your Journey
      </h1>
      <h4 class="ku-hero__sub-title">
        Applications for Fall 2026 are now open!
      </h4>
    </div>
  </section>

  <!-- dates-admissions -->
  <section class="dates-admissions">
    <div class="container">
      <div class="layout-grid">

        <!-- Left Column: Important Dates -->
        <div class="important-dates">
          <h2 class="section-title">IMPORTANT DATES</h2>
          <div class="dates-viewport">
            <div id="dates-list" class="dates-list">
              <!-- Items injected via JS -->
            </div>
          </div>
          <div class="carousel-controls">
            <button id="prev-date" class="control-btn" aria-label="Previous">&#x276E;</button>
            <button id="next-date" class="control-btn" aria-label="Next">&#x276F;</button>
          </div>
        </div>

        <!-- Right Column: Admissions Journey -->
        <div class="admissions-journey">
          <h2 class="section-title">ADMISSIONS JOURNEY</h2>
          <div class="video-container">
            <img src="assets/images/journyImg.png" alt="Video" class="thumbnail">
            <div class="video-overlay">
              <button class="play-button">
                <img src="assets/images/play-btn.png" alt="play-btn" class="play-icon">
                <span>PLAY VIDEO</span>
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>



  <!-- Video Modal -->
  <div id="video-modal" class="video-modal">
    <div class="video-modal-content">
      <button id="close-modal" class="close-modal" aria-label="Close Video">✕</button>
      <iframe
        id="video-iframe"
        width="100%"
        height="100%"
        src=""
        title="Admissions Video"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
  </div>


  <!-- admission-undergraduate -->
  <section class="admission-undergraduate">
    <div class="container">

      <!-- Header Section -->
      <div class="intro-section">

        <div class="intro-content">
          <h2 class="title">Undergraduate Admission</h2>
          <p class="description">
            Undergraduate degrees from Khalifa University of Science and Technology
            are designed to equip graduates with the necessary skills and knowledge
            that are highly sought-after in today's job market. Khalifa University
            has granted over 3,200 bachelor's degrees to qualifying undergraduate students.
          </p>
        </div>
        <div class="intro-image-wrapper">
          <img src="assets/images/graduate/undergraduate.png" alt="Undergraduate student" class="main-img">
        </div>
      </div>

      <!-- CTA Banner -->
      <div class="cta-banner">
        <div class="cta-info">
          <p>The application will close on <strong>2 March 2026</strong> - Apply before this date to be considered for admission.</p>
        </div>
        <a href="#" class="cta-button">
          <span>Start your application here</span>
          <img src="assets/images/right-arrow.png" alt="right arrow" class="arrow" />
        </a>
      </div>

      <!-- Features Grid -->
      <div class="features-grid">
        <div class="feature-card">
          <img src="assets/images/feature-card/requirements.png" alt="Requirements">
          <span class="feature-label">Requirements</span>
        </div>
        <div class="feature-card">
          <img src="assets/images/feature-card/assessments.png" alt="Assessments">
          <span class="feature-label">External Assessments</span>
        </div>
        <div class="feature-card">
          <img src="assets/images/feature-card/fees.png" alt="fees">
          <span class="feature-label">Fees</span>
        </div>
        <div class="feature-card">
          <img src="assets/images/feature-card/application.png" alt="Application">
          <span class="feature-label">Application Types</span>
        </div>
      </div>

      <!-- Bottom Hero Card -->
      <div class="programs-hero">
        <img src="assets/images/graduate/Laboratory1.png" alt="Laboratory" class="hero-bg">
        <div class="hero-card">
          <h3 class="hero-card__title">Undergraduate Programs</h3>
          <a href="#" class="explore-btn">
            Explore here<img src="assets/images/right-arrow.png" alt="right arrow" class="arrow" />
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- admission-postgraduate -->
  <section class="admission-postgraduate">
    <div class="container">

      <!-- Header Section -->
      <div class="intro-section">
        <div class="intro-image-wrapper">
          <img src="assets/images/graduate/postgraduate.png" alt="Postgraduate student" class="main-img">
          <div class="decorative-box"></div>
        </div>
        <div class="intro-content">
          <h2 class="title">Postgraduate Admission</h2>
          <p class="description">
            Undergraduate degrees from Khalifa University of Science and Technology
            are designed to equip graduates with the necessary skills and knowledge
            that are highly sought-after in today's job market. Khalifa University
            has granted over 3,200 bachelor's degrees to qualifying undergraduate students.
          </p>
        </div>
      </div>

      <!-- CTA Banner -->
      <div class="cta-banner">
        <div class="cta-info">
          <p>The application will close on <strong>2 March 2026</strong> - Apply before this date to be considered for admission.</p>
        </div>
        <a href="#" class="cta-button">
          <span>Start your application here</span>
          <img src="assets/images/right-arrow.png" alt="right arrow" class="arrow" />
        </a>
      </div>

      <!-- Features Grid -->
      <div class="features-grid">
        <div class="feature-card">
          <img src="assets/images/feature-card/requirements.png" alt="Requirements">
          <span class="feature-label">Requirements</span>
        </div>
        <div class="feature-card">
          <img src="assets/images/feature-card/assessments.png" alt="Assessments">
          <span class="feature-label">External Assessments</span>
        </div>
        <div class="feature-card">
          <img src="assets/images/feature-card/fees.png" alt="fees">
          <span class="feature-label">Fees</span>
        </div>
        <div class="feature-card">
          <img src="assets/images/feature-card/application.png" alt="Application">
          <span class="feature-label">Application Types</span>
        </div>
      </div>

      <!-- Bottom Hero Card -->
      <div class="programs-hero">
        <img src="assets/images/graduate/Laboratory.png" alt="Laboratory" class="hero-bg">
        <div class="hero-card">
          <h3 class="hero-card__title">Undergraduate Programs</h3>
          <a href="#" class="explore-btn">
            Explore here<img src="assets/images/right-arrow.png" alt="right arrow" class="arrow" />
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- scholorship -->
  <section class="scholarships-section">


    <div class="container">
      <h2 class="section-title">SCHOLARSHIPS</h2>

      <div class="scholarships-grid">
        <!-- Card 1 -->
        <a href="#" class="scholarship-card">
          <div class="card-image">
            <img src="assets/images/scholorship/img2.png" alt="Undergraduate researcher">
          </div>
          <div class="card-footer">
            <span class="label">UNDERGRADUATE SCHOLARSHIPS</span>
            <img src="assets/images/right-arrow.png" alt="right arrow" class="arrow" />
          </div>
        </a>

        <!-- Card 2 -->
        <a href="#" class="scholarship-card">
          <div class="card-image">
            <img src="assets/images/scholorship/img1.png" alt="Scientists in lab">
          </div>
          <div class="card-footer">
            <span class="label">UNDERGRADUATE SCHOLARSHIPS</span>
            <img src="assets/images/right-arrow.png" alt="right arrow" class="arrow" />
          </div>
        </a>
      </div>
    </div>
  </section>



  <section class="support-section">
    <div class="container">

      <!-- FAQ Section -->
      <div class="faq-container">
        <h2 class="faq-title">FAQ</h2>
        <div id="faq-accordion" class="accordion">
          <!-- Injected via JavaScript -->
        </div>
      </div>

      <!-- Action Links Grid -->
      <div class="links-grid">
        <a href="#" class="action-btn bg-primary">
          <span class="text">KU Undergraduate Brochure</span>
          <div class="action-meta">
            <span class="separator"></span>
            <img src="assets/images/vision.png" alt="vison" class="icon">
            <span class="label">View</span>
          </div>
        </a>
        <a href="#" class="action-btn bg-slate">
          <span class="text">Ku Times</span>
          <div class="action-meta">
            <span class="separator"></span>
            <img src="assets/images/vision.png" alt="vison" class="icon">
            <span class="label">View</span>
          </div>
        </a>
        <a href="#" class="action-btn bg-navy">
          <span class="text">KU Undergraduate Catalog</span>
          <div class="action-meta">
            <span class="separator"></span>
            <img src="assets/images/vision.png" alt="vison" class="icon">
            <span class="label">View</span>
          </div>
        </a>
        <a href="#" class="action-btn bg-dark">
          <span class="text">Connect with us</span>
          <div class="action-meta">
            <span class="separator"></span>
            <img src="assets/images/vision.png" alt="vison" class="icon" style="opacity: 0;">

            <span class="label">Visit</span>
          </div>
        </a>
      </div>

      <!-- Contact Info Section -->
      <div class="contact-section">
        <div class="contact-header">
          <h2 class="main-title">Office of Student Recruitment and Admission</h2>

        </div>
        <div>
          <p class="sub-title">Khalifa University of Science and Technology</p>
          <div class="contact-cards">

            <!-- Phone -->
            <div class="info-card">
              <img src="assets/images/phone-call.png" class="icon" alt="phone-call">
              <div class="details">
                <span class="type">TELEPHONE</span>
                <a href="tel:023123333" class="value">02 3123333</a>
              </div>
            </div>

            <!-- Email -->
            <div class="info-card">
              <img src="assets/images/email.png" class="icon" alt="email">
              <div class="details">
                <span class="type">EMAIL</span>
                <a href="mailto:ugadmissions@ku.ac.ae" class="value">
                  ugadmissions@ku.ac.ae
                </a>
              </div>
            </div>

            <!-- Time (no link needed) -->
            <div class="info-card">
              <img src="assets/images/time.png" class="icon" alt="time">
              <div class="details">
                <span class="type">CALL CENTER WORKING HOURS</span>
                <span class="value">7:30AM - 5:00PM</span>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- footer section  -->
  <?php include 'includes/footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Splide JS -->
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>



  <script src="assets/js/main.js"></script>
  <script type="module" src="assets/js/faq.js"></script>
  <script type="module" src="assets/js/data&admission.js"></script>


</body>

</html>