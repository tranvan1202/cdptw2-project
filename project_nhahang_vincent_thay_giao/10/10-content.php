<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-10">
  <div class="container-fluid">
    <div class="row">
      <div class="title-menu">
        <div class="vc_header_menu_line"></div>
        <div class="vc_header_menu_text">
          <h2>Discover Our Menu</h2>
        </div>
      </div>
    </div>
  </div>
</div>

