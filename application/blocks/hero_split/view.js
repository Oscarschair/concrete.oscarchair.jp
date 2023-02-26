const left = document.querySelector(".left");
const right = document.querySelector(".right");
const split = document.querySelector(".split");

left.addEventListener("mouseenter", () => {
  split.classList.add("hover-left");
});

left.addEventListener("mouseleave", () => {
  split.classList.remove("hover-left");
});

right.addEventListener("mouseenter", () => {
  left.classList.add("hover-right");
  right.classList.add("hover-right");
});

right.addEventListener("mouseleave", () => {
  left.classList.remove("hover-right");
  right.classList.remove("hover-right");
});

