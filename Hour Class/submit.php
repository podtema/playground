<?php

require_once("connect.php");

$filename = $_FILES['filename']['name'];
echo $_FILES['filename']['name'];
echo $_FILES['filename']['type']."<br>";
echo $_FILES['filename']['size']." bytes <br>";
echo $_FILES['filename']['tmp_name']."<br>";
$targetpath = "uploads/".$filename;

if (move_uploaded_file($_FILES['filename']['tmp_name'], $targetpath)) {
$orig = "uploads/".$filename;
$copy = "uploads/student_".$filename;

if(!copy($orig, $copy)) {
	echo "Fail <br>";
}

$id = $_POST["id"];
$sql = "SELECT * FROM tbl_assignments WHERE assignment_id=".$id;
$sql_read = mysql_query($sql);
$result_updated = mysql_fetch_array($sql_read);

$sql_update = "UPDATE tbl_assignments SET assignment_submit=\"1\" WHERE assignment_id=".$id;
$fire = mysql_query($sql_update);
echo "Updated status for assignment is: ".$result_updated['assignment_id'];
}

?>