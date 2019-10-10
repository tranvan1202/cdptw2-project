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
    $less->compileFile('less/05.less', 'css/05.css');   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>05</title>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/05.css">	
    <script src="../05/js/jquery-2.1.4.min.js"></script>
    <script src="../05/js/swiper.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.7/dist/vue.js"></script>
</head>
<body>
	<?php include '../05/05-content.php';?>  
    <script src="../05/js/05.js"></script>
</body>
</html>
<script>
    var example1 = new Vue({
    el: '.swiper-wrapper',
    data: {
        items: [
        { name: 'hinh1' },
        { name: 'hinh2' },
        { name: 'hinh3' },
        { name: 'hinh4' },
        { name: 'hinh5' },
        { name: 'hinh6' }
        ]
    }
})
</script>