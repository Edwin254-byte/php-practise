const links = document.querySelectorAll(".nav-link");
const url = window.location.href;
window.onload = function () {
  links.forEach((link) => {
    let href = link.getAttribute("href");
    if (url.includes(href)) link.classList.add("active");
  });
};
