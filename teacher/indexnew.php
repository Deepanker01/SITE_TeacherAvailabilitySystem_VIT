<?php

session_start();
@$name = $_SESSION['username'];
if(!isset($name))
{

	echo "LOGIN AGAIN";
}

require "conn.php";

$q1 = mysql_query("SELECT name FROM teacher where username ='$name'");
while($r=mysql_fetch_array($q1))
{

$name2 = $r['name'];
	
}


if(isset($_POST['buttonnew']))
{
$query=mysql_query("SELECT * FROM teacher WHERE username='$name'");
while ($row = mysql_fetch_array($query))
    {$the_user_id = $row['av'];
}
if ($the_user_id=='0')
{
	$ar = "UPDATE teacher SET av=1 WHERE username ='$name' ";
}
else 
{
	$ar = "UPDATE teacher SET av=0 WHERE username ='$name' ";
}
mysql_query($ar);
}
$query=mysql_query("SELECT * FROM teacher WHERE username='$name'");
while ($row = mysql_fetch_array($query))
    $the_user_id = $row['av'];

if ($the_user_id=='0')
{
	$status = "Not Available in Cabin";
}
else 
	$status = "Available in Cabin";

?>


<!DOCTYPE HTML>
<!--
	Minimaxing 3.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Faculty Availability</title>
		<meta charset="utf-8" />

<link href="form/style.css" rel="stylesheet" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
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
							<h1><a href="#" id="logo">SITE-vit</a></h1>
							<nav id="nav">
								<a href="indexnew.php" class="current-page-item">Homepage</a>
								<a href="availablenew.php">Availaibility</a>
							<a href="changenew.php">Change Password</a>
								
							<a href="LogoutT.php">Logout</a>
							</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
<br> <br>
		<div id="main">
			<div class="container">
				<div class="row main-row">
					<div class="4u">
						</div>
					<div class="4u">
						
						<section>
			<h2>Change Availability Status</h2>


	
<h2 align="center"> Welcome <?php echo $name2; ?></h2>
	<form id="form" name="form1" action="indexnew.php" method="post">
<h2 align="center"> Click on the button to change your availability </h2>	
	<br>
	<br>
	<input type="submit"  id="chbut" class="button" name ="buttonnew" value="Change">
	</form>

	<h2 id="newone" style="margin-top: 40px; margin-left: -20px" > STATUS: <?php if($the_user_id==0) echo "<span style='color:red'>" ; echo $status ?></h2>


						</section>
					
					</div>
					<div class="4u">
					
						<section id ="newsec">
							<h2>About this System</h2>
							<div>
								<div class="row">

                                <p>This portal allows you to search for any particular faculty availabilty in his/her cabin at that time. Once you are registerd, you can search for any faculty through the forum to check her cabin availablity status rather than disturbing them on phone or taking the pain of going to the cabin to check .</p> 
								</div>
								
<img src = "site.jpg" id="siteapp" >								
							</div>
						</section>

					</div>
				</div>
				<div class="row main-row">
					<div class="6u">
					
						<section>
							<h2> About Site Vit</h2>
							<p>The School of Information Technology & Engineering (SITE) emphasizes the fields of Information Technology, Software Engineering and Computer Applications. The prime focus is to promote the effective integration of technology with state-of-the-art facilities in teaching and research activities. The curriculum of various programmes offered by the School focuses on problem solving, design, development and application of various emerging technologies. Research programmes aim to establish a strong component of practical engagement with enterprises. The School has a strong Industry-Institute relationship.


The School aims to provide the best Information and Communication Technology (ICT)-based solutions and value-added services. The School has 160 committed faculty members, apart from many visiting professors and distinguished professionals from the Industries and Academia. The placement record of the school is always impressive.

To develop core competencies and to provide more emphasis on research, the School has the following technical divisions: Networks and Information Security, Software Engineering, Operating Systems, Database Management Systems, Image Processing, Graphics and Vision, High-end Computing and Embedded Systems, Soft Computing, Enterprise & Cloud Computing and Information Systems..</p>
							
						</section>

					</div>
					<div class="6u">
					
						
		
								
						</section>
					
					</div>
					<div class="4u">

						<section>
							<h2>Developers</h2>
							<p>The Project is developed by Deepanker Saxena and Aman Pareek for SITE VIT.</p>
							<footer class="controls">
								<a href="developer/index.html" class="button">Oh, please continue ....</a>
							</footer>
						</section>

					</div>
				</div>
		<div id="banner-wrapper">
			<div class="container">
				<div class="row">
					<div class="12u">
					
						<div id="banner">
							<h2> </h2>
							<span></span>
						</div>
				
					</div>
				</div>
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