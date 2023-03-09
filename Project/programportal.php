<?php

$page_roles = array('admin', 'user');

require_once 'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
	<pre>
	<a href="addTeam.php">Add Team</a> <a href="rankings.php">Team Ranks</a> <a href="reports.php">All Reports</a> <a href='logout.php'>Logout</a>	
		
_END;


echo <<<_END
<br>
Program Portal <br>
_END;

$query="SELECT * FROM team";
$result=$conn->query($query);
if(!$result) die ($conn->error);

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
	
	echo <<<_END
	<pre>
		Team <a href='updateTeam.php?TeamID=$row[TeamID]'>$row[Teamname]</a>
		Date established $row[established_date]
		Contact $row[email]
		<a href="roster.php?TeamID=$row[TeamID]">View Roster</a>
		<a href="events.php?TeamID=$row[TeamID]">View Schedule</a>
		<a href="financials.php?TeamID=$row[TeamID]">Financial Reports</a>
	</pre>
	
_END;
}

$result->close();
$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}



?>