<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Administrator -Computer Dept</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="college-menu.css3prj_files/css3menu1/menu-style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="stylesheet" type="text/css" href="view.css" media="all">  
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>

</head>
<body oncontextmenu="return false;">
<div class="main" >
  <div class="main_resize" >
    <div class="header" >
		<div style="float:left;"><img src="images/comp_eng_logo.jpg" alt="icon" width="145" height="145" border="0" /></a></div>
      <div class="logo" ><img src="images/gpc_full_name.jpg" alt="icon" width="88%" height="149" border="0" /></div>
      <div style="float:relative;"><img src="images/gpc_logo1.jpg" alt="icon" width="145" height="145" border="0" /></a></div>
	  <div class="clr"></div>
	  
      <div class="">
		<ul id="css3menu1" class="topmenu">
			<li class="topfirst"><a href="reg11.php" class="pressed" style="height:15px;line-height:15px;">Register New</a></li>
			<li class="topfirst"><a href="students11.php" style="height:15px;line-height:15px;">Students List</a></li>
			<li class="topmenu"><a href="result11.php" style="height:15px;line-height:15px;">View Result</a></li>
			<li class="topmenu"><a href="report11.php" style="height:15px;line-height:15px;">View Report</a></li>
			
		<!----
			<li class="topmenu"><a style="height:15px;line-height:15px;"><span>Faculty Corner</span></a>
				<ul><li class="subfirst"><a href="rickey.html">Rickey Nunes</a></li>
					<li><a href="sweta.html">Sweta Naik</a></li>
				
				</ul></li>
				 <li class="topmenu"><a href="22.html" style="height:15px;line-height:15px;">Result Dept</a></li>      ---->
		</ul>
      </div>
      <div class="click">
        <p></p>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  
	<div style="float: center; " align="center">   
	<!--  width: 650px; height: 760px;   above div attribute -->
	
	
	<div class="bg"></div>   
		

<div class="main_left_menu">
      <div class="clr"></div>
      <div class="right_text">
      </div>
      <div class="clr"></div>
	  	  <ul>
            <li class="selected">Computer Lab-1 (Main)</li>
            <li class="selected">Computer Lab-2</li>
			<li class="selected">Computer Hardware Lab (3)</li>
            <li class="selected">Library</li>
             <li class="selected">Class Rooms</li>
			<li class="selected">Campus</li>			
        </ul>
		
	  
	  </div>
		
<div class="main_right_space">

<div class='datagrid'>
<table border='1'>
<thead><tr><th colspan="2" align="center"> View Student's Information</th></tr></thead>
<tbody>


<?php

$servername = "localhost";
$username = "nitin";
$password = "nitin25";
$dbname = "nitin_students";
$rollno = $_POST['rollno'];


//connect to the server
$connect = mysql_connect("$servername","$username","$password");
mysql_select_db("$dbname");                                                                     //connect to the database
$query = mysql_query("SELECT REG_NO,ROLLNO,FNAME,MNAME,LNAME,PHOTO,GENDER,DOB,VILLAGE,TALUKA,MOBILE,PARENT_MOBILE,EMAIL,
                       EDUCATION FROM PERSONAL WHERE ROLLNO='$rollno'");    //query the database

if( mysql_num_rows($query) == 0) 
{ 
echo "<p><h2>No Record found for Reg.No - $regno</h2>";
echo "<p><h2>Student doesnot exist with this Registration number.....Please check.</h2></p>";
}
else
{

WHILE($rows = mysql_fetch_array($query)):                                     //fetch the results / convert results into an array

$regnum = $rows['REG_NO'];
$rollno = $rows['ROLLNO'];
$fname = $rows['FNAME'];
$mname = $rows['MNAME'];
$lname = $rows['LNAME'];
$gender = $rows['GENDER'];
$dob = $rows['DOB'];
$village = $rows['VILLAGE'];
$taluka = $rows['TALUKA'];
$mobile = $rows['MOBILE'];
$pmobile = $rows['PARENT_MOBILE'];
$email = $rows['EMAIL'];
$educ = $rows['EDUCATION'];


//$photo = $rows['PHOTO'];

endwhile;

//echo "$lname $fname $mname";

echo "<tr><td>RollNo</td><td>$rollno</td></tr>";
echo "<tr class='alt'><td>RegNo</td><td>$regnum</td></tr><tr><td>First Name</td><td>$fname</td></tr>";
echo "<tr class='alt'><td>Middle Name</td><td>$mname</td></tr><tr><td>Last Name</td><td>$lname</td></tr>";
echo "<tr class='alt'><td>Date of Birth</td><td>$dob</td></tr><tr><td>Gender</td><td>$gender</td></tr>";
echo "<tr class='alt'><td>Village</td><td>$village</td></tr><tr><td>Taluka</td><td>$taluka</td></tr><tr class='alt'><td>Mobile</td><td>$mobile</td></tr>";
echo "<tr><td>Parent-Mobile</td><td>$pmobile</td></tr><tr class='alt'><td>Email</td><td>$email</td></tr><tr><td>Education</td><td>$educ</td></tr>";
echo "</tbody></table></div>";
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows['PHOTO'] ).'" align="right" alt="icon" width="150" height="110" border="1"/>';

}

?>

<P><P><p><P><P><p>
</div>

	<img id="bottom" src="bottom.png" alt="">
	
	</div>
	
		
	
    <div class="clr"></div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="leftt">&#169;  Intranet website :- Computer Engg Dept. (Best viewed in Firefox) <!--<a href="#"> Home</a> | <a href="#">Contact</a> | <a href="#">RSS </a>--></p>
      <p class="right">Developed by:<a href="#">Lect. Narayan Rajadhyax.</a></p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>


</body>
</html>
