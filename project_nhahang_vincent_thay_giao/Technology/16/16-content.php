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
      <form>
        <div class="filterName">
          <span>Fiter by price</span>
        </div>
        <div id="app">
          <div class="app-content">
            <vue-range-slider v-model="value" :min="min" :max="max" :formatter="formatter" :tooltip-merge="tooltipMerge" :enable-cross="enableCross"></vue-range-slider>
          </div>
        </div>
        <div class="btn-filter">
          <a href="#">FILTER</a>
        </div>
        </form>
    </div>
  </div>
</div>