<?php

$page_roles = array('admin');

require_once  'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['EventID'])){
	
$EventID = $_GET['EventID'];	

$query = "SELECT * FROM events where EventID=$EventID";

$result = $conn->query($query); 
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 
		
echo <<<_END
	
	<form action='updateEvent.php' method='post'>

	<pre>
	
	TeamID: <input type='number' name='TeamID' value='$row[TeamID]'>
	TeamName: <input type='text' name='TeamName' value='$row[TeamName]'>
	Opponent: <input type='text' name='Opponent' value='$row[Opponent]'>
	Venue: <input type='text' name='Venue' value='$row[Venue]'>
	Date: <input type='date' name='Date' value='$row[Date]'>
		
	</pre>
		
		<input type='hidden' name='update' value='yes'>
		<input type='hidden' name='EventID' value='$row[EventID]'>
		<input type='submit' value='UPDATE Event'>	
	</form>
	
	<form action="deleteEvent.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="EventID" value="$row[EventID]">
	<input type="submit" value="DELETE RECORD">
	</form>
_END;

}

}


if(isset($_POST['update'])){
	
	$EventID = $_POST['EventID'];
	$TeamID = $_POST['TeamID'];
	$TeamName = $_POST['TeamName'];
	$Opponent = $_POST['Opponent'];
	$Venue = $_POST['Venue'];
	$Date = $_POST['Date'];
	
	$query = "Update events set TeamID='$TeamID', TeamName='$TeamName', Opponent='$Opponent', Venue='$Venue', Date='$Date' where EventID = $EventID ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: events.php?TeamID=$TeamID");
	
	
}

$conn->close();



?>

