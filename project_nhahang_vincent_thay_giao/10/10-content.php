<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-10">
  <div class="container">
    <div class="row">

      <div class="title-menu">
        <div class="vc_header_menu_line"></div>
        <div class="vc_header_menu_text">
          <h2>Discover Our Menu</h2>
        </div>
      </div>

      <!-- Product list -->
      <div class="vc_product_listing"> 
        <!-- Danh mục tên product -->
        <div class="vincent_prod_cat_container">
          <ul class="vincent_prod_cat_listing">
            <li class="vincent_prod_cat_item">
              Burgers
            </li>

            <li class="vincent_prod_cat_item">
              Desserts
            </li>

            <li class="vincent_prod_cat_item">
              Drinks
            </li>

            <li class="vincent_prod_cat_item">
              Pastas
            </li>

            <li class="vincent_prod_cat_item">
              Pizzas
            </li>

            <li class="vincent_prod_cat_item">
              Salads
            </li>
          </ul>
        </div>

        <!-- Chi tiết sản phẩm trong danh mục -->
        <div class="vincent_prod_output_container">
          <div class="col-md-3 col-xs-6">
            <div class="vc_prod_item_wrapper">
              <div class="vc_prod_list_image_wrapper">
                <img src="images/10-food1" alt=""> 
              </div>
              <h5 class="vc_prod_name"><a href="#">Vincent</a></h5>
              <p class="vc_prod_mieuta">Classic marinara sauce, authentic old-world pepperoni,...</p>
              <div class="vc_prod_price">$2.60</div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="vc_prod_item_wrapper">
              <div class="vc_prod_list_image_wrapper">
                <img src="images/10-food1" alt=""> 
              </div>
              <h5 class="vc_prod_name"><a href="#">Vincent</a></h5>
              <p class="vc_prod_mieuta">Classic marinara sauce, authentic old-world pepperoni,...</p>
              <div class="vc_prod_price">$2.60</div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="vc_prod_item_wrapper">
              <div class="vc_prod_list_image_wrapper">
                <img src="images/10-food1" alt=""> 
              </div>
              <h5 class="vc_prod_name"><a href="#">Vincent</a></h5>
              <p class="vc_prod_mieuta">Classic marinara sauce, authentic old-world pepperoni,...</p>
              <div class="vc_prod_price">$2.60</div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="vc_prod_item_wrapper">
              <div class="vc_prod_list_image_wrapper">
                <img src="images/10-food1" alt=""> 
              </div>
              <h5 class="vc_prod_name"><a href="#">Vincent</a></h5>
              <p class="vc_prod_mieuta">Classic marinara sauce, authentic old-world pepperoni,...</p>
              <div class="vc_prod_price">$2.60</div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="vc_prod_item_wrapper">
              <div class="vc_prod_list_image_wrapper">
                <img src="images/10-food1" alt=""> 
              </div>
              <h5 class="vc_prod_name"><a href="#">Vincent</a></h5>
              <p class="vc_prod_mieuta">Classic marinara sauce, authentic old-world pepperoni,...</p>
              <div class="vc_prod_price">$2.60</div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="vc_prod_item_wrapper">
              <div class="vc_prod_list_image_wrapper">
                <img src="images/10-food1" alt=""> 
              </div>
              <h5 class="vc_prod_name"><a href="#">Vincent</a></h5>
              <p class="vc_prod_mieuta">Classic marinara sauce, authentic old-world pepperoni,...</p>
              <div class="vc_prod_price">$2.60</div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="vc_prod_item_wrapper">
              <div class="vc_prod_list_image_wrapper">
                <img src="images/10-food1" alt=""> 
              </div>
              <h5 class="vc_prod_name"><a href="#">Vincent</a></h5>
              <p class="vc_prod_mieuta">Classic marinara sauce, authentic old-world pepperoni,...</p>
              <div class="vc_prod_price">$2.60</div>
            </div>
          </div>

          <div class="col-md-3 col-xs-6">
            <div class="vc_prod_item_wrapper">
              <div class="vc_prod_list_image_wrapper">
                <img src="images/10-food1" alt=""> 
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

