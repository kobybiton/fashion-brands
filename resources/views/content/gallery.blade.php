@extends('layout')

@section('content')

  <div class="container gallery-container">     
    <div class="row well">
        <div class="col-md-12 gal text-center img-responsive">
         <span class="gal_name">Gallery</span> 

    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 960px;
        height: 480px; background: rgba(00,00,88,0.2); overflow: hidden;">

  
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <div u="slides" style="cursor: move; position: absolute; left: 240px; top: 0px; width: 720px; height: 480px; overflow: hidden;">
            <div>
                <img u="image" src="../public/images/face.jpg" />
                <img u="thumb" src="../public/images/face.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/latina.jpg" />
                <img u="thumb" src="../public/images/latina.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/night.jpg" />
                <img u="thumb" src="../public/images/night.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/wings.jpeg" />
                <img u="thumb" src="../public/images/wings.jpeg" />
            </div>
            <div>
                <img u="image" src="../public/images/men.jpeg" />
                <img u="thumb" src="../public/images/men.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/hugo.jpg" />
                <img u="thumb" src="../public/images/hugo.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/cat.jpg" />
                <img u="thumb" src="../public/images/cat.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/m&f.jpg" />
                <img u="thumb" src="../public/images/m&f.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/show.jpg" />
                <img u="thumb" src="../public/images/show.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/sweet.jpg" />
                <img u="thumb" src="../public/images/sweet.jpg" />
            </div>
            
            <div>
                <img u="image" src="../public/images/boss.jpg" />
                <img u="thumb" src="../public/images/boss.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/boys.jpg" />
                <img u="thumb" src="../public/images/boys.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/beach.jpg" />
                <img u="thumb" src="../public/images/beach.jpg" />
            </div>
            <div>
                <img u="image" src="../public/images/hot.jpg" />
                <img u="thumb" src="../public/images/hot.jpg" />
            </div>
        </div>
        
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 248px;">
        </span>

        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>

        <div u="thumbnavigator" class="jssort02" style="position: absolute; width: 240px; height: 480px; left:0px; bottom: 0px;">
        

            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 99px; height: 66px; top: 0; left: 0;">
                    <div class=w><div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div></div>
                    <div class=c>
                    </div>
                </div>
            </div>
        </div>
     </div>
    </div>

     </div>   
     
       <div class="row well">
        <div class="col-md-3 my3 text-center ">
         <h2>New York</h2> 
          <p>Swimsuit models in New York</p>
          <img src="../public/images/beach.jpg" alt="style" title="style" class="pic"/>
        </div>
        
        <div class="col-md-6 my3 text-center img-responsive">
          <H2>Tel Aviv</H2> 
          <p>Fashion show in Tel Aviv</p>
          <img src="../public/images/wow.gif" alt="sale" title="sale" class="pic"/>
        </div>
        
        <div class="col-md-3 my3 text-center">
          <h2>Barcelona</h2> 
          <p>Othentic wear in Barcelona</p>
          <img src="../public/images/wind.jpg" alt="bags" title="bags" class="pic"/>
        </div>
     </div>   
     
       <div class="row well gal">
        <div class="col-md-3 my3 text-center ">
          <h2>Paris</h2> 
          <p>Wild fashion in Paris</p>
          <img src="../public/images/crazy.jpg" alt="style" title="style" class="pic"/>
        </div>
        
        <div class="col-md-6 my3 text-center img-responsive">
          <H2>London</H2> 
          <p>Makeup models in London</p>
          <img src="../public/images/face.jpg" alt="sale" title="sale" class="pic"/>
        </div>
        
        <div class="col-md-3 my3 text-center">
          <h2>Amsterdam</h2> 
          <p>The simple beauty in Amsterdam</p>
          <img src="../public/images/flower.jpg" alt="bags" title="bags" class="pic"/>
        </div>
     </div>  
   </div>   
</div>

@stop

@section('gallery_slider')
  <script src="{{ asset('js/slider/gallery.js') }}"></script> 
  <script src="{{ asset('js/slider/jssor.slider.js') }}"></script>
  <script src="{{ asset('js/slider/jssor.js') }}"></script>    
@stop