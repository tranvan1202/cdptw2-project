 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>
 <div class="type-001">
  <div id="menu">
      <a href="#menu_bootstrap" id="btn_menu_bootstrap" data-role="button" role="button" ><span class="transAll03"></span></a>
      <div class="container">
       <div class="row">
         <div class="col-md-3">
          <div class="nav_right">
            <div class='nav_sidebar'>
              <div class="vincent_quick_contact">
                <div class="vincent_inner_qq">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="mobile"><img src="./images/1.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="vincent_hphone">+0 123 45 67</div>
                      <div class="vincent_hwh">8:00 am – 11:30 pm</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="logotop">
            <div class="logo">
              <a href="#"><img src="../09/images/logo_footer.png" alt="1"></a>                        
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
          </div>
        </div>
        <div class="col-md-3">
            <div class="nav_left">
            <div class='nav_sidebar'>
              <div class="vincent_quick_contact">
                <div class="vincent_inner_qq">
                  <div class="row">
                    <div class="col-md-9">
                      <div class="vincent_hphone">$0.00</div>
                      <div class="vincent_hwh">0 items - view cart</div>
                    </div>
                     <div class="col-md-3">
                      <div class="mobile"><img src="./images/1.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<nav id="menu_bootstrap">
  <ul>
    <li><a href="#" class="transitionAll">Trang Chủ</a></li>
    <li><a href="#" class="transitionAll">Giới thiệu</a></li>
    <li><a href="san-pham" class="transitionAll">Món ăn</a>
      <ul>
        <li><a href="#" class="transitionAll">Món ăn 1</a></li>
        <li><a href="#" class="transitionAll">Món ăn 2</a></li>
        <li><a href="#" class="transitionAll">Món ăn 3</a></li>
      </ul>
    </li>
    <li><a href="#" class="transitionAll">Liên hệ</a></li>
  </ul>
</nav>
</div>