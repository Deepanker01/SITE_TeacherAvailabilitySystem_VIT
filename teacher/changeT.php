<?php
session_start();
@$name = $_SESSION['username'];
if(!isset($name))
{
echo " LOGIN AGAIN";
}
require "conn.php";
$q1 = mysql_query("select name from teacher where username= '$name'");
while($row2 = mysql_fetch_array($q1))
$name2 = $row2['name'];
if(isset($_POST['cpass']) && isset($_POST['npass']) && isset($_POST['npass2']) )
{
@$cpass=(md5($_POST['cpass']));
@$npass=(md5($_POST['npass']));
@$npass2=(md5($_POST['npass2']));


$query= "SELECT password from teacher where username= '$name'";
$result=mysql_query($query);

$row = mysql_fetch_array($result);
	$new1  = $row['password'];
if($cpass == $new1)
{
if( $npass == $npass2)
{
$sql = "UPDATE teacher set password='$npass' where username='$name'";

$res = mysql_query($sql);
if($res)
	$msg = " Password Changed";
}
else
$msg= " Passwords Don't Match";

}
else
$msg = " INVALID PASSWORD";
}
?>
<html>
    <head>
        <title>SITE TEACHERS</title>

<!DOCTYPE HTML>
<!--
-->
<html>
	<head>
		<link href="form/style.css" rel="stylesheet" type="text/css" media="screen" />

		<title>Teacher Availabilty</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href="#" id="logo">SITE VIT</a></h1>
							<nav id="nav">
								<a href="index2T.php">Homepage</a>
								<a href="availableT.php" >Availability</a>
								<a href="changeT.php" class="current-page-item">Change Password</a>
								<a href="dash.php" target="_BLANK">Dashboard</a>
								<a href="LogoutT.php">Logout</a>
								
							</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
		<div id="main">
			<div class="container">
				<div class="row main-row">
					<div class="4u">
						
						<section class="left-content">
	<br>

						
						<section>
<h2 align="center"> Welcome <?php echo $name2; ?></h2>

							<h2 align="center">Change Password</h2>
							<div id="contact">
	<h1>Fill up the details</h1>
	<br><br>


<form method="POST" action = "changeT.php">
		<fieldset>

<p id="p1">Current Password: </p>	
<input type = "password" placeholder = " Enter Your Current Password" name="cpass" >
<br>
<p id="p1">New Password: </p>	
<input type = "password" placeholder = " Enter Your New Password"  name="npass" >
<br>
<p id="p1">Confirm New Password: </p>	
<input type = "password" placeholder = " Enter Your New Password Again"  name="npass2" >

<input type="submit" value="submit" style="margin-left: 100px;" id="chbut"/>
</form>
<?php
if(isset($msg))
echo "<p style='margin-left:150px;'>".$msg."</p>";
?>

		</fieldset>
	</form>
</div>
						</section>
					
					</div>

					<div class="4u">

						<section style="margin-left: 250px;">
							<h2>Who are We?</h2>
							<ul class="small-image-list">
								<li>
									<a href="#"><img src="images/pic2.jpg" alt="" class="left" /></a>
									<h4>Sankaran V</h4>
									<p>Dean. SITE</p>
								</li>
								<li>
									<a href="#"><img src="images/pic1.jpg" alt="" class="left" /></a>
									<h4>Gitanjali J</h4>
									<p>Faculty In-charge</p>
								</li>
								<li>
									<a href="#"><img src="images/r1.jpg" alt="" class="left" /></a>
									<h4>Ranichandra C</h4>
									<p>Program Chair</p>
								</li>

								</ul>
						</section>
					
					</div>
				</div>
			</div>
		</div>
		<div id="footer-wrapper">
			<div class="container">
				<div class="row">
		<!-- 			<div class="8u">
						
						<section>
							<h2>How about a truckload of links?</h2>
							<div>
								<div class="row">
									<div class="3u">
										<ul class="link-list">
											<li><a href="#">Sed neque nisi consequat</a></li>
											<li><a href="#">Dapibus sed mattis blandit</a></li>
											<li><a href="#">Quis accumsan lorem</a></li>
											<li><a href="#">Suspendisse varius ipsum</a></li>
											<li><a href="#">Eget et amet consequat</a></li>
										</ul>
									</div>
									<div class="3u">
										<ul class="link-list">
											<li><a href="#">Quis accumsan lorem</a></li>
											<li><a href="#">Sed neque nisi consequat</a></li>
											<li><a href="#">Eget et amet consequat</a></li>
											<li><a href="#">Dapibus sed mattis blandit</a></li>
											<li><a href="#">Vitae magna sed dolore</a></li>
										</ul>
									</div>
									<div class="3u">
										<ul class="link-list">
											<li><a href="#">Sed neque nisi consequat</a></li>
											<li><a href="#">Dapibus sed mattis blandit</a></li>
											<li><a href="#">Quis accumsan lorem</a></li>
											<li><a href="#">Suspendisse varius ipsum</a></li>
											<li><a href="#">Eget et amet consequat</a></li>
										</ul>
									</div>
									<div class="3u">
										<ul class="link-list">
											<li><a href="#">Quis accumsan lorem</a></li>
											<li><a href="#">Sed neque nisi consequat</a></li>
											<li><a href="#">Eget et amet consequat</a></li>
											<li><a href="#">Dapibus sed mattis blandit</a></li>
											<li><a href="#">Vitae magna sed dolore</a></li>
										</ul>
									</div>
								</div>
							</div>
						</section>
					
					</div>
		 -->			<div class="4u">

						<section>
							<h2>Developers</h2>
							<p>The System is developed by Deepanker Saxena and Aman Pareek for SITE VIT.</p>
							<footer class="controls">
								<a href="developer/index.html" class="button">Oh, please continue ....</a>
							</footer>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="12u">

		<div id="copyright">
							&copy; SITE-VIT.
						</div>

					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>