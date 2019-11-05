<div class="type-03">
    <div class="container">
        <div class="row">
            <div id="app">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="vincent_tieuchi_iconbox">
                            <img src="images/03-icon-1.png" alt=""/>
                        </div>

                        <div class="vincent_tieuchi">
                            <a class="vincent_tieuchi_tieude" @click="show1 = !show1"><h4>Quality Foods</h4></a>
                        </div>

                    <div class="vincent_tieuchi_text">
                        <transition name="bounce">
                            <p class="vincent_tieuchi_mieuta" v-if="show1">
                            Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.</p>
                        </transition>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="vincent_tieuchi_iconbox">
                        <img src="images/03-icon-3.png" alt=""/>
                    </div>

                    <div class="vincent_tieuchi">
                     <a class="vincent_tieuchi_tieude" @click="show2 = !show2"><h4>Fastest Delivery</h4>
                    </a> 
                </div>

                <div class="vincent_tieuchi_text">
                    <transition name="bounce">
                        <p class="vincent_tieuchi_mieuta" v-if="show2">
                        Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.</p>
                    </transition>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="vincent_tieuchi_iconbox">
                    <img src="images/03-icon-2.png" alt=""/>
                </div>

                <div class="vincent_tieuchi">
                 <a class="vincent_tieuchi_tieude" @click="show3 = !show3"><h4>Original Recipes</h4>
                </a> 
            </div>

            <div class="vincent_tieuchi_text">
                <transition name="bounce">
                    <p class="vincent_tieuchi_mieuta" v-if="show3">
                    Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit.</p>
                </transition>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
</div>
</div>
</div>
</div>
