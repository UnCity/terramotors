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

// スクロールによるヒーローセクションの切り替え
document.addEventListener('DOMContentLoaded', function() {
    const heroWrap = document.querySelector('.p-about__hero-wrap');
    const heroItems = document.querySelectorAll('.p-about__hero-item');
    if (heroItems.length > 0) {
        // 初期表示
        heroItems[0].style.opacity = 1;
        heroItems[1].style.opacity = 0;
        heroItems[2].style.opacity = 0;
        const wh = window.innerHeight*0.4;

        window.addEventListener('scroll', function() {
            const scrollY = window.scrollY;

            if (scrollY <= wh) {
                heroItems[0].style.opacity = 1;
                heroItems[1].style.opacity = 0;
                heroItems[2].style.opacity = 0;
            }
            else if (scrollY <= wh*2) {
                heroItems[0].style.opacity = 0;
                heroItems[1].style.opacity = 1;
                heroItems[2].style.opacity = 0;
            }
            else {
                heroItems[0].style.opacity = 0;
                heroItems[1].style.opacity = 0;
                heroItems[2].style.opacity = 1;
            }
            
        });
    }
});