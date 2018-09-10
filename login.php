<!DOCTYPE html>
<html lang="en" >
<?php
include('koneksi.php');
?>
<head>
  <meta charset="UTF-8">
  <title>Login dulu ya</title>
  
      <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>WELCOME</h1>

		
		
		<form class="form" action="login.php" method="POST">
			<input type="text" placeholder="Username" name="username">
			<input type="password" placeholder="Password" name="password">
			<input type="submit" name="submit" value="Login" style="background-color: white; color: lightblue;">
		</form>
		
	</div>
	<?php
			$username = $_POST['username'];
			$password = $_POST['password'];
			$submit = $_POST['submit'];

			if($submit){
				$sql = "SELECT * FROM data_user WHERE username='$username' and password='$password';";
				$query = mysql_query($sql);
				$row = mysql_fetch_array($query);
				if($row['username']!=""){
					//berhasil login
					$_SESSION['username'] = $row['username'];
					?>
					<script type="text/javascript">
						document.location='services.html';
					</script>
				<?php
				}else{
					//gagal login
				?>
				<script type="text/javascript">
					alert('Gagal Login');
					document.location='index.html';
				</script>
				<?php
				}
			}
		?>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="index.js"></script>
</body>
</html>
