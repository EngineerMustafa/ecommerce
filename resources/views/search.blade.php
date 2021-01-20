@extends('layout')
@section('content')
<div class="custom-product">
        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
                <div class="trending-block" >
                <h1>searched results for Products</h1>    
                @foreach($products as $item)
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}">
                    <div class="">
                        <h2>{{$item['name']}}</h2>
                        <h5>{{$item['description']}}</h5>
                    </div>
                </a>
                @endforeach
                </div>
        </div>
</div>
 @endsection('content')
