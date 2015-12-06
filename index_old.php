
<!doctype html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css"/>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
	
<link href="jquery-ui.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
		<script type="text/javascript">
		var editor; // use a global for the submit and return data rendering in the examples
		var ecode=<?php echo $ecode; ?>
$(document).ready(function() {
 
 
                $.ajax({
                                                                                                url: 'http://www.thebluealliance.com/api/v2/event/2016nytr/teams?X-TBA-App-Id=frc5240:scouting-system:v0',
                                                                                                type: "GET",
                                                                                                dataType: "json",
                                                                                                complete: function (data_response) {
                                                                                                for(var i = 0; i<data_response.responseJSON.length; i++){
                                                                                                                var row = "";
                                                                                                                row = "<tr>";
                                                                                                                row += "<td>" + data_response.responseJSON[i].team_number +"</td><td>"+ data_response.responseJSON[i].nickname + "</td>";
                                                                                                               
                                                                                                                $.ajax({
                                                                                                                                                url: "http://www.thebluealliance.com/api/v2/team/frc"+ data_response.responseJSON[i].team_number  +"/history/awards?X-TBA-App-Id=frc5240:scouting-system:v0",
                                                                                                                                                type: "GET",
                                                                                                                                                dataType: "json",
                                                                                                                                                async: false,
                                                                                                                                                complete: function (result) {
                                                                                                                                               
                                                                                                                                                for(var c = 0; c< 4; c++){
                                                                                                                                               
                                                                                                                                                                                                                if(!(typeof result.responseJSON[result.responseJSON.length-c-1] === 'undefined')) {
                                                                                                                                                                                                                                                                                row +="<td>" + result.responseJSON[result.responseJSON.length-c-1].event_key + "</td><td>" + result.responseJSON[result.responseJSON.length-c-1].name + "</td>";
                                                                                                                                                                                                                }
                                                                                                                                                                                                                else
                                                                                                                                                                                                                {
                                                                                                                                                                                                                                                                                row +="<td>none</td><td>none</td>";
                                                                                                                                                                                                                }
                                                                                                                                                }
 
                                                                                                                                                                                                               
                                                                                                                                                                                                               
                                                                                                                                                                                                               
                                                                                                                                                }
                                                                                                                                });
                                                                                                                               
                                                                                               
                                                                                                                                                                $( "#tableBody" ).append(row+"</tr>");
                                                                                                }
                                                                                                                                $('#example').DataTable( {
                                                                                                                                 "scrollX": true
                                                                                                                                                });
                                                                                                }
                                                                                               
                                });
                               
 
                               
} );
		
		
		
		
		
		</script>


	

		
	<meta charset="utf-8">
	<title>FRC Awards Research</title>
	
</head>

<body>
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Granite State</a></li>
			<li><a href="#tabs-2">About</a></li>
			<li><a href="#tabs-3"> Feature Requests</a></li>
		
		</ul>
		<div id="tabs-1">
			<div class="container">

				<section id="blue">
		<table id="example" class="display" cellspacing="0" width="100%"><thead><tr><th>number</th><th>name</th><th>event</th><th>award</th><th>event</th><th>award</th><th>event</th><th>award</th><th>event</th><th>award</th></tr></thead><tbody id="tableBody"></tbody></table>
		</div>
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
		<p>
		
		Contributors:<br>
		Casey Godzyk, FRC??<br>


		
		</p>
		</div>
		<div id="tabs-3">
		<p>This project is to show which events are the most competitive for certain awards. <br><br>
		Release 1 will contain awards for events weeks 1-6<br><br>
		
			<p>For feature requests, email kcgodzyk@gmail.com with idea</p>
		<form action="">
		<input type="checkbox" name="vehicle" value="2016nhgrs">NE District - Granite State District Event<br>
		<input type="checkbox" name="vehicle" value="2016manda">NE District - UMass Dartmouth <br>
		<input type="checkbox" name="vehicle" value="2016nytr">NY Tech Valley Regional<br>
		<input type="checkbox" name="vehicle" value="2016njfla">MAR District - Mt. Olive Event<br>
		</form>
		</div>
		
	</div>

	
	<script src="jquery-ui.js"></script>
	<script>
		$( "#tabs" ).tabs();
		$( ".datepicker" ).datepicker();
		
		function submitted() {
			alert("Database Submission Successful");
		}
	</script>
</body>
</html>