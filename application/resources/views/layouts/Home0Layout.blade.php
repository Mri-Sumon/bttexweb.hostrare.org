<?php $settings=App\Settings::where('id',1)->first();?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
        <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="{{$settings->name}}" />
    <!-- Links -->
    <!-- Favicons -->
    
    <!-- <link rel="icon" type="image/png" href="{{URL::to('/')}}/application/storage/app/{{$settings->logo}}" /> -->
    <!--<link rel="icon" type="image/png" href="{{URL::to('/')}}/application/storage/app/slider/favcon.png" />-->
    <link rel="icon" type="image/x-icon" href="{{URL::to('/')}}/application/storage/app/slider/525967.png"/>
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Stylesheets -->
    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="{{URL::to('/')}}/public/css/frontend/plugin.css" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('css/frontend/plugin.css')}}" type="text/css">
    <!-- style CSS -->
    <!-- <link rel="stylesheet" href="{{URL::to('/')}}/public/css/frontend/style.css" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('css/frontend/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/frontend/style1.css')}}" type="text/css">
    <!-- <link rel="stylesheet" href="{{URL::to('/')}}/public/css/frontend/responsive.css" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('css/frontend/responsive.css')}}" type="text/css">
    <!--<link rel="stylesheet" href="{{URL::to('/')}}/public/css/backend/font-awesome.min.css" type="text/css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

<!-- Optional theme -->
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->
  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
@yield('details-script')





    <!-- Document Title -->
    	<title>{{$settings->name}} | </title>

  <style type="text/css">
    nav ul li a{color: white;}
    .navbar {margin-bottom: 0px;}
     ul li a:hover{color:black;}
	 
    .input1{float: left;}
    .cart>li>a{color: white;}
    li:hover{background-color: #6D6E6A;}
    body{
        overflow-x: hidden;
    }
  </style>
  
</head>

<body>
<div class="container-fluid">
    <header class="row head" >
        <div class="row col-sm-12 " style="background: #008ACF; color: white;right: -14px;">
            <dir class="col-sm-1"></dir>
            <div class="col-sm-3 welcome_msg" >Welcome to Tanha BD Shop</div>
            <div class="col-sm-3 welcome_msg1"><a href="#" style="color:#fff;text-decoration:none;"><i class="fa fa-phone"></i> {{$settings->mobile}}</a></div>
            <div class="col-sm-4 small_first">
                <div class="dropdown phone_dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">
                    
                    <i class="fa fa-align-justify"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item nav-link" href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                    <a class="dropdown-item nav-link" href="/page/contact-us"><i class="fa fa-envelope"></i> CONTACT</a>
                    <a class="dropdown-item nav-link" href="/track_order"><i class="fa fa-search"></i> TRACK ORDER</a>
                    <a class="dropdown-item nav-link" href="/checkout"><i class="fa fa-shopping-cart"></i> CHECKOUT</a>
                  </div>
                </div>
                <div class="small_second" style="margin-left:10px;">
                    <div class="dropdown phone_dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @if(Auth::check())
                        <a class="dropdown-item nav-link" href="/dashboard"><i class="fa fa-user"></i> ACCOUNT</a></li>
                        @else
                          <a class="dropdown-item nav-link" href="/login"><i class="fa fa-user"></i> Login</a></li>
                          <a class="dropdown-item nav-link" href="/register"><i class="fa fa-user"></i> Register</a></li>
                         @endif
                  </div>
                </div>
                </div>
            </div>
            <div class="col-sm-2 mobile_hide_row">
                <a href="{{route('home')}}" style="display:block;"><img class="company_logo1" src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->logo}}" width="200px" alt="logo"></a>
            </div>
            <div class="col-sm-3 mobile_on"></div>
            <div class="col-sm-6 mobile_hide_row">
                <nav class="navbar header_navbar_1 navbar-expand-lg navbar-light text-right">
                    <button class="navbar-toggler header_navbar1"" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a class="nav-link" href="{{route('home')}}"> HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="/page/contact-us"><i class="fa fa-envelope"></i> CONTACT</a></li>
                            <li class="nav-item"><a class="nav-link" href="/track_order"><i class="fa fa-search"></i> TRACK ORDER</a></li>
                            <li class="nav-item"><a class="nav-link" href="/checkout"><i class="fa fa-shopping-cart"></i> CHECKOUT</a></li>
                            @if(Auth::check())
                            <li class="nav-item"><a class="nav-link" href="/dashboard"><i class="fa fa-user"></i> ACCOUNT</a></li>
                            @else
                            <li class="nav-item"><a class="nav-link" href="/login"><i class="fa fa-user"></i> LOGIN</a></li>
                            <li class="nav-item"><a class="nav-link" href="/register"><i class="fa fa-user"></i> REGISTER</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
            <!--header navbar for small-->
            <div class="col-sm-12 col-md-12 header_navbar_small">
                <nav class="navbar navbar-expand-lg navbar-light text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                            <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                            @if($cats)
                            @foreach($cats as $cat)
                            <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}/shop/cat/{{$cat->id}}">{{$cat->name}}</a></li>
                            @endforeach
                            @endif
                            <?php $menus=App\Pages::where('position','header')->where('parent_page',0)->orderBy('sorts','asc')->get();?>
                            @forelse($menus as $item)
                            <?php $subpage=App\Pages::where('parent_page',$item->id)->get();?>
                                <li class="nav-item" @if(count($subpage)>0) class="nav-item dropdown" @endif>
                                    <a class="nav-link" @if(count($subpage)>0) class="nav-link dropdown-toggle" data-toggle="dropdown" @endif @if($item->links!='') href="{{$item->links}}" @else href="{{URL::to('/')}}/page/{{$item->slug}}" @endif>{{$item->name}} @if(count($subpage)>0) <span class="caret"></span> @endif</a>
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
                            <li class="nav-item"><a class="nav-link" href="/track_order"><i class="fa fa-search"></i> TRACK ORDER</a></li>
                            <li class="nav-item"><a class="nav-link" href="/checkout"><i class="fa fa-shopping-cart"></i> CHECKOUT</a></li>
                            @if(Auth::check())
                            <li class="nav-item"><a class="nav-link" href="/dashboard"><i class="fa fa-user"></i> ACCOUNT</a></li>
                            @else
                            <li class="nav-item"><a class="nav-link" href="/login"><i class="fa fa-user"></i> Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="/register"><i class="fa fa-user"></i> Register</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
<!--header navbar for small end-->

        <div class="row col-sm-12 " style="background-color: #0083C4; ">
            <div class="col-sm-1"></div>
            <div class="col-sm-2">
                <a href="{{route('home')}}"><img class="company_logo2" src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->logo}}" width="200px" alt="logo"></a>
            </div>
            <div class="col-sm-5 phn_hide" style="padding-top: 1.5%;" >
                <form method="post" action="{{url('action_search')}}">
                    @csrf
                    <div class="form-group input1">
                        <select class="form-control" id="exampleFormControlSelect1" name="cat_idss">
                            <option value="0">All Category</option>
                            <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                            @if($cats)
                            @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="input2">
                        <div class="input-group">
                            <input type="text" class="form-control" name="cat_search" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                <!--<i class="glyphicon glyphicon-search" style="font-size:18px;"></i>-->
                                <i class="fa fa-search" style="font-size:16px;"></i>
                                </button>
                            </div>
                        </div>
                </form>
                
                    </div>
                    <div class="input3">
                        <ul style="display:inline-block;">
                            <!---<li class="phn" style="float:left;"><a href="#" style="color:#fff;text-decoration:none;"><i class="fa fa-phone"></i> 01234567891</a></li>--->
                            <li class="cart_box_small_device" style="float:right; margin-left:20px;">
                                <a class="cart_box_link" href="/cart" style="color:fff;">
                                    <span class="cart-value">{{Cart::count()}}</span>
                                    <i class="fa fa-shopping-basket" style="font-size:25px; color:#fff;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
            <div class="col-sm-3 text-center cart_box_main" style="padding-top: 1.5%" >
                <ul style="display:inline-block;">
                    <li class="phn" style="float:left;"><a href="#" style="color:#fff;text-decoration:none;"><i class="fa fa-phone"></i> {{$settings->mobile}}</a></li>
                    <li class="cart_box" style="float:right; margin-left:20px;">
                        <a class="cart_box_link" href="/cart" style="color:fff;">
                            <span class="cart-value">{{Cart::count()}}</span>
                            <i class="fa fa-shopping-basket" style="font-size:25px; color:#fff;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    

        <div class="row col-sm-12" style="background-color:#006FA6; right: -14px;">
            <div class="col-sm-12 col-md-12 second_navbar_big">
                <div class="dropdown phone_dropdown1">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="false">
                    <i class="fa fa-align-justify"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li class="nav-item"><a class="nav-link dropdown-item" href="{{route('home')}}"> Home</a></li>
                    <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                            @if($cats)
                            @foreach($cats as $cat)
                            <?php $subcat=DB::table('cats')->where('parent',$cat->id)->where('status','active')->get();?>
                                <li class="nav-item @if(count($subcat)>0) dropdown @endif"><a class="nav-link dropdown-item @if(count($subcat)>0) dropdown-toggle @endif "  href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" @if(count($subcat)>0) id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif>{{$cat->name}}</a>
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
                            <?php $menus=App\Pages::where('position','header')->where('parent_page',0)->orderBy('sorts','asc')->get();?>
                            @forelse($menus as $item)
                            <?php $subpage=App\Pages::where('parent_page',$item->id)->get();?>
                                <li class="nav-item" @if(count($subpage)>0) class="nav-item dropdown" @endif>
                                    <a class="nav-link" @if(count($subpage)>0) class="nav-link dropdown-toggle" data-toggle="dropdown" @endif @if($item->links!='') href="{{$item->links}}" @else href="{{URL::to('/')}}/page/{{$item->slug}}" @endif>
                                        {{$item->name}} @if(count($subpage)>0) <span class="caret"></span> @endif
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
                  </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light text-left">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                            <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                            @if($cats)
                            @foreach($cats as $cat)
                            <?php $subcat=DB::table('cats')->where('parent',$cat->id)->where('status','active')->get();?>
                                <li class="nav-item @if(count($subcat)>0) dropdown @endif"><a class="nav-link @if(count($subcat)>0) dropdown-toggle @endif "  href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" @if(count($subcat)>0) id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif>{{$cat->name}}</a>
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
                            <?php $menus=App\Pages::where('position','header')->where('parent_page',0)->orderBy('sorts','asc')->get();?>
                            @forelse($menus as $item)
                            <?php $subpage=App\Pages::where('parent_page',$item->id)->get();?>
                                <li class="nav-item" @if(count($subpage)>0) class="nav-item dropdown" @endif>
                                    <a class="nav-link" @if(count($subpage)>0) class="nav-link dropdown-toggle" data-toggle="dropdown" @endif @if($item->links!='') href="{{$item->links}}" @else href="{{URL::to('/')}}/page/{{$item->slug}}" @endif>
                                        {{$item->name}} @if(count($subpage)>0) <span class="caret"></span> @endif
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
                </nav>
                <span class="search_phone">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                        <i class="fa fa-search"></i>
                    </button>
                                   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content" style="width:80%;">
                                        <form method="post" action="{{url('action_search')}}">
                                        @csrf
                                        <div class="form-group input1" style="display:none;">
                                          <select class="form-control" id="exampleFormControlSelect1" name="cat_idss">
                                              <option value="0">All Category</option>
                                              <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                                              @if($cats)
                                                @foreach($cats as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endforeach
                                            @endif
                                          </select>
                                        </div>
                                            <div class="input2" style="display:block;">
                                                  <div class="input-group">
                                                      <input type="text" class="form-control" name="cat_search" placeholder="Search">
                                                      <div class="input-group-btn">
                                                          <button class="btn btn-default" type="submit" style="margin-top:-16px;margin-right:-24px;padding-left:22px;background-color: #1D98C1;">
                                                              <i class="glyphicon glyphicon-search" style="font-size:18px;"></i>
                                                              <i class="fa fa-search" style="font-size:16px;margin-top:-20px;"></i>
                                                          </button>
                                                      </div>
                                                  </div>
                                                  
                                            </form>
                                            
                                          </div>
                                          
                                        </div>
                                      </div>
                                   </div>
                </span>
                <span class="company_logo-phone">
                    <a href="{{route('home')}}" style="display:block;"><img class="company_logo4" src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->logo}}" width="200px" alt="logo"></a>
                </span>
                <div class="input10">
                        <ul style="display:inline-block;">
                            <!---<li class="phn" style="float:left;"><a href="#" style="color:#fff;text-decoration:none;"><i class="fa fa-phone"></i> 01234567891</a></li>--->
                            <li class="cart_box_small_device" style="float:right; margin-left:20px;">
                                <a class="cart_box_link" href="/cart" style="color:fff;">
                                    <span class="cart-value">{{Cart::count()}}</span>
                                    <i class="fa fa-shopping-basket" style="font-size:25px; color:#fff;"></i>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </header>
</div>
@yield('content')
 <!--about section ends-->
        <!--Footer Starts-->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer_widget">
                            <h2><a href="/">Tanha BD Shop</a></h2>
                            <p class="address">{{$settings->address}}</p>
                            <div class="social_share">
                                <h6 class="footer_subtitle">Follow Us</h6>
                                <ul class="social_profile">
                                    <li><a class="bg_fb" href="{{$settings->link1}}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="bg_in" href="{{$settings->link2}}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="bg_tt" href="{{$settings->link3}}"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer_widget">
                            <h3>Explore</h3>
                            <ul class="footer_menu">
                                <li><a href="{{URL::to('/')}}/page/about-us">About us</a></li>
                                <li><a href="{{URL::to('/')}}/page/contact-us">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer_widget">
                            <h3>Policy</h3>
                            <ul class="footer_menu">
                                <li><a href="{{URL::to('/')}}/page/terms-conditions">Terms &amp; conditions</a></li>
                                <li><a href="{{URL::to('/')}}/page/privacy-policy">Privacy Policy</a></li>
                                <li><a href="{{URL::to('/')}}/page/refund-policy">Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer_widget">
                            <div class="newsletter_box">
                                <h3>Subscribe to our newsletter</h3>
                                <form action="{{URL::to('/')}}/subscriber/store" method="POST">
                                    <input type="hidden" name="_token" value="XKgp6dBsqwelaTtl7KtoedpMGH65f9Bs1pddlFJN">                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" name="email">
                                        <button type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                            <div class="payment_method">
                                <h6 class="footer_subtitle">Pay Through</h6>
                                <ul>
                                    <!-- <li><img src="{{URL::to('/')}}/public/images/visa.png" alt="Image"></li>
                                    <li><img src="{{URL::to('/')}}/public/images/mastercard.png" alt="Image"></li>
                                    <li><img src="{{URL::to('/')}}/public/images/bkash.png" alt="Image"></li>
                                    <li><img src="{{URL::to('/')}}/public/images/cashondelivery.png" alt="Image"></li> -->
                                    <li><img src="{{asset('images/visa.png')}}" alt="Image"></li>
                                    <li><img src="{{asset('images/mastercard.png')}}" alt="Image"></li>
                                    <li><img src="{{asset('images/bkash.png')}}" alt="Image"></li>
                                    <li><img src="{{asset('images/cashondelivery.png')}}" alt="Image"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>© {{$settings->name}} {{date("Y")}}. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer ends-->
    </div>
    <!--Page Wrapper ends-->

    <!--login Modal starts-->
    <div class="modal fade" id="user-login-popup">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-close"></i></span></button>
                    <!--User Login section starts-->
                    <div class="user-login-section">
                        <ul class="ui-list nav nav-tabs mb-30" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#login" role="tab" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#register" role="tab" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="login-wrapper">
                            <div class="ui-dash tab-content">
                                <div class="tab-pane fade show active" id="login" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="login-form" action="{{URL::to('/')}}/login" method="POST">
                                                <input type="hidden" name="_token" value="XKgp6dBsqwelaTtl7KtoedpMGH65f9Bs1pddlFJN">                                                <div class="form-group">
                                                    <label for="mobile">Mobile</label>
                                                    <input type="text" name="mobile" id="mobile" placeholder="Enter your mobile number...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Password</label>
                                                    <input type="password" name="password" id="pwd" placeholder="Password">
                                                </div>
                                                <div class="row mt-20">
                                                    <div class="col-md-6 col-6 text-left">
                                                        <div class="check-box">
                                                            <input id="check-l" type="checkbox" name="check">
                                                            <label for="check-l">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6 text-right">
                                                        <div class="sm-left">
                                                            <a href="#">Forgot Password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-6">
                                                        <div class="res-box text-left mt-0">
                                                            <button type="submit" class="btn v6"><i class="lnr lnr-exit"></i> Log In</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 pl-0">
                                                        <div class="social-profile-login  ">
                                                            <span>Or</span>
                                                            <ul class="social-btn d-inline float-right">
                                                                <li class="bg-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li class="bg-gg"><a href="#"><i class="fab fa-google"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="register" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="register-form" action="{{URL::to('/')}}/register" method="post">
                                                <input type="hidden" name="_token" value="XKgp6dBsqwelaTtl7KtoedpMGH65f9Bs1pddlFJN">                                                <div class="form-group">
                                                    <label for="fname">Name</label>
                                                    <input type="text" name="name" id="fname" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="user-name">Mobile</label>
                                                    <input type="text" name="mobile" id="user-name" placeholder="mobile">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" placeholder="Email Address">
                                                </div>
                                                <div class="form-group d-none">
                                                    <label for="phone">Phone</label>
                                                    <input type="number" name="phone" id="phone" placeholder="Phone number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd_2">Password</label>
                                                    <input type="password" name="password" id="pwd_2" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd_3">Confirm Password</label>
                                                    <input type="password" name="password_confirmation" id="pwd_3" placeholder="Confirm Password">
                                                </div>
                                                <div class="check-box text-left">
                                                    <input type="checkbox" class="" name="remember" id="remember" required>
                                                    <label for="remember">I've read and accept <a href="#">terms &amp; conditions</a></label>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-6">
                                                        <div class="res-box text-left mt-0">
                                                            <button type="submit" class="btn v6"><i class="lnr lnr-enter"></i>Register</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 pl-0">
                                                        <div class="social-profile-login  ">
                                                            <span>Or</span>
                                                            <ul class="social-btn d-inline float-right">
                                                                <li class="bg-fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                                <li class="bg-gg"><a href="#"><i class="fab fa-google"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--User login section ends-->
                </div>
            </div>
        </div>
    </div>
    <!--login Modal ends-->
    <!-- Cart Modal Starts -->
    <div class="modal fade" id="cart-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-close"></i></span></button>
                    <!--Cart Modal starts-->
                    <div class="cart-modal_wrap">
                        <div class="cart_details">
                            <h6><span class="ion-ios-checkmark"></span>0 items has been added to your cart</h6>
                                                    </div>
                        <div class="cart_checkout">
                            <h4>My Shopping Cart</h4>
                            <div class="cart_subtotal">
                                <h5>Subtotal</h5>
                                <p>৳ 0</p>
                            </div>
                        </div>
                        <div class="cart_modal_action">
                            <a href="{{URL::to('/')}}/checkout" class="btn v3">Proceed to Checkout</a>
                        </div>
                    </div>
                    <!--Cart Modal ends-->
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Modal ends -->

    <!--plugin js-->
    <!-- <script src="{{URL::to('/')}}/public/js/frontend/plugin.js"></script> -->
    <script src="{{asset('js/frontend/plugin.js')}}"></script>
    <!--Main js-->
    <!-- <script src="{{URL::to('/')}}/public/js/frontend/main.js"></script> -->
    <script src="{{asset('js/frontend/main.js')}}"></script>
    <!--Typehead js-->
    <!-- <script src="{{URL::to('/')}}/public/js/frontend/bootstrap3-typeahead.min.js"></script> -->
    <!--Scripts ends-->
    <script>
        /*var path = "{{URL::to('/')}}/autocomplete";

        $('input.typeahead').typeahead({
            source:  function (query, process) {
                return $.get(path, { query: query }, function (data) {
                    //console.log(data);
                    return process(data);
                });
            },
            highlighter: function (item, data) {
                //alert(item);
                //console.log(data.name);
                html = '<div class="row">';
                if(data.image) {
                    images = data.image.split(",");
                    html += '<div class="col-md-2">';
                    html += '<img src="public/images/product/'+images[0]+'"/ height="330px;" width="420px;">';
                    html += '</div>';
                }                
                html += '<div class="col-md-10 pl-0">';
                html += '<span class="product-autocomplete-name">'+data.name+'</span>';
                if(data.author) {
                    html += '<br><span class="product-autocomplete-author">By '+data.author.name+'</span>'
                }
                html += '</div>';
                html += '</div>';
                //console.log(html);
                return html;
            }
        });*/
      // User Dropdown Menu
        $('.log_in').on('click', function(){
            $('.user_dropdown').toggleClass('open');
        });

        var message = null;
        if(message == 'Product successfully added to cart' || message == 'Cart updated successfully') {
            $("#cart-modal").modal("show");
        }
    </script>
     <script>
        $("#read-btn").on("click", function () {
            readable_img = $(this).data('readable_img').split(",");
            var content = '';
            for(i = 0; i < readable_img.length; i++) {
                if(i)
                    content += '<hr>';
                content += '<img class="center-img" style="width:80%;height: 80%;" scrolling="no" src="../public/images/readable_image/'+readable_img[i]+'">';
            }
            $("div.content").html(content);
            $("#show-pdf").modal();
        });

        var message = null;
        if(message == 'Product successfully added to cart' || message == 'Cart updated successfully') {
            $("#cart-modal").modal("show");
        }
    </script>
    <script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
<script>
    function UpdateOrderInfo(obj) {
        
        delivery_amount1 = document.getElementById("DeliAddress").value
        console.log('delivery_amount1');
        total_order_tk = document.getElementById("TotalPtk").value
        if (total_order_tk) {
            total_tk = Number(total_order_tk) + Number(delivery_amount1);
            document.getElementById("CustomerDeliveryPoint").innerHTML = ' ৳ ' + delivery_amount1;
 
  document.getElementById("travel_cost").value = delivery_amount1;
            document.getElementById("GrandOrderTk").innerHTML = ' ৳ ' + total_tk;
        }
 
    }
 
 
 
 
</script>
<script src="http://www.kalerhaat.com/slider-asset/js/jquery.min.js"></script>
<script src="http://www.kalerhaat.com/slider-asset/js/owl.carousel.min.js"></script>

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
</script> 
 

</body>
</html>