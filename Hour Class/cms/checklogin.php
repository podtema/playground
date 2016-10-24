<?php
	
require_once("../connect.php");
$myusername=mysql_real_escape_string($_POST['myusername']);
$mypassword=md5(mysql_real_escape_string($_POST['mypassword']));
 
$sql="SELECT * FROM tbl_admins WHERE admin_login = \"".$myusername."\" AND admin_password = \"".$mypassword."\"";
$result=mysql_query($sql);
$count=mysql_num_rows($result);


if($count==1){
	
	session_start();  
	$_SESSION['name'] = $myusername;
	header("location:index.php");
}else{
	header("location:login.php");
}
 	
?>