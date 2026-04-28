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

    <div class="container">
      <div class="ku-hero__content ">
        <h2 class="ku-hero__tag">
          <span class="ku-hero__dot"></span>
          Fall 2026 Admissions Now Open
        </h2>

        <h1 class="ku-hero__title">
          Start Your Journey at Khalifa University
        </h1>
        <p class="ku-hero__text">
          The UAE's #1 ranked university — preparing future scientists, engineers and innovators for a knowledge-driven world.
        </p>

        <div class="ku-hero__actions">
          <a href="#" class="ku-btn ku-btn--primary">Apply Now <span class="ku-btn__arrow"></span></a>
            <!-- VIDEO BUTTON -->
        <a href="#" id="open-video" class="ku-btn ku-btn--secondary" aria-label="Play Admissions Video">

          <span class="ku-btn__text">Admissions Journey</span>
          <span class="ku-btn__divider">|</span>

          <span class="ku-btn__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </span>

          <span class="ku-btn__text">Play Video</span>

        </a>
        </div>
      </div>
      <div class="video-overlay">
        <button class="play-button">
      </div>
  </section>

<!-- VIDEO MODAL -->
<div id="video-modal" class="video-modal">
  <div class="video-modal__content">

    <!-- CLOSE -->
    <button id="close-modal" class="video-modal__close">✕</button>

    <!-- IFRAME -->
    <iframe
      id="video-iframe"
      src=""
      title="Admissions Video"
      allow="autoplay; encrypted-media"
      allowfullscreen>
    </iframe>

  </div>
</div>

  <!-- eligibility -->
  <section class="application-eligibility-section">
    <div class="container">


      <h2 class="section-title">Application Eligibility </h2>


      <div class="eligibility-cards-grid">

        <!-- Card 1 -->
        <div class="eligibility-card eligibility-card--blue">
          <div class="eligibility-card__icon">
            <img src="assets/images/eligibility/img1.png" alt="Graduation Icon" />
          </div>
          <h3 class="eligibility-card__title">Graduation Timeline</h3>
          <p class="eligibility-card__subtitle">Who can apply this cycle</p>
          <a href="#" class="eligibility-card__link">
            View more
            <span class="eligibility-card__arrow"></span>
          </a>
        </div>

        <!-- Card 2 -->
        <div class="eligibility-card eligibility-card--gray eligibility-card--list">
          <div class="eligibility-card__icon">
            <img src="assets/images/eligibility/img2.png" alt="Requirements Icon" />
          </div>
          <ul class="eligibility-card__list">
            <li>&rarr; Successful completion of Grade 12 or equivalent</li>
            <li>&rarr; Must be from a recognised curriculum</li>
            <li>&rarr; Equivalency certificate required for private UAE & international schools</li>
          </ul>
        </div>

        <!-- Card 3 -->
        <div class="eligibility-card eligibility-card--blue">
          <div class="eligibility-card__icon">
            <img src="assets/images/eligibility/img3.png" alt="School Icon" />
          </div>
          <h3 class="eligibility-card__title">High School Equivalency</h3>
          <p class="eligibility-card__subtitle">Certificate requirements</p>
          <a href="#" class="eligibility-card__link">
            View more
            <span class="eligibility-card__arrow"></span>
          </a>
        </div>

        <!-- Card 4 -->
        <div class="eligibility-card eligibility-card--blue">
          <div class="eligibility-card__icon">
            <img src="assets/images/eligibility/img4.png" alt="Admissions Icon" />
          </div>
          <h3 class="eligibility-card__title">Competitive Admissions</h3>
          <p class="eligibility-card__subtitle">Selection process</p>
          <a href="#" class="eligibility-card__link">
            View more
            <span class="eligibility-card__arrow"></span>
          </a>
        </div>

      </div>
    </div>
  </section>


  <section class="admissions-timeline">
    <div class="container">

      <h2 class="section-title">Fall 2026 Admissions Timeline</h2>
      <p class="section-subtitle">
        Click any milestone for full details, notes and deadlines.
      </p>

      <!-- Legend -->
      <div class="legend">
        <div class="legend-item">
          <span class="legend-dot bg-blue"></span>
          <span>Application</span>
        </div>
        <div class="legend-item">
          <span class="legend-dot bg-orange"></span>
          <span>Testing &amp; Review</span>
        </div>
        <div class="legend-item">
          <span class="legend-dot bg-green"></span>
          <span>Offers</span>
        </div>
        <div class="legend-item">
          <span class="legend-dot bg-red"></span>
          <span>Deadlines</span>
        </div>
      </div>

      <!-- Timeline -->

      <div class="timeline-wrapper">



        <!-- Timeline -->
        <div class="timeline">

          <!-- 1 -->
          <div class="timeline-row">
            <div class="date-col">Oct 29, 2025</div>
            <div class="spine-col">
              <div class="spine-line"></div>
              <div class="step-badge bg-blue">1</div>
            </div>
            <div class="content-col">
              <button class="accordion" onclick="toggle(this)">
                <div class="accordion-header">
                  <span class="accordion-title">NAPO Application Opens</span>
                  <span class="accordion-chevron">▾</span>
                </div>
                <div class="accordion-body">
                  <div class="accordion-content">
                    The NAPO (National Admission Program Online) application portal opens, allowing eligible students to begin their application process for Khalifa University.
                  </div>
                </div>
              </button>
            </div>
            <div class="right-col"></div>
          </div>

          <!-- 2 -->
          <div class="timeline-row">
            <div class="date-col">Nov 17, 2025</div>
            <div class="spine-col">
              <div class="spine-line"></div>
              <div class="step-badge bg-blue">2</div>
            </div>
            <div class="content-col">
              <button class="accordion open" onclick="toggle(this)">
                <div class="accordion-header">
                  <span class="accordion-title">General Applications Open</span>
                  <span class="accordion-chevron">▾</span>
                </div>
                <div class="accordion-body">
                  <div class="accordion-content">
                    Applications open for Expats (Grade 12), International applicants, and Previous Year Graduates of all nationalities.
                  </div>
                </div>
              </button>
            </div>
            <div class="right-col"></div>
          </div>

          <!-- 3 -->
          <div class="timeline-row">
            <div class="date-col">Dec 1, 2025</div>
            <div class="spine-col">
              <div class="spine-line"></div>
              <div class="step-badge bg-orange">3</div>
            </div>
            <div class="content-col">
              <button class="accordion" onclick="toggle(this)">
                <div class="accordion-header">
                  <span class="accordion-title">Screening Begins</span>
                  <span class="accordion-chevron">▾</span>
                </div>
                <div class="accordion-body">
                  <div class="accordion-content">
                    The admissions team begins reviewing submitted applications, verifying documents, and assessing academic qualifications of all applicants.
                  </div>
                </div>
              </button>
            </div>
            <div class="right-col"></div>
          </div>

          <!-- 4 -->
          <div class="timeline-row">
            <div class="date-col">Mar 2, 2026</div>
            <div class="spine-col">
              <div class="spine-line"></div>
              <div class="step-badge bg-red">4</div>
            </div>
            <div class="content-col">
              <button class="accordion" onclick="toggle(this)">
                <div class="accordion-header">
                  <span class="accordion-title">Application Deadline</span>
                  <span class="accordion-chevron">▾</span>
                </div>
                <div class="accordion-body">
                  <div class="accordion-content">
                    The final deadline for submitting all application materials. Late applications will not be considered for the Fall 2026 intake.
                  </div>
                </div>
              </button>
            </div>
            <div class="right-col"></div>
          </div>

          <!-- 5 -->
          <div class="timeline-row">
            <div class="date-col">Feb – Apr 2026</div>
            <div class="spine-col">
              <div class="spine-line"></div>
              <div class="step-badge bg-orange">5</div>
            </div>
            <div class="content-col">
              <button class="accordion" onclick="toggle(this)">
                <div class="accordion-header">
                  <span class="accordion-title">KU Admission Tests Period</span>
                  <span class="accordion-chevron">▾</span>
                </div>
                <div class="accordion-body">
                  <div class="accordion-content">
                    Shortlisted applicants will be invited to sit the KU admission tests during this period. Tests evaluate academic aptitude in mathematics, sciences, and English proficiency.
                  </div>
                </div>
              </button>
            </div>
            <div class="right-col"></div>
          </div>

          <!-- 6 -->
          <div class="timeline-row">
            <div class="date-col">Jan 12 – May 2026</div>
            <div class="spine-col">
              <div class="spine-line"></div>
              <div class="step-badge bg-green">6</div>
            </div>
            <div class="content-col">
              <button class="accordion" onclick="toggle(this)">
                <div class="accordion-header">
                  <span class="accordion-title">Early Admission Offers</span>
                  <span class="accordion-chevron">▾</span>
                </div>
                <div class="accordion-body">
                  <div class="accordion-content">
                    Successful candidates who meet all criteria will receive conditional or unconditional offers of admission on a rolling basis throughout this period.
                  </div>
                </div>
              </button>
            </div>
            <div class="right-col"></div>
          </div>

          <!-- 7 -->
          <div class="timeline-row">
            <div class="date-col">Jul 1–11, 2026</div>
            <div class="spine-col">
              <div class="spine-line"></div>
              <div class="step-badge bg-red">7</div>
            </div>
            <div class="content-col">
              <button class="accordion" onclick="toggle(this)">
                <div class="accordion-header">
                  <span class="accordion-title">Final Transcript Deadline</span>
                  <span class="accordion-chevron">▾</span>
                </div>
                <div class="accordion-body">
                  <div class="accordion-content">
                    All admitted students must submit their official final transcripts and graduation certificates by this date to confirm their enrollment for Fall 2026.
                  </div>
                </div>
              </button>
            </div>
            <div class="right-col"></div>
          </div>

          <!-- 8 -->
          <div class="timeline-row">
            <div class="date-col">Aug 2026</div>
            <div class="spine-col">
              <div class="spine-line"></div>
              <div class="step-badge bg-green">8</div>
            </div>
            <div class="content-col">
              <button class="accordion" onclick="toggle(this)">
                <div class="accordion-header">
                  <span class="accordion-title">Fall 2026 Orientation</span>
                  <span class="accordion-chevron">▾</span>
                </div>
                <div class="accordion-body">
                  <div class="accordion-content">
                    New students attend orientation week, meet faculty and peers, complete registration, and prepare for the start of the Fall 2026 semester at Khalifa University.
                  </div>
                </div>
              </button>
            </div>
            <div class="right-col"></div>
          </div>

        </div><!-- /timeline -->
      </div><!-- /wrapper -->
    </div>
  </section>


  <!-- important policies Section -->
  <section class="important-policies">
    <div class="container">

      <div class="important-policies-container">
        <h2 class="section-title">Important Policies & Notes </h2>
        <div id="important-policies-accordion" class="accordion">
          <!-- Injected via JavaScript -->
        </div>
      </div>
    </div>

  </section>








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

      <div class="cards-grid">

        <!-- Card 1: Engineering -->
        <div class="card">
          <!-- Using a placeholder science/lab image via picsum with a blue tint -->
          <img class="card-img"
            src="assets/images/graduate/image1.png"
            alt="Engineering lab" />
          <div class="card-overlay"></div>
          <div class="card-content">
            <span class="card-tag tag-engineering">Engineering</span>
            <div class="card-title">College of Engineering &amp; Physical Sciences</div>
            <div class="card-flex">
              <div class="card-sub">Aerospace, Civil, Electrical, Mechanical &amp; Chemical Engineering</div>
              <div class="card-btn">
                <svg xmlns="http://www.w3.org/2000/svg"
                  width="20" height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2: Medicine -->
        <div class="card">
          <img class="card-img"
            src="assets/images/graduate/image2.png"
            alt="Medicine lab" />
          <div class="card-overlay"></div>
          <div class="card-content">
            <span class="card-tag tag-medicine">Medicine</span>
            <div class="card-title">College of Medicine &amp; Health Sciences</div>
            <div class="card-flex">
              <div class="card-sub">Medicine, Biomedical Sciences, Nursing &amp; Health programs</div>
              <div class="card-btn">
                <svg xmlns="http://www.w3.org/2000/svg"
                  width="20" height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3: Science -->
        <div class="card">
          <img class="card-img"
            src="assets/images/graduate/image3.png"
            alt="Science lab" />
          <div class="card-overlay"></div>
          <div class="card-content">
            <span class="card-tag tag-science">Science</span>
            <div class="card-title">College of Computing &amp; Mathematical Sciences</div>
            <div class="card-flex">
              <div class="card-sub">Mathematics, Physics, Chemistry &amp; Computer Science</div>
              <div class="card-btn">
                <svg xmlns="http://www.w3.org/2000/svg"
                  width="20" height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </div>
            </div>
          </div>
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
          <!-- <div class="decorative-box"></div> -->
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


  <!-- support  -->
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
  <script type="module" src="assets/js/important-policies.js"></script>

  <script type="module" src="assets/js/data&admission.js"></script>

  <script>
    function toggle(btn) {
      btn.classList.toggle('open');
    }
  </script>
</body>

</html>