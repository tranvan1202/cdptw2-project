$(document).ready(function() {
	$('.show-coupon').click(function(){
		$('.show-coupon').addClass('active');
		$('#form-code').animate({'height':'toggle'}, 500);
	});
	$('.btn-checkout').click(function(){
		$('.khung_error').show();
		
	});
});	
