@extends('layout')
@section('content')
<div class="custom-product">
        <div class="col-sm-10">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{$total}}Rs.</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0 Rs.</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>100Rs.</td>

                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{$total+100}}</td>

                </tr>
                </tbody>
            </table>
            <form action="orderplace" method="post">
            @csrf
                <div class="form-group">
                <lable for="">Address</lable>
                    <textarea placeholder="Enter your address" name="address" class="form-control">  </textarea>
                </div>
                <div class="form-group">
                    <lable for="">Payment Method</lable>
                    <p>
                    <input type="radio" value="Online"  name="payment">
                    <span>Online Payment</span>
                    </p>
                    <p>
                    <input type="radio" value="Bank Transfer" name="payment">
                    <span>Bank</span>
                    </p>
                    <p>
                    <input type="radio" value="PayPal" name="payment">
                    <span>PayPal</span>
                    </p>
                    <button class="btn btn-default" type="submit">CheckOut</button>
                </div>


            </form>
        </div>
</div>
 @endsection('content')
