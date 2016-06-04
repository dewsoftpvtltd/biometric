<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Electronic Biometric Voting System </title>

	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"><link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
	<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>
	<div id="header">

			<div class="logo">
				<a href="index.html" ><img src="{{asset('images/logo.png')}}" alt="LOGO" height="100" width="290" style="margin-bottom:-20px; margin-left: 50px;"
				></a>
			</div>
			<div class="clearfix">
			<ul class="navigation">
				<li class="active">
					<a href="{{url('/')}}">Home</a>
				</li>
				<li>
					<a href="{{ url('about')}}">About</a>
				</li>
				<li>
					<a href="{{ url('faqs')}}">FAQs</a>
				</li>

				<li>
					<a href="{{ url('results')}}">Election Results</a>

				</li>
				<li>
					<a href="{{ url('parties')}}">Political Parties</a>
				</li>

				<li>
					<a href="{{ route('contact')}}">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	@yield('content')
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest News</h4>
				<p>
					Progress Report on the implementation of ECP's Second Five Year Strategic Plan (2014-2018)
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> Election Commission Of Pakistan Secretariat, Election House
Constitution Avenue G-5/2
Islamabad
				</p>
				<p>
					<span>Phone:</span> (+92)(51) (9205611)
				</p>
				<p>
					<span>Email:</span> info@ecp.gov.pk
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					If you have any issues regarding your registration in the voter list or your candidature in the national assembly or provincial assemblies or any other query you can send us an email.
				</p>
				<button onclick="alert('Email sent to : info@ecp.gov.pk')" class="btn btn-primary">Click to send us an email</button>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="#" class="facebook"></a><a href="#" class="twitter"></a><a href="#" class="googleplus"></a><a href="#" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2016 Anoshka Tariq (2012-EE-306). All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>

  <script>

    function myFunc(){
      alert('Message Sent');
    }
  </script>
</html>
