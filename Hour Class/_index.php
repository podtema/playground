<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>HourClass - Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Wendy+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
    

    
<?php 
		
for ($i = 0; $students[$i] = mysql_fetch_assoc($result_student); $i++); 
    array_pop($students);
    
		

$starttime = strtotime($students[0]["term_start"]);
$endtime = strtotime($students[0]["term_end"]);
$ad = strtotime($students[0]["assignment_duedate"]);
$aid = $students[0]["assignment_id"];
$me = $students[0]["assignment_id"];
$cur = time();
$mnt = date("n");
$tay = date("o");
$wek = date("N", $starttime);
$curmnth = date("n", $starttime);
$curstrtdate = date("j", $starttime);
$curenddate = date("j", $endtime);
$main = mktime(0, 00, 00, 1, 7, 2013);
$view = date("n");

$fmnth = $curmnth + 0;
$smnth = $curmnth + 1;
$tmnth = $curmnth + 2;
$frmnth = $curmnth + 3;

$viewmnth = array("Null","Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");


$mnt1 = mktime(00, 00, 00, $fmnth, 1, $tay);
$mnt2 = mktime(00, 00, 00, $smnth, 1, $tay);
$mnt3 = mktime(00, 00, 00, $tmnth, 1, $tay);
$mnt4 = mktime(00, 00, 00, $frmnth, 1, $tay);



$weekmnth1 =  (7 - date("N" , $mnt1)) + 1;
$weekmnth2 = (7 - date("N" , $mnt2)) + 1;
$weekmnth3 = (7 - date("N" , $mnt3)) + 1;
$weekmnth4 = (7 - date("N" , $mnt4)) + 1;


$endweekmnth1 = $weekmnth1 + 7;
$endweekmnth2 = $weekmnth2 + 7;
$endweekmnth3 = $weekmnth3 + 7;
$endweekmnth4 = $weekmnth4 + 7;

$first = cal_days_in_month(CAL_GREGORIAN, $fmnth, $tay);
$sec = cal_days_in_month(CAL_GREGORIAN, $smnth, $tay);
$third = cal_days_in_month(CAL_GREGORIAN, $tmnth, $tay);
$fourth = cal_days_in_month(CAL_GREGORIAN, $frmnth, $tay);



?>
<script>
var count, timer, start, end, ad, sdiffer, ediffer, differ, wi, please, nowmnth, curmnth, dinmnth, sp, ep, curstrtdate, curenddate, main, weeks, firstsun, view, test, timeline, curweekmnth, calleft, newdate, url, sand, fnod, snod, tnod, frnod, monthcheck, assignment, assignment1, mcount, numweeks, i, weekn, weeknum, weekbol, weeklength, addweek, addbol, ckeckweek, numsix, dayline, daymark, dayspace, fweekspace, weekmarks, mnthmarks, idnum, seemonth, assign;
var namemnth = new Array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");




function init() {
	
	
	start = <?php echo $starttime ?>;
	end = <?php echo $endtime ?>;
	ad = <?php echo $ad ?>;
	assign = "assign";
	
	nowmnth = <?php echo $curmnth ?>;
	count = 0;	
	timeline = document.getElementById("timeline");
	curmnth = nowmnth + count;
	dinmnth = <?php echo cal_days_in_month(CAL_GREGORIAN, $curmnth, $tay) ?>;
	timer = setInterval(up,100);
 	please = document.getElementById("cum");
	curstrtdate = <?php echo $curstrtdate ?>;
	curenddate = <?php echo $curenddate ?>;
	sp = "00";
	ep ="00";
	main = <?php echo $main ?>;
	weeks = document.getElementById("weeks");
	view = (<?php echo $view ?> - 1);
	test = document.getElementById("cur2");
	weekbol = false;
	dayspace = document.getElementById("daymark");
	var xmlHttp;
	sand = document.getElementById("currenttime");
	
		
	
	fnod = document.getElementById("fm");
	snod = document.getElementById("sm");
	tnod = document.getElementById("tm");
	frnod = document.getElementById("frm");
	numweeks=0;
	addweek = 1;
	weekn = 0;
	addbol = false;
	numsix = 0;
	daymark = 0
	idnum = 0;
	assignment1 = assign + <?php echo $aid ?>;	
	assignment = document.getElementById(assignment1);
	
	
	
	fweekspace = 0;
	monthcheck = document.getElementById("monthname");
	
	dayline = 0;
	weekmarks = document.getElementById("dm");
	mnthmarks = document.getElementById("mm");
	
	//--------------------------------------------------calculate number of weeks in given term is   7*24*60*60 = 604800---//
	numweeks = Math.floor((end - start)/604800);
	//-------------------------calculate how much % each week gets------------------//
	weeklength = Math.floor(100/numweeks);
	
	
	//------------setting weeks on timeine--------------------//
	i = 1;
	for(i=1; i<=numweeks; i++) {
		weeks.innerHTML += "<div id=" + i + " class=" + "wee" + " onClick=" + "weekbut(event)" + "> week" + i + "</div>";
		var week = document.getElementById(i);
		week.style.width = weeklength + "%";
		week.style.float = "left";
		
	}
	
	
	
		
		
	
	
	
	
	
}



function weekbut(e) {
	if(addbol == false) {
	
	e.preventDefault();
	weekn = Number(e.target.id);
	weekbol=true;
	weekmarks.style.display = "block";
	mnthmarks.style.display = "none";
	}
	
	
}
//---------------------for MONTHS SWITCHS on right corner---------------//
mcount = 0;

function month(mcount) {
	weekn=1;
	view = mcount;	
	weekbol = false;
	addbol = false;
	addweek = 1;
	weekmarks.style.display = "none";
	mnthmarks.style.display = "block";
}


///----------------------FOR NEXT AND PREVIOUS BUTTONS --------------//

function next() {
	
	if (view < 3 && weekbol == false) {
		view++;
	} else if (view == 4 && weekbol == false) {
		view == 3;
	} else if(weekbol == true && weekn < numweeks && addbol == false) {
		weekn++;
		
	} else if(weekbol == true && weekn >= numweeks && addbol == false) {
		weekn = numweeks;
	} else if(addbol == true && numsix < 14) {
		weekn++;		
	} 
}
function pre() {
	if (view > 0 && weekbol == false) {
		view--;
	} else if (view == -1 && weekbol == false) {
		view == 0;
	} else if(weekbol == true && weekn > 1 && weekn <= numweeks) {
		weekn--;
		
	} else if(weekbol == true && weekn < 1) {
		weekn = 1;
	}
	
}



//------------for adding and subtract buttons--------------//

function addt() {
	
	if(weekbol == true && addweek < ckeckweek) {
	addweek++;	
	addbol = true;
	weekmarks.style.display = "none";
	
	} else if(addweek == ckeckweek) {
		addweek = ckeckweek;
		addbol = true;
		weekmarks.style.display = "none";
	} else if(weekbol == false) {
		addbol = false;
	}
	
	
	numsix++;
}

function subt() {
	if(weekbol == true && addweek > 1) {
	addweek--;
	addbol = true;	
	} else if(addweek == 1) {
		weekmarks.style.display = "block";
		addweek=1;		
		addbol = true;
		
	}else if(weekbol == false) {
		weekmarks.style.display = "block";
		addbol = false;
	}
	numsix--;
}

function clickme() {
	please.innerHTML = "kill me";
}

		
function up() {
	numsix = (weekn+addweek)-1;
	ckeckweek =(numweeks - weekn) + 1;
	if (ckeckweek > 5) {
		ckeckweek = 6;
	} 
	
	//---------to check any result or values passed-------------//
	
	//please.innerHTML = addweek;
	
//------------setting different stages for four different months ---------------//

if (weekbol == false) {

if (view == 0) {
	
	count = 0;
	curmnth = nowmnth + count;
	dinmnth = <?php echo $first ?>;
	firstsun = <?php echo date("N" , $starttime) ?>;
	fweekspace = (1-firstsun) * 24*60*60;
	sp = start + fweekspace;
	ep = <?php echo mktime(23, 59, 59, $fmnth, $first, $tay) ?>;
	
	fnod.src= "images/switch_a.png";
	
		
} else {
	fnod.src= "images/switch.png";
}
if (view == 1) {
	
	count = 1;
	curmnth = nowmnth + count;
	dinmnth = <?php echo $sec ?>;
	sp = <?php echo mktime(00, 00, 00, $smnth, 1, $tay) ?>;
	ep = <?php echo mktime(23, 59, 59, $smnth, $sec, $tay) ?>;
	
	snod.src= "images/switch_a.png";
		
} else {
	snod.src= "images/switch.png";
}
if (view == 2) {
	count = 2;
	curmnth = nowmnth + count;
	dinmnth = <?php echo $third ?>;
	sp = <?php echo mktime(00, 00, 00, $tmnth, 1, $tay) ?>;
	ep = <?php echo mktime(23, 59, 59, $tmnth, $third, $tay) ?>;
	tnod.src= "images/switch_a.png";
		
} else {
	tnod.src= "images/switch.png";
}
if (view == 3) {
	count = 3;
	curmnth = nowmnth + count;
	dinmnth = <?php echo $fourth ?>;
	sp = <?php echo mktime(00, 00, 00, $frmnth, 1, $tay) ?>;
	ep = end;
	frnod.src= "images/switch_a.png";
		
} else {
	frnod.src= "images/switch.png";
}


	//----------------interms of months--------------//
	
	differ = ep - sp;
	wi = (100/differ);
	calleft = ((start - sp) * wi);
	TweenMax.to(weeks, 0.1, {css:{width: numweeks*604800*wi + "%"}, ease:Linear.easeNone});
	
} else if (weekbol == true && addbol == false) {
	
	
	//--------------interms of week view-----------//
	
	sp = start + ((weekn-1)*604800);
	ep = (sp + 604800);
	differ = 604800;
	wi = (100/differ);
	
	//-----number 98.2390 derived from the width-----------//
	calleft = (98.2390)*(1-weekn);
	TweenMax.to(weeks, 0.1, {css:{width: numweeks*100 + "%"}, ease:Linear.easeNone});
}
 else if (weekbol == true && addbol == true) {
	
	
	//--------------interms of more week view-----------//
	
	sp = start + ((weekn-1)*604800);
	ep = sp + (604800*addweek);
	differ = ep-sp;
	wi = (100/differ);
	
	//-----number 98.2390 derived from the width-----------//
	calleft = ((98.2390)*(1-weekn))/addweek;
	TweenMax.to(weeks, 0.1, {css:{width: (numweeks*100)/addweek + "%"}, ease:Linear.easeNone});
}

	//-------setting different nmbers for different months-----------//
	
	
	sdiffer = sp;	
	ediffer = ep;	
	
	 dayline = Math.round(((((ep-sp)/60)/60)/24));
	
	
	
	//-----------------for setting width and left vales for week markers-------------//
	
	
	//-----------------------count width for 14 weeks = numweeks*7*24*60*60 = 604800 ------//
	
	
	TweenMax.to(weeks, 0.1, {css:{left: calleft + "%"}, ease:Linear.easeNone});
	
	

	
	
	
	
//--------------for making ASSIGNMENT makers on timeline --------------------MARKERS------------------------//
	
	if (ad <= ep && ad > sp) {
		assignment.innerHTML = "<div onClick=" + "clickme()" + " ><img src=" + "'images/grey_markerfull.png'" + "/></div>";
		assignment.style.left = (differ - (ediffer - ad)) * wi + "%";
	} else if (ad > ep) {
		assignment.innerHTML = "";
	} else if (ad <= sp) {
		assignment.innerHTML = "";
	}
	
	
//-------------------for CURRENT TIME where SAND is variable for current time----------------------//


if (newdate <= ediffer && newdate >= sdiffer) {
		
		sand.style.width = (differ - (ediffer - newdate)) * wi + "%";
		
} else if (newdate > ediffer && newdate >= sdiffer) {
		
		sand.style.width = 98.5 + "%";
		
}  else if (newdate <= sdiffer) {		
		sand.style.width = 0 + "%";	
		
}

	

	
//-----------------------------to display name of selected month------------------------//
	if(weekbol == false) {
		monthcheck.innerHTML = namemnth[curmnth];
	} else if (weekbol == true) {
		monthcheck.innerHTML = "";		
	}
	
//------------------AJAX for getting new time every 0.1 second ---------------//

	xmlHttp=GetXmlHttpObject();
	
	if (xmlHttp==null) {
 	alert ("Browser does not support HTTP Request");
 	return;
 	}
	var url="time.php";
	xmlHttp.onreadystatechange=stateChanged;
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)


	
}
function stateChanged() { 
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
	newdate = xmlHttp.responseText;
	//the Javascript calculations for displaying the date properly should go here, working off of the newdate value
 } 
}

	function GetXmlHttpObject() {
	xmlHttp=null;
	try
 	{
 // Firefox, Opera 8.0+, Safari
 	xmlHttp=new XMLHttpRequest();
 	}
	catch (e)
	 {
 //Internet Explorer
 	try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
	return xmlHttp;
}




</script>
 
</head>

<body onLoad="init()">
  
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
      <p>Today is <?php echo date('l, F j, Y'); ?></p><div id="cum"> </div>
        <br>
    </div>
    <div class="nod">
    <div id="butlab">
   <span id="space" class="space"><?php echo $viewmnth[$fmnth] ?></span><span class="space"><?php echo $viewmnth[$smnth] ?></span><span class="space"><?php echo $viewmnth[$tmnth] ?></span><span class="space2"><?php echo $viewmnth[$frmnth] ?></span>
    </div>   
    <div id="butnods">
    <button id="fmonth" onClick="month(0)" class="mclick"><img id="fm" src="images/switch.png" alt="node switch" /></button><button onClick="month(1)" id="smonth" class="mclick"><img id="sm" src="images/switch.png" alt="node switch" /></button><button id="tmonth" onClick="month(2)" class="mclick"><img id="tm" src="images/switch.png" alt="node switch" /></button><button id="frmonth" onClick="month(3)" class="mclick"><img id="frm" src="images/switch.png" alt="node switch" /></button>
    </div>
    </div>
    
    
    <div id="timeline2">
    
    <div id="main">
<div class="move" onClick="pre()" id="leftarrow"><img src="images/left_arrow.png" alt="left aroow img" /></div>

<div id="viewport" class="viewport">
<div id="monthname">Month</div>

<div id="weekview"><div id="weeks"></div></div>



<div id="timeline">
		
    	<div id="currenttime"></div>
        <div id="daymark"><img id="dm" src="images/day_marks.png" /><img src="images/mnth_marks.png" id="mm" /></div>
        <div id="markerspace">
        
        <div class="marker"></div>
        
        <?php 
	$i = 0;
	$n = count(array_unique($students));

	while ($i < $n) {
	$menu[$i] = ($students[$i]["assignment_title"]);
	$i++;
	}
	$menu_i = array_unique($menu);
	$n = count($menu);

	$i = 0;
	$n = count($menu_i);
	while ($i < $n){

	
	echo "<div class=\"assign\" id=\"assign".$students[$i]["assignment_id"]."\"></div>";
	$i++;
	

	};
	?>
        
      
        </div>  
       
        
        
</div>
</div>
<div class="move" onClick="next()" id="rightarrow"><img src="images/right_arrow.png" alt="right arrow img" /></div>
</div>
<div id="zoombut"><div class="zoom" onClick="subt()" id="zoomout"><img src="images/minus_icon.png" alt="zoom minus buttons" /></div><div class="zoom" onClick="addt()" id="zoomin"><img src="images/plus_icon.png" alt="zoom plus buttons" /></div></div>

    </div>
        
    
<div id="courselegend">
            <ul>
    <?php 
	$i = 0;
	$n = count(array_unique($students));

	while ($i < $n) {
	$menu[$i] = ($students[$i]["course_title"]);
	$i++;
	}
	$menu_i = array_unique($menu);
	$n = count($menu);

	$i = 0;
	$n = count($menu_i);
	while ($i < $n){


	echo "<li><a href=\"#\">".$students[$i]["course_title"]."</a></li>";
	$i++;

	// }

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

	while ($i < $n) {
	$menu[$i] = ($students[$i]["course_title"]);
	$i++;
	}
	$menu_i = array_unique($menu);
	$n = count($menu);

	$i = 0;
	$n = count(array_unique($students));
	while ($i < $n){
		?>

    <div class="assignbar">

        <div class="assignicon">
        <img src="images/<?php echo $students[$i]["course_color"]; ?>" alt="Course">
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
                <p class="assigndatespace"><?php 
                $time_left = strtotime($students[$i]["assignment_duedate"])-$cur;
                if ($time_left < 0) {
                	echo "YOU'RE DEAD";
                }else{
                	$hours_left = (($time_left/3600/24)-(floor($time_left/3600/24)))*24;
                	if ($hours_left < 1) {
                		$hours_left = 0;
                		$minutes_left =  floor(((($time_left/3600/24)-(floor($time_left/3600/24)))*24)*60);
                	}
                echo  floor($time_left/3600/24)." days, ".floor($hours_left)." hours and ".$minutes_left." minutes";
                
                 } ?></p>
            </div>
            <div class="assignupload">
           <a href="_submit.php" onclick="javascript:void window.open('_submit.php?id=<?php echo $students[$i]["assignment_id"]; ?>','1366747195445','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><img src="images/upload.png" alt="Upload Assignment"></a>
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
<img src="images/footer.jpg" alt="footer img" />
</div>
</div>

    <?php $time = time();
$duedate = strtotime($students[0]["assignment_duedate"]);


// echo "</tbody></table>";
// echo "</div>";
?>
</body>
<script src="js/timeline.js"></script>
</html>
