@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Pictures
                    <a href="{{URL::to('/')}}/medias/create" class="btn btn-primary float-right"><i class="fa fa-plus-circle"></i> Upload New Picture </a>
                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{URL::to('/')}}/medias" method="get">@csrf
                    <div class="input-group mb-3 col-6">
                      <input type="text" class="form-control" name="searchkey" placeholder="Search Picture" aria-label="Search Picture" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="button-addon2">Search</button>
                      </div>
                    </div>
                    </form>
                    <div class="col-12 mb-3">
                    <a href="{{URL::to('/')}}/medias">All Pictures</a> |
                    <a href="{{URL::to('/')}}/mediasbycat/slider">Slider</a> | 
                    <a href="{{URL::to('/')}}/mediasbycat/banner1">Banner 1</a> | 
                    <a href="{{URL::to('/')}}/mediasbycat/banner2">Banner 2</a> | 
                    <a href="{{URL::to('/')}}/mediasbycat/banner3">Banner 3</a> | 
                    <a href="{{URL::to('/')}}/mediasbycat/brand">Brand</a> | 
                    <a href="{{URL::to('/')}}/mediasbycat/na">Others</a>
                    </div>
                   <div class="row">
                       @if(count($data)==0)
                       <h5 class="ml-4">Nothing Found!</h5>
                       @endif
                        @foreach($data as $item)
                        <div class="col-3 col-md-3">
                            <form action="{{ route('medias.destroy', $item->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm text-white" style="position: absolute;    right: 17px;    top: 0px;" onclick="return confirm('Are you sure you want to delete?')"> X</button>
                                </form>
                            <img src="{{URL::to('/')}}/application/storage/app/{{$item->source}}" class="img-fluid">
                            <p>{{$item->name}}</p>
                        </div>
                        @endforeach
                        </div>
                        {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
