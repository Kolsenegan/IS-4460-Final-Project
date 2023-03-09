<?php

$page_roles = array('admin');

require_once 'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
	<pre>
	<a href="programportal.php">Return to Program Portal</a> 
		
_END;

echo <<<_END
<br>
 View Reports <br>
_END;

//How do I get profit, is it possible to do with how our financials table is setup

echo <<<_END
	<pre>
														
	<li><a href="RankProfit.php">Season Profit by Team</a></li> Shows Total Season Profit of each Program
    <li><a href="EventsProfit.php">Events x Profit</a></li> Shows the Profit of each event for each team
     
   
_END;
?>

