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
$less->compileFile('less/02.less', 'css/02.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>02</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/02-fonts.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-3.3.6.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/02.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap-3.3.6.min.js"></script>
        
        <link rel="stylesheet" href="css/swiper-4.5.1.min.css">
        <script src="js/swiper-4.5.1.min.js"></script>
    </head>
    <body>
        <?php include '../02/02-content.php'; ?>
        <script src="js/app02.js"></script>
    </body>
</html>