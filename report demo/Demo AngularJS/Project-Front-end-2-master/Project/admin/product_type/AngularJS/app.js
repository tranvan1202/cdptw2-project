
var app = angular.module("myApp",[]);  
app.controller("myController", function($scope, $http){ 


      	$scope.NameNut = "ADD";  
      	$scope.sortColumn = 'name';
        $scope.reverse = false;
 	 	$scope.insertData = function(){  
           	if($scope.name == null)  
            {  
        		alert("Name of ProductType is required");  
            }  
            else  
            {  
                $http.post(  
                    "./PHP/insert.php",  
                    {'name':$scope.name,'NameNut':$scope.NameNut, 'id':$scope.id}  
                ).success(function(data){  
                    alert(data);  
                    $scope.name = null;  
                    $scope.NameNut = "ADD";  
                    $scope.displayData();  
                });  
            }  
        }  
      	$scope.displayData = function(){  
           	$http.get("./PHP/select.php")  
           	.success(function(data){  
            	$scope.protypes = data;  
            });  
        }  
        $scope.updateData = function(id, name){  
    	    $scope.id = id;  
            $scope.name = name;  
            $scope.NameNut = "Update";  
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
	    // $scope.onChangeInput= () => {
     //        console.log($scope);
     //    }
        $scope.sortData = function (collumn) {
            if ($scope.sortColumn == collumn)
                $scope.reverse = !$scope.reverse;
            else
                $scope.reverse = false;
            $scope.sortColumn = collumn;
        }
        $scope.getSortClass = function (column) {
            if ($scope.sortColumn == column) {
                return $scope.reverse ? 'arrow-up' : 'arrow-dow';
            }
            return '';
        } 
}); 