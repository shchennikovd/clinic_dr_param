document.addEventListener("DOMContentLoaded", () => {
  const navLinks = document.querySelectorAll(".inf-treat-info__nav-link");

  navLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      navLinks.forEach((l) => l.classList.remove("inf-treat-info__nav-link--active"));

      link.classList.add("inf-treat-info__nav-link--active");
    })
  })

  const nav = document.querySelector('.inf-treat-info__nav');
  const blur = document.querySelector('.inf-treat-info__blur');
  
  window.addEventListener('scroll', () => {
    const top = parseFloat(getComputedStyle(nav).top);
  
    blur.classList.toggle(
      'is-visible',
      nav.getBoundingClientRect().top <= top
    );
  });
});