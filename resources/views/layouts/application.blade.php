<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Evos Media is a site dedicated to Jack Evans portfolio. Currently serving in the British Armed Forces, he has all the media you could wish for.">
		<meta name="keywords" content="evo,evos,evosmedia,media,armed,forces,british,jack,evans,jackevans,portfolio">
		<meta name="author" content="Jack Evans">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/png" href="/uploads/favicon.ico"/>

		<!-- Title -->
        <title>{{ config('app.name') }} | <?= \Request::route()->getName() ?? 'Unknown'; ?></title>
		
		<!-- Boostrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
		
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		
		<!-- Custom CSS -->
		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			
			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
			
			
			.dropdown-submenu {
				position: relative;
			}

			.dropdown-submenu>.dropdown-menu {
				top: 0;
				left: 100%;
				margin-top: -6px;
				margin-left: -1px;
				-webkit-border-radius: 0 6px 6px 6px;
				-moz-border-radius: 0 6px 6px;
				border-radius: 0 6px 6px 6px;
			}

			.dropdown-submenu:hover>.dropdown-menu {
				display: block;
			}

			.dropdown-submenu>a:after {
				display: block;
				content: " ";
				float: right;
				width: 0;
				height: 0;
				border-color: transparent;
				border-style: solid;
				border-width: 5px 0 5px 5px;
				border-left-color: #ccc;
				margin-top: 5px;
				margin-right: -10px;
			}

			.dropdown-submenu:hover>a:after {
				border-left-color: #fff;
			}

			.dropdown-submenu.pull-left {
				float: none;
			}

			.dropdown-submenu.pull-left>.dropdown-menu {
				left: -100%;
				margin-left: 10px;
				-webkit-border-radius: 6px 0 6px 6px;
				-moz-border-radius: 6px 0 6px 6px;
				border-radius: 6px 0 6px 6px;
			}
			
			@media (max-width: 700px) {
				.make-space-nav {
					margin-top: 11.5% !important;
				}
				
				@yield('mobilecss')
			}
			
			.make-space-nav {
				margin-top: 3.5%;
			}
			
			.breadcrumb {
				margin-bottom: 0 !important;
			}
			
			@yield('css')
		</style>
		
		<!-- Custom carousel CSS -->
		<link href="{{!! asset('sass/carousel.css') !!}}" rel="stylesheet">
		
	<head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		  
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="/">Evos <span style='color: red;'>Media</span></a> <!-- TODO: Create Rifles Style -->
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li id='nav-home'><a href="/">Home</a></li>
				<li id='nav-portfolio'><a href="#">Portfolio</a></li>
				<li id='nav-store'><a href="/shop/index">Shop</a></li>
			  </ul>
			  <form class="navbar-form navbar-left" style='padding-left: 15%;'>
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			  </form>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart (<span id="cart-amount">0</span>)</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					@if (Route::has('login'))
						@auth
							<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Settings</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"><form method="post" action="/logout">@csrf<button type="submit">Logout</button></form></a></li>
						@else
							<li><a href="{{ route('login') }}">Login</a></li>
							@if (Route::has('register'))
								<li role="separator" class="divider"></li>
								<li><a href="{{ route('register') }}">Register</a></li>
							@endif
						@endauth
					@endif
				  </ul>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		
		<div class="make-space-nav"></div>
		<!-- Breadcrumb -->
		<ol class="breadcrumb">
			<span class="glyphicon glyphicon-link"></span>
			<span style="margin-left: 2%;"></span>
			<li><a href="#">Evos Media</a></li>
			@yield('breadcrumb')
		</ol>
			
		<!-- Content -->
		@yield('content')
		
		<!-- Footer -->
		<center>
			<div class="row" style="background: #000; padding: 20px; color: #fff; border-top: 3px solid #fff; padding-bottom: 5%;">
				<div class="col-xs-4 col-md-4">
					<h3> QUICK LINKS </h3>
				</div>
				<div class="col-xs-4 col-md-4">
					<h3> SOCIAL MEDIA </h3>
					<div class="row">
						<div class="col-xs-5" style="text-align: right;">
							<i class="fa fa-facebook"></i>
						</div>
						<div class="col-xs-7" style="text-align: left;">
							FACEBOOK
						</div>
					</div>
					<div class="row">
						<div class="col-xs-5" style="text-align: right;">
							<i class="fa fa-youtube"></i>
						</div>
						<div class="col-xs-7" style="text-align: left;">
							YOUTUBE
						</div>
					</div>
					<div class="row">
						<div class="col-xs-5" style="text-align: right;">
							<i class="fa fa-instagram"></i>
						</div>
						<div class="col-xs-7" style="text-align: left;">
							INSTAGRAM
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-md-4">
					<h3> ABOUT ME </h3>
				</div>
			</div>
		
			<!-- Copyright -->
			<p style="background: #000; color: #fff; margin: 0; padding: 10px;"><i style="opacity: 0.5;">Copyright (C) 2019 EvosMedia.UK, All Rights Reserved.</i></p>
		
		</center>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143617110-1"></script>
		
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-143617110-1');
		</script>
		
		<!-- App JS -->
		<script src="{{ asset('js/app.js') }}"></script>
		
		<!-- Require JQuery -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		
		<!-- Boostrap JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		
		<!-- Custom JS -->
		<script></script>
		
    </body>
</html>

