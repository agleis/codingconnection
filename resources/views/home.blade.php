<!doctype html>
<html>
@include('includes/head')

<body>
	<div class="page-wrap">
		@include('includes/frontnav')
		<div id="body">
			@include('includes/frontsidebar')
			<div id="slidestuff">
				<div id="slideshow-title">
					<h1>Why do YOU code?</h1>
				</div>
				<div id="slideshow">
					<div id="img1">
						<img src="img/img1.png" width="600px" height="500px">
					</div>
					<div id="img2">
						<img src="img/img2.jpg" width="600px" height="500px">
					</div>
					<div id="img3">
						<img src="img/img3.jpg" width="600px" height="500px">
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('includes/footer')
</body>


<script>
	$("#slideshow > div:gt(0)").hide();

	setInterval(function() { 
	  $('#slideshow > div:first')
		.fadeOut(1000)
		.next()
		.fadeIn(1000)
		.end()
		.appendTo('#slideshow');
	},  3000);
</script>

</html>