@extends('templates.main')
@section('content')
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Recent News</h2>
	
					<ul style="font-family: sans-serif; color: #728063;"><li>
						Hon'ble CEC / ECP does not have any social media account
					</li>
					<li>
						Statement of Assets and Liabilities of Parliamentarians for the Financial Year 2014
					</li>
					<li>
						Hon'able Member Punjab Justice(R) Riaz Kiyani's Legal Notice to Mr. Afzal Khan (Ex-Addl Secretary)
					</li>
					<li>Electoral Reforms by ECP</li>
					<li>General Elections 2018</li>
					</ul>
				</div>
				
			</div>
			<div class="main">
				<h1>Votes Obtained by Candidates</h1>
				<ul class="news">
					<li>
						<div class="box">
							<img src="images/bride-sideview.jpg" alt="Img" height="245" width="213">
						</div>
						<p class="info">
							31st January 2023 by <span class="author">Manes Winchester</span>
						</p>
						<h2>The Basics of Marriage Laws</h2>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.You can remove any link
						</p>
						<a href="singlepost.html" class="more">Read More</a>
					</li>
					<li>
							
						<div class="box">
						<img src="data:image/jpg;base64,{{ base64_encode($candidate->Picture) }}" alt="Img" height="245" width="213">
						
						</div>
						<p class="info">
							<span class="author">Party : {{$candidate->Party}}</span><br>
							<span class="author">Constituency Type : {{$candidate->ConstType}}</span><br>
							<span class="author">Constituency Number : {{$candidate->ConstNumber}}</span>
						</p>
						<h2>{{$candidate->Name}}<br><small>s/o {{$candidate->Surname}}</small></h2>
						
						<h2>VOTES OBTAINED : {{$candidate->Votes}}
						</h2>
						
					</li>
					<li>
						<div class="box">
							<img src="images/children.jpg" alt="Img" height="245" width="213">
						</div>
						<p class="info">
							31st January 2023 by <span class="author">Manes Winchester</span>
						</p>
						<h2>Children &amp; Divorced Parents</h2>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.You can remove any link
						</p>
						<a href="singlepost.html" class="more">Read More</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
@stop