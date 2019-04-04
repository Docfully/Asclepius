<?php session_start(); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if (!isset($_SESSION['user_id'])) {
		redirect_to("patient_login.php");
	}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content=
"width=device-width, initial-scale=1" />
<title>
Docfully Medical
</title>
<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />
<link href="patient_questionaire.php" />
<link href="patient_healthscore.php" />
<!-- <link href="vitalsigns.html" /> --> 
<link href="videoConf.php" />
</head>
<body background=
"Backgrounds_Interweaving_gray_and_blue_stripes_095348_.jpg">
<!---Start Wrapper -->
<div id="wrapper">
<!---Start Header -->
<header>
<div id="callout">
<h2><font color="palegreen" size="4">&#9742 773.220.7015 </font></h2>
</div>
<div id="logo">
<a href="index.html"><img src="images/imageedit_52_9268637590.jpg" width="180"></a>
</div>
</header>
<!---End Header -->
<div class="clearfix"></div>
<!--- Start Nav & Slider -->
<div id="banner-wrapper style=">
<!---Start Nav -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/main.js"></script>
<div class="nav-wrap">
<nav class="navigation">
<div class="nav" nav-menu-style="yoga">
<ul class="nav-menu">
<li><a href="index.html"><font color="#483D8B">Home</font></a></li>
<li><a href="patient_questionnaire.php"><font color="#483D8B">Questionnaire</font></a></li>
<li><a href="patient_healthscore.php"><font color="#483D8B">Health Score</font></a></li>
<!-- <li><a href="vitalsigns.html"><font color="#483D8B">Vital Signs</font></a></li> -->
<li><a href="videoConf.php"><font color="#483D8B">Video Conference</font></a></li>
<li><a href="logout.php"><font color="#483D8B">Logout</font></a></li>
</ul>
</div>
</nav>
</div>
<!---End Nav -->
</div>
</div>
</body>
</html>
