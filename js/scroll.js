import debounce from "lodash.debounce";

const headerbar = document.querySelector(".header-bar-desktop");
window.addEventListener(
  "scroll",
  debounce(() => {
    if (window.scrollY > 100) {
      headerbar.classList.add("hasBg");
    } else {
      headerbar.classList.remove("hasBg");
    }
  }, 50)
);
