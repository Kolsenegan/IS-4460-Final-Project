<?php

$page_roles = array('admin');

require_once  'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['FinancialsID'])){
	
$FinancialsID = $_GET['FinancialsID'];	

$query = "SELECT * FROM financials where FinancialsID=$FinancialsID";

$result = $conn->query($query); 
if(!$result) die($conn->error);

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 
		
echo <<<_END
	
	<form action='updateFinancials.php' method='post'>

	<pre>
	
	TeamID: <input type='number' name='TeamID' value='$row[TeamID]'>
	EventID: <input type='number' name='EventID' value='$row[EventID]'>
	Concessions: <input type='number' name='RevenueFromConcessions' value='$row[RevenueFromConcessions]'>
	Ticket Sales: <input type='number' name='RevenueFromTicketSales' value='$row[RevenueFromTicketSales]'>
	Sponsors: <input type='number' name='RevenueFromSponsors' value='$row[RevenueFromSponsors]'>
	Staff Costs: <input type='number' name='CostFromStaff' value='$row[CostFromStaff]'>
	Team Expenses: <input type='number' name='CostFromTeamLiving' value='$row[CostFromTeamLiving]'>
	COGS: <input type='number' name='CostOfGoodsSold' value='$row[CostOfGoodsSold]'>
		
	</pre>
		
		<input type='hidden' name='update' value='yes'>
		<input type='hidden' name='FinancialsID' value='$row[FinancialsID]'>
		<input type='submit' value='UPDATE Report'>	
	</form>
	
	<form action="deleteFinancials.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="FinancialsID" value="$row[FinancialsID]">
	<input type="submit" value="DELETE RECORD">
	</form>
_END;

}

}


if(isset($_POST['update'])){
	
	$FinancialsID = $_POST['FinancialsID'];
	$TeamID = $_POST['TeamID'];
	$EventID = $_POST['EventID'];
	$RevenueFromConcessions = $_POST['RevenueFromConcessions'];
	$RevenueFromTicketSales = $_POST['RevenueFromTicketSales'];
	$RevenueFromSponsors = $_POST['RevenueFromSponsors'];
	$CostFromStaff = $_POST['CostFromStaff'];
	$CostFromTeamLiving = $_POST['CostFromTeamLiving'];
	$CostOfGoodsSold = $_POST['CostOfGoodsSold'];
	
	$query = "Update financials set TeamID='$TeamID', EventID='$EventID', RevenueFromConcessions='$RevenueFromConcessions',
	RevenueFromTicketSales='$RevenueFromTicketSales', RevenueFromSponsors='$RevenueFromSponsors', CostFromStaff='$CostFromStaff', 
	CostFromTeamLiving='$CostFromTeamLiving', CostOfGoodsSold='$CostOfGoodsSold' where FinancialsID = $FinancialsID ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: financials.php?TeamID=$TeamID");
	
	
}

$conn->close();



?>