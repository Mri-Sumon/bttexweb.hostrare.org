@extends('layouts.FrontendLayout')

@section('details-script')
        <link rel="stylesheet" href="{{asset('css/kh/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/kh/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/kh/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/kh/normalize.css')}}"> 


        <link rel="stylesheet" href="{{asset('css/kh/font-awesome.min.css')}}">
 

        <link rel="stylesheet" href="{{asset('css/kh/mega_menu.css')}}">
        <link rel="stylesheet" href="{{asset('css/kh/customshop_style.css')}}">  
        <script src="{{asset('css/kh/jquery.min.js')}}"></script>
@endsection

      

        <!--=========================header bottom section==================-->


        
        <!--content area start-->
@section('content')
 <section class="content_wrapper">
        <div class="container pad-lr-15">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb_menu">
                            <ul>
                                <li><a href="/">Home</a></li>/
                                <li><a href="/shop">Shop</a></li>/
                                <li>{{$product_details->name}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
<section class="best_seller_product"  style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">

<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<style>

    #ListStyle1 li{
       list-style-type: none !important;
    background: url(../../image/right-arrow.png) no-repeat;
    padding-left: 25px;
    margin-bottom: 10px;
    font-size: 16px;
    }
    #ListStyle2 li{
        list-style-type: none !important;
    background: url(../../image/right-arrow.png) no-repeat;
    padding-left: 25px;
    margin-bottom: 10px;
    font-size: 16px;
    }
    #ListStyle1 p{
        list-style:disc outside none;
        display:list-item; 
    }
    #ListStyle2 p{
        list-style:disc outside none;
        display:list-item; 
    }
   
.features {
    border: 1px solid #e6e1e1;
    border-top: 5px solid #0089d1;
    margin-bottom: 30px;
    padding: 15px;
}
.features>ul {
    margin: 0px;
}
.features>ul>li {
    display: block;
    color: #666 !important; 
    font-size: 16px;
    clear: both;
}
.features>ul>li .fa {
    float: left;
    margin-right: 5px;
    margin-bottom: 25px;
    font-size: 30px;
    color: #666;
}
.featured-products {
    background: #fff;
    border: 1px solid #0089d1;
    margin-bottom: 30px;
}
.featured-products>.title {
    background: #0089d1;
    color: #fff;
    text-align: center;
    padding: 3px;
}
.featured-products .featured-item {
    display: table;
    width: 100%;
    padding: 5px;
}
.featured-products .featured-item .image {
    display: table-cell;
    vertical-align: middle;
}
.featured-products .featured-item .image img {
    height: 50px;
    width: 50px;
    margin-right: 5px;
}
.featured-products .featured-item .name {
    display: table-cell;
    vertical-align: middle;
    color: #333;
}
</style>

<style>
.review-left .heading3 {
    margin: 0 0 15px;
    font-weight: 600;
    font-size: 16px;
}
form.reviewform .srating {
    border: none;
    float: left;
}
fieldset {
    padding: .35em .75em .625em;
}
form.reviewform .srating>label {
    color: #ddd;
    float: right;
}
form.reviewform .srating>input {
    display: none;
}
.see-title{
    color: #555; 
    font-size: 28px; 
    font-style: normal; 
    font-weight: 600; 
    margin: 0; 
    margin-bottom: 15px;
    font-family: 'Open Sans', sans-serif; 
    line-height: 31px;
}
.see-title2{
    color: #0088cc; 
    font-size: 28px; 
    font-style: normal; 
    font-weight: 600; 
    margin: 0;  
    font-family: 'Open Sans', sans-serif; 
    line-height: 19px;
}
.see-title3{
    color: #333333; 
    font-size: 28px; 
    font-style: normal; 
    font-weight: 600; 
    margin: 0;  
    font-family: 'Open Sans', sans-serif; 
    line-height: 19px;
}


/*# review rating #*/
form.reviewform .form-group{float:left;width:100%;}
form.reviewform .srating{border:none;float:left;}
form.reviewform .srating.validation-error{border:1px solid #eb2a2e;}
form.reviewform .srating>input{display:none;} 
form.reviewform .srating>label:before{margin:5px;font-size:1.25em;font-family:FontAwesome;display:inline-block;content:"\f005";}
form.reviewform .srating>.half:before{content:"\f089";position:absolute;}
form.reviewform .srating>label{color:#ddd;float:right;}
form.reviewform .srating>input:checked ~ label,
form.reviewform .srating:not(:checked)>label:hover,
form.reviewform .srating:not(:checked)>label:hover ~ label{color:#FFD700;}
form.reviewform .srating>input:checked + label:hover,
form.reviewform .srating>input:checked ~ label:hover,
form.reviewform .srating>label:hover ~ input:checked ~ label,
form.reviewform .srating>input:checked ~ label:hover ~ label{color:#FFED85;} 


.rating span{position:absolute;left:0;top:0;height:18px;background:url(http://www.kalerhaat.com/images/stars.png) 0 -18px repeat-x;}
.rating-overall>div{margin:4px 0 5px;color:#444;font-size:13px;font-weight:600px;}
.rating-overall .track{position:relative;display:inline-block;margin:0 8px;width:120px;height:13px;background:#ddd;vertical-align:middle;}
.rating-overall .track.one-star{margin-left:15px;}
.rating-overall .track span{position:absolute;left:0;top:0;height:13px;background:#999;}
.rating-overall .track .bar20{width:48px;}
.reviews .review-right .rating-overall-desc{display:block;padding:0px 0px 20px;border-bottom:1px solid #ddd;text-align:left;overflow:hidden;}
.reviews .review-right .rating-overall-desc p{margin:0px;line-height:normal;}
.reviews .review-left .heading3{margin:0 0 15px;font-weight:600;font-size:16px;}
.reviews .review-right .rating-overall-desc .rating, .reviews .review-right .rating-overall-desc p{display:inline-block;margin-right:5px;font-weight:600;vertical-align:middle;float:left;}
.reviews .review-right ul.commentlist{margin:20px 0!important;list-style:none;margin:0;padding:0;}
.reviews .review-right ul.commentlist li{left:0!important;}
.reviews .review-right ul li{padding:0 0 20px;}
.reviews2 .review-right ul li{margin-left:30px!important;}
.reviews li{float:left;padding:10px 0 6px;width:100%;border-bottom:1px solid #ddd;}
.reviews .review-right ul.commentlist li .review-user.review-header{text-align:left!important;width:100%!important;padding-top:8px;}
.reviews li .review-user{float:left;width:18%;text-align:right;}
.reviews .review-header .rating{display:inline-block;margin-right:10px;vertical-align:middle;}
.reviews .review-header h5{display:inline-block;font-weight:600;margin:0;}
.reviews #comments em.verified{background-color:#C95891;display:inline-block;padding:2px 5px;color:#fff;font-size:10px;text-transform:uppercase;font-style:normal;margin-right:10px;}
.reviews li .review-user small{display:inline-block;color:#555;}
.reviews .review-right ul.commentlist li .review-body{clear:both;}
 .review-header h5 {
    display: inline-block;
    font-weight: 600;
    margin: 0;
}
.rating {
    position: relative;
    display: inline-block;
    width: 90px;
    height: 17px;
    background: url(http://www.kalerhaat.com/images/stars.png) 0 0 repeat-x;
    float: left;
}
 .review-right .rating-overall-desc {
    display: block;
    padding: 0px 0px 20px;
    border-bottom: 1px solid #ddd;
    text-align: left;
    overflow: hidden;
}
.review-right .rating-overall-desc .rating, .reviews .review-right .rating-overall-desc p {
    display: inline-block;
    margin-right: 5px;
    font-weight: 600;
    vertical-align: middle;
    float: left;
}.review-right .rating-overall-desc p {
    margin: 0px;
    line-height: normal;
}.review-right ul.commentlist {
    margin: 20px 0!important;
    list-style: none;
    margin: 0;
    padding: 0;
}.review-right ul.commentlist li {
    left: 0!important;
}

.reviews .review-right ul li {
    padding: 0 0 20px;
}
.reviews li {
    float: left;
    padding: 10px 0 6px;
    width: 100%;
    border-bottom: 1px solid #ddd;
}.review-right ul.commentlist li .review-user.review-header {
    text-align: left!important;
    width: 100%!important;
    padding-top: 8px;
}
 .product-d li a:focus {
    background: transparent;
    outline: none;
    border-bottom: 1px solid #fff;
    border-left: 1px solid #eee;
    border-right: 1px solid #eee;
    border-top: 3px solid #ccc;
    border-top-color: #08c;
}

.product-d .nav-tabs li a {
    background: #f4f4f4;
    border-bottom: none;
    border-left: 1px solid #eee;
    border-right: 1px solid #eee;
    border-top: 3px solid #eee;
    color: #08c;
    font-weight: 600;
    margin-right: 0;
    padding: 10px 15px 11px;
    text-transform: uppercase;
    border-radius: 5px 5px 0 0;
}
.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus{
    background: #fff;
      border-top: 3px solid #08c;
    
}
.nav-tabs>li a:hover{ 
      border-top: 3px solid #08c; 
}
    .slider{
        width: 90%;
        margin: auto;
    }
    .product {
        /*border: 1px solid #ddd;*/
    }
    .owl-nav {
        position: absolute;
        top: 28%;
        height: 0;
        font-size: 29px;
        width: 100%;
    }
   
    .owl-next{
        position: absolute;
        right: 0
    }
    .owl-prev {
	float: left;
	/*margin-left: -25px !important;*/
}
.owl-dots{
        margin-top: -30px !important;
        position: absolute !important;
        left: 0 !important;
        right: 0 !important;
} 
.owl-next span,.owl-prev span{
    font-size: 60px;
    font-weight: 100;
    color: #8E8C8C;
}
 
@media screen and (max-width: 1366px) and (min-width: 1166px){
.tab-design-product {
    padding-left: 0% !important;
    padding-right: 4% !important;
}
.slider .owl-item{
        width: 346px !important;
    }
  }
   
    
     @media (max-width: 767px) {       
        .owl-dots{
                margin-top: -30px !important;
                position: absolute !important;
                left: 0 !important;
                right: 0 !important;
        }  
        .owl-next span,.owl-prev span{
    font-size: 70px;
    font-weight: 500  !important;;
    color: #8E8C8C;
}
.hpart-mobile{ 
    display:none !important;
}
.see-title{
    font-size: 22px; 
     margin-bottom: 3px;
     padding-top: 10px;
}
.see-title2,.see-title3{
    font-size: 20px;  
}
.details_whole{
    padding-top:0 !important;
}
.search-area .search-form{
    height: 83px  !important;
top: -22px  !important;
}

.m-top-12 {
     margin-top: 18px  !important;
}
.pho-title-m{
    margin-top: 0  !important;
}
   }
.owl-carousel .product img{
    height:340px;
}
</style>
 <link rel="stylesheet" href="{{asset('css/kh/owl.carousel.min.css')}}"> 
 <link rel="stylesheet" href="{{asset('css/kh/owl.theme.default.min.css')}}">
 

            
<div class="container" style="padding-right:0px">
    <div class="row" >

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile-padding-left-15px" >
            <div class="panel panel-info " style="border:0;box-shadow:none">
                
                <div class="panel-body mobile-padding-zero" style="padding:15px 0 ">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12  " style="padding: 0;">
                            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 details_whole"  style="padding-left: 0px;padding-top: 12px;">
                            
                                <div class="tab-design-product mobile-padding-zero mobile-padding-5px col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-left: 0;">
                                    
                                    
                                    
<div class="slider">
    <ul class="product-category product-category1 owl-carousel owl-theme nav">
        
        <li class="product">
            <a href="#">
                <img   src="{{URL::to('/')}}/application/storage/app/product/{{$product_details->f_pic}}" alt="....."/>
            </a> 
        </li>
        @php
        $imagesss=explode(',',$product_details->pics);
        @endphp
        @foreach($imagesss as $imagess)
        @if($imagess)
        <li class="product">
            <a href="#">
                <img  src="{{URL::to('/')}}/application/storage/app/product/{{$imagess}}" alt="....."/>
            </a> 
        </li>
        @endif
        @endforeach
    </ul>
</div>
      

                                </div>

                                <div class="mobile-margin-left-zero col-lg-5 col-md-5 col-sm-5 col-xs-12  right padding-0" style="padding: 0 20px;min-height: 300px">
                                    <div class="col-sm-12" id="P_UserOrderForm1632" style="padding:0">


 <h4 class="modal-title see-title" id="gridSystemModalLabel"  >{{$product_details->name}}</h4>
      <p style="margin:0 0 5px 0;;">
          
          @if($product_details->price == $product_details->sale_price)
          <strong class="see-title2"> ৳ {{$product_details->price}} </strong>
          @else
          <del class="see-title3" style="opacity:.5">
              ৳ {{$product_details->price}}
          </del> 
          <strong class="see-title2"> ৳ {{$product_details->sale_price}} </strong>
          @endif
      </p>
<p style="font-size: 14px;line-height:0;background: #41b468;color: #fff; display: inline-block;padding:0;border-top: 10px solid transparent;border-bottom: 10px solid transparent; border-right:10px solid #fff; ">
    <label style="margin-bottom: 0; font-weight:unset;display: inline;padding-left: 5px; padding-right: 35px;">প্রোডাক্ট কোড:</label>
    <label  style="margin-bottom: 0; font-weight:unset;display: inline;padding-right: 3px;">
    1632    </label>
    </p>

<p style="margin: 0;color: #000;font-size: 16px;font-weight:bold">স্টক :    
<strong style="color:green;font-size: 16px;">@if($product_details->status=='1')
                                                ইন স্টক 
                                            @else
                                                ইন স্টক 
                                            @endif </strong>
</p>
                                 
                                 
    <div class="col-xs-12 col-sm-12 col-xs-12 " style="padding: 0px;">
 

        <input type="hidden" name="QtnLimitPerUserHiddenField" id="QtnLimitPerUserHiddenField" value="15" />

        <div class="col-xs-12 col-sm-12 col-md-12 deal-quantity" style="padding-left: 0px;margin-top: 10px">
            <div id="Quantity">
                <span  style="float: left;margin-top: 5px">পরিমান : </span>
                
                    <div class="item_amt">
                            <div class="row align-items-center">
                                <form action="{{ URL::to('carts',[$product_details->id]) }}" method="POST">
                                    {{ csrf_field() }}{{ method_field('POST') }}
                                <div class="col-xl-4 col-lg-4 col-md-5 col-5">
                                    @if(Cart::count()>0)
                                    @foreach(Cart::content() as $item)
                                    @if($item->id==$product_details->id)
                                    <div class="input-qty">
                                        <!--<span class="input-group-btn">
                                            <a class="btn" href="{{route('decreasequantitydetails',['rowId',$item->rowId])}}"><ion-icon name="remove-outline" style="font-size: 24px;"></ion-icon></a>
                                        </span>
                                        <input type="number" class="input-number" value="{{$item->qty}}" readonly name="qty">
                                        <span class="input-group-btn">
                                            <a class="btn" href="{{route('increasequantitydetails',['rowId',$item->rowId])}}"><ion-icon name="add-outline" style="font-size: 24px;"></ion-icon></a>
                                        </span>--->
                                        
                                        <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus" data-id="71">
                                                    <!---<span class="ion-ios-minus-empty"></span>--->
                                                    <a href="" class="btn"><ion-icon name="remove-outline" style="font-size: 24px;"></ion-icon></a>
                                                </button>
                                            </span>
                                            <input type="text" class="input-number" value="1" readonly name="qty">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus" data-id="71" style="margin-left:-52px;">
                                                    <!---<span class="ion-ios-plus-empty"></span>--->
                                                    <a href="" class="btn"><ion-icon name="add-outline" style="font-size: 24px;"></ion-icon></a>
                                                </button>
                                            </span>
                                    </div>
                                    @endif
                                    @endforeach
                                    @else
                                    <div class="input-qty">
                                        <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus" data-id="71">
                                                    <!---<span class="ion-ios-minus-empty"></span>--->
                                                    <a href="" class="btn"><ion-icon name="remove-outline" style="font-size: 24px;"></ion-icon></a>
                                                </button>
                                            </span>
                                            <input type="text" class="input-number" value="1" readonly name="qty" style="width:30px;">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus" data-id="71" style="margin-left:-52px;">
                                                    <!---<span class="ion-ios-plus-empty"></span>--->
                                                    <a href="" class="btn"><ion-icon name="add-outline" style="font-size: 24px;"></ion-icon></a>
                                                </button>
                                            </span>
                                    </div>
                                    @endif
                                </div>
                        </div>

                </div>

            </div>
        </div> 
    </div>
                                        <div class="m-top-12 col-xs-12 col-sm-6 col-md-6 " style="padding: 0px;margin-top: 30px;    margin-bottom: 30px;">

                                            <div class="btn col-xs-12 col-sm-12 col-md-12" style="font-size: 21px;margin-bottom: 20px;background:#f16e52 ;color:#fff;border-radius: 7px;">

                                                
                                                    @csrf
                                                    <!--<input type="hidden" value="890" name="product_price">-->
                                                    <!--<input type="hidden" value="1632" name="product_id">-->
                                                    <!--<input id="product_buy_item_quantity-value1632"  type="hidden" name="product_buy_item" value="1">-->
                                                    <input type="submit" value="কার্ট-এ যোগ করুন" style="background: transparent;border: none;margin: 0;padding: 0">
                                                </form>
                                            </div>

                                            <div class=" btn col-xs-12 col-sm-12 col-md-12" onclick="ProductAddTwoCart('1632')" style="background:#37A1D1;color:#fff;font-size: 21px;border-radius: 7px;">
                                                <a href="{{route('buynow',['id'=>$product_details->id])}}">অর্ডার করুন</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12" style="padding:0">
                                            
								
                                            <h4 class="pho-title-m" style="font-weight: 400; font-size: 25px; ine-height: 32px;color: #1d2127;margin-bottom:0">ফোনে অর্ডারের জন্য ডায়াল করুন</h4>
                                            <div class="col-sm-6 col-xs-12" style="padding:0">
                                                <h4 style="font-weight: 600; font-size: 25px; line-height: 32px; margin-bottom:15px;color:#0088cc"> 
                                                @foreach($bkash as $bkashs)
                                                  <i class="fa fa-phone-square" style="padding-left:20px;color: #0078B8;">   </i>  {{$bkashs->number}}<br>
                                                @endforeach
                                                </h4>
                                                
                                                <!-- Your share button code -->
                  <div style="margin-bottom:  10px;margin-top:  0;margin-left: 0;display: inline-block;" class="fb-share-button" 
                    data-href="#" 
                    data-layout="button" data-size="large">
                  </div>
                                                
                                                <a href="tel:01719077915" target="_blank" rel="nofollow" data-tooltip="" data-placement="bottom" title="">
									<img style="margin-bottom:  10px;margin-top:  0;margin-left: 0;" src="{{URL::to('/')}}/application/storage/app/slider/call-button.png">
								</a>
                                            </div>



                                            <div class="col-sm-12 col-md-12  col-xs-12" style="padding: 0">
                                                <table class="table" style="color:#08c !important">
            									<tbody><tr>
            								 	<td style="padding-left: 0;">
            										 ঢাকায় ডেলিভারি খরচ 
            										</td>
            										<td>
            											<b>৳ 40</b>
            										</td>
            									</tr>
            									<tr>
            								 <td style="padding-left: 0;">
            										 ঢাকার বাইরের ডেলিভারি খরচ
            										</td>
            										<td>
            											<b>৳ 50</b>
            										</td>
            									</tr>
            									<tr>
            								 <td style="padding-left: 0;">
            										 <span style="color:#800080; font-weight:700;">ঢাকার বাইরের ১০০ টাকা অগ্রিম প্রদান করতে হবে। </span>
            										</td>
            										<td>
            											<b></b>
            										</td>
            									</tr>
            									<tr>
            										<td style="padding-left: 0;border-bottom: 1px solid #ddd;">
            											বিকাশ মার্চেন্ট নাম্বার  
            											</td>
            										<td  style="border-bottom: 1px solid #ddd;">
            										    @foreach($bkash as $key=>$bkashs)
            										    @if($key=='0')
            											<strong>{{$bkashs->number}}</strong>
            											@else
            											@endif
            											@endforeach
            										</td>
            									</tr>
            								</tbody></table>
                                                
                                                
                                                
                                            </div>
                                         

                                                  
                                        </div> 
                                        <div class="col-xs-12 col-sm-12 col-md-12 "><br></div> 
                                    </div> 
                                </div> 
                                
                                
 <div class="area-mobile-off mobile-margin-left-zero mobile-margin-bottom-45 col-lg-3 col-md-3 col-sm-3 col-xs-12  right" style="padding: 0; ">
	<div class="features">
		<ul>
			<li><i class="fa fa-thumbs-up"></i> 100% original products</li>
			<li><i class="fa fa-money"></i> Pay cash on delivery</li>
			<li><i class="fa fa-shopping-cart"></i> Delivery within: 2-3 business days</li>
		</ul>
	</div>
	<div class="featured-products">
		<div class="title">প্রয়োজনীয় প্রোডাক্ট</div>
	<ul>
@foreach($need_product as $nproducts)
<li class="featured-item">
	<a href="{{ URL::to('details',[$nproducts->id]) }}">
		<div class="image"><img src="{{URL::to('/')}}/application/storage/app/product/{{$nproducts->f_pic}}"></div>
		<div class="name"> {{$nproducts->name}}</div>
	</a>
</li>
@endforeach
</ul>				
</div>
			 
        
</div>
                                
                                
                                
                                
                            </div>
                        </div>


                    </div> 
                </div>
            </div> 
            
            
            
            
            <div class=" col-lg-12 col-sm-12 brand text-center product-d" style="background-color: #fff;padding: 0">
                            <ul id="tabs" class="nav nav-tabs " data-tabs="tabs" style="border:0">
                                
                               
                                <!--<li class="  active" ><a href="#course-detail1632" data-toggle="tab" style=" font-size:14px;margin-right:3px"><strong>Brief</strong></a></li>-->
                                
                                
                                <li class=" active" style="padding: 0px"><a href="#objectives1632" data-toggle="tab" style="font-size:14px;"><strong>
                                   Description
                                    </strong></a></li>
                                   
                            </ul>
                            <div id="my-tab-content" class="tab-content" style="padding-left: 0px;padding-right: 0px;border: 1px solid #eee;">
                                <!-- top category tab -->
                                <!--<div class="tab-pane active" id="course-detail1632" style="padding-top: 20px;">-->
                                <!--     <div class="tab-content panel-body" style="padding: 0">-->
                                <!--             <div  id="ListStyle2"  class="col-sm-12 text-left product-dynamic-details" style="padding: 0px;padding-left:25px" >-->
                                <!--                    <li>{{$product_details->brief}}</li>-->
                                <!--                </div>-->
                                <!--        </div>  -->
                                <!--</div>-->
                                <!-- /.top category tab -->

                                <div class="tab-pane active " id="objectives1632"  style="padding-top: 20px;">
                                    <!-- top category tab -->
                                    <div class="tab-pane active" id="course-detail">
                                        <div class="tab-content panel-body" style="padding: 0">
<div class="col-sm-12 text-left" style="padding:0 20px" >
   
                                            <p>
                                                {!!$product_details->description!!}
                                            </p>
                                          
     
</div>

                                        </div>   
                                    </div>
                                    <!-- /.top category tab --> 
                                </div>


                            </div>
                             
                        </div> 
            
            
             



            <!--Similar Product-->
            <div class="panel panel-info " style="background:#fff; border:0">
 
                <div class="panel-body mobile-padding-zero" style="padding: 10px 0;">
                    <div class="col-lg-12 col-md-12 col-sm-12 " style="background:#fff;padding: 0;margin-bottom: 20px;  border-right:0;border-bottom:0" id="Product_AjaxRelated">
                        <h4 class="modal-title" id="gridSystemModalLabel" style="font-size: 1.1429em;font-weight: bold;color: #313131;line-height: 1.4;margin-bottom: 1.25em; padding-top: 1.25em;">

                        রিলেটেড প্রোডাক্ট
                        </h4>
                        @foreach($related_product as $r_product)
                        <div class="col-sm-2 col-xs-6 product-custom-area product-hover-area" style="padding: 0;">
                             <div class="col-sm-12 col-xs-12 padding-zero " style="background-color: #fff; border-radius: 0;padding-bottom: 0;padding: 10px 10px 20px; border: 1px solid #ddd;"> 
                               <a  style="padding: 0px;" class="img-hover col-sm-12 padding-zero" href="{{ URL::to('details',[$r_product->id]) }}"  id="1632" >
                                 <img class="img-responsive " style="margin: 0 auto;padding:10px " src="{{URL::to('/')}}/application/storage/app/product/{{$r_product->f_pic}}" alt="{{$r_product->name}}">
                                <span id="productPrice1632" class="col-sm-12  col-xs-12 text-center" style="background: #fff;padding: 5px;display: block;line-height:18px;color: #D2691E;font-size: 14px;font-weight: bold;height: 50px;">
                                    <!--<div style="border-top: 1px solid #ccc;padding: 3px;">-->
                                      <div class="price-old col-sm-12   text-center"   style="padding:0"> 
                                      <del style="font-size: 14px; color: #b8b8b8; line-height: 20px; font-weight: 400;">৳990</del>
                                      </div>
                                      <div class="col-sm-12 text-center  " style="padding:0">
                                          <label style="display: block; font-size: 16px; color: #fca204; font-weight: 600; line-height: 20px;"> ৳    890</label> 
                                      </div><!--</div>-->                                
                                </span>
                                <span id="productName1632" class="col-sm-12 text-center product-name-c" style="background: #fff;padding: 2px;padding-top: 5px;overflow: hidden;height: 45px; display: block;color:#525252;font-weight: 400;font-size: 13px !important; font-family: 'Work Sans',Arial,sans-serif;color:#777777">{{$r_product->name}}</span>
                               </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--Similar Product End-->





        </div>
    </div>
</div>
  


    


<!--<script src="{{asset('css/kh/jquery1.min.js')}}"></script>-->
<!--<script src="{{asset('css/kh/owl.carousel.min2.js')}}"></script>-->

<script>

    $(document).ready(function () {
        //owl carousel

        if ($('.product-category').hasClass('owl-carousel')) {

            $('.owl-carousel').owlCarousel({
                items: 1,
                nav:true,
                dots: true,
                autoplay: false,
                slideBy: 1,
                loop: true
                
            })
        }

    });
</script>
         </section>
         </div>
         </div>
         </div>
         </section>

        <!--content area end-->


        





 
 

<script>
    function IncrementFunction22(Obj) {
//        alert(Obj);
        var x = document.getElementById(Obj).innerHTML;

        var quantity;
        var limit = document.getElementById("QtnLimitPerUserHiddenField").value;



        if (x > 0 && x < 100) {

            quantity = Number(x) + 1;
//            document.getElementById("QuantityHiddenField").value = quantity;
            document.getElementById('product_buy_item_' + Obj).value = quantity;
            document.getElementById(Obj).innerHTML = quantity;
        }
        else {
//            document.getElementById("QuantityHiddenField").value = x;
            document.getElementById('product_buy_item_' + Obj).value = x;
            document.getElementById(Obj).innerHTML = x;
        }
//        return false;
    }
    function DecrementFunction22(Obj) {
//          alert(Obj);
        var x = document.getElementById(Obj).innerHTML;
        var quantity;
//        alert(quantity);
        if (x > 1) {
            quantity = Number(x) - 1;
//            alert(quantity);
//         document.getElementById("QuantityHiddenField").value = quantity;
            document.getElementById('product_buy_item_' + Obj).value = quantity;
            document.getElementById(Obj).innerHTML = quantity;


        }
        else {
//            document.getElementById("QuantityHiddenField").value = x;
            document.getElementById('product_buy_item_' + Obj).value = x;
            document.getElementById(Obj).innerHTML = x;
        }
//        return false;
    }

</script>



 



<!--work-->


    
        
         







        <script language="javascript">

            //Create a boolean variable to check for a valid Internet Explorer instance.
            var xmlhttp = false;
            //Check if we are using IE.
            try {
                //If the Javascript version is greater than 5.
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

                //alert ("You are using Microsoft Internet Explorer.");
            } catch (e) {

                //If not, then use the older active x object.
                try {
                    //If we are using Internet Explorer.
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    //alert ("You are using Microsoft Internet Explorer");
                } catch (E) {
                    //Else we must be using a non-IE browser.
                    xmlhttp = false;
                }
            }
            //If we are using a non-IE browser, create a javascript instance of the object.
            if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
                xmlhttp = new XMLHttpRequest();
                //alert ("You are not using Microsoft Internet Explorer");
            }
        </script>

        <script>
            var url = new URL(window.location.href);

            if (url) {
            x= 0;
                serverPage = 'http://www.kalerhaat.com/ovation/website_couter/' + x;

                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function ()
                {
                    console.log('1');
                }
                xmlhttp.send(null);

            }


        </script>
 

        <!--<script src="{{asset('css/kh/bootstrap.min.js')}}"></script>-->
 

@endsection

