<?php
	require_once("connect.php");
	$id = $_GET['id'];
?>

<!DOCTYPE HTML>
<html>
<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<title>HourClass - UPLOAD</title>
    	<link rel="stylesheet" href="css/styles.css">
    	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Wendy+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
</head>
<div id="content">

<h1>Submit your assignment</h1>
<form action="submit.php" method="POST" enctype="multipart/form-data">
		<input type="file" id="assignment" name="assignment">
		<input type="submit" name="send" class="btn" value="Submit Assignment" />
</form>
</div>
</BODY>
</html>