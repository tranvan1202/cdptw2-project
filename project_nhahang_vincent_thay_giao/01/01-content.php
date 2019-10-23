 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>
 <div class="type-01">
  <div class="container">
    <div class="img_nav"></div>
    <div id="navbar-header">
      <div class="row">
        <div class="col-md-3 col-sm-4 responsive">
          <div class="nav_left">
            <div class="img_phone">
              <img src="images/phone.png">
            </div>
            <div class="info_header">
              <p>+ 123 45 67</p>
              <p>8:00 am - 11:30 pm</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-4">
          <div class="logotop">
            <div class="logo">
              <a href="#"><img src="images/logo.png" alt="logo"></a>                        
            </div>                                                     
          </div>
        </div>
        <div class="col-md-3 col-sm-4 responsive">
          <div class="nav_right">
            <div class="info_header">
              <p>$0.00</p>
              <p>0 items - view cart</p>
            </div>
            <div class="img_cart">
              <img src="images/cart.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="menu">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Menu 1</a></li>
                  <li><a href="#">Menu 1</a></li>
                  <li><a href="#">Menu 1</a></li>
                  <li><a href="#">Menu 1</a></li>
                </ul>
              </li>
              <li><a href="#">About</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Shop</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </nav>
    </div>
  </div>
</div>