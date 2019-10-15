<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Product</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../public/css/matrix-style.css" />
    <link rel="stylesheet" href="../public/css/matrix-media.css" />
    <link href="../public/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./CSS/styles.css">

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
    <script src="./AngularJS/app.js"></script>
    <script src="./AngularJS/dirPagination.js"></script>
</head>
<body ng-app="myApp" ng-controller="myController">

<div ng-include="'./HTML/top.html'"></div>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1>Manage Products Type</h1>
        <div id="search">
            <form method="get">
            <input type="text" placeholder="Search here..." ng-model="timkiem" ng-change="onChangeInput()"/>
            <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
        </form>
        </div>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Product Detail</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <!-- BEGIN USER FORM -->
                        <form class="form-horizontal">
                            <div class="control-group">
                                <input type="hidden" ng-model="id" />
                                <label class="control-label">Name :</label>
                                <div class="controls">
                                    <input type="text" name="name" ng-model="name" class="span11">
                                </div>
                                <label class="control-label">Manufactures :</label>
                                <div class="controls">
                                    <input style="width: 70px;" type="number" name="manufactures" ng-model="manufactures" class="span11">
                                </div>
                                <label class="control-label">Product Type :</label>
                                <div class="controls">
                                     <input style="width: 70px;" type="number" name="type" ng-model="type" class="span11">
                                </div>
                                <label class="control-label">Price :</label>
                                <div class="controls">
                                    <input style="width: 70px;" type="number" name="price" ng-model="price" class="span11">
                                </div>
                                <label class="control-label">Description :</label>
                                <div class="controls">
                                    <input type="text" name="description" ng-model="description" class="span11">
                                </div>
                                <label class="control-label">Feature :</label>
                                <div class="controls">
                                    <input style="width: 70px;" type="number" name="name" ng-model="feature" class="span11">
                                </div>
                                <label class="control-label">Installment :</label>
                                <div class="controls">
                                    <input type="text" name="name" ng-model="installment" class="span11">
                                </div>
                                <label class="control-label">Donate :</label>
                                <div class="controls">
                                    <input type="text" name="name" ng-model="donate" class="span11">
                                    <input type="file" file-model="myFile"/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="{{NameNut}}" ng-click="uploadFile()" class="btn btn-success"></input>
                            </div>
                            <div>Show: <input style="width: 50px;" type="number" name="name" value="" ng-model="limitRow"/></div>
                        </form>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th ng-click="sortData('id')">ID
                                    <span ng-show="sortKey=='id'" ng-class="{'arrow-up':reverse,'arrow-dow':!reverse}" class="glyphicon sort-icon"></span>
                                </th>
                                <th ng-click="sortData('image')">Image
                                    <span ng-show="sortKey=='image'" ng-class="{'arrow-up':reverse,'arrow-dow':!reverse}" class="glyphicon sort-icon"></span>
                                </th>
                                <th ng-click="sortData('name')">Name
                                    <span ng-show="sortKey=='name'" ng-class="{'arrow-up':reverse,'arrow-dow':!reverse}" class=""></span>
                                </th>
                                <th ng-click="sortData('type')">Product Type
                                    <span ng-show="sortKey=='type'" ng-class="{'arrow-up':reverse,'arrow-dow':!reverse}" class="glyphicon sort-icon"></span>
                                </th>
                                <th ng-click="sortData('manufactures')">Manufactures
                                    <span ng-show="sortKey=='manufactures'" ng-class="{'arrow-up':reverse,'arrow-dow':!reverse}" class="glyphicon sort-icon"></span>
                                </th>
                                <th ng-click="sortData('description')">Description
                                    <span ng-show="sortKey=='description'" ng-class="{'arrow-up':reverse,'arrow-dow':!reverse}" class="glyphicon sort-icon"></span>
                                </th>
                                <th ng-click="sortData('price')">Price (VND)
                                    <span ng-show="sortKey=='price'" ng-class="{'arrow-up':reverse,'arrow-dow':!reverse}" class="glyphicon sort-icon"></span>
                                </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody ng-init="displayData()">
                                <tr dir-paginate="protype in protypes | filter:timkiem | orderBy: sortColumn:reverse | limitTo:limitRow | itemsPerPage:5">
                                    <td>{{protype.id}}</td>
                                    <td class="img-manu"><img src="Image/{{protype.image}}"></td>
                                    <td>{{protype.name}}</td>
                                    <td>{{protype.type}}</td>
                                    <td>{{protype.manufactures}}</td>
                                    <td>{{protype.description}}</td>
                                    <td>{{protype.price}}</td>
                                    <td>
                                        <button ng-click="updateData(protype.id, protype.name, protype.type, protype.manufactures, protype.description, protype.price)" class="btn btn-success btn-mini">Update</button> 
                                        <button ng-click="deleteData(protype.id )"class="btn btn-danger btn-mini">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ptrang">
                    <dir-pagination-controls
                        max-size="5"; 
                        direction-links="true" 
                        boundary-links="true" >
                    </dir-pagination-controls>
                </div>
            </div>
        </div>
    </div>
</div>

<div ng-include="'./HTML/bot.html'"></div>
</body>
</html>