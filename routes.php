<!DOCTYPE html>
<html>
	<head>
		<title>Sugarloaf Climbing</title>
		<link href="layout.css" rel="stylesheet" type="text/css" media="screen"/>
		<link href="content.css" rel="stylesheet" type="text/css" media="screen"/>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>The Maryland Monadnock<br><small><small>Sugarloaf Rock Climbing</small></small></h1>
			</div>
						
			<div id="nav">
				<a href="index.html">Introduction</a>
				<a href="routes.html">Routes</a>
				<a href="trails.html">Trails</a>
				<a href="winery.html">Winery</a>
				<a href="contact.html">Contact</a>
			</div>
				
			<div id="content">
				<h3>Rock Climbing at Sugarload Mountain</h3>
				
				<?php
				
				require_once("dbclimb.php");
				
				// This could be supplied by a user, for example
				
				//$area  = $_POST['area'];
				//$area = 'area';
				//$grade = 'grade';
				$lengthft = 'lengthft';
				$grade  = $_POST['grade'];
				//$lengthft  = $_POST['lengthft'];
				$rtename  = 'rtename';
				$descrip  = 'descrip';
				$type = 'type';

				// Formulate Query
					
				$query = ("SELECT area, rtename, grade, descrip, lengthft, type FROM climbroutes WHERE (grade = '$grade')"); 

				
				// Perform Query
				$result = mysql_query($query);
				
				// Check result
				// This shows the actual query sent to MySQL, and the error Useful for debugging
				if (!$result) {
				    $message  = 'Invalid query: ' . mysql_error() . "\n";
				    $message .= 'Whole query: ' . $query;
				    die($message);
				}
				?>
				
				<table id="searchResult">
					<tr>
						<th>Area</th>
						<th>Name</th>
						<th>Grade</th>
						<th>Description</th>
						<th>Length</th>
						<th>Type</th>
					</tr>
				
				<?php
					while($row = mysql_fetch_array($result)){
						echo "<tr>";
						echo "<td >"	. $row["area"] . "</td>";
						echo "<td>"	. $row["rtename"] . "</td>";
						echo "<td>"	. $row["grade"] . "</td>";
						echo "<td id='arearow'>"	. $row["descrip"] . "</td>";
						echo "<td>"	. $row["lengthft"] . "</td>";
						echo "<td>"	. $row["type"] . "</td>";
						echo "</tr>";
					}
				?>

				</table>
				<p><i><small>Need different beta? <a href='routes.html'>Back</a></i></small></p>
				
			</div>
				
			<div id="footer">
				<p>&copy; Dave Grolling</p>
			</div>				
		</div>
	</body>
</html>