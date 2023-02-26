const left = document.querySelector(".left");
const right = document.querySelector(".right");
const split = document.querySelector(".split");

left.addEventListener("mouseenter", () => {
  right.classList.add("hover-left");
});

left.addEventListener("mouseleave", () => {
  right.classList.remove("hover-left");
});

right.addEventListener("mouseenter", () => {
  right.classList.add("hover-right");
});

right.addEventListener("mouseleave", () => {
  right.classList.remove("hover-right");
});

