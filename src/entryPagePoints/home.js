import '@scss/entryPage/home.scss';

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
});
