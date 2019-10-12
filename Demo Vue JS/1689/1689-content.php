 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>

 <div class="type-739">
   <div class="container">
      <div class="block-main-product">
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">{{ message }}</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
                    <navigation></navigation>
                </div>
            </div>
        </nav>
      </div>
   </div>
   <div class="banner">
      <div class="container">
         <div class="box_main">
            <div class="swiper-container">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="block">
                        <div class="image">
                           <img src="images/4.jpg" alt="Beat Spill 2.0 Wireless Speaker - White"/>
                        </div>
                        <div class="product-btn row">
                           <div class="product-list">
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="fas fa-cart-plus"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-eye"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-heart"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-chart-bar"></i></a>
                              </div>
                           </div>
                        </div>
                        <h3 class="product-item1">
                           <a href="#" alt="Beat Spill 2.0 Wireless Speaker - White">Beat Spill 2.0 Wireless Speaker - White</a>
                        </h3>
                        <div class="far-item">
                           <div style="display: -webkit-inline-flex; align-items: center;">
                              <div class='rating-stars text-center'>
                                  <ul class='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                        <div class="price">
                           <span>$150.00</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="block">
                        <div class="image">
                           <img src="images/4.jpg" alt="Samsung Gear VR Virtual Reality Headset"/>
                        </div>
                        <div class="product-btn row">
                           <div class="product-list">
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="fas fa-cart-plus"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-eye"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-heart"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-chart-bar"></i></a>
                              </div>
                           </div>
                        </div>
                        <h3 class="product-item1">
                           <a href="#" alt="Samsung Gear VR Virtual Reality Headset">Samsung Gear VR Virtual Reality Headset</a>
                        </h3>
                        <div class="far-item">
                           <div style="display: -webkit-inline-flex; align-items: center;">
                              <div class='rating-stars text-center'>
                                  <ul class='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                        <div class="price">
                           <span>$150.00</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="block">
                        <div class="image">
                           <img src="images/4.jpg" alt="ASUS Chromebook Flip - 10.2 Inch"/>
                        </div>
                        <div class="product-btn row">
                           <div class="product-list">
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="fas fa-cart-plus"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-eye"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-heart"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-chart-bar"></i></a>
                              </div>
                           </div>
                        </div>
                        <h3 class="product-item1">
                           <a href="#" alt="ASUS Chromebook Flip - 10.2 Inch">ASUS Chromebook Flip - 10.2 Inch</a>
                        </h3>
                        <div class="far-item">
                           <div style="display: -webkit-inline-flex; align-items: center;">
                              <div class='rating-stars text-center'>
                                  <ul class='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                        <div class="price">
                           <span>$150.00</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="block">
                        <div class="image">
                           <img src="images/4.jpg" alt="Apple iPhone Retina 6s Plus 64GB"/>
                        </div>
                        <div class="product-btn row">
                           <div class="product-list">
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="fas fa-cart-plus"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-eye"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-heart"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-chart-bar"></i></a>
                              </div>
                           </div>
                        </div>
                        <h3 class="product-item1">
                           <a href="#" alt="Apple iPhone Retina 6s Plus 64GB">Apple iPhone Retina 6s Plus 64GB</a>
                        </h3>
                        <div class="far-item">
                           <div style="display: -webkit-inline-flex; align-items: center;">
                              <div class='rating-stars text-center'>
                                  <ul class='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                        <div class="price">
                           <span>$150.00</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="block">
                        <div class="image">
                           <img src="images/4.jpg" alt="Apple Macbook Display 12 Inch"/>
                           <span class="discount-percent">-23%</span>
                        </div>
                        <div class="product-btn row">
                           <div class="product-list">
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="fas fa-cart-plus"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-eye"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-heart"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-chart-bar"></i></a>
                              </div>
                           </div>
                        </div>
                        <h3 class="product-item1">
                           <a href="#" alt="Apple Macbook Display 12 Inch">Apple Macbook Display 12 Inch</a>
                        </h3>
                        <div class="far-item">
                           <div style="display: -webkit-inline-flex; align-items: center;">
                              <div class='rating-stars text-center'>
                                  <ul class='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                        <div class="price">
                           <span>$150.00</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="block">
                        <div class="image">
                           <img src="images/4.jpg" alt="Xbox One Wireless Controller"/>
                        </div>
                        <div class="product-btn row">
                           <div class="product-list">
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="fas fa-cart-plus"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-eye"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-heart"></i></a>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                 <a href="#"><i class="far fa-chart-bar"></i></a>
                              </div>
                           </div>
                        </div>
                        <h3 class="product-item1">
                           <a href="#" attr="Xbox One Wireless Controller">Xbox One Wireless Controller</a>
                        </h3>
                        <div class="far-item">
                           <div style="display: -webkit-inline-flex; align-items: center;">
                              <div class='rating-stars text-center'>
                                  <ul class='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                      <i class='fa fa-star fa-fw'></i>
                                    </li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                        <div class="price">
                           <span>$150.00</span>
                        </div>
                     </div>
                  </div>
               </div>
            <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
         </div>
      </div>
   </div>
</div>
