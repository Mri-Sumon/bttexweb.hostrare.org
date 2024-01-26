@extends('layouts.Home0Layout')

@section('content')

    <section class="hero_section" style="background-color:#fff;">
        <!--<div class="popup-offer">
            <button class="popup-close"><i class="ion-android-close"></i></button>
            <a href="https://noorbookstore.com/offer">
                <img src="public/images/offer-popup-banner-1.webp" alt="Image">
            </a>
        </div>-->
        <div class=" container-fluid hero_slider owl-carousel" style="background-color:#fff;">
            @foreach($slider as $key=>$sliders)
            <div class="item">
                <div class="hero_banner">
                    <a href="#"><img class="xs-none" src="{{URL::to('/')}}/application/storage/app/product/{{$sliders->img}}" alt="Image"></a>
                    <a href="#"><img class="sm-none" src="{{URL::to('/')}}/application/storage/app/product/{{$sliders->img}}" alt="Image"></a>
                </div>
            </div>
            @endforeach
            <!--<div class="item">-->
            <!--    <div class="hero_banner">-->
            <!--        <img class="xs-none" src="{{URL::to('/')}}/application/storage/app/slider/banner12.jpg" alt="Image">-->
            <!--        <img class="sm-none" src="{{URL::to('/')}}/application/storage/app/slider/banner12.jpg" alt="Image">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--    <div class="hero_banner">-->
            <!--        <img class="xs-none" src="{{URL::to('/')}}/application/storage/app/slider/banner13.jpg" alt="Image">-->
            <!--        <img class="sm-none" src="{{URL::to('/')}}/application/storage/app/slider/banner13.jpg" alt="Image">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--    <div class="hero_banner">-->
            <!--        <img class="xs-none" src="{{URL::to('/')}}/application/storage/app/slider/banner14.jpg" alt="Image">-->
            <!--        <img class="sm-none" src="{{URL::to('/')}}/application/storage/app/slider/banner14.jpg" alt="Image">-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
    <!--Hero section ends-->
        <!-- Promo section starts -->
   <!---     <div class="promo_section xs-none">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="promo_box">
                        <div class="promo_icon">
                            <i class="fa fa-redo"></i>
                        </div>
                        <div class="promo_text">
                            <h3>Free Shipping Item</h3>
                            <p>Orders over ৳1000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promo_box">
                        <div class="promo_icon">
                            <i class="fa fa-redo"></i>
                        </div>
                        <div class="promo_text">
                            <h3>Money Back Guarantee</h3>
                            <p>100% Money back</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--->
    <!-- Promo section ends -->
      <!-- Category section starts -->
      <section class="category_section">
        <div class="container">
            
            <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12 mobile-border-of product-ca" style="background: #fff;padding: 5px;">
                <h4 class="cat-title" style="margin-bottom: 5px !important;">Product Category</h4>
                
    @php
        $category=DB::table('cats')->where('status','active')->get();
    @endphp
        @foreach($category as $catss)
            <a href="{{URL::to('/')}}/shop/cat/{{$catss->id}}" class="btn btn-success" style="margin: 2px 4px 2px 0;background-color:#29C4F4; color:#fff; font-size: 13px;border: 1px solid #ccc;border-radius: 3px;padding: 0.3846em;line-height: 1.2;">
            {{$catss->name}}</a>
        @endforeach
            </div> 
        </div>
            <!---<div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="section_title">
                            <h3>Shop by Category</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($category as $category)
                <div class="col-lg-4 col-md-6 col-6 xpx-7">
                    <div class="cat_wrapper">
                        <div class="cat_img">
                            <a href="{{route('cat.shop',['category_id'=>$category->id])}}"  class="category_item"><img src="{{URL::to('/')}}/application/storage/app/product/{{$category->image}}" alt="Image"></a>
                        </div>
                        <div class="cat_info">
                            <a href="{{route('cat.shop',['category_id'=>$category->id])}}">{{$category->name}}</a>
                        </div>
                    </div>
                </div>
                @endforeach   
            </div>-->
        </div>
    </section>
    <!-- Category section ends -->
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
            color: #ccc;
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
             background-image: url(/image/flash-deal-percentage.png);
             background-repeat: no-repeat;
             width: 35px !important;
             height: 35px !important;
             position: absolute !important; 
             top: 0 !important;
             right: 0px !important;
             left: 185px;
             background-size: 34px 34px !important;
             text-align: center !important;
             color: #ccc !important;
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
    /*right: 0px;*/
    left:130px;
    background-size: 44px 44px;
    text-align: center;
    color: #ccc;
    font-weight: 700;
    font-size: 12px;
    z-index: 2;
    margin-right: 16px;
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
    display: inline;
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
    /*right: 0;*/
    left:117px;
}
.product-ca a:hover {
    background: #08c !important;
    border-color: #08c !important;
    color: #ffffff !important;
}
</style>
<link rel="stylesheet" href="{{asset('css/frontend/owl.carousel.min.css')}}">

    <!-----Hot Deals Section Start------>
            <section class="best_seller_product"  style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">

        <div class="container" >
         <div class="row" style="margin-top:20px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-border-of" style="background:rgb(255, 239, 207);padding: 5px;">
                <a href="#" style="font-size: 20px; font-weight: bold; color: #F16E52;">
                    <img style="margin-left: 6px;height: 30px;" src="{{URL::to('/')}}/application/storage/app/slider/hot-deal-logo.gif" title="">
                    </a>
                <a style="color: #EF4523;font-weight: bold;font-size: 18px;" href="/shop" class="pull-right">
                    সকল  হট ডিল <i class="fa fa-angle-right" ></i>
                </a>

                <div class="col-lg-12 col-md-12 col-sm-12  col-xs-12" style="background: rgb(255, 239, 207);;padding: 0px;margin-bottom: 20px;padding-top: 15px  " >
                    <div class="slider">
                        <ul class="product-category owl-carousel nav">
                            @foreach($hot_product_1 as $hot_products_1)
                            <li class="product">
                                <a href="{{route('details',['product_id'=>$hot_products_1->id])}}">
                                    @if($hot_products_1->discount_type=='percent')
                                    <span class="percentage-span-new"><font class="percentage-amount-new">
                                        {{$hot_products_1->discount_amount}}
                                        </font><font class="percentage-sign-new">%</font><font class="percentage-discount-amount-new">ছাড়</font></span>
                                        @else
                                        <span class="percentage-span-new"><font class="percentage-amount-new">
                                            {{$hot_products_1->discount_amount}}
                                        </font><font class="percentage-sign-new"></font><font class="percentage-discount-amount-new">ছাড়</font></span>
                                        @endif
                                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$hot_products_1->f_pic}}" style="height:100% !important;" alt="" title=""/>
                                    
                                </a> 
                                <span class="price-text">৳ {{$hot_products_1->sale_price}}</span>
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
                                    <span class="percentage-span-new"><font class="percentage-amount-new">
                                        {{$hot_products_2->discount_amount}}
                                        </font><font class="percentage-sign-new">%</font><font class="percentage-discount-amount-new">ছাড়</font>
                                    </span>
                                    @else
                                    <span class="percentage-span-new"><font class="percentage-amount-new">
                                        {{$hot_products_2->discount_amount}}
                                        </font><font class="percentage-sign-new"></font><font class="percentage-discount-amount-new">ছাড়</font>
                                    </span>
                                    @endif
                                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$hot_products_2->f_pic}}" style="height:100% !important;"  alt="kalerhaat.com" title="kalerhaat.com"/>
                                </a> 
                                <span class="price-text">৳&nbsp;{{$hot_products_2->sale_price}}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div> 
                </div>
            </div>
            </div>
            </div>
    </section>
    <!-----Hot Deals Section Ends------->
     <!-- Product Showcase starts -->
     <section class="feature_product_wrap bg_pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title">
                        <h3>Featured Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 xpx-7">
                    <div class="feature_product v2">
                        <div class="feature_product_img">
                            <a href="{{route('details',['product_id'=>$product->id])}}" ><img src="{{URL::to('/')}}/application/storage/app/product/{{$product->f_pic}}" alt="Image"></a>
                        </div>
                        <div class="feature_product_info">
                            <h3 class="product_name"><a href="{{route('details',['product_id'=>$product->id])}}" >{{$product->name}}</a></h3>
                                <div class="product_price">
                                    <!--<span>৳ {{$product->price}}</span>-->
                                    @if($product->price == $product->sale_price)
                                <span>৳ {{$product->price}}</span>
                                @else
                                <span><del>৳ {{$product->price}}</del></span>  <span style="margin-left:5px;">৳ {{$product->sale_price}}</span>
                                @endif
                                <span class="add_to_wishlist" style="float:right;">
                                    <form action="#" method="get" id="52-wishlist">
                                        <input type="hidden" name="_token" value="ChMV3vWDo9KkZh17bjTVXL698S6EvUWlZle6fCnT">                                <input type="hidden" name="product_id" value="52">
                                        <button class="wishlist-btn" type="button" title="Add to Wishlist" data-id="52"><i class="fa fa-heart"></i></button>
                                    </form>
                                </span>
                                </div>
                        </div>
                        <div class="product_action">
                            <span class="add_to_cart">
                                <!-- <form action="{{url('cart')}}" method="POST">
                                @csrf                                  
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <button class="" type="submit" title="Add to Cart">Buy Now</button>
                                </form> -->
                             <!--<a href="{{route('addtocart',['id'=>$product->id])}}" class="btn">Add to Cart</a>-->
                             <a href="{{route('buynow',['id'=>$product->id])}}" class="btn">Buy Now</a>
                            </span>
                            <!--<span class="add_to_wishlist">
                                <form action="#" method="get" id="52-wishlist">
                                    <input type="hidden" name="_token" value="ChMV3vWDo9KkZh17bjTVXL698S6EvUWlZle6fCnT">                                <input type="hidden" name="product_id" value="52">
                                    <button class="wishlist-btn" type="button" title="Add to Wishlist" data-id="52"><i class="fa fa-heart"></i></button>
                                </form>
                            </span>--->
                            <span class="buy_now" style="display:none">
                                <a href="{{route('buynow',['id'=>$product->id])}}" class="btn">Buy Now</a>
                            </span>
                            
                        </div>
                    </div>
                </div>
                @endforeach                 
            </div>
            {{$products->links()}}
        </div>
    </section>
    <!-- Product Showcase ends -->
@endsection
