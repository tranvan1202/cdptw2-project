$(document).ready(function() {
    $("#nav li a").click(function() {
 
        $("#ajax-content").empty();
        $("#nav li a").removeClass('current');
        $(this).addClass('current');
 
        $.ajax({ url: this.href, success: function(html) {
            $("#ajax-content").empty().append(html);
            }
    });
    return false;
    });
 
    $("#ajax-content").empty();
    $.ajax({ url: 'ajax/description.php', success: function(html) {
            $("#ajax-content").empty().append(html);
    }
    });

    /* 1. Sự kiện hover*/
  $('.stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10);
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
  
  
  /* 2. Sự kiện click vào các ngôi sao */
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