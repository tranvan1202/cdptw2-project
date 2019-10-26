<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-02">
    <div class="container">
        <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"  data-swiper-autoplay="2000">
                        <div class="slide">
                            <!-- <ul> -->
                                <div class="img-slide pic1">
                                    <img src="images/02-1.png" alt=""/>
                                    <div class="bg"></div>
                                </div>
                                <div class="mini-title text0 text-sub">NHÀ HÀNG ABC</div>
                                <div class="text-slide text0 text-sub"><h1>Chúng tôi sẵn sàng phục vụ bạn với những món ăn mang tinh hoa, hương vị Việt</h1></div>
                            <!-- </ul> -->
                        </div>
                    </div>

                    <div class="swiper-slide" data-swiper-autoplay="2000">
                        <div class="slide">
                            <!-- <ul> -->
                                <div class="img-slide pic1">
                                    <img src="images/02-2.png" alt=""/>
                                    <div class="bg"></div>
                                </div>
                                <div class="mini-title text0 textt-sub">NHÀ HÀNG ABC</div>
                                <div class="text-slide text0 text-sub"><h1>Liên lạc với chúng tôi ngay hôm nay để có được mức giá ưu đãi nhất</h1></div>
                            <!-- </ul> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
        </div>
    </div>
</div>
