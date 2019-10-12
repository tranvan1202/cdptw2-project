<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<footer>
    <div class="type-09">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logotop">
                    <div class="logo">
                        <a href="#"><img src="../09/images/logo_footer.png" alt="1"></a>                        
                    </div>
                    <div class="footer_text">
                        +1 215 456 15 15.
                        <span>8:00 am – 11:30 pm</span>                        
                    </div>
                    <div class="listf">
                        <div class="listf_inner">
                            <div class="listf container">
                            <ul>
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">MENU</a></li>
                                <li><a href="#">FEATURES</a></li>
                                <li><a href="#">ABOUT</a></li>
                                <li><a href="#">BLOG</a></li>
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                            </div>                 
                        </div>
                    </div>                                                     
                        <div class="cop">
                            Copyright © 2019 Vincent. All Rights Reserved.                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
