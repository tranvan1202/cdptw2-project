var myApp = angular.module('myApp', ['angularUtils.directives.dirPagination']);
myApp.directive('fileModel', ['$parse', function ($parse) {
    return {
    restrict: 'A',
    link: function(scope, element, attrs) {
        var model = $parse(attrs.fileModel);
        var modelSetter = model.assign;

        element.bind('change', function(){
            scope.$apply(function(){
                modelSetter(scope, element[0].files[0]);
            });
        });
    }
   };
}]);
myApp.service('fileUpload', ['$http', function ($http) {
    this.uploadFileToUrl = function(file, uploadUrl, name){
         var fd = new FormData();
         fd.append('file', file);
         fd.append('name', name);
         $http.post(uploadUrl, fd, {
             transformRequest: angular.identity,
             headers: {'Content-Type': undefined,'Process-Data': false}
         })
         .success(function(){
            console.log("Success");
         })
         .error(function(){
            console.log("Success");
         });
     }
 }]);
 myApp.controller('myController', ['$scope','$http','fileUpload', function($scope,$http,fileUpload){
    $scope.NameNut = "ADD";  
   $scope.uploadFile = function(){

        var file = $scope.myFile;
        console.log('file is ' );
        console.dir(file);
        var uploadUrl = "./PHP/insert.php";
        var name = $scope.name;
        var manufactures = $scope.manufactures;
        var type = $scope.type;
        var price = $scope.price;
        var description = $scope.description;
        var feature = $scope.feature;
        var installment = $scope.installment;
        var donate = $scope.donate;
        fileUpload.uploadFileToUrl(file, uploadUrl, name, manufactures,type , price, description, feature, installment,donate);
   };
   $scope.displayData = function(){  
        $http.get("./PHP/select.php")  
        .success(function(data){  
          $scope.protypes = data;  
        });  
    }  
    $scope.sortData = function(keyname){
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
    };
    $scope.onChangeInput= () => {
            console.log($scope);
        }

    $scope.deleteData = function(id){  
        if(confirm("Bạn Chắc Chắn Muốn Xóa?"))  
        {  
            $http.post("./PHP/delete.php", {'id':id})  
            .success(function(data){  
                alert(data);  
                $scope.displayData();  
            });  
        }  
        else  
        {  
            return false;  
        }  
    }

    // $scope.updateData = function(id, name, image){  
    //   $scope.id = id;  
    //   $scope.name = name;  
    //   $scope.image = image;
    //   $scope.NameNut = "Update";  
    // }  
}]);