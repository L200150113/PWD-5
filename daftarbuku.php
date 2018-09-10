<?php
include('koneksi.php');
?>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pinjam Buku</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!--
		Oxygen by gettemplates.co
		Twitter: http://twitter.com/gettemplateco
		URL: http://gettemplates.co
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2 text-right hidden-xs menu-2" style="padding-right: 150px">
					<ul>
						<li class="btn-cta"><a href="services.html"><span>Kembali</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
					<h3 style="font-size: 30px">Daftar Buku</h3>
					<form method="POST" action="pinjam.php">
						<table border='1' width='90%'>
							<tr style="margin-top: 20px">
								<td align='center' width='10%' style="padding: 30px 0px"><b>ID Buku</b></td>
								<td align='center' width='40%'><b>Judul Buku</b></td>
								<td align='center' width='20%'><b>Nama Pengarang</b></td>
								<td align='center' width='15%'><b>Tahun Terbit</b></td>
								<td align='center' width='30%'><b>Pinjam</b></td>
							</tr>
						<?php
							$cari = "select * from data_buku";
							$hasil_cari = mysql_query($cari);
							while ($data = mysql_fetch_row($hasil_cari)){
							echo"
							<tr>
								<td width='10%' align='center' style='padding: 7px 0px'>$data[0]</td>
								<td width='40%' style='padding-left: 10px'>$data[1]</td>
								<td width='20%' style='padding-left: 10px'>$data[2]</td>
								<td width='15%' align='center'>$data[3]</td>
								<td width='30%' align='center'><input type='checkbox' name='pinjam[]' value='$data[0]'></td>
							</tr>
							";
							}
						?>
					</table>
					<br>
					<br>
				<div class="form-group">
					<input type="submit" value="Pinjam Buku" class="btn btn-primary" name="submit">
				</div>
			</form>
			</div>
		</div>
	</div>
	<hr>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row">
			</div>

			<div class="row copyright">
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

