import simpleParallax from "simple-parallax-js";

new simpleParallax(document.querySelectorAll(".hero-slide-img"), {
  orientation: "down",
  scale: 1.4,
  overflow: true,
  transition: "none",
});
new simpleParallax(document.querySelectorAll(".featured-parallax"), {
  scale: 1.5,
});

new simpleParallax(document.querySelectorAll(".contentbox .text"), {
  scale: 1.5,
  overflow: true,
  transition: "none",
});
