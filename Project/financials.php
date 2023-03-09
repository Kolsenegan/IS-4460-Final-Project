<?php

$page_roles = array('admin');

require_once 'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
	<pre>
	<a href="addFinancials.php">Add Report</a> <a href="programportal.php">Return to Program Portal</a> 
		
_END;


echo <<<_END
<br>
 Financial Reports <br>
_END;

$TeamID = $_GET['TeamID'];
$query="SELECT * FROM financials where TeamID=$TeamID ";
$result=$conn->query($query);
if(!$result) die ($conn->error);

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
	
	echo <<<_END
	<pre>
		<a href='updateFinancials.php?FinancialsID=$row[FinancialsID]'>Update Report</a>
		Event ID $row[EventID]
		Revenue from Concessions $row[RevenueFromConcessions]  
		Ticket Sales $row[RevenueFromTicketSales] 
		Revenue from Sponsors $row[RevenueFromSponsors]
		Staffing Costs $row[CostFromStaff]
		Team Living Costs $row[CostFromTeamLiving]
		Cost of Goods Sold $row[CostOfGoodsSold]
	</pre>
	
_END;
}

$result->close();
$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}