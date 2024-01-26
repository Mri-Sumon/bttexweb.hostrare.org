<?php $settings=App\Settings::where('id',1)->first();?>
<!DOCTYPE html>
<!-- saved from url=(0022)https://giftmart.express/ -->
<html class="html-home-page"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{$settings->name}} - {{$settings->tagline}}</title>
    
    <meta name="title" content="{{$settings->tagline}}">
    <meta name="description" content="Online shopping in Bangladesh for men, women &amp;amp; kids. Buy dress, gift item, beauty products, unique items, jewelry, watch, electronics at giftmart.express">
    <meta name="keywords" content="Online shop in Bangladesh, online shopping site in Bangladesh, online shop in Bangladesh, Online Shop Bangladesh, Gifts to Bangladesh, online shopping store, online shopping store Bangladesh, Deals,Priyo, Discounts, Discount, Best deals dhaka, best deals bangladesh, cheapest iphone in bangladesh, cheap electronics bangladesh, restaurants dhaka, electronics dhaka, dhaka electronics, travel bangladesh, travel offers, bangladesh travel, bangladesh tour, discount products, fashion dhaka, cafe dhaka, dhaka cafes, send gifts bangladesh, send gift to bangladesh, bangladesh gift, bangladeshi gift, gift bangladesh, bangladesh online shopping, gift for bangladesh, online gift delivery shop, send flowers to dhaka, send cakes chocolates, fruits, sharee, greeting cards to Bangladesh, bangladesh wedding gifts, gift to bangladesh on eid, gift to bangladesh on valentine day, Cheap tabs, ecommerce bangaldesh, free antivirus, online shopping bd, deals dhaka,  প্রিয়শপ">
    <meta name="generator" content="nopCommerce">
    <meta property="og:title" content="{{$settings->tagline}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://giftmart.express/">
    <meta property="og:image" content="https://giftmart.express/assets/0072813.jpg">
    <meta property="og:description" content="Online shopping in Bangladesh for men, women &amp;amp; kids. Buy dress, gift item, beauty products, unique items, jewelry, watch, electronics at giftmart.express">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{URL::to('/')}}/assets/css.css" rel="stylesheet" type="text/css">
    
    
    


    <!-- Google code for Analytics tracking -->
<!--<script src="{{URL::to('/')}}/assets/312987619202131.js" async=""></script>-->
<script type="text/javascript" async="" src="{{URL::to('/')}}/assets/atrk.js"></script>


    <link href="{{URL::to('/')}}/assets/yzap_tth7_hxvqa6s9rnq2zuz_2xfev-l5k8dyu-67o1.css" rel="stylesheet">


    

    <script src="{{URL::to('/')}}/assets/qnylfqrh3tpf8pckrtzlssiv_6vlvkjgjrxkjvbnvzm1.js"></script>

<script src="{{URL::to('/')}}/assets/bootstrap.min.js" type="text/javascript"></script>

    <link href="{{URL::to('/')}}/assets/custom.css" rel="stylesheet" type="text/css">
    
    
    
    
    
<link rel="shortcut icon" href="assets/0072813.jpg">
    <!--Powered by nopCommerce - http://www.nopCommerce.com-->
    <!-- Start Alexa Certify Javascript -->
    <!--<script type="text/javascript">-->
    <!--    _atrk_opts = { atrk_acct: "prBMj1a8y100GO", domain: "giftmart.express", dynamic: true };-->
    <!--    (function () { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(as, s); })();-->
    <!--</script>-->
    <!--<noscript><img src="" style="display: none" height="1" width="1" alt="" /></noscript>-->
    <!-- End Alexa Certify Javascript -->
</head>
<body class="notAndroid23 home-page-body " style="" data-new-gr-c-s-check-loaded="14.1087.0" data-gr-ext-installed="">
    




<div class="ajax-loading-block-window" style="display: none">
</div>
<div id="dialog-notifications-success" title="Notification" style="display:none;">
</div>
<div id="dialog-notifications-error" title="error" style="display:none;">
</div>
<div id="bar-notification" class="bar-notification">
    <span class="close" title="Close">&nbsp;</span>
</div>




<!--[if lte IE 7]>
    <div style="clear:both;height:59px;text-align:center;position:relative;">
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank">
            <img src="/Themes/Pavilion/Content/images/ie_warning.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
<![endif]-->


<div class="master-wrapper-page ">
    


<div class="header">
    

    <div class="header-upper">
        <div class="center">
            <div class="header-short-text">{{$settings->tagline}}</div>
            <div class="hotline-section">
                <span><a>{{$settings->mobile}}</a> - {{$settings->office_hours}}</span>
            </div>



        <div class="header-upper-links-right">
            


            <a title="Get on google play" href="#">
                <!--<img src="{{URL::to('/')}}/assets/Play-Store-icon.png" width="27" height="27">-->
                
            </a>

            <!--<a href="https://giftmart.express/sellwithus">Sell with us</a>-->

            <a href="{{URL::to('/')}}/track_order">Trach you Order</a>



        </div>
            
        </div>

    </div>

    <div class="header-middle">
        <div>
            <div class="header-logo" style="width:10%">  
<a href="{{URL::to('/')}}" class="logo">
<img alt="{{$settings->name}}" src="{{URL::to('/')}}/application/storage/app/slider/{{$settings->logo}}"></a>
            </div>
            <div class="header-menu-parent">
                <div class="header-menu categories-in-side-panel">
                    <div class="close-menu">
                        <span>Close</span>
                    </div>


                    



<input type="hidden" value="false" id="isRtlEnabled">

<ul class="top-menu">
    <?php $cats=DB::table('cats')->where('parent','0')->get();?>
    @foreach($cats as $cat)
        <li class="root-category-items">
                <a class="with-subcategories" href="{{URL::to('/')}}/shop/cat/{{$cat->id}}">{{$cat->name}}</a>
                <div class="plus-button"></div>
                <?php $subcats=DB::table('cats')->where('parent',$cat->id)->get();?>
                @if(count($subcats)>0)
                <div class="sublist-wrap">
                <ul class="sublist">
                    <li class="back-button">
                        <span>Back</span>
                    </li>
                    @foreach($subcats as $subcat)
                    <li>
                            <a class="with-subcategories" href="{{URL::to('/')}}/shop/cat/{{$subcat->id}}">{{$subcat->name}}</a>
                            <div class="plus-button"></div>
                            <?php $subcat2s=DB::table('cats')->where('parent',$subcat->id)->get();?>
                            @if(count($subcat2s)>0)
                                
                            <div class="sublist-wrap">
                                <ul class="sublist">
                                    <li class="back-button">
                                        <span>Back</span>
                                    </li>
                                    @foreach($subcat2s as $subcat2)
                                    <li>
                                                <a href="{{URL::to('/')}}/shop/cat/{{$subcat2->id}}">{{$subcat2->name}}</a>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            @endif
                    </li>
                    @endforeach
                            
                  
                    
                        </ul>
                        
                    </div>
                @endif
            </li>
            
    @endforeach
</ul>



                </div>
            </div>
            <div class="header-middle-search" style="width:50%">
                <div class="search-box store-search-box">
                    
  <form method="post" action="{{URL::to('/')}}/action_search" id="small-search-box-form2">
                                        @csrf                  
<!--<form action="https://giftmart.express/searchproduct" id="small-search-box-form2" method="get" novalidate="novalidate">    -->
<input type="search" class="search-box-text" id="small-searchterms" autocomplete="off" name="cat_search" placeholder="Search Products">
    <input type="submit" class="button-1 search-box-button" value="Search">
        <script type="text/javascript">
            $("#small-search-box-form2").submit(function(event) {
                if ($("#small-searchterms").val() == "") {
                    alert('Please enter some search keyword');
                    $("#small-searchterms").focus();
                    event.preventDefault();
                }
            });
        </script>
</form>
                </div>
            </div>

            <div class="header-middle-right" style="padding-right:50px">

                <div class="flyout-cart-wrapper" id="flyout-cart">
    <a href="{{URL::to('/')}}/cart" class="cart-trigger">
        <span class="cart-qty">{{\Cart::count()}} item(s)</span>
        <span class="cart-label"> </span>
            <span class="cart-ttl">- Tk {{\Cart::subtotal()}}</span>
    </a>
    <div class="flyout-cart" style="display:block;">
        <div class="mini-shopping-cart">
            <div class="count">
There are <a href="{{URL::to('/')}}/cart">1 item(s)</a> in your cart.            </div>
                <div class="items ps-container d-block" style="max-height: 487px;">
                    @foreach(\Cart::content() as $item)
                            @php
                               $products=DB::table('products')->where('id',$item->id)->first();
                            @endphp
                        <div class="item first">
                                <div class="picture">
                                    <a href="{{route('details',['product_id'=>$item->id])}}" title="Show details for {{$item->name}}">
                                        <img alt="Picture of {{$item->name}}" src="{{URL::to('/')}}/application/storage/app/product/{{$products->f_pic}}" title="Show details for PUSTI Mustard Oil - 80 ML">
                                    </a>
                                </div>
                            <div class="product">
                                <div class="name">
                                    <a href="{{route('details',['product_id'=>$item->id])}}">{{$item->name}}</a>
                                </div>
                                <div class="price"><label>{{$item->qty}}</label> <span>x</span> <strong>Tk {{$item->price}}</strong></div>
                            </div>
                        </div>
                        @endforeach
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
                <div class="totals">Sub-Total: <strong>Tk {{\Cart::subtotal()}}</strong></div>
                <div class="buttons">
                        <a href="{{URL::to('/')}}/cart" class="button-1 cart-button">
                        <input type="button" value="Go to cart" class="button-1 cart-button">
                        </a>
                        <a href="{{URL::to('/')}}/checkout" class="button-1 checkout-button"><input type="button" value="Checkout" class="button-1 checkout-button" ></a>
                                            
                </div>
        </div>
    </div>
</div>

                <div class="header-links-wrapper">
                    <label>My Account</label>
                    


<div class="header-links">
    <ul>
        
            <li><a href="{{URL::to('/')}}/register" class="ico-register">Register</a></li>
            <li>
                <a href="{{URL::to('/')}}/login" class="ico-login " data-loginurl="/login">Log in</a>
            </li>
            <!--                <li>-->
            <!--    <a href="https://giftmart.express/wishlist" class="ico-wishlist">-->
            <!--        <span class="wishlist-label">Wish List</span>-->
            <!--        <span class="wishlist-qty">(0)</span>-->
            <!--    </a>-->
            <!--</li>-->
                
    </ul>
</div>

                </div>
            </div>
        </div>
    </div>

    <div class="header-menu-wrapper" style="background-color: #e30047; margin-top: 1px;">
        <div class="container">
            <div class="header-menu has-mmenu-on-top">
                
<link href="{{URL::to('/')}}/assets/MegaMenu.css" rel="stylesheet" type="text/css">
<script src="{{URL::to('/')}}/assets/MegaMenu.min.js" type="text/javascript"></script>

<ul class="mega-menu" data-isrtlenabled="false" data-enableclickfordropdown="false">
    
<?php $cats=DB::table('cats')->where('parent','0')->get();?>
   @foreach($cats as $cat)        
    <li class="has-sublist mega-menu-categories root-category-items" data-categoryid="{{$cat->id}}">
        <a class="with-subcategories" href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" title="{{$cat->name}}"><span>{{$cat->name}}</span></a>
        <div class="plus-button"></div>
        <div class="sublist-wrap">
            <ul class="sublist">
                <li class="back-button">
                    <span>Responsive Back Button</span>
                </li>
                <?php $subcats=DB::table('cats')->where('parent',$cat->id)->get();?>
                @if(count($subcats)>0)
                    @foreach($subcats as $subcat)
                    <li class="has-sublist" data-categoryid="{{$subcat->id}}">
                        <a class="with-subcategories" href="{{URL::to('/')}}/shop/cat/{{$subcat->id}}" title="{{$subcat->name}}"><span>{{$subcat->name}}</span></a>
                        <div class="plus-button"></div>
                    <div class="sublist-wrap">
                        <ul class="sublist">
                            <li class="back-button">
                                <span>Responsive Back Button</span>
                            </li>
                            <?php $subcat2s=DB::table('cats')->where('parent',$subcat->id)->get();?>
                            @if(count($subcat2s)>0)
                                @foreach($subcat2s as $subcat2)
                                <li data-categoryid="{{$subcat2->id}}">
                                    <a class="lastLevelCategory" href="{{URL::to('/')}}/shop/cat/{{$subcat2->id}}" title="{{$subcat2->name}}"><span>{{$subcat2->name}}</span></a>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </li>
                    @endforeach
                @endif
            </ul>
                </div>
            </li>
     @endforeach       
</ul>






            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .header-menu.has-mmenu-on-top {
        text-align: center;
    }

        .header-menu.has-mmenu-on-top > .mega-menu > .root-category-items {
            margin: 0 5px;
        }

            .header-menu.has-mmenu-on-top > .mega-menu > .root-category-items :hover {
                background-color: #E30047;
            }

            .header-menu.has-mmenu-on-top > .mega-menu > .root-category-items > a :hover {
                color: white;
            }

            .header-menu.has-mmenu-on-top > .mega-menu > .root-category-items > .sublist-wrap {
                left: calc(01vw);
                right: calc(02vw);
                width: calc(97vw);
                height: calc(68vh);
                -ms-transform: translateY(30px);
                -moz-transform: translateY(30px);
                -webkit-transform: translateY(30px);
                transform: translateY(30px);
                margin: 0 0 0 0;
                text-align: left;
            }

                .header-menu.has-mmenu-on-top > .mega-menu > .root-category-items > .sublist-wrap :hover {
                    background-color: white;
                }

    @media all and (max-width: 1000px) {
        .header-menu.has-mmenu-on-top {
            display: none !important;
        }
    }

    @media all and (min-width: 1001px) {
        .header-menu.has-mmenu-on-top > .mega-menu {
            display: block !important;
        }
    }

    @media all and (max-width: 1509px) and (min-width: 1354px) {
        .header-middle-right {
            /* padding-left: 0;*/
        }
    }

    @media all and (max-width: 1355px) and (min-width: 1287px) {
        .header-middle-right {
            padding-left: 0;
            padding-right: 0;
        }
    }

    @media all and (max-width: 1288px) {
        .header-middle-right {
            width: 38%;
            padding-left: 0;
            padding-right: 0;
        }
    }

    @media all and (max-width: 1155px) {
        .header-middle-right {
            width: 40%;
        }
    }
</style>



















    <script type="text/javascript">
        AjaxCart.init(false, '.header-links .cart-qty', '.header-links .wishlist-qty', '#flyout-cart');
    </script>
    <div class="overlayOffCanvas"></div>
    <div class="responsive-nav-wrapper-parent" style="">
        <div class="responsive-nav-wrapper">
            <div class="menu-title">
                <span>Menu</span>
            </div>
            <div class="search-wrap">
                <span>Search</span>
            </div>
            <div class="shopping-cart-link">
                <span>Shopping cart</span>
            </div>            
            
            <div class="personal-button" id="header-links-opener">
                <span>Personal menu</span>
            </div>
            <div class="preferences-button" id="header-selectors-opener">
                <span>Preferences</span>
            </div>
                       
        </div>
    </div>
    <div class="master-wrapper-content">
        
        

<!--<div id="color-squares-info" data-retrieve-color-squares-url="/PavilionTheme/RetrieveColorSquares" data-product-attribute-change-url="/ShoppingCart/ProductDetails_AttributeChange" data-productbox-selector=".product-item" data-productbox-container-selector=".color-squares-wrapper" data-productbox-price-selector=".prices .actual-price">-->
<!--</div>-->

@yield('content')





<div class="footer" itemscope="" itemtype="http://schema.org/LocalBusiness">
    <div class="footer-upper">
        <div class="center">
            <div class="newsletter">
    <div class="title">
        <strong>Title</strong>
    </div>
    <div class="newsletter-subscribe" id="newsletter-subscribe-block">
        <div class="newsletter-email">
            <input class="newsletter-subscribe-text" id="newsletter-email" name="NewsletterEmail" placeholder="Place Holder" type="text" value="">
            <input type="button" value="Subscribe" id="newsletter-subscribe-button" class="button-1 newsletter-subscribe-button">
        </div>
        <div class="newsletter-validation">
            <span id="subscribe-loading-progress" style="display: none;" class="please-wait">Wait...</span>
            <span class="field-validation-valid" data-valmsg-for="NewsletterEmail" data-valmsg-replace="true"></span>
        </div>
    </div>
    <div class="newsletter-result" id="newsletter-result-block"></div>
    <script type="text/javascript">
        function newsletter_subscribe(subscribe) {
            var subscribeProgress = $("#subscribe-loading-progress");
            subscribeProgress.show();
            var postData = {
                subscribe: subscribe,
                email: $("#newsletter-email").val()
            };
            $.ajax({
                cache: false,
                type: "POST",
                url: "/subscribenewsletter",
                data: postData,
                success: function(data) {
                    subscribeProgress.hide();
                    $("#newsletter-result-block").html(data.Result);
                    if (data.Success) {
                        $('#newsletter-subscribe-block').hide();
                        $('#newsletter-result-block').show();
                    } else {
                        $('#newsletter-result-block').fadeIn("slow").delay(2000).fadeOut("slow");
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert('Failed to subscribe.');
                    subscribeProgress.hide();
                }
            });
        }

        $(document).ready(function () {
            $('#newsletter-subscribe-button').click(function () {
                    newsletter_subscribe('true');
            });
            $("#newsletter-email").keydown(function (event) {
                if (event.keyCode == 13) {
                    $("#newsletter-subscribe-button").click();
                    return false;
                }
            });
        });
    </script>
</div>

            


<ul class="social-sharing">
        <li class="twitter"><a target="_blank" href="https://twitter.com/"></a></li>
            <li class="facebook"><a target="_blank" href="http://www.facebook.com/"></a></li>
            <li class="instagram"><a target="_blank" href="https://www.instagram.com//"></a></li>
            <li class="pinterest"><a target="_blank" href="https://www.pinterest.com//"></a></li>
            <li class="youtube"><a target="_blank" href="https://www.youtube.com/"></a></li>
</ul>
        </div>
    </div>
    <div class="footer-middle">
        <div class="center">
            <div class="footer-block">
                <div class="title">
                    <strong>Information</strong>
                </div>
                <ul class="list">
                    <?php $pages=\DB::table('pages')->get()?>
                    @foreach($pages as $page)
                        <li><a href="{{URL::to('/')}}/page/{{$page->slug}}">{{$page->name}}</a></li>
                        @endforeach
                </ul>
            </div>
            <div class="footer-block d-none">
                <div class="title">
                    <strong>Customer Service</strong>
                </div>
                <ul class="list">
                        <li><a href="{{URL::to('/')}}/security-policy">Security Policy</a></li>
                        <li><a href="{{URL::to('/')}}/orders-stock-availability-and-pricing">Orders, Stock Availability &amp; Pricing</a></li>
                        <li><a href="{{URL::to('/')}}/shipping-returns">Shipping &amp; Replacement</a></li>
                        <li><a href="{{URL::to('/')}}/privacy-policy">Privacy Policy</a></li>
                        <li><a href="{{URL::to('/')}}/terms-of-use">Terms of Use</a></li>
                </ul>
            </div>
            <div class="footer-block d-none">
                <div class="title">
                    <strong>My Account</strong>
                </div>
                <ul class="list">
                    <li><a href="{{URL::to('/')}}/customer/info">Customer info</a></li>
                    <li><a itemprop="url" href="{{URL::to('/')}}/customer/addresses">Addresses</a></li>
                    <li><a href="{{URL::to('/')}}/order/history">Orders</a></li>

                        <li><a href="{{URL::to('/')}}/cart">Shopping cart</a></li>
                                            <li><a href="{{URL::to('/')}}/wishlist">Wish List</a></li>
                                            <li><a href="{{URL::to('/')}}/compareproducts">Compare products list</a></li>
                                    </ul>
            </div>
            <div class="footer-block quick-contact">
                <div class="title">
                    <strong>Contact Us</strong>
                </div>
                <ul class="list">
                    <li class="address" itemprop="address"><span>{{$settings->address}}</span></li>
                    <li class="email"><span>{{$settings->email}}</span></li>
                    <li class="phone" itemprop="telephone"><span>{{$settings->mobile}}</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-lower">
        <div class="center">
            <!--<div class="pm-n-play-wrapper">-->
            <!--    <ul class="accepted-payments">-->
            <!--        <li class="method1"></li>-->
            <!--        <li class="method2"></li>-->
            <!--        <li class="method3"></li>-->
            <!--        <li class="method4"></li>-->
            <!--        <li class="method5"></li>-->
            <!--    </ul>-->

            <!--    <a class="play" href="#">-->
                    <!--<img src="{{URL::to('/')}}/assets/playstor.png" width="110" height="30">-->
            <!--    </a>-->
            <!--</div>-->

            
            <div style="overflow: hidden">
                <div class="footer-info">
                    <span class="footer-disclaimer">Copyright &copy {{date('Y')}} {{ config('app.name') }}. All rights reserved.</span>
                </div>
                    <div class="footer-powered-by">
                        
                        Developed by <a href="https://hostrare.com/" target="_blank">Hostrare Limited</a>
                    </div>
            </div>
            <br>
    <div class="topic-block d-none">
            <div class="topic-block-title">
                
                        <h2>{{ config('app.name') }}</h2>

               
            </div>
        <div class="topic-block-body">
            <p id="dvPriyoMessage" style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;"><strong>giftmart.express</strong> is the ultimate online shopping destination for Bangladesh offering completely hassle-free shopping experience through secure and trusted gateways. We offer you trendy and reliable shopping with all your favorite brands and more. Now shopping is easier, faster and always joyous. We help you make the right choice here.</span><br><span style="font-family: verdana, geneva; font-size: 10pt;">giftmart.express has been launched in February 2013. giftmart.express showcases products from all categories such as clothing, <a href="http://www.giftmart.express/footwear" target="_blank">footwear</a>, <a href="http://www.giftmart.express/jewelry-collection-2" target="_blank">jewelry</a>, accessories, <a href="http://www.giftmart.express/accessories" target="_blank">electronics</a>, <a href="http://www.giftmart.express/home-appliances-2" target="_blank">appliance</a>, <a href="http://www.giftmart.express/health-care" target="_blank">health care</a>, <a href="http://www.giftmart.express/cosmetics-skin" target="_blank">beauty products</a>, and still counting! Our collection combines the latest in fashion trends as well as the all-time favorites. Our products are exclusively selected for you. We, at GiftMart, have all that you need under one umbrella.</span></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">In tune with the vision Digital Bangladesh, giftmart.express opens the doorway for everybody to shop over the Internet. We constantly update with lot of new products, services and special offers. We provide on-time delivery of products and quick resolution of any concerns.</span></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">We provide our customers with memorable online shopping experience. Our dedicated GiftMart quality assurance team works round the clock to personally make sure the right packages reach on time. You can choose whatever you like. We deliver it right at your address across Bangladesh. Our services are at your doorsteps all the time. Get the best products with the best online shopping experience every time. You will enjoy online shopping here!</span><br><strong><span style="font-family: verdana, geneva; font-size: 10pt;">Responsive Website</span></strong></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">giftmart.express offers you flexible and responsive shopping experience. Whether you use laptop, PC or smartphone, you can shop from giftmart.express easily. Just order online or over phone or via Facebook, we will send your product at your doorstep very soon.</span><br><strong><span style="font-family: verdana, geneva; font-size: 10pt;">Wide Range of Products</span></strong></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">giftmart.express showcases products from all categories such as ladies and gents clothing, footwear, jewelry, accessories, electronics, health care, beauty products, and still counting! Our collection combines the latest in fashion trends as well as the all-time favorites. Various categories offer t-shirts, polo t-shirts, <a href="http://www.giftmart.express/jeans-pant-2" target="_blank">jeans </a>/ <a href="http://www.giftmart.express/gabardine-pant-3" target="_blank">gabardine </a>/ twill pants, shirt, panjabi, <a href="http://www.giftmart.express/traditional-dress" target="_blank">salwar-kameez</a>, <a href="http://www.giftmart.express/shari-collection" target="_blank">saree</a>, kurti, tops, leggings, innerwear, <a href="http://www.giftmart.express/body-spray-perfume" target="_blank">body spray &amp; perfume</a>, <a href="http://www.giftmart.express/gents-watch" target="_blank">watches</a>, <a href="http://www.giftmart.express/grooming-kit-3" target="_blank">shavers &amp; trimmers</a>, footwear, bags, jewelry, <a href="http://www.giftmart.express/gents-sunglass" target="_blank">sunglasses</a>, kids items, home decor, <a href="http://www.giftmart.express/kitchen-cooking-tools-2" target="_blank">kitchen appliance</a>, <a href="http://www.giftmart.express/sanitary-fittings" target="_blank">sanitary-fittings</a>, gadget,, foods items, <a href="http://www.giftmart.express/gift-items" target="_blank">gift items</a>, leather products, health care and many more.Our products are exclusively selected for our valued customers.</span><br><strong><span style="font-family: verdana, geneva; font-size: 10pt;">Quality Products</span></strong></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">We assure the quality of our products. We want you to avail the best quality products from the best sellers and brands in the country. Our dedicated GiftMart quality assurance team works round the clock to personally make sure the right packages reach on time.Our quality assurance team makes sure that you are receiving the right product at the right price.You will find here the finest quality and premium brand products with a reasonable pricing. We have a wide range of branded products of the varied category in our product line.We provide best quality and service at the best price. So sign up now to get anything you need.</span><br><strong><span style="font-family: verdana, geneva; font-size: 10pt;">Day Long Dedicated Customer Care</span></strong></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">GiftMart customer care team is at your service from 9AM to 11PM everyday all over the year. Our official hotline is 09636-102030. You can place an order, make any query about product and service, or track your order status. You will find our dedicated customer care team at all stages of your <a href="http://www.giftmart.express/" target="_blank">online shopping</a>&nbsp;experience.</span><br><strong><span style="font-family: verdana, geneva; font-size: 10pt;">Fast Delivery All Over the Country</span></strong></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">giftmart.express opens the doorway for everybody to shop over the Internet. Our dedicated GiftMart quality assurance team works round the clock personally to make sure the right packages reach on time. Our services are at your doorsteps with the lowest delivery charge. We process all deliveries through reputed courier service as well as our in house delivery team. We deliver products all over the Bangladesh. If there is any modification in delivery charge for a particular item, it will be mentioned in product details.</span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Order confirmation and delivery completion are subject to product availability. Delivery time may differ from one item to another. It can differ from standard delivery to beyond that.</span></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;"><strong>Standard Delivery</strong>: If your delivery address is within Dhaka city, products will be delivered by within 2 business days. If it is outside Dhaka then it will take 3-4 business days. If you order after 6 PM, it will be considered as an order of next business day.</span></p>
<p style="text-align: justify;"><span style="font-size: 10pt;"><strong>Note:&nbsp;</strong>Requested respected customers&nbsp;to refrain from buying excessive goods after being panicked. We are unable to entertain any bulk quantity during COVID-19.&nbsp;<strong>Delivery may delay due to&nbsp;<span class="__in">COVID</span>-19.</strong></span></p>
<p style="text-align: justify;"><span style="font-size: 10pt;"><strong style="font-family: verdana, geneva; font-size: 10pt;">Our Business Day</strong><span style="font-family: verdana, geneva;">: Saturday to Thursday except public holidays.</span></span></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;"><strong>Exceptional Delivery</strong>: There are some exceptional items that we import from outside Bangladesh. These items can take 10 or more days to reach you. However, you will receive your order within the time specified.</span></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">GiftMart does not deliver products outside Bangladesh. You can make your purchases on giftmart.express from anywhere in the world, but you can get delivery of the product only within Bangladesh.</span><br><strong><span style="font-family: verdana, geneva; font-size: 10pt;">Easy Replacement</span></strong></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">We provide great customer experience each time you shop with your giftmart.express. If you are not satisfied with your purchase, we ensure ‘Replacement Guarantee’. We will replace your purchased product if the product has any defect by its manufacturer or if the product is not the same one you ordered.</span></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">All you need to do is give us a call or drop an email at admin@giftmart.express within a period of&nbsp;24 Hours from the date of delivery. However, please return the product with the tags intact and in their original packaging, in an unwashed and undamaged condition. Replacement for products is subject to inspection and checking by GiftMart team. Replacement cannot be possible if the product is burnt, damaged by short circuit, or broken by customer.</span><br><strong><span style="font-family: verdana, geneva; font-size: 10pt;">Safe Payment Option</span></strong></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">We are committed to ensure the security of your information. We maintain suitable physical, electronic and managerial procedures to safeguard and secure your information by preventing unauthorized access. Shopping at giftmart.express is 100% safe. All Credit card and Debit card payments on giftmart.express are processed through secure and trusted payment gateways. When you transact here, you pay at the payment page which is incorporated with your respected bank. So, your bank deals with your credit/debit card information. You can be assured that GiftMart offers you the highest standards of security currently available on the internet so as to ensure that your <a href="http://www.giftmart.express/" target="_blank">shopping </a>experience is private, safe and secure.</span><br><strong><span style="font-family: verdana, geneva; font-size: 10pt;">Ensuring Your Privacy</span></strong></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">This privacy policy sets out how giftmart.express uses and protects any information that you give here when you use this website. We view protection of your privacy as a very important principle. We are committed to ensuring your privacy here. Your information will only be used in accordance with this privacy statement whenever we ask you to provide any information by which you can be identified while using this website.</span></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">You will be required to enter a valid phone number while signing up and placing an order on GiftMart. By registering your phone number with us, you consent to be contacted by us via phone calls and/or SMS, in case of any order or delivery related updates. GiftMart will not use your personal information to initiate any promotional phone call or SMS. We store and process your information in computers that are protected by physical as well as reasonable technological security measures.</span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Our primary goal in doing so is to provide you a safe, efficient, and customized experience. This allows us to provide services and features that most likely meet your needs. If you choose to buy on the website, we collect information about your buying behavior.</span><br><strong><span style="font-family: verdana, geneva; font-size: 10pt;">Stay in Touch</span></strong></p>
<p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">We would like to receive your feedback about our product, service and site. Keep in contact with us and feel free to express any opinion, viewpoint, suggestion or comment that you might have. You can call us at our hotline: 09636-102030 (9am to 11pm); contact us via our official Facebook page:&nbsp;<a href="http://www.facebook.com/GiftMartcom">http://www.facebook.com/GiftMartcom</a></span></p>
<p style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span style="font-size: 11pt;">During COVID-19 for help mail us: <a href="mailto:support@giftmart.express">support@giftmart.express</a></span></strong></span></p>
<!-- <p style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span style="font-size: 11pt;">Company Information:</span></strong></span></p> -->
<ul class="ulDefault">
<!-- <li style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Registered Name: giftmart.express Limited</span></li>
<li style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Incorporation No. C-144267/2018</span></li>
<li style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Trade License Number: TRAD/DSCC/242275/2019</span></li>
<li style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Vat Registration Number:&nbsp;BIN 001196687-0201</span></li>
<li style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">E-TIN:&nbsp;132236527140</span></li>
<li style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">e-Cab Membership No: 0441</span></li>
<li style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">BASIS Membership:&nbsp;AS-13-01-222</span></li> -->
</ul>
        </div>
    </div>

            <div class="footer-store-theme">
                
            </div>
        </div>
    </div>
    
</div>


</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#eu-cookie-bar-notification').show();
        $('#eu-cookie-ok,#eu-cookie-ok-mobile').click(function () {
            $.ajax({
                cache: false,
                type: 'POST',
                url: '/eucookielawaccept',
                dataType: 'json',
                success: function (data) {
                    $('#eu-cookie-bar-notification').hide();
                },
                failure: function () {
                    alert('Cannot store value');
                }
            });
        });
    });
</script>

<!--<div id="eu-cookie-bar-notification" class="cookie-bar">-->
<!--    <span id="eu-cookie-ok" class="message">-->
<!--        Cookies help us deliver our services. By using our services, you agree to our use of cookies.-->
<!--        <button type="button" class="ok-button button-1">OK</button>-->
<!--    </span>-->

<!--    <span class="message">-->
<!--        <a href="https://giftmart.express/privacyinfo">Learn more</a>-->
<!--    </span>-->

<!--    <span id="eu-cookie-ok-mobile" class="mobile">-->
<!--        By using our services, you agree to our use of cookies.-->
<!--        <button type="button" class="ok-button button-1">OK</button>-->
<!--    </span>-->

<!--    <span class="mobile">-->
<!--        <a href="https://giftmart.express/privacyinfo">Learn more</a>-->
<!--    </span>-->
<!--</div>-->


    
    

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top: 270px;">
                <div class="modal-header" style="border-bottom: 0px; padding: 10px 10px 0 0;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 25px;">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>

    <div id="goToTop" style="display: none;"></div>


</body>

</html>