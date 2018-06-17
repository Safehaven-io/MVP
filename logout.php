<?php
session_start(); 

session_destroy();
header("Location: ".$rootadmin."login");
exit();
	
?>