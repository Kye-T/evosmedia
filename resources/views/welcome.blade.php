@extends('layouts.application')

@section('css')
.no-margin {
	margin: 0 !important;
}

.margin-top {
	margin-top: 20px !important;
}



.header-title {
	border-bottom: 1px solid #fff;
	padding-bottom: 20px;
}

.jumbotron {
	background: url('/uploads/foxhound-night.jpg') #000 no-repeat;
	background-attachment: fixed;
	background-position-y: center;
	background-size: cover;
	color: #fff;
	padding: 0 !important;
}

.darken-overlay {
	background: rgba(0,0,0,0.5);
	padding: 130px;
}

.content-date {
	font-size: 12px;
	border-bottom: 1px solid #fff;
	padding-bottom: 2%;
}

.content-date, .content-p, .content-date {
	font-weight: bold;
}

.content-p {
	height: 200px;
}

.content-link {
	font-size: 20px;
	color: #fff;
	padding: 20px;
	border: 1px solid #fff;
}

.content-link:hover {
	text-decoration: none !important;
	border: 2px solid #fff !important;
	color: #fff !important;
}

.rifles-black-btn {
	color: #fff !important;
}

.rifles-green-btn {
	color: green !important;
}

.rifles-red-btn {
	color: red !important;
}

.rifles-black-btn, .rifles-green-btn, .rifles-red-btn {
	font-weight: 600;
	border: 1px #fff solid !important;
	background: none !important;
}

.rifles-black-btn:hover {
	
}

.rifles-green-btn:hover {
	
}

.rifles-red-btn:hover {
	
}

.resize-img {
	max-width: 100%;
	width: 100%;
	border: 2px solid #fff;
	border-radius: 100%;
	margin-top: 50%;
	padding: 5%;
}

.resize-img:hover {
	background: #fff;
}

.content-right {
	float: left;
	padding-left: 5%;
}

.content-left {
	float: right;
	padding-right: 5%;
}

.divider-content {
	height: 100px;
	width: 100%;
	background-color: #efefef;
}

.image-overlay {
	background: url('/uploads/pistol-chamber-round.jpg') no-repeat;
	background-position-y: center;
	background-size: cover;
	width: 100%;
	height: 200px;
	padding: 10%;
}
@endsection

@section('mobilecss')
.rifles-black-btn, .rifles-green-btn, .rifles-red-btn {
	font-size: 10px !important;
	display: inline-block;
	margin: 10px;
}
@endsection

@section('breadcrumb')
<li><a href="/">Home</a></li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="jumbotron" style="margin-bottom: 0;">
			<div class="darken-overlay">
				<center>
					<h1 class="header-title">EVOS MEDIA <i style="font-size: 50px; padding-left: 20px;" class="
	glyphicon glyphicon-camera"></i></h1>
					<p style="width: 100%;" class="no-margin margin-top">
						Evos Media was founded in 2018 whilst serving in the British Armed Forces.
					</p>
					<p style="width: 100%;" class="no-margin">
						Since then, I've produced and sold content world wide.
					</p>
					<p style="width: 100%;">
						Check out my content below.
					</p>
					<p style="padding-top: 10px;">
						<a class="btn btn-primary btn-lg rifles-green-btn" href="#" role="button">Portfolio</a>
						<a class="btn btn-primary btn-lg rifles-red-btn" href="#" role="button">Products</a>
						<a class="btn btn-primary btn-lg rifles-black-btn" href="#" role="button">Sponsors</a>
					</p>
				</center>
			</div>
		</div>
		<div class="jumbotron" style="padding-bottom: 5% !important; background: #000 no-repeat; background-position-y: center; background-size: cover; margin: 0; margin-top: -20px;">
			<div class="container">
				<div class="row" style="padding: 25px;">
					<center>
						<br />
						<div class="row">
							<div class="col-xs-6 col-md-4" style="border: 1px solid #efefef; padding: 20px;">
								<div class="row">
									<p class="content-date">
										SEPTEMBER 8, 2018
									</p>
									<div class="col-xs-12 col-md-4">
										<img src='/uploads/pistol-chamber-round.jpg' class="resize-img" alt="Pistol Chamber Round" />
									</div>
									<div class="col-xs-12 col-md-8 content-right">
										<p class="content-p">
											CONTENT
										</p>
										<a class="content-link" href="https://www.instagram.com/p/BneZCjkngT0/" alt="Instagram">View on Instagram</a>
									</div>
								</div>
								<br /> <hr /> <br />
								<div class="row">
									<p class="content-date">
										SEPTEMBER 8, 2018
									</p>
									<div class="col-xs-12 col-md-4">
										<img src='/uploads/gpmg-load.jpg' class="resize-img" alt="Pistol Chamber Round" />
									</div>
									<div class="col-xs-12 col-md-8 content-right" style="margin-bottom: 5%;">
										<p class="content-p">
											CONTENT
										</p>
										<a class="content-link" href="https://www.instagram.com/p/BneZCjkngT0/" alt="Instagram">View on Instagram</a>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-md-8">
								<h2 class="image-overlay" style="margin-left: 5%; margin-top: 0;">CONTENT RIGHT</h2>
							</div>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
