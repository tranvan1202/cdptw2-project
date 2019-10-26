<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Đăng Nhập</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <script src="./AngularJS/app.js"></script>
  <style>
  body{
    background: #E9EBEE;
  }
  .row{
    margin-top: 100px;
    background: #fff;
    width: 600px;
    margin: 0 auto;
  }
  .btn-info, .btn-primary{
    margin-bottom: 30px;
  }
  .form_style
  {
    width: 700px;
    margin: 0 auto;
  }
  .dau{
    height: 100px;
    background: #F2DEDE;
  }
  </style>
  </head>
  <body ng-app="myApp" ng-controller="myController" >
    <header>
      <div class="dau"></div>
    </header>
    <div class="container form_style">
    <?php
    if(!isset($_SESSION["name"]))
    {
    ?>
    <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg" style="width: 600px; margin: 0 auto; background: #F7335D; color: #fff">
    <a href="#" class="close" ng-click="ThongBao()" aria-label="close"></a>
    {{alertMessage}}
    </div>
    <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin:0 auto;float:none;">
      <!-- Start form -->
              <h1>Go To System</h1>
                  <form method="POST" ng-submit="submitLogin()">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" class="form-control"  name="email" placeholder="Enter username" ng-model="loginData.email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="{{inputType}}" class="form-control" name="password" placeholder="Password" ng-model="loginData.password">
                    </div>
                    <div class="form-check">
                      <button class="btn btn-primary" type="button" name="showpassword" id="showpassword" value="Show Password" ng-click="showPassword()">{{ttPass}}</button> 
                      <input type="Submit" value="Go To System" class="btn btn-primary" style="width: 138px;">
                        <!-- onclick="location.href='http://localhost/project/admin/product/index.php" -->
                    </div>
                  </form>
      <!-- End form -->
          </div>
        </div>
      </div>
    <?php
    }
    else
    {
    header("location: http://localhost:80/project/admin/product_type/index.php"); 
    ?>
    <?php
    }
    ?>

  </div>
 </body>
</html>

<!-- <script>
var app = angular.module('myApp', []);
app.controller('myController', function($scope, $http){
  $scope.ThongBao = function(){
  $scope.alertMsg = false;
  };

  $scope.submitLogin = function(){
  $http({
    method:"POST",
    url:"login.php",
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
</script> -->
