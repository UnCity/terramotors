// スライダー // Slider

document.addEventListener('DOMContentLoaded', function() {
    const needsSliders = document.querySelectorAll('.p-ev3__needs__item-slider');
    if (needsSliders.length > 0) {
        needsSliders.forEach(slider => {
            const slides = slider.querySelectorAll('.swiper-slide');
            if (slides.length > 1) {
                new Swiper(slider, {
                    slidesPerView: 1,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        type: 'bullets'
                    },
                });
            }
        });
    }
});