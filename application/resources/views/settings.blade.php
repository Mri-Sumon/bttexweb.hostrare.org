@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Settings
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ URL::to('saveSettings') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Name</label>
                                <input type="text" value="{{$singleData->name}}" class="form-control" id="name"  name="name" placeholder="Page Name/Menu">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputscroll" class="h6">Top Scroller Text (New Line Seperated)</label>
                                <textarea class="form-control" id="scroll"  name="scroll" rows="8">{{$singleData->scroll}}</textarea>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputLogo" class="h6">Icon Logo:</label>
                                <img src="{{URL::to('/')}}/application/storage/app/slider/{{$singleData->icon}}" class="img-fluid"><br>
                                <input type="file" class="form-control" id="icon"  name="icon">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputLogo" class="h6">Logo:</label>
                                <img src="{{URL::to('/')}}/application/storage/app/slider/{{$singleData->logo}}" class="img-fluid"><br>
                                <input type="file" class="form-control" id="logo"  name="logo">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputLogo" class="h6">Footer Logo:</label>
                                <img src="{{URL::to('/')}}/application/storage/app/slider/{{$singleData->altlogo}}" class="img-fluid"><br>
                                <input type="file" class="form-control" id="altlogo"  name="altlogo">
                            </div>

                            <div class="form-group col-md-7 mt-5">
                                <h5>Why Choose us?</h5>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputscroll" class="h6">High quality</label>
                                <textarea class="form-control" id=""  name="paragraph" rows="8">{{$singleData->paragraph}}</textarea>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputscroll" class="h6">Customer Support</label>
                                <textarea class="form-control" id=""  name="paragraph2" rows="8">{{$singleData->paragraph2}}</textarea>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputscroll" class="h6">Delivery</label>
                                <textarea class="form-control" id=""  name="paragraph3" rows="8">{{$singleData->paragraph3}}</textarea>
                            </div>
                            <div class="form-group col-md-7 mb-5">
                                <label for="exampleInputscroll" class="h6">Easy retrun & Refund</label>
                                <textarea class="form-control" id=""  name="paragraph4" rows="8">{{$singleData->paragraph4}}</textarea>
                            </div>
                            
                            <div class="form-group col-md-7">
                                <label for="exampleInputAddress" class="h6">Address</label>
                                <textarea class="form-control" id="address"  name="address">{{$singleData->address}}</textarea>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputTel" class="h6">Telephone</label>
                                <input type="text" value="{{$singleData->tel}}" class="form-control" id="tel"  name="tel" placeholder="Telephone">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputMobile" class="h6">Mobile</label>
                                <input type="text" value="{{$singleData->mobile}}" class="form-control" id="mobile"  name="mobile" placeholder="Mobile">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputFax" class="h6">Webmail</label>
                                <input type="text" value="{{$singleData->webmail}}" class="form-control" id="webmail"  name="webmail" placeholder="webmail">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputEmail" class="h6">Email</label>
                                <input type="text" value="{{$singleData->email}}" class="form-control" id="email"  name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputEmail" class="h6">Hotline</label>
                                <input type="text" value="{{$singleData->hotline}}" class="form-control" id="hotline"  name="hotline" placeholder="Hotline">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputLink1" class="h6">Facebook Page Link</label>
                                <input type="text" value="{{$singleData->link1}}" class="form-control" id="link1"  name="link1" placeholder="Facebook Page Link">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputLink2" class="h6">Twitter Page Link</label>
                                <input type="text" value="{{$singleData->link2}}" class="form-control" id="link2"  name="link2" placeholder="Twitter Page Link">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputLink3" class="h6">Google Page Link</label>
                                <input type="text" value="{{$singleData->link3}}" class="form-control" id="link3"  name="link3" placeholder="Google Page Link">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputLink4" class="h6">Pinterest Page Link</label>
                                <input type="text" value="{{$singleData->link4}}" class="form-control" id="link4"  name="link4" placeholder="Pinterest Page Link">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputOfficeHours" class="h6">Office Hours</label>
                                <input type="text" value="{{$singleData->office_hours}}" class="form-control" id="office_hours"  name="office_hours" placeholder="Office Hours">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputMapLink" class="h6">Map Link</label>
                                <input type="text" value="{{$singleData->map_link}}" class="form-control" id="map_link"  name="map_link" placeholder="Map Links">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputMapLink" class="h6">Copyright Text</label>
                                <input type="text" value="{{$singleData->copyright}}" class="form-control" id="copyright"  name="copyright" placeholder="Copyright Text">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputInsideDhaka" class="h6">Delivary Charge(Inside Dhaka)</label>
                                <input type="text" value="{{$singleData->Delivery_Charge_Inside_Dhaka}}" class="form-control" id="Delivery_Charge_Inside_Dhaka"  name="Delivery_Charge_Inside_Dhaka" placeholder="Delivery Charge Inside Dhaka">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputOutsideDhaka" class="h6">Delivary Charge(Outside Dhaka)</label>
                                <input type="text" value="{{$singleData->Delivery_Charge_Outside_Dhaka}}" class="form-control" id="Delivery_Charge_Outside_Dhaka"  name="Delivery_Charge_Outside_Dhaka" placeholder="Delivery Charge Inside Dhaka">
                            </div>
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Update</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
