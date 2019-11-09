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
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="bao_tieude">
                            <p>Showing 1–12 of 72 results</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <form class="form_select" method="get">
                            <select name="orderby" class="orderby" aria-label="Shop order" ng-model="sortColumn">
                                <option value="menu_order">Default sorting</option>
                                <option value="name">Sort by name: a to z</option>
                                <option value="-name">Sort by name: z to a</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="-price">Sort by price: high to low</option>
                                <option value="date_asc">Date (Ascending)</option>
                                <option value="date_desc">Date (Descending)</option>
                                <option value="popularity">Sort by popularity</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="products">
                    <div ng-init="displayData()">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12" dir-paginate="product in products | orderBy: sortColumn | itemsPerPage:4">
                                <div class="bao_products">
                                    <div class="img_product">
                                        <img src="./images/{{product.img}}" >   
                                    </div>
                                    <div class="content_product">
                                        <h2>{{product.name}}</h2>
                                        <p>{{product.des}}</p>
                                        <span class="price">$ {{product.price}}</span>
                                        <div class="add_to_cart">
                                            <a href="">ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <dir-pagination-controls>
			            </dir-pagination-controls> 
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                
            </div> 
        </div> 
    </div>
</div>





















