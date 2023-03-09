<?php

$page_roles = array('admin');

require_once  'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['TeamID'])){
	
$TeamID = $_GET['TeamID'];	

$query = "SELECT * FROM team where TeamID=$TeamID";

$result = $conn->query($query); 
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 
		
echo <<<_END
	
	<form action='updateTeam.php' method='post'>

	<pre>
	
	Teamname: <input type='text' name='Teamname' value='$row[Teamname]'>
	Email: <input type='text' name='email' value='$row[email]'>
	Established Date: <input type='text' name='established_date' value='$row[established_date]'>
		
	</pre>
		
		<input type='hidden' name='update' value='yes'>
		<input type='hidden' name='TeamID' value='$row[TeamID]'>
		<input type='submit' value='UPDATE Team'>	
	</form>
	
	<form action="deleteTeam.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="TeamID" value="$row[TeamID]">
	<input type="submit" value="DELETE RECORD">
	</form>
_END;

}

}


if(isset($_POST['update'])){
	
	$TeamID = $_POST['TeamID'];
	$Teamname = $_POST['Teamname'];
	$email = $_POST['email'];
	$established_date = $_POST['established_date'];
	
	$query = "Update team set Teamname='$Teamname', email='$email', established_date='$established_date' where TeamID = $TeamID ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: programportal.php");
	
	
}

$conn->close();



?>