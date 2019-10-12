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
    <div class="inner">
        <a href="#menu_bootstrap" id="btn_menu_bootstrap" data-role="button" role="button" ><span class="transAll03"></span></a>
        <ul class="menu">
            <li><a href="#" class="transitionAll">Trang Chủ</a></li>
            <li><a href="#" class="transitionAll">Giới thiệu</a></li>
            <li><a href="#" class="transitionAll">Món ăn</a>
                <ul>
                  <li><a href="#" class="transitionAll">Món ăn 1</a></li>
                  <li><a href="#" class="transitionAll">Món ăn 2</a></li>
                  <li><a href="#" class="transitionAll">Món ăn 3</a></li>
                </ul>
            </li>
            <li><a href="#" class="transitionAll">Liên hệ</a></li>
        </ul>
        <div id="search">
          <input type="text" name="keywords" class="txt" placeholder="Nhập từ khóa...">
          <button id="btn_search"><a href="#"><img src="images/search.png"></a></button>
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