import debounce from "lodash.debounce";

export const bigScreen = () => {
  return window.innerWidth >= 576;
};

window.addEventListener(
  "resize",
  debounce(() => {
    if (bigScreen()) {
      document.body.classList.add("desktop");
    } else {
      document.body.classList.remove("desktop");
    }
  }, 300)
);
