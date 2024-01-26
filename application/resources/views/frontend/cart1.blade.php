@extends('layouts.FrontendLayout')
 @section('content')
 <!--Cart section starts-->
  <section class="content_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb_menu">
                        <ul>
                            <li><a href="/">Home</a></li>/
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="breadcrumb_title">
                        <h3>Cart</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-content table-responsive">
                        @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success</strong>{{Session::get('success_message')}}
                        </div>
                        @endif
                        <table class="table table-hover cart-table">
                            <thead>
                                <tr>
                                    <th class="plantmore-product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="plantmore-product-price">Price</th>
                                    <th class="plantmore-product-quantity">Quantity</th>
                                    <th class="plantmore-product-subtotal">Total</th>
                                    <th class="plantmore-product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(Cart::content() as $item)
                            	                                <tr class="bg_ag">
                            	                                    @php
                                	                                   $product=DB::table('products')->where('id',$item->id)->get();
                                	                                @endphp
                                	                                @foreach($product as $products)
                                	                                    <td class="plantmore-product-thumbnail">
                                	                                        <a href="{{route('details',['product_id'=>$item->id])}}">
                                	                                            <img src="{{URL::to('/')}}/application/storage/app/product/{{$products->f_pic}}" alt="image">
                                	                                        </a>
                                	                                    </td>
                                	                                    @endforeach
                                    <td class="plantmore-product-name"><a href="{{route('details',['product_id'=>$item->id])}}">{{$item->name}}</a>
                                    </td>
                                    <td class="plantmore-product-price"><span class="amount">৳ <span class="unit-price">{{$item->price}}</span> </span></td>
                                    <td class="plantmore-product-quantity">
                                        <div class="input-qty v2">
                                            <span class="input-group-btn">
                                                <!---<button type="button" class="quantity-left-minus" data-id="71">
                                                    <!---<span class="ion-ios-minus-empty"></span>--->
                                                    <a href="{{route('decreasequantity',['rowId'=>$item->rowId])}}" class="btn"><ion-icon name="remove-outline" style="font-size: 24px;"></ion-icon></a>
                                                <!---</button>--->
                                            </span>
                                            <input type="text" class="input-number" value="{{$item->qty}}" readonly>
                                            <span class="input-group-btn">
                                                <!---<button type="button" class="quantity-right-plus" data-id="71">--->
                                                    <!---<span class="ion-ios-plus-empty"></span>--->
                                                    <a href="{{route('increasequantity',['rowId'=>$item->rowId])}}" class="btn" style="margin-left:-50px;"><ion-icon name="add-outline" style="font-size: 24px;"></ion-icon></a>
                                                <!---</button>--->
                                            </span>
                                        </div>
                                        <!---<div class="quantity-input">
									
									<a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"><ion-icon name="add-outline" style="font-size: 24px;"></ion-icon></a>
									<input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >
									<a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"><ion-icon name="remove-outline" style="font-size: 24px;"></ion-icon></a>

								    </div>-->
                                    </td>
                                    <td class="product-subtotal"><span class="amount">৳ <span class="total-price">{{$item->total}}</span></span></td>
                                    <td class="plantmore-product-remove">
                                    	<!-- <form action="{{ url('removeformcart','id',$item->rowId) }}" method="POST">
                                    	    @csrf
											<input type="hidden" name="_token" value="1wOq96PDsNSDG9Kjkoly4lZ3YNg9Uzyj3YVs8lUV">											<input type="hidden" class="product-id" name="product_id" value="71">
											<button type="submit" class="btn btn-sm" title="Remove from Cart" onclick="return confirmRemoveFromCart()"><ion-icon name="close-outline" style="font-size: 24px;"></ion-icon></button>
										</form>
                                        <span class="ion-close-round"></span> -->
                                        <a href="{{route('removeformcart',['id'=>$item->rowId])}}" class="btn"><ion-icon name="close-outline" style="font-size: 24px;"></ion-icon></a>
                                    </td>
                                </tr>
                                @endforeach
                                                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
            	<div class="col-md-6">
            		<!---<form action="https://noorbookstore.com/update-cart" method="POST">
													<input type="hidden" name="_token" value="1wOq96PDsNSDG9Kjkoly4lZ3YNg9Uzyj3YVs8lUV">			
							<input type="hidden" name="product_qty[]" id="71" value="1">
												<button type="submit" class="btn v3 mt-2 ml-3">Update Cart</button>
					</form>--->
            	</div>
                <div class="col-md-6">
                    <div class="cart-total v2">
                        <h3 class="checkout_title">Cart Totals</h3>
                        <div class="block block-subtotal">
                            <div class="subtotal d-flex align-items-center justify-content-between">
                                <div class="label h6">Subtotal</div>
                                <div class="price">৳ <span class="price cart-subtotal"><strong>{{Cart::subtotal()}}</strong></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 cart_action_btn">
                <div class="col-md-6 col-12 order-md-1 order-2 text-left xs-center">
                    <a href="/shop" class="btn v3">Continue Shopping</a>
                </div>
                <div class="col-md-6 col-12 order-md-2 order-1 text-right xs-center">
                    <a href="{{route('checkout')}}" class="btn v3" id="proceed-checkout-btn">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </section>
    <!--Cart section ends-->
@endsection