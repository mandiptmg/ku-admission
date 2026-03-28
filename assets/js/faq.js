import { faqs } from "../../data/data.js";

function initFAQ() {
  const container = document.getElementById("faq-accordion");

  if (!container) return;

  // Generate HTML using map
  container.innerHTML = faqs
    .map(
      (item) => `
      <div class="faq-item">
        <button class="faq-header">
          <span>${item.question}</span>
          <span class="icon-wrapper">
            <img class="icon icon-chevron" src="assets/images/chevron.png" alt="open"/>
            <img class="icon icon-minus" src="assets/images/minus.png" alt="close"/>
          </span>
        </button>

        <div class="faq-body"><p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur corrupti, earum nobis mollitia, fuga amet blanditiis veniam saepe soluta fugit sequi facere tenetur omnis laborum non, eos cum eum autem.</p></div>
      </div>
    `,
    )
    .join(""); // 🔥 important!

  // Add toggle functionality
  const faqItems = container.querySelectorAll(".faq-item");

  faqItems.forEach((faqDiv) => {
    const header = faqDiv.querySelector(".faq-header");

    header.addEventListener("click", () => {
      const isOpen = faqDiv.classList.contains("is-open");

      // Close all
      faqItems.forEach((item) => item.classList.remove("is-open"));

      // Open clicked
      if (!isOpen) {
        faqDiv.classList.add("is-open");
      }
    });
  });
}

document.addEventListener("DOMContentLoaded", initFAQ);
