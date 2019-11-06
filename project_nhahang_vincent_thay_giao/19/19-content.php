<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-19">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-8">
                <div class="vincent-cart">
                    <div class="listcart">
                        <form class="form-vincent" action="" method="">
                            <table class="shop_table shop_table_responsive table-vincent">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="form-item">
                                        <td class="product-remove">
                                            <a href="#" class="remove" aria-label="Remove this item">&times;</a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="./images/1.png" alt="1" /></a>
                                        </td>
                                        <td class="product-name" >
                                            <a href="#">Carbonara</a>                      
                                        </td>
                                        <td class="product-price">
                                            <span>$ 3.80</span>
                                        </td>
                                        <td class="product-quantity" >
                                            <div class="quantity">
                                                <input
                                                type="number"
                                                class="input-text qty"
                                                step="1"
                                                min="0"
                                                max="20"
                                                value="2"
                                                title="Qty"
                                                inputmode="numeric"/>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" >
                                            <span class="woocommerce-Price-amount amount">
                                            $ 7.60</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">
                                            <div class="row">
                                                <div class="col-md-6 1">
                                                        <input class="input" type="text" name="ten" placeholder="Coupon code" required="">
                                                        <input type="submit" value="APPLY COUPON" class="dangki">
                                                </div>
                                                <div class="col-md-6 2">
                                                    <button type="submit" class="button" name="update_cart" value="Update cart">Update cart</button>
                                                </div>
                                            </div>           
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table class="shop_table">
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal"><span class="amount">3.80</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span class="amount">3.80</span></strong></td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <button type="submit" class="button" name="update_cart" value="Update cart">
                                    Proceed to checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-4">

            </div>
        </div>
    </div>
</div>


