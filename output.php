<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Intranet GPC-Computer Engg Dept</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" /> 
<link rel="stylesheet" href="college-menu.css3prj_files/css3menu1/menu-style.css" type="text/css" /><style>._css3m{display:none}</style>
<!---<link rel="stylesheet" type="text/css" href="view.css" media="all">  --->
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
			
	<div id="form_container">  <!--------------------------------------------------->
<BODY link="#803000" vlink="#804000"
alink="#804000" topmargin="0" leftmargin="0" marginwidth="0"
marginheight="0">

<TABLE border=0 width="100%" cellspacing="1" height="135">
  <tr>
    <td bgColor="#2d75c0" height="102" width="15%" align="center">
      <table BORDER="0" WIDTH="100%" cellspacing="0" cellpadding="0">
        <tr>
          <td WIDTH="100%">
            <p align="center"><font color="#FFFFFF" face="Times New Roman" size="3"> </font>
			  
            <strong><font color="#FFFF00" size="5">  GOVERNMENT POLYTECHNIC CURCHOREM </font></strong><BR />
			<font color="#FFFF00" face="Georgia" size="3">Diploma Examination Results - November  2014</font>
                       </td>
        </tr>
      </table>
	  
<div id="divButtons" name="divButtons" style="width: 909; height: 22">
<p align="right">
<input type="button" value = "Print this page" onClick="printPage()" style="font-style: normal; font-variant: normal; font-weight: bold; font-size: 11px; font-family: Verdana; color: #800000; background-color: #C0C0C0; border: 2 double #008080";>
</div>

    </td>
  </tr>
  <tr>
    <td height="25" width="15%" align="center">
<b><font face="Georgia" size="4">Diploma Examination Results - November  2014</font></b>
    </td>
  </tr>
  </TABLE>
  <div align="center">
  <center>
  <table border="1" cellspacing="0" width="83%" bordercolor="#FAEBD7" cellpadding="0" bordercolorlight="#FAEBD7" bordercolordark="#804000">
    <tr><tr><th>SEM_ID</th><th>SUB_ID</th><th>THEORY</th><th>TEST</th><th>PRACTICAL</th><th>TERMWORK</th><th>TOTAL</th><th>RESULT</th></tr>
      
	  <tr>
	  <?php
//echo "<table style='border: solid 1px blue;'>";

 
 // echo "<th>SEM_ID</th><th>SUB_ID</th><th>THEORY</th><th>TEST</th><th>PRACTICAL</th><th>TERMWORK</th><th>TOTAL</th><th>RESULT</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td style='width: 100px; border: 1px solid blue;'>" . parent::current(). "</td>";
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
$rollno = $_POST['rollno'];
$regno = $_POST['regno'];

try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT SEM_ID,SUB_ID,THEORY,TEST,PRACTICAL,TERMWORK,TOTAL,RESULT FROM RESULT where REG_NO='$regno'"); 
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
    //echo "</table>";
?>  
	  
	  
    </tr>
  </table>
  </center>
 </div>

   
	</body>
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
