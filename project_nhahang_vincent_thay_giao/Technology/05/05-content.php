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
              <ul class="ct_1_right">
                <li>
                  <div class="box_ct_1">
                    <p>Vincent was one of the first restaurants I discovered upon moving to New York last summer, and it remains a favorite. Despite its sizable menu full of pastas, sandwiches, and pizzas, I almost always get the same thing – the Vincent pizza. It’s made with Ricotta & Marinara sauces, spiced with oregano, and topped with eggplant, red onions, basil, Pecorino Romano & Mozzarella. It really is one of the best pizzas I’ve ever had – and I eat a lot of pizza.</p>
                  </div>
                  <div class="user">
                    <div class="img_user">
                      <img src="images/user-1.png" alt="user">
                    </div>
                    <div class="info_user">
                      <span>ADAM JEFFERSON</span>
                      <span>Lawyer, New York</span>
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="box_ct_1">
                    <p>The pizza is delicious! The crust is thin and crispy, great sauce, and awesome cheese blend. And it makes a cute cheap date!</p>
                  </div>
                  <div class="user">
                    <div class="img_user">
                      <img src="images/user-2.png" alt="user">
                    </div>
                    <div class="info_user">
                      <span>SAMANTHA GREENBERG</span>
                      <span>Artist, Boston</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>