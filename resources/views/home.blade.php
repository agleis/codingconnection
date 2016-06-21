@extends('layouts/prelogin')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<div id="carousel-container">
				<h2>Why do YOU Code?</h2>
				<div id="frontCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#frontCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#frontCarousel" data-slide-to="1" class="active"></li>
						<li data-target="#frontCarousel" data-slide-to="2" class="active"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/img1.png" alt="A picture of a girl who codes" width="400" height="400">
						</div>
						<div class="item">
							<img src="img/img2.jpg" alt="A picture of a girl who codes" width="400" height="400">
						</div>
						<div class="item">
							<img src="img/img3.jpg" alt="A picture of a girl who codes" width="400" height="400">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#frontCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#frontCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div id="games">
				<img src="img/games.png" alt="games">
			</div>
			<div id="cs">
				<img src="img/games.png" alt="games">
			</div>
		</div>
	</div>

@endsection
