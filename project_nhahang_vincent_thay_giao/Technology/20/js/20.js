// $(document).ready(function() {
// 	$('.show-coupon').click(function(){
// 		$('.show-coupon').addClass('active');
// 		$('#form-code').animate({'height':'toggle'}, 500);
// 	});
// });
new Vue({
	el: '#box-code',
	data: () => ({
    show: false
  	}),
  	methods: {
    showIt() {
      this.show = !this.show
    }
  }
});