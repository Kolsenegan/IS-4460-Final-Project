<?php

$page_roles = array('admin');

require_once  'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['delete']))
{
	$RankID = $_POST['RankID'];

	$query = "DELETE FROM rank WHERE RankID='$RankID' ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: rankings.php");
	
}


?>