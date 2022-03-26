require('./bootstrap');

let mobileNav = document.getElementById('mobile-nav');

document.getElementById('menu-icon').addEventListener('click',  (e) => {
    mobileNav.style.display = 'block';
})


document.getElementById('mobile-nav-close').addEventListener('click',  (e) => {
    mobileNav.style.display = 'none';
})


document.getElementById('mobile-nav').addEventListener('resize',  (e) => {
    if (window.innerWidth > 850) {
        e.target.style.display = 'none';
    };
})

