<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-21">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-xs-8">
        <div class="checkout-form">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 col-xs-6 left-content">
                <div class="vc-billing-fields">
                  <h3>Billing Details</h3>
                  <div class="vc-billing-fields_field-wrapper">
                    <p class="form-row-first"></p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xs-6 right-content">
                <div class="vc-additional-fields">
                  <h3>Additional information</h3>
                  <div class="vc-additional-fields_field-wrapper">
                    <p class="form-row">
                      <label>
                        Order notes&nbsp;
                        <span class="optional">(optional)</span>
                      </label>
                      <span class="input-additional">
                        <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                      </span>
                    </p>
                  </div>
                </div>
              </div>

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

