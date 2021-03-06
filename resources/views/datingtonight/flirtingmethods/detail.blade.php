@extends('templates.datingtonight.master')
@section('title')
	Flirting Methods - Dating Tonight
@endsection
@section('content')
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{route('datingtonight.index.index')}}">Dating Tonight</a>
		</li>
		<li class="breadcrumb-item">
			<a style="color:#910745" href="{{route('datingtonight.flirtingmethods.index')}}">Flirting methods</a>
		</li>
	</ol>
	<!--//banner-->
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="">
									<img src="/storage/app/files/flirtingmethods/{{ $flirtingmethods->image }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> FEB 15,2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-thumbs-up"></i>{{ $flirtingmethods->count_number }}</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comment"></i> 0 Comments</a>
									</li>

								</ul>
							</div>
						</div>
						<h2 style="margin-bottom: 10px; margin-top: 5px;">{{ $flirtingmethods->name_flirting }}</h2>
						<h3>
							<a href="">{!! $flirtingmethods->preview_text !!}</a>
						</h3>
						<p>{!! $flirtingmethods->detail_flirting !!}</p>
						<strong>Author : {{ $flirtingmethods->author }}</strong>
					</div>
					<!-- Comment -->
					@include('datingtonight.flirtingmethods.comment')
					<!--/Comment-->
				</div>

				<!--//left-->
				<!--right-->
				@include('datingtonight.flirtingmethods.right-bar')
				<!--//right-->
			</div>
		</div>
	</section>
	<!--//main-->
	<!---->
	<!-- js -->
	<script src="/templates/datingtonight/js/jquery-2.2.3.min.js"></script>
	<script src="/templates/datingtonight/formDatingPlaces/js/script.js"></script>
	<!-- //js -->
	<!--/ start-smoth-scrolling -->
	<script src="/templates/datingtonight/js/move-top.js"></script>
	<script src="/templates/datingtonight/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
	 		};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="/templates/datingtonight/js/bootstrap.js"></script>


</body>

</html>
@endsection