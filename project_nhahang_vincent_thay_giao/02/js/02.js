
var swiper = new Swiper('.swiper-container', {

  spaceBetween: 30,
  effect: 'flip',
  loop: true,
  slidesPerView: 1,

  flipEffect: {
    rotate: 30,
    slideShadows: false,
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // autoplay: {
  //   delay: 5000,
  // },
  
  breakpoints: {
    960: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 20,
    },

  } 
});

