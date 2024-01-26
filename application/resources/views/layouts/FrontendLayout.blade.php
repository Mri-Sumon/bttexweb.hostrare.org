<?php $settings=App\Settings::where('id',1)->first();?>
<!DOCTYPE html>
<html> 
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>{{$settings->name}} | fly to go high</title>
        <meta name="author" content="{{$settings->name}}" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{URL::to('/')}}/css/new/front_asset/style.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/css/new/front_asset/responsive.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/css/new/front_asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/css/new/front_asset/css/normalize.css"> 


        <link rel="stylesheet" href="{{URL::to('/')}}/css/new/front_asset/css/font-awesome.min.css">
 

        <link rel="stylesheet" href="{{URL::to('/')}}/css/new/front_asset/css/mega_menu.css">
        <link rel="stylesheet" href="{{URL::to('/')}}/css/new/front_asset/css/customshop_style.css">  
        <script src="{{URL::to('/')}}/css/new/front_asset/jquery.min.js"></script>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="shortcut icon" href="{{URL::to('/')}}/application/storage/app/slider/1652424304.png">
      @yield('script')
        <style>
            .cart-close {
                background: #d00;
                height: 50px;
                width: 30px;
                position: absolute;
                top: 50%; 
                font-size: 30px;
                color: #fff;
                cursor: pointer;
                border-radius: 10px 0px 0px 10px;
                padding-left: 4px;
                padding-top: 7px;
                text-align: center;
            }
            .product-hover-effect:hover{
                border: 1px solid #00255f  !important;
                transition:  all .1s;
            }

            .buy-now:hover{
                color: #00255f ;
                transition:  all .1s;
            }
            li{list-style-type: none;}
            img.zoomEffect {
                /*    width: 350px;
                    height: 200px;*/
                -webkit-transition: all 1.5s ease-in-out;
                -moz-transition: all 1.5s ease-in-out;
                -o-transition: all 1.5s ease-in-out;
                -ms-transition: all 1.5s ease-in-out;
            }

            .transition {
                -webkit-transform: scale(1.4); 
                -moz-transform: scale(1.4);
                -o-transform: scale(1.4);
                transform: scale(1.4);
            }
        </style>
        <style>
            .main-category:hover{
                background-color: #ededed;
            }
            .sub-category-name:hover{
                background-color: #ededed;
            }

            .footer-panel > li > a{
                font-weight: bolder
            }
            .footer-panel > li > a:hover{
                background: none;
                cursor: pointer;
                color: orange !important;
            }
            .footer-panel > li > a:focus{
                background: none;
            }

            input[type="button"], input[type="reset"], input[type="submit"] {
                -webkit-appearance: button;
                cursor: pointer;
                outline: none;}

            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button { 
                -webkit-appearance: none; 
                margin: 0; 
            }

            .product-name-c{ 
    font-size: 16px;
    text-align: center;
    font-weight: 400;
    height: 45px;
    margin: 0;
    color: #777777;
    overflow: hidden;
    line-height: normal;
 
            }


            .product-hover-area a img{

                padding: 0 !important;
                width: 100% !important;
            }
            @media (min-width: 768px) {
                .product-custom-area{
                    width: 14.2777% !important;
                }
              
            }
           @media (max-width: 767px) {  
            .closemenu {
    position: absolute;
    left: 100%;
    top: 10%;
    background: #1d2127;
    border: #1d2127;
    padding: 5px;
    width: 40px;
    height: 40px;
    color: #fff;
    border-radius: 0 4px 4px 0;
    font-weight: bold;
    font-size: 20px;
    }
     
    .dropdown-menu { 
    top: 15px;
    left: -79px; 
    min-width: 180px; 
    }
}
ul.ac-link .dropdown-menu {
    margin: 6px 0px 0px -57px;
    border: 1px solid #f3f1ee;
    -webkit-box-shadow: 0 0 0 4px rgba(0,0,0,0.03);
    box-shadow: 0 0 0 4px rgba(0,0,0,0.03);
    min-width: 180px;
}
ul.ac-link .dropdown-menu li {
    display: block!important;
    margin: 0!important;
    padding: 0px 7px!important;
    line-height: normal;
    height: auto;
    font-size: 11px;
    color: #000;
}ul.ac-link .dropdown-menu li .btn {
    width: 100%;
    display: block;
    padding: 10px;
    font-size: 13px!important;
    text-transform: uppercase;
    font-weight: 600;
    color: #fff!important;
    height: 36px!important;
    padding-top: 9px!important;
    border-radius: 4px;
}
ul.ac-link .dropdown-menu li .signup-overlay {
    margin-top: 5px;
}
.btn.btn-default {
    background-color: #074488;
    color: #fff;
    text-transform: uppercase;
} 

</style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

        <script>
            if (performance.navigation.type == 2) {
                location.reload(true);
            }
        </script>
 

    </head>

    <body style="background-color:#fff;font-family: Rubik,Noto Sans Bengali,Helvetica Neue,Helvetica,Arial,sans-serif;"  >
        <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "465738406942169");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
        <!--<body style="background-color:#fff" ondragstart="return false;" ondrop="return false;" oncontextmenu="return false;" > -->

<!--<section style="background-color:red ">-->
<!--                <div class="container">-->
<!--                    <div class="row"> -->
<!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">-->
<!--                            <style>-->
<!--                                .blink_me {-->
<!--  animation: blinker 6s linear infinite;-->
<!--}-->

<!--@keyframes blinker {-->
<!--  50% {-->
<!--    opacity: 0;-->
<!--  }-->
<!--}-->
<!--                            </style>-->
<!--                            <h3 style="    margin: 0;-->
<!--    padding: 5px;-->
<!--    font-size: 20px;-->
<!--    text-align: center;color:#fff" class="blink_me">-->
<!--                            দেশের সর্বিক পরিস্থিতি বিবেচনা করে আমাদের সকল কার্যাদি ও সেবা ২৫ মার্চ ২০ থেকে ৪ এপ্রিল পর্যন্ত বন্ধ থাকবে-->
                            
<!--                              ।-->
<!--                            </h3>-->
                            
<!--                        </div>-->


<!--                    </div> -->
<!--                </div>-->
                
                
                
<!--            </section>-->

        <section class=" area-mobile-off" style="box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);">

            <div id="hpart">
                <div class="container">
                    <div  class="wel-text col-sm-4">Welcome to <span>Sellwings.com</span></div>
                    <div class="pull-right text-right col-sm-8">

                        <ul class="ac-link clearfix">
                            <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i> Home</a></li>

                            <li><a href="page/contact-us"><i class="fa fa-envelope"></i> Contact</a></li>

                            <li><a href="/track_order"><i class="fa fa-search"></i> Track Order</a></li>

                            <li><a href="/checkout"><i class="fa fa-shopping-cart"></i> Checkout</a></li>

                                        
                            <li class="dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown" class="user-logs"><i class="fa fa-user"></i> Account</a> 
                                
                                 <ul class="dropdown-menu" style="margin-top:10px;padding-top: 0;">
                                        <li style="padding: 0 !important;">
                                            <div style="background:#eee;text-align:left;padding:10px">Login</div>
                                    <form action="{{route('login')}}" method="post" class="form-horizontal" enctype="multipart/form-data"  >

                                        @csrf

                                    <div class="" style="padding: 10px">
                                        <input style="width: 100% !important;border: 1px solid #eee;padding-left: 10px" name="email" required="" type="email" class="form-control" placeholder="Email Address .. "  >
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                 <div class="" style="padding: 10px">
                                        <input style="width: 100% !important;border: 1px solid #eee;padding-left: 10px" name="password" required="" type="password" class="form-control" placeholder="Password .. "  >
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="" style="padding-bottom: 15px">
                                        <input id="submitBTN" type="submit" class="btnlogin  btn btn-default" value="Login" style="width:100% !important;background: #008acf">
                                    </div>
                                    
                                       <div class="signup-overlay" style="padding:10px 5px;font-size: 11px;text-align:center">
                                                New customer? <a href="{{route('register')}}"  style=" color: red; display: initial; font-size: 13px; text-shadow: 0px 0px 0px #ddd;  text-transform: lowercase;  " >Signup
                                              
                                                </a>  </div>
                                    
                                </form>
                                            
                                            
                                               
                                           
                                            
                                        </li>
                                    </ul>	 
                            </li>
                                                        
                            
                        </ul>
                    </div>
                </div>
            </div>
            <section style="background-color:#fff">
                <div class="container">
                    <div class="row" style="padding-top: 14px;">

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-zero">
                            <div style="float: left">
                                <a href="{{URL::to('/')}}"><img src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->logo}}" style="float: right;padding-top: 5px; height: 110px;
margin-bottom: 20px;" alt="Sellwings  shop" title="Sellwings logo"></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 search-area" style="">
                            <form method="post" action="{{url('action_search')}}">
                                        @csrf
                            <div id="search" class="search">
                               
                            <select id="search_cat" name="cat_idss">
                                <option value="0">All Category</option>
                                <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                                @if($cats)
                                @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                                @endif
                            </select>
                                    <div class="input-group">
                                        <input type="search" name="cat_search" id="search_query" class="form-control" value="" placeholder="Search Here..." autocomplete="off">
                                        <button  type="submit">&nbsp;</button>
                                        <ul class="dropdown-menu"></ul>
                                    </div>
                                    </form>
                                
                            </div>

                             
                        </div>

                        <div   class="menu-rig col-lg-3 col-md-3 col-sm-3 col-xs-12  " style="padding-top: 40px">

                            <div class="pull-right ">
                                <div class="hotline">
                                    <i class="fa fa-phone fa-flip"></i>
                                    <span style="font-size:22px; margin-right:16px;">{{$settings->mobile}}</span>
                                </div>
                                <div class="cartbtn">
                                    <a  href="/cart" class="cart-button">
                                    
                                     <!--<a  onclick="CartPanel(1)"  href="javascript:void(0)" class="cart-button">-->
                                   
                                        <div class="items">
                                            <i class="fa fa-shopping-cart" style="font-size: 40px; color:#1aca98;"></i>
                                            <!--<img class="icon-shopping-bag" src="{{URL::to('/')}}/css/new/image/shopping-bag.png">-->
                                                  
                             <div class="itemcount item_0" id="MtotalCartItemsBlank">
                                <span class="itemno" id="MtotalCartItems">
                                 {{Cart::count()}}
                                </span>
                            </div>
                                            
                                        </div>
                                    </a>
                                </div>
                            </div>
                            

                        </div> 
                    </div> 
                </div>
            </section>



            <nav class="navbar navbar-default lightHeader " role="navigation" style="height: auto;top: 0;box-shadow: none; background: #fff; border: 1px solid #1aca98;">
                <div class="container"  >
                    <!--<div class="container" style="justify-content: center; display: flex; padding-right: 0;">-->

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                   
                    <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding:0">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="color-2">
                                <a  style="padding: 15px;" href="/" >
                                    <span style="font-weight: bold;padding: 0"> 
                                        হোম
                                    </span>
                                </a>
                            </li>
                            <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                            @if($cats)
                            @foreach($cats as $cat)
                            <?php $subcat=DB::table('cats')->where('parent',$cat->id)->where('status','active')->get();?>
                            <li class="color-2 @if(count($subcat)>0)nav-item dropdown @endif">
                                <a class="@if(count($subcat)>0) nav-link dropdown-item dropdown-toggle @endif" style="padding: 14px;" href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" @if(count($subcat)>0) id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif>
                                    <span style="font-weight: bold;padding: 0"> 
                                        {{$cat->name}}
                                    </span>
                                </a>
                                @if(count($subcat)>0)
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach($subcat as $key=>$scat)
                                            <a class="dropdown-item" href="{{URL::to('/')}}/shop/cat/{{$scat->id}}">{{$scat->name}}</a>
                                            @endforeach
                                        </div>
                                    @endif
                            </li>
                            @endforeach
                            @endif
                            <?php $menus=App\Pages::where('position','header')->where('parent_page',0)->where('status',1)->orderBy('sorts','asc')->get();?>
                            @forelse($menus as $item)
                            <?php $subpage=App\Pages::where('parent_page',$item->id)->get();?>
                            <li class="color-2" @if(count($subpage)>0) class="nav-item dropdown" @endif>
                                <a  style="padding: 15px;" @if(count($subpage)>0) class="nav-link dropdown-toggle" data-toggle="dropdown" @endif @if($item->links!='') href="{{$item->links}}" @else href="{{URL::to('/')}}/page/{{$item->slug}}" @endif >
                                    <span style="font-weight: bold;padding: 0"> 
                                        {{$item->name}} @if(count($subpage)>0) <span class="caret"></span> @endif
                                    </span>
                                </a>
                                @if(count($subpage)>0)
                                    <ul class="dropdown-menu" role="menu">
                                        @foreach($subpage as $subpageitem)
                                        <li><a @if($subpageitem->links!='') href="{{$subpageitem->links}}" @else href="{{URL::to('/')}}/page/{{$subpageitem->slug}}" @endif >{{$subpageitem->name}}</a></li>
                                        @endforeach
                                    </ul> 
                                @endif
                            </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>

                </div>
            </nav>


        </section>    
        <div class="modal fade" id="mySms" role="dialog">
            <div class="modal-dialog">
                <form action="" method="post">
                    <!-- Modal content-->
                    <div class="modal-content" style="border: 3px solid #00255f ;">
                        <div class="modal-header" style="border-bottom: 1px solid #35A3D3;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"> <strong>Track Order Record</strong></h4>
                        </div>
                        <div class="modal-body">


                            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 form-group">
                                <input style="width:100% !important;padding: 20px;" required type="number" class="form-control" name="mobile_number" placeholder="Please Type Your Mobile Number"> 
                            </div>

                        </div>
                        <div class="modal-footer" style="border:0;padding: 50px 30px 30px 30px;">
                            <input style="color:#fff;font-weight:bold;padding: 5px;width:100% !important;background:#02255F"  type="submit" class="btn  pull-right" value="Search">
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--=========================header bottom section==================-->


        <div id="hpart" class="area-mobile-on hpart-mobile" style="display: none">
            <div class="container" style="padding-right: 0">
                <div  class="wel-text col-xs-8">{{$settings->mobile}}</span></div>
                <div class="pull-right text-right col-xs-4" style="padding-right: 0;">

                    <div class="topnav mobile"  style="float: right;">
                        <!--<span class="glyphicon glyphicon-menu-hamburger"></span>-->
                        <i class="fa fa-list"></i>
                    </div>
                                        
                    
<span class="dropdown">
                    <a data-toggle="dropdown"  class="usernav mobile btnlogin" href="javascript:void(0)" style="float: right;">
                        <!--<span class="glyphicon glyphicon-user"></span>-->
                        <i class="fa fa-user"></i>
                    </a> 
                    <ul class="dropdown-menu" style="margin-top:10px;padding-top: 0;">
                                        <li style="padding: 0 !important;">
                                            <div style="background:#eee;text-align:left;padding:10px">Customar Login</div>
                                    <form action="{{ route('login') }}" method="post" class="form-horizontal" enctype="multipart/form-data"  >

 @csrf

                                    <div class="" style="padding: 10px">
                                        <input style="width: 100% !important;border: 1px solid #eee;padding-left: 10px" name="email" required="" type="email" class="form-control" placeholder="Email Address"  >
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    
                                 <div class="" style="padding: 10px">
                                        <input style="width: 100% !important;border: 1px solid #eee;padding-left: 10px" name="password" required="" type="password" class="form-control" placeholder="Password .. "  >
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="" style="padding-bottom: 15px">
                                        <input id="submitBTN" type="submit" class="btnlogin  btn btn-default" value="Login" style="width:100% !important;background: #008acf">
                                    </div>
                                    
                                       <div class="signup-overlay" style="padding:10px 5px;font-size: 11px;text-align:center">
                                                New customer? <a href="{{route('register')}}"  style=" color: red; display: initial; font-size: 13px; text-shadow: 0px 0px 0px #ddd;  text-transform: lowercase;  " >Signup
                                              
                                                </a>  </div>
                                    
                                </form>
                                            
                                            
                                               
                                           
                                            
                                        </li>
                                    </ul></span>                </div>
            </div>
            <ul class="ac-link  ">
                <li style="margin-left: 10px;"><a href="{{URL::to('/')}}">
                    <!--<span class="glyphicon glyphicon-home"></span>-->
                    <i class="fa fa-home"></i>
                    Home</a></li>

                <li><a href="page/contact-us">
                    <!--<span class="glyphicon glyphicon-envelope"></span>-->
                    <i class="fa fa-envelope"></i>
                    Contact</a></li>

                <li><a href="/track_order">
                    <!--<span class="glyphicon glyphicon-search"></span>-->
                    <i class="fa fa-search"></i>
                    Track Order</a></li>

                <li><a href="/checkout">
                    <!--<span class="glyphicon glyphicon-shopping-cart"></span>-->
                    <i class="fa fa-shopping-cart"></i>
                    Checkout</a></li>


            </ul>
        </div>
        <nav id="menuBar" class="navbar navbar-default lightHeader  " role="navigation" style="height: auto;top:-1px;background: #0083C4;box-shadow: none;" >
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo-area" style="padding-top: 5px;padding-bottom: 5px;">
                    <div>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="padding-right: 0;float: left;margin-left: 20px;margin-top: 5px;background-color: transparent; border: 0;box-shadow: none;">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="search-area mobile" style="padding-top: 0;">
                        <button class="btntoggle">
                            <i class="fa fa-search"></i>
                        </button>
                        <form method="post" action="{{url('action_search')}}">
                                        @csrf
                        <div class="search-form" hidden="" style="display: none;">
                            <select id="search_cat" name="cat_idss" style="display: none;">
                                <option value="0">All Category</option>
                                <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                                @if($cats)
                                @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                                @endif
                            </select>

                            <input type="search" name="cat_search" id="searchMf" class="form-control ui-autocomplete-input" value="" placeholder="সার্চ করুন" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <button type="submit" >
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="btnclose">
                                <i class="fa fa-times-circle"></i>
                            </button> 
                        </div>
                        </form>
                    </div>
                    <div>
                        <a href="{{URL::to('/')}}" style="float: left;  ">
                            <img src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->logo}}" class="img-responsive" alt="Sellwings"  title="Sellwings" style="width: 140px;">
                        </a>
                    </div>
                    <!--                    <a href="#"data-toggle="modal" data-target="#mySms"   style="float: right;padding-right: 20px;">
                                            <i class="fa fa-user" style="color: #fff; font-size: 30px; font-weight: bold; padding-top: 11px;"></i>
                                        </a>-->

                    <!--<a href="resistration-information" onclick="CartPanel(1)"  style="float: right;padding-right: 20px;">-->
                    
                     <a    href="{{URL::to('cart')}}" style="float: right;padding-right: 20px;">
                                             

                    
                        <div class="cartbtn mobile">

                            <div class="items">
                                <img class="icon-shopping-bag" src="{{URL::to('/')}}/css/new/image/shopping-bag.png">
                                <div class="itemcount item_1" id="MtotalCartItemsBlank2">
                                <span class="itemno" id="MtotalCartItems2">{{Cart::count()}}</span>
                                </div>
                            </div>

                        </div>
                    </a>




                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse" style="position: absolute; width: 80%;">
                <button class="closemenu mobile" data-toggle="collapse" data-target=".navbar-ex1-collapse">x</button>
                    <ul class="nav navbar-nav navbar-left" style="height: 100vh;">


                            <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                            @if($cats)
                            @foreach($cats as $cat)
                            <?php $subcat=DB::table('cats')->where('parent',$cat->id)->where('status','active')->get();?>
                        
                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2  @if(count($subcat)>0) dropdown @endif"" >
                                <a href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" class="nav-link dropdown-item @if(count($subcat)>0) dropdown-toggle @endif" @if(count($subcat)>0) id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif>
                                    <span style="font-weight: normal;color: #000">{{$cat->name}}
                                    </span>
                                </a>
                                 @if(count($subcat)>0)
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach($subcat as $key=>$scat)
                                            <a class="dropdown-item" href="{{URL::to('/')}}/shop/cat/{{$scat->id}}">{{$scat->name}}</a>
                                            @endforeach
                                        </div>
                                    @endif
                            </li>
                            @endforeach
                            @endif
                    </ul>
                </div>

            </div>
        </nav>
@yield('content')


        


        <footer class="navbar-default" style="background: #000000">
            <div class="container-fluid ">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mobile-padding-zero" >
                    <p class="text-center" style="padding-top:5px"></p>
                    <center>
                        <a href="page/terms-conditions" target="_blank" style="color: white !important;">Terms & conditions </a>                      
                        <a href="page/privacy-policy" target="_blank" style="color: white !important; margin:0 15px">Privacy Policy </a>
                        <a href="page/refund-policy" target="_blank" style="color: white !important;">Refund Policy</a>

                    </center>

                    <p class="text-center" style="color:#fff;font-weight:bold;padding-top:8px;padding-bottom: 8px;">Copyright &copy; {{date("Y")}} | sellwings.com </p>
                </div>

            </div>
        </footer>

 <!--show cart details start-->
        <div id="CartDataArea" class="CartDataArea" style="position: fixed;z-index: 99999;bottom: 0;top:0;right: 0;width:0;height:100vh;background:#F1F1F1;  border-radius: 5px 0 0 0 !important;">     
        
        <div id="CartClose" class="closeCartBox cart-close"  onclick="CartPanel(0)">
    		<i class="fa fa-chevron-right"></i>
    	</div>
    	
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 8px; background: #e4e0e1;">
                <span style="width:100%;display: block;text-align: center;font-size: 15px;font-weight:700" > <label style="font-size: 15px;font-weight: 700;color:#4f4f4f;text-transform: uppercase;" id="CartDetailsQty">0   Items</label> 
                </span> 

                 
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding: 0">
                <div class="col-sm-12 white " style="padding: 0px;border: 0px;  ">
                    <table class="table table-bordered" style="margin-top: 0px;" id="AjaxCartDetailsData">
                        <tbody>

                            


                        </tbody>
                    </table>


                </div>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="height: 50px; display: inline-table;">
                <span style="padding-right: 5px;width:50%;color: #fff;display: block;float: left;">
                    <button onclick="window.location.href = 'http://www.Sellwings.com/resistration-information/'" style="color:#fff ;font-weight: bold;text-transform: uppercase;border:0;background: #074488;line-height: 20px;padding: 10px 10px;width:100%" > 
                        Place Order
                    </button>
                </span> 

                <span id="CartDetailsTotal" style="width:48%;color: #fff;display: block;text-align: right;font-size: 20px;font-weight: bold;float: right;background: #074488;line-height: 20px;padding: 10px 10px;">
                    ৳    0   
                </span> 
            </div>
        </div>

 
 

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
<script>

    function ProductAddTwoCart(Obj)
    { 
        serverPage = 'http://www.Sellwings.com/cart/ajax_addcart/' + Obj;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var obj = JSON.parse(xmlhttp.responseText);
              
                
              document.getElementById("MtotalCartItemsBlank").style.background = "#f00";
           
             document.getElementById("MtotalCartItems").innerHTML = obj.total_items;     
             
             document.getElementById("MtotalCartItemsBlank2").style.background = "#f00";
           
             document.getElementById("MtotalCartItems2").innerHTML = obj.total_items;     
             
              $('html, body').animate({scrollTop: $("#MtotalCartItemsBlank2").position().top}, 'slow');
                
                
                document.getElementById("CartDetailsQty").innerHTML = obj.total_items + ' Items';

               
                document.getElementById("CartDetailsTotal").innerHTML = '৳ ' + obj.total_amount;
                ProductAddDetails();
            }
        }
        xmlhttp.send(null);

    }

</script>
<script>
            function IncrementFunction(Obj,rowid) {  
                var x = document.getElementById(Obj).value;  
                var quantity = Number(x) + 1; 
                serverPage = 'http://www.Sellwings.com/cart/ajax_update_cart_front/' + rowid + '/' + quantity;
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var obj = JSON.parse(xmlhttp.responseText);
                       
                        document.getElementById("CartDetailsTotal").innerHTML = '৳ ' + obj.total_amount;
                       
                        ProductAddDetails(); 
                    }
                }
                  xmlhttp.send(null);
                  
                    
            }
            function DecrementFunction(Obj,rowid) { 
                var x = document.getElementById(Obj).value;
                var  quantity = Number(x) - 1;
                if(quantity >= 1){
                     document.getElementById(Obj).innerHTML = quantity;
                     
                      serverPage = 'http://www.Sellwings.com/cart/ajax_update_cart_front/' + rowid + '/' + quantity;
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        var obj = JSON.parse(xmlhttp.responseText);
                        
                        document.getElementById("CartDetailsTotal").innerHTML = '৳ ' + obj.total_amount;
                        ProductAddDetails(); 
                    }
                }
                  xmlhttp.send(null);
                } 
               
                
            }

        </script>
        <script>

    function ProductAddDetails()
    {
//        alert(Obj);
        serverPage = 'http://www.Sellwings.com/cart/ajax_cart_show_front/';
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("AjaxCartDetailsData").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.send(null);

    }

</script>

<script>
    function CartDataRemove(Obj)
    {

        serverPage = 'http://www.Sellwings.com/cart/ajax_cart_remove_product_front/' + Obj;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("AjaxCartDetailsData").innerHTML = xmlhttp.responseText;
                ProductRemoveDetails();
            }
        }
        xmlhttp.send(null);

    }

 

    function ProductRemoveDetails()
    {
//        alert(Obj);
        serverPage = 'http://www.Sellwings.com/cart/ajax_remove_cart/';
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var obj = JSON.parse(xmlhttp.responseText);
                 
                 
                   document.getElementById("MtotalCartItemsBlank").style.background = "#f00";
           
             document.getElementById("MtotalCartItems").innerHTML = obj.total_items;     
             
             document.getElementById("MtotalCartItemsBlank2").style.background = "#f00";
           
             document.getElementById("MtotalCartItems2").innerHTML = obj.total_items;     
             
           
              
                
                document.getElementById("CartDetailsQty").innerHTML = obj.total_items + ' Items';

               
                document.getElementById("CartDetailsTotal").innerHTML = '৳ ' + obj.total_amount;
                
                   $('html, body').animate({scrollTop: $("#MtotalCartItemsBlank2").position().top}, 'slow');

            }
        }
        xmlhttp.send(null);

    }

</script>     
        
         



        <script>
    function CartPanel(obj) {
    widthSiz = $(window).width();
    
        if (obj == 1) {
            document.getElementById("CartDataArea").style.WebkitTransition = "all 1s"; // Code for Safari 3.1 to 6.0
            document.getElementById("CartDataArea").style.transition = "all 1s";
            if(widthSiz > 1150){
                document.getElementById("CartDataArea").style.width = '400px'; 
                $("#CartClose").css("left", "-30px"); 
            }else{
                 document.getElementById("CartDataArea").style.width = '290px'; 
                $("#CartClose").css("left", "-30px"); 
            }
        } else {

            document.getElementById("CartDataArea").style.WebkitTransition = "all 1s"; // Code for Safari 3.1 to 6.0
            document.getElementById("CartDataArea").style.transition = "all 1s";
            document.getElementById("CartDataArea").style.width = '0px';
        
            $("#CartClose").css("left", "0");


        }


    }
            function SearchProduct_byUser(Obj)
            {
            search_cat = document.getElementById("search_cat").value;
            if(search_cat > 0){
            serverPage = 'http://www.Sellwings.com/ovation/SearchProductUser_multi/' + Obj + '/'+ search_cat;
            }else{
                serverPage = 'http://www.Sellwings.com/ovation/SearchProductUser/' + Obj;
                }
                xmlhttp.open("POST", serverPage);
                xmlhttp.onreadystatechange = function ()
                {

                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {

                        document.getElementById("main_content_area").innerHTML = xmlhttp.responseText;

                    }
                }
                xmlhttp.send(null);

            }

        </script>



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
                serverPage = 'http://www.Sellwings.com/ovation/website_couter/' + x;

                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function ()
                {
                    console.log('1');
                }
                xmlhttp.send(null);

            }


        </script>
 

        <script src="{{URL::to('/')}}/css/new/front_asset/js/bootstrap.min.js"></script>
 

    </body>

</html>
<style>
    .alert-box-arrow{
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-bottom: 15px solid #F6F6F6;
        margin-top: -15px;
        position: absolute;
    }
</style>

<script>

            $('.megaDropMenu').hover(function () {
                $(this).addClass('open');
            }, function () {
                $(this).removeClass('open');
            });

</script>

<script>
    jQuery('.btntoggle').on('click', function ()
    {

        jQuery('.search-form').toggle('slow');
    });
    jQuery('.btnclose').on('click', function ()
    {
        jQuery('.search-form').toggle('slow');
        return false;
    });
    jQuery('body').on('click', '.topnav', function ()
    {
        jQuery('.ac-link').slideToggle();
    });

 
</script>