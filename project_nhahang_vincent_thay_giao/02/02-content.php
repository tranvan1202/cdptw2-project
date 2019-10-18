<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-02">
    <div class="container-fluid">
        <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"  data-swiper-autoplay="2000">
                        <div class="slide">
                            <div class="pizza-on-bg">
                                <img src="images/02-pizza.png" alt="">
                            </div>
                            <div class="mini-title-slide1">
                                <h1>Vincent</h1>
                            </div>
                            <div class="fname-slide-slide1">
                                Italian Pizza With Cherry Tomatoes and Green Basil
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" data-swiper-autoplay="2000">
                        <div class="slide">
                            <div class="pizza-on-bg-2">
                                <img src="images/02-pizza-2.png" alt="">
                            </div>
                            <div class="mini-title-slide2">
                                <h1>Vincent Pizza.</h1>
                            </div>
                            <div class="text-slide-slide2">
                                <h2>Making people happy</h2>
                            </div>
                            <hr class="line-break">
                            <div class="fname-slide-slide2">
                                Italian Pizza With Cherry Tomatoes and Green Basil
                            </div>
                            <button type="button" class="btn btn-menu">
                                View Menu
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
</div>

