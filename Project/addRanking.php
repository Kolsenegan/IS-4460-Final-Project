<?php

$page_roles = array('admin');

require_once 'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<form action="addRanking.php" method="post"<pre>
	
	
	TeamID <input type="number" name="TeamID"></br></br>
	TeamName <input type="text" name="TeamName"></br></br>
	Rank <input type="number" name="Rank"></br></br>
	Record <input type="text" name="Record"></br></br>
	
	
	<input type="submit" name="ADD Rank">
	</br></br>
	<a href="rankings.php" >View all Ranks</a>
	<a href='logout.php'>Logout</a>	
</pre></form>
_END;


if(	isset($_POST['TeamID']) &&
	isset($_POST['TeamName']) &&
	isset($_POST['Rank']) &&
	isset($_POST['Record'])) {
		//$RankID=get_post($conn, 'RankID');
		$TeamID=get_post($conn, 'TeamID');
		$TeamName=get_post($conn, 'TeamName');
		$Rank=get_post($conn, 'Rank');
		$Record=get_post($conn, 'Record');
		
		$query="INSERT INTO rank (TeamID, TeamName, Rank, Record) VALUES ".
			"('$TeamID','$TeamName','$Rank','$Record')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
	
}

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>