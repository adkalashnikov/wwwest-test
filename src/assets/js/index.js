import 'bootstrap';
const body = document.querySelector('body');
import initSwiper from '@js/components/carousel';

//Sticky header
document.addEventListener('scroll', () => {
    const header = document.querySelector('.js-h-sticky');
    if(!header) return;
    let sticky = header.offsetTop;

    if(window.pageYOffset > sticky) {
        body.classList.add('header-is-sticky');
        header.classList.add('is-sticky');
    } else {
        body.classList.remove('header-is-sticky');
        header.classList.remove('is-sticky');
    }
});
// /Sticky header

document.addEventListener('DOMContentLoaded', () => {
    initSwiper();
});
