 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-01">
  <div class="block-main-product">
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Đây là menu mobile</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="#"><img onerror="this.src='http://placehold.it/70x70'" src=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Món ăn<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Món ăn 1</a></li>
                              <li><a href="#">Món ăn 2</a></li>
                              <li><a href="#">Món ăn 3</a></li>
                          </ul>
                      </li>
                        <li><a href="#">Hình ảnh</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#"><img src="images/search.png"></a></li>    
                    </ul>
                </div>
            </div>
        </nav>
      </div>
   </div>
</div>