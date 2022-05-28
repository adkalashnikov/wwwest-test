import Swiper, { Pagination, Autoplay } from 'swiper';

const pSlider = new Swiper('.js-hero-carousel', {
    modules: [ Pagination, Autoplay ],
    speed: 1000,
    autoplay: { delay: 4000 },
    loop: true,
    init: false,
    slidesPerView: 1,
    grabCursor: false,
    touchRatio: 0,
    preventInteractionOnTransition: true,
    pagination: {
        el: '.js-hero-carousel-pagination',
        clickable: true,
        bulletActiveClass: 'active',
        renderBullet(index, className) {
            return (
                `<div class="${className}">
                    <div class="${className}__inner">
                        <span>0${index + 1}</span> ${pSlider.slides[index].dataset.slideName}
                    </div>
                </div>`
            );
        }
    }
});

export default function initSwiper() {
    if(document.querySelector('.js-hero-carousel')) {
        pSlider.init();

        const section = document.querySelector('.s-hero'),
            updateSliderBg = () => {
                let activeSlide = pSlider.slides[pSlider.activeIndex];

                section.style.backgroundImage = `url(${activeSlide.dataset.slideImage})`;
            };

        updateSliderBg();
        pSlider.on('slideChange', updateSliderBg);
    }
}
