import Swiper, { Pagination, Autoplay } from 'swiper';

const pSlider = new Swiper('.js-hero-carousel', {
    modules: [ Pagination, Autoplay ],
    speed: 1000,
    autoplay: { delay: 30000 },
    loop: true,
    init: false,
    slidesPerView: 1,
    grabCursor: false,
    touchRatio: 0,
    preventInteractionOnTransition: true,
    pagination: {
        el: '.js-hero-carousel-pagination',
        clickable: true,
        renderBullet(index, className) { return `<span class="${className}"> 0${index + 1} Intro </span>`; }
    }
});

export default function initSwiper() {
    if(document.querySelector('.js-hero-carousel')) {
        pSlider.init();
    }
}
