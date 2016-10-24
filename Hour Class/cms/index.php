<?php
require_once("../connect.php");
session_start();
 
 if(!isset($_SESSION['name'])) {
	header("location:login.php");
}

include("../includes/queries.php");

  ?>

<!DOCTYPE html>
<html>
<head>
	

<?php
if (!isset($_SESSION['name'])) {
	include("login.php");	
	
	}else{
	
	include("setup.php");
	}
?>

</body>
</html>
