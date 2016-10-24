<?php
require_once("../connect.php");


$term_name = $_POST['term_name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$courses = $_POST['courses'];
$teachers = $_POST['teachers'];
$terms_sql = "SELECT * FROM tbl_term";
$terms = mysql_query($terms_sql);
$sql_put = "INSERT INTO tbl_term VALUES (NULL, \"".$term_name."\", \"".$start_date."\", \"".$end_date."\")";

// mysql_query($sql_put);
?>
<!DOCTYPE html>
<head>
<title>Step 2</title>
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

	<form action="step3.php" method="POST">
		

		<?php 

			for ($w = 0; $terms_count[$w] = mysql_fetch_assoc($terms); $w++); 
    				array_pop($terms_count);

		$i = 0;
		while($courses > $i){
?><FIELDSET>
		<label>Course #</label>
		<input type="text" name="course" id="course" placeholder="HIST1036" size="10" required><br><br>
		<label>Course name</label>
		<input type="text" name="name" id="name" placeholder="Multimedia Authoring" size="35" required><br><br>
		<label>Number of Sections</label>
		<input type="text" name="sections" id="sections" placeholder="3" size="5" required><br><br>
		<label>Offered in the following terms:</label><br>
			
<?php
			$z = 0;
		while($terms_count[$z]){
?>			<label><input type="checkbox" name="terms" id="terms" value="<?php echo $terms_count[$z]['term_title']; ?>"> <?php echo $terms_count[$z]['term_title']; ?></label>
			<?php 
			$z++;
			}; ?>
				<br><br>

		</FIELDSET>
<?php
 		$i++;
		} ?>
		
		<?php 
		$i = 0;
		while($teachers > $i){
?>
		<FIELDSET>
			<label>Teacher</label><br>
		
			<label>First Name</label>
			<input type="text" name="first_name" id="first_name" placeholder="Jack" size="30" required><br><br>
			<label>Last Name</label>
			<input type="text" name="last_name" id="last_name" placeholder="Sparrow" size="30" required><br><br>
			<label>Email</label>
			<input type="text" name="email" id="email" placeholder="black_pearl@tortuga.com" size="50" required><br><br>
			<label>Password</label>
			<input type="text" name="password" id="password" placeholder="Parley" size="30" required><br><br>
		</FIELDSET>
	<?php
 		$i++;
		} ?>	
		<input type="submit" value="Save and continue">
	</form>
</div>
</body>
</html>