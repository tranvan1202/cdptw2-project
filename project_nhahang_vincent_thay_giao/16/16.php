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
    $less->compileFile('less/16.less', 'css/16.css');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>16</title>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/16.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/fonts.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/jquery.mobile-1.4.5.min.css"  media="screen">
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mobile-1.4.5.min.js"></script>
        <script src="js/16.js"></script>
    </head>
    <body>
        <?php include $dir_block.'/16-content.php'; ?>
    </body>
</html>
