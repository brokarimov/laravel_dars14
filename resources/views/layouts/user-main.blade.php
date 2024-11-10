<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/js/fancybox/source/jquery.fancybox.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery.scrollbar.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
		.truncate-cell {
			max-width: 100px;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}
		.home{
			color:white
		}
	</style>
</head>

<body class="home">
	<header class="header style7">
		<div class="top-bar">
			<div class="container">
				<div class="top-bar-left">
					<div class="header-message">
						Welcome to our online store!
						<a class="home" href="/user-post">Home</a>
					</div>
				</div>
				<div class="top-bar-right">
					<a class="btn btn-primary mt-3" href="/login">Login</a>
					<a class="btn btn-warning mt-3" href="/register">Register</a>
				</div>
			</div>
		</div>


	</header>

	<div class="container">
		<div class="row">
			<div class="col-12">
				@yield('content')

			</div>
		</div>
	</div>


	<a href="#" class="backtotop">
		<i class="pe-7s-angle-up"></i>
	</a>
	<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.plugin-countdown.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-countdown.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/isotope.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.scrollbar.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('assets/js/mobile-menu.js')}}"></script>
	<script src="{{asset('assets/js/chosen.min.js')}}"></script>
	<script src="{{asset('assets/js/slick.js')}}"></script>
	<script src="{{asset('assets/js/jquery.elevateZoom.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.actual.min.js')}}"></script>
	<script src="{{asset('assets/js/fancybox/source/jquery.fancybox.js')}}"></script>
	<script src="{{asset('assets/js/lightbox.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.thumbs.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.scrollbar.min.js')}}"></script>
	<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
	<script src="{{asset('assets/js/frontend-plugin.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
		integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
		crossorigin="anonymous"></script>


</body>

</html>