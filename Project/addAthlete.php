<?php

$page_roles = array('admin');

require_once 'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<form action="addAthlete.php" method="post"<pre>
	
	TeamID <input type="number" name="TeamID"></br></br>
	Name <input type="text" name="Name"></br></br>
	SchoolYear <input type="text" name="SchoolYear"></br></br>
	Hometown <input type="text" name="Hometown"></br></br>
	
	
	<input type="submit" name="ADD ATHLETE">
	</br></br>
	<a href='logout.php'>Logout</a>	
	<a href="programportal.php" >Return to Program Portal</a>	
</pre></form>
_END;


if(	isset($_POST['TeamID']) &&
	isset($_POST['Name']) &&
	isset($_POST['SchoolYear']) &&
	isset($_POST['Hometown'])) {
		//$AthleteID=get_post($conn, 'AthleteID');
		$TeamID=get_post($conn, 'TeamID');
		$Name=get_post($conn, 'Name');
		$SchoolYear=get_post($conn, 'SchoolYear');
		$Hometown=get_post($conn, 'Hometown');
		
		$query="INSERT INTO athlete (TeamID, Name, SchoolYear, Hometown) VALUES ".
			"('$TeamID','$Name','$SchoolYear','$Hometown')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
			
}


$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>