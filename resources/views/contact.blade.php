@extends('templates.main')
@section('content')
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Contact Info</h2>
					<ul class="contact">
						<li>
							<p>
								<span class="home"></span> <em>Election Comission of Pakistan<br> <small>SECRETARIAT </small></em>Election Commission Of Pakistan Secretariat, Election House
Constitution Avenue G-5/2
Islamabad
							</p>
						</li>
						<li>
							<p class="phone">
								Phone: (+92)(51) (9205611)
							</p>
						</li>
						<li>
							<p class="mail">
								Email: info@ecp.gov.pk.com
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="main">
				<h1>Contact</h1>
				<h2>Send Us a Quick Message</h2>
				<p>
					If you have any issues regarding your registration in the voter list or your candidature in the national assembly or provincial assemblies or any other query you can send us a message.
				</p>
				<form action="{{route('home')}}" method="get" class="message">
					<label>First Name</label>
					<input type="text" value="">
					<label>Last Name</label>
					<input type="text" value="">
					<label>Email Address</label>
					<input type="text" value="">
					<label>Message</label>
					<textarea></textarea>
					<button id="sendmessage" onclick="myFunc()" class="btn btn-primary"> Send Message</button>
				</form>
			</div>
		</div>
	</div>
@stop
