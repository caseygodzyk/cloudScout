<!doctype html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css"/>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
	
<link href="jquery-ui.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">

	

		
	<meta charset="utf-8">
	<title>Air Scout</title>
	<style type="text/css">
		select {
			width: 400px;
		}

		#matchInput {
			padding-top:20px;
			width:800px;
			clear: both;
			position: relative;
		}

		#red{
			position: absolute;
			top:20px;
			left: 300px;
		}

		#matchInput input{
			width: 300px
			clear: both;
		}

		#submitMatchInput{
			width:150px;
			margin-top: 20px;
		}

		#submitEventInput{
			width:150px;
			margin-top: 20px;
		}

		#eventInput {
			padding-top:20px;
			width:800px;
			clear: both;
			position: relative;
		}

		#eventInputColumnTwo{
			position: absolute;
			top:20px;
			left: 300px;
		}

		#submitTeamInput{
			width:150px;
			margin-top: 20px;
		}

		#teamInput {
			padding-top:20px;
			width:800px;
			clear: both;
			position: relative;
		}

		#teamInputColumnTwo{
			position: absolute;
			top:20px;
			left: 300px;
		}

		#rankingsTable{
			width: 100%;
			margin-top: 20px;
		}


		
	</style>
</head>

<body>
<div class="container">
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Team Input</a></li>
			<li><a href="#tabs-2">About</a></li>
			<li><a href="#tabs-3"> Event Rankings</a></li>
			<li><a href="#tabs-4">Future Editions</a></li>
		</ul>
		<div id="tabs-1">
			
				<section id="blue">
		<?php

$connection = mysql_connect('localhost', 'amoskeag', 'R@nger70!'); //The Blank string is the password
mysql_select_db('amoskeag_roboscout');

$query = "SELECT * FROM team_data"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo '<table id="example" class="display" cellspacing="0" width="100%"><thead><tr><th>team number</th><th>team name</th><th>event 1</th><th>award</th>
<th>event 2</th><th>award</th><th>event 1</th><th>award</th><th>event 2</th><th>award</th></thead><tbody>

'; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['team_no'] . "</td><td>" . $row['team_name'] . "</td><td>" . $row['2015_ev1'] . "</td><td>" . $row['2015_ev1_award'] . "</td><td>" . $row['2015_ev2'] . "</td><td>" . $row['2015_ev2_award'] . "</td><td>" . $row['2014_ev1'] . "</td><td>" . $row['2014_ev1_award'] . "</td><td>" . $row['2014_ev2'] . "</td><td>" . $row['2014_ev2_award'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</tbody></table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection

?>
				<!---	<label for="blueTeam1" style="color: Blue;">Team Number:</label><br><br>
					<input type="text" name="team_no" id="team_no" required><br><br>
					<label for="blueTeam2" style="color: Blue;">Team Name:</label><br><br>
					<input type="text" name="team_name" id="team_name" required><br><br>
					<label for="blueAuto" style="color: Blue;">2015 Event No1:</label><br><br>
					<input type="text" name="2015ev1" id="2015ev1" required><br><br>
					<label for="blueAuto" style="color: Blue;">2015 Event No1 Award:</label><br><br>
					<input type="text"  name="2015ev1_award" id="2015ev1_award" required><br><br>
					<label for="blueAuto" style="color: Blue;">2015 Event No2:</label><br><br>
					<input type="text"  name="2015ev2" id="2015ev2" required><br><br>
					<label for="blueAuto" style="color: Blue;">2015 Event No2 Award:</label><br><br>
					<input type="text"  name="2015ev2_award" id="2015ev2_award" required><br><br>			
					<label for="blueAuto" style="color: Blue;">2014 Event No1:</label><br><br>
					<input type="text"  name="2014ev1" id="2014ev1" required><br><br>
					<label for="blueAuto" style="color: Blue;">2014 Event No1 Award:</label><br><br>
					<input type="text"  name="2014ev1_award" id="2014ev1_award" required><br><br>
					<label for="blueAuto" style="color: Blue;">2014 Event No2:</label><br><br>
					<input type="text"  name="2014ev2" id="2014ev2" required><br><br>
					<label for="blueAuto" style="color: Blue;">2014 Event No2 Award:</label><br><br>
					<input type="text"  name="2014ev2_award" id="2014ev2_award" required><br><br>
					
					
					--->					
				</section>
				<section id="red">
				<!---
				<p>use the format of <award>-<year><eventcode> ie chairmans-2015nhgsr or ei-2014nhdur <br>
				WIN-2015ctwar, or FIN-2014mabos for winner, finalist respectively.
				use n/a if no award exists</p>
									
									<table>
									<tr><td>event</td><td>code</td></tr>
									<tr><td>granite state</td><td>nhgsr</td></tr>
									<tr><td>UNH</td><td>nhdur</td></tr>
									<tr><td>Waterbury</td><td>ctwat</td></tr>
									<tr><td>Rhode Island</td><td>ride</td></tr>
									<tr><td>Umass Dartmouth</td><td>manda</td></tr>
									<tr><td>Hartford</td><td>cthar</td></tr>
									<tr><td>WPI</td><td>mawpi</td></tr>
									<tr><td>Boston</td><td>mabos</td></tr>
									</table>--->
									</section>
				<label>&nbsp;</label>


								

		</div>
	
		<div id="tabs-2">
		<p>This project is to show which events are the most competitive for certain awards. <br><br>
		Release 1 will contain chairmans, ei, wins and finalists for Northeast events<br><br>
		Release 2 will contain other awards and support for 2016 event data for all events<br><br>
		
		Contributors:
		Casey Godzyk, FRC??<br>
		Josh Miller, FRC229 <br>
		Andrew Valancius, FRC229<br>
		John Seeman, FRC118<br>
		Amanda Clapper, FRC5240<br>
		Adam Brewster, FRC2168<br>

		
		</p>
		</div>
		<div id="tabs-3">
			<p>Event Select Dropdown:</p>
			<select>
				<option selected="selected">Regionals</option>
				<option>New England</option>
				<option>Michigan</option>
				<option>MAR</option>
				<option>Indiana</option>
				<option>PNW</option>
				<option>NC</option>
				<option>Georgia</option>
				<option>Chesapeake</option>
			</select>

			<p>future event rankings will go here to display which events are most difficult</p>

		</div>
		<div id="tabs-4">
					
					<p>feature requests will go here</p>
				</div>
	</div>
</div>
	
	<script src="jquery-ui.js"></script>
	<script src="datatables.js"></script>
	<script>
		$( "#tabs" ).tabs();
		$( ".datepicker" ).datepicker();
		
		function submitted() {
			alert("Database Submission Successful");
		}
	</script>
</body>
</html>