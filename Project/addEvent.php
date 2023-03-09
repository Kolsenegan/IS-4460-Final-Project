<?php

$page_roles = array('admin');

require_once 'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<form action="addEvent.php" method="post"<pre>
	
	TeamID <input type="number" name="TeamID"></br></br>
	TeamName <input type="text" name="TeamName"></br></br>
	Opponent <input type="text" name="Opponent"></br></br>
	Venue <input type="text" name="Venue"></br></br>
	Date <input type="date" name="Date"></br></br>
	
	
	<input type="submit" name="ADD Event">
	</br></br>
	<a href='logout.php'>Logout</a>	
	<a href="programportal.php" >Return to Program Portal</a>	
</pre></form>
_END;


if(	isset($_POST['TeamID']) &&
	isset($_POST['TeamName']) &&
	isset($_POST['Opponent']) &&
	isset($_POST['Venue']) &&
	isset($_POST['Date'])) {
		//$AthleteID=get_post($conn, 'AthleteID');
		$TeamID=get_post($conn, 'TeamID');
		$TeamName=get_post($conn, 'TeamName');
		$Opponent=get_post($conn, 'Opponent');
		$Venue=get_post($conn, 'Venue');
		$Date=get_post($conn, 'Date');
		
		$query="INSERT INTO events (TeamID, TeamName, Opponent, Venue, Date) VALUES ".
			"('$TeamID','$TeamName','$Opponent', '$Venue', '$Date')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
			
}


$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>