
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('contents/frontend')}}/style.css">
    <title>Hello, world!</title>
  </head>
  <body>

  	  <div class="menu">
  	  	 <ul>
  	  	 	<li> 
              <a href="{{route('student')}}">Home</a>
              <a href="#">About</a>
              <a href="#">Blog</a>
              <a href="#">Other</a>
              <a href="#">Contact</a>
              <a href="{{route('login')}}">Login</a>
  	  	 	</li>
  	  	 </ul>
  	  </div>
       @yield('content')
     <div class="footer">
     	 <div class="container">
     	 	 <p>This is footer</p>
     	 </div>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </body>
</html>