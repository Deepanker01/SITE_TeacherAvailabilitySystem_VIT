<?php
	session_start();
$temp=0;
require "conn.php";
	if(isset($_POST['reg']) && isset($_POST['password']))
{
	
		$b = (strtoupper($_POST['reg']));
		$c = (md5($_POST['password']));
		$_SESSION['reg'] = $b;

		$sql2 = "SELECT status FROM student WHERE reg ='$b' ";
		$result2 = mysql_query($sql2);
		$row2 = mysql_fetch_array($result2);
		$status = $row2['status'];

		$sql = "SELECT reg FROM student WHERE password ='$c' ";
		$result = mysql_query($sql);
	
		while($row = mysql_fetch_array($result))
	{

		if($row['reg'] == $b)
		{
			if($status=="1")	
			echo "<script> window.location ='available.php'; </script>";
			elseif($status=="0")
			echo "<script> alert('Account not Activated yet. Kindly check Mail to Activate Account'); </script>";
		$temp=1;
		}
		else
		{
			$msg = "Check your credentials";
		}
	}
		if($temp==0)
			echo "<script> alert('Check your credentials'); </script>";


}
else
{
echo "";
}

?>	    
<!DOCTYPE HTML>
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
	<script>
	function validate()
	{
	var a=document.forms["myform"]["reg"].value;
	var b=document.forms["myform"]["password"].value;
	
	if(a==""||b=="")
	{
	
	alert("Please Fill all the Details.");
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
							<h1><a href="#" id="logo">SITE-vit</a></h1>
							<nav id="nav">
								<a href="index.php" class="current-page-item">Homepage</a>
								<a href="register.php">Register</a>
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
							<h2>Student Login</h2>
							<div id="contact">
	<h1>Fill up the details</h1>
	<br><br>
	<form action="index.php" method="POST" name="myform" onsubmit=" return validate();">
		<fieldset>
			<p id="p1">Registration no: </p>
			<input type="text" name="reg" id="reg" placeholder="Enter your registration number" required="true" />
			
			<p id="p1">Password: </p>
			<input type="password" id="password" name="password" placeholder="Enter your password"  required = "true"/>
			
			<input type="submit" value="submit"  id="submitme"/>
<br><br>			
<?php 
		if(isset($msg))
			echo "<br>" . "<p align='center' style='color:red; weight:bold'>".$msg."</p>" . "<br>";
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

</p>
							
						</section>

					</div>
					<div class="6u">
					
						
		
								
						</section>
					
					</div>
					<div class="4u">

						<section>
							<h2>Developers</h2>
							<p>The System is developed by Deepanker Saxena and Aman Pareek for SITE School.  </p>
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