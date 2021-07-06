import Swiper, { Navigation, Pagination, Autoplay, Parallax } from "swiper";
import "swiper/swiper-bundle.min.css";

// configure Swiper to use modules
Swiper.use([Navigation, Pagination, Autoplay, Parallax]);

const swiper = new Swiper(".hero-slider", {
  // speed: 400,
  // spaceBetween: 100,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 5000,
  },
});
console.log(swiper.autoplay);
