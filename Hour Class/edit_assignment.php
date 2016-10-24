<?php
require_once("connect.php");
session_start();
 
 if(!isset($_SESSION['name'])) {
	header("location:login.php");
}

include("includes/queries.php");

$assignment_id = $_GET['id'];
$sql = "SELECT * FROM tbl_assignments WHERE assignment_id=\"".$assignment_id."\"";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

$epoch = strtotime($row['assignment_duedate']);
$day = new DateTime("@$epoch");
$day->format('Y');



  ?>

<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="lib/kube/css/kube.min.css" />
	<link rel="stylesheet" type="text/css" href="lib/kube/css/master.css" />

	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<title>Add assignment — Professor portal</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<meta charset="UTF-8"></head>
<body>

<?php

for ($i = 0; $professors[$i] = mysql_fetch_assoc($result_professor); $i++);	
	array_pop($professors);
	// print_r($professors);

echo "<div id=\"page\">";

echo $professors[0]["professor_name"]." ".$professors[0]["professor_lastname"]." (<a href=\"logout.php\">logout</a>)<br>";
echo "<img src=\"".$professors[0]["professor_avatar"]."\" ><br>";
echo "You teach ".$professors[0]["section_title"]."<br><br>";
$section_id = $professors[0]["section_id"];
$time = time();
$duedate = strtotime($professors[0]["assignment_duedate"]);



echo "<div class=\"row\">";
echo "<span class=\"fourth\">Assignments &amp; due dates</span>";
echo "<span class=\"fourth push-right\"><a href=\"add_assignment.php\" class=\"btn btn-round\">Add assignment</a>    </span>";
echo "<span class=\"fourth push-right\"><a href=\"index.php\" class=\"btn btn-round\">See assignment list</a></span>";
echo "</div>";
?>

<form method="post" action="_edit_assignment.php" class="forms columnar">
    <fieldset>
        <ul>
            <li>
                <label for="assignment_title" class="bold">Assignment title</label>
                <input type="text" name="assignment_title" id="assignment_title" size="40" value="<?php echo $row['assignment_title']; ?>" />
            </li>
            <li>
                <label for="assignment_duedate" class="bold">Due Date</label>
                <li>
		<ul class="multicolumn">
		        <li>
		            <input type="text" name="day" name="day" size="2" value="<?php echo $day->format('d'); ?>">.
		           
		            
		        </li>
		        <li>
		            <input type="text" name="month" name="month" size="2" value="<?php echo $day->format('m'); ?>">.
		            
		            
		        </li>
		        <li>
		            <input type="text" name="year" name="year" size="4" value="<?php echo $day->format('Y'); ?>">
		            	
		        </select>
		        </li>

		        <li><input type="text" name="hour" name="hour" size="2" value="<?php echo $day->format('H'); ?>">:
		            	
		</li>   
		<li>
			<input type="text" name="min" name="min" size="2" value="<?php echo $day->format('i'); ?>">
		 </li>
            	</li>
            </ul>
            <li>
                <fieldset>
                    <section><label class="bold">Assignment Description</label></section>
                    <textarea id="assignment_description" name="assignment_description" class="width-100" style="height: 100px;"><?php echo $row['assignment_description']; ?></textarea>
                </fieldset>
            </li>
            <li class="push">
            <input type="submit" name="send" class="btn" value="Save Assignment" />
            <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>">
            </li>
        </ul>
    </fieldset>
</form>

</div>