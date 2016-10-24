<!DOCTYPE html>
<html>
<head>
	<title>HourClass</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="lib/kube/css/kube.min.css" />
	<link rel="stylesheet" type="text/css" href="lib/kube/css/master.css" />

	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta charset="UTF-8"></head>
<body>

<div id="page">
<form name="form" method="post" action="checklogin.php">
<strong>Student Login </strong>
Username: <input name="myusername" type="text" id="myusername" />
Password: <input name="mypassword" type="password" id="mypassword" />
<input type="submit" name="Submit" value="Login" class="btn" /></form>

<form name="form" method="post" action="checklogin_prof.php">
<strong>Professor Login </strong>
Username: <input name="myusername" type="text" id="myusername" />
Password: <input name="mypassword" type="password" id="mypassword" />
<input type="submit" name="Submit" value="Login" class="btn" /></form>

</div>
</body>
</html>