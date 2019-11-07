@extends('layout')

@section('content')
      
        <div style="width:100%; height: 100%; text-align: center; background-image: url(../public/images/express.jpg); background-size: cover; background-repeat: no-repeat; opacity: 0.9;">
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. --> 
        <div id="sliderc_container" style="position: relative; margin: 0 auto; width: 960px;
            height: 563px; text-align: left; ">
 
            <!-- Slides Container --> 
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 960px; height: 500px;
                overflow: hidden;">
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id="slider1_container" style="position: relative; top: 200px; left: 0px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px;">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/quality.jpg) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
                            <div>
                                <a u="image" href="{{ url('shop') }}"><img src="../public/images/fashion.jpg" alt="image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                always be in..
                                </div>
                            </div>
                            <div>
                                <a u="image" href="{{ url('game') }}"><img src="../public/images/brand_game.jpg" alt="jqeury image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 180px; width:500px; height:30px;"> 
                                Play Brands Game and get 50% discount! 
                                </div>
                            </div>
                            <div>
                                <a u="image" href="{{ url('shop') }}"><img src="../public/images/brands.jpg" alt="responsive image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                so fresh and so clean
                                </div>
                            </div>
                            <div>
                                <a u="image" href="{{ url('shop') }}"><img src="../public/images/women.jpg" alt="touch swipe image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                part of big sales
                                </div>
                            </div>
                        </div>
        
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- jssor slider bullet navigator skin 01 -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
        
                        <!-- Arrow Navigator Skin Begin -->
  
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora02r" style="width: 55px; height: 55px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
        
                    </div>
                    <!-- Jssor Slider End -->
                    <div u="caption" t="RTT*JUP|BR" t2="SPACESHIP|RB" style="position: absolute; left: 0px;top:30px;width:600px;height:30px;font-size:28px;color:#000;line-height:30px; text-align: center;">
                    Best prices!
                    </div>
                    <div style="position: absolute; top: 110px; left: 640px; width: 320px; height: 250px;">
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 10px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="100%" class="captionOrange" style="position: absolute; top: 10px; left: 40px; width: 280px; height: 30px;">
                        Best deals!
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 60px; left: 0px; width: 30px; height: 30px;" debug-id="team-caption">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="50%" class="captionOrange" style="position: absolute; top: 60px; left: 40px; width: 280px; height: 30px;">
                        Best quality
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 110px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="0" class="captionOrange" style="position: absolute; top: 110px; left: 40px; width: 280px; height: 30px;">
                        Best service
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 160px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="-50%" class="captionOrange" style="position: absolute; top: 160px; left: 40px; width: 280px; height: 30px;">
                        Product Warranty
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 210px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="-100%" class="captionOrange" style="position: absolute; top: 210px; left: 40px; width: 280px; height: 30px;">
                        A present!
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id="slider2_container" style="position: relative; top: 30px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px; zoom: 1; filter: matrix">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/coupon.jpg" alt="banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                beauty is our job
                                </div>
                            </div>
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/discount.jpg" alt="jquery banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                help you design
                                </div>
                            </div>
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/shoes.jpg" alt="responsive banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                make you feel good about yourself
                                </div>
                            </div>
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/saucony.jpg" alt="touch swipe banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                come and visit us :)
                                </div>
                            </div>
                        </div>
        
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- jssor slider bullet navigator skin 01 -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
        
                        <!-- Arrow Navigator Skin Begin -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
                  
                    </div>
                    <!-- Jssor Slider End -->
                    <div u="caption" t="T|IE*IE" t2="B*IB" style="position: absolute; left: 360px;top:360px;width:600px;height:30px;font-size:28px;color:#000;line-height:30px; text-align: center;">
                     Big Fashion shop
                    </div>
                    <a class="captionTextBlack" u="caption" t="CLIP|L" d="-200" href="{{ url('shop') }}"
                        style="position: absolute; top: 30px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">
                        Big sale !</a>

                    <div u="caption" t="ZM" t2="NO" style="position: absolute; top: 80px; left: 0px; width: 320px; height: 80px;">
                        <div u="caption" t2="TEAM_2" class="captionOrange" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
                            End of season
                        </div>            
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 0px; width: 100px; height: 60px;">
                            20%-80% Off!!!
                        </div>
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 130px; width: 100px; height: 30px;">
                           get it now!
                        </div>
                    </div>

                    <a class="captionTextBlack" u="caption" t="L|EP" href="{{ url('user/contact') }}"
                        style="position: absolute; top: 210px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">
                        contact us</a>

                    <div u="caption" t="B*IB" t2="NO" style="position: absolute; top: 260px; left: 0px; width: 320px; height: 80px;">
                        <div u="caption" t2="TEAM_2" class="captionOrange" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
                            come and visit
                        </div>
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 0px; width: 100px; height: 30px;">
                            write to us
                        </div>
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 130px; width: 100px; height: 30px;">
                            comment
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id="slider3_container" style="position: relative; top: 90px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px;">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/caricature.jpg" alt="banner slider" /></a>
                                <div u="thumb">like shopping?</div>
                            </div>
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/shopping.jpg" alt="banner slider" /></a>
                                <div u="thumb">Do you like fashion?</div>
                            </div>
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/surprise.jpg" alt="banner slider" /></a>
                                <div u="thumb">want to be styled?</div>
                            </div>                                                        
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/Gucci_shoes.jpg" alt="jquery banner slider" /></a>
                                <div u="thumb">Do you want to be free?</div>
                            </div>
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/sunglasses.jpg" alt="responsive banner slider" /></a>
                                <div u="thumb">Did you Find your best favourite Brand?</div>
                            </div>
                            <div>
                                <a u=image href="{{ url('shop') }}"><img src="../public/images/versace.jpg" alt="touch swipe banner slider" /></a>
                                <div u="thumb">Share with us your thoughts...</div>
                            </div>
                        </div>

                        <!-- ThumbnailNavigator Skin Begin -->
                        <div u="thumbnavigator" class="slider3-T" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
                            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px; width: 100%; height: 100%;">
                            </div>
                            <!-- Thumbnail Item Skin Begin -->
                            <div u="slides">
                                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
                                    <div u="thumbnailtemplate" style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- ThumbnailNavigator Skin End -->
        
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- jssor slider bullet navigator skin 01 -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
                        
                        <!-- Arrow Navigator Skin Begin -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
                    </div>
                    <!-- Jssor Slider End -->
                    <div u="caption" t="L*IB" t2="SPACESHIP|LB" style="position: absolute; left: 360px;top:30px;width:600px;height:30px;font-size:28px;color:#fff;line-height:30px; text-align: center;">
                    Blow your mind !
                    </div>
                    <div class="captionTextBlack" u="caption" t="CLIP|LR" d="-200"
                        style="position: absolute; top: 60px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;"></div>

                    <div u="caption" t2="ZM" style="position: absolute; top: 120px; left: 0px; width: 320px; height: 120px;">
                        <div u="caption" class="captionOrange" t="TEAM_2" t2="NO" d=-300 style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
                            Live fotos
                        </div>            
                        <div u="caption" class="captionBlack" t="TEAM_2" t2="NO" d=-300 style="position: absolute; top: 40px; left: 0px; width: 200px; height: 30px;">
                            Feel Free
                        </div>
                        <div u="caption" class="captionBlack" t="TEAM_2" t2="NO" d=-300 style="position: absolute; top: 80px; left: 00px; width: 200px; height: 30px;">
                            Wild Wear
                        </div>
                    </div>

                    <div u="caption" t="RTT|360" t2="NO" style="position: absolute; top: 290px; left: 0px; width: 320px; height: 80px;">
                        <div u="caption" class="captionOrange" t2="TEAM_2" style="position: absolute; top: 0px; left: 0px; width: 120px; height: 30px;">
                            Fashion
                        </div>            
                        <div u="caption" class="captionOrange" t2="TEAM_2" style="position: absolute; top: 40px; left: 0px; width: 120px; height: 30px;">
                            Gallery
                        </div>            
                        <div u="caption" class="captionBlack" t2="TEAM_2" style="position: absolute; top: 0px; left: 170px; width: 120px; height: 30px;">
                            Shopping...
                        </div>            
                        <div u="caption" class="captionBlack" t2="TEAM_2" style="position: absolute; top: 40px; left: 170px; width: 120px; height: 30px;">
                            Exciting
                        </div> 
                    </div>
                </div>
            </div> 
 
   
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb03" style="position: absolute; bottom: 16px; left: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;"><div u="numbertemplate"></div></div>
            </div>

            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora20l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora20r" style="width: 55px; height: 55px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End -->
        </div> 
        <!-- Jssor Slider End -->
    </div>
    

@stop

@section('home_slider')
   <script src="{{ asset('js/slider/jssor.slider.js') }}"></script>
   <script src="{{ asset('js/slider/jssor.js') }}"></script>    
   <script src="{{ asset('js/slider/slider.js') }}"></script>
@stop
