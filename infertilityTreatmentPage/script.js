document.addEventListener("DOMContentLoaded", () => {
  const navLinks = document.querySelectorAll(".inf-treat-info__nav-link");

  navLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      navLinks.forEach((l) => l.classList.remove("inf-treat-info__nav-link--active"));

      link.classList.add("inf-treat-info__nav-link--active");
    })
  })
});