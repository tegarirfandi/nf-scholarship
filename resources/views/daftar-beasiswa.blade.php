<!DOCTYPE HTML>
<html>
<head>
<title>Registrasi - Scholarship Nurul Fikri</title>
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
			<div class="consul_btn1"><a href="masuk.php">LOGIN</a></div>
			<div class="menu">
				<div class="h_menu4"><!-- start h_menu4 -->
			<a class="toggleMenu" href="#">Menu</a><div class="nav_icon"><img src="images/nav_icon.png" alt=""/></div>
			<ul class="nav">
				<li><a href="/">Home</a></li>
				@if (Auth::guest())
					<li><a href="/register">Register</a>
				@else
					<li class="active"><a href="/daftar-beasiswa">Daftar Beasiswa</a>
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
       <div class="main">
				 <div class="approach" id="app">
					 <div class="container">
							<div class="gallery-head text-center">
							 <h3>Isi Data</h3>
							 <span> </span>
						 </div>
             <div class="contact-form_grid">
                <!-- <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p> -->
             <form method="post" action="contact-post.html">
	            <input type="text" class="textbox" name="txtNama" value="Nama Lengkap" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama Lengkap';}">
							 <!-- nama lengkap, email, password, dan re-password -->
				<input type="text" class="textbox" name="txtTTL" value="Tempat, Tgl-lahir" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Temapt, Tgl-lahir';}">
				<input type="text" class="textbox" name="txtAlamat" value="Alamat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Alamat';}">
				<input type="text" class="textbox" name="txtJenisKelamin" value="Jenis Kelamin" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Jenis Kelamin';}">
				<input type="text" class="textbox" name="txtAsalSekolah" value="Asal Sekolah" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Asal Sekolah';}">
				<input type="text" class="textbox" name="txtNISN" value="NISN" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'NISN';}">
				<input type="text" class="textbox" name="txtTahunLulus" value="Tahun Lulus" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tahun Lulus';}">
				<input <input type="text" class="textbox" name="txtEmail" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				<input type="text" class="textbox" name="txtNoTelp" value="No Telp" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'No Telp';}">
				<input type="text" class="textbox" name="txtDocument" value="Document" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Document';}">
				<input type="text" class="textbox" name="txtBuatPassword" value="Buat Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buat Password';}">
							 <input type="submit" value="Daftar Sekarang">
             </form>
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
