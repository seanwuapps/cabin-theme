import debounce from "lodash.debounce";
// import Scrollbar from "smooth-scrollbar";
// Scrollbar.init(document.querySelector("#scroll-body"), {
//   damping: 0.06,
// });
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
