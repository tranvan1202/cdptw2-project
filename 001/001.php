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
    $less->compileFile('less/001.less', 'css/001.css');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>001</title>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/001.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/jquery.mmenu.all.css">
        <script src="<?php echo $url_path ?>/js/jquery.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/001.js"></script>
    </head>
    <body>
        <?php include $dir_block.'/001-content.php'; ?>
        <script language="javascript" type="text/javascript" src="js/jquery.mmenu.all.min.js"></script>
        <script  type="text/javascript">
          $("#menu_bootstrap").mmenu({
           "extensions": [
           "pagedim-black"
           ]
         });
          var api_mmenu=$("#menu_bootstrap").data('mmenu');
          api_mmenu.bind('opened', function () {
            $('#btn_menu_bootstrap').addClass('move_btn_bootstrap');
          });
          api_mmenu.bind('closed', function () {
            $('#btn_menu_bootstrap').removeClass('move_btn_bootstrap');
          });
        </script>
    </body>
</html>
