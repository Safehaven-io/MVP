<?php
session_start(); 

include 'rootvars.php';

if($debug){
	echo print_r($_SESSION);
	echo "<br>";
}

/*echo "LOGGED IN: ";
if($_SESSION['loggedin'] == "1"){
	echo "yes";
}
else{
	echo "no";
}*/	

include 'simpleurl.php';

$page = "";
$url = new SimpleUrl($dir);
if($url->segment(1) == FALSE)
{
	$page = 'home';
}
else
{
	$page = $url->segment(1);
	
}

if($debug) echo "PAGE: ".$page."<br><hr>";

/*$SH["loggedin"] = true;
$SH["userID"] = 1;*/
//$_SESSION['loggedin'] = true;
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
	header("Location: ".$rootadmin."login");
	exit();
}
else{
	if($debug) echo "loggedin"."<br>";
	switch($page)
	{
		case "home":
			$content = 'pages/home.php';
		break;
		case "the-family-circle":
			if($url->segment(2) != FALSE){
				$subpage = $url->segment(2);
				if($debug) echo "SUBPAGE: ".$subpage."<br><hr>";
				switch($subpage)
				{
					case "initiator":
						$content = 'pages/pp-tfc-init.php';
					break;
					case "legal-entity":
						$content = 'pages/pp-tfc-le.php';
					break;
					case "stakeholder":
						$content = 'pages/pp-tfc-stake.php';
					break;
					case "how-it-works":
						$content = 'pages/pp-tfc-hiw.php';
					break;
					default:
						$content = 'pages/error.php';
					break;
				}			
			}
		break;
		case "business-continuity-plan":
			if($url->segment(2) != FALSE){
				$subpage = $url->segment(2);
				switch($subpage)
				{
					case "how-it-works":
						$content = 'pages/pp-bcp-hiw.php';
					break;
					default:
						$content = 'pages/error.php';
					break;
				}			
			}
		break;
		case "the-investment-circle":
			if($url->segment(2) != FALSE){
				$subpage = $url->segment(2);
				switch($subpage)
				{
					case "how-it-works":
						$content = 'pages/pp-tic-hiw.php';
					break;
					default:
						$content = 'pages/error.php';
					break;
				}			
			}
		break;
		case "safe-havens-vault":
			if($url->segment(2) != FALSE){
				$subpage = $url->segment(2);
				switch($subpage)
				{
					case "how-it-works":
						$content = 'pages/pp-shv-hiw.php';
					break;
					default:
						$content = 'pages/error.php';
					break;
				}			
			}
		break;
		case "wallet":
			$content = 'pages/wallet.php';
		break;
		default:
			$content = 'pages/error.php';
		break;
	}
}

?>
<!DOCTYPE html> 
<html lang="en">
<?php
require_once("head.php");
require_once("body.php");
?>
</html>