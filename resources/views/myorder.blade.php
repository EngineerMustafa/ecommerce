@extends('layout')
@section('content')
<div class="custom-product">
        
                <div class="trending-block" >
                <h1>Orders List</h1>  
                @foreach($orders as $item)
                <div class="row">
                <div class=" col-sm-12">
                
                <div class="col-sm-4"> 
                    <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-4"> 
                    <h2>{{$item->name}}</h2>
                    <h5>Delivery Status: {{$item->status}}</h5>
                    <h5>Payment Status: {{$item->payment_status}}</h5>
                    <h5>Payment Method: {{$item->payment_method}}</h5>
                    <h5>Delivery Address: {{$item->address}}</h5>
                    <h5>Item Price: Rs.{{$item->price}}/-</h5>
                </div>
                </div>
                </div>           
                @endforeach
                 </div>
</div>
 @endsection('content')
