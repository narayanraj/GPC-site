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
			<li class="topfirst"><a href="index.html"  style="height:15px;line-height:15px;">Home</a></li>
			<li class="topmenu"><a href="about.html" style="height:15px;line-height:15px;">About Us</a></li>
			<li class="topmenu"><a href="faculty.html" style="height:15px;line-height:15px;">Faculty</a></li>
			<li class="topmenu"><a href="facility.html" style="height:15px;line-height:15px;"><span>Facilities</a></li>
			<li class="topmenu"><a href="scorner.html" style="height:15px;line-height:15px;">Students Corner</a></li>
			<li class="topmenu"><a style="height:15px;line-height:15px;"><span>Faculty Corner</span></a>
				<ul><li class="subfirst"><a href="rickey.html">Rickey Nunes</a></li>
					<li><a href="sweta.html">Sweta Naik</a></li>
					<li><a href="bhumiti.html">Bhumiti Dessai</a></li>
					<li><a href="narayan.html">Narayan Rajadhyax</a></li>
					<li><a href="swatej.html">Swatej Dessai</a></li>
					<li><a href="sneha.html">Sneha Naik</a></li>  
				</ul></li>
			<li class="topmenu"><a href="contact.html" style="height:15px;line-height:15px;">Contact Us</a></li>
			<li class="topmenu"><a href="http://www.gpc.nic.in" target="_blank" style="height:15px;line-height:15px;">GPC site</a></li>
			<li class="topmenu"><a href="http://goaresults.nic.in/" target="_blank" style="height:15px;line-height:15px;">BTE site</a></li>
			  <li class="topmenu"><a href="reg.html" style="height:15px;line-height:15px;">Student Registration</a></li>
			  <li class="topmenu"><a class="pressed" href="result11.html" style="height:15px;line-height:15px;">Result Dept</a></li>
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
	<form id="form_1" enctype="multipart/form-data" class="frmImageUpload"  method="post" action="<?php echo $PHP_SELF;?>" style="border: solid 2px #40a0c0">
		
	<img src="images/form_header.jpg" alt="icon" width="530" height="85" border="0" align="left"/>
	<img id="blah" src="#" alt=" " />
<ul>
<li id="li_1" >
	<table align="left" cellpadding = "10">


<tr>
<td><label class="description" for="rollno">Rollno </label>
<input type="text" id="rollno" name= "rollno" class="element text medium" pattern=".{6,6}" maxlength="6" value="" autofocus readonly onkeypress="return isRollnoKey(event)" /> </td>   <!---  <input type="text" name="rollno" maxlength="15"/></td>   -->

<td><label class="description" for="regno">Registration Num. </label>
<input type="text" id="regno" name="regno" class="element text medium" pattern=".{9,9}" maxlength="9" value="" type="text" onkeypress="return isNumberKey(event)"/> </td>

</tr>
<tr>
 <td><input type="hidden" name="form_id" value="922864" /></td>
	<td>	<input id="submit" class="button_text" type="submit" name="submit" value="Submit  Form" /></td>
	<td>	<input type='reset' value='Clear  Form' name='reset'></td>
 </tr>
<tr>


</tr>

  <tr>
 <?php
echo "<table style='border: solid 1px black;'>";

  echo "<tr><th>Rollno</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 

$servername = "localhost";
$username = "nitin";
$password = "nitin25";
$dbname = "nitin_students";

try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT ROLLNO, FNAME, LNAME FROM PERSONAL WHERE ROLLNO = '%regno%'"); 
     $stmt->execute();

     // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
         echo $v;
     }
}
catch(PDOException $e) {
     /*echo "Error: " . $e->getMessage();*/
}
$conn = null;
echo "</table>";


?>



  </tr>
 
 
 </table>
	</div>
	
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



</p>

</BODY>
</html>
