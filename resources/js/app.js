require('./bootstrap');

import axios from "axios";

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


document.getElementById('popout-form').addEventListener('submit',  (e) => {
    e.preventDefault();

    let form = new FormData(document.getElementById('popout-form'));


    axios.post('/subscribe', {
        first_name : form.get('first_name'),
        last_name  : form.get('last_name'),
        email : form.get('email'),
    }).then((response) => {

        if(response.data.success == true) {

            e.target.style.display = 'none';

            document.getElementById('subscription-message').style.display = 'block';

        }
    })

})

const popoutSubscribeBtn = document.getElementById('popout-subscribe-btn');

