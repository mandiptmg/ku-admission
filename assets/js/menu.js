// menu.js
const menuEl = document.querySelector(".js-menu");
const megaMenu = document.querySelector(".js-mega-menu");
const megaContent = megaMenu.querySelector(".js-mega-content");

// Fetch JSON inside the module
fetch("../../data/header-data.json")
  .then(res => res.json())
  .then(menuItems => {
    // Render main navigation
    menuEl.innerHTML = menuItems
      .map(item => `<li class="ku-nav__item" data-key="${item.key}">${item.label}</li>`)
      .join("");

    // Hover handling
    menuEl.addEventListener("mouseover", e => {
      const itemEl = e.target.closest(".ku-nav__item");
      if (!itemEl) return;

      const key = itemEl.dataset.key;
      const activeItem = menuItems.find(i => i.key === key);

      if (!activeItem || !activeItem.mega) {
        megaMenu.classList.remove("active");
        return;
      }

      megaContent.innerHTML = activeItem.mega
        .map(col => `
          <div class="mega-menu__col">
            <h4>${col.title}</h4>
            ${col.links.map(link => `<a href="${link.url}">${link.label}</a>`).join("")}
          </div>
        `)
        .join("");

      const rect = itemEl.getBoundingClientRect();
      megaMenu.style.left = rect.left + "px";
      megaMenu.style.top = rect.bottom + "px";
      megaMenu.classList.add("active");
    });

    // Hide mega menu on mouse leave
    menuEl.addEventListener("mouseleave", () => {
      megaMenu.classList.remove("active");
    });
    megaMenu.addEventListener("mouseleave", () => {
      megaMenu.classList.remove("active");
    });
  })
  .catch(err => console.error("Error loading menu JSON:", err));
