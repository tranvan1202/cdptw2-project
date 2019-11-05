var app = angular.module('App', []);
app.controller("Controller", function($scope){ 
    
    $scope.items1 = [{id:1,name:"Small + 2$",price: 2},{id:2,name:"Medium + 3$", price: 3},{id:3,name: "Large + 4$", price: 4},{id:4,name: "X-Large + 11$", price: 11}];
    $scope.items2 = [{id:1,name:"None + 5$",price: 5},{id:2,name:"Half + 6$", price: 6},{id:3,name: "Half + 7$", price: 7}];
    $scope.items3 = [{id:1,name:"None + 8$",price: 8},{id:2,name:"Half + 9$", price: 9},{id:3,name: "Whole + 10$", price: 10}];

    $scope.upda = function() {
        if($scope.itemSelected1 !== null && $scope.itemSelected2 !== null && $scope.itemSelected3 !== null)
        {
            $scope.tong = $scope.itemSelected1.price + $scope.itemSelected2.price + $scope.itemSelected3.price;
            angular.element( document.querySelector('.tien-hien')).removeClass('tien-an');
            angular.element( document.querySelector('.a')).removeClass('b');
        }
        else{
            $scope.tong = null;
            angular.element( document.querySelector('.tien-hien')).addClass('tien-an');
            angular.element( document.querySelector('.a')).addClass('b');
        }
        
    } 
    
    $scope.tong = $scope.items1[0].price + $scope.items2[1].price + $scope.items2[1].price;
    $scope.itemSelected1 = $scope.items1[0]; 
    $scope.itemSelected2 = $scope.items2[1]; 
    $scope.itemSelected3 = $scope.items3[1];   

    $scope.myClear = function(){
        // alert(12);
        $scope.itemSelected1 = null; 
        $scope.itemSelected2 = null; 
        $scope.itemSelected3 = null;  
        angular.element( document.querySelector('.tien-hien')).addClass('tien-an');
        angular.element( document.querySelector('.a')).addClass('b');
    }
});