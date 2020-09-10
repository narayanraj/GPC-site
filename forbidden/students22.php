<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Administrator -Computer Dept</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="college-menu.css3prj_files/css3menu1/menu-style.css" type="text/css" /><style>._css3m{display:none}</style>
<!---<link rel="stylesheet" type="text/css" href="view.css" media="all">  --->
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script language="JavaScript"> 
function printPage() {
if(document.all) {
document.all.divButtons.style.visibility = 'hidden';
window.print();
document.all.divButtons.style.visibility = 'visible';
} else {
document.getElementById('divButtons').style.visibility = 'hidden';
window.print();
document.getElementById('divButtons').style.visibility = 'visible';
}
}
</script>

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
			<li class="topfirst"><a href="reg11.php"  style="height:15px;line-height:15px;">Register New</a></li>
			<li class="topfirst"><a href="students11.php" class="pressed" style="height:15px;line-height:15px;">Students List</a></li>
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
  
	<div style="float: center; ">   
	<!--  width: 650px; height: 760px;   above div attribute -->
	
	
	<div class="bg"></div>   
			
	<div id="form_container">  <!--------------------------------------------------->
	
	<BODY link="#804000" vlink="#804000"
alink="#804000" topmargin="0" leftmargin="0" marginwidth="0"
marginheight="0">
 
<TABLE border=0 width="100%" cellspacing="1" height="50">
  <tr>
    <td bgColor="#2d75c0" height="80" width="15%" align="center">
      <table BORDER="0" WIDTH="100%" cellspacing="0" cellpadding="0">
        <tr>
          <td WIDTH="100%">
            <p align="center">
			<font color="#FFFFFF" size="4"><strong></strong></font>
			<b><font color="#d1c1b1" face="Georgia" size="3"><font size="4"><b>GOVERNMENT POLYTECHNIC CURCHOREM</b></font><br>
			COMPUTER ENGINEERING STUDENTS - CURRENTLY ENROLLED
			<br> YEAR - 
<?php 
$class = $_POST['class'];
	
	echo "$class";
?>  
				</font></b>
			
         </td>
        </tr>
      </table>

<div id="divButtons" name="divButtons" style="width: 909; height: 22">
<p align="right">
<!---
<input type='button' value='Back' name='back' onclick="location.href='result11.html'" style="font-style: normal; font-variant: normal; font-weight: bold; font-size: 11px; font-family: Verdana; color: #800000; background-color: #C0C0C0; border: 2 double #008080";>
---->
<input type="button" value = "Print this page" onClick="printPage()" style="font-style: normal; font-variant: normal; font-weight: bold; font-size: 11px; font-family: Verdana; color: #800000; background-color: #C0C0C0; border: 2 double #008080";>
</div>
  </td>
  </tr>
 </TABLE>
 
 <p align="center"></p>
 <div align="center">
  <p>

 
 </div>
<div align="center">
  <center>
  <table border="1" cellpadding="1" cellspacing="0" width="790" bordercolor="#FAEBD7" bordercolorlight="#FAEBD7" bordercolordark="#800000" >
    <font face='Verdana' size='2'>
    <tr>
	     <td width="" nowrap bgcolor="#FFCC66"><b><font size="2" face="Verdana">ROLLNO</font></b></td>
		 <td width="" nowrap bgcolor="#FFCC66"><b><font size="2" face="Verdana">REGNO</font></b></td>
  		<td width="" nowrap bgcolor="#FFCC66"><b><font size="2" face="Verdana">STUDENT's FULL NAME</font></b></td>
		<td width="" nowrap bgcolor="#FFCC66"><b><font size="2" face="Verdana">TALUKA</font></b></td>
		<td width="" nowrap bgcolor="#FFCC66"><b><font size="2" face="Verdana">MOBILE</font></b></td>
      <td width="" nowrap bgcolor="#FFCC66"><b><font size="2" face="Verdana">PARENT's MOBILE</font></b></td>
      <td width="" nowrap bgcolor="#FFCC66"><b><font size="2" face="Verdana">PHOTO</font></b></td>
   

 </tr>
  </center>
	 
	 
<?php

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }
     function current() {
         return "<td><font size='1' face='Verdana'>" . parent::current(). "</font></td>";
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

$class = $_POST['class'];

//connect to the server
$connect = mysql_connect("$servername","$username","$password");
mysql_select_db("$dbname");                                                                     //connect to the database
$query = mysql_query("SELECT P.ROLLNO,P.REG_NO,CONCAT(P.FNAME,' ',P.MNAME,' ', P.LNAME) AS NAME ,P.TALUKA, P.MOBILE, P.PARENT_MOBILE, P.PHOTO FROM PERSONAL P 
	                        WHERE P.ROLLNO IN (SELECT SS.ROLLNO FROM SEMESTER SM,STUD_SEM SS 
							                    WHERE SM.SEM_ID=SS.SEM_ID AND SM.STATUS='ACTIVE' AND SS.CLASS='$class')");    //query the database

if( mysql_num_rows($query) == 0) 
{ 
echo "<p><h2>No Record found for this Search entry</h2>";
}
else
{

WHILE($rows = mysql_fetch_array($query)):                                     //fetch the results / convert results into an array

$rollno = $rows['ROLLNO'];
$regno = $rows['REG_NO'];
$name = $rows['NAME'];
$taluka = $rows['TALUKA'];
$mob = $rows['MOBILE'];
$pmob = $rows['PARENT_MOBILE'];

//$photo = $rows['PHOTO'];
echo "<tr></b><td>$rollno</td> </b> <td>$regno</td>  </b><td>$name</td>  </b><td>$taluka</td>  </b><td>$mob</td>  </b><td>$pmob</td> </b> <td> ";
echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows['PHOTO'] ).'"  width="100" height="80" border="1"/> </td> </tr>';

endwhile;
}

$connect = null;
?>	
  
 </font>
 </table>
	 
</div>
	 </p> 	 	
	
  <div align="center"></p></p></p></p></p></p></p>  </p></p></p></p></p></p></p>  </p></p></p>  <center>
 
   <table border="0" width="100%" >
   <tr>
        <td width="100%" bgcolor="#2d75c0">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="WIDTH: 80%" align="right" height="20">
            <tr> <td><font color="#d1c1b1" face="Times New Roman" size="3"> </font> </td></tr>
        </table>
        </td>
   </tr>
   </table>
   </center></div>
 </p>
  
     </BODY>
	  
    </tr>
  </table>
  </center>
 </div>
 
      </BOBY>
</div>
	 
 </div>
    <div class="clr">   </div>
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
