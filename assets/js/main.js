
$(function () {
  "use strict";

  /* ========================================
     1. MOBILE MENU
  ======================================== */

  const $mobileMenu = $("#mobileMenu");
  const $menuToggle = $("#menuToggle");
  const $closeMenu = $("#closeMenu");

  function openMenu() {
    $mobileMenu.addClass("active");
    $("body").addClass("menu-open");
    $menuToggle.attr("aria-expanded", "true");
  }

  function closeMenu() {
    $mobileMenu.removeClass("active");
    $("body").removeClass("menu-open");
    $menuToggle.attr("aria-expanded", "false");
  }

  $menuToggle.on("click", openMenu);
  $closeMenu.on("click", closeMenu);

  $mobileMenu.on("click", function (e) {
    if (e.target === this) closeMenu();
  });

  $mobileMenu.on("click", "a", closeMenu);

  $(window).on("resize", function () {
    if (window.innerWidth > 960) {
      closeMenu();
    }
  });


  /* ========================================
     2. SCROLL ANIMATIONS
  ======================================== */

  const animatedElements = document.querySelectorAll(".animate-on-scroll");

  if ("IntersectionObserver" in window) {
    const animationObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("in-view");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.1,
        rootMargin: "0px 0px -30px 0px",
      }
    );

    animatedElements.forEach((element) => {
      animationObserver.observe(element);
    });
  } else {
    animatedElements.forEach((element) => {
      element.classList.add("in-view");
    });
  }


  /* ========================================
     3. HEADER LOGO SWITCH
  ======================================== */

  const $nav = $("#navbar");
  const heroLogo = document.getElementById("hero_logo");
  const headerLogo = document.getElementById("header_logo");

  if (heroLogo && headerLogo && $nav.length) {
    let ticking = false;

    function updateLogo() {
      const navHeight = $nav.outerHeight() || 0;
      const logoTop = heroLogo.getBoundingClientRect().top;

      const isScrolled = logoTop <= navHeight + 20;

      heroLogo.classList.toggle("visible", !isScrolled);
      headerLogo.classList.toggle("visible", isScrolled);

      ticking = false;
    }

    function requestLogoUpdate() {
      if (!ticking) {
        requestAnimationFrame(updateLogo);
        ticking = true;
      }
    }

    updateLogo();

    window.addEventListener("scroll", requestLogoUpdate, {
      passive: true,
    });

    window.addEventListener("resize", requestLogoUpdate);
  }


  /* ========================================
     4. SMOOTH SCROLL
  ======================================== */

  const SCROLL_OFFSET = 100;
  const SCROLL_DURATION = 400;

  function smoothScrollTo(target) {
    const $target = $(target);

    if (!$target.length) return;

    $("html, body")
      .stop(true)
      .animate(
        {
          scrollTop: $target.offset().top - SCROLL_OFFSET,
        },
        SCROLL_DURATION
      );
  }

  // Anchor navigation
  $(document).on("click", "a[href^='#']", function (e) {
    const target = this.hash;

    if (!target || target === "#") return;

    const $target = $(target);

    if (!$target.length) return;

    e.preventDefault();

    smoothScrollTo(target);

    if (window.location.hash !== target) {
      history.replaceState(null, "", target);
    }
  });

  // Handle direct URL hash navigation
  $(window).on("load", function () {
    const hash = window.location.hash;

    if (hash && document.querySelector(hash)) {
      setTimeout(() => {
        smoothScrollTo(hash);
      }, 300);
    }
  });


  /* ========================================
     5. VIDEO MODAL
  ======================================== */

  const modal = document.getElementById("video-modal");
  const iframe = document.getElementById("video-iframe");
  const openBtn = document.getElementById("open-video");
  const closeBtn = document.getElementById("close-modal");

  const VIDEO_URL =
    "https://www.youtube.com/embed/ielIR9ejj40?autoplay=1";

  function openModal(e) {
    e.preventDefault();

    if (!modal || !iframe) return;

    modal.classList.add("active");
    modal.setAttribute("aria-hidden", "false");

    iframe.src = VIDEO_URL;

    document.body.classList.add("modal-open");

    closeBtn?.focus();
  }

  function closeModal() {
    if (!modal || !iframe) return;

    modal.classList.remove("active");
    modal.setAttribute("aria-hidden", "true");

    // Stop video playback
    iframe.src = "";

    document.body.classList.remove("modal-open");

    openBtn?.focus();
  }

  openBtn?.addEventListener("click", openModal);
  closeBtn?.addEventListener("click", closeModal);

  modal?.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeModal();
    }
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal?.classList.contains("active")) {
      closeModal();
    }
  });


  /* ========================================
     6. ADMISSIONS TIMELINE
     LEFT / RIGHT ARROW NAVIGATION
  ======================================== */

  document.querySelectorAll(".admissions-timeline").forEach((section) => {
    const track = section.querySelector(".timeline-track");
    const items = Array.from(
      section.querySelectorAll(".timeline-item")
    );

    const prevBtn = section.querySelector(".timeline-arrow.prev");
    const nextBtn = section.querySelector(".timeline-arrow.next");

    if (!track || !items.length || !prevBtn || !nextBtn) {
      return;
    }

    let currentIndex = 0;

    // Get visible items from CSS
    function getVisibleItems() {
      const value = getComputedStyle(track)
        .getPropertyValue("--visible-items")
        .trim();

      return Math.max(1, parseInt(value, 10) || 5);
    }

    // Calculate maximum navigation index
    function getMaxIndex() {
      return Math.max(0, items.length - getVisibleItems());
    }

    // Update timeline position and arrows
    function updateTimeline() {
      const maxIndex = getMaxIndex();

      currentIndex = Math.min(
        Math.max(currentIndex, 0),
        maxIndex
      );

      const activeItem = items[currentIndex];

      track.style.transform =
        `translate3d(-${activeItem.offsetLeft}px, 0, 0)`;

      prevBtn.disabled = currentIndex === 0;
      nextBtn.disabled = currentIndex >= maxIndex;

      // Accessibility
      prevBtn.setAttribute(
        "aria-label",
        "Previous timeline milestone"
      );

      nextBtn.setAttribute(
        "aria-label",
        "Next timeline milestone"
      );
    }

    // Navigate next
    function nextSlide() {
      if (currentIndex < getMaxIndex()) {
        currentIndex++;
        updateTimeline();
      }
    }

    // Navigate previous
    function prevSlide() {
      if (currentIndex > 0) {
        currentIndex--;
        updateTimeline();
      }
    }

    // Event listeners
    nextBtn.addEventListener("click", nextSlide);
    prevBtn.addEventListener("click", prevSlide);

    // Responsive update
    window.addEventListener("resize", updateTimeline);

    // Initial position
    updateTimeline();
  });

});
