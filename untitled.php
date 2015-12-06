<?php
$nhgrs1 = $_GET["2016nhgrs"];
$manda1 = $_GET["2016manda"];
$nytr1 = $_GET["2016nytr"];
$njfla1 = $_GET["2016njfla"];

echo $nhgrs1;
<html>
<form action="untitlted.php">
<input type="checkbox" name="vehicle" value="2016nhgrs">NE District - Granite State District Event<br>
<input type="checkbox" name="vehicle" value="2016manda">NE District - UMass Dartmouth <br>
<input type="checkbox" name="vehicle" value="2016nytr">NY Tech Valley Regional<br>
<input type="checkbox" name="vehicle" value="2016njfla">MAR District - Mt. Olive Event<br>
      			<input type="submit" value="Submit">

</form>


</html>
?>