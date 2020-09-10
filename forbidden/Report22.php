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
			<li class="topfirst"><a href="students11.php" style="height:15px;line-height:15px;">Students List</a></li>
			<li class="topmenu"><a href="result11.php" style="height:15px;line-height:15px;">View Result</a></li>
			<li class="topmenu"><a href="report11.php" class="pressed" style="height:15px;line-height:15px;">View Report</a></li>
		
			
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
			<b><font color="#d1c1b1" face="Georgia" size="3"><font size="4"><b>BOARD OF TECHNICAL EDUCATION</b></font><br>
			GOVERNMENT POLYTECHNIC CURCHOREM&nbsp;<br> DIPLOMA EXAMINATION RESULTS - SEMESTER PATTERN</font></b>
			
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
  <?php

$servername = "localhost";
$username = "nitin";
$password = "nitin25";
$dbname = "nitin_students";

$class = $_POST['class'];
$acad = $_POST['acad'];
$semtype = $_POST['semtype'];

	if($_POST['semtype'] == "odd")
	$month = "November";
	else 
	$month = "April";
	

echo "<table border='1' cellspacing='0' width='75%' bordercolor='#FAEBD7' cellpadding='0' bordercolorlight='#FAEBD7' bordercolordark='#804000'>";
echo "<tr><td width='32%'><font face='Verdana'><font size='2'>&nbsp;Academic Year: </font><font color='#000000' size='2'>&nbsp;<b>$acad</b></font></font></td>";
echo "<td width='71%'><font face='Verdana' size='2'>&nbsp;Exam Name:&nbsp&nbsp&nbsp&nbsp;<b>BTE Revised Semester Pattern Exam </b></font></td></tr>";
echo "<tr><td><font face='Verdana'><font size='2'>&nbsp;Month : </font><font color='#000000' size='2'>&nbsp;<b>$month</b></font></font></td>";
echo "<td width='71%'><font face='Verdana' size='2'>&nbsp;Programme:&nbsp;&nbsp;&nbsp;<b>Diploma in Computer Engineering - DCE</b></font></td></tr></table></p></p>";

?>


 
 </div>
<div align="center">
  <center>
  <table border="1" cellpadding="2" cellspacing="0" width="790" bordercolor="#FAEBD7" bordercolorlight="#FAEBD7" bordercolordark="#800000">
    
    <tr>
  		<td width="" nowrap bgcolor="#FFCC66"><b><font size="1" face="Verdana">SEM-ID</font></b></td>
		<td width="" nowrap bgcolor="#FFCC66"><b><font size="1" face="Verdana">SEMESTER</font></b></td>
		<td width="" nowrap bgcolor="#FFCC66"><b><font size="1" face="Verdana">SUB-ID</font></b></td>
      <td width="" nowrap bgcolor="#FFCC66"><b><font size="1" face="Verdana">SUBJECT-NAME</font></b></td>
      <td width="" nowrap bgcolor="#FFCC66"><b><font size="1" face="Verdana">PASSING COUNT</font></b></td>
   

 </tr>
  </center>
	 <tr>
	 
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
$acad = $_POST['acad'];
$semtype = $_POST['semtype'];

if($_POST['semtype'] == "odd")
{ if($_POST['class'] == "FY")
	$sem = "1";
  if($_POST['class'] == "SY")
	$sem = "3";
  if($_POST['class'] == "TY")
	$sem = "5";
	}
if($_POST['semtype'] == "even")
{ if($_POST['class'] == "FY")
	$sem = "2";
  if($_POST['class'] == "SY")
	$sem = "4";
  if($_POST['class'] == "TY")
	$sem = "6";
	}

try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//======================== join semester table and sem_result ----- form input matched with semster table
	
	$stmt = $conn->prepare("SELECT R.SEM_ID,R.SEM, R.SUB_ID,S.SUB_NAME, count(R.REG_NO) FROM SEM_RESULT R,SUBJECT S ,SEMESTER SM 
	                          WHERE (R.THEORY >=30 OR R.STATE='PASS') AND SM.TYPE = '$semtype' AND R.SUB_ID = S.SUB_ID AND SM.YEAR='$acad' 
							  AND SM.SEM_ID=R.SEM_ID AND R.SEM='$sem' GROUP BY R.SUB_ID order by 3 ");
     $stmt->execute();
    
 	
	 
  // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	 
           foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
	        { 
               echo $v;
            }
      
		 
  }
catch(PDOException $e) {
     /*echo "Error: " . $e->getMessage();*/
}
$conn = null;

?>	

  </tr>
 </table>
	 
</div>
	 </p> 	 	
	
  <div align="center"></p></p></p></p></p></p></p>  
                      </p></p></p></p></p></p></p>  
					  </p> 
					  <center>
 
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
