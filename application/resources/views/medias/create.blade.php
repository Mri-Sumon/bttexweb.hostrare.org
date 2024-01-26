@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upload New Picture
                    <a href="{{URL::to('medias')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('medias.store') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Title</label>
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Title">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">2nd Title</label>
                                <input type="text" class="form-control" id="sec_title"  name="sec_title" placeholder="2nd Title">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Section</label>
                                <select class="form-control" name="link_id">
                                    <option value="na">Un-Assigned</option>
                                    <option value="slider">Slider [12] (W: 740px X H: 510px)</option>
                                    <option value="banner1">Banner Slider Right [4] (W: 250px X H: 250px)</option>
                                    <option value="banner2">Banner Slider Bottom [1] (W: 1170px X H: 140px)</option>
                                    <option value="banner3">Banner Featured Bottom [3] (W: 510px X H: 190px)</option>
                                    <option value="brand">Footer Brand Slider (W: 510px X H: 190px)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Browser Picture</label>
                                <input type="file" class="form-control" id="picture"  name="picture" placeholder="Browser Picture">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Picture Link</label>
                                <input type="text" class="form-control" id="link"  name="link" placeholder="Picture Link">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Picture Sorting Order</label>
                                <input type="number" class="form-control" id="sort"  name="sort" placeholder="Picture Sorting Order">
                            </div>
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
