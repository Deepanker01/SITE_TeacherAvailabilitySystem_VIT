<?php
session_start();
@$name = $_SESSION['reg'];
if(!isset($name))
{
echo " LOGIN AGAIN";
}

require "conn.php";
if(isset($_POST['cpass']) && isset($_POST['npass']) && isset($_POST['npass2']) )
{
@$cpass=(md5($_POST['cpass']));
@$npass=(md5($_POST['npass']));
@$npass2=(md5($_POST['npass2']));

$query= "SELECT password from student where reg= '$name'";
$result=mysql_query($query);

$row = mysql_fetch_array($result);
	$new1  = $row['password'];
if($cpass == $new1)
{
if( $npass == $npass2)
{
$sql = "UPDATE student set password='$npass' where reg='$name'";
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
	<script type="text/javascript">
	function validate()
	{
		var a = document.forms["form"]["cpass"].value;
		var b = document.forms["form"]["npass"].value;
		var c = document.forms["form"]["npass2"].value;

		if(a=="" || b=="" || c ="")
		{
			alert("Kindly fill all the details before submitting");
			return false;
		}


	}
	</script>
	<body>
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href="#" id="logo">SITE VIT</a></h1>
							<nav id="nav">
								<a href="index2.php">Homepage</a>
								<a href="available.php" >Availability</a>
								<a href="change.php" class="current-page-item">Change Password</a>
																<a href="Logout.php">Logout</a>
								
							</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
		<div id="main">
			<div class="container">
				<div class="row main-row">
					<div class="8u">
						
						<section class="left-content">
	<br>
<h2 align="center"> Welcome <?php echo $name; ?></h2>

<form method="POST" action = "change.php" name="form" onsubmit = "return validate()";>
<label for="password">Current Password: </label>	
<input type = "password" placeholder = " Enter Your Current Password"  name="cpass" id="cpass" style="margin-left:50px" required ="true">
<br>
<label for="password1">New Password: </label>	
<input type = "password" placeholder = " Enter Your New Password"  name="npass"  id = "npass" style="margin-left:70px" required =" true">
<br>
<label for="password2">Re-type New Password: </label>	
<input type = "password" placeholder = " Enter Your New Password Again"  name="npass2" id="npass2" style="margin-left:10px" required = "true">

<input type="submit" value="submit" style="margin-left: 100px;" />
</form>
<?php
if(isset($msg))
echo "<p style='margin-left:150px;'>".$msg."</p>";
?>
<br>
<div id="txtHint" ><b><p style="margin-left: 10px;"></p></b></div>

<br>


													</section>
					
					</div>
					<div class="4u">

						<section>
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
									<h4>Ranichandra C.</h4>
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
							<p>The System is developed by Deepanker Saxena and Aman Pareek</p>
							<footer class="controls">
								<a href="developer/index.html" class="button">Oh, please continue ....</a>
							</footer>
						</section>

					</div>
				</div>
				<div class="row">
					<div class="12u">

						<div id="copyright">
							&copy; SITE VIT
						</div>

					</div>
				</div>
			</div>
		</div>
	<!-- ********************************************************* -->
	</body>
</html>