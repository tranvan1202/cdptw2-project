<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Manufacture</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../public/css/uniform.css" />
    <link rel="stylesheet" href="../public/css/select2.css" />
    <link rel="stylesheet" href="../public/css/matrix-style.css" />
    <link rel="stylesheet" href="../public/css/matrix-media.css" />
    <link href="../public/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> 
    <script src="./AngularJS/app.js"></script>
</head>
<body ng-app="myApp" ng-controller="myController">

<div ng-include="'./HTML/top.html'"></div>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1>Manage Manufacture</h1>
        <div id="search">
            <form method="get">
            <input type="text" placeholder="Search here..." ng-model="timkiem"/>
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
                        <h5>Manufacture Detail</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <!-- BEGIN USER FORM -->
                        <form class="form-horizontal">
                            <div class="control-group">
                                <input type="hidden" ng-model="id" />
                                <label class="control-label">Manufacture Name :</label>
                                <div class="controls">
                                    <input type="text" name="name" ng-model="name" class="span11">
                                    <input type="file" file-model="myFile"/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="{{NameNut}}" ng-click="uploadFile()" class="btn btn-success"></input>
                            </div>
                            <div>Show: <input style="width: 50px; border: 1px solid black;" type="number" name="name" value="" ng-model="limitRow"/></div>
                        </form>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th ng-click="sortData('id')">ID<div ng-class="getSortClass('id')"></div></th>
                                <th ng-click="sortData('name')">Name<div ng-class="getSortClass('name')"></div></th>
                                <th ng-click="sortData('image')">Image<div ng-class="getSortClass('image')"></div></th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody ng-init="displayData()">
                                <tr ng-repeat="protype in protypes | filter:timkiem | orderBy: sortColumn:reverse | limitTo:limitRow">
                                    <td>{{protype.id}}</td>
                                    <td>{{protype.name}}</td>
                                    <td class="img-manu"><img src="Image/{{protype.image}}"></td>
                                    <td>
                                        <button ng-click="updateData(protype.id, protype.name, protype.image)" class="btn btn-success btn-mini">Update</button> 
                                        <button ng-click="deleteData(protype.id )"class="btn btn-danger btn-mini">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div ng-include="'./HTML/bot.html'"></div>
</body>
</html>