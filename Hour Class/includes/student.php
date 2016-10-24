<title>HourClass</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
<meta charset="UTF-8"></head>
<body>
<?php

	for ($i = 0; $students[$i] = mysql_fetch_assoc($result_student); $i++);	
	array_pop($students);
	
	// echo "<div id=\"page\">";
	// print_r($students);

?>
<div id="container">
<div id="header">
    	<div id="logo">
        </div>

<div id="dpicture">
	<?php echo "<img src=\"".$students[0]["student_avatar"]."\" width=\"53\">"; ?>
        </div>
        <div id="dname">
        <span class="bold"><?php echo $students[0]["student_name"]." ".$students[0]["student_lastname"]; ?></span><br>
        <span>IDP, <?php echo $students[0]["section_title"]; ?></span>
        <span>(<a href="logout.php">logout</a>)</span>
        </div>
        </div>
        <div id="navigation">
        	<ul>
            	<li><a href="#">Dashboard</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Assignments</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Log Out</a></li>
            </ul>
        </div>
    

<div id="content">
    <br>
    
    <div class="heading">
   	  <h2>Timeline</h2>
   	  <p>Today is <?php echo date('l, F j, Y'); ?></p>
    	<br>
    </div>

    <div id="timeline">
    </div>
 
    
<div id="courselegend">
        	<ul>
            <?php 	
            $i = 0;
            $n = count($students);
            while ($i < $n){
            	echo "<li><a href=\"#\">".$students[$i]["course_title"]."</a></li>";

            	if($students[$i]["course_id"] == $students[$i+1]["course_id"]) {
            		$i = $i+2;
            	}else{
            		$i++;
            	
            }
            	
	};
	?>

            </ul>
        </div>
        <br>
    <div class="heading">
    <h2><?php echo date('F'); ?> Assignments</h2>
    <p>Keep track of your course assignments</p>
    <br>
    </div>
    
<?php 
$i = 0; 
$n = count($students);
	while( $i < $n) {
		?> 
			<div class="assignbar">
			        <div class="assignicon">
			        </div>
			        
			         <div class="assigndesc">
			         	<div class="assigntitle">
			                <h3><?php echo $students[$i]["course_title"]; ?></h3>
			                <h4><?php echo $students[$i]["assignment_title"]; ?></h4>
			            </div>
			             <div class="assignclock">
			            </div>
			            <div class="assigndate">
			           		<h3><?php echo $students[$i]["assignment_duedate"]; ?></h3>
			                <p>1 day, 2 hours, 43 minutes</p>
			            </div>
			            <div class="assignupload">
					<?php echo "<form action=\"submit.php\" method=\"POST\" enctype=\"multipart/form-data\">
			<input type=\"file\" name=\"filename\" id=\"file\">
			<input type=\"hidden\" name=\"id\" value=\"".$students[0]["assignment_id"]."\">
			<input type=\"submit\" value=\"submit\">
			</form>" ?>
			            </div>
			        </div>	
			    </div>
			    <br><br>


		<!-- <td>".$students[$i]["assignment_id"]."</td>
		<td>".$students[$i]["assignment_description"]."</td>
		<td>".$students[$i]["assignment_duedate"]."</td>
		-->
<?php
		$i++;
	};
?>
    <br>
    <br><br> 
</div>


<div id="footer">
</div>


<?php $time = time();
$duedate = strtotime($students[0]["assignment_duedate"]);


// echo "</tbody></table>";
// echo "</div>";
?>