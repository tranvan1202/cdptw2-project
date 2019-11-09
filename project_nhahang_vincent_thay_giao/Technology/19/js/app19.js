var app = angular.module("myApp",[]);  
app.controller("myController", function($scope, $http){ 
    $scope.displayData = function(){  
        $http.get("data.json")  
        .success(function(data){   
         $scope.products = data;  
     }); 
    } 
});