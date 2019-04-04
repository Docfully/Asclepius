<?php session_start(); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if (!isset($_SESSION['user_id'])) {
		redirect_to("login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Health Score</title>
	<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/nav.css" rel="stylesheet" type="text/css">
	<link href="patient_questionaire.php">
	<link href="patint_healthscore.php">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<link href="css/default.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	               /*<![CDATA[*/
	               fieldset {
	               background-color:#5DADE2;
	               border:px solid #512E5F;
	               margin-bottom:2px;
	               width:700px;
	               margin:auto;
	               }
	</style>
</head>
<body background="Backgrounds_Interweaving_gray_and_blue_stripes_095348_.jpg">
	<!---Start Wrapper -->
	<div id="wrapper">
		<!---Start Header -->
		<header>
			<div id="callout">
				<h2><font color="palegreen" size="4">&#9742 773.220.7015</font></h2>
			</div>
			<div id="logo">
				<a href="index.html"><img src="images/imageedit_52_9268637590.jpg" width="180"></a>
			</div>
		</header><!---End Header -->
		<div class="clearfix"></div><!--- Start Nav & Slider -->
		<div id="banner-wrapper style=">
			<!---Start Nav -->
			<script src="js/jquery-1.11.2.min.js">
			</script> 
			<script src="js/main.js">
			</script>
			<div class="nav-wrap">
				<nav class="navigation">
					<div class="nav">
						<ul class="nav-menu">
				                       
							<li>
								<a href="patient.php"><font color="#483D8B">Main</font></a>
							</li>
							
							<li>
								<a href="patient_questionnaire.php"><font color="#483D8B">Questionnaire</font></a>
							</li>

							<li>
								<a href="videoConf.php"><font color="#483D8B">Video Conference</font></a>
							</li>
							<li><a href="logout.php"><font color="#483D8B">Logout</font></a></li>
						</ul>
					</div>
				</nav>
			</div>
			<fieldset>
				<h1><font color="purple">Health Score Form</font></h1>
				<form action="" class="register">
					<fieldset class="row1">
						<p><font color="palegreen"><label>Name of Patient</label> <input type="text"> <label>Age</label> <input type="text"></font></p>
						<fieldset class="row2">
							<p><font color="palegreen"><label>How many hours per night do you sleep?</label> <input class="long" type="text"></font></p>
							<p><font color="palegreen"><label>Glasses of water per day?</label> <input maxlength="10" type="text"></font></p>
							<p><font color="palegreen"><label>How have you been feeling over the past week?</label> <select>
								<option>
								</option>
								<option value="1">
									Happy
								</option>
								<option value="1">
									Satisfied
								</option>
								<option value="1">
									Ambivalent
								</option>
								<option>
								</option>
								<option value="1">
									Uneasy
								</option>
								<option value="1">
									Depressed
								</option>
								<option value="1">
									Fatigued
								</option>
							</select></font></p>
							<p><font color="palegreen"><font color="palegreen"><label>Do you smoke?</label> <input type="radio" value="radio"> <label class="answer">Yes</label> <input type="radio" value="radio"> <label class="answer">No</label></font></font></p>
							<p><font color="palegreen"><label>Cigars per week</label> <select>
								<option value="0">
								</option>
								<option value="1">
									01-05
								</option>
								<option value="1">
									05-10
								</option>
								<option value="1">
									10-15
								</option>
								<option value="1">
									15-20
								</option>
								<option value="1">
									20-30
								</option>
							</select></font></p>
							<p><font color="palegreen"><label>Hours of exercise per week?</label> <select>
								<option value="0">
								</option>
								<option value="1">
									01-05
								</option>
								<option value="1">
									05-10
								</option>
								<option value="1">
									10-15
								</option>
								<option value="1">
									15-20
								</option>
								<option value="1">
									20-30
								</option>
							</select></font></p>
							<p><font color="palegreen"><label>Alcoholic drinks per week?</label> <select>
								<option value="0">
								</option>
								<option value="1">
									01-05
								</option>
								<option value="1">
									05-10
								</option>
								<option value="1">
									10-15
								</option>
								<option value="1">
									15-20
								</option>
								<option value="1">
									20-30
								</option>
							</select></font></p>
							<p><font color="palegreen"><label>Servings of meat per week?</label> <select>
								<option value="0">
								</option>
								<option value="1">
									01-05
								</option>
								<option value="1">
									05-10
								</option>
								<option value="1">
									10-15
								</option>
								<option value="1">
									15-20
								</option>
								<option value="1">
									20-30
								</option>
							</select></font></p>
							<p><font color="palegreen"><label>Servings of refined sugar</label> <select>
								<option value="0">
								</option>
								<option value="1">
									01-05
								</option>
								<option value="1">
									05-10
								</option>
								<option value="1">
									10-15
								</option>
								<option value="1">
									15-20
								</option>
								<option value="1">
									20-30
								</option>
							</select></font></p>
						</fieldset>
					</fieldset>
				</form>
			</fieldset>
		</div>
		<div style="text-align:center">
			<font color="palegreen"><button class="button"><font color="palegreen"><font color="palegreen"><font color="palegreen"><font color="palegreen"><font color="palegreen"><font color="black">Submit &raquo;</font></font></font></font></font></font></button></font>
		</div>
	</div>
	<fieldset></fieldset>
</body>
</html>