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
					@foreach($candidateNa as $candi)
					<li>

						<div class="box">
						<img src="images/{{$candi->Picture}}" alt="Img" height="245" width="213">

						</div>
					<br>
						<h2>{{$candi->Name}}<br></h2>
						<h2><small>VOTES : {{$candi->Votes}}</small>
						</h2>
							<p>
							<span class="author">Party : {{$candi->Party}}</span><br>
							<span class="author">Constituency : {{$candi->ConstType}}-{{$candi->ConstNumber}}</span><br>

						</p>



					</li>
					@endforeach

              @foreach($candidatePk as $candi)
          <li>

            <div class="box">
            <img src="images/{{$candi->Picture}}" alt="Img" height="245" width="213">

            </div>
          <br>
            <h2>{{$candi->Name}}<br></h2>
            <h2><small>VOTES : {{$candi->Votes}}</small>
            </h2>
              <p>
              <span class="author">Party : {{$candi->Party}}</span><br>
              <span class="author">Constituency : {{$candi->ConstType}}-{{$candi->ConstNumber}}</span><br>

            </p>



          </li>
          @endforeach
				</ul>
			</div>
		</div>
	</div>
@stop
