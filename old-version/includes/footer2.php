<?php
// Load JSON data
$dataPath = __DIR__ . '/../data/footer-data.json';
$data = json_decode(file_get_contents($dataPath), true);

// Newsletter handling
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['subscribe'])) {
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

  if (empty($email)) {
    $error = "Please enter your email address.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Please enter a valid email address.";
  } else {
    // Here you can save email to DB or send to API
    $success = "Thank you for subscribing!";
  }
}
?>

<footer class="site-footer">
  <div class="site-footer__top">
    <div class="container site-footer__container">

      <!-- Location -->
      <div class="footer-location">
        <div class="footer-location__info">

          <span class="footer-location__address">
            <img src="<?php echo $data['address']['icon']; ?>" alt="Address Icon" class="footer-location__icon">
            <?php echo nl2br(htmlspecialchars($data['address']['text'])); ?>
          </span>

          <span class="footer-location__contact">
            <img src="<?php echo $data['contact']['icon']; ?>" alt="Contact Icon" class="footer-location__icon">
            <a href="<?php echo $data['contact']['url']; ?>">
              <?php echo htmlspecialchars($data['contact']['text']); ?>
            </a>
          </span>

          <span class="footer-location__phone">
            <img src="<?php echo $data['phone']['icon']; ?>" alt="Phone Icon" class="footer-location__icon">
            T :
            <a href="tel:+97123123333">
              <?php echo htmlspecialchars($data['phone']['text']); ?>
            </a>
          </span>

        </div>


        <!-- Newsletter -->
        <div class="footer-newsletter">
          <h4 class="footer-newsletter__title">
            <?php echo htmlspecialchars($data['newsletter']['title']); ?>
          </h4>

          <?php if ($error): ?>
            <p class="footer-newsletter__error"><?php echo $error; ?></p>
          <?php endif; ?>

          <?php if ($success): ?>
            <p class="footer-newsletter__success"><?php echo $success; ?></p>
          <?php endif; ?>

          <form method="POST" class="footer-newsletter__form">
            <input
              type="email"
              name="email"
              class="footer-newsletter__input"
              placeholder="Enter your email address"
              required>
            <button
              type="submit"
              name="subscribe"
              class="footer-newsletter__button">
              Subscribe
            </button>
          </form>
        </div>

        <!-- Social -->
        <div class="footer-social">
          <h4 class="footer-social__title">Social links</h4>

          <div class="footer-social__list">
            <?php foreach ($data['social_links'] as $social): ?>
              <a
                href="<?php echo $social['url']; ?>"
                target="_blank"
                class="footer-social__item">
                <img
                  src="<?php echo $social['icon']; ?>"
                  alt="<?php echo htmlspecialchars($social['name']); ?>"
                  class="footer-social__icon">
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-links">
        <h4 class="footer-links__title">Other links</h4>

        <ul class="footer-links__list">
          <?php foreach ($data['quick_links'] as $link): ?>
            <li class="footer-links__item">
              <a
                href="<?php echo $link['url']; ?>"
                class="footer-links__link">
                <?php echo htmlspecialchars($link['label']); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>

  <!-- Bottom -->
  <div class="site-footer__bottom">
    <div class="container site-footer__content ">
      <span class="site-footer__copyright">
        Copyright <?php echo date('Y'); ?> - Khalifa University | All Rights Reserved
      </span>

      <img src="../assets//images/iso-certification-for-footer.png" alt="iso-certification" class="site-footer__img">
    </div>
  </div>
</footer>