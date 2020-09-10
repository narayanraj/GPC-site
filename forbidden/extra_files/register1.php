<?php
 
define('DB_HOST', 'localhost');
define('DB_NAME', 'nitin_students');
define('DB_USER','nitin');
define('DB_PASSWORD','nitin25');
$abc = 0;

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

if (isset($_FILES['image1']) && $_FILES['image1']['size'] > 0)
{
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
$edu = $_POST['edu'];

$tmpName = $_FILES['image1']['tmp_name'];
// Read the file
$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);

	$query = "INSERT INTO personal(ROLLNO,REG_NO,FNAME,MNAME,LNAME,GENDER,DOB,VILLAGE,TALUKA,EMAIL,MOBILE,PARENT_MOBILE,EDUCATION,PHOTO)VALUES('$rollno','$regno','$fname','$mname','$lname','$gender','$dob','$village','$taluka','$email','$mobile','$pmobile','$edu','$data')";
	$result1 = mysql_query($query);
	 if ($result1)
			{  print "   Successfully added new PERSON record..... ";
			  $abc = 1;
			  }
		else
		{ 
		   print "  RETRY,  Duplicate ROLLNO /  BOD format wrong ..........";
			}
			mysql_close($con);
}
	else
		print "  RETRY,  Photo selected should be 1kb - 80kb size..........";

/*
		$username = "nitin";
		$password = "nitin25";
		$host = "localhost";
		$database = "nitin_students";

		$link = mysql_connect($host, $username, $password);
		if (!$link) {
		die('Could not connect: ' . mysql_error());
}

		mysql_select_db ($database);

$rollno = $_POST['rollno'];
if (isset($_FILES['image1']) && $_FILES['image1']['size'] > 0) 
{

$tmpName = $_FILES['image1']['tmp_name'];
// Read the file
$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);
fclose($fp);

$query = "UPDATE `personal` SET `PHOTO`= '$data' WHERE `ROLLNO`= '$rollno' ";
$results = mysql_query($query, $link);

mysql_close($link);

print "    Thank you, PHOTO file has been uploaded.......";
}
else 
print "    No IMAGE selected/uploaded..........";

*/


/*
if (isset($_FILES['image1']) && $_FILES['image1']['size'] > 0)    */


if($abc == 1)
{
$username = "nitin";
		$password = "nitin25";
		$host = "localhost";
		$database = "nitin_students";

		$link = mysql_connect($host, $username, $password);
		if (!$link) {
		die('Could not connect: ' . mysql_error());
			}

		mysql_select_db ($database);


$rollno = $_POST['rollno'];		
$class = $_POST['class'];
$batch = $_POST['batch'];
/*  $sem = $_POST['sem'];  */
$dept = $_POST['dept'];
$status = "Active";
$sem_id = "E1415";           /* Semester ID hard-coded-------------------*/

if($_POST['dept'] == "COMP")
{ if($_POST['class'] == "FY")
	$class = "FYCO";
  if($_POST['class'] == "SY")
	$class = "SYCO";
  if($_POST['class'] == "TY")
	$class = "TYCO";
	}
if($_POST['dept'] == "ENE")
{ if($_POST['class'] == "FY")
	$class = "FYEE";
  if($_POST['class'] == "SY")
	$class = "SYEE";
  if($_POST['class'] == "TY")
	$class = "TYEE";
	}
if($_POST['dept'] == "MECH")
{ if($_POST['class'] == "FY")
	$class = "FYME";
  if($_POST['class'] == "SY")
	$class = "SYME";
  if($_POST['class'] == "TY")
	$class = "TYME";
	}
	
  if($_POST['class'] == "FY")      /* Semester values hard-coded-------------------*/
	$sem = "2";
  if($_POST['class'] == "SY")
	$sem = "4";
  if($_POST['class'] == "TY")
	$sem = "6";
		

$query = "INSERT INTO stud_sem(ROLLNO,SEM_ID,DEPT,CLASS,SEM,BATCH,STATUS)VALUES('$rollno','$sem_id','$dept','$class','$sem','$batch','$status')";
$results = mysql_query($query, $link);

mysql_close($link);

 Echo "<html>";
 Echo "<title>Registration Form Status</title>";

echo "  <body> Active SEMESTER details added successfully.........  ";
echo "  <BR /> <h3>Student Registered successfully.</h3> ";
echo "<br /><br /><a href = 'reg.html'> Back to New Registration </a> ";
echo "<br /><br /><a href = 'index.html'> Home Page </a> ";
echo "  </body>";
 Echo "</html>";
}
else 
echo "      Recheck your Data provided";


?>
<!--   <a href="reg.html">

$query1 = "INSERT INTO tbl_images ";
	$query1 .= "(ROLLNO,PICTURE) VALUES ('$rollno','$data')";
	$results = mysql_query($query1, $link);

if($result1)
	{   print "successfully added new record.";
	    if (results)
			print "Thank you, your file has been uploaded.";
		else 
			print "No image selected/uploaded";
	}
	else
		print "No record added into database. Sorry.";    -->