 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
  <div class="box-15">
    <div class="title-15">
      <h6>Menu Categories</h6>
    </div>
    <div class="content-15">
      <ul>
        <li><a href="#">Burgers</a></li>
        <li><a href="#">Desserts</a></li>
        <li><a href="#">Drinks</a></li>
        <li><a href="#">Pasta</a></li>
        <li><a href="#">Pizzas</a></li>
        <li><a href="#">Salads</a></li>
        <li><a href="#">Uncategorized</a></li>
      </ul>
    </div>
  </div>
</div>