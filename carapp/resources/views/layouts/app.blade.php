<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Marketplace Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
        <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      &nbsp;
    </div>
    <ul class="nav navbar-nav">

				<li>
                    <a href="/" class="p-3">Home</a>
                </li>
				@auth
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
				<li>
                    <a href="{{ route('cars.index') }}" class="p-3">Cars</a>
                </li>
				@endauth
    </ul>
    <ul class="nav navbar-nav navbar-right">
	@auth

	<li><a href="#" class="p-3">{{ auth()->user()->name }}</a></li>
      <li><form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit" class="btn btn-danger navbar-btn">Logout</button>
                        </form></li>
                    
                @endauth

	@guest
	
      <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    
	@endguest
</ul>
  </div>
</nav>
        @yield('content')
    </body>
</html>
