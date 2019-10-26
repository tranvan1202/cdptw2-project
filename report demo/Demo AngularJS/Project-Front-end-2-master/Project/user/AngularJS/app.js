
var app = angular.module("app",['angularUtils.directives.dirPagination']);
app.controller("myController", function($scope, $http){ 
        $scope.displayData = function(){  
                $http.get("./php/select.php")  
                .success(function(data){  
                    $scope.a = data;  
                });  
            }  
        $scope.sortColumn = 'name';
});
