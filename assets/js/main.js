$(function () {

  /* =========================
     MOBILE MENU TOGGLE
  ========================== */
  const $mobileMenu = $("#mobileMenu");
  const $menuToggle = $("#menuToggle");
  const $closeMenu = $("#closeMenu");

  function openMenu() {
    $mobileMenu.addClass("active");
  }

  function closeMenu() {
    $mobileMenu.removeClass("active");
  }

  $menuToggle.on("click", openMenu);
  $closeMenu.on("click", closeMenu);

  $mobileMenu.on("click", function (e) {
    if (e.target === this) closeMenu();
  });

  $mobileMenu.find("a").on("click", closeMenu);

  $(window).on("resize", function () {
    if ($(window).width() > 960) closeMenu();
  });


  /* =========================
     SCROLL ANIMATION (INTERSECTION OBSERVER)
  ========================== */
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        $(entry.target).addClass("in-view");
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  $(".animate-on-scroll").each(function () {
    observer.observe(this);
  });


  /* =========================
     LOGO SWITCH ON SCROLL
  ========================== */
  const $nav = $("#navbar");
  const $heroLogo = $("#hero_logo");
  const $headerLogo = $("#header_logo");

  if ($heroLogo.length && $headerLogo.length) {

    $heroLogo.addClass("visible");
    $headerLogo.removeClass("visible");

    $(window).on("scroll", function () {

      const navHeight = $nav.outerHeight() || 0;
      const heroRect = $heroLogo[0].getBoundingClientRect();
      const logoTop = heroRect.top;

      if (logoTop <= navHeight + 20) {
        $heroLogo.removeClass("visible");
        $headerLogo.addClass("visible");
      } else {
        $heroLogo.addClass("visible");
        $headerLogo.removeClass("visible");
      }
    });
  }


  /* =========================
     SMOOTH SCROLL
  ========================== */
  const OFFSET = 100;

  function smoothScrollTo(target) {
    const $target = $(target);
    if ($target.length) {
      $("html, body").stop().animate({
        scrollTop: $target.offset().top - OFFSET
      }, 400);
    }
  }

  $(document).on("click", "a[href^='#']", function (e) {
    const target = $(this).attr("href");

    if (target.length > 1 && $(target).length) {
      e.preventDefault();
      smoothScrollTo(target);
      history.replaceState(null, null, target);
    }
  });

  $(window).on("load", function () {
    const hash = window.location.hash;
    if (hash && $(hash).length) {
      setTimeout(() => smoothScrollTo(hash), 300);
    }
  });


  /* =========================
     VIDEO MODAL
  ========================== */
  const modal = document.getElementById("video-modal");
  const iframe = document.getElementById("video-iframe");
  const closeBtn = document.getElementById("close-modal");
  const openBtn = document.getElementById("open-video");

  const videoURL = "https://www.youtube.com/embed/ielIR9ejj40?autoplay=1";

  function openModal(e) {
    e.preventDefault();
    modal.classList.add("active");
    iframe.src = videoURL;
  }

  function closeModal() {
    modal.classList.remove("active");
    iframe.src = "";
  }

  if (openBtn && modal && iframe) {
    openBtn.addEventListener("click", openModal);
  }

  if (closeBtn) {
    closeBtn.addEventListener("click", closeModal);
  }

  if (modal) {
    modal.addEventListener("click", function (e) {
      if (e.target === modal) closeModal();
    });
  }

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeModal();
  });

});