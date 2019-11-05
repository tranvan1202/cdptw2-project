new Vue({
  el: '.swiper-wrapper',
  data: {
    show1: false,
    show2: false,
    show3: false
  }
});

var mySwiper = new Swiper('.swiper-container', {
  initialSlide: 30,
  slidesPerView: 3,
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

