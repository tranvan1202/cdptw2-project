$(document).ready(function () {
	$("#type-1673-show-popup").css("display","none");
	setTimeout(function () {
    $("#type-1673-show-popup").show(); 
  	}, 4000);
  	$("#close-popup").click(function () {
  		$("#type-1673-show-popup").css("display","none");
  	});
});
