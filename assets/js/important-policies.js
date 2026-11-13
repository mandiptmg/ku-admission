import { Importantfaqs } from "../../data/data.js";

function initFAQ() {
  const container = document.getElementById("important-policies-accordion");

  if (!container) return;

  // Generate HTML using map
  container.innerHTML = Importantfaqs.map(
    (item) => `
      <div class="faq-item">
        <button class="faq-header">
          <span>${item.question}</span>
       
        </button>

        <div class="faq-body"></div>
      </div>
    `,
  ).join(""); // 🔥 important!

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
