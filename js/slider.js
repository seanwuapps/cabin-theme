import Swiper, {
  Navigation,
  Pagination,
  Autoplay,
  Parallax,
  EffectFade,
} from "swiper";
import "swiper/swiper-bundle.min.css";
import anime from "animejs/lib/anime.es.js";

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, Autoplay, Parallax, EffectFade]);

const speed = 8000;

const swiper = new Swiper(".hero-slider", {
  loop: true,
  // allowTouchMove: false,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
  // navigation: {
  //   nextEl: ".swiper-button-next",
  //   prevEl: ".swiper-button-prev",
  // },
  autoplay: {
    delay: speed,
  },
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  parallax: true,
});
anime({
  targets: ".hero-slider-timer",
  scaleX: [0, 1],
  easing: "linear",
  duration: speed,
});
swiper.on("slideChange", () => {
  anime({
    targets: ".hero-slider-timer",
    scaleX: [0, 1],
    easing: "linear",
    duration: speed,
  });
});
