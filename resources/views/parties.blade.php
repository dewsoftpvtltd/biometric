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
				<h1>Description of political parties</h1>
				<ul class="news">
				@foreach($party as $p)	
					<li>
							
						<div class="box">
						<img src="images/{{$p->ElectoralSign}}" alt="Img" height="245" width="213">
						
						</div>
						<br><br>
						
						<h2>{{$p->Name}}<br><small>Head : {{$p->HeadName}}</small><br><small>{{$p->PartyAcr}}</small></h2>
					
					<p>
							<span class="author">Sign : {{$p->ElectoralSignName}}</span><br>
							
						</p>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@stop