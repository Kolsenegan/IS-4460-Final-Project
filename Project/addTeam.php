<?php

$page_roles = array('admin');

require_once 'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<form action="addTeam.php" method="post"<pre>
	
	Teamname <input type="text" name="Teamname"></br></br>
	email <input type="text" name="email"></br></br>
	established_date <input type="text" name="established_date"></br></br>
	
	
	<input type="submit" name="ADD TEAM">
	</br></br>
	<a href="programportal.php" >View all Programs</a>
	<a href='logout.php'>Logout</a>	
</pre></form>
_END;


if(	isset($_POST['Teamname']) &&
	isset($_POST['email']) &&
	isset($_POST['established_date'])) {
		//$TeamID=get_post($conn, 'TeamID');
		$Teamname=get_post($conn, 'Teamname');
		$email=get_post($conn, 'email');
		$established_date=get_post($conn, 'established_date');
		
		$query="INSERT INTO team (Teamname, email, established_date) VALUES ".
			"('$Teamname','$email','$established_date')";
		$result=$conn->query($query);
		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
	
}

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>