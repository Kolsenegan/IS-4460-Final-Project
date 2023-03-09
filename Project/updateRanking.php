<?php

$page_roles = array('admin');

require_once  'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['RankID'])){
	
$RankID = $_GET['RankID'];	

$query = "SELECT * FROM rank where RankID=$RankID";

$result = $conn->query($query); 
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 
		
echo <<<_END
	
	<form action='updateRanking.php' method='post'>

	<pre>
	
	TeamID: <input type='number' name='TeamID' value='$row[TeamID]'>
	TeamName: <input type='text' name='TeamName' value='$row[TeamName]'>
	Rank: <input type='number' name='Rank' value='$row[Rank]'>
	Record: <input type='text' name='Record' value='$row[Record]'>
		
	</pre>
		
		<input type='hidden' name='update' value='yes'>
		<input type='hidden' name='RankID' value='$row[RankID]'>
		<input type='submit' value='UPDATE RANK'>	
	</form>
	
	<form action="deleteRanking.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="RankID" value="$row[RankID]">
	<input type="submit" value="DELETE RECORD">
	</form>
_END;

}

}


if(isset($_POST['update'])){
	
	$RankID = $_POST['RankID'];
	$TeamID = $_POST['TeamID'];
	$TeamName = $_POST['TeamName'];
	$Rank = $_POST['Rank'];
	$Record = $_POST['Record'];
	
	$query = "Update rank set TeamID='$TeamID', TeamName='$TeamName', Rank='$Rank', Record='$Record' where RankID = $RankID ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: rankings.php");
	
	
}

$conn->close();



?>