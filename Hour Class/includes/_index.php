<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>HourClass - Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

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
        <a href="index.html"><img src="images/hourclass.png" alt="HourClass - Online student portal"></a>
        </div>
        
        <div id="dpicture">
            <?php echo "<img src=\"".$students[0]["student_avatar"]."\" width=\"53\">"; ?>
        </div>
        <div id="dname">
        <span class="bold topdropshadow"><?php echo $students[0]["student_name"]; ?> <?php echo $students[0]["student_lastname"]; ?></span><br>
        <span class="topdropshadow"><?php echo $students[0]["section_title"]; ?></span>
        </div>
        
        <div id="navigation">
            <ul>
                <li><a href="#"><img src="images/dash_icon.png" alt="Dashboard">Dashboard</a></li>
                <li><a href="#"><img src="images/mail_icon.png" alt="Messages">Messages</a></li>
                <li><a href="#"><img src="images/courses_icon.png" alt="Assignments">Assignments</a></li>
                <li><a href="#"><img src="images/settings_icon.png" alt="Settings">Settings</a></li>
                <li><a href="#"><img src="images/help_icon.png" alt="Help Center">Help Center</a></li>
                <li><a href="logout.php"><img src="images/logout_icon.png" alt="Log Out">Log Out</a></li>
            </ul>
        </div>
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
        <img src="images/yellow_course.png" alt="Course">
        </div>
        
         <div class="assigndesc">
            <div class="assigntitle">
                <h3><?php echo $students[$i]["course_title"]; ?></h3>
                <h4><?php echo $students[$i]["assignment_title"]; ?></h4>
            </div>
             <div class="assignclock">
             <img src="images/clock.png" alt="Clock">
            </div>
            <div class="assigndate">
                <h3><h3><?php echo $students[$i]["assignment_duedate"]; ?></h3></h3>
                <p class="assigndatespace">1 day, 2 hours, 43 minutes</p>
            </div>
            <div class="assignupload">
            <img src="images/upload.png" alt="Upload Assignment">
            </div>
        </div>  
 
    </div>
    <br><br>
    
      <?php
        $i++;
    };
?> 
    <br>
    
</div>


<div id="footer">
</div>
</div>

    <?php $time = time();
$duedate = strtotime($students[0]["assignment_duedate"]);


// echo "</tbody></table>";
// echo "</div>";
?>
</body>
</html>
