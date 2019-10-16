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
    <ul id="nav">
      <li><a href="ajax/description.php">Description</a></li>
      <li><a href="ajax/info.php">Additional Information</a></li>
      <li><a href="ajax/review.php">Review (0)</a></li>
    </ul>
    <div id="ajax-content"></div>
  </div>
</div>