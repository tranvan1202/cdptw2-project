<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-22">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-xs-8">
        <div class="checkout-form">
          <div id="payment" class="checkout-payment">
            <ul class="payment_methods">
              <li class="payment-methods-notice">
                Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.
              </li>
            </ul>
            <div class="form-row place-order">
              <div class="terms-and-conditions-wrapper">
                <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our 
                  <a href="#" class="privacy-policy-link">privacy policy</a>
                .</p>
              </div>
              <button type="submit" class="button alt" name="checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xs-4">
        <!-- //Phần ghép// -->
      </div>
    </div>
  </div>
</div>
