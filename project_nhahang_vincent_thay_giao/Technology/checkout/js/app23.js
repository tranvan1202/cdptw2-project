$(document).ready(function() {
	$('.show-coupon').click(function(){
		$('.show-coupon').addClass('active');
		$('#form-code').animate({'height':'toggle'}, 500);
	});
	// $('.btn-checkout').click(function(){
	// 	$('.khung_error').show();
	// });
});	
var app = angular.module('myApp',[]);
app.controller('myController',function($scope){
	$scope.loi = false;
	$scope.emailShow = false;
	$scope.noidungEmail = null;

	$scope.fNameShow = false;
	$scope.noidungFName = null;

	$scope.lNameShow = false;
	$scope.noidungLName = null;

	$scope.hNumberShow = false;
	$scope.noidunghNumber = null;

	$scope.aNumberShow = false;
	$scope.noidungaNumber = null;

	$scope.cityShow = false;
	$scope.noidungCity = null;

	$scope.postShow = false;
	$scope.noidungPost = null;

	$scope.phoneShow = false;
	$scope.noidungPhone = null;

	$scope.required = "required field";

	$scope.CheckOut = function(){
		$scope.loi=true;

		//check firt name
		$scope.CheckFirstName();
		
		//check last name
		$scope.CheckLastName();

		//check Street address 1
		$scope.CheckStreet1();

		//check Street address 2
		$scope.CheckStreet2();

		//check city
		$scope.CheckCity();

		//check post
		$scope.CheckPost();

		//check phone
		$scope.CheckPhone();

		//check email
		$scope.CheckEmail();
	}

	$scope.CheckFirstName = function(){
		if($scope.fName != undefined)
		{
			$scope.fNameShow = false;
		}
		else
		{
			$scope.noidungFName = $scope.required;
			$scope.fNameShow = true;
		}
	}

	$scope.CheckLastName = function(){
		if($scope.lName != undefined)
		{
			$scope.lNameShow = false;
		}
		else
		{
			$scope.noidungLName = $scope.required;
			$scope.lNameShow = true;
		}
	}

	$scope.CheckStreet1 = function(){
		if($scope.hNumber != undefined)
		{
			$scope.hNumberShow = false;
		}
		else
		{
			$scope.noidunghNumber = $scope.required;
			$scope.hNumberShow = true;
		}
	}

	$scope.CheckStreet2 = function(){
		if($scope.aNumber != undefined)
		{
			$scope.aNumberShow = false;
		}
		else
		{
			$scope.noidungaNumber = $scope.required;
			$scope.aNumberShow = true;
		}
	}

	$scope.CheckCity = function(){
		if($scope.city != undefined)
		{
			$scope.cityShow = false;
		}
		else
		{
			$scope.noidungCity = $scope.required;
			$scope.cityShow = true;
		}
	}

	$scope.CheckPost = function(){
		if($scope.post != undefined)
		{
			$scope.post = false;
		}
		else
		{
			$scope.noidungPost = $scope.required;
			$scope.postShow = true;
		}
	}
	
	$scope.CheckPhone = function(){
		if($scope.phone != undefined)
		{
			$scope.phone = false;
		}
		else
		{
			$scope.noidungPhone = $scope.required;
			$scope.phoneShow = true;
		}
	}
	$scope.CheckEmail = function(){
		if($scope.myForm.email.$error.email == null && $scope.myForm.email.$error.required == null)
		{
			$scope.emailShow = false;
		}
		else if($scope.myForm.email.$error.email == true){
			$scope.noidungEmail = "invalid email";
			$scope.emailShow = true;
		}
		else{
			$scope.noidungEmail = $scope.required;
			$scope.emailShow = true;
		}
	}
});
