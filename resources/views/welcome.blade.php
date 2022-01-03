<!doctype html>
<html>
<head>
  <title>@yield('title')</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  {{-- <a href="{{ route('products.create') }}" class="float-right">
    <img alt="" src='/Retail Analytics logo.png'
    width=150" height="70">
 </a> --}}
<div class="text-right p-5">
    <a class="btn btn-info" href="/login">Login</a>
    <a class="btn btn-info" href="/register">Register</a>

</div>
</head>
<div class="text-center">
<a href="/">
<img src='Retail Analytics logo.png' alt="profile Pic" height="500" width="700">
</div>
</a>


  <!-- navigation bar -->
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
            <a class="btn btn-info" href="{{ route('products.create') }}">Create Product</a>
            <a class="btn btn-info" href="{{ route('products.index') }}">Show Products</a>
            <a class="btn btn-info" href="/login">My Analytics</a>
            <a class="btn btn-info" href="/ShopAnalytics">Shop Analytics</a>
      </div>
    </div>
  </div>
  <!-- navigation bar ends here -->


  @yield('content')


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>
