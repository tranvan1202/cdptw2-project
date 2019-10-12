<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-04">
  <div class="container">
    <div class="tieude">
      <h2>HOT SALES</h2>
    </div>  
    <div class="type_potion">
      <div class="row">  
        <div class="col-md-3 col-sm-3">
          <div class="a text-center">
            <img src="./images/1.png" alt="1">
              <div class="tieudesp">CARBONARA</div>
              <div class="noidungsp">
                <p>Classic marinara sauce, authentic old-world pepperoni, all-natura</p>
              </div>
              <div class="giatien"><p>$ 6.90</p></div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="a text-center">
            <img src="./images/1.png" alt="2">
              <div class="tieudesp">CARBONARA</div>
              <div class="noidungsp">
                <p>Classic marinara sauce, authentic old-world pepperoni, all-natura</p>
              </div>
              <div class="giatien"><p>$ 6.90</p></div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="a text-center">
            <img src="./images/1.png" alt="3">
              <div class="tieudesp">CARBONARA</div>
              <div class="noidungsp">
                <p>Classic marinara sauce, authentic old-world pepperoni, all-natura</p>
              </div>
              <div class="giatien"><p>$ 6.90</p></div>
          </div>
        </div>
       <div class="col-md-3 col-sm-3">
          <div class="a text-center">
            <img src="./images/1.png" alt="4">
              <div class="tieudesp">CARBONARA</div>
              <div class="noidungsp">
                <p>Classic marinara sauce, authentic old-world pepperoni, all-natura</p>
              </div>
              <div class="giatien"><p>$ 6.90</p></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
