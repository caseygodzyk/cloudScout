<?php

$connection = mysql_connect('localhost', 'amoskeag', 'R@nger70!'); //The Blank string is the password
mysql_select_db('amoskeag_roboscout');

$query = "SELECT * FROM team_data"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['team_no'] . "</td><td>" . $row['team_name'] . "</td><td>" . $row['2015_ev1'] . "</td><td>" . $row['2015_ev1_award'] . "</td><td>" . $row['2015_ev2'] . "</td><td>" . $row['2015_ev2_award'] . "</td><td>" . $row['2014_ev1'] . "</td><td>" . $row['2014_ev1_award'] . "</td><td>" . $row['2014_ev2'] . "</td><td>" . $row['2014_ev2_award'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

mysql_close(); //Make sure to close out the database connection

?>