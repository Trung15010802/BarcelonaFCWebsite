const navlinks = document.querySelectorAll('.nav-link');
const navbar = document.querySelector('#collapsibleNavbar');
for (const navlink of navlinks) {
    navlink.addEventListener('click', hideNavbar);
}

function hideNavbar() {
    navbar.classList.remove('show');
}
