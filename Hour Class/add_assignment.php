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

<form method="post" action="_add_assignment.php" class="forms columnar">
    <fieldset>
        <ul>
            <li>
                <label for="assignment_title" class="bold">Assignment title</label>
                <input type="text" name="assignment_title" id="assignment_title" size="40" />
            </li>
            <li>
                <label for="assignment_duedate" class="bold">Due Date</label>
                <li>
		<ul class="multicolumn">
		        <li>
		            <select name="day" name="day" required><option>Day</option>
		            	<option>01</option>
		            	<option>02</option>
		            	<option>03</option>
		            	<option>04</option>
		            	<option>05</option>
		            	<option>06</option>
		            	<option>07</option>
		            	<option>08</option>
		            	<option>09</option>
		            	<option>10</option>
		            	<option>11</option>
		            	<option>12</option>
		            	<option>13</option>
		            	<option>14</option>
		            	<option>15</option>
		            	<option>16</option>
		            	<option>17</option>
		            	<option>18</option>
		            	<option>19</option>
		            	<option>20</option>
		            	<option>21</option>
		            	<option>22</option>
		            	<option>23</option>
		            	<option>24</option>
		            	<option>25</option>
		            	<option>26</option>
		            	<option>27</option>
		            	<option>28</option>
		            	<option>29</option>
		            	<option>30</option>
		            	<option>31</option>
		            </select>
		            
		        </li>
		        <li>
		            <select name="month" name="month" required><option>Month</option>
		            <option value="01">January</option>
			<option value="02">February</option>
			<option value="03">March</option>
			<option value="04">April</option>
			<option value="05">May</option>
			<option value="06">June</option>
			<option value="07">July</option>
			<option value="08">August</option>
			<option value="09">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
</select>
		            
		        </li>
		        <li>
		            <select name="year" name="year" required>
		            	<option>Year</option>
		            <option>2013</option>
		        	<option>2014</option>
		        </select>
		        </li>

		        <li><select name="hour" name="hour" required><option>Hour</option>
		            	<option>01</option>
		            	<option>02</option>
		            	<option>03</option>
		            	<option>04</option>
		            	<option>05</option>
		            	<option>06</option>
		            	<option>07</option>
		            	<option>08</option>
		            	<option>09</option>
		            	<option>10</option>
		            	<option>11</option>
		            	<option>12</option>
		            	<option>13</option>
		            	<option>14</option>
		            	<option>15</option>
		            	<option>16</option>
		            	<option>17</option>
		            	<option>18</option>
		            	<option>19</option>
		            	<option>20</option>
		            	<option>21</option>
		            	<option>22</option>
		            	<option>23</option>
		            </select>
		</li>   
		<li>
			<select name="min" name="min" required><option>Minutes</option>
		            	<option>00</option>
		            	<option>15</option>
		            	<option>30</option>
		            	<option>45</option>
		            </select>
		 </li>
            	</li>
            </ul>
            <li>
                <fieldset>
                    <section><label class="bold">Assignment Description</label></section>
                    <textarea id="assignment_description" name="assignment_description" class="width-100" style="height: 100px;"></textarea>
                </fieldset>
            </li>
            <li class="push">
            <!-- <input type="hidden" id="section_id" name="section_id" value="1"> -->
            <input type="submit" name="send" class="btn" value="Add Assignment" />
            </li>
        </ul>
    </fieldset>
</form>

</div>