 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-05">
  <div id="box-type-05">
    <div class="container">
      <div class="box-05 row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="box-05-left">
            <div class="title"><h1>We are lengend</h1></div>
            <div class="ct_1_left">
              <p>WE DON’T JUST MAKE PIZZA. WE MAKE PEOPLE’S DAYS. VINCENT PIZZERIA WAS BUILT ON THE BELIEF THAT PIZZA SHOULD BE SPECIAL, AND WE CARRY THAT BELIEF INTO EVERYTHING WE DO.</p>
            </div>
            <div class="ct_2_left">
              <p>What’s our purpose at Vincent? Moments of Excitement. All made possible by our flavor, innovation and, most importantly, by unlocking potential in our team members.</p>
              <p>With more than 50 years of experience under our belts, we understand how to best serve our customers through tried and true service principles. Instead of following trends, we set them. We create food we’re proud to serve and deliver it fast, with a smile. No matter where you find us, we’re making sure each meal our customers enjoy is delicious and one-of-a-kind.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div id="box-05-right">
              <feedback></feedback>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>