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
$less->compileFile('less/12.less', 'css/12.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>12</title>
    <link rel="stylesheet" href="css/bootstrap-3.3.7.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/09-fonts.css" rel="stylesheet" type="text/css"/>
    <link href="css/12.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.2.1.min.js"></script>
    <script src="js/bootstrap-3.3.6.min.js"></script>
</head>
<body>
    <?php include '../12/12-content.php'; ?>
</body>
</html>
