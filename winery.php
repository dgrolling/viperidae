<!DOCTYPE html>
<html>
	<head>
		<title>Sugarloaf Winery</title>
		<link href="layout.css" rel="stylesheet" type="text/css" media="screen"/>
		<link href="content.css" rel="stylesheet" type="text/css" media="screen"/>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>The Maryland Monadnock<br><small><small>Sugarloaf Rock Winery</small></small></h1>
			</div>
						
			<div id="nav">
				<a href="index.html">Introduction</a>
				<a href="routes.html">Routes</a>
				<a href="trails.html">Trails</a>
				<a href="winery.html">Winery</a>
				<a href="contact.html">Contact</a>
			</div>
				
			<div id="content">
				<h3>Sugarloaf Winery Awards</h3>
				
				<?php
				
				require_once("db.php");
				
				// This could be supplied by a user, for example
				
				//$level = 'level';
				//$year = 'year';
				//$name = 'name';
				//$award = 'award';
				
				//$level = $_POST['level'];
				//$year  = $_POST['year'];
				$name  = $_POST['name'];
				//$award  = $_POST['award'];

				
				// Formulate Query
				
				$query = ("SELECT level, year, name, award FROM wineawards WHERE name = '$name'"); 
				
				// Perform Query
				$result = mysql_query($query);	
				
				// Check result
				if (!$result) {
				    $message  = 'Invalid query: ' . mysql_error() . "\n";
				    $message .= 'Whole query: ' . $query;
				    die($message);
				}
				?>
				
				<table id="searchResult">
					<tr>
						<th>Level</th>
						<th>Year</th>
						<th>Name</th>
						<th>Award</th>
					</tr>
				
				<?php
					while($row = mysql_fetch_array($result)){
						echo "<tr>";
						echo "<td>"	. $row['level'] . "</td>";
						echo "<td>"	. $row['year'] . "</td>";
						echo "<td>"	. $row['name'] . "</td>";
						echo "<td>"	. $row['award'] . "</td>";
						echo "</tr>";
					}
				?>
				
				</table>
				
				<p><i><small>Want another selection? <a href='winery.html'>Back</a></i></small></p>

			</div>
				
			<div id="footer">
				<p>&copy; Dave Grolling</p>
			</div>				
		</div>
	</body>
</html>