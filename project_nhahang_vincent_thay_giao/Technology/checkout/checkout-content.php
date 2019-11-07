<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="checkout">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-xs-8">
        <div class="checkout-form">
          <div class="container-fluid">
            <form name="myForm">
              <div class="coupon">
                <span>
                  Have a coupon ?
                </span>
                <a href="#" class="show-coupon">Click here to enter your code</a>
              </div>
              <div id="form-code">
                <div class="form-code">
                  <p>
                    If you have a coupon code, please apply it below.
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="coupon-code" placeholder="Coupon code">
                    </div>
                    <div class="col-md-6">
                      <a href="#" class="btn-coupon">
                        Apply coupon
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="khung_error" ng-show="loi">
                <ul class="woocommerce-error" role="alert">
                  <!-- hunghienthiloi -->
                  <li ng-show="fNameShow">Billing First name<span> is a {{noidungFName}}.</span></li>
                  <li ng-show="lNameShow">Billing Last name<span> is a {{noidungLName}}.</span></li>
                  <li ng-show="hNumberShow">Billing Street address<span> is {{noidunghNumber}}.</span></li>
                  <li ng-show="aNumberShow">Billing Street address<span> is {{noidungaNumber}}.</span></li>
                  <li ng-show="cityShow">Billing Town / City<span> is a {{noidungCity}}.</span></li>
                  <li ng-show="postShow">Billing Postcode<span> is a {{noidungPost}}.</span></li>
                  <li ng-show="phoneShow">Billing Phone<span> is a {{noidungPhone}}.</span></li>
                  <li ng-show="emailShow">Billing Email address<span> is a {{noidungEmail}}.</span></li>
                  <li>Invalid payment method.</li>
    
                </ul>
              </div>

              <div class="row">
                <!-- PHẦN BÊN TRÁI -->
                <div class="col-md-6 col-sm-12 left-content">
                  <div class="vc-billing-fields">
                    <h3>Billing Details</h3>
                      <div class="vc-billing-fields_field-wrapper">
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-xs-12">
                            <!-- Phần input First Name -->
                            <p class="form-row" id="billing_first_name_field">
                              <label for="billing_first_name" class>
                                First name&nbsp;
                                <abbr class="required" title="required">*</abbr>
                              </label>
                              <span class="input-wrapper">
                              <!-- hungfirstname -->
                                <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name" ng-model="fName" name="fName" required>
                              </span>
                            </p>
                            <!-- <p>hung</p> -->
                          </div>
                          <div class="col-lg-6 col-md-12 col-xs-12">
                            <!-- Phần input Last Name -->
                            <p class="form-row" id="billing_last_name_field">
                              <label for="billing_last_name" class>
                                Last name&nbsp;
                                <abbr class="required" title="required">*</abbr>
                              </label>
                              <span class="input-wrapper">
                              <!-- hunglastname -->
                                <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="" autocomplete="family-name" ng-model="lName" name="lName" required>
                              </span>
                            </p>
                          </div>
                        </div>
                        <p class="form-row" id="billing_company_field">
                          <label for="billing_company" class>
                            Company name&nbsp;
                            <span class="optional">(optional)</span>
                          </label>
                          <span class="input-wrapper">
                            <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="" autocomplete="organization">
                          </span>
                        </p>
                        <p class="form-row" id="billing_country_field">
                          <label for="billing_country" class>
                            Country&nbsp;
                            <abbr class="required" title="required">*</abbr>
                          </label>
                          <span class="input-wrapper">
                            <select name="billing_country" id="billing_country" class="country_to_state country_select select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true"><option value="">Select a country…</option><option value="AX">Åland Islands</option><option value="AF" selected="selected">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="PW">Belau</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao S.A.R., China</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MK">North Macedonia</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom (UK)</option><option value="US">United States (US)</option><option value="UM">United States (US) Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                          </span>
                        </p>
                        <p class="form-row" id="billing_address_1_field">
                          <label for="billing_address_1" class>
                            Street address&nbsp;
                            <abbr class="required" title="required">*</abbr>
                          </label>
                          <span class="input-wrapper">
                            <input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="House number and street name" value="" autocomplete="address-line1" data-placeholder="House number and street name" ng-model="hNumber" name="hNumber" required>
                          </span>
                        </p>
                        <p class="form-row" id="billing_address_2_field">
                          <span class="input-wrapper">
                            <input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" autocomplete="address-line2" data-placeholder="Apartment, suite, unit etc. (optional)" ng-model="aNumber" name="aNumber" required>
                          </span>
                        </p>
                        <p class="form-row" id="billing_city_field">
                          <label for="billing_city" class>
                            Town / City&nbsp;
                            <abbr class="required" title="required">*</abbr>
                          </label>
                          <span class="input-wrapper">
                            <input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" autocomplete="address-level2" ng-model="city" name="city" required>
                          </span>
                        </p>
                        <p class="form-row" id="billing_postcode_field">
                          <label for="billing_postcode" class>
                            Postcode / ZIP&nbsp;
                            <abbr class="required" title="required">*</abbr>
                          </label>
                          <span class="input-wrapper">
                            <input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" autocomplete="postal-code" ng-model="post" name="post" required>
                          </span>
                        </p>
                        <p class="form-row" id="billing_phone_field">
                          <label for="billing_phone" class>
                            Phone&nbsp;
                            <abbr class="required" title="required">*</abbr>
                          </label>
                          <span class="input-wrapper">
                            <input type="number" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel" ng-model="phone" name="phone" required> 
                          </span>
                        </p>
                        <p class="form-row" id="billing_email_field">
                          <label for="billing_email" class>
                            Email address &nbsp;
                            <abbr class="required" title="required">*</abbr>
                          </label>
                          <!-- hungemail -->  
                          <span class="input-wrapper">
                            <input type="email" class="input-text" ng-model="email" name="email" 
                            id="billing_email" placeholder="Nhap Email..." required>
                          </span>
                        </p>
                      </div>
                  </div>
                </div>

                  <!-- PHẦN BÊN PHẢI -->
                  <div class="col-md-6 col-sm-12 right-content">
                    <div class="vc-additional-fields">
                      <h3>Additional information</h3>
                      <div class="vc-additional-fields_field-wrapper">
                        <p class="form-row notes">
                          <label for="order_comments">
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
              <!-- PHẦN TABLE TÍNH GIÁ -->
              <h3 id="order_review_heading">Your order</h3>
              <div id="order_review" class="checkout-review-order">
                <table class="table table-bordered checkout-review-order-table">
                  <thead>
                    <tr>
                      <th class="product-name text-center">Product</th>
                      <th class="product-total text-center">Total</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class="cart_item text-center">
                      <td class="product-name">
                        Diablo&nbsp;               
                        <strong class="product-quantity">× 1</strong>
                      </td>
                      <td class="product-total">
                        <span class="product-price">
                          <span class="product-price-symbol">$</span>
                          3.50
                        </span>
                      </td>
                    </tr>
                  </tbody>

                  <tfoot>
                    <tr class="cart-subtotal text-center">
                      <th class="text-center">Subtotal</th>
                      <td>
                        <span class="product-price">
                          <span class="product-price-symbol">$</span>
                          3.50
                        </span>
                      </td>
                    </tr>

                    <tr class="order-total text-center">
                      <th class="text-center">Total</th>
                      <td>
                        <strong>
                          <span class="product-price">
                            <span class="product-price-symbol">$</span>
                            3.50
                          </span>
                        </strong> 
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div id="payment" class="checkout-payment">
                <ul class="payment_methods">
                  <li class="payment-methods-notice">
                    Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.
                  </li>
                </ul>
                <div class="form-row place-order">
                  <div class="terms-and-conditions-wrapper">
                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our 
                      <a href="#" class="privacy-policy-link">privacy policy</a>.</p>
                    </div>
                    <!-- hungbutton -->
                    <input type="button" class="button alt btn-checkout" id="place_order" value="Place order" data-value="Place order" ng-click="CheckOut()"/>
                  </div>
                </div>

              </div>
            </div>
            </form>
          <!-- hungkiem -->
        </div>

        <div class="col-md-4 col-xs-4">
          <!-- //Phần ghép// -->
        </div>
      </div>
    </div>
  </div>
