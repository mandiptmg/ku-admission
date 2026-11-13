import { dates } from "../../data/data.js";

document.addEventListener("DOMContentLoaded", () => {
  const list = document.getElementById("dates-list");
  const btnPrev = document.getElementById("prev-date");
  const btnNext = document.getElementById("next-date");

  if (!list || !btnPrev || !btnNext) return;

  const itemHeight = 95;
  const visibleItems = 4;
  let currentIndex = 0;

  list.innerHTML = dates
    .map(
      (item) => `
      <div class="date-item">
        <div class="date-badge">
          <b>${item.day}</b>
          <small>${item.month}</small>
        </div>
        <div class="date-content">
          <small>${item.fullDate}</small>
          <strong>${item.title}</strong>
        </div>
      </div>
    `
    )
    .join("");

  const updateCarousel = () => {
    list.style.transform = `translateY(-${currentIndex * itemHeight}px)`;
    btnPrev.disabled = currentIndex === 0;
    btnNext.disabled = currentIndex >= dates.length - visibleItems;
  };

  btnPrev.addEventListener("click", () => {
    if (currentIndex > 0) currentIndex--;
    updateCarousel();
  });

  btnNext.addEventListener("click", () => {
    if (currentIndex < dates.length - visibleItems) currentIndex++;
    updateCarousel();
  });

  updateCarousel();
});


document.addEventListener("DOMContentLoaded", () => {
  const playBtn = document.querySelector(".admissions-journey .play-button");
  const modal = document.getElementById("video-modal");
  const iframe = document.getElementById("video-iframe");
  const closeBtn = document.getElementById("close-modal");

  const videoUrl = "https://www.youtube.com/embed/YOUR_VIDEO_ID?autoplay=1";

  playBtn.addEventListener("click", () => {
    iframe.src = videoUrl; // set video URL with autoplay
    modal.classList.add("open");
  });

  closeBtn.addEventListener("click", () => {
    iframe.src = ""; // stop video
    modal.classList.remove("open");
  });

  // Close modal on clicking outside video
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      iframe.src = "";
      modal.classList.remove("open");
    }
  });
});