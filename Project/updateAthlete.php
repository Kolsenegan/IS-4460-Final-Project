<?php

$page_roles = array('admin');

require_once  'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['AthleteID'])){
	
$AthleteID = $_GET['AthleteID'];	

$query = "SELECT * FROM athlete where AthleteID=$AthleteID";

$result = $conn->query($query); 
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 
		
echo <<<_END
	
	<form action='updateAthlete.php' method='post'>

	<pre>
	
	TeamID: <input type='number' name='TeamID' value='$row[TeamID]'>
	Name: <input type='text' name='Name' value='$row[Name]'>
	Class: <input type='text' name='SchoolYear' value='$row[SchoolYear]'>
	Hometown: <input type='text' name='Hometown' value='$row[Hometown]'>
		
	</pre>
		
		<input type='hidden' name='update' value='yes'>
		<input type='hidden' name='AthleteID' value='$row[AthleteID]'>
		<input type='submit' value='UPDATE ATHLETE'>	
	</form>
	
	<form action="deleteAthlete.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="AthleteID" value="$row[AthleteID]">
	<input type="submit" value="DELETE RECORD">
	</form>
_END;

}

}


if(isset($_POST['update'])){
	
	$AthleteID = $_POST['AthleteID'];
	$TeamID = $_POST['TeamID'];
	$Name = $_POST['Name'];
	$SchoolYear = $_POST['SchoolYear'];
	$Hometown = $_POST['Hometown'];
	
	$query = "Update athlete set TeamID='$TeamID', Name='$Name', SchoolYear='$SchoolYear', Hometown='$Hometown' where AthleteID = $AthleteID ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: roster.php?TeamID=$TeamID");
	
	
}

$conn->close();



?>