<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-03">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="vincent_tieuchi_iconbox">
                    <img src="images/03-icon-1.png" alt=""/>
                </div>

                <div class="vincent_tieuchi">
                 <h4 class="vincent_tieuchi_tieude">
                    Quality Foods
                </h4> 
            </div>

            <div class="vincent_tieuchi_text">
                <p class="vincent_tieuchi_mieuta">
                Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="vincent_tieuchi_iconbox">
                <img src="images/03-icon-3.png" alt=""/>
            </div>

            <div class="vincent_tieuchi">
                 <h4 class="vincent_tieuchi_tieude">
                    Fastest Delivery
                </h4> 
            </div>

            <div class="vincent_tieuchi_text">
                <p class="vincent_tieuchi_mieuta">
                Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-4">
            <div class="vincent_tieuchi_iconbox">
                <img src="images/03-icon-2.png" alt=""/>
            </div>

            <div class="vincent_tieuchi">
                 <h4 class="vincent_tieuchi_tieude">
                        Original Recipes
                </h4> 
            </div>

            <div class="vincent_tieuchi_text">
                <p class="vincent_tieuchi_mieuta">
                Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.</p>
            </div>
        </div>

    </div>
</div>
</div>
