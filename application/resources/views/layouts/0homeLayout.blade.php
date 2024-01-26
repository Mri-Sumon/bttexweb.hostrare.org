<?php $settings=App\Settings::where('id',1)->first();?>
<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>{{$settings->name}}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{URL::to('/')}}/assets/img/favicon.png" rel="icon">
  <link href="{{URL::to('/')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{URL::to('/')}}/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{URL::to('/')}}/assets/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/assets/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/assets/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/assets/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{URL::to('/')}}/assets/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{URL::to('/')}}/assets/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{URL::to('/')}}/assets/css/responsive.css" rel="stylesheet">

 
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="{{URL::to('/')}}">
                    @if($settings->logo!='')
                    <img src="{{URL::to('/')}}/application/storage/app/{{$settings->logo}}" alt="{{$settings->name}}" title="{{$settings->name}}" style="height: 49px;
    margin-top: -6px;">
                    @else
                    <h1>{{$settings->name}}</h1>
                    @endif
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                <?php $menus=App\Pages::where('parent_page',0)->orderBy('sorts','asc')->get();?>
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
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
<!--@yield('content')-->
  
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>{{$settings->name}}</h2>
                </div>

                <p></p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="{{$settings->link1}}"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="{{$settings->link2}}"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="{{$settings->link3}}"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="{{$settings->link4}}"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Office Address:</h4>
                <p>
                  {!!$settings->address!!}
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> {{$settings->tel}}</p>
                  <p><span>Fax:</span> {{$settings->fax}}</p>
                  <p><span>Mobile:</span> {{$settings->mobile}}</p>
                  <p><span>Email:</span> {{$settings->email}}</p>
                  <p>Admin Login: <a href="{{URL::to('dashboard')}}" class="btn btn-link btn-xs" target="_blank">Admin Login</a></p>
                  <p>Webmail Login: <a href="https://sajibenterprise.com:2096/" class="btn btn-link btn-xs" target="_blank">Webmail Login</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12 hidden">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="{{URL::to('/')}}/assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="{{URL::to('/')}}/assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="{{URL::to('/')}}/assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="{{URL::to('/')}}/assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="{{URL::to('/')}}/assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="{{URL::to('/')}}/assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; 2020 Copyright <strong>{{$settings->name}}</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{URL::to('/')}}/assets/lib/jquery/jquery.min.js"></script>
  <script src="{{URL::to('/')}}/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{URL::to('/')}}/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{URL::to('/')}}/assets/lib/venobox/venobox.min.js"></script>
  <script src="{{URL::to('/')}}/assets/lib/knob/jquery.knob.js"></script>
  <script src="{{URL::to('/')}}/assets/lib/wow/wow.min.js"></script>
  <script src="{{URL::to('/')}}/assets/lib/parallax/parallax.js"></script>
  <script src="{{URL::to('/')}}/assets/lib/easing/easing.min.js"></script>
  <script src="{{URL::to('/')}}/assets/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="{{URL::to('/')}}/assets/lib/appear/jquery.appear.js"></script>
  <script src="{{URL::to('/')}}/assets/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{URL::to('/')}}/assets/contactform/contactform.js"></script>

  <script src="{{URL::to('/')}}/assets/js/main.js"></script>
  <script src="{{URL::to('/')}}/assets/js/ekko-lightbox.min.js"></script>

<script type="text/javascript">
			$(document).ready(function ($) {

				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							if (window.console) {
								return console.log('onShown event fired');
							}
						},
						onContentLoaded: function() {
							if (window.console) {
								return console.log('onContentLoaded event fired');
							}
						},
						onNavigate: function(direction, itemIndex) {
							if (window.console) {
								return console.log('Navigating '+direction+'. Current item: '+itemIndex);
							}
						}
					});
				});

				//Programatically call
				$('#open-image').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});
				$('#open-youtube').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});

				$(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							var lb = this;
							$(lb.modal_content).on('click', '.modal-footer a#jumpit', function(e) {
								e.preventDefault();
								lb.navigateTo(2);
							});
							$(lb.modal_content).on('click', '.modal-footer a#closeit', function(e) {
								e.preventDefault();
								lb.close();
							});
						}
					});
				});

			});
		</script>
<script>
$(".gal").attr("data-toggle", "lightbox");
$(".gal").attr("data-gallery", "multiimages");
$(".gal").attr("data-title", "Gallery");
</script>
</body>