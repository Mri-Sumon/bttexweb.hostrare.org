@extends('layouts.FrontendBttexLayout')
@section('content')
<style>
    .card-information{
        margin-top:18px!important;
    }
.nav2 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 270px;
    background-color: #fff;
    /* position: fixed; */
    z-index: 2!important;
    

}
.nav2 ul li {min-width: 200px; font-size:14px;}
.nav2 ul li a {display: block; color: #000; text-decoration: none; padding: 10px 0 10px 10px;}
.nav2 ul li:hover > a {color: red; background-color: #fff; }

.nav2 .dropdown-content {
	min-width: 150px;
    display: none;
	left: 270px;
    float:left;
    position: absolute;
	font-size:14px;
	margin-top: -48px;
	box-shadow: 0 3px 18px 2px rgb(0 0 0 / 20%);
	border-radius:10px!important;
	padding-top:10px;
	padding-bottom:10px;
}
.nav2 .dropdown-content a {
    background-color: #fff;
    color: black;
    text-decoration: none;
    display: block;
    text-align: left;
	padding: 10px 0 10px 10px;
	text-transform:uppercase!important
}
.nav2 .dropdown:hover > .dropdown-content {
    display: inline-block;
}
@media only screen and (max-width: 426px) {
    .nav2 .block-categories-slider{
        display:none!important;
    }
}

</style>

<!--MEDIA QUERY CATEGORIES, SLIDERS, BANERS-->
<style>
@media only screen and (max-width: 1441px) {
    .categories_sliders_bands{
        /*width: 100%!important;*/
        margin-right: 5% !important;
        margin-left: 5% !important;
        background-color: #F5F5F5!important;
    }
}
@media only screen and (max-width: 426px) {
    .categories_sliders_bands{
        /*width: 100%!important;*/
        margin-right: 0% !important;
        margin-left: 0% !important;
    }
}
</style>

<div  id="shopify-section-template--14613100560474__16426738253c0b77ec" class="shopify-section sections-slide-show"><div class="slideshow-wrapper section-block-template--14613100560474__16426738253c0b77ec is-load" id="slideshow-wrapper-template--14613100560474__16426738253c0b77ec" data-loader-script="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/halo.slide-show.js?v=52270631691380148001685700098">
    <div class="categories_sliders_bands"><div class="container"><div class="wrapper-category-banner has-categories has-banner"><div class="block-categories-slider">
        <div class="wrapper-category">
            <!--<div class="title">-->
            <!--    <span>CATEGORIES</span>-->
            <!--</div>-->
            <?php $cats=\DB::table('cats')->where('parent','0')->get();?>
            <nav class="nav2">
                <ul>
                    @foreach($cats as $cat)
                    <?php $subcats=\DB::table('cats')->where('parent',$cat->id)->get();?>
                	<li @if(count($subcats)>0) class="dropdown" @endif> 
                	<a href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" style=" text-transform:uppercase!important;"> 
                	<table border="0">
                	    <tr>
                	        <td>@if($cat->faicon!='')<i class="fa {{$cat->faicon}}" aria-hidden="true" style="font-size:20px;"></i>@endif  </td>
                	        <td>{{$cat->name}} </td>
                	        <td>
                	            @if(count($subcats)>0)
                            	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" style="color:#000!important;" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg>
                            	@endif
                	        </td>
                	    </tr>
                	</table>
                	
                	
                	
                	</a>
                	    @if(count($subcats)>0)
                		<ul class="dropdown-content">
                		    @foreach($subcats as $subcat)
                			<li class="dropdown"><a href="{{URL::to('/')}}/shop/cat/{{$subcat->id}}">{{$subcat->name}}</a>
                            				<!--<ul class="dropdown-content">-->
                            				<!--	<li class="dropdown"><a href="">Menu item 111</a>-->
                            				<!--		<ul class="dropdown-content">-->
                            				<!--			<li class="dropdown"><a href="">Menu item 1111</a>-->
                            				<!--				<ul class="dropdown-content">-->
                            				<!--					<li class="dropdown"><a href="">Menu item 11111</a>-->
                            				<!--					</li>-->
                            				<!--					<li>-->
                            				<!--						<a href="">Menu item 11112</a>-->
                            				<!--					</li>-->
                            				<!--					<li>-->
                            				<!--						<a href="">Menu item 11113</a>-->
                            				<!--					</li>-->
                            				<!--					<li>-->
                            				<!--						<a href="">Menu item 11114</a>-->
                            				<!--					</li>-->
                            				<!--				</ul>-->
                            				<!--			</li>-->
                            				<!--			<li class="dropdown"><a href="">Menu item 1112</a>-->
                                <!--            <ul class="dropdown-content">-->
                                <!--              <li class="dropdown"><a href="">Menu item 11121</a>-->
                                <!--              </li>-->
                                <!--              <li>-->
                                <!--                <a href="">Menu item 11122</a>-->
                                <!--              </li>-->
                                <!--              <li>-->
                                <!--                <a href="">Menu item 11123</a>-->
                                <!--              </li>-->
                                <!--              <li>-->
                                <!--                <a href="">Menu item 11124</a>-->
                                <!--              </li>-->
                                <!--            </ul>                -->
                            				<!--			</li>-->
                            				<!--		</ul>-->
                            				<!--	</li>-->
                            				<!--	<li>-->
                            				<!--		<a href="">Menu item 112</a>-->
                            				<!--	</li>-->
                            				<!--	<li>-->
                            				<!--		<a href="">Menu item 113</a>-->
                            				<!--	</li>-->
                            				<!--</ul>-->
                            			</li>
                			@endforeach
                		</ul>
                		@endif
                	</li>
                	@endforeach
                  
                </ul>
            </nav>
        </div>
</div>


<div class="slideshow slick-initialized slick-slider slick-dotted" data-auto-video="true" data-init-slideshow="" data-arrows="true" data-dots="true" data-autoplay="true" data-autoplay-speed="5000" data-fade="true">
<?php $sliders=DB::table('medias')->where('link_id','slider')->orderBy('id','desc')->limit(12)->latest()->get();?>
@if($sliders)
    <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #000;
  font-size: 15px;
  padding: 8px 12px;
  width: 100%;
  text-align: left;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #000;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<div class="slideshow-container">
    @foreach($sliders as $slider)
    <a @if($slider->link!='') href="{{$slider->link}}"  @else href="#" @endif>
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="{{URL::to('/')}}/application/storage/app/{{$slider->source}}" style="width:100%;">
          <div class="text"></div>
        </div>
    </a>
    @endforeach
    <!--<div class="mySlides fade">-->
    <!--  <div class="numbertext">2 / 3</div>-->
    <!--  <img src="img_snow_wide.jpg" style="width:100%">-->
    <!--  <div class="text"></div>-->
    <!--</div>-->
    
    <!--<div class="mySlides fade">-->
    <!--  <div class="numbertext">3 / 3</div>-->
    <!--  <img src="img_mountains_wide.jpg" style="width:100%">-->
    <!--  <div class="text"></div>-->
    <!--</div>-->
    
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
    
</div>
    
    <!--<div style="text-align:center">-->
    <!--  <span class="dot" onclick="currentSlide(1)"></span> -->
    <!--  <span class="dot" onclick="currentSlide(2)"></span> -->
    <!--  <span class="dot" onclick="currentSlide(3)"></span> -->
    <!--</div>-->
    
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    </script>
@endif
</div>
                            
                            
                            <div class="block-banner-slider">
                                <?php $banner1s=\DB::table('medias')->where('link_id','banner1')->limit('4')->orderBy('sort','asc')->latest()->get();?>
                                    @if($banner1s)
                                        @foreach($banner1s as $banner1)
                                        <div class="banner" data-animate="none"><a @if($banner1->link!='') href="{{$banner1->link}}"  @else href="#" @endif class="adaptive_height" style="padding-top: 100.4%">
                                        <img data-srcset="{{URL::to('/')}}/application/storage/app/{{$banner1->source}}" alt="" width="250" height="251.0" src="{{URL::to('/')}}/application/storage/app/{{$banner1->source}}">
                                        </a></div>
                                        @endforeach
                                    @endif
                                    <!--<div class="banner" data-animate="none"><a href="https://new-ella-demo.myshopify.com/collections/home-19-collection-featured-products" class="adaptive_height" style="padding-top: 100.4%">-->
                                    <!--<img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/files/Home-20-slider-banner-2.png?v=1646290417" alt="" width="250" height="251.0" class=" lazyloaded" loading="lazy" srcset="//new-ella-demo.myshopify.com/cdn/shop/files/Home-20-slider-banner-2.png?v=1646290417">-->
                                    <!--<span class="data-lazy-loading"></span></a></div><div class="banner" data-animate="none"><a href="https://new-ella-demo.myshopify.com/collections/home-19-collection-featured-products" class="adaptive_height" style="padding-top: 100.4%">-->
                                    <!--<img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/files/Home-20-slider-banner-3.png?v=1646290427" alt="" width="250" height="251.0" class=" lazyloaded" loading="lazy" srcset="//new-ella-demo.myshopify.com/cdn/shop/files/Home-20-slider-banner-3.png?v=1646290427">-->
                                    <!--<span class="data-lazy-loading"></span></a></div><div class="banner" data-animate="none"><a href="https://new-ella-demo.myshopify.com/collections/home-19-collection-featured-products" class="adaptive_height" style="padding-top: 100.4%">-->
                                    <!--<img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/files/Home-20-slider-banner-4.png?v=1646290450" alt="" width="250" height="251.0" class=" lazyloaded" loading="lazy" srcset="//new-ella-demo.myshopify.com/cdn/shop/files/Home-20-slider-banner-4.png?v=1646290450">-->
                                    <!--<span class="data-lazy-loading"></span></a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div></div>
                    </div>

    <style>@media (min-width: 1366px) {}
        @media (min-width: 1200px) {
            .section-block-template--14613100560474__16426738253c0b77ec {padding-top: 0px;padding-bottom: 30px}
            .section-block-template--14613100560474__16426738253c0b77ec .slideshow .slick-dots {bottom: 15px}
        }
        @media (min-width: 1025px) {.section-block-template--14613100560474__16426738253c0b77ec .slick-arrow:hover {color: #ffffff;border-color: #fd6506;background-color: #fd6506}}
        @media (min-width: 768px) and (max-width: 1199px) {
            .section-block-template--14613100560474__16426738253c0b77ec {padding-top: 0px;padding-bottom: 30px}
        }
        @media (max-width: 767px) {
            .section-block-template--14613100560474__16426738253c0b77ec {padding-top: 0px;padding-bottom: 30px}
        }.section-block-template--14613100560474__16426738253c0b77ec {background: #f5f5f5}.section-block-template--14613100560474__16426738253c0b77ec .fluid-width-video-wrapper {padding-top: 41.7% !important}
        .section-block-template--14613100560474__16426738253c0b77ec .block-categories-slider li a {color: #202020}
        .section-block-template--14613100560474__16426738253c0b77ec .block-categories-slider .title {color: #ffffff;border-bottom: 2px solid #fd6506}
        .section-block-template--14613100560474__16426738253c0b77ec .block-categories-slider .title span {background-color: #fd6506}@media (min-width: 768px) {}
    </style>
</div><div id="shopify-section-template--14613100560474__164636539504358b23" class="shopify-section sections-image-banner-block"><style type="text/css" media="screen">#halo-image-banner-template--14613100560474__164636539504358b23 .halo-block-header .title:before {background-color: var(--color_title)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .halo-block-header .title--no-border:before{display: none}
        #halo-image-banner-template--14613100560474__164636539504358b23 .halo-block-header .title {color: var(--color_title);font-size: var(--fontsize_title);margin-top: 2px;margin-bottom: var(--margin_bottom_title); line-height: var(--line_height_title)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .halo-block-header .rte {color: var(--color_des);font-size: var(--fontsize_des)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .slick-next {right: var(--arrows_position) !important}
        #halo-image-banner-template--14613100560474__164636539504358b23 .slick-prev {left: var(--arrows_position) !important}
        #halo-image-banner-template--14613100560474__164636539504358b23 {margin-bottom: var(--section_margin)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-heading {font-size: var(--heading_font_size);color: var(--heading_color);font-weight: var(--heading_font_weight);letter-spacing: var(--letter_spacing_heading);line-height: var(--heading_line_height) !important}
        #halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .banner-heading{margin-bottom: var(--margin_bottom_heading)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .border--border_s1 .banner-heading {padding-bottom: 18px;margin-bottom: 18px}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-sub-title {color: var(--color_sub_title);margin-top: 0;font-weight: var(--font_weight_sub_title);letter-spacing:var(--letter_spacing_sub_title);margin-bottom: var(--margin_bottom_sub_title);font-family:var(--font-tab-type)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-sub-title--border span {border-bottom: 1px solid var(--color_sub_title)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .item .banner-text{color: var(--des_color);line-height: var(--line_height_des);margin-bottom: var(--margin_bottom_des)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .banner-content,#halo-image-banner-template--14613100560474__164636539504358b23 .item--customImg .banner-content {background: var(--content_bg_color)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .item--customImg .banner-content,#halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .banner-content {border:  1px solid var(--content_border_color)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .item--largeImg .btn-scroll-down {color: var(--btn-scroll_color)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .item--specialImg .banner-btn--style2{background: none;border: none;padding-left: 0;padding-right: 0;display: inline-block;width: auto;min-width: unset}
        #halo-image-banner-template--14613100560474__164636539504358b23 .item--specialImg .banner-btn--style2 span{background-image: linear-gradient(transparent 97%, var(--button_border) 3%);background-repeat: repeat-x;background-position-y: 0}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-button{color: var(--button_color);background: var(--button_bg);border-color: var(--button_border);width: var(--button_width)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-button svg {fill: var(--button_color)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .flex-box__banner .content-box__divider {height: 240px;width: 1px;min-width: 1px; background: var(--divider_bg_color);display: block;transform: translateY(var(--smallImg_divider_center_pos))}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-content--style_2 .small_img_button_2{margin-top: var(--smallImg_btn_2_spacing_top)}         
        #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute {width: var(--content_width)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half {position: relative;top: 0;left: 0;right: 0;bottom: 0;z-index: 2;transform: translate(0);padding: 25px 25px 30px}
        #halo-image-banner-template--14613100560474__164636539504358b23 .flex-box__banner .content-box {max-width: var(--content_width)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .flex-box__banner .content-box__col-1 {margin-right: var(--content_spacing_right);margin-bottom: 0;max-width: var(--content_width);transform: translateY(var(--smallImg_text_center_pos))}
        .layout_rtl #halo-image-banner-template--14613100560474__164636539504358b23 .flex-box__banner .content-box__col-1 {margin-left: var(--content_spacing_right);margin-right: auto}
        #halo-image-banner-template--14613100560474__164636539504358b23 .flex-box__banner .content-box__col-2 {margin-left: var(--button_spacing_left);transform: translateY(var(--smallImg_btn_center_pos))}
        .layout_rtl #halo-image-banner-template--14613100560474__164636539504358b23 .flex-box__banner .content-box__col-2 {margin-right: var(--button_spacing_left);margin-left: auto}
        #halo-image-banner-template--14613100560474__164636539504358b23 .flex-box__banner .sub-title-icon img {margin-right: auto;margin-left: auto;margin-bottom: var(--mg-bottom-icon-style)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-item.slick-initialized {z-index: 2}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-item--maxWidth{max-width: var(--custom_width_image); margin: 0 auto}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-button--custom-border{overflow: unset; transform: none !important}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-button--custom-border:after{content: "";position: absolute;top: 6px;left: 6px;width: 100%;height: 100%;border: 1px solid var(--button_border);z-index: -1}
        #halo-image-banner-template--14613100560474__164636539504358b23 .banner-button:hover:after{border: 1px solid var(--button_border_hover)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .video-open-popup .video-button {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);z-index: 2;line-height: 0;padding: 10px 20px;border-radius: 5px;background: var(--bg_color);color: var(--color);border: none}
        #halo-image-banner-template--14613100560474__164636539504358b23 .video-open-popup--ct-pos .video-button {top: var(--top);left: var(--left)}       
        #halo-image-banner-template--14613100560474__164636539504358b23 .video-open-popup--icon-st2 .video-button {padding: 0}
        #halo-image-banner-template--14613100560474__164636539504358b23 .video-open-popup svg {width: 85px;height: 85px;fill: currentColor;stroke: currentColor}
        #halo-image-banner-template--14613100560474__164636539504358b23 .video-open-popup--icon-st2 svg {width: 96px;height: 96px}
        #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st3 .flex-box__banner::after {content: "";position: absolute;top: 0;right: 0;width: 57.5%;height: 116%;background-color: var(--content_bg_color)}
        .layout_rtl #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st3 .flex-box__banner::after {right: auto;left: 0}
        #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st3 .flex-box__banner.row-reverse::after {left: 0}
        #halo-image-banner-template--14613100560474__164636539504358b23 .slick-dotted .item {margin-bottom: 22px}       
        #halo-image-banner-template--14613100560474__164636539504358b23 .is-slide > .slick-dots {bottom: -22px}
        #halo-image-banner-template--14613100560474__164636539504358b23 .countdown-box .banner-title {font-size:var(--title_font_size);font-weight: var(--title_font_weight);color: var(--title_color);margin-top:  0;margin-bottom: var(--mg_bottom_title)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .countdown-box .des-countdown {font-size: var(--des_countdown_font_size);font-weight: var(--des_countdown_font_weight);color: var(--text_color);margin-bottom: var(--mg_bottom_des)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .collection-countdown .clock-item {border-color: var(--border_countdown_color);background: var(--countdown_background);border-radius: var(--item_countdown_radius);margin-left: var(--item_countdown_gap);margin-right: var(--item_countdown_gap);width: var(--item_countdown_width);height: var(--item_countdown_height)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .collection-countdown .clock-item .num {font-size: var(--num_font_size);font-weight: var(--num_font_weight);color: var(--num_color)}
        #halo-image-banner-template--14613100560474__164636539504358b23 .collection-countdown .clock-item .text {font-size: var(--text_time_font_size);font-weight: var(--text_time_font_weight);color: var(--text_time_color)}
        @media (min-width: 551px){
            #halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .flex-box__banner {display: block}
            #halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .banner-item,
            #halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .banner-content {width: 100%}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-button:first-child {margin-right: 0}
        }
        @media (min-width: 768px){
            #halo-image-banner-template--14613100560474__164636539504358b23 .border--border_s1 .banner-heading:before {background-color: var(--border-color-title-style)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .flex-box__banner {display:  flex}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--customImg .flex-box__banner,#halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .flex-box__banner {align-items: stretch}
        }
        @media (min-width: 992px) {
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box .banner-action--style_4 .small_img_button_2 {margin-left: var(--smallImg_btn_2_spacing_top)}
            .layout_rtl #halo-image-banner-template--14613100560474__164636539504358b23 .content-box .banner-action--style_4 .small_img_button_2 {margin-right: var(--smallImg_btn_2_spacing_top);margin-left: 0}
        }
        @media (min-width: 551px) and (max-width: 1024px) {
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st2 .banner-item, 
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st2 .banner-content {width: 100%}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st2 .content-box {flex-direction: row;gap: 25px}
        }
        @media (min-width: 768px) and (max-width: 1199px) {#halo-image-banner-template--14613100560474__164636539504358b23{padding-top: var(--mg_top_tablet);padding-bottom: var(--mg_bottom_tablet)}}
        @media (min-width: 1025px) {
            #halo-image-banner-template--14613100560474__164636539504358b23 .container-full {padding-left: var(--padding_full_width);padding-right: var(--padding_full_width)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-heading{margin-bottom: var(--margin_bottom_heading)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-sub-title {font-size: var(--font_size_sub_title)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item .banner-text {font-size: var(--des_font_size)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-button:hover{color: var(--button_color_hover);background: var(--button_bg_hover);border-color: var(--button_border_hover)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-button:hover svg {fill: var(--button_color_hover)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--customImg + .item--customImg {margin-top: 0}
            #halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .banner-content {width: calc(100% - var(--width_banner) - 15px)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .banner-item {width: calc(var(--width_banner) - 15px)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half {margin-left: 135px;margin-top: -210px}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half .banner-heading {margin-bottom: 115px}
        }
        @media (min-width: 1200px) {#halo-image-banner-template--14613100560474__164636539504358b23{padding-top: var(--mg_top_desktop);padding-bottom: var(--mg_bottom_desktop)}}
        @media (max-width: 1366px) {
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box__col-1 {margin-right: 30px}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box__col-2 {margin-left: 30px}
        }
        @media (max-width: 1199px) {
            #halo-image-banner-template--14613100560474__164636539504358b23 .column-2 .item--customImg {width: 100%}
            #halo-image-banner-template--14613100560474__164636539504358b23 .column-2 .type-item--custom-2 {margin-top: 30px}
        }
        @media (max-width: 1024px) {
            #halo-image-banner-template--14613100560474__164636539504358b23 .video-open-popup--ct-pos .video-button {top: var(--top-mb);left: var(--left-mb)}   
            #halo-image-banner-template--14613100560474__164636539504358b23 .video-open-popup svg, #halo-image-banner-template--14613100560474__164636539504358b23 .video-open-popup--icon-st2 svg {width: 44px;height: 44px}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box__col-1--left,#halo-image-banner-template--14613100560474__164636539504358b23 .content-box__col-2--left {margin-right: auto}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box__col-1--right, #halo-image-banner-template--14613100560474__164636539504358b23 .content-box__col-1--right { margin-left: auto}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box__col-1--center, #halo-image-banner-template--14613100560474__164636539504358b23 .content-box__col-1--center { margin-right: auto;margin-left: auto}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st3 .flex-box__banner::after {display: none}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st4 .banner-button {min-width: 140px}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half .banner-sub-title{color: var(--color_sub_title_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half .banner-sub-title--border span {border-bottom: 1px solid var(--color_sub_title_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half .banner-heading{color: var(--heading_color_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half .banner-text{color: var(--des_color_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half .countdown-block {color: var(--color-countdown-mb-style)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half .clock-item,
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half .shape-square .clock-item,
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box--absolute-half .shape-square .clock-item:first-of-type {border-color: var(--color-countdown-mb-style)}
        }
        @media (max-width: 991px){
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st2 .flex-box__banner {flex-direction: column}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-action--style_4 .small_img_button_2 {margin-top: var(--smallImg_btn_2_spacing_top)}
        }
        @media (max-width: 767px){
            #halo-image-banner-template--14613100560474__164636539504358b23{padding-top: var(--mg_top_mobile);padding-bottom: var(--mg_bottom_mobile)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .halo-block-header .title {font-size: var(--fontsize_title_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-heading {font-size: var(--heading_font_size_mb);line-height: var(--heading_line_height_mb) !important; padding-bottom: 0}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--largeImg .banner-heading {color: var(--heading_color_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-heading--sub_tl_below {padding-bottom: 0}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--largeImg_border_s1 .banner-heading:before {background-color: var(--border-color-title-mobile-style)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-sub-title{font-size: var(--font_size_sub_title_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--largeImg .banner-sub-title {color: var(--color_sub_title_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item .banner-text{font-size: var(--des_font_size_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--largeImg .banner-text {color: var(--des_color_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .flex-box__banner .content-box__divider {display: none}
            #halo-image-banner-template--14613100560474__164636539504358b23 .type-item--special .banner-content {border: 1px solid var(--border_color);margin-top: 30px}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--customImg .banner-item,
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--customImg .banner-content {width: 100%}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--customImg .flex-box__banner .banner-content{margin-top: 0}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--customImg .flex-box__banner .banner-content--border {margin-top: 15px}
            #halo-image-banner-template--14613100560474__164636539504358b23 .banner-sub-title--border span {border-bottom: 1px solid var(--color_sub_title_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .countdown-box .banner-title {font-size: var(--title_font_size_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .countdown-box .des-countdown {font-size: var(--des_font_size_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--specialImg .collection-countdown .clock-item .num {font-size: var(--num_font_size_mb)}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--specialImg .collection-countdown .clock-item .text {font-size: var(--text_time_font_size_mb)}
        }
        @media (max-width: 550px){
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st2 .content-box {flex-direction: column;padding-right: 15px;padding-left: 15px;margin: 0 auto}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box .content-box__col-1 {max-width: 100%;margin-right: 0}
            .layout_rtl #halo-image-banner-template--14613100560474__164636539504358b23 .content-box .content-box__col-1 {margin-right: 0}
            #halo-image-banner-template--14613100560474__164636539504358b23 .content-box .content-box__col-2 {margin-left: 0px;transform: translateY(0)}
            .layout_rtl #halo-image-banner-template--14613100560474__164636539504358b23 .content-box .content-box__col-2 {margin-left: auto; margin-right: 12px}
            #halo-image-banner-template--14613100560474__164636539504358b23 .item--smallImg-st4 .banner-button {min-width: 146px;max-width: 100%;display: inline-block}
        }</style>
        
        <!--MEDIA QUERY HELLO BLOCK-->
        <style>
        @media only screen and (max-width: 1441px) {
            .hello_block{
                /*width: 100%!important;*/
                margin-right: 5% !important;
                margin-left: 5% !important;
            }
        }
        @media only screen and (max-width: 426px) {
            .hello_block{
                /*width: 100%!important;*/
                margin-right: 0% !important;
                margin-left: 0% !important;
            }
        }
        </style>

    <div class="halo-block halo-banner image-banner style_bg--full is-load" id="halo-image-banner-template--14613100560474__164636539504358b23" style="--section_margin: 0px;--mg_top_desktop: 20px;--mg_top_tablet:10px;--mg_top_mobile: 5px;--mg_bottom_desktop:35px;--mg_bottom_tablet:35px;--mg_bottom_mobile:15px;--padding_full_width:0px;--bg-color-style: #f5f5f5" data-loader-script="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/halo.image-banner-slide.js?v=123854488726055376771667970356">
        <div class="container"><div class="halo-block-content" style="--arrows_position: ">
                <div class="halo-banner-wrapper slideshow is-slide"><div><div class="item item--largeImg image-banner-item-164636539540111392-0 border--border_s1 item--largeImg_border_s1" data-animate="none">
<div class="hello_block banner-item banner-item--maxWith" style="--custom_width_image: 1170px">
    <div class="img-box img-box--mobile">
        <?php $banner2=DB::table('medias')->where('link_id','banner2')->orderBy('id','desc')->first();?>
        <a @if($banner2->link!='') href="{{$banner2->link}}"  @else href="#" @endif class="image image-adapt adaptive_height" role="link" aria-disabled="true" style="padding-top: 12.051282051282053%" title="new-ella-demo">
        <img src="{{URL::to('/')}}/application/storage/app/{{$banner2->source}}" alt=""  height="141" loading="lazy" class=" ls-is-cached lazyloaded" sizes="100vw">
<span class="data-lazy-loading"></span></a>
</div></div></div></div></div>
            </div>
        </div>
    </div></div>
    
<div style="background:#f5f5f5!important; margin-top:-21px;">
    <link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-custom-service-block.css" media="all" onload="this.media=&#39;all&#39;">
<noscript>
<link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-custom-service-block.css?v=177873360551507631191673427939" rel="stylesheet" type="text/css" media="all" /></noscript><style>.section-block-template--14613100560474__1645414190d258de24{background: url(//new-ella-demo.myshopify.com/cdn/shop/files/home-20-custom-service_1920x_31e1114f-3e89-4c6b-b893-c241242d54db_1920x.jpg?v=1646210680);background-repeat: repeat-x;background-size: cover}.section-block-template--14613100560474__1645414190d258de24 .halo-block-header .title .text {background-color: transparent}.section-block-template--14613100560474__1645414190d258de24 .policies-block-wrapper{position:  relative}
    .section-block-template--14613100560474__1645414190d258de24 .slider-button .icon{fill: #212121}
    .section-block-template--14613100560474__1645414190d258de24 .slider-button--prev .icon {margin-top: 2px}
    .section-block-template--14613100560474__1645414190d258de24 {}
    .section-block-template--14613100560474__1645414190d258de24 .halo-item + .halo-item {}
    body.layout_rtl .section-block-template--14613100560474__1645414190d258de24 .halo-item + .halo-item {}.section-block-template--14613100560474__1645414190d258de24 .halo-block-header .title:before {background-color: #ffffff;display: none;}
    .section-block-template--14613100560474__1645414190d258de24 .halo-block-header .title {color: #ffffff;font-size: 30px;margin-bottom: 50px
}.section-block-template--14613100560474__1645414190d258de24 .halo-block-header{margin-bottom: 0}.section-block-template--14613100560474__1645414190d258de24 .halo-block-header .rte {color: #ffffff;font-size: 16px}
    .section-block-template--14613100560474__1645414190d258de24 .rte {color: #ffffff;font-size: 16px;margin-top: 40px;margin-bottom: 0px}@media (max-width: 1024px) {.section-block-template--14613100560474__1645414190d258de24{background-position: center top}.section-block-template--14613100560474__1645414190d258de24 .halo-item + .halo-item:before {content: none}}
    @media (max-width: 767px) {
        .section-block-template--14613100560474__1645414190d258de24 {padding-top: 35px;padding-bottom: 40px;}
        .section-block-template--14613100560474__1645414190d258de24 .halo-block-header .title {font-size: 22px;margin-bottom: 25px}.section-block-template--14613100560474__1645414190d258de24 .halo-block-header .title {margin-bottom: 25px}}
    @media (min-width: 1200px) {
        .section-block-template--14613100560474__1645414190d258de24 {padding-top: 65px;padding-bottom: 55px;}.section-block-template--14613100560474__1645414190d258de24 .halo-item a:hover{box-shadow: 0 0 14px rgb(33 33 33 / 20%)}}
    @media (min-width: 1025px) {.section-block-template--14613100560474__1645414190d258de24 .halo-block-header .title .text {width: auto}}
    @media (min-width: 768px) and (max-width: 1199px) {
        .section-block-template--14613100560474__1645414190d258de24 {padding-top: 35px;padding-bottom: 35px;}
    }
</style>



<!--STYLE FOR WHY CHOOSE US-->
<style>
.circle1 {
  background-color: #E7EDEC; 
  color: #bd1616; 
}
.circle2 {
  background-color: #E7EDEC; 
  color: #bd1616; 
}
.circle3 {
  background-color: #E7EDEC; 
  color: #bd1616; 
}
.circle4 {
  background-color: #E7EDEC; 
  color: #bd1616; 
}
/*.circle:hover {*/
/*  background-color: #f44336;*/
/*  color: white;*/
/*}*/
.mytitle1:hover .circle1{
    background-color: #bd1616;
    color: #fff;
}
.mytitle2:hover .circle2{
    background-color: #bd1616;
    color: #fff;
}
.mytitle3:hover .circle3{
    background-color: #bd1616;
    color: #fff;
}
.mytitle4:hover .circle4{
    background-color: #bd1616;
    color: #fff;
}
</style>

<!--MEDIA QUERY USE FOR "WHY CHOOSE US"-->
<style>
@media only screen and (max-width: 1025px) {
  .highest_quality{
    width: 100%!important;
  }
  .customer_supports{
    width: 100%!important;
  }
  .delivery{
    width: 100%!important;
  }
  .easy_return{
    width: 100%!important;
    <!--width: 50% !important;-->
  }
}

@media only screen and (max-width: 1441px) {
    .why_choose_us{
        margin-right: 5% !important;
        margin-left: 5% !important;
    }
}

@media only screen and (max-width: 426px) {
    .why_choose_us{
        margin-right: 0% !important;
        margin-left: 0% !important;
    }
}
</style>

<?php $settings=App\Settings::where('id',1)->first();?>

<div class="why_choose_us"><div class="container" style="width:100%; height:350px;">
    <h1 style="margin:20px auto!important; text-align:center;">
        <span class="text" style="font-family:scratchones !important; font-size:30px;">Why choose us?</span>
    </h1>
    <div class="highest_quality" style="width: 23%; float: left; margin-right:20px; height:150px;"   class="mytitle1">
        <table border="0">
            <tr>
                <td style="vertical-align: baseline;">
                    <div class="circle1" style=" float: left; margin-right:20px; height: 80px; width: 80px; border-radius: 50%; display: inline-block; text-align: center; padding-top:25px; font-size:25px;">
                        <i class="fa fa-star"></i>
                    </div>
                </td>
                <td>
                    <p style="color:maroon;  font-size: 16px; font-weight: bold; cursor:pointer;">HIGHEST QUALITY</p>
                    <p>{!!$settings->paragraph!!}</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="customer_supports" style="width: 23%; float: left; margin-right:20px; height:150px;" class="mytitle2">
        <table border="0">
            <tr>
                <td style="vertical-align: baseline;">
                    <div class="circle2" style="float: left; margin-right:20px; height: 80px; width: 80px; border-radius: 50%; display: inline-block; text-align: center; padding-top:25px; font-size:25px;">
                        <i class="fa fa-phone"></i>
                    </div>
                </td>
                <td >
                    <p  style="color:maroon;  font-size: 16px; font-weight: bold; cursor:pointer;">CUSTOMER SUPPORT</p>
                    <p>{!!$settings->paragraph2!!}</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="delivery" style="width: 23%; float: left; margin-right:20px; height:150px;" class="mytitle3">
        <table border="0">
            <tr>
                <td style="vertical-align: baseline;">
                    <div class="circle3" style="float: left; margin-right:20px; height: 80px; width: 80px; border-radius: 50%; display: inline-block; text-align: center; padding-top:25px; font-size:25px;">
                        <i class="fa fa-truck"></i>
                    </div>
                </td>
                <td >
                    <p  style="color:maroon;  font-size: 16px; font-weight: bold; cursor:pointer;">DELIVERY</p>
                    <p>{!!$settings->paragraph3!!}</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="easy_return" class="whyChooseUs" style="width: 23%; float: left; margin-right:20px; margin-bottom: 50px; height:150px;" class="mytitle4">
        <table border="0">
            <tr>
                <td style="vertical-align: baseline;">
                    <div class="circle4" style="float: left; margin-right:20px; height: 80px; width: 80px; border-radius: 50%; display: inline-block; text-align: center; padding-top:25px; font-size:25px;">
                        <i class="fa fa-refresh"></i>
                    </div>
                </td>
                <td >
                    <p  style="color:maroon; font-size: 16px; font-weight: bold; cursor:pointer;">EASY RETURN & REFUND</p>
                    <p>{!!$settings->paragraph4!!}</p>
                </td>
            </tr>
        </table>
    </div>
</div></div>

<!--<div class="custom-service-block section-block-template--14613100560474__1645414190d258de24" style="--grid-gap: 7.5px">-->
<!--    <div class="container"><div class="bg-policies-block"><div class="halo-block-header text-center">   -->
<!--                        <h1 class="title"><span class="text" style="font-family:scratchones !important">Why choose us?</span></h1></div>-->


<!--<banner-slider-component>-->
<!--                    <div class="policies-block-wrapper"><div class="halo-row column-5 items--full_width slider slider--tablet"><div class="halo-item slider__slide has-des first-item" data-animate="none">-->
<!--                                <a role="link" aria-disabled="true" title="QUALITY AND SAVING" style="--item-radius-style: 6px;--item-padding-top-style: 70px;--item-padding-bottom-style: 62px;--item-padding-left-right-style: 22px;--bg-color-block-style: #ffffff;--border-block-style: #ffffff;--width-icon-style: 55px;--height-icon-style: 55px"><div class="policies-icon" style="--mg-bottom-icon-style: 28px; --color-icon-style: #3c3c3c"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512" class="svg-inline--fa fa-star-half-alt fa-w-17 fa-3x"><path fill="#fd6506" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z" class=""></path></svg></div><div class="policies-content"><span class="policies-text type--font_2" style="--fontsize-title-style: 16px;--mg-bottom-title-style: 10px;--mg-bottom-title-mb-style: 0px;--fontsize-title-style-mb: 16px;--fontweight-title-style: 700;--color-block-style: #202020">QUALITY AND SAVING</span><p class="policies-des" style="--fontsize-desc-style: 14px;--fontsize-desc-mb-style: 14px;--lineheight-desc-style: 22px;--color-des-block-style: #202020;--mg_bottom_des-style: 0px">Comprehensive quality control and affordable prices</p></div></a>-->
<!--                            </div><div class="halo-item slider__slide has-des" data-animate="none">-->
<!--                                <a role="link" aria-disabled="true" title="GLOBAL WAREHOUSE" style="--item-radius-style: 6px;--item-padding-top-style: 70px;--item-padding-bottom-style: 62px;--item-padding-left-right-style: 22px;--bg-color-block-style: #ffffff;--border-block-style: #ffffff;--width-icon-style: 64px;--height-icon-style: 55px"><div class="policies-icon" style="--mg-bottom-icon-style: 28px; --color-icon-style: #3c3c3c"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="warehouse" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-warehouse fa-w-20 fa-3x"><path fill="#fd6506" d="M504 352H136.4c-4.4 0-8 3.6-8 8l-.1 48c0 4.4 3.6 8 8 8H504c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm0 96H136.1c-4.4 0-8 3.6-8 8l-.1 48c0 4.4 3.6 8 8 8h368c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm0-192H136.6c-4.4 0-8 3.6-8 8l-.1 48c0 4.4 3.6 8 8 8H504c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm106.5-139L338.4 3.7a48.15 48.15 0 0 0-36.9 0L29.5 117C11.7 124.5 0 141.9 0 161.3V504c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8V256c0-17.6 14.6-32 32.6-32h382.8c18 0 32.6 14.4 32.6 32v248c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8V161.3c0-19.4-11.7-36.8-29.5-44.3z" class=""></path></svg></div><div class="policies-content"><span class="policies-text type--font_2" style="--fontsize-title-style: 16px;--mg-bottom-title-style: 10px;--mg-bottom-title-mb-style: 0px;--fontsize-title-style-mb: 16px;--fontweight-title-style: 700;--color-block-style: #202020">GLOBAL WAREHOUSE</span><p class="policies-des" style="--fontsize-desc-style: 14px;--fontsize-desc-mb-style: 14px;--lineheight-desc-style: 22px;--color-des-block-style: #202020;--mg_bottom_des-style: 0px">37 overseas warehouses</p></div></a>-->
<!--                            </div><div class="halo-item slider__slide has-des" data-animate="none">-->
<!--                                <a role="link" aria-disabled="true" title="FAST SHIPPING" style="--item-radius-style: 6px;--item-padding-top-style: 70px;--item-padding-bottom-style: 62px;--item-padding-left-right-style: 22px;--bg-color-block-style: #ffffff;--border-block-style: #ffffff;--width-icon-style: 64px;--height-icon-style: 55px"><div class="policies-icon" style="--mg-bottom-icon-style: 28px; --color-icon-style: #3c3c3c"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-shipping-fast fa-w-20 fa-3x"><path fill="#fd6506" d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z" class=""></path></svg></div><div class="policies-content"><span class="policies-text type--font_2" style="--fontsize-title-style: 16px;--mg-bottom-title-style: 10px;--mg-bottom-title-mb-style: 0px;--fontsize-title-style-mb: 16px;--fontweight-title-style: 700;--color-block-style: #202020">FAST SHIPPING</span><p class="policies-des" style="--fontsize-desc-style: 14px;--fontsize-desc-mb-style: 14px;--lineheight-desc-style: 22px;--color-des-block-style: #202020;--mg_bottom_des-style: 0px">Fast and convenient door to door delivery</p></div></a>-->
<!--                            </div><div class="halo-item slider__slide has-des" data-animate="none">-->
<!--                                <a role="link" aria-disabled="true" title="PAYMENT SECURITY" style="--item-radius-style: 6px;--item-padding-top-style: 70px;--item-padding-bottom-style: 62px;--item-padding-left-right-style: 22px;--bg-color-block-style: #ffffff;--border-block-style: #ffffff;--width-icon-style: 64px;--height-icon-style: 55px"><div class="policies-icon" style="--mg-bottom-icon-style: 28px; --color-icon-style: #3c3c3c"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shield-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-shield-alt fa-w-16 fa-3x"><path fill="#fd6506" d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z" class=""></path></svg></div><div class="policies-content"><span class="policies-text type--font_2" style="--fontsize-title-style: 16px;--mg-bottom-title-style: 10px;--mg-bottom-title-mb-style: 0px;--fontsize-title-style-mb: 16px;--fontweight-title-style: 700;--color-block-style: #202020">PAYMENT SECURITY</span><p class="policies-des" style="--fontsize-desc-style: 14px;--fontsize-desc-mb-style: 14px;--lineheight-desc-style: 22px;--color-des-block-style: #202020;--mg_bottom_des-style: 0px">More than 10 different secure payment methods</p></div></a>-->
<!--                            </div><div class="halo-item slider__slide has-des last-item" data-animate="none">-->
<!--                                <a role="link" aria-disabled="true" title="HAVE QUESTIONS?" style="--item-radius-style: 6px;--item-padding-top-style: 70px;--item-padding-bottom-style: 62px;--item-padding-left-right-style: 22px;--bg-color-block-style: #ffffff;--border-block-style: #ffffff;--width-icon-style: 55px;--height-icon-style: 55px"><div class="policies-icon" style="--mg-bottom-icon-style: 28px; --color-icon-style: #3c3c3c"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-question-circle fa-w-16 fa-3x"><path fill="#fd6506" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z" class=""></path></svg></div><div class="policies-content"><span class="policies-text type--font_2" style="--fontsize-title-style: 16px;--mg-bottom-title-style: 15px;--mg-bottom-title-mb-style: 0px;--fontsize-title-style-mb: 16px;--fontweight-title-style: 700;--color-block-style: #202020">HAVE QUESTIONS?</span><p class="policies-des" style="--fontsize-desc-style: 14px;--fontsize-desc-mb-style: 14px;--lineheight-desc-style: 22px;--color-des-block-style: #202020;--mg_bottom_des-style: 0px">24/7 Customer Service - We’re here and happy to help!</p></div></a>-->
<!--                            </div></div><div class="slider-buttons no-js-hidden slider-arrows">-->
<!--                                <div class="slider-action ">-->
<!--                                    <button type="button" class="slider-button slider-button--prev disabled" name="previous" aria-label="Slide left"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"></path></svg>-->
<!--</button>-->
<!--                                    <button type="button" class="slider-button slider-button--next disabled" name="next" aria-label="Slide right"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"></path></svg>-->
<!--</button>-->
<!--                                </div>-->
<!--                            </div></div>-->
<!--                </banner-slider-component>-->
                
                
                
                
<!--    <div class="rte subtext-spotlight text-center"><div class="des des-bottom text-center">-->
<!--              <span style="display: block;">Vivamus dapibus odio metus, ac scelerisque urna condimentum id. </span>-->
<!--    <a href="https://new-ella-demo.myshopify.com/?fts=0#" style="display: inline-block; color: #fdc525; border-bottom: 1px solid #809f91; line-height: 16px;    font-weight: bold;">Start your order now</a>-->
<!--            </div></div></div></div>-->
<!--    </div>-->
<!--</div>-->
    
    <div id="shopify-section-template--14613100560474__16466243910f5ecac0" class="shopify-section sections-brand-slider"><style type="text/css">.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header 
    .title .text {background: #f5f5f5
}.section-block-template--14613100560474__16466243910f5ecac0 {background: #f5f5f5;}.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .title:before {display: none} .section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header 
.title {background: transparent}.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header{margin-bottom: 0}.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .title {color: #232323;font-size: 20px;}
    .section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header > .title { margin-bottom: 25px}
    .section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .rte {color: #3c3c3c;font-size: 16px;margin-bottom: 0px}
    .section-block-template--14613100560474__16466243910f5ecac0 .halo-item .text b{display: inherit;position: relative;top: 3px;margin-top: 26px} .section-block-template--14613100560474__16466243910f5ecac0 .halo-item .text br{display: none} .section-block-template--14613100560474__16466243910f5ecac0 .brand-slider-btn {text-align: center} .section-block-template--14613100560474__16466243910f5ecac0 .brand-slider-btn .brand-btn {display: inline-block;color: #828282;font-size: 12px;margin-top: 15px}.section-block-template--14613100560474__16466243910f5ecac0 .view_all {font-weight: var(--font-weight-view-all-style);margin-bottom: var(--mg-bottom-view-style);color: var(--color-view-all-style);font-size: var(--font-size-view-all-style);border-bottom: none;line-height: 1.2;max-width: 80px}
    .section-block-template--14613100560474__16466243910f5ecac0 .view_all--border {text-decoration: underline;text-underline-offset: 3px}
    .section-block-template--14613100560474__16466243910f5ecac0 .view_all .icon-svg {color: var(--color-view-all-icon-style)}
    .section-block-template--14613100560474__16466243910f5ecac0 .view_all .icon-svg svg {fill: var(--color-view-all-icon-style)}.section-block-template--14613100560474__16466243910f5ecac0 .slick-arrow {border-color: ;background: }
    .section-block-template--14613100560474__16466243910f5ecac0 .slick-arrow svg {color: ;fill: }
    .section-block-template--14613100560474__16466243910f5ecac0 .halo-item .wrapper-image,.section-block-template--14613100560474__16466243910f5ecac0 .halo-item .not_img {margin-bottom: 0px !important;background: #f5f5f5}
    .section-block-template--14613100560474__16466243910f5ecac0 .wrapper-image img, .section-block-template--14613100560474__16466243910f5ecac0 .wrapper-image > a, .section-block-template--14613100560474__16466243910f5ecac0.wrapper-content .wrapper-image{border-radius: 0%}
    .section-block-template--14613100560474__16466243910f5ecac0 .wrapper-image img {left: 50%;transform: translateX(-50%)}
    .section-block-template--14613100560474__16466243910f5ecac0 .image-zoom:hover img {transform: translateX(-50%) scale(1.06)}.section-block-template--14613100560474__16466243910f5ecac0 .brands-block .slick-dotted {margin-bottom: 40px}.section-block-template--14613100560474__16466243910f5ecac0 .halo-item .text {display: block;text-align: center;margin-top: -5px;visibility: visible !important;font-size: 16px;font-weight: 400;margin-bottom: 0px;font-style: var(--font-heading-style)}
    .section-block-template--14613100560474__16466243910f5ecac0 .halo-item:hover .text{text-decoration: underline;text-underline-offset: 0.3rem}
    .section-block-template--14613100560474__16466243910f5ecac0 .halo-item .description{display: block;text-align: center;}

    .brand-slider .halo-item .text {color: var(--title_color)}
    .brand-slider .halo-item:hover .text {color: var(--title_color_hover)}
    .brand-slider .halo-item .description {color: var(--color_des)}@media (min-width: 768px) {.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .subtext-brand {text-align: right;float: right}.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .rte {max-width: 60%}}
    @media (min-width: 1025px) {.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .title .text { width: auto}.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header{margin-bottom: 0}.section-block-template--14613100560474__16466243910f5ecac0 .halo-row .halo-item{padding-left: var(--item-distance-style);padding-right: var(--item-distance-style)}.section-block-template--14613100560474__16466243910f5ecac0 .halo-row .slick-list {margin-left: var(--row-distance-style);margin-right: var(--row-distance-style)}.section-block-template--14613100560474__16466243910f5ecac0 .slick-arrow:hover {border-color: ;background: }
        .section-block-template--14613100560474__16466243910f5ecac0 .slick-arrow:hover svg {color: ;fill: }
        .brands-grid .halo-row.halo-slider.column-10:not(.slick-slider) .halo-item:nth-child(n+11),.brands-grid .halo-row.halo-slider.column-2:not(.slick-slider) .halo-item:nth-child(n+3),.brands-grid .halo-row.halo-slider.column-3:not(.slick-slider) .halo-item:nth-child(n+4),.brands-grid .halo-row.halo-slider.column-4:not(.slick-slider) .halo-item:nth-child(n+5),.brands-grid .halo-row.halo-slider.column-5:not(.slick-slider) .halo-item:nth-child(n+6),.brands-grid .halo-row.halo-slider.column-6:not(.slick-slider) .halo-item:nth-child(n+7),.brands-grid .halo-row.halo-slider.column-7:not(.slick-slider) .halo-item:nth-child(n+8),.brands-grid .halo-row.halo-slider.column-8:not(.slick-slider) .halo-item:nth-child(n+9),.brands-grid .halo-row.halo-slider.column-9:not(.slick-slider) .halo-item:nth-child(n+10){display: block}}
    @media (min-width: 768px) and (max-width: 1024px) {.section-block-template--14613100560474__16466243910f5ecac0 {padding-top: 15px;padding-bottom: 15px}}
    @media (min-width: 768px) and (max-width: 991px) {.section-block-template--14613100560474__16466243910f5ecac0 .brands-slider .md-column-3:not(.slick-slider) .halo-item:nth-child(n + 4) {display: none}}
    @media (min-width: 992px) and (max-width: 1024px) {
        .section-block-template--14613100560474__16466243910f5ecac0 .brands-slider .md-column-3:not(.slick-slider) .halo-item {width: 25%}
        .section-block-template--14613100560474__16466243910f5ecac0 .brands-slider .md-column-3:not(.slick-slider) .halo-item:nth-child(n + 4) {display: block}.section-block-template--14613100560474__16466243910f5ecac0 .brands-slider .md-column-3:not(.slick-slider) .halo-item:nth-child(n + 5) {display: none}
    }
    @media (min-width: 1200px) {.section-block-template--14613100560474__16466243910f5ecac0 {padding-top: 15px;padding-bottom: 15px}}
    @media (max-width: 1024px) {.section-block-template--14613100560474__16466243910f5ecac0 .brands-grid .halo-slider.md-column-3:not(.slick-slider) .halo-item:nth-child(n+4){display: block}
        .section-block-template--14613100560474__16466243910f5ecac0 .brands-grid .halo-item{padding-bottom: 15px}.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .title {line-height: 1.5}
            .section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header{margin: 0 0 20px 0}.section-block-template--14613100560474__16466243910f5ecac0 .brands-block--wrapper {flex-wrap: wrap}
        .section-block-template--14613100560474__16466243910f5ecac0 .halo-slider {display: flex;flex: auto}
    }
    @media (max-width: 767px) {
        .section-block-template--14613100560474__16466243910f5ecac0 {padding-top: 15px;padding-bottom: 15px}
        .section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header {flex-wrap: wrap}
        .section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .rte {margin-left: 0}.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .title {font-size: 18px;}
        .section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header .title .text br {display: none}.section-block-template--14613100560474__16466243910f5ecac0 .halo-block-header {text-align: left;float: right}}
    @media (max-width: 551px){
        .section-block-template--14613100560474__16466243910f5ecac0 .sm-column-3:not(.slick-slider) .halo-item {width: 33.333333%}.section-block-template--14613100560474__16466243910f5ecac0 .sm-column-2:not(.slick-slider) .halo-item {width: 50%}.section-block-template--14613100560474__16466243910f5ecac0 .sm-column-1:not(.slick-slider) .halo-item {width: 100%}
        .section-block-template--14613100560474__16466243910f5ecac0 .sm-column-3:not(.slick-slider) .halo-item:nth-child(n+4),.section-block-template--14613100560474__16466243910f5ecac0 .sm-column-2:not(.slick-slider) .halo-item:nth-child(n+3),.section-block-template--14613100560474__16466243910f5ecac0 .sm-column-1:not(.slick-slider) .halo-item:nth-child(n+2) {display: none}.section-block-template--14613100560474__16466243910f5ecac0 .halo-item .text {font-size: 13px !important}}

</style>
<div id="shopify-section-template--14613100560474__16469656164e01e23d" class="shopify-section sections-product-block">
<style>.section-block-template--14613100560474__16469656164e01e23d .product-countdown-block {color: #f42b23;margin-left: 15px}
        .layout_rtl .section-block-template--14613100560474__16469656164e01e23d .product-countdown-block {margin-right: 15px;margin-left: 0}.section-block-template--14613100560474__16469656164e01e23d .product-countdown-block .clock-item {font-size: 14px}
        @media (max-width: 767px) {
            .section-block-template--14613100560474__16469656164e01e23d .product-countdown-block {margin-top: 0px;margin-left: 10px}
            .section-block-template--14613100560474__16469656164e01e23d .container:not(.container-full) .halo-block-header:not(.countdown_style_2) .product-countdown-block {margin-left: 0px}
            .section-block-template--14613100560474__16469656164e01e23d .halo-block-header:not(.countdown_style_2) .product-countdown-block {margin-top: 5px}
            .section-block-template--14613100560474__16469656164e01e23d .container:not(.container-full) .halo-block-header:not(.countdown_style_2).block-title--style2 .product-countdown-block,.section-block-template--14613100560474__16469656164e01e23d .container-full .halo-block-header:not(.countdown_style_2).block-title--style3 .product-countdown-block,.section-block-template--14613100560474__16469656164e01e23d .container-full .halo-block-header:not(.countdown_style_2).block-title--style4 .product-countdown-block{margin-top: 5px}
            .section-block-template--14613100560474__16469656164e01e23d .container:not(.container-full) .countdown_style_2 .product-countdown-block {padding-left: 0;padding-right: 0}
            .section-block-template--14613100560474__16469656164e01e23d .countdown_style_2 .product-countdown-block {margin-left: 0px}
            .section-block-template--14613100560474__16469656164e01e23d .container-full .title .text {padding-left: 10px !important;padding-right: 10px !important}
            .layout_rtl .section-block-template--14613100560474__16469656164e01e23d .container-full .title .text {padding-left: 0px !important;padding-right: 0px !important}
            .section-block-template--14613100560474__16469656164e01e23d .container-full .countdown_style_2.block-title--style2 .product-countdown-block {margin-left: 0px}
            .section-block-template--14613100560474__16469656164e01e23d .container-full .halo-block-header:not(.countdown_style_2) .product-countdown-block {margin-top: 0px}
            .section-block-template--14613100560474__16469656164e01e23d .container-full .countdown_style_2 .product-countdown-block {padding-left: 10px;padding-right: 10px}
            .section-block-template--14613100560474__16469656164e01e23d .container-full .countdown_style_2.block-title--style2 .product-countdown-block {padding: 10px;margin-left: 0}
            .section-block-template--14613100560474__16469656164e01e23d .container-full .view_all {padding-left: 10px}
            .layout_rtl .section-block-template--14613100560474__16469656164e01e23d .container-full .view_all {padding-right: 0px;padding-left: 0}
            .section-block-template--14613100560474__16469656164e01e23d .block-title--style2.enable_border_title_style2 .product-countdown-block {margin-top: 15px}
            .section-block-template--14613100560474__16469656164e01e23d .container-full .block-title--style3 .product-countdown-block {margin-top: 5px;padding-left: 10px;padding-right: 10px}
        }.section-block-template--14613100560474__16469656164e01e23d .product-block__cap--text {color: #ffffff;font-size: 40px;margin-bottom: 0px}
        .section-block-template--14613100560474__16469656164e01e23d .product-block__cap--subText {color: #ffffff;font-size: 14px;margin-top: 0;
            margin-bottom: 14px;line-height: 14px}
        .section-block-template--14613100560474__16469656164e01e23d .product-block__cap--description {color: #ffffff;font-size: 14px}
        .section-block-template--14613100560474__16469656164e01e23d .product-block__cap--button a {color: #ffffff;background: #f84248;border: 1px solid #f84248}
        .section-block-template--14613100560474__16469656164e01e23d .product-block__cap--button a:hover {color: #232323;background: #ffffff;border: 1px solid #232323}
        .product-block-has__banner .product-block__banner figure img,.product-block-has__banner .product-block__image,.product-block-has__banner .product-block__banner figure{border-radius: 6px}
        .product-block-has__banner .product-block__banner .video-open-popup a {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);z-index: 2;
            line-height: 0;padding: 10px 20px;border-radius: 5px;background: var(--bg_color);color: var(--color)}
        .product-block-has__banner .product-block__banner .video-open-popup.custom_position a {top: var(--top);left: var(--left)}
        .product-block-has__banner .product-block__banner .video-open-popup.icon_style_2 a {padding: 0}
        .product-block-has__banner .product-block__banner .video-open-popup svg {width: 85px;height: 85px;fill: currentColor;stroke: currentColor}
        .product-block-has__banner .product-block__banner .video-open-popup.icon_style_2 svg {width: 96px;height: 96px}
        @media (max-width: 1199px) {
            .section-block-template--14613100560474__16469656164e01e23d .product-block__cap--text {margin-bottom: 20px}
            .section-block-template--14613100560474__16469656164e01e23d .product-block__cap--subText {font-size: 14px;line-height: 14px;margin-bottom: 25px}
        }
        @media (max-width: 991px) {.product-block-has__banner .product-block__banner figure {max-width: 100% !important}}
        @media (max-width: 767px){
            .section-block-template--14613100560474__16469656164e01e23d .product-block__cap--text {font-size: 24px}
            .product-block__banner.pd--style2.not-img .product-block__cap--text{margin-bottom: 11px}
            .product-block__banner.pd--style2.not-img .product-block__cap--subText{margin-bottom: 15px}
        }
        @media (min-width: 1700px) and (max-width: 1920px) {.body-custom-width .product-block-has__banner.has__banner--left .product-block__grid,.body-custom-width .product-block-has__banner.has__banner--right .product-block__grid {padding-right: 60px;padding-left: 60px}}
        @media (min-width: 1921px) {.body-custom-width .product-block-has__banner.has__banner--left .product-block__grid,.body-custom-width .product-block-has__banner.has__banner--right .product-block__grid {padding-right: 100px;padding-left: 100px}}
        @media (min-width: 1600px) and (max-width: 1920px) {
            .body-custom-width .product-block-has__banner.has__banner--left .product-block__grid {padding-right: calc((100% - var(--body-custom-width-container) + 30px) / 2)}
            .body-custom-width .product-block-has__banner.has__banner--right .product-block__grid {padding-left: calc((100% - var(--body-custom-width-container) + 30px) / 2)}
        }
        @media (min-width: 1921px) {
            .body-custom-width .product-block-has__banner.has__banner--left .product-block__grid {padding-right: 6%}
            .body-custom-width .product-block-has__banner.has__banner--right .product-block__grid {padding-left: 6%}
        }.section-block-template--14613100560474__16469656164e01e23d .product-item {background-color: #ffffff;padding: 20px;border-radius: 0px;border: 0px solid #f0f1f4}.section-block-template--14613100560474__16469656164e01e23d .product-infinite-scroll {margin-top: 55px}.section-block-template--14613100560474__16469656164e01e23d .product-infinite-scroll .button {background: #232323;color: #ffffff;border: 1px solid #232323;padding-top: 12px;padding-bottom: 12px}
        .section-block-template--14613100560474__16469656164e01e23d .product-infinite-scroll .button svg {fill: #ffffff}.section-block-template--14613100560474__16469656164e01e23d .halo-block-header{margin-bottom: 0}.section-block-template--14613100560474__16469656164e01e23d,.section-block-template--14613100560474__16469656164e01e23d .halo-block-header .title .text {background: #f5f5f5}.product-block .halo-block {background-color: transparent}
    .section-block-template--14613100560474__16469656164e01e23d .halo-block-header .title {color: #202020;font-size: 20px;margin-bottom: 22px;}
    .section-block-template--14613100560474__16469656164e01e23d .halo-block-header .title svg {fill: #202020}
    .section-block-template--14613100560474__16469656164e01e23d .halo-block-header .title:before {background-color: #232323;display: none;}.section-block-template--14613100560474__16469656164e01e23d .block-title--style2 .title {padding-bottom: 22px}.section-block-template--14613100560474__16469656164e01e23d .block-title--style4 .title:before {content:  none}
    .section-block-template--14613100560474__16469656164e01e23d .block-title--style2:has(.view-all) {padding-left: 0;padding-right: 0}
    .halo-block-header.text-center.block-title--style2.viewAll--center .view-all {position: static !important}
    .section-block-template--14613100560474__16469656164e01e23d .halo-block-header .view_all {color: #3c3c3c;font-weight: 500;margin-bottom: 30px !important;}

    .section-block-template--14613100560474__16469656164e01e23d .halo-block-header .view_all svg {color: #eb492f;fill: #eb492f}
    .product-block-has__banner .product-block__banner .product-block__cap.custom_position {width: max-content}
    .section-block-template--14613100560474__16469656164e01e23d .product-infinite-scroll .button{font-size: 14px;font-weight:  500;text-transform: uppercase}
    /* Block Categories */
    .section-block-template--14613100560474__16469656164e01e23d .product-block__collection--list{background: #ffffff}
    .section-block-template--14613100560474__16469656164e01e23d .product-block__collection--list_info h5,.section-block-template--14613100560474__16469656164e01e23d .product-block__collection--list_info a,.section-block-template--14613100560474__16469656164e01e23d .product-block__collection--list a{color: #202020}
    /* Start: Scroll Layout */
    .section-block-template--14613100560474__16469656164e01e23d.products-flex {display: flex;flex-direction: row;flex-wrap: nowrap;user-select: none;padding-bottom: 45px;overflow: auto;overflow-y: clip;gap: 30px;padding-right: 60px}
    .layout_rtl .section-block-template--14613100560474__16469656164e01e23d.products-flex {padding-left: 60px;padding-right: 0;}
    .section-block-template--14613100560474__16469656164e01e23d.halo-product-block .products-flex .product {flex-shrink: 0;flex-grow: 0;padding: 0;}
    .section-block-template--14613100560474__16469656164e01e23d .halo-block-content.is-scroll {overflow: hidden}
    .section-block-template--14613100560474__16469656164e01e23d .products-flex::-webkit-scrollbar {height: var(--scrollbar-height, 3px);cursor: pointer}
    .section-block-template--14613100560474__16469656164e01e23d .products-flex::-webkit-scrollbar-track {background: var(--scrollbar-track-color, #dadada)}
    .section-block-template--14613100560474__16469656164e01e23d .products-flex::-webkit-scrollbar-thumb {background: var(--scrollbar-thumb-color, #000)}
    .section-block-template--14613100560474__16469656164e01e23d .products-flex::-webkit-scrollbar-thumb:hover {background: var(--scrollbar-thumb-hover-color, #333)}
    .section-block-template--14613100560474__16469656164e01e23d .products-flex.active .product {pointer-events: none}
    /* End: Scroll Layout */
    @media (max-width: 1024px) {.section-block-template--14613100560474__16469656164e01e23d .products-flex {--count: 2!important;gap: 15px}
        .section-block-template--14613100560474__16469656164e01e23d .products-flex .product {padding: 0 7px}
        .section-block-template--14613100560474__16469656164e01e23d .products-flex {scroll-snap-type: x mandatory;padding-bottom: 0}
        .section-block-template--14613100560474__16469656164e01e23d .halo-product-block .products-flex .product {scroll-snap-align: start}
        .product-block-has__banner .product-block__banner .video-open-popup.custom_position a {top: var(--top-mb);left: var(--left-mb)}   
        .product-block-has__banner .product-block__banner .video-open-popup svg {width: 44px;height: 44px}
    }
    @media (max-width: 767px) {
        .section-block-template--14613100560474__16469656164e01e23d {padding-top: 20px;padding-bottom: 0px}
        .section-block-template--14613100560474__16469656164e01e23d .halo-block-header .title {font-size: 18px}.section-block-template--14613100560474__16469656164e01e23d .halo-block-header .title {margin-bottom: 20px !important}.section-block-template--14613100560474__16469656164e01e23d .halo-block-header .view_all {margin-bottom: 0px !important}.section-block-template--14613100560474__16469656164e01e23d .products-flex .product {flex-basis: calc(100% / calc(var(--count) - 0.3));width: calc(100% / calc(var(--count) - 0.3))}
    }
    @media (max-width: 550px) {}

    @media (min-width: 551px){
        .section-block-template--14613100560474__16469656164e01e23d .products-grid {margin-left: calc(var(--grid-gap) * (-1));margin-right: calc(var(--grid-gap) * (-1))}
        .section-block-template--14613100560474__16469656164e01e23d .products-grid .product {padding-right: var(--grid-gap);padding-left: var(--grid-gap);margin: 0 0 calc(var(--grid-gap) * 2) !important}
    }
    @media (min-width: 1025px) {
        .section-block-template--14613100560474__16469656164e01e23d .products-carousel .product {padding-right: var(--grid-gap);padding-left: var(--grid-gap)}
        .section-block-template--14613100560474__16469656164e01e23d .products-carousel {margin-left: calc(var(--grid-gap) * (-1)) !important;margin-right: calc(var(--grid-gap) * (-1)) !important}
        .section-block-template--14613100560474__16469656164e01e23d .halo-block-content .slick-arrow{top: calc(50% - 120px)}.section-block-template--14613100560474__16469656164e01e23d .product-infinite-scroll .button:hover {background: ;color: ;border: 1px solid }
            .section-block-template--14613100560474__16469656164e01e23d .product-infinite-scroll .button:hover svg {fill: }
            .section-block-template--14613100560474__16469656164e01e23d .product-infinite-scroll .button {max-width: 270px}.section-block-template--14613100560474__16469656164e01e23d .products-carousel.slick-dotted {padding-bottom: 0px}}
    @media (min-width: 1200px) {
        .section-block-template--14613100560474__16469656164e01e23d {padding-top: 30px;padding-bottom: 0px}.section-block-template--14613100560474__16469656164e01e23d .product-infinite-scroll .button {max-width: 270px}}
    @media (min-width: 1025px) {.product-block__collection--list:hover .product-block__collection--list_info a,.product-block__collection--list:hover a{color: #3e8cc4;text-decoration: underline;text-underline-offset: 0.2rem}
    }

    @media (min-width: 768px) and (max-width: 1199px) {.section-block-template--14613100560474__16469656164e01e23d {padding-top: 30px;padding-bottom: 0px}}
    @media (min-width: 768px) {
        .section-block-template--14613100560474__16469656164e01e23d .halo-product-block .products-flex .product {flex-basis: calc(100% / calc(var(--count) + 0.5));width: calc(100% / calc(var(--count) + 0.5))}
    }
</style>


</div>
            
<!--MEDIA QUERY FOR PRODUCT FEATURED-->
<style>
@media only screen and (max-width: 1441px) {
    .product_featured{
        /*width: 100%!important;*/
        margin-right: 5% !important;
        margin-left: 5% !important;
    }
}
@media only screen and (max-width: 426px) {
    .product_featured{
        /*width: 100%!important;*/
        margin-right: 0% !important;
        margin-left: 0% !important;
    }
}
</style>

<?php $featureds=\DB::table('products')->where('feature_product',1)->orderBy('sort','asc')->limit(4)->latest()->get();?>
<div class="product-block section-block-template--14613100560474__16454136937e8b1e52 @if(count($featureds)==0) d-none @endif" style="--grid-gap: 10.0px">
    <div class="product_featured halo-block halo-product-block ajax-loaded" id="halo-product-block-template--14613100560474__16454136937e8b1e52" data-product-block="" data-limit="10" data-layout="grid" sectionid="template--14613100560474__16454136937e8b1e52" data-collection="home-19-collection-recommended-for-you" data-image-ratio="adapt" data-swipe="false">

            <div class="container layout-body--custom_width" style="--width-box-banner: 40%" data-width-banner="40">
                <div class="halo-block-header text-left block-title--style1 enable_border_title_style2" style="text-align:center;">
                            <h3 class="title" style="padding-bottom:0px!important; margin-bottom:0px;">
                                <span class="text" style="font-size:35px!important; padding-bottom:0px!important; margin-bottom:0px; text-transform:uppercase!important; font-family: scratchones !important;">Featured Product</span>
                            </h3>
                            <p style=" padding-top:0px!important; margin-top:0px;">
                            <span style="color:red; font-size:50px;">.</span>
                            <span style="color:green; font-size:50px;">.</span>
                            <span style="color:yellow; font-size:50px;">.</span>
                            </p>
                        </div>
                    <div class="halo-block-content  enable_layout_special"><div class="products-grid column-5" data-products-to-show="10">
                @foreach($featureds as $featured)
                    <div class="product">
                        <div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625138266" style="padding: 0px !important; border: 0px !important;" >
                            <div class="card ajax-loaded">
                                <div class="card-product">
                                    <div class="card-product__wrapper">
                                        <div class="card__badge badge-left halo-productBadges halo-productBadges--left date-50863681 date1-588" data-new-badge-number="30"></div>
                                    <div class="card-media card-media--adapt media--hover-effect media--loading-effect" style="padding-bottom: 100.0%; border-radius:0px!important;">
                                        <img src="{{URL::to('/')}}/application/storage/app/product/{{$featured->f_pic}}" alt="{{$featured->name}}" sizes="(min-width: 1100px) 1200px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" size="1200" loading="lazy" loading="lazy" class="motion-reduce ls-is-cached lazyloaded">
                                        <img src="{{URL::to('/')}}/application/storage/app/product/{{$featured->f_pic}}" sizes="(min-width: 1100px) 780px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="{{$featured->name}}" size="870" loading="lazy" class="motion-reduce ls-is-cached lazyloaded" ><span class="data-lazy-loading"></span><div class="media-loading" data-title="Ella">
                                        Ella
                                    </div>
                                    <a class="card-link" href="{{URL::to('/')}}/details/{{$featured->id}}" title="(Product 18) Sample - Computers &amp; Accessories For Sale"></a>
                                </div>
                                <div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-information">
                        <div class="card-information__wrapper text-center">
                            <!--<div class="wrapper-title-vendor  card-title-ellipsis">-->
                            <div class="card-information__group card-information__group-2 card-vendor">
                                <a class="card-title link-underline card-title-ellipsis card-title-change" href="{{URL::to('/')}}/details/{{$featured->id}}" data-product-title="{{$featured->name}}" >
                                    <span class="text">
                                        {{$featured->name}}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
                @endforeach  
        </div>
    </div>
</div>
        </div>
    </div>
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-12">-->
<!--            <h3>Featured Products</h3>-->
<!--        </div>-->
<!--        <div class="col-12">-->
<!--            <h3>Top Selling Products</h3>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--MEDIA QUERY BEST_SELLING_PRODUCT-->
<style>
@media only screen and (max-width: 1441px) {
    .best_selling_products{
        /*width: 100%!important;*/
        margin-right: 5% !important;
        margin-left: 5% !important;
    }
}
@media only screen and (max-width: 426px) {
    .best_selling_products{
        /*width: 100%!important;*/
        margin-right: 0% !important;
        margin-left: 0% !important;
    }
}
</style>

<?php $tops=\DB::table('products')->where('top_product',1)->orderBy('sort','asc')->limit(4)->latest()->get();?>
<div class="product-block section-block-template--14613100560474__16454136937e8b1e52 @if(count($tops)==0) d-none @endif" style="--grid-gap: 10.0px">
    <div class="best_selling_products halo-block halo-product-block ajax-loaded" id="halo-product-block-template--14613100560474__16454136937e8b1e52" data-product-block="" data-limit="10" data-layout="grid" sectionid="template--14613100560474__16454136937e8b1e52" data-collection="home-19-collection-recommended-for-you" data-image-ratio="adapt" data-swipe="false">
            
            <div  class=" container layout-body--custom_width" style="--width-box-banner: 40%" data-width-banner="40">
                <div class="halo-block-header text-left block-title--style1 enable_border_title_style2" style="text-align:center!important;">
                                <h3 class="title" style="padding-bottom:0px!important; margin-bottom:0px;">
                                <span class="text"  style="font-size:35px!important; padding-bottom:0px!important; margin-bottom:0px; text-decoration:none!important;text-transform:uppercase!important; font-family: scratchones !important;">Best Selling Product</span>
                                </h3>
                                <p style=" padding-top:0px!important; margin-top:0px;">
                                <span style="color:red; font-size:50px;">.</span>
                                <span style="color:green; font-size:50px;">.</span>
                                <span style="color:yellow; font-size:50px;">.</span>
                                </p>
                            
                            </div><div class="halo-block-content  enable_layout_special"><div class="products-grid column-5" data-products-to-show="10">
                                
@foreach($tops as $top)
<div class="product">
        
<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625138266" style="padding: 0px !important; border: 0px !important;">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-50863681 date1-588" data-new-badge-number="30"></div>
<div class="card-media card-media--adapt media--hover-effect media--loading-effect" style="padding-bottom: 100.0%; border-radius:0px!important">
                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$top->f_pic}}" alt="{{$top->name}}" sizes="(min-width: 1100px) 1200px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" size="1200" loading="lazy" class="motion-reduce ls-is-cached lazyloaded" >
                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$top->f_pic}}" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="{{$top->name}}" size="870" loading="lazy" class="motion-reduce ls-is-cached lazyloaded" ><span class="data-lazy-loading"></span><div class="media-loading" data-title="Ella">Ella</div>
                    <a class="card-link" href="{{URL::to('/')}}/details/{{$top->id}}" title="(Product 18) Sample - Computers &amp; Accessories For Sale"></a>
                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">
                                
                            </div></div>
</div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center">
                
                    <div class="wrapper-title-vendor  card-title-ellipsis">
                
<a class="card-title link-underline card-title-ellipsis card-title-change" href="{{URL::to('/')}}/details/{{$top->id}}" data-product-title="{{$top->name}}" >
                    <span class="text">
                        {{$top->name}}
                        
                    </span>
                </a>

                
                    </div>
    </div>

                        </div>
    </div>
</div>


    </div>
    
 @endforeach   
    
    
    
    
    </div>
   
                                    </div>
</div>
        </div>
    </div>

<!--MEDIA QUERY FOR BANNERS3-->
<style>
@media only screen and (max-width: 1441px) {
    .banners3{
        /*width: 100%!important;*/
        margin-right: 5% !important;
        margin-left: 5% !important;
    }
}
@media only screen and (max-width: 426px) {
    .banners3{
        /*width: 100%!important;*/
        margin-right: 0% !important;
        margin-left: 0% !important;
    }
}
</style>

<div id="shopify-section-template--14613100560474__164679807995018a82" class="shopify-section sections-spotlight-block">
<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-spotlight-block.css" media="all" onload="this.media=&#39;all&#39;">
<noscript><link href="#" rel="stylesheet" type="text/css" media="all" /></noscript>
<div class="banners3 spotlight-block section-block-template--14613100560474__164679807995018a82" id="spotlight-template--14613100560474__164679807995018a82">
    <div class=" container"><div class="halo-row column-3" style="--row-distance-style: -10px;--arrow-side-position: 0" data-swipe="list" data-dots="true" data-dots-mb="true">
        <?php $banner3s=DB::table('medias')->where('link_id','banner3')->limit('3')->orderBy('id','desc')->latest()->get();?>
        @if($banner3s)
        @foreach($banner3s as $banner3)
        <div class="halo-item spotlight--image" id="block-16342924847ce35dfd-0" style="--item-distance-style: 10px;" data-animate="none">
            <div class="spotlight-item spotlight-item__image">
                <div class="image-container">
                    <div class="img-box">
                        
                        <a @if($banner3->link!='') href="{{$banner3->link}}"  @else href="#" @endif class="image-zoom adaptive_height" style="padding-top: 37.254901960784316%" title="new-ella-demo">
                                <img src="{{URL::to('/')}}/application/storage/app/{{$banner3->source}}" alt="Banner Full">
                                <span class="data-lazy-loading"></span>
                            </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        
        <!--<div class="halo-item spotlight--image" id="block-16342924847ce35dfd-1" style="--item-distance-style: 10px;" data-animate="none">-->
        <!--            <div class="spotlight-item spotlight-item__image"><div class="image-container">-->
        <!--                        <div class="img-box"><a href="https://new-ella-demo.myshopify.com/collections/home-19-collection-recommended-for-you" class="image-zoom adaptive_height" style="padding-top: 37.254901960784316%" title="new-ella-demo">-->
        <!--                                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_165x.jpg?v=1646357476 165w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_170x.jpg?v=1646357476 170w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_185x.jpg?v=1646357476 185w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_198x.jpg?v=1646357476 198w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_210x.jpg?v=1646357476 210w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_220x.jpg?v=1646357476 220w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_245x.jpg?v=1646357476 245w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_270x.jpg?v=1646357476 270w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_290x.jpg?v=1646357476 290w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_320x.jpg?v=1646357476 320w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_355x.jpg?v=1646357476 355w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_360x.jpg?v=1646357476 360w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_370x.jpg?v=1646357476 370w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_420x.jpg?v=1646357476 420w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_430x.jpg?v=1646357476 430w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_460x.jpg?v=1646357476 460w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_470x.jpg?v=1646357476 470w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_510x.jpg?v=1646357476 510w" sizes="(min-width: 1100px) 510px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="" size="510" loading="lazy" class=" lazyloaded" srcset="//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_165x.jpg?v=1646357476 165w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_170x.jpg?v=1646357476 170w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_185x.jpg?v=1646357476 185w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_198x.jpg?v=1646357476 198w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_210x.jpg?v=1646357476 210w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_220x.jpg?v=1646357476 220w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_245x.jpg?v=1646357476 245w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_270x.jpg?v=1646357476 270w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_290x.jpg?v=1646357476 290w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_320x.jpg?v=1646357476 320w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_355x.jpg?v=1646357476 355w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_360x.jpg?v=1646357476 360w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_370x.jpg?v=1646357476 370w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_420x.jpg?v=1646357476 420w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_430x.jpg?v=1646357476 430w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_460x.jpg?v=1646357476 460w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_470x.jpg?v=1646357476 470w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-2_510x.jpg?v=1646357476 510w">-->
        <!--                                    <span class="data-lazy-loading"></span>-->
        <!--                                </a></div>-->
        <!--                    </div></div>-->
        <!--        </div>-->
        <!--<div class="halo-item spotlight--image" id="block-16342924847ce35dfd-2" style="--item-distance-style: 10px;" data-animate="none">-->
        <!--            <div class="spotlight-item spotlight-item__image"><div class="image-container">-->
        <!--                        <div class="img-box"><a href="https://new-ella-demo.myshopify.com/collections/home-19-collection-whats-new" class="image-zoom adaptive_height" style="padding-top: 37.254901960784316%" title="new-ella-demo">-->
        <!--                                    <img data-srcset="//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_165x.jpg?v=1646357478 165w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_170x.jpg?v=1646357478 170w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_185x.jpg?v=1646357478 185w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_198x.jpg?v=1646357478 198w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_210x.jpg?v=1646357478 210w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_220x.jpg?v=1646357478 220w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_245x.jpg?v=1646357478 245w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_270x.jpg?v=1646357478 270w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_290x.jpg?v=1646357478 290w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_320x.jpg?v=1646357478 320w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_355x.jpg?v=1646357478 355w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_360x.jpg?v=1646357478 360w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_370x.jpg?v=1646357478 370w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_420x.jpg?v=1646357478 420w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_430x.jpg?v=1646357478 430w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_460x.jpg?v=1646357478 460w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_470x.jpg?v=1646357478 470w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_510x.jpg?v=1646357478 510w" sizes="(min-width: 1100px) 510px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="" size="510" loading="lazy" class=" lazyloaded" srcset="//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_165x.jpg?v=1646357478 165w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_170x.jpg?v=1646357478 170w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_185x.jpg?v=1646357478 185w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_198x.jpg?v=1646357478 198w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_210x.jpg?v=1646357478 210w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_220x.jpg?v=1646357478 220w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_245x.jpg?v=1646357478 245w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_270x.jpg?v=1646357478 270w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_290x.jpg?v=1646357478 290w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_320x.jpg?v=1646357478 320w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_355x.jpg?v=1646357478 355w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_360x.jpg?v=1646357478 360w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_370x.jpg?v=1646357478 370w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_420x.jpg?v=1646357478 420w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_430x.jpg?v=1646357478 430w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_460x.jpg?v=1646357478 460w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_470x.jpg?v=1646357478 470w,//new-ella-demo.myshopify.com/cdn/shop/files/home-20-banner-custom-4-3-3_510x.jpg?v=1646357478 510w">-->
        <!--                                    <span class="data-lazy-loading"></span>-->
        <!--                                </a></div>-->
        <!--                    </div></div>-->
        <!--</div>-->
    </div>
</div>
    </div><style>.section-block-template--14613100560474__164679807995018a82{padding-top: 0.0px
    }
    .section-block-template--14613100560474__164679807995018a82 .halo-block-header {margin-top: -0px}.section-block-template--14613100560474__164679807995018a82, .section-block-template--14613100560474__164679807995018a82 .halo-block-header .title 
    .text {
            background: #f5f5f5;
        }.section-block-template--14613100560474__164679807995018a82 .halo-block-header .title:before {background-color: #232323;}
    .section-block-template--14613100560474__164679807995018a82 .halo-block-header .title {color: #232323;font-size: 16px;margin-top: 2px;display: block}
    .section-block-template--14613100560474__164679807995018a82 .halo-block-header .rte {color: #3c3c3c;font-size: 10px; line-height: 18px}
    .section-block-template--14613100560474__164679807995018a82 .view_all {font-weight: var(--font-weight-view-all-style);margin-bottom: var(--mg-bottom-view-style);color: var(--color-view-all-style);font-size: var(--font-size-view-all-style)}
    .section-block-template--14613100560474__164679807995018a82 .view_all:not(.has-border) {border-bottom: none}
    .section-block-template--14613100560474__164679807995018a82 .view_all.has-border {border-bottom: 1px solid}.section-block-template--14613100560474__164679807995018a82 .spotlight-item .img-box a{border-radius: 6px}@media (min-width: 1200px) {
        .section-block-template--14613100560474__164679807995018a82 {padding-top: 20px;padding-bottom: 0px}
    }
    @media (min-width: 1025px) {}
    @media (min-width: 768px) and (max-width: 1199px) {
        .section-block-template--14613100560474__164679807995018a82 {padding-top: 20px;padding-bottom: 0px}
    }
    @media (max-width: 1024px) {}
    @media (max-width: 767px) {
        .section-block-template--14613100560474__164679807995018a82 {padding-top: 25px;padding-bottom: 0px}
        .section-block-template--14613100560474__164679807995018a82 .halo-block-header .title {font-size: 22px}}
    @media (max-width: 551px) {}
</style>


</div>
<div id="shopify-section-template--14613100560474__16454136937e8b1e52" class="shopify-section sections-product-block"><style>.section-block-template--14613100560474__16454136937e8b1e52 .product-countdown-block {color: #f42b23;margin-bottom: 15px}
        .layout_rtl .section-block-template--14613100560474__16454136937e8b1e52 .product-countdown-block {margin-bottom: 15px;margin-left: 0}.section-block-template--14613100560474__16454136937e8b1e52 .product--countdown {top: 0}.section-block-template--14613100560474__16454136937e8b1e52 .product-countdown-block .clock-item {font-size: 14px}
        @media (max-width: 767px) {
            .section-block-template--14613100560474__16454136937e8b1e52 .product-countdown-block {margin-top: 0px;margin-left: 10px}
            .section-block-template--14613100560474__16454136937e8b1e52 .container:not(.container-full) .halo-block-header:not(.countdown_style_2) .product-countdown-block {margin-left: 0px}
            .section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header:not(.countdown_style_2) .product-countdown-block {margin-top: 5px}
            .section-block-template--14613100560474__16454136937e8b1e52 .container:not(.container-full) .halo-block-header:not(.countdown_style_2).block-title--style2 .product-countdown-block,.section-block-template--14613100560474__16454136937e8b1e52 .container-full .halo-block-header:not(.countdown_style_2).block-title--style3 .product-countdown-block,.section-block-template--14613100560474__16454136937e8b1e52 .container-full .halo-block-header:not(.countdown_style_2).block-title--style4 .product-countdown-block{margin-top: 5px}
            .section-block-template--14613100560474__16454136937e8b1e52 .container:not(.container-full) .countdown_style_2 .product-countdown-block {padding-left: 0;padding-right: 0}
            .section-block-template--14613100560474__16454136937e8b1e52 .countdown_style_2 .product-countdown-block {margin-left: 0px}
            .section-block-template--14613100560474__16454136937e8b1e52 .container-full .title .text {padding-left: 10px !important;padding-right: 10px !important}
            .layout_rtl .section-block-template--14613100560474__16454136937e8b1e52 .container-full .title 
            .text {padding-left: 0px !important;padding-right: 0px !important}
            .section-block-template--14613100560474__16454136937e8b1e52 .container-full .countdown_style_2.block-title--style2 .product-countdown-block {margin-left: 0px}
            .section-block-template--14613100560474__16454136937e8b1e52 .container-full .halo-block-header:not(.countdown_style_2) .product-countdown-block {margin-top: 0px}
            .section-block-template--14613100560474__16454136937e8b1e52 .container-full .countdown_style_2 .product-countdown-block {padding-left: 10px;padding-right: 10px}
            .section-block-template--14613100560474__16454136937e8b1e52 .container-full .countdown_style_2.block-title--style2 .product-countdown-block {padding: 10px;margin-left: 0}
            .section-block-template--14613100560474__16454136937e8b1e52 .container-full .view_all {padding-left: 10px}
            .layout_rtl .section-block-template--14613100560474__16454136937e8b1e52 .container-full .view_all {padding-right: 0px;padding-left: 0}
            .section-block-template--14613100560474__16454136937e8b1e52 .block-title--style2.enable_border_title_style2 .product-countdown-block {margin-top: 15px}
            .section-block-template--14613100560474__16454136937e8b1e52 .container-full .block-title--style3 .product-countdown-block {margin-top: 5px;padding-left: 10px;padding-right: 10px}
        }.section-block-template--14613100560474__16454136937e8b1e52 .product-item {background-color: #ffffff;padding: 20px;border-radius: 5px;border: 5px solid #ffffff}.section-block-template--14613100560474__16454136937e8b1e52 .product-infinite-scroll {margin-top: 25px}.section-block-template--14613100560474__16454136937e8b1e52 .product-infinite-scroll .button {background: #f5f5f5;color: #202020;border: 1px solid #a4a4a4;padding-top: 7px;padding-bottom: 7px}
        .section-block-template--14613100560474__16454136937e8b1e52 .product-infinite-scroll .button svg {fill: #202020}.section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header{margin-bottom: 0}.section-block-template--14613100560474__16454136937e8b1e52,.section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header .title .text {background: #f5f5f5}.product-block .halo-block {background-color: transparent}
    .section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header .title {color: #202020;font-size: 20px;margin-bottom: 20px;}
    .section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header .title svg {fill: #202020}
    .section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header .title:before {background-color: #000000;display: none;}.section-block-template--14613100560474__16454136937e8b1e52 .block-title--style2 .title {padding-bottom: 20px}.section-block-template--14613100560474__16454136937e8b1e52 .block-title--style4 .title:before {content:  none}
    .section-block-template--14613100560474__16454136937e8b1e52 .block-title--style2:has(.view-all) {padding-left: 0;padding-right: 0}
    .halo-block-header.text-center.block-title--style2.viewAll--center .view-all {position: static !important}
    .section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header .view_all {color: #202020;font-weight: 500;margin-bottom: 30px !important;}

    .section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header .view_all svg {color: #eb492f;fill: #eb492f}
    .product-block-has__banner .product-block__banner .product-block__cap.custom_position {width: max-content}
    .section-block-template--14613100560474__16454136937e8b1e52 .product-infinite-scroll .button{font-size: 14px;font-weight:  700;text-transform: capitalize}
    /* Block Categories */
    .section-block-template--14613100560474__16454136937e8b1e52 .product-block__collection--list{background: #ffffff}
    .section-block-template--14613100560474__16454136937e8b1e52 .product-block__collection--list_info h5,.section-block-template--14613100560474__16454136937e8b1e52 .product-block__collection--list_info a,.section-block-template--14613100560474__16454136937e8b1e52 .product-block__collection--list a{color: #202020}
    /* Start: Scroll Layout */
    .section-block-template--14613100560474__16454136937e8b1e52.products-flex {display: flex;flex-direction: row;flex-wrap: nowrap;user-select: none;padding-bottom: 45px;overflow: auto;overflow-y: clip;gap: 30px;padding-right: 60px}
    .layout_rtl .section-block-template--14613100560474__16454136937e8b1e52.products-flex {padding-left: 60px;padding-right: 0;}
    .section-block-template--14613100560474__16454136937e8b1e52.halo-product-block .products-flex .product {flex-shrink: 0;flex-grow: 0;padding: 0;}
    .section-block-template--14613100560474__16454136937e8b1e52 .halo-block-content.is-scroll {overflow: hidden}
    .section-block-template--14613100560474__16454136937e8b1e52 .products-flex::-webkit-scrollbar {height: var(--scrollbar-height, 3px);cursor: pointer}
    .section-block-template--14613100560474__16454136937e8b1e52 .products-flex::-webkit-scrollbar-track {background: var(--scrollbar-track-color, #dadada)}
    .section-block-template--14613100560474__16454136937e8b1e52 .products-flex::-webkit-scrollbar-thumb {background: var(--scrollbar-thumb-color, #000)}
    .section-block-template--14613100560474__16454136937e8b1e52 .products-flex::-webkit-scrollbar-thumb:hover {background: var(--scrollbar-thumb-hover-color, #333)}
    .section-block-template--14613100560474__16454136937e8b1e52 .products-flex.active .product {pointer-events: none}
    /* End: Scroll Layout */
    @media (max-width: 1024px) {.section-block-template--14613100560474__16454136937e8b1e52 .products-flex {--count: 2!important;gap: 15px}
        .section-block-template--14613100560474__16454136937e8b1e52 .products-flex .product {padding: 0 7px}
        .section-block-template--14613100560474__16454136937e8b1e52 .products-flex {scroll-snap-type: x mandatory;padding-bottom: 0}
        .section-block-template--14613100560474__16454136937e8b1e52 .halo-product-block .products-flex .product {scroll-snap-align: start}
        .product-block-has__banner .product-block__banner .video-open-popup.custom_position a {top: var(--top-mb);left: var(--left-mb)}   
        .product-block-has__banner .product-block__banner .video-open-popup svg {width: 44px;height: 44px}
    }
    @media (max-width: 767px) {
        .section-block-template--14613100560474__16454136937e8b1e52 {padding-top: 30px;padding-bottom: 40px}
        .section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header .title {font-size: 18px}.section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header .title {margin-bottom: 12px !important}.section-block-template--14613100560474__16454136937e8b1e52 .halo-block-header .view_all {margin-bottom: 0px !important}.section-block-template--14613100560474__16454136937e8b1e52 .products-flex .product {flex-basis: calc(100% / calc(var(--count) - 0.3));width: calc(100% / calc(var(--count) - 0.3))}
    }
    @media (max-width: 550px) {}

    @media (min-width: 551px){
        .section-block-template--14613100560474__16454136937e8b1e52 .products-grid {margin-left: calc(var(--grid-gap) * (-1));margin-right: calc(var(--grid-gap) * (-1))}
        .section-block-template--14613100560474__16454136937e8b1e52 .products-grid .product {padding-right: var(--grid-gap);padding-left: var(--grid-gap);margin: 0 0 calc(var(--grid-gap) * 2) !important}
    }
    @media (min-width: 1025px) {
        .section-block-template--14613100560474__16454136937e8b1e52 .products-carousel .product {padding-right: var(--grid-gap);padding-left: var(--grid-gap)}
        .section-block-template--14613100560474__16454136937e8b1e52 .products-carousel {margin-left: calc(var(--grid-gap) * (-1)) !important;margin-right: calc(var(--grid-gap) * (-1)) !important}
        .section-block-template--14613100560474__16454136937e8b1e52 .halo-block-content .slick-arrow{top: calc(50% - 70px)}.section-block-template--14613100560474__16454136937e8b1e52 .product-infinite-scroll .button:hover {background: ;color: ;border: 1px solid }
            .section-block-template--14613100560474__16454136937e8b1e52 .product-infinite-scroll .button:hover svg {fill: }
            .section-block-template--14613100560474__16454136937e8b1e52 .product-infinite-scroll .button {max-width: 190px}.section-block-template--14613100560474__16454136937e8b1e52 .products-carousel.slick-dotted {padding-bottom: 0px}}
    @media (min-width: 1200px) {
        .section-block-template--14613100560474__16454136937e8b1e52 {padding-top: 40px;padding-bottom: 30px}.section-block-template--14613100560474__16454136937e8b1e52 .product-infinite-scroll .button {max-width: 190px}}
    @media (min-width: 1025px) {.product-block__collection--list:hover .product-block__collection--list_info a,.product-block__collection--list:hover a{color: #3e8cc4;text-decoration: underline;text-underline-offset: 0.2rem}
    }

    @media (min-width: 768px) and (max-width: 1199px) {.section-block-template--14613100560474__16454136937e8b1e52 {padding-top: 40px;padding-bottom: 55px}}
    @media (min-width: 768px) {
        .section-block-template--14613100560474__16454136937e8b1e52 .halo-product-block .products-flex .product {flex-basis: calc(100% / calc(var(--count) + 0.5));width: calc(100% / calc(var(--count) + 0.5))}
    }
</style>

<!--MEDIA QUERY FOR PRODUCT BY CATEGORIES ID-->
<style>
@media only screen and (max-width: 1441px) {
    .productByCategory{
        /*width: 100%!important;*/
        margin-right: 5% !important;
        margin-left: 5% !important;
    }
}
@media only screen and (max-width: 426px) {
    .productByCategory{
        /*width: 100%!important;*/
        margin-right: 0% !important;
        margin-left: 0% !important;
    }
}
</style>

<?php $cats=DB::table('cats')->where('parent','0')->get();?>
@foreach($cats as $cat)
<?php $productbycatid=\DB::table('products')->whereRaw("find_in_set($cat->id,cat_ids)")->orderBy('sort','asc')->limit(4)->latest()->get();?>
<div class="product-block section-block-template--14613100560474__16454136937e8b1e52 @if(count($productbycatid)==0) d-none @endif" style="--grid-gap: 10.0px">
    <div class="productByCategory halo-block halo-product-block ajax-loaded" id="halo-product-block-template--14613100560474__16454136937e8b1e52" data-product-block="" data-limit="10" data-layout="grid" sectionid="template--14613100560474__16454136937e8b1e52" data-collection="home-19-collection-recommended-for-you" data-image-ratio="adapt" data-swipe="false">
            <div class=" container layout-body--custom_width" style="--width-box-banner: 40%" data-width-banner="40">
                <div class="halo-block-header text-left block-title--style1 enable_border_title_style2"  style="text-align:center!important;">
                            <h3 class="title" style="padding-bottom:0px!important; margin-bottom:0px!important;">
                                <span class="text" style="font-size:35px!important; padding-bottom:0px!important; margin-bottom:0px!important; text-decoration:none!important; text-transform:uppercase!important;  font-family: scratchones !important;">{{$cat->name}}</span>
                                </h3>
                                <p style=" padding-top:0px!important; margin-top:0px;">
                                <span style="color:red; font-size:50px;">.</span>
                                <span style="color:green; font-size:50px;">.</span>
                                <span style="color:yellow; font-size:50px;">.</span>
                                </p>
                                
                                </div><div class="halo-block-content  enable_layout_special"><div class="products-grid column-5" data-products-to-show="10">
@foreach($productbycatid as $productbycatids)
<div class="product">
        
<div class="product-item disable_product_card_border enable_custom_layout_card enable_custom_content" data-product-id="6679625138266" style="padding: 0px !important; border: 0px !important;">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper"><div class="card__badge badge-left halo-productBadges halo-productBadges--left date-50863681 date1-588" data-new-badge-number="30"></div>
<!--<div class="card-media card-media--adapt media--hover-effect media--loading-effect" style="padding-bottom: 100.0%; border-radius:0px!important">-->
<div class="card-media card-media--adapt media--hover-effect media--loading-effect" style="padding-bottom: 100.0%;">
                    <!--<img src="{{URL::to('/')}}/application/storage/app/product/{{$productbycatids->f_pic}}" alt="{{$productbycatids->name}}" size="870" loading="lazy" class="motion-reduce ls-is-cached lazyloaded" >-->
                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$productbycatids->f_pic}}" alt="{{$productbycatids->name}}" sizes="(min-width: 1100px) 1200px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" size="1200" loading="lazy" class="motion-reduce ls-is-cached lazyloaded" >
                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$productbycatids->f_pic}}" sizes="(min-width: 1100px) 780px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="{{$productbycatids->name}}" size="870" loading="lazy" class="motion-reduce ls-is-cached lazyloaded" ><span class="data-lazy-loading"></span><div class="media-loading" data-title="Ella">Ella</div>
                    <!--<img src="{{URL::to('/')}}/application/storage/app/product/{{$productbycatids->f_pic}}" sizes="(min-width: 1100px) 870px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="{{$productbycatids->name}}" size="870" loading="lazy" class="motion-reduce ls-is-cached lazyloaded" ><span class="data-lazy-loading"></span><div class="media-loading" data-title="Ella">Ella</div>-->
                    <a class="card-link" href="{{URL::to('/')}}/details/{{$productbycatids->id}}" title="(Product 18) Sample - Computers &amp; Accessories For Sale"></a>
                </div><div class="card-product__group group-right"><div class="card-product__group-item card-quickview card-quickviewIcon show-mb default">
                                <!--<button type="button" title="Quick View" class="quickview-icon" data-product-id="6679625138266" data-open-quick-view-popup="" data-product-handle="home-lementum-de-cras-hamo-dincidunts">-->
                                <!--    <span class="visually-hidden">Quick View</span>-->
                                <!--    <span class="text">-->
                                <!--        Quick View-->
                                <!--    </span>-->
                                <!--    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg>-->
                                <!--</button>-->
                            </div></div>
</div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center">
                <div class="wrapper-title-vendor  card-title-ellipsis">
                    <a class="card-title link-underline card-title-ellipsis card-title-change" href="{{URL::to('/')}}/details/{{$productbycatids->id}}" data-product-title="{{$productbycatids->name}}" >
                        <span class="text" >
                            {{$productbycatids->name}}
                            <!--<span data-change-title=""> - Black</span>-->
                        </span>
                    </a>
                </div>
                
<!--<div class="card-review clearfix halo-productReview">-->
<!--                        <span class="shopify-product-reviews-badge" data-id="6679625138266"></span>-->
<!--                    </div>-->
    <!--<div class="card-summary card-list__hidden">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos. Donec pretium egestas sapien et mollis. Vestibulum ante ipsum primis in faucibus orci...</div>-->
<!--<div class="card-price">-->
<!--                        <div class="price ">-->
<!--    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$49.00</span></span></dd>-->
<!--        </div>-->
<!--        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$49.00</span></span></dd></div>-->
<!--        <small class="unit-price caption hidden">-->
<!--            <dt class="visually-hidden">Unit price</dt>-->
<!--            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>-->
<!--        </small>-->
<!--    </dl>-->
<!--</div>-->

<!--                    </div></div><div class="card-swatch text-left clearfix" id="product-swatch-6679625138266">-->
<!--        <ul class="swatch list-unstyled"><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label is-active" data-value="black" data-variant-id="39724526698586" title="Black" data-variant-img="//new-ella-demo.myshopify.com/cdn/shop/products/product-app-2_1da9eefd-f3e4-461f-857b-09397f3d6cf3_800x.jpg?v=1640334216"><span class="pattern" style="background-color: black; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span>black</label><span class="tooltip">Black-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="beige" data-variant-id="39724526862426" title="Beige"><span class="pattern" style="background-color: beige; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123050)"></span>beige</label><span class="tooltip">Beige-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="slategray" data-variant-id="39724527026266" title="Slategray"><span class="pattern" style="background-color: slategray; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span>slategray</label><span class="tooltip">Slategray-->
<!--</span></div></li><li class="item"><div class="item-wrapper clearfix"><label class="swatch-label" data-value="sandybrown" data-variant-id="39724527190106" title="Sandybrown"><span class="pattern" style="background-color: sandybrown; background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span>sandybrown</label><span class="tooltip">Sandybrown-->
<!--</span></div></li></ul>-->
    </div>

<!--<div class="wrapper__card show-wishlist show-mb"><div class="card-action">-->
<!--                            <form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="form-6679625138266-template--14613100560474__16454136937e8b1e52" data-product-id="6679625138266" enctype="multipart/form-data"><a class="button button-ATC" href="https://new-ella-demo.myshopify.com/products/home-lementum-de-cras-hamo-dincidunts" data-quickshop-popup="" data-product-handle="home-lementum-de-cras-hamo-dincidunts">Quick Add-->
<!--</a></form>-->
<!--<div class="variants-popup custom-scrollbar">-->
<!--                <script>window.quick_view_inven_array_6679625138266 = {'39724526698586': '10','39724526731354': '10','39724526764122': '10','39724526796890': '10','39724526829658': '10','39724526862426': '10','39724526895194': '10','39724526927962': '10','39724526960730': '10','39724526993498': '10','39724527026266': '10','39724527059034': '10','39724527091802': '10','39724527124570': '10','39724527157338': '10','39724527190106': '10','39724527222874': '10','39724527255642': '10','39724527288410': '10','39724527321178': '10',};</script><a href="https://new-ella-demo.myshopify.com/?fts=0#" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="swatch-form-6679625138266-template--14613100560474__16454136937e8b1e52-" data-id="product-actions-6679625138266" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="0" style="display: none;">-->
<!--                    <label class="form-label">Color: <span class="label-value-1">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625138266-template--14613100560474__16454136937e8b1e52" data-index="option1" value="Black" id="SingleOptionSelector0-Black-6679625138266-template--14613100560474__16454136937e8b1e52">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector0-Black-6679625138266-template--14613100560474__16454136937e8b1e52"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element beige available" data-value="Beige">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625138266-template--14613100560474__16454136937e8b1e52" data-index="option1" value="Beige" id="SingleOptionSelector0-Beige-6679625138266-template--14613100560474__16454136937e8b1e52">-->
<!--                                <label class="single-label" title="Beige" for="SingleOptionSelector0-Beige-6679625138266-template--14613100560474__16454136937e8b1e52"><span class="pattern" style="background-color: beige;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625138266-template--14613100560474__16454136937e8b1e52" data-index="option1" value="Slategray" id="SingleOptionSelector0-Slategray-6679625138266-template--14613100560474__16454136937e8b1e52">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector0-Slategray-6679625138266-template--14613100560474__16454136937e8b1e52"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625138266-template--14613100560474__16454136937e8b1e52" data-index="option1" value="Sandybrown" id="SingleOptionSelector0-Sandybrown-6679625138266-template--14613100560474__16454136937e8b1e52">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector0-Sandybrown-6679625138266-template--14613100560474__16454136937e8b1e52"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span></label>-->
<!--                            </div></div><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-2">XS</span></label><div class="swatch-element xs available" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52" data-index="option2" value="XS" id="SingleOptionSelector1-XS-6679625138266-template--14613100560474__16454136937e8b1e52">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector1-XS-6679625138266-template--14613100560474__16454136937e8b1e52">XS</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--<div class="swatch-element s available" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52" data-index="option2" value="S" id="SingleOptionSelector1-S-6679625138266-template--14613100560474__16454136937e8b1e52">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector1-S-6679625138266-template--14613100560474__16454136937e8b1e52">S</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--<div class="swatch-element m available" data-value="M">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52" data-index="option2" value="M" id="SingleOptionSelector1-M-6679625138266-template--14613100560474__16454136937e8b1e52">-->
<!--                                <label class="single-label" title="M" for="SingleOptionSelector1-M-6679625138266-template--14613100560474__16454136937e8b1e52">M</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--<div class="swatch-element l available" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52" data-index="option2" value="L" id="SingleOptionSelector1-L-6679625138266-template--14613100560474__16454136937e8b1e52">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector1-L-6679625138266-template--14613100560474__16454136937e8b1e52">L</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--<div class="swatch-element xl available" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52" data-index="option2" value="XL" id="SingleOptionSelector1-XL-6679625138266-template--14613100560474__16454136937e8b1e52">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector1-XL-6679625138266-template--14613100560474__16454136937e8b1e52">XL</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        















<!--</div><select name="id" id="ProductSelect-6679625138266-template--14613100560474__16454136937e8b1e52" class="selector-wrapper-hidden" style="display: none;"><option value="39724526698586" data-value="39724526698586">Black / XS</option><option value="39724526731354" data-value="39724526731354">Black / S</option><option value="39724526764122" data-value="39724526764122">Black / M</option><option value="39724526796890" data-value="39724526796890">Black / L</option><option value="39724526829658" data-value="39724526829658">Black / XL</option><option value="39724526862426" data-value="39724526862426">Beige / XS</option><option value="39724526895194" data-value="39724526895194">Beige / S</option><option value="39724526927962" data-value="39724526927962">Beige / M</option><option value="39724526960730" data-value="39724526960730">Beige / L</option><option value="39724526993498" data-value="39724526993498">Beige / XL</option><option value="39724527026266" data-value="39724527026266">Slategray / XS</option><option value="39724527059034" data-value="39724527059034">Slategray / S</option><option value="39724527091802" data-value="39724527091802">Slategray / M</option><option value="39724527124570" data-value="39724527124570">Slategray / L</option><option value="39724527157338" data-value="39724527157338">Slategray / XL</option><option value="39724527190106" data-value="39724527190106">Sandybrown / XS</option><option value="39724527222874" data-value="39724527222874">Sandybrown / S</option><option value="39724527255642" data-value="39724527255642">Sandybrown / M</option><option value="39724527288410" data-value="39724527288410">Sandybrown / L</option><option value="39724527321178" data-value="39724527321178">Sandybrown / XL</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625138266-template--14613100560474__16454136937e8b1e52-">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--            </div>-->
<!--                        </div><div class="card-action__group card-list__hidden">-->
<!--    <div class="card-action">-->
<!--        <form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="form-6679625138266-template--14613100560474__16454136937e8b1e52list" data-product-id="6679625138266" enctype="multipart/form-data"><a class="button button-ATC" href="https://new-ella-demo.myshopify.com/products/home-lementum-de-cras-hamo-dincidunts" data-quickshop-popup="">Quick Add</a></form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="card-action__group variants-popup card-list__hidden">-->
<!--    <div class="card-action variants-popup-form"><div class="custom-scrollbar">-->
<!--                        <script>window.quick_view_inven_array_6679625138266 = {'39724526698586': '10','39724526731354': '10','39724526764122': '10','39724526796890': '10','39724526829658': '10','39724526862426': '10','39724526895194': '10','39724526927962': '10','39724526960730': '10','39724526993498': '10','39724527026266': '10','39724527059034': '10','39724527091802': '10','39724527124570': '10','39724527157338': '10','39724527190106': '10','39724527222874': '10','39724527255642': '10','39724527288410': '10','39724527321178': '10',};</script><a href="https://new-ella-demo.myshopify.com/?fts=0#" class="variants-popup-close" data-cancel-quickshop-popup="" alt="Close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg>Close</a>-->
<!--<div class="variants-popup-content text-center" data-quickshop=""><form action="https://new-ella-demo.myshopify.com/cart/add" method="post" class="variants" id="swatch-form-6679625138266-template--14613100560474__16454136937e8b1e52-list" data-id="product-actions-6679625138266list" enctype="multipart/form-data"><div class="selector-wrapper selector-wrapper-1 swatch option-color" data-option-index="0" data-option-position="0">-->
<!--                    <label class="form-label">Color: <span class="label-value-1">Black</span></label><div class="swatch-element black available" data-value="Black">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625138266-template--14613100560474__16454136937e8b1e52list" data-index="option1" value="Black" id="SingleOptionSelector0-Black-6679625138266-template--14613100560474__16454136937e8b1e52list">-->
<!--                                <label class="single-label" title="Black" for="SingleOptionSelector0-Black-6679625138266-template--14613100560474__16454136937e8b1e52list"><span class="pattern" style="background-color: black;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/black.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element beige available" data-value="Beige">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625138266-template--14613100560474__16454136937e8b1e52list" data-index="option1" value="Beige" id="SingleOptionSelector0-Beige-6679625138266-template--14613100560474__16454136937e8b1e52list">-->
<!--                                <label class="single-label" title="Beige" for="SingleOptionSelector0-Beige-6679625138266-template--14613100560474__16454136937e8b1e52list"><span class="pattern" style="background-color: beige;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/beige.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element slategray available" data-value="Slategray">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625138266-template--14613100560474__16454136937e8b1e52list" data-index="option1" value="Slategray" id="SingleOptionSelector0-Slategray-6679625138266-template--14613100560474__16454136937e8b1e52list">-->
<!--                                <label class="single-label" title="Slategray" for="SingleOptionSelector0-Slategray-6679625138266-template--14613100560474__16454136937e8b1e52list"><span class="pattern" style="background-color: slategray;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/slategray.png?123050)"></span></label>-->
<!--                            </div><div class="swatch-element sandybrown available" data-value="Sandybrown">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-0-6679625138266-template--14613100560474__16454136937e8b1e52list" data-index="option1" value="Sandybrown" id="SingleOptionSelector0-Sandybrown-6679625138266-template--14613100560474__16454136937e8b1e52list">-->
<!--                                <label class="single-label" title="Sandybrown" for="SingleOptionSelector0-Sandybrown-6679625138266-template--14613100560474__16454136937e8b1e52list"><span class="pattern" style="background-color: sandybrown;background-image: url(//new-ella-demo.myshopify.com/cdn/shop/files/sandybrown.png?123050)"></span></label>-->
<!--                            </div></div><div class="selector-wrapper selector-wrapper-2 swatch" data-option-index="1">-->
<!--                    <label class="form-label">Size: <span class="label-value-2">XS</span></label><div class="swatch-element xs available" data-value="XS">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52list" data-index="option2" value="XS" id="SingleOptionSelector1-XS-6679625138266-template--14613100560474__16454136937e8b1e52list">-->
<!--                                <label class="single-label" title="XS" for="SingleOptionSelector1-XS-6679625138266-template--14613100560474__16454136937e8b1e52list">XS</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--<div class="swatch-element s available" data-value="S">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52list" data-index="option2" value="S" id="SingleOptionSelector1-S-6679625138266-template--14613100560474__16454136937e8b1e52list">-->
<!--                                <label class="single-label" title="S" for="SingleOptionSelector1-S-6679625138266-template--14613100560474__16454136937e8b1e52list">S</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--<div class="swatch-element m available" data-value="M">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52list" data-index="option2" value="M" id="SingleOptionSelector1-M-6679625138266-template--14613100560474__16454136937e8b1e52list">-->
<!--                                <label class="single-label" title="M" for="SingleOptionSelector1-M-6679625138266-template--14613100560474__16454136937e8b1e52list">M</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--<div class="swatch-element l available" data-value="L">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52list" data-index="option2" value="L" id="SingleOptionSelector1-L-6679625138266-template--14613100560474__16454136937e8b1e52list">-->
<!--                                <label class="single-label" title="L" for="SingleOptionSelector1-L-6679625138266-template--14613100560474__16454136937e8b1e52list">L</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        
<!--<div class="swatch-element xl available" data-value="XL">-->
<!--                                <input class="single-option" type="radio" name="SingleOptionSelector-1-6679625138266-template--14613100560474__16454136937e8b1e52list" data-index="option2" value="XL" id="SingleOptionSelector1-XL-6679625138266-template--14613100560474__16454136937e8b1e52list">-->
<!--                                <label class="single-label" title="XL" for="SingleOptionSelector1-XL-6679625138266-template--14613100560474__16454136937e8b1e52list">XL</label><a class="single-action clearfix" href="https://new-ella-demo.myshopify.com/?fts=0#" data-open-notify-popup="" data-variant-id=""><span class="text">Notify me</span></a></div>-->
                        















<!--</div><select name="id" id="ProductSelect-6679625138266-template--14613100560474__16454136937e8b1e52list" class="selector-wrapper-hidden" style="display: none;"><option value="39724526698586" data-value="39724526698586">Black / XS</option><option value="39724526731354" data-value="39724526731354">Black / S</option><option value="39724526764122" data-value="39724526764122">Black / M</option><option value="39724526796890" data-value="39724526796890">Black / L</option><option value="39724526829658" data-value="39724526829658">Black / XL</option><option value="39724526862426" data-value="39724526862426">Beige / XS</option><option value="39724526895194" data-value="39724526895194">Beige / S</option><option value="39724526927962" data-value="39724526927962">Beige / M</option><option value="39724526960730" data-value="39724526960730">Beige / L</option><option value="39724526993498" data-value="39724526993498">Beige / XL</option><option value="39724527026266" data-value="39724527026266">Slategray / XS</option><option value="39724527059034" data-value="39724527059034">Slategray / S</option><option value="39724527091802" data-value="39724527091802">Slategray / M</option><option value="39724527124570" data-value="39724527124570">Slategray / L</option><option value="39724527157338" data-value="39724527157338">Slategray / XL</option><option value="39724527190106" data-value="39724527190106">Sandybrown / XS</option><option value="39724527222874" data-value="39724527222874">Sandybrown / S</option><option value="39724527255642" data-value="39724527255642">Sandybrown / M</option><option value="39724527288410" data-value="39724527288410">Sandybrown / L</option><option value="39724527321178" data-value="39724527321178">Sandybrown / XL</option>-->
<!--        </select>-->
        
<!--        <div class="product-card__button2">-->
<!--            <input type="hidden" name="quantity" value="1">-->
<!--            <button data-btn-addtocart="" class="button button2 add-to-cart-btn" type="submit" data-form-id="#swatch-form-6679625138266-template--14613100560474__16454136937e8b1e52-list">Add</button></div>-->
<!--    </form>-->
<!--</div>-->
<!--                    </div></div>-->
<!--</div>-->
<!--<div class="card-product__group-item card-wishlist">-->
<!--                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" href="#" data-wishlist="" data-wishlist-handle="home-lementum-de-cras-hamo-dincidunts" data-product-id="6679625138266">-->
<!--                                <span class="visually-hidden">Add to wishlist</span>-->
<!--                                <span class="text">-->
<!--                                    Add to wishlist-->
<!--                                </span>-->
<!--                                <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg>-->
<!--                            </button>-->
<!--                        </div></div>-->
                        </div>
    </div>
</div>


    </div>
    
 @endforeach   
    
    
    
    
    </div>
    <!--<div class="product-infinite-scroll text-center " data-product-infinite="">-->
    <!--                                    <button type="button" class="button button--secondary" data-collection="home-19-collection-recommended-for-you" data-limit="10" data-swipe="false" data-page="2" data-total="12" data-image-ratio="adapt" sectionid="template--14613100560474__16454136937e8b1e52"><span>See More</span></button>-->
    <!--                                </div>-->
                                    </div>
</div>
        </div>
    </div>
@endforeach
</div>
<div id="shopify-section-template--14613100560474__1646796311fd63c1ac" class="shopify-section sections-rich-text"><link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-rte.css" media="all" onload="this.media=&#39;all&#39;">
<link rel="stylesheet" href="{{URL::to('/')}}/public/template/component-rich-text.css" media="all" onload="this.media=&#39;all&#39;">
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-rte.css?v=74468535300400368301673427934" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//new-ella-demo.myshopify.com/cdn/shop/t/184/assets/component-rich-text.css?v=133778792104105756981685700097" rel="stylesheet" type="text/css" media="all" /></noscript>


<section style="padding-bottom:10px!important;">
    <div class="halo-block-header text-left block-title--style1 enable_border_title_style2" style="text-align:center!important; margin-top:30px;">
                    <h3 class="title" style="padding-bottom:0px!important; margin-bottom:0px!important;">
                        <span class="text" style="font-size:35px!important; padding-bottom:0px!important; margin-bottom:0px!important; text-decoration:none!important; text-transform:uppercase!important; font-family: scratchones !important;">Our Brands</span>
                        </h3>
                        <p style=" padding-top:0px!important; margin-top:0px;">
                        <span style="color:red; font-size:50px;">.</span>
                        <span style="color:green; font-size:50px;">.</span>
                        <span style="color:yellow; font-size:50px;">.</span>
                        </p>
                        
                        </div>
    <style>
        @media only screen and (max-width: 1025px) {
             .bannerImage{
                width: 50%;
                height: 50%;
              }
            }
    </style>
    <?php $brands=\DB::table('medias')->where('link_id','brand')->get();?>
    <div class="brandslider row" style="margin-bottom:20px;">
        @foreach($brands as $brand)
        <div class="col-2">
            <img class="bannerImage" src="{{URL::to('/')}}/application/storage/app/{{$brand->source}}" height="180" style="border-radius:100px!important;"/>
            <p style="text-align:center;">{{$brand->name}}</p>
        </div>
        @endforeach
    </div>
</section>


@endsection