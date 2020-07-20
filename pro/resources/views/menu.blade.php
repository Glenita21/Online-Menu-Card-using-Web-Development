<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Ice Cream Hotel Category Bootstrap Responsive Web Template | Specials :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Ice Cream Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{ asset('frontside/css/bootstrap.css') }}">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{ asset('frontside/css/style.css') }}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="{{ asset('frontside/css/fontawesome-all.css') }}">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<div class="header">
		<!-- navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<h1>
				<a class="navbar-brand" href="index.html">
					<img src="{{ asset('frontside/images/logo.png') }}" alt=" " class="img-fluid">
				</a>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{ url('welcome') }}">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					
					<li class="nav-item  mx-lg-3  active">
						<a class="nav-link" href="{{ url('menu') }}">Menu</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- //navigation -->
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner-2">

	</div>
	<!-- //banner -->

	<!--menu -->
	<div align="center">
  <h1>Our Menu</h1>
</div>
	<table  style="background-color:pink" class="table table-bordered">
<tr>
<th >ICECREAM NAME</th>
<th>PRICE</th>

</tr>
@foreach($ressss as $items)
<tr>
<td>{{ $items->dname}}</td>
<td>{{ $items->price}}</td>
</tr>

@endforeach

</table>
	<!-- //menu -->

	<!-- newsletter -->
	<div class="footer-top py-4 text-center">
		<div class="container py-xl-5 py-lg-3">
			<!-- newsletter  -->
			<div class="agile-newsletter">
				<p class="text-white">fresh & delicious!</p>
				<p class="text-white">cold and refreshing!!!</p>
				
			</div>
			<!-- //newsletter -->
			<!-- social icons -->
			
			<!-- //social icons -->
		</div>
	</div>
	<!-- //newsletter -->

	<!-- footer -->
	<div class="mkl_footer text-center py-4">
		<div class="container py-xl-5 py-4">
			<div class="mkls_footer_grid">
				<h2 class="text-white text-capitalize mb-5">we are best in making ice creams</h2>
				<p>you can't buy happiness,but you can buy ice cream and that is pretty much the same thing. 
					life is like an ice cream ,enjoy it before it melts!!!</p>
				<!-- footer logo -->
				<div class="logo2 my-sm-5 my-4">
					<a class="" href="index.html">
						<img src="{{ asset('frontside/images/logo.png') }}" alt=" " class="img-fluid">
					</a>
				</div>
				<!-- //footer logo -->
			</div>
			<!-- address -->
			<div class="contact-left-footer border-bottom pb-sm-5 pb-4">
				<ul>
					<li>
						<p class="text-white">
							<i class="fas fa-location-arrow mr-2"></i>345 Setwant natrer, USA</p>
					</li>
					<li class="mx-4">
						<p class="text-white">
							<i class="fas fa-phone mr-2"></i>+1(401) 1234 567.</p>
					</li>
					<li>
						<p class="text-white">
							<i class="far fa-envelope-open mr-2"></i>
							<a href="mailto:info@example.com" class="text-white">xylene@gmail.com</a>
						</p>
					</li>
				</ul>
			</div>
			<!-- //address -->
		</div>
	</div>
	<!-- //footer -->

	<!-- copyright -->
	<div class="w3l-copy text-center py-4">
		<p class="text-white">© 2018 Ice Cream. All rights reserved | Design by
			<a href="http://w3layouts.com/">W3layouts</a>
		</p>
	</div>
	<!-- //copyright -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="{{ asset('frontside/js/jquery-2.2.3.min.js') }}"></script>
	<!-- Default-JavaScript-File -->

	<!-- smooth scrolling -->
	<script src="{{ asset('frontside/js/SmoothScroll.min.js') }}"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="{{ asset('frontside/js/move-top.js') }}"></script>
	<script src="{{ asset('frontside/js/easing.js') }}"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
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
	<!-- //smooth scrolling-bottom-to-top -->

	<script src="{{ asset('frontside/js/bootstrap.js') }}"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>
