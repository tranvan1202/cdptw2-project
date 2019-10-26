var app = angular.module('myApp', []);
app.controller('myController', function($scope, $http){
  $scope.ThongBao = function(){
  $scope.alertMsg = false;
  };

  $scope.submitLogin = function(){
  $http({
    method:"POST",
    url:"./PHP/login.php",
    data:$scope.loginData
  }).success(function(data){
    if(data.error != '')
    {
    $scope.alertMsg = true;
    $scope.alertClass = 'alert-danger';
    $scope.alertMessage = data.error;
    }
    else
    {
      location.reload();
    }
  });
  };

  $scope.inputType = 'password';
  $scope.ttPass = 'Show Password';

  $scope.showPassword = function(){
    if($scope.loginData.password != null)
    {
      if($scope.inputType == 'password')
      {
        $scope.inputType = 'text';
        $scope.ttPass = 'Hide Password';
      }
      else{
        $scope.inputType = 'password';
        $scope.ttPass = 'Show Password';
      }
    }
  }
});