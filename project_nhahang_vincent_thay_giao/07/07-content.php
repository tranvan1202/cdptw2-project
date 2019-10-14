<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-07">
  <div class="container">
    <div class="row">
      <div class="text_wrapper">
        <h6 class="text_1">Not just a pizza, but Lifestyle</h6>
        <h1 class="text_2">Something From the Blog</h1>
        <div class="vc_box_border">
          <img src="images/07-separator_line.png" alt="">
        </div>
        <p class="text_3">And yes, we’re pizza people. But we’re also human people, we lead with our hearts, we believe in giving back to the global community. Join us, welcome to Our Blog!</p>

        <div class="blog_wrapper">
          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="simple_post_item">
              <div class="vc_post_wrapper">
                <div class="vc_post_date">April 6, 2017</div>
                <div class="vc_post_title">Healsy Food for healthy body</div>
                <a class="btn-read-more">
                  Read More
                  <i class="fa fa-angle-right"></i>
                </a>
                
              </div>
            </div>    
          </div>

          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="simple_post_item">
              <div class="vc_post_wrapper">
                <div class="vc_post_date">April 6, 2017</div>
                <div class="vc_post_title">Healsy Food for healthy body</div>
                <a class="btn-read-more">
                  Read More
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>    
          </div>

          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="simple_post_item">
              <div class="vc_post_wrapper">
                <div class="vc_post_date">April 6, 2017</div>
                <div class="vc_post_title">Healsy Food for healthy body</div>
                <a class="btn-read-more">
                  Read More
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>    
          </div>

          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="simple_post_item">
              <div class="vc_post_wrapper">
                <div class="vc_post_date">April 6, 2017</div>
                <div class="vc_post_title">Healsy Food for healthy body</div>
                <a class="btn-read-more">
                  Read More
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>    
          </div>

        </div>

      </div>

    </div>
  </div>
</div>

