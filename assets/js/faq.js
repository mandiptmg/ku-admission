async function initFAQ() {
  const container = document.getElementById("faq-accordion");

  try {
    const response = await fetch("../../data/data.json");
    const data = await response.json();

    data.faqs.forEach((item) => {
      const faqDiv = document.createElement("div");
      faqDiv.className = "faq-item";
      faqDiv.innerHTML = `
                <button class="faq-header">
                    <span>${item.question}</span>
                    <span class="icon-wrapper">
      <img class="icon icon-chevron" src="assets/images/chevron.png" alt="open"/>
      <img class="icon icon-minus" src="assets/images/minus.png" alt="close"/>
    </span>
                </button>
                <div class="faq-body"><p>${item.answer}</p></div>
            `;

      faqDiv.querySelector(".faq-header").addEventListener("click", () => {
        const isOpen = faqDiv.classList.contains("is-open");

        // Close all others
        document
          .querySelectorAll(".faq-item")
          .forEach((el) => el.classList.remove("is-open"));

        // Toggle current
        if (!isOpen) faqDiv.classList.add("is-open");
      });

      container.appendChild(faqDiv);
    });
  } catch (error) {
    console.error("Error loading FAQ:", error);
  }
}

document.addEventListener("DOMContentLoaded", initFAQ);
