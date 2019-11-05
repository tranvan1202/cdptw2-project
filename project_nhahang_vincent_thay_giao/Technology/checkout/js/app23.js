$(document).ready(function() {
	$('.show-coupon').click(function(){
		$('.show-coupon').addClass('active');
		$('#form-code').animate({'height':'toggle'}, 500);
	});
});	
var app = angular.module('hung',[]);
app.controller('Ctrl',function($scope){
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
		//check firt name
		if($scope.fName != undefined)
		{
			$scope.fNameShow = false;
		}
		else
		{
			$scope.noidungFName = $scope.required;
			$scope.fNameShow = true;
		}
		//check last name
		if($scope.lName != undefined)
		{
			$scope.lNameShow = false;
		}
		else
		{
			$scope.noidungLName = $scope.required;
			$scope.lNameShow = true;
		}
		//check Street address 1
		if($scope.hNumber != undefined)
		{
			$scope.hNumberShow = false;
		}
		else
		{
			$scope.noidunghNumber = $scope.required;
			$scope.hNumberShow = true;
		}

		//check Street address 2
		if($scope.aNumber != undefined)
		{
			$scope.aNumberShow = false;
		}
		else
		{
			$scope.noidungaNumber = $scope.required;
			$scope.aNumberShow = true;
		}

		//check city
		if($scope.city != undefined)
		{
			$scope.cityShow = false;
		}
		else
		{
			$scope.noidungCity = $scope.required;
			$scope.cityShow = true;
		}

		//check post
		if($scope.post != undefined)
		{
			$scope.post = false;
		}
		else
		{
			$scope.noidungPost = $scope.required;
			$scope.postShow = true;
		}

		//check post
		if($scope.phone != undefined)
		{
			$scope.phone = false;
		}
		else
		{
			$scope.noidungPhone = $scope.required;
			$scope.phoneShow = true;
		}

		//check email
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
