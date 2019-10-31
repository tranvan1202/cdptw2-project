 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-17">
  <div class="container">
    <div role="tabpanel">
      <!-- Nav tabs -->
      <div class="row">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active">
            <a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a>
          </li>
          <li role="presentation">
            <a href="#info" aria-controls="tab" role="info" data-toggle="tab">Additional Infomation</a>
          </li>
          <li role="presentation">
            <a href="#review" aria-controls="tab" role="review" data-toggle="tab">Review (0)</a>
          </li>
        </ul>
      </div>
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="description">
          <div class="description">
            <p>Classic marinara sauce, authentic old-world pepperoni, all-natural Italian sausage, slow-roasted ham, hardwood smoked bacon, seasoned pork and beef. Best an our Hand Tossed crust. With more than 50 years of experience under our belts, we understand how to best serve our customers through tried and true service principles. Instead of following trends, we set them. We create food we’re proud to serve and deliver it fast, with a smile.</p>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="info">
          <information></information>
        </div>
        <div role="tabpanel" class="tab-pane" id="review">
          <div class="review">
            <div class="review-ct">
              <span>There are no review yet.</span>
            </div>
            <div class="first-rv">
              <span>Be the first to review "vincent"</span>
            </div>
            <div class="review-ct">
              <span>Your email address will not be published. Required fields are marked *</span>
            </div>
            <div class='rating-stars'>
                  <ul class='stars'>
                    <li class='star' title='Poor' data-value='1'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Fair' data-value='2'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Good' data-value='3'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Excellent' data-value='4'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='WOW!!!' data-value='5'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                  </ul>
            </div>
            <form class="form-rv">
              <input type="text" name="input-1">
              <input type="text" name="input-2">
              <input type="text" name="input-3">
            </form>
            <div class="cb-save">
              <input type="checkbox" name="save">
              <span>Save my name, email, and website in this browser for the next time I comment.</span>
            </div>
            <div class="btn-submit">
              <button type="button">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>