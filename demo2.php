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
	<title>FRC Awards Research</title>
	
</head>

<body>
	<div id="tabs">
		<ul>
			<li><a href="#tabs-1">Home</a></li>
			<li><a href="#tabs-2">About</a></li>
			<li><a href="#tabs-3"> Feature Requests</a></li>
		
		</ul>
		<div id="tabs-1">
			<div class="container">

				<section id="blue">
				<?php
				$json=file_get_contents("http://www.cgodzyk.com/scout/testing.php");
$data =  json_decode($json);

//var_dump($data);
echo "<table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\">
           <thead><tr><th>team</th><th>high</th><th>mid</th><th>low</th><th>def</th></tr></thead><tbody>";

foreach($data as $object){ ?>

           <tr>
                <td><?php echo $object->{'team'}?></td>
                <td><?php echo $object->{'high'}?></td>
                <td><?php echo $object->{'mid'}?></td>
                <td><?php echo $object->{'low'}?></td>
                <td><?php echo $object->{'def'}?></td>

            </tr>

<?php  } ?>
    <?php  echo "</tbody></table>";
?>
				
				
				
		</div>
								
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
			<script type="text/javascript">
		var editor; // use a global for the submit and return data rendering in the examples
$(document).ready(function() {
    $('#example').DataTable();
} );
		
		
	</script>
	<script>
		$( "#tabs" ).tabs();
		$( ".datepicker" ).datepicker();
		
		function submitted() {
			alert("Database Submission Successful");
		}
	</script>
</body>
</html>