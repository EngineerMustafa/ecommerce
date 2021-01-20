@extends('layout')
@section('content')
<div class="custom-product">
        
                <div class="trending-block" >
                <h1>Cart Items</h1>  

                 <a href="/ordernow" class="btn btn-success">Order Now </a><br><br>
                @foreach($products as $item)
                <div class=" col-sm-12">
                <div class="col-sm-4"> 
                    <h2>{{$item->name}}</h2>
                    <h5>{{$item->description}}</h5>
                </div>
                <div class="col-sm-4"> 
                    <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-4 ">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning ">Remove</a>
                </div>
                </div><br><br>
                @endforeach
                <a href="/ordernow" class="btn btn-success">Order Now </a><br><br>
                 </div>
</div>
 @endsection('content')
