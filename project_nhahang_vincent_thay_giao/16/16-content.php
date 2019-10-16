 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-16">
  <div class="box-filter-price">
    <div class="form-range">
      <form method="" action="#">
        <div data-role="rangeslider" class="rangeslider">
          <div class="filterName"><span>Filter by price</span></div>
          <input type="range" name="price-min" id="price-min" value="0" min="0" max="20">
          <input type="range" name="price-max" id="price-max" value="20" min="0" max="20">
        </div>
        <div class="btn-filter">
          <a href="#">FILTER</a>
        </div>
        </form>
    </div>
  </div>
</div>