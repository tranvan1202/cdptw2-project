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
Vue.component("information", {
  props: ["info"],
  data() {
    return {
      infoList: [
      {
        info1: "Weight",
        info2: "2kg"
      },
      {
        info1: "Dimensions",
        info2: "24 × 24 × 5 cm"
      },
      {
        info1: "Size",
        info2: 'Small 12" (6 Slices), Medium 14" (6 Slices), Large 16" (8 Slices), X-Large 18" (12 Slices)'
      },
      {
        info1: "Extra Cheese",
        info2: "None, Half, Whole"
      },
      {
        info1: "Onions",
        info2: "None, Half, Whole"
      }
      ]
    };
  },
  template: `
  <div class="info">
    <div class="row" v-for="info in infoList">
      <div class="col-md-2 col-sm-3 col-xs-4 left-info">
        <span>{{ info.info1 }}</span>
      </div>
      <div class="col-md-10 col-sm-9 col-xs-8 right-info">
        <span>{{ info.info2 }}</span>
      </div>
    </div>
  </div>`});
new Vue({ el: "#info" });


