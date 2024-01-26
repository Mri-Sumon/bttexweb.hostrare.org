@extends('layouts.Home0Layout')

@section('content')
            <!--Product details section starts-->
            <section class="content_wrapper">
        <div class="shop-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb_menu">
                            <ul>
                                <li><a href="/">Home</a></li>/
                                <li>Shop</li>
                            </ul>
                            <div class="filter_bar">
                                <span class="fas fa-sort-amount-down"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebar_wrapper">
                            <!--categores-box start  -->
                            <div class="sidebar-widget">
                                <div class="sidebar-title">
                                    <h3 class="sidebar_title">Categories</h3>
                                </div>
                                <div class="category-sub-menu">
                                    <ul>
                                    @php
                                    $category=DB::table('cats')->where('status','active')->get();
                                    @endphp
                                    @foreach($category as $category)
                                        @if($category->parent=='0')
                                        <li>
                                            <a href="{{route('cat.shop',['category_id'=>$category->id])}}">
                                                <p>{{$category->name}}</p><span></span>
                                            </a>
                                            <ul>
                                                @php
                                                $subcategory=DB::table('cats')->where('parent',$category->id)->get();
                                                @endphp
                                                @foreach($subcategory as $subcat)
                                                <li>
                                                    <a href="{{route('cat.shop',['category_id'=>$subcat->id])}}"><p>{{$subcat->name}}</p> <span>(1)</span></a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @else
                                        @endif
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!--categores-box end  -->
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row pad-tb-30">
                            <div class="col-md-12">
                                <div class="shop-element">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <!--Shop product wrapper starts-->
                        <div class="shop-products-wrapper">
                            <div class="row product-list">
                            @foreach($products as $product)
                                <div class="col-xl-4 col-lg-4 col-md-4 col-6 xpx-7">
                                    <div class="feature_product v2">
                                        <div class="feature_product_img">
                                            <a href="{{route('details',['product_id'=>$product->id])}}" ><img src="{{URL::to('/')}}/application/storage/app/product/{{$product->f_pic}}" alt="Image"></a>
                                        </div>
                                        <div class="feature_product_info">
                                            <h3 class="product_name"><a href="{{route('details',['product_id'=>$product->id])}}" >{{$product->name}}</a></h3>
                                                <div class="product_price">
                                                    @if($product->price == $product->sale_price)
                                                    <span>৳ {{$product->price}}</span>
                                                    @else
                                                    <span><del>৳ {{$product->price}}</del></span>  <span style="margin-left:3px;">৳ {{$product->sale_price}}</span>
                                                    @endif
                                                    <span class="add_to_wishlist" style="float:right;">
                                                        <form action="#" method="get" id="52-wishlist">
                                                            <input type="hidden" name="_token" value="ChMV3vWDo9KkZh17bjTVXL698S6EvUWlZle6fCnT">                                
                                                            <input type="hidden" name="product_id" value="52">
                                                                <button class="wishlist-btn" type="button" title="Add to Wishlist" data-id="52"><i class="fa fa-heart"></i></button>
                                                        </form>
                                                    </span>
                                                </div>
                                        </div>
                                        <div class="product_action">
                                            <span class="add_to_cart">
                                                <a href="{{route('buynow',['id'=>$product->id])}}" class="btn btn-primary">Buy Now</a>
                                            <!--<a href="{{route('addtocart',['id'=>$product->id])}}" class="btn btn-primary">Add to Cart</a>-->
                                            </span>
                                            <span class="buy_now" style="display:none;">
                                              <a href="{{route('buynow',['id'=>$product->id])}}" class="btn btn-primary">Buy Now</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                @endforeach
                            </div>
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection