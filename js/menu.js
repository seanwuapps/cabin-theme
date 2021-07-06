import anime from "animejs/lib/anime.es.js";

const menuTrigger = document.querySelector(".menu-trigger");
const header = document.querySelector("header");

const openMenu = () => {
  menuTrigger.classList.add("open");
  header.classList.add("open");

  anime({
    targets: [".header-bar", ".main-nav li"],
    opacity: [0, 1],
    translateY: [20, 0],
    delay: anime.stagger(100, { start: 500 }), // increase delay by 100ms for each elements.
  });

  anime({
    targets: ".nav-overlay",
    translateY: "100%",
    easing: "easeInOutCubic",
    duration: 400,
  });
};

const closeMenu = () => {
  menuTrigger.classList.remove("open");
  header.classList.remove("open");
  anime({
    targets: [".main-nav li", ".header-bar"],
    opacity: 0,
    translateY: 20,
    duration: 400,
  });

  anime({
    targets: ".nav-overlay",
    translateY: "0",
    easing: "easeInOutCubic",
    delay: 400,
    duration: 400,
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
