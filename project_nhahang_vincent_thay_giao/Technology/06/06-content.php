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
        <!-- Danh mục tên product -->
        



        <div ui-view>
        <!-- Chi tiết sản phẩm trong danh mục -->
          <!-- <div class="vincent_prod_output_container">
            <div ng-init="displayData()">
              <div class="row">
                <div class="col-md-3 col-xs-6" ng-repeat="product in products">
                  <div class="vc_prod_item_wrapper">
                    <div class="vc_prod_list_image_wrapper">
                      <img src="images/06-food1.png" alt=""> 
                    </div>
                    <h5 class="vc_prod_name"><a href="#">{{product.name}}</a></h5>
                    <p class="vc_prod_mieuta">Classic marinara sauce, authentic old-world pepperoni,...</p>
                    <div class="vc_prod_price">$2.60</div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
    </div>
  </div>
</div>

