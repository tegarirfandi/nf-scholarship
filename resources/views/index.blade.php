<!DOCTYPE HTML>
<html>
<head>
<title>Scholarship Nurul Fikri</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
	<div class="header_bottom">
	  <div class="container">
	  	<div class="logo">
	  	   <a href="index.php"><img src="images/logo.png" alt=""/></a>
	  	</div>
	  	{{-- <div class="consul_btn1"><a href="/login">LOGIN</a></div> --}}
	  	  <div class="menu">
	  	    <div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a><div class="nav_icon"><img src="images/nav_icon.png" alt=""/></div>
				<ul class="nav">
					<li class="active"><a href="/">Home</a></li>
					@if (Auth::guest())
						<li><a href="/register">Register</a>
					@else
						<li><a href="/daftar-beasiswa">Daftar Beasiswa</a>
					@endif
					</li>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
			<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		    </script>
				@if (Auth::guest())
					<div class="consul_btn"><a href="/login">LOGIN</a></div>
				@else
					<div class="consul_btn"><a href="{{ route('logout') }}"   onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">LOGOUT</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
					</form></div>
				@endif
          <div class="clearfix"> </div>
	  </div>
	  </div>
	</div>
	<div class="slider" id="home">
  	 <div class="slider_container">
  		<div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
						    <h1>Scholarship Nurul Fikri</h1>
							<p class="top">Mencerdaskan Kehidupan Bangsa!</p>
						    <ul class="button">
						       <li><a href="#">Gabung Bersama Kami!</a></li>
							</ul>
						 </div>
					 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;">
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
						    <h1>Scholarship Nurul Fikri</h1>
							<p class="top">Beasiswa STT Terpadu Nurul Fikri</p>
						    <ul class="button">
						       <li><a href="#">Gabung Bersama Kami!</a></li>
							</ul>
						 </div>
					   </div>
				   </article>
				</div>
              </div>
            	 <script src="js/jquery.wmuSlider.js"></script>
				       <script>
       						 $('.example1').wmuSlider();
   						</script>
           </div>
       </div>
       <div class="main">
				 <div class="approach" id="app">
					 <div class="container">
							<div class="gallery-head text-center">
							 <h3>Apa Itu SNF ?</h3>
							 <p>Scholarship Nurul Fikri Adalah ....</p>
							 <span> </span>
						 </div>
						 <!-- content -->

					 </div>
				 </div>
       <div id="about" class="about">
       		<div class="container">
       		   <div class="gallery-head text-center">
				  <h3>Keuntungan Bersama Kami</h3>
				  <p>apalah pokoknya</p>
				  <span> </span>
			    </div>
       			<div class="row text-center">
       				<div class="col-md-4 about_grid">
       					<i class="icon1"> </i>
       					<h3><a href="#">Kuliah Gratis</a></h3>
       					<p>Kuliah blablabla..</p>
       				</div>
       				<div class="col-md-4 about_grid">
       					<i class="icon2"> </i>
       					<h3><a href="#">Sarjana Komputer</a></h3>
       					<p>Sarjana blablabla...</p>
       				</div>
       				<div class="col-md-4 about_grid">
       					<i class="icon3"> </i>
       					<h3><a href="#">Siap Kerja</a></h3>
       					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
       				</div>
       			</div>
       		</div>
       	</div>
       </div>
       <div class="footer_top">
       	<div class="container">
       		<h3>Kontak Kami</h3>
       		<div class="social">
			   <ul>
				 <li><a href="https://fb.com/sttterpadunf"> <i class="facebook"> </i> </a></li>
				 <li><a href="https://twitter.com/sttterpadunf"><i class="twitter"> </i> </a></li>
				 <div class="clear"> </div>
			  </ul>
			</div>
			<p>Subscribe to our newsletter to stay update with what is new</p>
			<div class="footer_form">
   			   <form method="post" action="contact-post.html">
				  <input type="text" class="textbox" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
				  <input type="submit" value="Subscribe">
			   </form>
			</div>
       	</div>
       </div>
       <div class="footer-bottom">
   	<div class="container">
   		<div class="copy">
		    <p>&copy; 2016 Created by <a href="index.html" target="_blank"> OIN</a></p>
		</div>
   	</div>
   </div>
   <script type="text/javascript">
						$(document).ready(function() {
							$().UItoTop({ easingType: 'easeOutQuart' });

						});
					</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
