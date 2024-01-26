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
    <!--<link rel="icon" type="image/png" href="{{asset('images/logo_2.png')}}" />-->
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
    <!-- <link rel="stylesheet" href="{{URL::to('/')}}/public/css/frontend/responsive.css" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('css/frontend/responsive.css')}}" type="text/css">
    <!--<link rel="stylesheet" href="{{URL::to('/')}}/public/css/backend/font-awesome.min.css" type="text/css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Document Title -->
    	<title>{{$settings->name}} | </title>
</head>

<body>
    <!--Page Wrapper starts-->
    <div class="page-wrapper">
        <!--header starts-->
        <header class="header transparent">
            <!--Main Menu starts-->
            <div class="site-navbar-wrap maf">
                <div class="container">
                    <div class="site-navbar">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-2 col-2 xpx-7">
                                <!-- <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::to('/')}}/application/storage/app/{{$settings->logo}}" alt="logo" class="img-fluid"></a> -->
                                <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{asset('images/logo_2.png')}}" alt="logo" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-7 col-md-10 col-10 xpx-7">
                                <div class="row maf">
                                    
                                    <div class="col-lg-12 col-md-10 col-10 xpx-7">
                                        <div class="search_box">
                                            <form action="{{URL::to('/')}}/shop" method="GET">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Search..." name="search" class="typeahead" autocomplete="off">
                                                    <span class="fa fa-search"></span>
                                                    <button class="search_btn" type="submit">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-2 col-2 xpx-7">
                                        <nav class="site-navigation text-left">
                                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                                <li>
                                                    <a class="active" href="{{URL::to('/')}}">Home</a>
                                                </li>
                                                <!--<li>-->
                                                <!--    <a  href="{{route('shop')}}">Shop</a>-->
                                                <!--</li>-->
                                                <?php $cats=\DB::table('cats')->where('parent',0)->where('status','active')->get();?>
                                                @if($cats)
                                                    @foreach($cats as $cat)
                                                    <li>
                                                        <a  href="{{URL::to('/')}}/shop/cat/{{$cat->id}}">{{$cat->name}}</a>
                                                    </li>
                                                    @endforeach
                                                @endif
                                                <?php $menus=App\Pages::where('position','header')->where('parent_page',0)->orderBy('sorts','asc')->get();?>
                                                @forelse($menus as $item)
                                                 <?php $subpage=App\Pages::where('parent_page',$item->id)->get();?>
                                                  <li @if(count($subpage)>0) class="dropdown" @endif>
                                                    <a @if(count($subpage)>0) class="dropdown-toggle" data-toggle="dropdown" @endif @if($item->links!='') href="{{$item->links}}" @else href="{{URL::to('/')}}/page/{{$item->slug}}" @endif>
                                                    {{$item->name}} @if(count($subpage)>0) <span class="caret"></span> @endif</a>
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
                                                <!--<li>-->
                                                <!--    <a class="active" href="{{URL::to('/')}}/about-us">About us</a>-->
                                                <!--</li>-->
                                                <!-- <li>-->
                                                <!--    <a class="active" href="{{URL::to('/')}}/contact-us">Contact us</a>-->
                                                <!--</li> -->
                                                <!--<li class="">
                                                    <a class="active" href="{{URL::to('/')}}/offer" style="color: red;"><strong>Offer</strong></a>
                                                </li>-->
                                            </ul>
                                        </nav>
                                        <div class="d-lg-none text-right">
                                            <a href="#" class="mobile-bar js-menu-toggle">
                                                <span class="lnr lnr-menu"></span>
                                            </a>
                                        </div>
                                        <!--mobile-menu starts -->
                                        <div class="site-mobile-menu">
                                            <div class="site-mobile-menu-header">
                                                <div class="site-mobile-menu-close  js-menu-toggle">
                                                    <span class="ion-close-round"></span> </div>
                                            </div>
                                            <div class="site-mobile-menu-body">
                                                <div class="contact_num">
                                                    <i class="fa fa-phone"></i><a href="tel:{{$settings->mobile}}">{{$settings->mobile}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--mobile-menu ends-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 xpx-7">
                                <div class="contact_num  md-none">
                                    <i class="fa fa-phone"></i><a href="tel:{{$settings->mobile}}">{{$settings->mobile}}</a>
                                </div>
                                <div class="menu-btn">
                                    <ul class="user-btn">
                                        <li><a href="{{URL::to('/')}}/wishlist"><i class="lnr lnr-heart"></i></a>
                                            <span>0</span>
                                        </li>
                                        <li><a href="{{URL::to('/')}}/cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                            <span>{{Cart::count()}}</span>
                                        </li>
                                        @if(Auth::check('login')==true)
                                        <li>
                                            <a href="{{route('admin.dashboard')}}" class="dropbtn" target="_blank"><i class="lnr lnr-user"></i></a>
                                        </li>
                                        @else
                                        <li ><a href="{{route('login')}}" style="text-decoration:none;color:#fff;font-size:15px" target="_blank">Login</a>
                                        </li>
                                        <li><a href="{{route('register')}}" style="text-decoration:none;color:#fff;font-size:15px" target="_blank">Register</a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Main Menu ends-->
        </header>
        <!--header ends-->
            <!--about section starts-->
    
                        @yield('content')
                    
    <!--about section ends-->
        <!--Footer Starts-->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer_widget">
                            <h2><a href="index.html">Flower Mart</a></h2>
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

    </body>