
var app = angular.module("myApp",['angularUtils.directives.dirPagination']);

app.controller("myController", function($scope, $http){ 
    $scope.displayData = function(){  
        $http.get("./product.json")  
        .success(function(data){  
            $scope.products = data;  
            // return data;
        });  
    }  
    $scope.sortColumn = 'menu_order'; 
    
});
