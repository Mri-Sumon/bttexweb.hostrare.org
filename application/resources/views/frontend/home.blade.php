@extends('layouts.FrontendLayout2')
@section('content')
<style>
.slider-wrapper .carousel-inner img{
    height:330px !important;
}
    @media (max-width:550px){
        .slider-wrapper .carousel-inner img{
            height:100px !important;
        }
    }
</style>
<section class="slider_area" id="slider_area"  style="background-color: #fff;padding-bottom: 10px;">
    <div class="container mobile-padding-top-0" style="padding-top: 10px;" >
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 " style="padding: 0px">
                <div id="wrapper">
                    <div class="slider-wrapper theme-default">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators" >
                                @foreach($slider as $key=>$sliders)
                                <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="@if($key==0) active @endif"></li>
                                @endforeach
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                @foreach($slider as $key=>$sliders)
                                <div class="item @if($key==0) active @endif">
                                    <a href="#">
                                        <img style="width: 100%" src="{{URL::to('/')}}/sliders/{{$sliders->img}}" alt="Sellwings">  
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!--content area start-->

        <section class="best_seller_product"  style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">
            
<style>
 .owl-next{
       display: none;
    }
  .owl-prev{
        display: none;
    }
    @media screen and (max-width: 767px) {
    .owl-nav{
        display: none;
     }
         .price-text {
             
            font-weight: 600;
            display: inline-block;
            font-size: 10px !important;
            color: #fff;
            position: absolute;
            bottom: 2px!important;
            float: left;
            background-color: #0089cf;
            height: 16px !important;
            border-top-left-radius: 60px;
            border-bottom-left-radius: 60px;
            width: 38px !important;
            text-align: center;
            right: 0;
        }
        .percentage-span-new {
             background-image: url(/application/storage/app/slider/flash-deal-percentage.png);
             background-repeat: no-repeat;
             width: 35px !important;
             height: 35px !important;
             position: absolute !important; 
             top: 0 !important;
             right: 1px !important;
             background-size: 34px 34px !important;
             text-align: center !important;
             color: #fff !important;
             font-weight: 500 !important;
             font-size: 10px !important;
             z-index: 2;
         }
        .percentage-amount-new {
            font-size: 11px !important;;
            font-weight: 500;
            padding-left: 8px !important;;
            padding-top: 9px !important;;
            line-height: 1;
             display: inline;
        }
        .percentage-sign-new {
            font-size: 9px !important;;
            padding-top: 8px !important;;
        }
         .percentage-discount-amount-new {
            display: inline;
            width: 100%;
            font-size: 8px !important;;
            padding: 0 !important;
            margin: 0 !important;
            line-height: 5px ;
        }
    }
    .owl-next{
        outline: none;
    }
  .owl-prev{
        display: none;
    }
    .product {
        border: 1px solid #e80a0a;
    }
    .owl-nav {
        position: absolute;
        top: 39%;
        height: 0;
        font-size: 29px;
        width: 100%;
    }
    
    .owl-next{
        position: absolute;
        right: -30px
    }
    .percentage-span-new {
    background-image: url(/application/storage/app/slider/flash-deal-percentage.png);
    background-repeat: no-repeat;
    width: 45px;
    height: 45px;
    position: absolute;
    top: 0;
    right: 1px;
    background-size: 44px 44px;
    text-align: center;
    color: #fff;
    font-weight: 700;
    font-size: 12px;
    z-index: 2;
}
.percentage-amount-new, .percentage-discount-amount-new, .percentage-sign-new {
    font-family: SolaimanLipi,Helvetica,Verdana,'Noto Sans Bengali';
    color: #fff;
    float: left;
}

.percentage-amount-new {
    font-size: 15px;
    font-weight: 700;
    padding-left: 11px;
    padding-top: 9px;
    line-height: 1;
     display: inline;
}
.percentage-sign-new {
    font-size: 11px;
    padding-top: 10px;
}
 .percentage-discount-amount-new {
    display: inline;
    width: 100%;
    font-size: 10px;
    padding: 0 !important;
    margin: 0 !important;
    line-height: 7px;
}
.price-text {
    font-weight: 600;
    display: inline-block;
    font-size: 15px;
    color: #fff;
    position: absolute;
    bottom: 10px; 
    float: left;
    background-color: #0089cf;
    height: 23px;
    border-top-left-radius: 60px;
    border-bottom-left-radius: 60px;
    width: 60px;
    text-align: center;
    right: 0;
}
.product-ca a:hover {
    background: #08c !important;
    border-color: #08c !important;
    color: #ffffff !important;
}
</style>
<link rel="stylesheet" href="{{URL::to('/')}}/css/new/slider-asset/css/owl.carousel.min.css"> 
<div class="container" >
<!--<div class="row area-mobile-on" >-->
    <div class="row" >
        <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12 mobile-border-of product-ca" style="background: #fff;padding: 5px;">
            <h4 class="cat-title" style="margin-bottom: 5px !important;">প্রোডাক্ট ক্যাটেগরীজ</h4>
    @php
        $category=DB::table('cats')->where('status','active')->get();
    @endphp
        @foreach($category as $catss)
                <a href="{{URL::to('/')}}/shop/cat/{{$catss->id}}" class="btn btn-success" style="margin: 2px 4px 2px 0;background: rgb(255, 239, 207);; font-size: 13px;border: 1px solid #ccc;color:#777;border-radius: 3px;padding: 0.3846em;line-height: 1.2;"> {{$catss->name}}</a>
        @endforeach
        </div> 
    </div>

        <div class="row" style="margin-top:20px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of" style="background:rgb(255, 239, 207);padding: 5px;">
                <a href="#" style="font-size: 20px; font-weight: bold; color: #F16E52;">
                    <img style="width: 100px;margin-left:6px" src="{{URL::to('/')}}/css/new/image/hot-deal-logo.gif" title="Sellwings">
                    </a>
                <a style="color: #EF4523;font-weight: bold;font-size: 18px;" href="#" class="pull-right">
                    সকল  হট ডিল <i class="fa fa-angle-right" ></i>
                </a>

            <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" style="background: rgb(255, 239, 207);;padding: 0px;margin-bottom: 20px;padding-top: 15px  " >
                <div class="slider">
                    <ul class="product-category owl-carousel nav">
                        @foreach($hot_product_1 as $hot_products_1)
                        <li class="product">
                            <a href="{{route('details',['product_id'=>$hot_products_1->id])}}">
                                @if($hot_products_1->discount_type=='percent')
                                <span class="percentage-span-new">
                                    <font class="percentage-amount-new">{{$hot_products_1->discount_amount}}</font><font class="percentage-sign-new">%</font><font class="percentage-discount-amount-new">ছাড়</font>
                                </span>
                                @else
                                <span class="percentage-span-new">
                                    <font class="percentage-amount-new">{{$hot_products_1->discount_amount}}</font><font class="percentage-sign-new"></font><font class="percentage-discount-amount-new">ছাড়</font>
                                </span>
                                @endif
                                <span class="price-text">৳&nbsp;{{$hot_products_1->sale_price}}</span>
                                <img src="{{URL::to('/')}}/application/storage/app/product/{{$hot_products_1->f_pic}}" alt="Sellwings" title="Sellwings"/>
                            </a> 
                        </li>
                        @endforeach
                    </ul>
                </div> 
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" style="background: rgb(255, 239, 207);padding: 0px;margin-bottom: 20px; " >
                <div class="slider">
                    <ul class="product-category owl-carousel nav">
                        @foreach($hot_product_2 as $hot_products_2)
                        <li class="product">
                            <a href="{{route('details',['product_id'=>$hot_products_2->id])}}">
                                @if($hot_products_2->discount_type=='percent')
                                <span class="percentage-span-new">
                                    <font class="percentage-amount-new">{{$hot_products_2->discount_amount}}</font><font class="percentage-sign-new">%</font><font class="percentage-discount-amount-new">ছাড়</font>
                                </span>
                                @else
                                <span class="percentage-span-new">
                                    <font class="percentage-amount-new">{{$hot_products_2->discount_amount}}</font><font class="percentage-sign-new"></font><font class="percentage-discount-amount-new">ছাড়</font>
                                </span>
                                @endif
                                <span class="price-text">৳&nbsp;{{$hot_products_2->sale_price}}</span>
                                <img src="{{URL::to('/')}}/application/storage/app/product/{{$hot_products_2->f_pic}}" alt="kalerhaat.com" title="kalerhaat.com"/>
                            </a> 
                        </li>
                        @endforeach
                    </ul>
                </div> 
            </div>
        </div>
    </div>



<style>

</style>

    
    <div class="row" >
        <div class="mobile-padding-10 col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of" style="background:#fff;padding: 0;">
            <h4 class="cat-title" style="margin-bottom: 7px !important;padding-top: 20px;padding-bottom: 10px;">প্রয়োজনীয় প্রোডাক্ট     </h4>
                <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" style=" padding: 0px;margin-bottom: 20px;  border-right:0;border-bottom:0"  id="Product_Ajax">
                    @foreach($products as $product)
                    <div class="col-sm-2 col-xs-6  product-hover-area product-custom-area" style="padding: 0;">
                        <div class="col-sm-12 col-xs-12 padding-zero " style="background-color: #fff; border-radius: 0;padding-bottom: 0;padding: 10px 10px 20px; border: 1px solid #ddd;"> 
                            <!--<div class="col-sm-12 col-xs-12 padding-zero " style=" padding: 0px;border: 1px solid #ebebeb; background: #fff; box-shadow: 0 7px 10px 0px rgba(23, 84, 116, 0.18);padding-bottom: 6px;"> -->
                            <a  style="padding: 0px;" class="img-hover col-sm-12 padding-zero" href="{{route('details',['product_id'=>$product->id])}}"  id="1646" >
                                <img class="img-responsive " style="margin: 0 auto;padding:10px;height:150px;width:100px; " src="{{URL::to('/')}}/application/storage/app/product/{{$product->f_pic}}" alt="{{$product->name}}">
                                <span id="productPrice1646" class="col-sm-12  col-xs-12 text-center" style="background: #fff;padding: 5px;display: block;line-height:18px;color: #D2691E;font-size: 14px;font-weight: bold;height: 50px;">
                                    <!--<div style="border-top: 1px solid #ccc;padding: 3px;">-->
                                    <div class="col-sm-12 text-center"  ><label style="display: block; font-size: 16px; color: #fca204; font-weight: 600; line-height: 20px;padding-top:20px"> ৳   {{$product->price}}</label> </div><!--</div>-->
                                </span>
                                <span id="productName1646" class="col-sm-12 text-center product-name-c" style="background: #fff;padding: 2px;padding-top: 5px;overflow: hidden;height: 40px; display: block;color:#525252;font-weight: 400;font-size: 14px !important; font-family: 'Work Sans',Arial,sans-serif;color:#777777">{{ Str::limit($product->name, 35) }}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center">{{$products->links()}}</div>
            </div>
        </div>
    </div>

<script>

    function MoreSubCategory(Obj)
    {

        serverPage = 'http://www.kalerhaat.com/ovation/MoreSubCategory/' + Obj;
        // alert(serverPage);
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                //alert(xmlhttp.responseText);
                document.getElementById("MoreSubCatArea").innerHTML = xmlhttp.responseText;


            }

            var scroll = document.getElementById('MoreSubCatS');
            scroll.scrollTop = scroll.scrollHeight;
            scroll.animate({scrollTop: scroll.scrollHeight}, "slow");
        };
        xmlhttp.send(null);


    }

</script>

<script src="{{URL::to('/')}}/css/new/slider-asset/js/jquery.min.js"></script>
<script src="{{URL::to('/')}}/css/new/slider-asset/js/owl.carousel.min.js"></script>

<script>

    $(document).ready(function () {
        //owl carousel

        if ($('.product-category').hasClass('owl-carousel')) {

            $('.owl-carousel').owlCarousel({
                items: 6,
                margin: 15,
                nav: true,
                dots: false,
                autoplay: true,
                slideBy: 6,
                autoplayHoverPause: true,
                rewind: true,
                responsive: {
                    0: {
                        items: 3
                    },
                    760: {
                        items: 3
                    },
                    960: {
                        items: 4
                    },
                    1170: {
                        items: 6
                    }
                }
            })
        }

    });
</script>        </section>

        <!--content area end-->
        
@endsection