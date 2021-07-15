import Swiper, {
  Navigation,
  Pagination,
  Autoplay,
  Parallax,
  EffectFade,
} from "swiper";
import "swiper/swiper-bundle.min.css";
import anime from "animejs/lib/anime.es.js";
const easing = {
  default: "easeOutCubic",
  linear: "linear",
};
/*************************************************************
 * Hero slider
 *************************************************************/
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
});
anime({
  targets: ".hero-slider-timer",
  scaleX: [0, 1],
  easing: easing.linear,
  duration: speed,
});
swiper.on("slideChange", () => {
  anime({
    targets: ".hero-slider-timer",
    scaleX: [0, 1],
    easing: easing.linear,
    duration: speed,
  });
});

/*************************************************************
 * Gallery slider
 *************************************************************/
const cursor = document.querySelector(".custom-cursor");

const moveNextCursor = (e) => {
  anime({
    targets: cursor,
    opacity: 1,
    translateX: e.clientX,
    translateY: e.clientY,
    rotate: 180,
    easing: easing.default,
    duration: 50,
  });
};
const movePrevCursor = (e) => {
  anime({
    targets: cursor,
    opacity: 1,
    translateX: e.clientX,
    translateY: e.clientY,
    rotate: 0,
    easing: easing.default,
    duration: 50,
  });
};
const hideCursor = () => {
  anime({
    targets: cursor,
    opacity: 0,
    duration: 100,
  });
};
const pressCursor = () => {
  anime({
    targets: cursor,
    scale: [0.6, 1],
    duration: 500,
  });
};
const initNavCursor = (prevEl, nextEl) => {
  nextEl.addEventListener("mousemove", moveNextCursor);
  prevEl.addEventListener("mousemove", movePrevCursor);
  nextEl.addEventListener("mouseleave", hideCursor);
  prevEl.addEventListener("mouseleave", hideCursor);
  nextEl.addEventListener("click", pressCursor);
  prevEl.addEventListener("click", pressCursor);
};

const gallerySliders = document.querySelectorAll(".gallery-slider");
gallerySliders.forEach((slider) => {
  const prevEl = slider.querySelector(".swiper-button-prev");
  const nextEl = slider.querySelector(".swiper-button-next");
  initNavCursor(prevEl, nextEl);
  const gallery = new Swiper(slider, {
    pagination: {
      el: slider.querySelector(".swiper-pagination"),
      type: "fraction",
    },
    navigation: {
      nextEl,
      prevEl,
    },
    speed: 1000,
    effect: "custom",
    breakpoints: {
      768: {
        allowTouchMove: false,
        slidesPerView: 2,
        slidesPerGroupSkip: 1,
      },
    },
  });
});

const contentBoxSliders = document.querySelectorAll(".contentbox-slider");
contentBoxSliders.forEach((slider) => {
  const prevEl = slider.querySelector(".swiper-button-prev");
  const nextEl = slider.querySelector(".swiper-button-next");
  initNavCursor(prevEl, nextEl);
  const contentBoxGallery = new Swiper(slider, {
    pagination: {
      el: slider.querySelector(".swiper-pagination"),
      type: "fraction",
    },
    navigation: {
      nextEl,
      prevEl,
    },
    speed: 1000,
    spaceBetween: 10,
    breakpoints: {
      768: {
        allowTouchMove: false,
      },
    },
  });

  contentBoxGallery.on("slideChange", (swiper) => {
    console.log(swiper.activeIndex, swiper.slides);
    anime({
      targets: swiper.slides[swiper.activeIndex].querySelector(".text"),
      opacity: [0, 1],
      duration: 500,
      delay: 1000,
      easing: easing.default,
    });
  });
});

const imageSliders = document.querySelectorAll(".single-image-slider");
imageSliders.forEach((slider) => {
  const prevEl = slider.querySelector(".swiper-button-prev");
  const nextEl = slider.querySelector(".swiper-button-next");
  initNavCursor(prevEl, nextEl);
  new Swiper(slider, {
    pagination: {
      el: slider.querySelector(".swiper-pagination"),
      type: "fraction",
    },
    navigation: {
      nextEl,
      prevEl,
    },
    speed: 1000,
    spaceBetween: 40,
    breakpoints: {
      768: {
        allowTouchMove: false,
      },
    },
  });
});
