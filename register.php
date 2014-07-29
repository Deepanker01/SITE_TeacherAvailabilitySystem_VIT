<?php

require 'core.php';
require 'conn.php';
if(!loggedin())
{

//echo 'register';
if(isset($_POST['name'])&& isset($_POST['reg']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['email']))
{


$reg=strtoupper($_POST['reg']);
$name=$_POST['name'];
$password=mysql_real_escape_string($_POST['password']);
$password_again=$_POST['password_again'];
$email=mysql_real_escape_string($_POST['email']);
$password_hash=md5($password);

if(!empty($reg)&&!empty($password)&&!empty($password_again)&&!empty($name))
{

if($password!=$password_again)
{
echo "<script> alert('Password do not Match ! Please enter same Passwords'); </script>";
}
else
{
$query2="SELECT email FROM student";
$query_run2=mysql_query($query2);

while($row4 = mysql_fetch_array($query_run2))
{
if($row4['email'] == $_POST['email'])
{
echo "<script>";
echo "alert('Email already exists')";
echo "</script>";
}
}

$query="SELECT reg FROM student WHERE reg='$reg'";
$query_run=mysql_query($query);
if(mysql_num_rows($query_run)==1)
{
echo "<script>";
echo "alert('Registration already exists')";
echo "</script>";
}
else
{
$password=md5($password); // encrypted password
$activation=md5($email.time()); // encrypted email+timestamp
$count=mysql_query("SELECT id FROM student WHERE email='$email'");
// email check
if(mysql_num_rows($count) < 1)
{
mysql_query("INSERT INTO `student`(`id`, `name`, `reg`, `password`,`email`,`status`,`activation`) VALUES ('','$name','$reg','$password_hash','$email','0','$activation')");
// sending email



$to=$email;
$subject="Email verification\r\n";
$body="Hi,  ".$name. "!  Please verify your email and get started using SITE Teacher Notification System Account.\r\n";
$body.="http://site.grayslab.com/activation.php?passkey=$activation";

mail($to,$subject,$body);
echo " <script> alert('Registration successful, please Activate through your Email within 24 Hours.') </script>"; 
echo " <script> window.location = 'index.php'; </script>"; 

}
else
{
$msg= 'The email is already taken, please try new.'; 
}

}

}

}
else
{
echo "<script>";
echo "alert('please do fill all details');";
echo "</script>";
}
}
else
{
echo "";
}
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

<link href="form/style1.css" rel="stylesheet" type="text/css" media="screen" />
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
								<a href="index.php" >Homepage</a>
								<a href="register.php" class="current-page-item">Register</a>
																<a href="contactus.php">Contact Us</a>

								
							
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
						</div>
					<div class="4u">
						
						<section>
							<h2>Student Registration</h2>
							<div id="contact">
	<h1>Fill up the details</h1>
	<br><br>
	<form action="register.php" method="POST">
		<fieldset>
			<label for="name">Name: </label>
			<input type="text" name="name" id="name" placeholder="Enter your full name" required="true"/>
			
			<label for="reg">Registration no: </label>
			<input type="text" name="reg"id="reg" placeholder="Enter your registration number"  required = "true"/>
			
			<label for="reg">Password: </label>
			<input type="password" id="password" name="password" placeholder="Enter your password"  required = "true"/>
			<label for="reg">Re-Password: </label>
			<input type="password" name="password_again" id="pass" placeholder="Enter your password"  required = "true"/>
			<label for="reg">Email: </label>
			<input type="email" name="email" placeholder = "Enter the Email" required = "true"/>
			
			<input type="submit" value="submit" />
		
<?php 
//		if(isset($msg))
			//echo "<br>" . "<p align='center' style='color:red; weight:bold'>".$msg."</p>" . "<br>";
	?>				

		</fieldset>
	</form>
</div>
						</section>
					
					</div>
					<div class="4u">
					
						<section id ="newsec">
							<h2>About this System</h2>
							<div>
								<div class="row">

                                   <p>This portal allows you to search for any particular faculty availabilty in his/her cabin at that time. Once you are registerd, you can search for any faculty through the forum to check her cabin availablity status rather than disturbing them on phone or taking the pain of going to the cabin to check .</p> 
			
			<br><br>
			<h2>Before You Start!</h2>
							<div>
								<div class="row">

                                   <p>The Availability of the faculty is solely dependent on the faculty to make his status visible to the students. Hence we aren't responsible in case of any wrong details. However if you have any issues or technical difficulties, feel free to contact.!</p> 
					
							</div>
							</div>
							</div>
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

	

							
						</section>

					</div>
					<div class="6u">
					
						
		
								
						</section>
					
					</div>
					<div class="4u">

						<section>
							<h2>Developers</h2>
							<p>The System is developed by Deepanker Saxena and Aman Pareek for SITE School.</p>
							<footer class="controls">
								<a href="#" class="button">Oh, please continue ....</a>
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
<?php

}
else if(loggedin())
{

echo 'you\'r already register and logged in !!';
}

?>
























