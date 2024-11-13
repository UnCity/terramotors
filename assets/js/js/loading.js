// トップスライダーの起動 // Launch the top slider

const swiper = new Swiper(".top-swiper", {
  speed: 1000, // スライド変化時間
  loop: true,
  loopAdditionalSlides: 1,
  autoplay: {
    delay: 4000, //　スライダー表示時間
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
