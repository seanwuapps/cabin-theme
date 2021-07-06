import anime from "animejs/lib/anime.es.js";

const menuTrigger = document.querySelector(".menu-trigger");
const navOverlay = document.querySelector(".nav-overlay");

const openMenu = () => {
  menuTrigger.classList.add("open");
  navOverlay.classList.add("open");

  anime({
    targets: ".main-nav li",
    opacity: [0, 1],
    translateY: [20, 0],
    delay: anime.stagger(100, { start: 500 }), // increase delay by 100ms for each elements.
  });
};

const closeMenu = () => {
  menuTrigger.classList.remove("open");
  navOverlay.classList.remove("open");
  anime({
    targets: ".main-nav li",
    opacity: 0,
    translateY: 20,
  });
};

menuTrigger.addEventListener("click", () => {
  if (!menuTrigger.classList.contains("open")) {
    openMenu();
  } else {
    closeMenu();
  }
});

const navLink = document.querySelectorAll(".main-nav li a");
navLink.forEach((link) => {
  link.addEventListener("click", () => {
    closeMenu();
  });
});
