<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user')){
  $total = ProductController::cartItem();
}


?>

<nav class="navbar navbar-inverse navbar-inversec">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/myorder">My Orders</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/search">
      <div class="form-group">
        <input type="text" name="query" class="form-control search-box" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
        <li  class="nav-item">
          <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
        </li>
        @if(Session::has('user'))
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          {{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">LogOut</a></li>
        </ul>
      </li>
       @else
       <li  class="nav-item">
       <a class="nav-link" href="/login">Login</a>
       </li>
       <li  class="nav-item">
       <a class="nav-link" href="/register">Register</a>
       </li>
       @endif
      </ul>
  </div>
</nav>