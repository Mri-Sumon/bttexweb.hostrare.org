<li style="list-style: none;"><a href="{{URL::to('dashboard')}}"><i class="fa fa-angle-right"></i> Dashboard</a></li>
@if(Auth::user()->utype=='ADM')
<li style="list-style: none;"><a href="{{URL::to('products')}}"><i class="fa fa-angle-right"></i> Products</a></li>
<li style="list-style: none;"><a href="{{URL::to('admin/order')}}"><i class="fa fa-angle-right"></i> Orders</a></li>
<!--<li style="list-style: none;"><a href="{{URL::to('admin/order-item')}}"><i class="fa fa-angle-right"></i> Order Item</a></li>-->
<li style="list-style: none;"><a href="{{URL::to('admin/shipping-different')}}"><i class="fa fa-angle-right"></i> Addresses</a></li>
<li style="list-style: none;"><a href="{{URL::to('admin/transaction')}}"><i class="fa fa-angle-right"></i> Transactions</a></li>
<li style="list-style: none;"><a href="{{URL::to('category')}}"><i class="fa fa-angle-right"></i> Categories</a></li>
<li style="list-style: none;"><a href="{{URL::to('pages')}}"><i class="fa fa-angle-right"></i> Pages</a></li>
<li style="list-style: none;"><a href="{{URL::to('slider')}}"><i class="fa fa-angle-right"></i> Slider</a></li>
<li style="list-style: none;"><a href="{{URL::to('bkashs')}}"><i class="fa fa-angle-right"></i> Bkash</a></li>
<li style="list-style: none;"><a href="{{URL::to('medias')}}"><i class="fa fa-angle-right"></i> Pictures</a></li>
<li style="list-style: none;"><a href="{{URL::to('settings')}}"><i class="fa fa-angle-right"></i> Settings</a></li>
<li style="list-style: none;"><a href="{{URL::to('users')}}"><i class="fa fa-angle-right"></i> Users</a></li>
@else
<li style="list-style: none;"><a href="{{URL::to('user/order')}}"><i class="fa fa-angle-right"></i> Order</a></li>
@endif