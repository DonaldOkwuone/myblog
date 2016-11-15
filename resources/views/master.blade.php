<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Arsenal Break a Blog Category Flat Bootstarp responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Arsenal, English Premier League, Arsene Wenger, Naija Gooner, Naija Gunner" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="{{URL::asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/easing.js')}}"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="index.html"><img src="{{URL::asset('images/logo-1.png')}}" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="{{url('/')}}"  class="active">Home</a></li>
						<li><a href="{{url('/about-us')}}">About</a></li>  
						<li><a href="{{url('/contact-us')}}">Contact</a></li>
					</ul>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<div class="banner-text">
					<h2>Welcome to </h2>
					<h1>Arsenal Break</h1>
					<div class="banner-btn">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--main section -starts-->
		@yield('content')
	<!--main sections -end-->
	<!--slide-starts
	
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p> &copy 2016    <a href="index.html" >Arsenal Break.</a> </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>