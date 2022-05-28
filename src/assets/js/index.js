import 'bootstrap';
const body = document.querySelector('body'),
    header = document.querySelector('.js-h-sticky');

//Sticky header
document.addEventListener('scroll', () => {
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
