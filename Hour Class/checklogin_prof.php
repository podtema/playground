<?php
	
require_once("connect.php");
$myusername=mysql_real_escape_string($_POST['myusername']);
$mypassword=md5(mysql_real_escape_string($_POST['mypassword']));
 
$sql="SELECT * FROM tbl_professors WHERE professor_login = \"".$myusername."\" AND professor_password = \"".$mypassword."\"";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){
	
	session_start();  
	$_SESSION['name'] = $myusername;
	$_SESSION['professor'] = true;
	
		if(isset($_SESSION['name'])) {
			echo header("location:index.php"); 
		}
	}else{
		header("location:login.php");
 		}
		

?>