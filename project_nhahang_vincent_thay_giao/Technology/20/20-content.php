 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>

<div class="type-20">
  <div class="container">
    <div class="row">
      <div class="col-md-8" id="box-code">
        <div class="coupon">
          <span>Have a coupon ?</span>
          <a href="#" class="show-coupon" @click="showIt">Click here to enter your code</a>
        </div>
        <transition name="toggle-code">
          <div class="show-code" v-if="show">
            <p>If you have a coupon code, please apply it below.</p>
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="coupon-code" placeholder="Coupon code">
              </div>
              <div class="col-md-6">
                <a href="#" class="btn-coupon">Apply coupon</a>
              </div>
            </div>
          </div>
        </transition>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</div>