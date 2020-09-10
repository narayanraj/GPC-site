<?php
 
define('DB_HOST', 'localhost');
define('DB_NAME', 'nitin_students');
define('DB_USER','nitin');
define('DB_PASSWORD','nitin25');
$abc = 0;

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


$rollno = $_POST['rollno'];
$regno = $_POST['regno'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$village = $_POST['village'];
$taluka = $_POST['taluka'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pmobile = $_POST['pmobile'];
$educ = $_POST['edu'];


	$query = "UPDATE personal set FNAME='$fname',
	                MNAME='$mname',LNAME='$lname',GENDER='$gender',
					DOB='$dob',VILLAGE='$village',TALUKA='$taluka',
					EMAIL='$email',MOBILE='$mobile',PARENT_MOBILE='$pmobile',
					EDUCATION='$educ'
					where ROLLNO='$rollno'";
	$result1 = mysql_query($query);
	 if ($result1)
			{  print "   Successfully updated record for ROLLNO - $rollno..... ";
			  $abc = 1;
			  }
		else
		{ 
		   print "  RETRY,  Duplicate ROLLNO /  BOD format wrong ..........";
			}
			mysql_close($con);



?>
		