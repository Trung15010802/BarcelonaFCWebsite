const navlinks = document.querySelectorAll('.nav-link');
const navbar = document.querySelector('#collapsibleNavbar');
for (const navlink of navlinks) {
    navlink.addEventListener('click', hideNavbar);
}

function hideNavbar() {
    navbar.classList.remove('show');
}


function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);