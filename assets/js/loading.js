//MV Video
// window.addEventListener('DOMContentLoaded', function(){
//   const videoPc = document.querySelector("#js-video-pc"); //pc版のビデオタグ
//   const videPcSrc = videoPc.getAttribute("data-src"); //pc版のビデオタグのdata-src

//   const videoSp = document.querySelector("#js-video-sp"); //sp版のビデオタグ
//   const videoSpSrc = videoSp.getAttribute("data-src"); //sp版のビデオタグのdata-src

//   let pcVideoBool = false;
//   let spVideoBool = false;

//   if (769 <= window.innerWidth) {
//     //画面幅768pxより大きければpc版読み込み
//     videoPc.src = videPcSrc;
//     pcVideoBool = true;
//   } else {
//     //それ以外の場合sp版読み込み
//     videoSp.src = videoSpSrc;
//     spVideoBool = true;
//   }

//   window.addEventListener("resize", () => {
//     //画面をresize時
//     if (769 <= window.innerWidth && !pcVideoBool) {
//       //画面幅768pxより大きいかつ、pc版の動画をまだ読み込んでいない場合
//       videoPc.src = videPcSrc;
//       pcVideoBool = true;
//     }

//     if (769 > window.innerWidth && !spVideoBool) {
//       //画面幅768px未満かつ、sp版の動画をまだ読み込んでいない場合
//       videoSp.src = videoSpSrc;
//       spVideoBool = true;
//     }
//   });

// })