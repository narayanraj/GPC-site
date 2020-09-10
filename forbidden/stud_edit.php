<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Administrator -Computer Dept</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="college-menu.css3prj_files/css3menu1/menu-style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="stylesheet" type="text/css" href="view.css" media="all">  
<script type="text/javascript" src="forbidden/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="forbidden/js/jquery.cycle.all.min.js"></script>

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
<form id="form_stud_update" enctype="multipart/form-data" method="post" action="stud_updated.php" >

<table border='1'>
<thead><tr><th colspan="2" align="center"> Update Student's Information</th></tr></thead>
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

//echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows['PHOTO'] ).'" align="right" alt="icon" width="150" height="110" border="1"/>';
//$photo = $rows['PHOTO'];

endwhile;

//echo "$lname $fname $mname";
?>

<tr><td>RollNo</td>
<td><input type="text" id="rollno" name= "rollno" class="element text medium" pattern=".{6,6}" maxlength="6" 
           value="<?php echo $rollno; ?>"  readonly required  onkeypress="return isRollnoKey(event)"/></td></tr>

<tr class='alt'><td>RegNo</td>
<td><input type="text" id="regno" name="regno" class="element text medium" pattern=".{9,9}" maxlength="9" 
           value="<?php echo $regnum; ?>" required readonly type="text" onkeypress="return isNumberKey(event)"/> </td></tr>

<tr><td>First Name</td>
<td><input type="text" id="fname" name= "fname" class="element text medium" maxlength="13" size="15" 
           value="<?php echo $fname; ?>" onkeypress="return isAlphaKey(event)" required/></td> </tr>

<tr class='alt'><td>Middle Name</td>
<td><input id="mname" name= "mname" class="element text medium" maxlength="13" size="15" 
           value="<?php echo $mname; ?>" onkeypress="return isAlphaKey(event)" required/></td></tr>

<tr><td>Last Name</td>
<td><input id="lname" name= "lname" class="element text medium" maxlength="13" size="15" 
           value="<?php echo $lname; ?>" onkeypress="return isAlphaKey(event)" required/></td></tr>
		   
<tr class='alt'><td>Gender</td>
<td><input class="element select medium" id="gender" name="gender" value="<?php echo $gender; ?>" required> 
		<!----	<option value="" ></option>
			<option value="Male" >Male</option>
			<option value="Female" >Female</option>
					</select></td> ----> </tr>

<tr><td>Birthday (yyyy/mm/dd)</td>
<td><input id="dob" name= "dob" class="element text medium" maxlength="10" size="15" 
           value="<?php echo $dob; ?>" onkeypress="return isDateKey(event)" required/></td></tr>

<tr class='alt'><td>Village</td>
<td><input id="village" name="village" class="element text medium" type="text" maxlength="15" 
           value="<?php echo $village; ?>" onkeypress="return isAlphaKey(event)" required/> </td></tr>

<tr><td>Taluka</td>
<td><input class="element text medium " id="taluka" name="taluka" required value="<?php echo $taluka; ?>"> 
		<!----	<option value="" ></option>
			<option value="Margao" >Margao</option>			<option value="Ponda" >Ponda</option>			<option value="Curchorem" >Curchorem</option>
			<option value="Panjim" >Panjim</option>			<option value="Canacona" >Canacona</option>			<option value="Quepem" >Quepem</option>
			<option value="Sanguem" >Sanguem</option>			<option value="Mapusa" >Mapusa</option>	 <option value="Bicholim" >Bicholim</option>	
			<option value="Vasco" >Vasco</option>		</select> ---->  </td>  </tr>

<tr class='alt'><td>Mobile</td>
<td><input type="text" id="mobile" name="mobile" class="element text medium" pattern=".{10,10}" maxlength="10" 
           value="<?php echo $mobile; ?>" required type="text" onkeypress="return isNumberKey(event)"/> </td></tr>
		   
<tr><td>Parent-Mobile</td>
<td><input type="text" id="pmobile" name="pmobile" class="element text medium" pattern=".{10,10}" maxlength="10" 
           value="<?php echo $pmobile; ?>" required type="text" onkeypress="return isNumberKey(event)"/></td></tr>

<tr class='alt'><td>Email</td>
<td><input id="email" name="email" class="element text large" type="email" maxlength="35" value="<?php echo $email; ?>" required/> </td></tr>

<tr><td>Education</td>
<td><input class="element text medium " id="edu" name="edu" required value="<?php echo $educ; ?>"> 
	<!----		<option value="" ></option>
			<option value="SSC" >SSC</option>		<option value="HSSC" >HSSC </option>	<option value="HSSC-Sci" >HSSC-Sci</option>			
			<option value="HSSC-voc" >HSSC-voc</option>      							</select> ---->  </td></tr>

<tr>
<td colspan="2" align="center">
<input id="submit" class="button_text" type="submit" name="submit" value="    Update Student's Record     " /></td>
</tbody></table></div>





<?php } ?>



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
