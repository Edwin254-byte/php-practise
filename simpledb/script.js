const nav = document.querySelector(".nav");
const links = document.querySelectorAll(".nav-link");

nav.addEventListener("click", function (e) {
  e.preventDefault();
  const clicked = e.target.classList.contains("nav-link");
  if (!clicked) return;
  console.log(e.target);
  links.forEach((link) => link.classList.remove("active"));
  e.target.classList.add("active");
});
