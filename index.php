<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <title>Khalifa University – IEEE EMBS</title> -->
  <title>
    Khalifa University Alumni - Stay Connected, Always Evolving
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
        <span class="arrow">&rarr;</span>
      </a>
    </div>

    <!-- Features Grid -->
    <div class="features-grid">
      <div class="feature-card">
        <div class="icon">📜</div>
        <span class="feature-label">Requirements</span>
      </div>
      <div class="feature-card">
        <div class="icon">⌖</div>
        <span class="feature-label">External Assessments</span>
      </div>
      <div class="feature-card">
        <div class="icon">$</div>
        <span class="feature-label">Fees</span>
      </div>
      <div class="feature-card">
        <div class="icon">📄</div>
        <span class="feature-label">Application Types</span>
      </div>
    </div>

    <!-- Bottom Hero Card -->
    <div class="programs-hero">
      <img src="assets/images/graduate/Laboratory.png" alt="Laboratory" class="hero-bg">
      <div class="hero-card">
        <h3>Undergraduate Programs</h3>
        <a href="#" class="explore-btn">
          Explore here <span class="arrow">&rarr;</span>
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
            <span class="arrow">&rarr;</span>
          </div>
        </a>

        <!-- Card 2 -->
        <a href="#" class="scholarship-card">
          <div class="card-image">
            <img src="assets/images/scholorship/img1.png" alt="Scientists in lab">
          </div>
          <div class="card-footer">
            <span class="label">UNDERGRADUATE SCHOLARSHIPS</span>
            <span class="arrow">&rarr;</span>
          </div>
        </a>
      </div>
    </div>
  </section>


  <!-- footer section  -->
  <?php include 'includes/footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Splide JS -->
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>



  <script src="assets/js/main.js"></script>
  <script type="module" src="assets/js/menu.js "></script>

</body>

</html>