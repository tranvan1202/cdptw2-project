<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-06">
  <div class="container-fluid">
    <div class="row">
      <div class="title-menu">
        <h2>Discover Our Menu</h2>
      </div>
      <!-- Product list -->
      <div class="vc_product_listing"> 
        <div ui-view>
        </div>
    </div>
  </div>
</div>

