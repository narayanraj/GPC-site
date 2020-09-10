<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Intranet GPC-Computer Engg Dept</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="college-menu.css3prj_files/css3menu1/menu-style.css" type="text/css" /><style>._css3m{display:none}</style>
<link rel="stylesheet" type="text/css" href="view.css" media="all">  
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>

</head>
<body>
<div class="main" >
  <div class="main_resize" >
    <div class="header" >
		<div style="float:left;"><img src="images/comp_eng_logo.jpg" alt="icon" width="145" height="145" border="0" /></a></div>
      <div class="logo" ><img src="images/gpc_full_name.jpg" alt="icon" width="88%" height="149" border="0" /></div>
      <div style="float:relative;"><img src="images/gpc_logo1.jpg" alt="icon" width="145" height="145" border="0" /></a></div>
	  <div class="clr"></div>
	  
      <div class="">
		<ul id="css3menu1" class="topmenu">
			<li class="topfirst"><a href="index.php"  style="height:15px;line-height:15px;">Home</a></li>
			<li class="topmenu"><a href="about.php" style="height:15px;line-height:15px;">About Us</a></li>
			<li class="topmenu"><a href="faculty.php" style="height:15px;line-height:15px;">Faculty</a></li>
			<li class="topmenu"><a href="facility.php" style="height:15px;line-height:15px;"><span>Facilities</a></li>
			<li class="topmenu"><a href="scorner.php" style="height:15px;line-height:15px;">Students Corner</a></li>
			<li class="topmenu"><a style="height:15px;line-height:15px;"><span>Faculty Corner</span></a>
				<ul><li class="subfirst"><a href="rickey.php">Rickey Nunes</a></li>
					<li><a href="sweta.php">Sweta Naik</a></li>
					<li><a href="bhumiti.php">Bhumiti Dessai</a></li>
					<li><a href="narayan.php">Narayan Rajadhyax</a></li>
					<li><a href="swatej.php">Swatej Dessai</a></li>
					<li><a href="sneha.php">Sneha Naik</a></li>  
				</ul></li>
			<li class="topmenu"><a href="contact.php" style="height:15px;line-height:15px;">Contact Us</a></li>
			<li class="topmenu"><a href="http://www.gpc.nic.in" target="_blank" style="height:15px;line-height:15px;">GPC site</a></li>
			<li class="topmenu"><a href="http://goaresults.nic.in/" target="_blank" style="height:15px;line-height:15px;">BTE site</a></li>
			  <li class="topmenu"><a class="pressed" href="reg.php" style="height:15px;line-height:15px;">Student Registration</a></li>
			  <li class="topmenu"><a href="result11.php" style="height:15px;line-height:15px;">Result Dept</a></li>
		</ul>
      </div>
      <div class="click">
        <p></p>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  
	<div style="float: center; ">   
	<!--  width: 650px; height: 760px;   above div attribute -->
	
	
	<div class="bg"></div>   
			
	<div id="form_container">   
	
<!----- Form starts ---------------------------------------------------------->
	<form id="form_1" enctype="multipart/form-data" class="frmImageUpload"  method="POST" action="register.php" style="border: solid 2px #40a0c0">
		
	<img src="images/form_header.jpg" alt="icon" width="530" height="85" border="0" align="left"/>
	<img id="blah" src="#" alt=" " />
<ul>
<li id="li_1" >
	<table align="left" cellpadding = "10">


<tr>
<td><label class="description" for="rollno">Rollno </label>
<input type="text" id="rollno" name= "rollno" class="element text medium" pattern=".{6,6}" maxlength="6" value="" autofocus required onkeypress="return isRollnoKey(event)"/> </td>   <!---  <input type="text" name="rollno" maxlength="15"/></td>   -->

<td><label class="description" for="regno">Registration Num. </label>
<input type="text" id="regno" name="regno" class="element text medium" pattern=".{9,9}" maxlength="9" value="" required type="text" onkeypress="return isNumberKey(event)"/> </td>

</tr>

<tr>
<td><label class="description" for="fname">FirstName </label> <input type="text" id="fname" name= "fname" class="element text" maxlength="13" size="15" value="" onkeypress="return isAlphaKey(event)" required/></td>  
<td><label class="description" for="mname">MiddleName </label> <input id="mname" name= "mname" class="element text" maxlength="13" size="15" value="" onkeypress="return isAlphaKey(event)" required/></td>
<td><label class="description" for="lname">LastName </label> <input id="lname" name= "lname" class="element text" maxlength="13" size="15" value="" onkeypress="return isAlphaKey(event)" required/></td>
</tr>
<tr>
<td><label class="description" for="class_list">Gender </label>
 <select class="element select medium" id="gender" name="gender"  required> 
			<option value="" selected="selected"></option>
			<option value="Male" >Male</option>
			<option value="Female" >Female</option>
					</select></td>  
<td><label class="description" for="batch_list">Birthday (yyyy/mm/dd)</label> <input id="dob" name= "dob" class="element text" maxlength="10" size="15" value="" onkeypress="return isDateKey(event)" required/> 
			</td>
		</tr>
<tr>
<td><label class="description" for="village">Village </label><input id="village" name="village" class="element text" type="text" maxlength="15" value="" onkeypress="return isAlphaKey(event)" required/> </td>  
<td><label class="description" for="batch_list">Taluka </label> <select class="element select " id="taluka" name="taluka" required> 
			<option value="" selected="selected"></option>
			<option value="Margao" >Margao</option>			<option value="Ponda" >Ponda</option>			<option value="Curchorem" >Curchorem</option>
			<option value="Panjim" >Panjim</option>			<option value="Canacona" >Canacona</option>			<option value="Quepem" >Quepem</option>
			<option value="Sanguem" >Sanguem</option>			<option value="Mapusa" >Mapusa</option>	 <option value="Bicholim" >Bicholim</option>	
			<option value="Vasco" >Vasco</option>		</select></td>

</tr>
<tr>
<td><label class="description" for="mobile">Mobile </label>	

<input type="text" id="mobile" name="mobile" class="element text medium" pattern=".{10,10}" maxlength="10" value="" required type="text" onkeypress="return isNumberKey(event)"/> </td>


<td><label class="description" for="email">Email-Id </label><input id="email" name="email" class="element text large" type="email" maxlength="35" value="" required/> </td>
</tr>
<tr>
<td><label class="description" for="batch_list"> Education done</label> <select class="element select " id="edu" name="edu" required> 
			<option value="" selected="selected"></option>
			<option value="SSC" >SSC</option>		<option value="HSSC" >HSSC </option>	<option value="HSSC-Sci" >HSSC-Sci</option>			
			<option value="HSSC-voc" >HSSC-voc</option>      							</select> </td>
<td><label class="description" for="mobile">Parent's Mobile </label>
<input type="text" id="pmobile" name="pmobile" class="element text medium" pattern=".{10,10}" maxlength="10" value="" required type="text" onkeypress="return isNumberKey(event)"/>
</td>
<td> </td>
<td><label class="description" for="mname">Acad-Year </label> <input id="year" name= "year" class="element text" maxlength="15" size="15" value="2015-16" readonly/></td>
</tr>
 <tr>
 <td><label class="description" for="dept_list">Department </label> 
 
 <!-----
 <select class="element select medium" id="dept" name="dept" required> 
			<option value="" selected="selected"></option>
			<option value="COMP" >COMP</option>
			<option value="ENE" >ENE</option>       <option value="MECH" >MECH</option>
		</select></td>  ----->
 <?php
mysql_connect("localhost", "nitin", "nitin25") or die("Connection Failed");
mysql_select_db("nitin_students")or die("Connection Failed");
$query = "SELECT dept FROM department where status='ACTIVE'";
$result = mysql_query($query);
?>
<select class="element select medium" id="dept" name="dept" required>
<option value="" selected="selected"></option>
<?php
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
?>
<option value="<?php echo $line['dept'];?>"> <?php echo $line['dept'];?> </option>
<?php
}
?>
</select></td>
 
 
 
 
<td><label class="description" for="class_list">Class </label> <select class="element select " id="class" name="class"  required> 
			<option value="" selected="selected"></option>
			<option value="FY" >First Year</option>
			<option value="SY" >Second Year</option>
			<option value="TY" >Third Year</option>
		</select></td>  
<!--
		<td>		<label class="description" for="fname">Semester </label> <select class="element select medium" id="sem" name="sem"  required> 
			<option value="" selected="selected"></option>
			<option value="1" >1</option>				<option value="2" >2</option>				<option value="3" >3</option>  
			<option value="4" >4</option>				<option value="5" >5</option>				<option value="6" >6</option></td>  </select></td>    -->

<td>
<label class="description" for="batch_list">Batch </label> <select class="element select medium" id="batch" name="batch" required> 
			<option value="" selected="selected"></option>
			<option value="A" >A</option>
			<option value="B" >B</option>
		</select></td>
</tr>
</table></li>


<li id="li_2" >
<table align="left" cellpadding = "10">
<tr><td>
<label class="description" for="mobile">Upload Webcam Photo (1-80 kB)</label></td>
<td>	<input name="MAX_FILE_SIZE" value="102400" type="hidden" >
<input name="image1" accept="image/jpeg" type="file" onchange="readURL(this);" value="" required></td>
<td>  </td>
<td> </td>
</tr>
 </table></li>

	

 
 <li id="li_3" >
<table align="center" cellpadding = "10"><tr>
 <td><input type="hidden" name="form_id" value="922864" /></td>
	<td>	<input id="submit" class="button_text" type="submit" name="submit" value="Submit  Form" /></td>
	<td>	<input type='reset' value='Clear  Form' name='reset'></td>
 </tr>
 </table></li>
 
 </ul>
	</form>	
		
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
