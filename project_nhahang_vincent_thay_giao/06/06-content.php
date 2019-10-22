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
        <div class="vincent_prod_cat_container">
          <ul class="vincent_prod_cat_listing">
            <li class="">
              <a href="#" class="vincent_prod_cat_item">Burgers</a>
              <a href="#" class="vincent_prod_cat_item">Dessert</a>
              <a href="#" class="vincent_prod_cat_item">Drinks</a>
              <a href="#" class="vincent_prod_cat_item">Pasta</a>
              <a href="#" class="vincent_prod_cat_item">Pizzas</a>
              <a href="#" class="vincent_prod_cat_item">Salads</a>
            </li>
          </ul>
        </div>

        <!-- Chi tiết sản phẩm trong danh mục -->
        <div class="vincent_prod_output_container">
          <div class="row">
            <div class="col-md-3 col-xs-6">
              <div class="vc_prod_item_wrapper">
                <div class="vc_prod_list_image_wrapper">
                  <a href="#"><img src="images/06-food1.png" alt=""></a> 
                </div>
                <h5 class="vc_prod_name"><a href="#">Vincent</a></h5>
                <p class="vc_prod_mieuta">Classic marinara sauce, authentic old-world pepperoni,...</p>
                <div class="vc_prod_price">$2.60</div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

