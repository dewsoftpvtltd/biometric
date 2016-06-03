@extends('templates.main')
@section('content')
	<div id="contents">
		
			<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
		<img src="{{asset('images/family-large.jpg') }}" alt="Img" height="382" width="460">
      </div>

      <div class="item">
        <img src="{{asset('images/oath.png') }}" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="{{asset('images/nawaz.png') }}" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="{{asset('images/ecpbldng.png') }}" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

		</div>
		<div class="highlight">
			<div class="clearfix">
				
				<h1>Our Vision and Mission</h1>
				<h2> Vision </h2><p style="margin-top: -25px;"> 

						To fulfill its Constitutional obligation of holding free, fair and impartial
						elections in an effective, credible, transparent and independent manner;
						providing equal opportunity and accessibility to all and meeting the
						aspirations of the nation for a strong democracy in Pakistan.</p>
					<h2>Mission</h2><p style="margin-top: -25px;">
						To organise and conduct free, fair and impartial elections through
						enhancing its organisational capacity; preparing and maintaining
						credible electoral rolls; delimiting constituencies in a transparent
						manner; encouraging voters’ participation; monitoring electoral
						processes diligently; building constructive relationships with all
						stakeholders; and introducing comprehensive electoral reforms in
						Pakistan.
				</p>
			</div>
		</div>
		<div class="featured">
			<h2></h2>
			<ul class="clearfix">
				<li>
					<div class="frame1">
						<div class="box">
							<img src="{{asset('images/quaid.jpg') }}" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>QUAID-E-AZAM MUHAMMAD ALI JINNAH ADDRESS TO THE CIVIL SERVANTS IN PESHAWAR [APRIL, 1948]</b> 
					</p>
					<a href="#" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="{{asset('images/cec.jpg') }}" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Message from Honourable CHEIF Election COMMISSION</b> 


					</p><br>
					<a href="#" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="{{asset('images/bbr.jpg') }}" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Foreword Secretary Election Commission of Pakistan (ECP)
</b> 
					</p>
					<br>
					<a href="#" class="more">Read More</a>
				</li>
				<li>
					<div class="frame1">
						<div class="box">
							<img src="{{asset('images/press.jpg') }}" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>Press Release and notifications</b> 
					</p>
					<br><br>
					<a href="#" class="more">Read More</a>
				</li>
			</ul>
		</div>
	</div>
@stop