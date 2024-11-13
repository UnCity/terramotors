// トップスライダーの起動 // Launch the top slider

const swiper = new Swiper(".case-swiper", {
  loop: true,
  slidesPerView: 0.35, // 一度に表示する枚数
  speed: 18000, // ループの時間
  allowTouchMove: false, // スワイプ無効
  autoplay: {
    delay: 0, // 途切れなくループ
  },
  breakpoints: {
    // スライドの表示枚数：500px以上の場合  
    560: {
      slidesPerView: 0.5,
    },
    769: {
      slidesPerView: 1.2,
    }
  }

});


//MV Video
window.addEventListener('DOMContentLoaded', function(){
  const videoPc = document.querySelector("#js-video-pc"); //pc版のビデオタグ
  const videPcSrc = videoPc.getAttribute("data-src"); //pc版のビデオタグのdata-src

  const videoSp = document.querySelector("#js-video-sp"); //sp版のビデオタグ
  const videoSpSrc = videoSp.getAttribute("data-src"); //sp版のビデオタグのdata-src

  let pcVideoBool = false;
  let spVideoBool = false;

  if (768 <= window.innerWidth) {
    //画面幅768pxより大きければpc版読み込み
    videoPc.src = videPcSrc;
    pcVideoBool = true;
  } else {
    //それ以外の場合sp版読み込み
    videoSp.src = videoSpSrc;
    spVideoBool = true;
  }

  window.addEventListener("resize", () => {
    //画面をresize時
    if (768 <= window.innerWidth && !pcVideoBool) {
      //画面幅768pxより大きいかつ、pc版の動画をまだ読み込んでいない場合
      videoPc.src = videPcSrc;
      pcVideoBool = true;
    }

    if (768 > window.innerWidth && !spVideoBool) {
      //画面幅768px未満かつ、sp版の動画をまだ読み込んでいない場合
      videoSp.src = videoSpSrc;
      spVideoBool = true;
    }
  });

})