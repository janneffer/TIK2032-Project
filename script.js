document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav__links .link a");
  
    navLinks.forEach((link) => {
      link.addEventListener("click", smoothScroll);
    });
  
    function smoothScroll(e) {
      e.preventDefault();
  
      const targetId = this.getAttribute("href");
      const targetSection = document.querySelector(targetId);
      const sectionOffset = targetSection.offsetTop - 50;
  
      window.scrollTo({
        top: sectionOffset,
        behavior: "smooth",
      });
    }
  });
  