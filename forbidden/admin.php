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

<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 60,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
?>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "nitin" && form.pswrd.value == "nitin45")
  {
    window.open('target.html')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
</script>
<script language="javascript">
function func1(){  alert('Hello');  

window.close(this);  
}   
</script>
</head>
<body oncontextmenu="return false;" >
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
			<li class="topmenu"><a href="report11.php" style="height:15px;line-height:15px;">View Report</a></li>
			
		<!----
			<li class="topmenu"><a style="height:15px;line-height:15px;"><span>Faculty Corner</span></a>
				<ul><li class="subfirst"><a href="rickey.html">Rickey Nunes</a></li>
					<li><a href="sweta.html">Sweta Naik</a></li>
				
				</ul></li>
				 <li class="topmenu"><a href="22.html" style="height:15px;line-height:15px;">Result Dept</a></li>      ---->
		</ul>
      </div>
	  		
       
     
			
	<div id="form_container"> 
	
	<center>
	<img src="images/comp_eng_logo.jpg" alt="icon" width="190" height="180" border="0" /> <!-- comp_eng_logo.jpg / dept_pic.jpg / govt_logo.jpg  -->
			
		<h2><b>Computer Engineering Department</b></h2>
		<br>
		<h2><b>Office Administration Section</b></h2>
		</center>
      </p></p></p>
	  <form name="login">
			Username<input type="text" name="userid"/>
			Password<input type="password" name="pswrd"/>
			<input type="button" onclick="check(this.form)" value="Login"/>
			<input type="reset" value="Cancel"/>
		</form>

	  
	  
	  </p></p></p></p>
	  </p></p></p></p></p></p></p></p>
	  </p></p></p></p></p></p></p></p>
	  </p></p></p></p></p></p></p></p>

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
