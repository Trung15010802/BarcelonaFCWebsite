var x = window.matchMedia("(max-width: 768px)")
if (x.matches) {
    const navLinks = document.querySelectorAll('.nav-item')
    const menuToggle = document.getElementById('collapsibleNavbar')
    const bsCollapse = new bootstrap.Collapse(menuToggle)
    navLinks.forEach((l) => {
        l.addEventListener('click', () => { bsCollapse.toggle() })
    })
}
