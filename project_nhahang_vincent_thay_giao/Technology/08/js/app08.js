var app = angular.module("myApp",[]);
app.controller('myController', function($scope){
      $scope.loi1 = false;
      $scope.loi2 = false;
      $scope.sus1 = false; 
      console.log($scope.noiDungSub);
      $scope.dangKy = function(){
            $scope.CheckEmail();
      }
      $scope.CheckEmail = function(){
		if($scope.dangkymail.email.$error.email == null && $scope.dangkymail.email.$error.required == null)
		{
			alert("Đăng Ký Thành Công");
		}
		else if($scope.dangkymail.email.$error.email == true){
            $scope.loi1 = false;
            $scope.loi2 = false;
            $scope.sus1 = true;
		}
		else{
            $scope.loi1 = true;
            $scope.loi2 = true;
            $scope.sus1 = false;
		}
	}
})