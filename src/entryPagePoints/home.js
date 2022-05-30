import '@scss/entryPage/home.scss';
import initSwiper from '@js/components/carousel';
import SimpleBar from 'simplebar';

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('hashchange', () => {
        let target = document.getElementById(location.hash.substring(1));
        if(!target) return;

        let elementPosition = target.offsetTop,
            offsetPosition = elementPosition - 62,
            ww = window.screen.width;

        if(ww >= 992) {
            offsetPosition = elementPosition - 98;
        }

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });

        setTimeout(() => {
            window.location.hash = '.';
        }, 1500);
    }, false);

    initSwiper();

    const accorddionsTexts = document.querySelectorAll('.s-wd__card-text'),
        accorddionsTextsArray = Array.prototype.slice.call(accorddionsTexts);

    // init custom scrollbar in accordions
    accorddionsTextsArray.forEach((elem) => {
        new SimpleBar(elem, {
            autoHide: false,
            scrollbarMaxSize: 160,
            forceVisible: 'x'
        });
    });
    // /init custom scrollbar in accordions
});
