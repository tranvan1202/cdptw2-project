
var app = angular.module("myApp",[]);  

app.controller("myController", function($scope, $http){ 
    $scope.displayData = function(){  
        $http.get("./php/select.php")  
        .success(function(data){   
         $scope.products = data;  
     }); 
    } 
});
