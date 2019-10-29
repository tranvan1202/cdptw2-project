<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-23">
   <div class="khung_error">
		<ul class="woocommerce-error" role="alert">
			<li>Billing First name<span> is a required field.</span></li>
			<li>Billing Last name<span> is a required field.</span></li>
			<li>Billing First name<span> is a required field.</span></li>
			<li>Billing Street address<span> is a required field.</span></li>
			<li>Billing Town / City<span> is a required field.</span></li>
			<li>Billing Phone<span> is a required field.</span></li>
			<li>Billing Email address<span> is a required field.</span></li>
			<li>Invalid payment method.</li>
		</ul>
	</div>
</div>




















