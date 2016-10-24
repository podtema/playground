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

for ($i = 0; $items[$i] = mysql_fetch_assoc($result_items); $i++);	
	array_pop($items);
	// print_r($professors);

echo "<div id=\"page\">";

echo $professors[0]["professor_name"]." ".$professors[0]["professor_lastname"]." (<a href=\"logout.php\">logout</a>)<br>";
echo "<img src=\"".$professors[0]["professor_avatar"]."\" ><br>";
echo "You teach ".$professors[0]["section_title"]."<br><br>";
$time = time();
$duedate = strtotime($professors[0]["assignment_duedate"]);
echo "<div class=\"row\">";
echo "<span class=\"fourth\">Assignments &amp; due dates</span>";
echo "<span class=\"fourth push-right\"><a href=\"add_assignment.php\" class=\"btn btn-round\">Add assignment</a>    </span>";
echo "<span class=\"fourth push-right\"><a href=\"classlist.php\" class=\"btn btn-round\">See class list</a></span>";
echo "</div>";

$i = 0; 
$n = count($professors);
	echo "<table class=\"width-100 bordered\">
	<thead class=\"thead-black\">
		<tr>
			<th>Section</th>
			<th>Assignments</th>
			<th>Due Date</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody><tr>";
	while( $i < $n) {
		echo 
		"<td>".$professors[$i]["section_title"]."</td>
		<td>".$professors[$i]["assignment_description"]."</td>
		<td>";
		echo $professors[$i]["assignment_duedate"]."</td>
		<td><a href=\"edit_assignment.php?id=".$professors[$i]['assignment_id']."\">Edit</a></td>
		</tr>";
		// if ($professors[$i]["assignment_submit"] === "0") {
		// 	echo " <font color=\"red\">Not submitted yet</font> </li>";
		// 	}else{
		// 		echo " Already submitted</li>";
		// 	}
		
		$i++;
	};
	echo "</tbody></table>";
	echo "</div>";

?>