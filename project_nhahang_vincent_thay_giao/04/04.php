    <?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }   
    $less = new lessc;
    $less->compileFile('less/04.less', 'css/04.css');   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>04</title>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap-3.3.7.min.css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/04-fonts.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="css/04.css">
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap-3.3.7.min.js"></script>
</head>
<body>
	<?php include $dir_block.'/04-content.php'; ?> 
</body>
</html>