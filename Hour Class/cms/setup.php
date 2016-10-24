<?php
	require_once("../connect.php");
	session_start();
	 
	 if(!isset($_SESSION['name'])) {
		header("location:login.php");
	}

	include("../includes/queries.php");

  ?>

  <meta charset="utf-8">
  <title>Program Setup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../lib/kube/css/kube.min.css" />
	<link rel="stylesheet" type="text/css" href="../lib/kube/css/master.css" />

	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta charset="UTF-8"></head>
<body>
<div id="page">
<p>Admin <a href="logout.php">logout</a><br></p>
<?php
$setup_sql = "SELECT * FROM tbl_programs";
$setup_query = mysql_query($setup_sql);
$setup = count(mysql_fetch_array($setup_query));
if($setup) {
	?>
	<form action="step1.php" method="POST">
		<label for "name">Program Name</label>
		<input type="text" name="name" id="name" placeholder="Fancy Program Name" size="50" required><br><br>
		<label for "terms">Number of terms</label>
		<input type="text" name="terms" id="terms" placeholder="2" size="3" required><br><br>
		<input type="submit" value="Save and continue">
	</form>



<?php }else{
	echo "Move on";
}



?>

</div>