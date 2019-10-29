<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-08">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="text-tieude">
                    <h1>SUBSCRIBE FOR OUR NEWSLETTER</h1>
                </div>
                <form name="dangkymail" class="dangkymail" enctype="multipart/form-data" accept-charset="UTF-8" method="post">
                    <input class="input" type="text" name="ten" placeholder="Enter your email..." required="" ng-model="noiDungSub">
                    <input type="submit" value="Đăng Ký" class="dangki" ng-click="dangKy()">
                </form>
                
            </div>
            <p class="error1">The field is required.</p>
            <br>
            <div class="tbError1">
                <p>One or more fields have an error. Please check and try again.</p>
            </div>
            <div class="susce1">
                <p>Thank you for your message. It has been sent.</p>
            </div>
        </div>
    </div>
</div>

