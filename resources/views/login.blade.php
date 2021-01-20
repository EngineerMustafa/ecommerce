@extends('layout')
@section('content')
<h1>Login Page </h1>
<div class="container custom-login">
        <div class="row">
            <div class=" col-sm-4">
                <form action="login" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="/register" class="btn btn-primary">Register</a>
                </form>
            </div>
        </div>
  </div>
  @endsection('content')
