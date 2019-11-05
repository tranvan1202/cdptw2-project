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
    $less->compileFile('less/01.less', 'css/01.css');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>01</title>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/01.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/fonts.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/js/jquery.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    </head>
    <body>
        <?php include $dir_block.'/01-content.php'; ?>
         <script src="js/01.js"></script>
    </body>
</html>
