
var app = angular.module("myApp", ['ui.router']);

// app.controller("myController", function($scope, $http){ ádfsadfsd
//     $scope.displayData = function(){  
//         $http.get("./php/select.php")  
//         .success(function(data){  
//          $scope.products = data;  
//      }); 
//     } 
// });

app.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/home/burgers');

    $stateProvider

    // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/home',
            templateUrl: './homea.html'
        })

        // trang 1
        .state('home.burgers', {
            url: '/burgers',
            templateUrl: './burgers.html',
            controller: function($scope, $http){ 
                $scope.displayData = function(){  
                    $http.get("./php/select_burgers.php")  
                    .success(function(data){  
                        $scope.burgers = data;  
                    }); 
                } 
            }
            
        })

        // trang 2
        .state('home.desserts', {
            url: '/desserts',
            templateUrl: './desserts.html',
            controller: function($scope, $http){ 
                $scope.displayData = function(){  
                    $http.get("./php/select_desserts.php")  
                    .success(function(data){  
                        $scope.desserts = data;  
                    }); 
                } 
            }
        })

});
