//memunculkan opsi profil
  document.addEventListener("DOMContentLoaded", function() {
    const userMenuToggle = document.getElementById("user-menu-toggle");
    const userMenu = document.getElementById("dropdown-user");

    userMenuToggle.addEventListener("click", function() {
      const expanded = userMenuToggle.getAttribute("aria-expanded") === "true" || false;
      userMenuToggle.setAttribute("aria-expanded", !expanded);
      userMenu.classList.toggle("hidden");
    });

    document.addEventListener("click", function(event) {
      if (!userMenu.contains(event.target) && !userMenuToggle.contains(event.target)) {
        userMenu.classList.add("hidden");
        userMenuToggle.setAttribute("aria-expanded", "false");
      }
    });
  });


//side bar
  document.addEventListener("DOMContentLoaded", function() {
    const sidebarButton = document.querySelector("[data-drawer-toggle='logo-sidebar']");
    const sidebar = document.getElementById("logo-sidebar");

    sidebarButton.addEventListener("click", function() {
        const isVisible = sidebar.classList.contains("translate-x-0");
        if (isVisible) {
            sidebar.classList.remove("translate-x-0");
            sidebar.classList.add("-translate-x-full");
        } else {
            sidebar.classList.remove("-translate-x-full");
            sidebar.classList.add("translate-x-0");
        }
    });
});

//pop up form
const openPopupBtn = document.getElementById('open-popup-btn');
        const popupBg = document.getElementById('popup-bg');
        const popupForm = document.getElementById('popup-form');

        openPopupBtn.addEventListener('click', () => {
            popupBg.classList.remove('hidden');
            popupForm.classList.remove('hidden');
        });

        popupBg.addEventListener('click', () => {
            popupBg.classList.add('hidden');
            popupForm.classList.add('hidden');
        });

