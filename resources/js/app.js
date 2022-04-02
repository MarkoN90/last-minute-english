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



let popoutLayer = document.getElementById('overlay');


let popout = document.getElementById('popout');

let closePopout = document.getElementById('close-popout');

closePopout.addEventListener('click', (e) => {
    popoutLayer.style.display = 'none';
})

document.getElementById('nav-start-btn').addEventListener('click',  (e) => {
    popoutLayer.style.display = 'flex';
})

