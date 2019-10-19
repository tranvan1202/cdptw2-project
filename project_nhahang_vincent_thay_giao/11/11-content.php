<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-11">
    <div class="img_cdsd">

        
    </div>
    <div class="product_detail">
        <h2>Product Detail</h2>
    </div>
    <div class="container">
        <div class="row pd0">
            <div class="col-md-6 col-sm-6">
                <div class="full_img">
                    <img src="images/10.png">
                </div>
                <div class="row">
                    <div class="img_nho">
                        <div class="col-md-3 col-sm-3">
                            <img src="images/10.png">
                        </div>  
                        <div class="col-md-3 col-sm-3">
                            <img src="images/10.png">
                        </div>  
                        <div class="col-md-3 col-sm-3">
                            <img src="images/10.png">
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="title_Vincent">
                    <h2>Vincent</h2>
                </div>
                <div class="price_vincent">
                    <p>$3.00 - $16.00</p>
                </div>
                <div class="content_vincent">
                    <p>Classic marinara sauce, authentic old-world pepperoni, all-natural Italian sausage, slow-roasted ham, hardwood smoked bacon, seasoned pork and beef. Best an our Hand Tossed crust. With more than 50 years of experience under our belts, we understand how to best serve our customers through tried and true service principles. Instead of following trends, we set them. We create food we’re proud to serve and deliver it fast, with a smile. Classic marinara sauce, authentic old-world pepperoni, all-natural Italian sausage, slow-roasted ham, hardwood smoked bacon, seasoned pork and beef. Best an our Hand Tossed crust. With more than 50 years of experience under our belts, we understand how to best serve our customers through tried and true service principles. Instead of following trends, we set them. We create food we’re proud to serve and deliver it fast, with a smile.</p>
                    
                </div>
                <div class="row">
                    <div class="size">
                        <div class="col-md-4">
                            <h4>Size</h4>
                        </div>
                        <div class="col-md-8">
                            <form class="form_select_vincent" method="get">
                                <select class="size">
                                    <option>Choose an option</option>
                                    <option>Small 12" (6 Slices)</option>
                                    <option>Medium 14" (6 Slices)</option>
                                    <option>Large 16" (8 Slices)</option>
                                    <option>X-Large 18" (12 Slices)</option>
                                </select>
                            </form>
                        </div>                        
                    </div>      
                </div>
                <div class="row">
                    <div class="size">
                        <div class="col-md-4">
                            <h4>Extra Cheese</h4>
                        </div>
                        <div class="col-md-8">
                            <form class="form_select_vincent" method="get">
                             <select class="size">
                                 <option>Choose an option</option>
                                 <option>None</option>
                                 <option>Half</option>
                                 <option>Whole</option>
                             </select>
                         </form>
                     </div>                        
                 </div>
             </div>
             <div class="row">
                <div class="size">
                    <div class="col-md-4">
                        <h4>Onions</h4>
                    </div>
                    <div class="col-md-8">
                        <form class="form_select_vincent" method="get">
                         <select class="size">
                             <option>Choose an option</option>
                             <option>None</option>
                             <option>Half</option>
                             <option>Whole</option>
                         </select>
                     </form>
                 </div>                        
             </div>
         </div>
          <div class="clear">
            <a href="#">Clear</a>
         </div>
          <div class="price_vincent">
                    <p>$3.00 - $16.00</p>
                </div>
     </div>

 </div> 
</div>
</div>




















