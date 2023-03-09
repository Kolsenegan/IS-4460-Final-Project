<?php

$page_roles = array('admin');

require_once  'login.php';
require_once  'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['delete']))
{
	$EventID = $_POST['EventID'];

	$query = "DELETE FROM events WHERE EventID='$EventID' ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: programportal.php");
	
}


?>