<?php

$page_roles = array('admin');

require_once 'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<form action="addFinancials.php" method="post"<pre>
	
	TeamID <input type="number" name="TeamID"></br></br>
	EventID <input type="number" name="EventID"></br></br>
	Concessions <input type="number" name="RevenueFromConcessions"></br></br>
	TicketSales <input type="number" name="RevenueFromTicketSales"></br></br>
	Sponsors <input type="number" name="RevenueFromSponsors"></br></br>
	Staff Costs <input type="number" name="CostFromStaff"></br></br>
	Team Expenses <input type="number" name="CostFromTeamLiving"></br></br>
	COGS <input type="number" name="CostOfGoodsSold"></br></br>
	
	
	<input type="submit" name="ADD Report">
	</br></br>
	<a href='logout.php'>Logout</a>	
	<a href="programportal.php" >Return to Program Portal</a>	
</pre></form>
_END;


if(	isset($_POST['TeamID']) &&
	isset($_POST['EventID']) &&
	isset($_POST['RevenueFromConcessions']) &&
	isset($_POST['RevenueFromTicketSales']) &&
	isset($_POST['RevenueFromSponsors']) &&
	isset($_POST['CostFromStaff']) &&
	isset($_POST['CostFromTeamLiving']) &&
	isset($_POST['CostOfGoodsSold'])) {
		
		$TeamID=get_post($conn, 'TeamID');
		$EventID=get_post($conn, 'EventID');
		$RevenueFromConcessions=get_post($conn, 'RevenueFromConcessions');
		$RevenueFromTicketSales=get_post($conn, 'RevenueFromTicketSales');
		$RevenueFromSponsors=get_post($conn, 'RevenueFromSponsors');
		$CostFromStaff=get_post($conn, 'CostFromStaff');
		$CostFromTeamLiving=get_post($conn, 'CostFromTeamLiving');
		$CostOfGoodsSold=get_post($conn, 'CostOfGoodsSold');
		
		$query="INSERT INTO financials (TeamID, EventID, RevenueFromConcessions, RevenueFromTicketSales, RevenueFromSponsors, CostFromStaff, CostFromTeamLiving, CostOfGoodsSold) VALUES ".
			"('$TeamID','$EventID','$RevenueFromConcessions', '$RevenueFromTicketSales', '$RevenueFromSponsors', '$CostFromStaff', '$CostFromTeamLiving', '$CostOfGoodsSold' )";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
			
}


$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>