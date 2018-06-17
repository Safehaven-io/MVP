<?php
if(file_exists('classes/class.users.php')){
	require_once 'classes/class.users.php';
}
else{
	require_once '../classes/class.users.php';
}

$userID = 0;
if(isset($_REQUEST['userID'])){
	$userID = $_REQUEST['userID'];
}

$userClass = new USER();
$users = $userClass->getUsers($userID);

echo $users;

?>