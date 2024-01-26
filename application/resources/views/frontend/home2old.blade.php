@extends('layouts.FrontendLayout2')
@section('content')

        <div class="master-column-wrapper">
            



<div>


    <style type="text/css">
        .flex-container {
            -ms-box-orient: horizontal;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -moz-flex;
            display: -webkit-flex;
            display: flex;
        }

        .main-slider-wrapper .slider-wrapper img,
        .main-slider-wrapper .slider-wrapper > .nivoSlider img {
            height: 25vw !important;
        }

        .hover-color {
            color: #E30047;
        }
        .carousel-inner{
            height: 385px!important;
        }
    </style>

    <div class="main-slider-wrapper flex-container">
        <div style="-webkit-flex: 65; -ms-flex: 65; -o-flex: 65; flex: 65;">
            
<?php $sliders=DB::table('medias')->where('link_id','slider')->get();?>
@if($sliders)
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
      <?php $i=0;?>
      @foreach($sliders as $slider)
    <button type="button" data-bs-target="#demo" data-bs-slide-to="{{$i}}" @if($i==0) class="active" @endif></button>
    <?php $i++;?>
    @endforeach
    <!--<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>-->
    <!--<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>-->
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
      <?php $j=0;?>
      @foreach($sliders as $slider)
    <div class="carousel-item  @if($j==0) active @endif">
      <img src="{{URL::to('/')}}/application/storage/app/{{$slider->source}}" alt="Giftmart" class="d-block" style="width:100%">
    </div>
    <?php $j++;?>
    @endforeach
    <!--<div class="carousel-item">-->
    <!--  <img src="chicago.jpg" alt="Chicago" class="d-block" style="width:100%">-->
    <!--</div>-->
    <!--<div class="carousel-item">-->
    <!--  <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">-->
    <!--</div>-->
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!--<div class="container-fluid mt-3">-->
<!--  <h3>Carousel Example</h3>-->
<!--  <p>The following example shows how to create a basic carousel with indicators and controls.</p>-->
<!--</div>-->






<!--    <div class="slider-wrapper anywhere-sliders-nivo-slider theme- no-captions" data-imagescount="3" data-sliderhtmlelementid="WidgetSlider-home_page_main_slider-1"  data-effect="fade" data-slices="15" data-boxcols="8" data-boxrows="4" data-animspeed="500" data-pausetime="3000" data-directionnav="true" data-controlnav="false" data-controlnavthumbs="false" data-pauseonhover="true" data-prevtext="Prev" data-nexttext="Next">-->
            
<!--            <div id="WidgetSlider-home_page_main_slider-1" class="nivoSlider">-->
<!--                @foreach($sliders as $slider)-->
<!--                <a href="#" class="nivo-imageLink" style="display: none;">                    -->
<!--                <img src="{{URL::to('/')}}/application/storage/app/{{$slider->source}}" data-thumb="{{URL::to('/')}}/application/storage/app/{{$slider->source}}" alt="Shop onlone, online shopping site, shop" style="width: 915px; visibility: hidden; display: inline;">                -->
<!--                </a>      -->
<!--                @endforeach-->
                
<!--                <img class="nivo-main-image" src="{{URL::to('/')}}/application/storage/app/{{$sliders[0]->source}}" style="display: inline; height: 342px; width: 915px;">-->
<!--                <div class="nivo-caption"></div>-->
<!--                    <div class="nivo-directionNav">-->
<!--                        <a class="nivo-prevNav">Prev</a>-->
<!--                        <a class="nivo-nextNav">Next</a>-->
<!--                    </div>-->
<!--            </div>-->
<!--    </div>-->
@endif

        </div>
        <div style="-webkit-flex: 1; -ms-flex: 1; -o-flex: 1; flex: 1;"></div>
        <div style="-webkit-flex: 25; -ms-flex: 25; -o-flex: 25; flex: 25;">


    <div class="slider-wrapper anywhere-sliders-nivo-slider theme- no-captions" data-imagescount="1" data-sliderhtmlelementid="WidgetSlider-home_page_main_slider_right_side-45" data-imagesstring="&lt;a href=&quot;https://giftmart.express/daily-needs&quot;&gt;                    &lt;img src=&quot;https://giftmart.express/assets/0241084.png&quot; data-thumb=&quot;https://giftmart.express/assets/0241084.png&quot; alt=&quot;Shop onlone, online shopping site, shop&quot; /&gt;                &lt;/a&gt;" data-effect="fade" data-slices="15" data-boxcols="8" data-boxrows="4" data-animspeed="500" data-pausetime="3000" data-directionnav="true" data-controlnav="false" data-controlnavthumbs="false" data-pauseonhover="true" data-prevtext="Prev" data-nexttext="Next">
<?php $banner1=DB::table('medias')->where('link_id','banner')->orderBy('id','desc')->first();?>
@if($banner1)
            <a href="#">
                <img class="nivo-main-image" src="{{URL::to('/')}}/application/storage/app/{{$banner1->source}}" alt="Shop onlone, online shopping site, shop">
            </a>
@endif
    <div class="nivo-caption" style="display: block;"></div>
    </div>

        </div>
    </div>
<?php $cats=DB::table('cats')->where('parent','0')->get();?>
 @foreach($cats as $cat)
 <?php $items=DB::table('products')->whereRaw('FIND_IN_SET("'.$cat->id.'",cat_ids)')->limit(8)->get();?>
 @if(count($items)>=4)
<div class="title">
            <h3>{{$cat->name}}</h3>
        </div>
        
            <div class="item-grid">
        @foreach($items as $r_product)
                <div class="item-box">
                    <div class="product-item" data-productid="144404">
                        
                        <div class="picture">
                            <a href="{{route('details',['product_id'=>$r_product->id])}}" title="{{$r_product->name}}">
                                <img alt="{{$r_product->name}}" src="{{URL::to('/')}}/application/storage/app/product/{{$r_product->f_pic}}" title="{{$r_product->name}}">
                            </a>
                        </div>
                        <div class="details">
                            <div class="color-squares-wrapper"></div>
                            <h2 class="product-title">
                                <a href="{{route('details',['product_id'=>$r_product->id])}}">{{$r_product->name}}</a>
                            </h2>
                            <div class="add-info">
                                
                                <div class="prices">
                                    <span class="price actual-price">Tk {{$r_product->price}}</span>
                                                                </div>
                                
                    
                                <div class="description">
                                    {{$r_product->brief}}
                                </div>
                    
                                <div class="buttons-lower btn-group" style="width:100%">
                                        <form action="{{URL::to('/')}}/carts/{{$r_product->id}}" method="post" novalidate="novalidate" style="width: 100%!important;">
                                                    @csrf                                                   
                                                    <input type="hidden" value="{{$r_product->price}}" name="product_price">
                                                    <input type="hidden" value="{{$r_product->id}}" name="product_id">
                                                    <input id="product_buy_item_quantity-value1544" type="hidden" name="qty" value="1">
                                                    <button type="submit" title="ADD TO CART" style="width:100%" >
                                                        <i class=" fa fa-shopping-cart"></i>
                                                    </button>
                                                </form>
                                                
                                                <a href="{{URL::to('/')}}/buynow/{{$r_product->id}}" style="width: 100%!important;">
                                                    <button type="button" title="BUY NOW" >
                                                    <i class=" fa fa-shopping-basket"></i>
                                                </button></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
            </div>



@endif
@endforeach


<style>
    @media (max-width: 800px) {
        .flex-container {
            flex-direction: column;
        }

        .main-slider-wrapper .slider-wrapper img, .main-slider-wrapper .slider-wrapper > .nivoSlider img {
            height: 100% !important;
        }
    }
</style>












<script>
    $(function () {
        $(".center-2 .custom-carousel:eq(0) .carousel-title span").html("Featured Brands");
        $(".center-2 .custom-carousel:eq(1)").addClass("offers-not-resist");
        $(".center-2 .custom-carousel:eq(1) .carousel-title span").html("Offers You Can't Resist");
    });
</script>

        </div>
        
    </div>

    

@endsection