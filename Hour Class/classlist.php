<?php
require_once("connect.php");
session_start();
 
 if(!isset($_SESSION['name'])) {
	header("location:login.php");
}

include("includes/queries.php");

  ?>
<!DOCTYPE html>
<html>
<head>
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

<?php

for ($i = 0; $professors[$i] = mysql_fetch_assoc($result_professor); $i++);	
	array_pop($professors);

$sql_student_list = "SELECT * \n"
    . "FROM tbl_sections, tbl_l_studsec, tbl_students \n"
    . "WHERE \n"
    . "tbl_students.student_id=tbl_l_studsec.student_id AND \n"
    . "tbl_sections.section_id=tbl_l_studsec.section_id AND \n"
    . "tbl_sections.section_id=\"".$professors[0]["section_id"]."\"";

$result_student_list =mysql_query($sql_student_list);
for ($i = 0; $list[$i] = mysql_fetch_assoc($result_student_list); $i++);	
	array_pop($list);

	// print_r($list);

echo "<div id=\"page\">";

echo $professors[0]["professor_name"]." ".$professors[0]["professor_lastname"]." (<a href=\"logout.php\">logout</a>)<br>";
echo "<img src=\"".$professors[0]["professor_avatar"]."\" ><br>";
echo "You teach ".$professors[0]["section_title"]."<br><br>";
$time = time();
$duedate = strtotime($professors[0]["assignment_duedate"]);
echo "<div class=\"row\">";
echo "<span class=\"fourth\">Assignments &amp; due dates</span>";
echo "<span class=\"fourth push-right\"><a href=\"add_assignment.php\" class=\"btn btn-round\">Add assignment</a>    </span>";
echo "<span class=\"fourth push-right\"><a href=\"index.php\" class=\"btn btn-round\">See assignment list</a></span>";
echo "</div>";


	echo "<table class=\"width-100 bordered\">
	<thead class=\"thead-black\">
		<tr>
			<th>Section</th>
			<th>Name and Lastname</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody><tr>";
	$i = 0; 
	$n = count($list);
	while( $i < $n) {
		echo 
		"<td>".$list[$i]["section_title"]."</td>
		<td>".$list[$i]["student_name"]." ".$list[$i]["student_lastname"]."</td>
		<td><a href=\"edit_student.php?id=".$list[$i]['student_id']."\">Edit</a></td>
		</tr>";		
		$i++;
	};
	echo "</tbody></table>";
	echo "</div>";

?>

</body>
</html>