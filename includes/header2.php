    <?php require_once 'config.php'; ?>

    <header class="ku-header">
      <!-- Top Bar -->
      <div class="ku-header__top">
        <div class="container ku-header__container">
          <a href="https://www.ku.ac.ae/" class="ku-header__logo">
            <img src="../assets/images/ku-logo.png" alt="Khalifa University" />
          </a>

          <div class="ku-header__top-actions">
            <div class="ku-header__icon-btn">
              <img src="../assets/images/search-icon.png" alt="search-icon" />
              <input type="text" placeholder="SEARCH" class="ku-header__input">
            </div>
            <div class="ku-header__actions-right">
              <div class="ku-header__icon-btn">
                <img src="../assets/images/login-icon.png" alt="login-icon" />
                <span>LOGIN</span>
              </div>
              <div class="ku-header__hamburger">
                <span></span><span></span><span></span>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Main Navigation -->
       <nav class="ku-nav">
    <div class="container">
      <ul class="ku-nav__menu js-menu"></ul>
    </div>
  </nav>

      <!-- Mega Menu -->
      <div class="mega-menu js-mega-menu">
        <div class="container">
          <div class="mega-menu__content js-mega-content"></div>
        </div>
      </div>
    </header>