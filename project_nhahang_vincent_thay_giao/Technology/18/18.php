<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/18.less', 'css/18.css');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/18.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/18.js"></script> -->
    
</head>
<body ng-app="myApp" ng-controller="myController">
    <?php include '../18/18-content.php'; ?>
    <script src="js/angular.1.4.8.min.js"></script>
    <script src="js/dirPagination.js"></script>
    <script src="js/app18.js"></script>
    
</body>
</html>
