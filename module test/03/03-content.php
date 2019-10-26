<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div id="gioithieu" class="type-03">
    <div class="margin_auto">
         <h2>Giới Thiệu <span>Về Chúng Tôi</span></h2>
        <div class="gioithieu">
            <div class="img_gioithieu hover_zoom">
                <a href="#"><img onerror="this.src='http://placehold.it/405x253'" src=""></a>
            </div>
            <div class="noidung_gioithieu">
                <div class="title_gt">
                    <h3>Nhà hàng Alibaba</h3>
                </div>
                <div class="mota_noidung">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
