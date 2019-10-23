// if ($('.swiper-wrapper').find("s2")==true) {
//   $('.type-02').css('background',"none");
//   $('.type-02').css('background',"url('../images/02-bg2.png')");
// }
// var swiper = new Swiper('.swiper-container', {

//   spaceBetween: 30,
//   effect: 'flip',
//   loop: true,
//   slidesPerView: 1,

//   flipEffect: {
//     rotate: 30,
//     slideShadows: false,
//   },

//   pagination: {
//     el: '.swiper-pagination',
//     clickable: true,
//   },

//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },

//   // autoplay: {
//   //   delay: 5000,
//   // },
  
//   breakpoints: {
//     960: {
//       slidesPerView: 1,
//       spaceBetween: 30,
//     },
//     480: {
//       slidesPerView: 1,
//       spaceBetween: 20,
//     },

//   } 
// });


var mySwiper = new Swiper('.swiper-container', {
  initialSlide: 0,
  slidesPerView: 1,
  // spaceBetween: 16,  
  loop: true,
  preloadImages: true,

    pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  lazyLoading: true,
  lazy: {
    loadPrevNext: true,
  }
});

