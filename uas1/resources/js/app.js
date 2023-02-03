import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const toggleButton = document.getElementById("nav-toggle");
const navMenu = document.getElementById("nav-menu");

toggleButton.addEventListener("click", () => {
    navMenu.classList.toggle("hidden");
});
