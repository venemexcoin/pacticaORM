<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teminos y Condiciones </title>
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style>
		p {
			text-align:justify;
		}
		.color {
			background: #64b5f6;
		}

		
	</style>
</head>
<body>

	<div class="navbar-fixed">
	<nav class="color">
		<div class="nav-wrappe">
			<div class="nav-content">
				<a href="#" class="brand-logo"><img src="{{ asset('fron/img/logo.png')}}"></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
       		    	<li><a href="{{ asset('/')}}">Return</a></li>
        			<li><a href="{{ asset('./terminos')}}">Terms</a></li>
        			<li><a href="{{ asset('./servImail')}}">Success rate</a></li>
      		    </ul>
      		    
			</div>	
		</div>
	</nav>
	</div>

	<div class="container">
	@yield('content')
	</div>

<script src="{{ asset('js/app.js') }}"></script>	
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>
	 $('.carousel.carousel-slider').carousel({fullWidth: true});
	
</script>
</body>
</html>
