<?php

$page_roles = array('admin');

require_once 'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
	<pre>
	<a href="reports.php">Back to All Reports</a> <a href="programportal.php">Return to Program Portal</a> 
		
_END;


echo <<<_END
<br>
Season Profit by Team <br>
_END;


// Execute the SQL query
$result = mysqli_query($conn, "SELECT team.TeamID, team.Teamname, SUM(financials.RevenueFromTicketSales + financials.RevenueFromSponsors + financials.RevenueFromConcessions) AS TotalRevenue,
SUM(financials.CostFromStaff + financials.CostFromTeamLiving + financials.CostOfGoodsSold) AS TotalCost, 
(SUM(financials.RevenueFromTicketSales + financials.RevenueFromSponsors + financials.RevenueFromConcessions)
 - SUM(financials.CostFromStaff + financials.CostFromTeamLiving + financials.CostOfGoodsSold)) AS Profit 
FROM financials JOIN team ON financials.TeamID = team.TeamID GROUP BY team.TeamID");

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Display the results
echo "<table>";
echo "<tr><th>TeamID</th><th>Teamname</th><th></th><th>TotalRevenue</th><th>TotalCost</th><th>Profit</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["TeamID"]."</td><td>".$row["Teamname"]."</td><td>".$row["TotalRevenue"]."</td><td>".$row["TotalCost"]."</td><td>".$row["Profit"]."</td></tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);

?>