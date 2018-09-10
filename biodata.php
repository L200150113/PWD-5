<?php
include('koneksi.php');

$biodata = "select * from data_user where username = '".$_SESSION['username']."'";
$hasil = mysql_fetch_array(mysql_query($biodata));
?>

<html>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Biodata</title>
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
				<div class="col-md-6 animate-box">
					<h3 style="font-size: 40px; font-style: bold;">DATA DIRI</h3><br>
					<table border="0" style="font-size: 20px">
						<tr style="border-spacing: 5em">
							<td style="padding:15px 0px" width="20%">Nama Lengkap</td>
							<td align="center" width="10%">:</td>
							<td width="30%"><?php echo "$hasil[nama_lengkap]"; ?></td>
						</tr>
						<tr>
							<td style="padding:15px 0px" width="20%">NIM</td>
							<td align="center" width="10%">:</td>
							<td width="30%"><?php echo "$hasil[nim]"; ?></td>
						</tr>
						<tr>
							<td style="padding:15px 0px" width="20%">Username</td>
							<td align="center" width="10%">:</td>
							<td width="30%"><?php echo "$hasil[username]"; ?></td>
						</tr>
						<tr>
							<td style="padding:15px 0px" width="20%">Jenis Kelamin</td>
							<td align="center" width="10%">:</td>
							<td width="30%"><?php echo "$hasil[gender]"; ?></td>
						</tr>
					</table>
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<?php
						$gambar = $_SESSION['username'];
						?>
						<img src="images/<?php echo($gambar) ?>.jpg" width='200px' style='margin-bottom: 40px; border-radius: 10px;'>
						<ul>
							<li class="address"><?php echo "$hasil[asal]"; ?></li>
							<li class="email"><?php echo "$hasil[email]"; ?></li>
						</ul>
					</div>

				</div>
			</div>
			
		</div>
	</div>

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

