<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

   
</head>
<body>


{{View::make('header')}}
  @yield('content')
  {{View::make('footer')}}


</body>
<style>
    .custom-login{
        height: 500px;
        padding-top:100px;
    }
    .custom-product{
      height:600px;
    }
    .slider-text{
      background-color: #5fc2eac7;
    }
    .detail-img{
      height:200px;
    }
    .trending-block{
      margin:20px;
    }
    .trending-item{
      float:left;
      width:20%;
    }
    .trending-img{
      height:100px;
    }
    .navbar-inversec {
    background-color: #a7a5a614;
    }
    .search-box{
      width:500px;
    }
    .searched-item{
      float:left;
      width:20%;
    }
</style>
</html>
