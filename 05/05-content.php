
<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<body>
  <!-- Swiper -->
  <div class="type-05">
    <div class="container">
      <div class="tieude">
        <div class="feature"> Hình ảnh nổi bật </div>
      </div>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="text-center">
              <img onerror="this.src='http://placehold.it/600x500'" src="" alt="" >
                  <div class="new-1">
                <span class="new">HOT</span>
              </div> 
            </div>
          </div>
          <div class="swiper-slide">
            <div class="text-center">
              <img onerror="this.src='http://placehold.it/600x500'" src="" alt="" >
                 <div class="new-1">
                <span class="new">HOT</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="text-center">
              <img onerror="this.src='http://placehold.it/600x500'" src="" alt="" >
                 <div class="new-1">
                <span class="new">HOT</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="text-center">
              <img onerror="this.src='http://placehold.it/600x500'" src="" alt="" >
                 <div class="new-1">
                <span class="new">HOT</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="text-center">
              <img onerror="this.src='http://placehold.it/600x500'" src="" alt="" >
                 <div class="new-1">
                <span class="new">HOT</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="text-center">
              <img onerror="this.src='http://placehold.it/600x500'" src="" alt="" >
                 <div class="new-1">
                <span class="new">HOT</span>
              </div>
            </div>
          </div>
        </div>       
        <!-- Add Arrows -->
        <div class="button">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>
        <!-- Add Pagination -->
        <br>
        <br>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</body>

