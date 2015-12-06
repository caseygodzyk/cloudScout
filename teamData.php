<?php
	$teamno = $_GET['team_no'];
	$teamname = $_GET['team_name'];
	$15ev1 = $_GET['2015ev1'];
	$15ev2 = $_GET['2015ev2'];
	$14ev1 = $_GET['2014ev1'];
	$14ev2 = $_GET['2014ev2'];
	$14ev2_award = $_GET['2014ev2_award'];
	$14ev1_award = $_GET['2014ev1_award'];
	$15ev1_award = $_GET['2015ev1_award'];
	$15ev2_award = $_GET['2015ev2_award'];

	
	$mysqli = new mysqli("localhost", "amoskeag", "R@nger70!", "amoskeag_roboscout");
	//if (!$mysqli) {die ("Can not connect to  data base.");}
	
	//$query = "select count(id) rank, number, name, wins, losses from Rankings order by rank asc;";
	//$Result = $mysqli->query($query) or die ("Can not fetch the data.");
	
	//$prevId;
	//$prevWins;
	//$prevLosses;
/*	
	if ($match != "null") {
		while ($Arr = $Result->fetch_array(MYSQLI_ASSOC)) {
				if ($Arr['name'] == $blue1) {
					//// Calculate rank and W/L ////
					$newRank = 1;
					$newWins = 1;
					$newLosses = 1;
					///////////////////////////////
					
					$id = $Arr['id'];
					$query = "update Rankings rank='$newRank', wins='$newWins', losses='$newLosses' where id=$id;"
				}
				if ($Arr['name'] == $blue2) {
					//// Calculate rank and W/L ////
					$newRank = 1;
					$newWins = 1;
					$newLosses = 1;
					///////////////////////////////
					
					$id = $Arr['id'];
					$query = "update Rankings rank='$newRank', wins='$newWins', losses='$newLosses' where id=$id;"
				}
				if ($Arr['name'] == $red1) {
					//// Calculate rank and W/L ////
					$newRank = 1;
					$newWins = 1;
					$newLosses = 1;
					///////////////////////////////
					
					$id = $Arr['id'];
					$query = "update Rankings rank='$newRank', wins='$newWins', losses='$newLosses' where id=$id;"
				}
				if ($Arr['name'] == $red2) {
					//// Calculate rank and W/L ////
					$newRank = 1;
					$newWins = 1;
					$newLosses = 1;
					///////////////////////////////
					
					$id = $Arr['id'];
					$query = "update Rankings rank='$newRank', wins='$newWins', losses='$newLosses' where id=$id;"
				}
				$prevId = $Arr['id'];
				$prevWins = $Arr['wins'];
				$prevLosses = $Arr['losses'];
		}
	}
	else { */
		$query = "insert into team_data (team_no, team_name, 2015_ev1, 2015_ev1_award, 2015_ev2,2015_ev2_award, 2014_ev1,2014_ev1_award, 2014_ev2,2014_ev2_award) values ('$teamno', '$teamname', '$15ev1','$15ev1_award', '$15ev2','$15ev2_award', '$14ev1','$14ev1_award', '$14ev2','$14ev2_award');";
		$mysqli->query($query);
			//$mysqli->close();
			//die ("Sorry, can not update database. \nAn error occurred.<br />$query");
		
	///}
	///$mysqli->close();

	header("location: http://cgodzyk.com/scout")

?>