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
                <div class="bao_all">
                    <div class="bao_tieude">
                        <div class="tieude_nho">
                             <p>Showing 1–12 of 72 results</p>
                        </div>
                        <form class="form_select" method="get">
                             <select name="orderby" class="orderby" aria-label="Shop order">
                                 <option value="menu_order" selected="selected">Default sorting</option>
                                 <option value="popularity">Sort by popularity</option>
                                 <option value="rating">Sort by average rating</option>
                                 <option value="date">Sort by latest</option>
                                 <option value="price">Sort by price: low to high</option>
                                 <option value="price-desc">Sort by price: high to low</option>
                                 <option value="date_asc">Date (Ascending)</option>
                                 <option value="date_desc">Date (Descending)</option>
                             </select>
                        </form>
                    </div>
                    <div class="products">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="img_product">
                                    <img src="" onerror="this.src='http://placehold.it/179x179'">   
                                </div>
                                <div class="content_product">
                                    <h2>Ale</h2>
                                    <p>Classic marinara sauce, authentic old-world pepperoni, all-natura</p>
                                    <span class="price">$3.80</span>
                                    <div class="add_to_cart">
                                        <a href="">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6 col-sm-6">
                                <div class="img_product">
                                    <img src="" onerror="this.src='http://placehold.it/179x179'">   
                                </div>
                                <div class="content_product">
                                    <h2>Ale</h2>
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
