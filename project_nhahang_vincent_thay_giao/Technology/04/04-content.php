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
      <div ng-init="displayData()">
        <div class="row">  
          <div class="col-md-3 col-sm-3" ng-repeat="product in products">
            <div class="a text-center">
              <img src="./images/{{product.img}}" alt="{{product.img}}">
                <div class="tieudesp">{{product.name | uppercase}} </div>
                <div class="noidungsp">
                  <p>{{product.des}}</p>
                </div>
                <div class="giatien"><p>$ {{product.price | number:2}}</p></div>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>
