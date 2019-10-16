<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-13">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget_product">
                    <h6 class="title">FEATURED MENU ITEMS</h6>        
                    <div class="product_list">
                        <ul>
                            <li>
                                <div class="row">
                                 <div class="col-md-3">
                                     <a href="#"><img src="./images/1.png" alt="1" class="img1"></a>
                                 </div> 
                                 <div class="col-md-9">
                                     <span class="product_title">Margherita</span>
                                     <span class="price">$ 6.9</span>
                                 </div>
                             </div>
                         </li>
                         <li>
                                <div class="row">
                                 <div class="col-md-3">
                                     <a href="#"><img src="./images/1.png" alt="1" class="img1"></a>
                                 </div> 
                                 <div class="col-md-9">
                                     <span class="product_title">Margherita</span>
                                     <span class="price">$ 6.9</span>
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

