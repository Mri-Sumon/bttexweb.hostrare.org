@extends('layouts.FrontendBttexLayout')

@section('content')

<!--MEDIA QUERY FOR SUBPAGE BODY-->
<style>
@media only screen and (max-width: 1441px) {
    .subpages{
        /*width: 100%!important;*/
        margin-right: 5% !important;
        margin-left: 5% !important;
    }
}
@media only screen and (max-width: 426px) {
    .subpages{
        /*width: 100%!important;*/
        margin-right: 0% !important;
        margin-left: 0% !important;
    }
}
</style>

<div id="home" class="slider-area" style="margin-top:10px; margin-bottom:50px;">
    <div class="container subpages">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              @if(\Request::segment(2)=='about')
              <img style="display: block; margin-left: auto; margin-right: auto; margin-bottom:40px;" src="{{URL::to('/')}}/application/storage/app/settings/RQlXQBEKLGklF1D0e6ZOz6uhEz5SGtbwNzAwVHXS.png" alt="Company Name">
              @endif
            <div class="section-headline text-center mt-5">
              <h2>{{$pageContent->title}}</h2>
            </div>
          </div>
          @if(\Request::segment(2)=='gallery')
          <div class="col-md-12 col-sm-12 col-xs-12 text-left">
              {!!$pageContent->details!!}
              <a href="{{URL::to('/')}}/gallery/pictures/still_structure">
              <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                  <?php $still_structures=\DB::table('medias')->where('link_id','still_structure')->orderBy('sort','asc')->skip(0)->take(4)->get();?>
                  <h6 class="w-100" style="text-transform:capitalize; margin-top:10px;">Still Structures</h6>
                  @foreach($still_structures as $still_structure)
                  <div class="col-xs-6 col-sm-6 col-md-6 text-center p-0 m-0" style="background:#f8f8f8; ">
                     <img  src="{{URL::to('/')}}/application/storage/app/{{$still_structure->source}}" style="width:100%; height:130px;"> 
                  </div>
                  @endforeach
              </div>
              </a>
              <a href="{{URL::to('/')}}/gallery/pictures/kasimpur">
              <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                  <?php $still_structures=\DB::table('medias')->where('link_id','kasimpur')->orderBy('sort','asc')->skip(0)->take(4)->get();?>
                  <h6 class="w-100" style="text-transform:capitalize; margin-top:10px;">Kashimpur</h6>
                  @foreach($still_structures as $still_structure)
                  <div class="col-xs-6 col-sm-6 col-md-6 text-center p-0 m-0" style="background:#f8f8f8; ">
                     <img  src="{{URL::to('/')}}/application/storage/app/{{$still_structure->source}}" style="width:100%; height:130px;"> 
                  </div>
                  @endforeach
              </div>
              </a>
              <a href="{{URL::to('/')}}/gallery/pictures/iftar">
              <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                  <?php $still_structures=\DB::table('medias')->where('link_id','iftar')->orderBy('sort','asc')->skip(0)->take(4)->get();?>
                  <h6 class="w-100" style="text-transform:capitalize; margin-top:10px;">Ifftar Party</h6>
                  @foreach($still_structures as $still_structure)
                  <div class="col-xs-6 col-sm-6 col-md-6 text-center p-0 m-0" style="background:#f8f8f8; ">
                     <img  src="{{URL::to('/')}}/application/storage/app/{{$still_structure->source}}" style="width:100%; height:130px;"> 
                  </div>
                  @endforeach
              </div>
              </a>
              <a href="{{URL::to('/')}}/gallery/pictures/banglo">
              <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                  <?php $still_structures=\DB::table('medias')->where('link_id','banglo')->orderBy('sort','asc')->skip(0)->take(4)->get();?>
                  <h6 class="w-100" style="text-transform:capitalize; margin-top:10px;">Banglo</h6>
                  @foreach($still_structures as $still_structure)
                  <div class="col-xs-6 col-sm-6 col-md-6 text-center p-0 m-0" style="background:#f8f8f8; ">
                     <img  src="{{URL::to('/')}}/application/storage/app/{{$still_structure->source}}" style="width:100%; height:130px;"> 
                  </div>
                  @endforeach
              </div>
              </a>
              <a href="{{URL::to('/')}}/gallery/pictures/kara_convention">
              <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                  <?php $still_structures=\DB::table('medias')->where('link_id','kara_convention')->orderBy('sort','asc')->skip(0)->take(4)->get();?>
                  <h6 class="w-100" style="text-transform:capitalize; margin-top:10px;">Kara Convention</h6>
                  @foreach($still_structures as $still_structure)
                  <div class="col-xs-6 col-sm-6 col-md-6 text-center p-0 m-0" style="background:#f8f8f8; ">
                     <img  src="{{URL::to('/')}}/application/storage/app/{{$still_structure->source}}" style="width:100%; height:130px;"> 
                  </div>
                  @endforeach
              </div>
              </a>
              <a href="{{URL::to('/')}}/gallery/pictures/product">
              <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                  <?php $still_structures=\DB::table('medias')->where('link_id','product')->orderBy('sort','asc')->skip(0)->take(4)->get();?>
                  <h6 class="w-100" style="text-transform:capitalize; margin-top:10px;">Equipments</h6>
                  @foreach($still_structures as $still_structure)
                  <div class="col-xs-6 col-sm-6 col-md-6 text-center p-0 m-0" style="background:#f8f8f8; ">
                     <img  src="{{URL::to('/')}}/application/storage/app/{{$still_structure->source}}" style="width:100%; height:130px;"> 
                  </div>
                  @endforeach
              </div>
              </a>
          </div>
          
          @else
          <div class="col-md-12 col-sm-12 col-xs-12 text-left">
              {!!$pageContent->details!!}
              @foreach($pics as $pic)
              <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                  <a class="gal" href="{{URL::to('/')}}/application/storage/app/{{$pic->source}}"><img data-gallery="{{$pic->name}}" src="{{URL::to('/')}}/application/storage/app/{{$pic->source}}" style="width:100%; height:260px;"></a>
              <h6 style="text-transform:capitalize; display:none;">{{$pic->name}}</h6></div>
              @endforeach
          </div>
          @endif
        </div>
    </div>
</div>
  <!-- Start Suscrive Area -->
  <!--<div class="suscribe-area">-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">-->
  <!--        <div class="suscribe-text text-center">-->
  <!--          <h3>Welcome to Sajib Enterpirse</h3>-->
  <!--          <a class="sus-btn" href="#">Call Us </a>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <!-- End Suscrive Area -->
  <!-- Start contact Area --
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column --
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: {{$settings->mobile}}<br>
                  <span>{{$settings->office_hours}}</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column --
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: {{$settings->email}}<br>
                  <span>Web: www.sajibenterprise.com</span>
                </p>
              </div>
            </div>
          </div
          <!-- Start contact icon column --
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: {!!$settings->address!!}
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map --
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map --
            <iframe src="{{$settings->map_link}}" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map --
          </div>
          <!-- End Google Map --

          <!-- Start  contact --
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="{{URL::to('/')}}/feedbackemail" method="post" role="form" class="">@csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

@endsection
