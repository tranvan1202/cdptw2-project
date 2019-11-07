
var app = angular.module("myApp", ['ui.router']);

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
                    $http.get("./b.json")  
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
                    $http.get("./c.json")  
                    .success(function(data){  
                        $scope.desserts = data;  
                    }); 
                } 
            }
        })

});
