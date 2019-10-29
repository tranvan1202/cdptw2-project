var app = angular.module("myApp",[]);
app.controller('myController', function($scope){
    $scope.dangKy = function(){
        console.log($scope.noiDungSub);
        if($scope.noiDungSub === undefined)
        {
            angular.element(document.querySelector('.error1')).addClass('error2');
            angular.element(document.querySelector('.tbError1')).addClass('tbError2');
            angular.element(document.querySelector('.susce1')).removeClass('susce2');
        }
        else
        {
            angular.element(document.querySelector('.susce1')).addClass('susce2');
            angular.element(document.querySelector('.error1')).removeClass('error2');
            angular.element(document.querySelector('.tbError1')).removeClass('tbError2');
        }
    }
})