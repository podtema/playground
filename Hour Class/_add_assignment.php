<?php
require_once("connect.php");

$assignment_title = $_POST['assignment_title'];
$assignment_description = $_POST['assignment_description'];
$assignment_duedate = $_POST['year']."-".$_POST['month']."-".$_POST['day']." ".$_POST['hour'].":".$_POST['min'].":59";
$section_id = $_POST['section_id'];


$sql_put = "INSERT INTO tbl_assignments VALUES (NULL, \"".$assignment_title."\", \"".$assignment_description."\", \"".$assignment_duedate."\", \"\")";
$sql_read = "SELECT assignment_id FROM tbl_assignments WHERE assignment_title=\"".$assignment_title."\" AND assignment_duedate=\"".$assignment_duedate."\"";
// $query = mysql_query($sql_put);
// $query_read = mysql_query($sql_read);
$result = mysql_fetch_array($query_read);
$sql_link = "INSERT INTO tbl_l_secassign VALUES (NULL,  \"".$_POST['section_id']."\", \"".$result['assignment_id']."\")";
// $query_link = mysql_query($sql_link);
?>