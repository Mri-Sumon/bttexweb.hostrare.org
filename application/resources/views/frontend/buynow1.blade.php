@extends('layouts.Home0Layout')

@section('content')
<!--Checkout section starts-->
<section class="content_wrapper checkout_wrapper">
        <div class="container ">
        	<form action="{{ URL::to('confirm_buynow/'.$product->id) }}" method="POST" class="calculate-shipping">
        	   {{ csrf_field() }}{{ method_field('POST') }}
        	    <div class="row">
	                <div class="col-lg-6 col-md-12">
	                    <div class="checkout_details">
	                        <h3 class="checkout_title">Billing & Shipping</h3>
                            <div class="col-md-6 col-12">
                                <p>Customer Information</p>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="fname">Name<span>*</span> </label>
                                    <input id="fname" type="text" name="name" placeholder="Your Name">
                                    @error('name')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Phone<span>*</span> </label>
                                    <input id="phone" type="number" name="phone" placeholder="017XXXXXXXX" >
                                    @error('phone')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <!--<div class="col-sm-12">-->
                            <!--    <div class="form-group">-->
                            <!--        <label for="email">Email</label>-->
                            <!--        <input type="email" id="email" name="email" placeholder="Email Address">-->
                            <!--        @error('email')-->
                            <!--        <p class="alert alert-danger" role="alert">{{$message}}</p>-->
                            <!--        @enderror-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="col-sm-12" style="margin-bottom:30px;">
                                <!---<div class="form-group">
                                    <label for="address">Address<span>*</span></label>
                                    <input type="text" id="address" name="address" placeholder="Address">
                                    @error('address')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>---->
                                @php
                                $setting=DB::table('settings')->first();
                                @endphp
                                <div class="form-group">
                                    <label for="address">Select Area<span>*</span></label>
                                    <div class="right" style="margin-left:96px;margin-top: -26px;">
                                    <select onchange="UpdateOrderInfo(this.value)" name="address" id="DeliAddress">
                                        <option value="0">Select Your Area</option>
                                      <option value="{{$setting->Delivery_Charge_Inside_Dhaka}}">Inside Dhaka</option>
                                      <option value="{{$setting->Delivery_Charge_Outside_Dhaka}}">Outside Dhaka</option>
                                    </select>
                                    </div>
                                </div>
                                <input type="hidden" id="travel_cost" name="travel_cost">
                            </div>
                            <br>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="city">Address<span>*</span></label>
                                    <input type="text" id="city" name="district" placeholder="Delivery Address">
                                    @error('district')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <!--<div class="col-sm-12">-->
                            <!--    <div class="form-group">-->
                            <!--        <label for="note">Note</label>-->
                            <!--        <input type="text" id="note" name="note">-->
                            <!--        @error('note')-->
                            <!--        <p class="alert alert-danger" role="alert">{{$message}}</p>-->
                            <!--        @enderror-->
                            <!--    </div>-->
                            <!--</div>-->
                           <!--- <div class="col-sm-12">
                                <div id="flip" class="different_shipment">
                                    <input type="checkbox" id="ship-to-diff-add" name="ship_to_different_address" value="1">
                                    <span>Ship to a Different Address</span>
                                </div>
                                <div id="panel" class="different_address_2">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="fname">Name<span>*</span> </label>
                                                <input id="lname" type="text" name="shipping_name" class="shipping" placeholder="Your Name">
                                                @error('shipping_name')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="phone_2">Phone<span>*</span> </label>
                                                <input id="phone_2" type="number" name="shipping_phone" class="shipping" placeholder="017XXXXXXXX">
                                                @error('shipping_phone')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email_2">Email</label>
                                                <input type="email" id="email_2" name="shipping_email" placeholder="Email Address">
                                                @error('shipping_email')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="fname">Address<span>*</span></label>
                                                <input type="text" id="address" name="shipping_address" class="shipping" placeholder="Address">
                                                @error('shipping_address')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="city">City/District<span>*</span></label>
                                                <input type="text" id="city" name="shipping_district" class="shipping" placeholder="Dhaka, Chattagram, Sylhet etc...">
                                                @error('shipping_district')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>---->
                            <div class="col-12 px-0 d-none">
                                <div class="shipping_method">
                                    <div class="shipping_method_box">
                                        <div class="ship_meth">
                                            <label class="custom-checkbox">
                                                <input type="radio" name="card">
                                                <span class="sm-heading">Normal Delivery(2-4 days)</span>
                                            </label>
                                        </div>
                                        <div class="shipping_cost">
                                            <p>৳ 100</p>
                                        </div>
                                    </div>
                                    <div class="shipping_method_box">
                                        <div class="ship_meth">
                                            <label class="custom-checkbox">
                                                <input type="radio" name="card">
                                                <span class="sm-heading">Express Delivery(2-4 days)</span>
                                            </label>
                                        </div>
                                        <div class="shipping_cost">
                                            <p>৳ 200</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
	                    </div>
	                </div>
	                <div class="col-lg-6 col-md-12">
	                    <div class="cart-total">
	                        <h3 class="checkout_title">Order Summary</h3>
	                        <div class="checkout_item_wrap">
	                            <div class="checkout_item_header">
	                                <div class="item_name_title">
	                                    <h6>Item</h6>
	                                </div>
	                                <div class="item_qty_title">
	                                    <h6>Qty</h6>
	                                </div>
	                                <div class="item_total_title">
	                                    <h6>Total</h6>
	                                </div>
	                            </div>
	                            <div class="checkout_item_info_wrap">
	                            	<div class="checkout_item_info">
	                                    <div class="item_name">
	                                        <p><span>1.</span>{{$product->name}}</p>
	                                    </div>
	                                    <div class="item_qty">
	                                        <p>1</p>
	                                    </div>
	                                    <div class="item_total">
	                                        <p>৳ 
	                                        @if($product->sale_price==$product->price)
	                                        {{$product->price}}
	                                        @else
	                                        {{$product->sale_price}}
	                                        @endif
	                                        </p>
	                                    </div>
	                                </div> 	                            
	                             </div>
	                        </div>
	                        <div class="block block-subtotal">
	                            <div class="subtotal v2 d-flex align-items-center justify-content-end">
	                                <div class="label h6">Subtotal</div>
	                                <div class="price">৳ <span >
	                                        @if($product->sale_price==$product->price)
	                                        {{$product->price}}
	                                        @else
	                                        {{$product->sale_price}}
	                                        @endif
	                                        </span></div>
	                            </div>
                                <div class="subtotal v2 d-flex align-items-center justify-content-end">
	                                <div class="label h6">Tax</div>
	                                <div class="tax">৳ 0.00</div>
	                                <input type="hidden" name="shipping_cost" value="100">
	                            </div>
	                            <div class="subtotal v2 d-flex align-items-center justify-content-end">
	                                <div class="label h6">Delivery Charge</div>
	                                <div class="CustomerDeliveryPoint" id="CustomerDeliveryPoint"> 0.00</div>
	                                
	                                <input id="TotalPtk" type="hidden" value="@if($product->sale_price==$product->price)
	                                        {{$product->price}}
	                                        @else
	                                        {{$product->sale_price}}
	                                        @endif">
	                            </div>
	                            <div class="total v2 d-flex align-items-center justify-content-end">
	                                <div class="label h5">Total</div>
	                                <div class="price" id="GrandOrderTk">৳ <span id="grand-total">@if($product->sale_price==$product->price)
	                                        {{$product->price}}
	                                        @else
	                                        {{$product->sale_price}}
	                                        @endif</span></div>
	                                	                            </div>
	                            <div class="row align-items-center mt-2">
	                                <div class="col-xl-8 col-lg-9 col-md-6">
	                                    <!---<div class="form-group coupon-code float-left">
	                                        <input type="text" class="form-control" name="coupon_code" placeholder="Enter your coupon code">
	                                        <button type="button" class="btn v6 apply-coupon">Apply coupon</button>
	                                    </div>--->
	                                </div>
	                            </div>
	                        </div>
	                        <div class="payment-options">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="payment_method_box">
<style>
    .answer{ 
        display:none ;
    }
.checkout_payment li:hover{
    background-color:transparent;
}
</style>
	                                        <div class="ship_meth">
	                                            <label class="custom-checkbox">
	                                            	<input type="radio" name="payment_method" href="#demo" value="bkash" data-toggle="collapse" checked required>
	                                                <ul class="checkout_payment">
	                                                           <li>
        	                                                        <p>Bkash Payment</p>
        	                                                   </li>
	                                                           <li>
        	                                                        Please complete your bKash payment at first, then fill up the form below. Also note that 1.85% bKash merchant cost will be added with net price. Total amount you need to send us at bKash Personal Number : {{$bkash->number}}
        	                                                    </li>
	                                                </ul>
	                                            </label>
	                                        </div>
	                                        <div class="ship_meth">
	                                            <label class="custom-checkbox">
	                                                <input type="radio" name="payment_method" value="cod" checked required>
	                                                <ul class="checkout_payment">
	                                                    <li>
	                                                        <p>Cash on Delivery</p>
	                                                    </li>
	                                                </ul>
	                                            </label>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <!---<div class="badge">
	                                        <img src="https://noorbookstore.com/public/images/norton.png" alt="Image">
	                                    </div>
	                                    <div class="badge">
	                                        <img src="https://noorbookstore.com/public/images/ssl.png" alt="Image">
	                                    </div>--->
	                                    <div id="demo" class="collapse">
                                                <input type="text" name="bkash_number" placeholder=" Bkash Number" />
                                                @error('bkash_number')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                                <input type="text" name="transaction_id" placeholder="Transaction ID" />
                                                @error('transaction_id')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                        </div>
	                                </div>
	                            </div>
	                            <div class="check-box text-left">
	                                        
	                                        <input type="checkbox" class="" name="remember" id="remember" required>
	                                        <label for="remember">I've read and accept <a href="#" target="_blank">terms &amp; conditions</a></label>
	   
	                            </div>
	                        </div>
	                        <div class="checkout-actions mar-top-30">
	                            <button class="btn v7" type="submit">Confirm Order</button>
	                            <!--<input type="submit" value="Submit">--->
	                        </div>
	                    </div>
	                </div>
            	</div>
            </form>
        </div>
    </section>
    <!--Checkout section ends-->
@endsection