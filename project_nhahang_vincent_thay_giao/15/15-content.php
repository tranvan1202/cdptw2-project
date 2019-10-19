<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-xs-3">
        <div class="widget_filter">
          <h6 class="widget_filter_title">TAGS</h6> 

          <div class="widget_filter_list">
            <ul>
              <li>
                <div class="row"> 
                  <div class="col-md-9 col-xs-9 filter_list">
                    <a href="#" class="filter_name">Burgers</a>
                    <a href="#" class="filter_name">Dessert</a>
                    <a href="#" class="filter_name">Drinks</a>
                    <a href="#" class="filter_name">Pasta</a>
                    <a href="#" class="filter_name">Pizza</a>
                    <a href="#" class="filter_name">Salad</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

