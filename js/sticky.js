import debounce from "lodash/debounce";

function isInView(element) {
  var rect = element.getBoundingClientRect();
  const vh = window.innerHeight || document.documentElement.clientHeight;
  return rect.top - vh <= -vh / 2; // scrolled top is at half of the screen
}

// detect if .sticky-content .contentbox is in view on scroll
const stickyBoxes = document.querySelectorAll(".sticky-content .contentbox");
const stickyBoxTitles = document.querySelectorAll(
  ".sticky-content .contentbox .text h4"
);
const stickyHeaderTitle = document.querySelector(".sticky-header h2");

window.addEventListener(
  "scroll",
  debounce(() => {
    stickyBoxes.forEach((box, i) => {
      if (isInView(box)) {
        const title = stickyBoxTitles[i];
        stickyHeaderTitle.textContent = title.textContent;
      }
    });
  }, 20)
);
