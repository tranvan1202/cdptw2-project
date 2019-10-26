var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 5,
    spaceBetween: 30,
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 70,
      },
      768:{
        slidesPerView: 3,
        spaceBetween: 50,
      },
      1200: {
        slidesPerView: 5,
        spaceBetween: 30,
      },
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('.stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('.stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
  });
});
/*===============Vue JS====================*/
var brand = new Vue({
    el: ".navbar-brand",
    data: {
      message: 'Computer and Technology'
    }
 })

Vue.component("navigation", {
      props: ["item"],
      data() {
        return {
          isOpen: false,
          active: false,
          navList: [
          { url: "#", name: "Laptop" },
          {
            url: "#",
            name: "Desktop PC",
            children: [
            {
              url: "#",
              name: "Desktop PC 1",
              target: "_blank" },

            {
              url: "#",
              name: "Desktop PC 2",
              target: "_blank" },

            {
              url: "#",
              name: "Desktop PC 3",
              target: "_blank" }] },

          { url: "#", name: "Headphones" },
          { url: "#", name: "PC Gaming" }] };
      },
      template: `
        <ul class="nav navbar-nav">
            <li v-for="item in navList">
                <template v-if="item.children">
                    <a 
                      :href="item.url" 
                      :title="item.name" 
                      @click="isOpen = !isOpen, active = !active" 
                      :class="{ active }">{{ item.name }}</a>
                    <div :class="{ isOpen }" class="dropdown">
                        <ul>
                            <li 
                              v-for="{ url, name, index} in item.children" 
                              :key="index">
                                <a :href="url" :title="name" @click="active = !active" 
                                :class="{ active }">{{ name }}</a>
                            </li>
                        </ul>
                    </div>
                </template>
                <template v-else>
                    <a 
                      :href="item.url" 
                      :title="item.name">{{ item.name }}</a>
                </template>
            </li>
        </ul>
        ` });
        new Vue({ el: "#navbar" });
