 <?php
 	$hostname = "localhost";
 	$username = "root";
 	$password = "qfD}H55j4$^sTz6";
 	//1. Create a database connection - %dbhandle is a handle
	$dbhandle = mysqli_connect($hostname, $username, $password) or die("Unable to connect to MySQL");

	//2. Select a database to use
	$db_select = mysqli_select_db($dbhandle, "docfullylive")
	or die("Could not select examples");
 ?>
