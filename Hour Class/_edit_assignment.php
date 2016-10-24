<?php
require_once("connect.php");

$assignment_title = $_POST['assignment_title'];
$assignment_description = $_POST['assignment_description'];
$assignment_duedate = $_POST['year']."-".$_POST['month']."-".$_POST['day']." ".$_POST['hour'].":".$_POST['min'].":59";
$assignment_id = $_POST['id'];


$sql = "SELECT * FROM tbl_assignments WHERE assignment_id=\"".$assignment_id."\"";
$sql_link = "SELECT * FROM tbl_l_secassign WHERE assignment_id=\"".$assignment_id."\"";
$query_link = mysql_query($sql_link);
while($row = mysql_fetch_array($query_link)) {
	$query_link1 =  "UPDATE tbl_assignments SET assignment_title=\"".$assignment_title."\", assignment_description=\"".$assignment_description."\", assignment_duedate=\"".$assignment_duedate."\" WHERE assignment_id=\"".$assignment_id."\"";
	$result = mysql_query($query_link1);
	
}

header("location:index.php");

// $sql_put = "INSERT INTO tbl_assignments VALUES (NULL, \"".$assignment_title."\", \"".$assignment_description."\", \"".$assignment_duedate."\", \"\")";
// $query = mysql_query($sql_put);
// $query_read = mysql_query($sql_read);
// $result = mysql_fetch_array($query_read);
// $sql_link = "INSERT INTO tbl_l_secassign VALUES (NULL,  \"".$_POST['section_id']."\", \"".$result['assignment_id']."\")";
// $query_link = mysql_query($sql_link);
?>