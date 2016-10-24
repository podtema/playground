<?php
require_once("../connect.php");

$program_name = $_POST['name'];
$terms = $_POST['terms'];


$sql_put = "INSERT INTO tbl_programs VALUES (NULL, \"".$program_name."\", \"".$terms."\", \"0\", \"0\")";
// mysql_query($sql_put);
?>
<!DOCTYPE html>
<head>
	<title>Step 1</title>
<meta charset="utf-8">
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
	<p>Setting up program <strong><?php echo $program_name; ?></strong></p>

	<form action="step2.php" method="POST">
		<label>Number of courses</label>
		<input type="text" name="courses" id="courses" placeholder="5" size="3" required><br><br>
		<label for "courses">Number of teachers</label>
		<input type="text" name="teachers" id="teachers" placeholder="3" size="3" required><br><br>
		

		<FIELDSET>
			<label>TERMS</label><br>
			<label>Name for the first term</label>
			<input type="text" name="term_name" id="term_name" placeholder="Winter" size="10" required><br><br>
			<label>Start Date: </label>
			<input type="date" id="start_date" name="start_date" required><br>
			<label>End Date: </label>
			<input type="date" id="end_date" name="end_date" required><br><br>
		</FIELDSET>
		
		<input type="submit" value="Save and continue">
	</form>
</div>
</body>
</html>
