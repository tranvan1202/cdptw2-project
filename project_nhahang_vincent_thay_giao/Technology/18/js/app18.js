
var app = angular.module("myApp",['angularUtils.directives.dirPagination']);


app.controller("myController", function($scope, $http){ 
    $scope.displayData = function(){  
        $http.get("./php/select_product.php")  
        .success(function(data){  
            $scope.products = data;  
        });  
    }  
    $scope.sortColumn = 'menu_order';
});
