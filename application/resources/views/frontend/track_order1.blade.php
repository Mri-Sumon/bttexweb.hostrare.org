@extends('layouts.Home0Layout')
<style>
    .continue-shopping{
        text-align: center;
        font-size: 21px;
    }
</style>

@section('content')
<section class="content_wrapper checkout_wrapper">
        <div class="container ">
    <h1></h1>
    <div class="continue-shopping">
        @if(Session::has('message'))
        <p class="alert alert-success" role="alert">{{Session::get('message')}}</p>
        @endif
        @if(Session::has('not_found_message'))
        <p class="alert alert-danger" role="alert">{{Session::get('not_found_message')}}</p>
        @endif
    <form method="post" action="{{url('trackorder')}}">
        @csrf
        <!--<div class="form-group">-->
        <!--    <label for="order_id">Order ID:</label>-->
        <!--    <input type="text" name="order_id">-->
        <!--</div>-->
        <div class="form-group">
            <label for="phone">Number:</label>
            <input type="text" name="phone">
        </div>
        <div class="form-group">
            <label for=""></label>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
    </div>
</div>
</section>

@endsection