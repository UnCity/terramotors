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

        window.addEventListener('scroll', function() {
            const scrollY = window.scrollY;

            if (scrollY >= 100 && scrollY <= 200) {
                heroItems[0].style.opacity = 1 - ((scrollY - 100) / 100);
                heroItems[1].style.opacity = (scrollY - 100) / 100;
                heroItems[2].style.opacity = 0;
            }
            else if (scrollY >= 400 && scrollY <= 500) {
                heroItems[0].style.opacity = 0;
                heroItems[1].style.opacity = 1 - ((scrollY - 400) / 100);
                heroItems[2].style.opacity = (scrollY - 400) / 100;
            }
            else if (scrollY > 700) {
                heroItems[0].style.opacity = 0;
                heroItems[1].style.opacity = 0;
                heroItems[2].style.opacity = 1;
                const offset = scrollY - 700;
                heroWrap.style.top = `-${offset}px`;
            }
            // 100px未満のスクロール時
            else if (scrollY < 100) {
                heroItems[0].style.opacity = 1;
                heroItems[1].style.opacity = 0;
                heroItems[2].style.opacity = 0;
                heroWrap.style.top = '0';
            }
        });
    }
});
