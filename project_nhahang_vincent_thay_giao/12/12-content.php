<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-18">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="tieude">
                    <h2>Related products</h2>
                </div>
                <div class="products">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                         <div class="bao_products">
                                <div class="img_product">
                                <img src="./images/1.png" alt="1">   
                            </div>
                            <div class="content_product">
                                <h2>Capricciosa</h2>
                                <p>Classic marinara sauce, authentic old-world pepperoni, all-natura</p>
                                <span class="price">$3.80</span>
                                <div class="add_to_cart">
                                    <a href="">ADD TO CART</a>
                                </div>
                            </div>
                         </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="bao_products">
                                <div class="img_product">
                               <img src="./images/1.png" alt="1">   
                            </div>
                            <div class="content_product">
                                <h2>Capricciosa</h2>
                                <p>Classic marinara sauce, authentic old-world pepperoni, all-natura</p>
                                <span class="price">$3.80</span>
                                <div class="add_to_cart">
                                    <a href="">ADD TO CART</a>
                                </div>
                            </div>
                         </div>
                        </div>
                          <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="bao_products">
                                <div class="img_product">
                                <img src="./images/1.png" alt="1">s
                            </div>
                            <div class="content_product">
                                <h2>Capricciosa</h2>
                                <p>Classic marinara sauce, authentic old-world pepperoni, all-natura</p>
                                <span class="price">$3.80</span>
                                <div class="add_to_cart">
                                    <a href="">ADD TO CART</a>
                                </div>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-sm-3">
                
            </div> 
        </div> 
    </div>
</div>




















