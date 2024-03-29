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
$less->compileFile('less/08.less', 'css/08.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>08</title>
    <link rel="stylesheet" href="css/bootstrap-3.3.6.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/08-fonts.css" rel="stylesheet" type="text/css"/>
    <link href="css/08.css" rel="stylesheet" type="text/css"/>
    <!-- <script src="js/jquery-2.2-1.min.js"></script> -->
    <!-- <script src="js/bootstrap-3.3.6.min.js"></script> -->
    <script src="js/angular.1.4.8.min.js"></script>
    <script src="js/app08.js"></script>


</head>
<body ng-app="myApp" ng-controller="myController">
    <?php include '../08/08-content.php'; ?>
</body>
</html>
