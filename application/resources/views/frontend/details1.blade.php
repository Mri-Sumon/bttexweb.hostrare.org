@extends('layouts.Home0Layout')

@section('content')
 <!--Product details section starts-->
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
                    <div class="col-md-5 mar-bot-30">
                        <div class="slider-wrapper">
                        <!---<button class="btn btn-info read_more" id="read-btn" data-readable_img="202103060514452.jpg,202103060516252.jpg,202103060517193.jpg,202103060519534.jpg">পড়ে দেখুন
                                <img src="https://noorbookstore.com/public/images/arrow.png" alt="Image"></button>---->
                                                        
                            <div class="slider-for">
                                <div class="slider-for__item ex1">
                                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$product_details->f_pic}}" alt="..." />
                                </div>
                                @php
                                $imagesss=explode(',',$product_details->pics);
                                @endphp
                                @foreach($imagesss as $imagess)
                                @if($imagess)
                                <div class="slider-for__item ex1">
                                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$imagess}}" alt="..." />
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="slider-nav">
                                <div class="slider-nav__item">
                                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$product_details->f_pic}}" alt="..." />
                                </div>
                                @php
                                $imagesss=explode(',',$product_details->pics);
                                @endphp
                                @foreach($imagesss as $imagess)
                                @if($imagess)
                                <div class="slider-nav__item">
                                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$imagess}}" alt="..." />
                                </div>
                                @endif
                                @endforeach
                                <!--<div class="slider-nav__item">
                                    <img src="https://noorbookstore.com/public/images/product/202007160354343.jpg" alt="..." />
                                </div>
                                <div class="slider-nav__item">
                                    <img src="https://noorbookstore.com/public/images/product/202007160354344.jpg" alt="..." />
                                </div>--->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1 mar-top-20">
                        <h3 class="item-name">{{$product_details->name}}</h3>
                        
                        <div class="d-flex justify-content-start align-items-center">
                            
                            <div class="item-price">
                                @if($product_details->price == $product_details->sale_price)
                                <span>৳ {{$product_details->price}}</span>
                                @else
                                <span><del>৳ {{$product_details->price}}</del></span>  <span style="margin-left:20px;">৳ {{$product_details->sale_price}}</span>
                                @endif
                            </div>
                            
                        </div>
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
                                <div class="col-xl-8 col-lg-8 col-md-7 col-7">
                                    <div class="item-stock">
                                        Available:
                                        <span class="stock_status">
                                            @if($product_details->status=='1')
                                                Instock
                                            @else
                                                Out Of stock
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-sku">
                            <div class="size-checkbox">
                                                                <ul class="d-inline filter-opt">
                                                                </ul>
                            </div>
                        </div>
                        <div class="item-options ">
                            <div class="row">
                                <div class="col-md-12 col-7 mt-2">
                                    <div class="product_action_btn">
                                        <!-- <a href="checkout.html" class="btn v1">Buy Now</a> -->
                                        @csrf                                           
                                        <input type="hidden" name="product_id" value="52">
                                            <input type="hidden" name="qty1" id="52" value="1">
                                            <button class="btn v3" type="submit">Add to cart</button>
                                        </form>
                                       <!--  <a href="{{route('addtocart',['id'=>$product_details->id])}}" class="btn btn-primary">Add to Cart</a>-->
                                        <!-- <button class="btn v9"><i class="lnr lnr-heart"></i></button> -->
                                    </div>
                                        <span class="buy_now">
                                            <a href="{{route('buynow',['id'=>$product_details->id])}}" class="btn" style="margin-top: 10px;padding-left: 32px;padding-right: 32px;padding-top: 8px;padding-bottom: 8px; border:1px solid #29C3F1; background-color:#29C3F1;color:#fff;">Buy Now</a>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="item-categories"><span>Categories:</span>
                                                        
                                                        @php
                                                        $details=explode(',',$product_details->cat_ids)
                                                        @endphp
                                                        @foreach($details as $item)
                                                        @if($item)
                                                        @php
                                                        $category_name=DB::table('cats')->where('id',$item)->get();
                                                        @endphp
                                                        @foreach($category_name as $cat_name)
                                                        <a href="#">{{$cat_name->name}}</a> 
                                                        @endforeach
                                                        @endif
                                                        @endforeach
                                                    
                                                    </div>
                        <div class="delivery-timeline">
                            <!--<p><strong>Delivered within 11/11/2021 - 13/11/2021</strong></p>-->
                        </div>
                        <h4 class="pho-title-m" style="font-weight: 400; font-size: 25px; ine-height: 32px;color: #1d2127;margin-bottom:0">ফোনে অর্ডারের জন্য ডায়াল করুন</h4>
                        <div class="col-sm-6 col-xs-12" style="padding:0">
                                <h4 style="font-weight: 600; font-size: 25px; line-height: 32px; margin-bottom:15px;color:#0088cc">  
                                    <i class="fa fa-phone-square" style="padding-left:20px;color: #0078B8;">   </i>  01719077915<br>
                                    <i class="fa fa-phone-square" style="padding-left:20px;color: #0078B8;">   </i>   01719077915<br>
                                    <i class="fa fa-phone-square" style="padding-left:20px;color: #0078B8;">   </i>   01719077915<br>
                                                    
                                </h4>
                                                
                                                <!-- Your share button code -->
                                <div style="margin-bottom:  10px;margin-top:  0;margin-left: 0;display: inline-block;" class="fb-share-button" 
                                    data-href="#" 
                                    data-layout="button" data-size="large">
                                </div>
                                                
                                <a href="tel:01719077915" target="_blank" rel="nofollow" data-tooltip="" data-placement="bottom" title="">
                				  <img style="margin-bottom:  10px;margin-top:  0;margin-left: 0;" src="{{URL::to('/')}}/application/storage/app/slider/call-button.png">
                				</a>
                				<div class="col-sm-12 col-md-12  col-xs-12" style="padding: 0">
                                                <table class="table" style="color:#08c !important">
            									<tbody>
            									    <tr>
                    								 	<td style="padding-left: 0;">
                    										 ঢাকায় ডেলিভারি খরচ 
                    									</td>
                    									<td>
                    										<b>৳ 60</b>
                    									</td>
            									    </tr>
                									<tr>
                								        <td style="padding-left: 0;">
                										    ঢাকার বাইরের ডেলিভারি খরচ 
                										</td>
                										<td>
                											<b>৳ 120</b>
                										</td>
            									    </tr>
                									<tr>
                										<td style="padding-left: 0;border-bottom: 1px solid #ddd;">
                											বিকাশ মার্চেন্ট নাম্বার  
                											</td>
                										<td  style="border-bottom: 1px solid #ddd;">
                											<strong>01719077915</strong>
                										</td>
                									</tr>
            								</tbody></table>
                                                
                                                
                                                
                                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<style>
    .fade{
        opacity:1 !important;
    }
</style>
        <!--Product details section ends-->
         <!--content wrapper section starts-->
         <section class="content-wrapper mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 tabs style2">
                        <ul class="nav nav-tabs mar-top-30 product-details-tab" id="lionTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link navlink1 active" data-toggle="tab" href="#details" role="tab" aria-selected="true"><span style="color:black;">Details</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link navlink1" data-toggle="tab" href="#description" role="tab" aria-selected="true"><span style="color:black;">Description</span></a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#author" role="tab" aria-selected="false">Author</a>
                            </li>--->
                        </ul>
                    </div>
                    <div class="col-md-12 mar-top-20">
                        <div class="tab-content mar-tb-30" id="lionTabContent">
                            <div class="tab-pane fade  show active" id="details" role="tabpanel" aria-labelledby="all-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="desc-intro">
                                            <h3 class="desc_subtitle">Details</h3>
                                            <div class="item-short-description">
                                            <p style="color:black !important;">{{$product_details->brief}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="all-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="desc-intro">
                                            <h3 class="desc_subtitle">Description</h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                {!!$product_details->description!!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---<div class="tab-pane fade" id="author" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="desc-intro">
                                             <p>Nothing to show</p>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--content wrapper ends-->
@endsection