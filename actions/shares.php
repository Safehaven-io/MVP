<?php

require_once '../classes/class.shares.php';
require_once '../classes/class.legal_entities.php';

$type = $_POST['type'];
$json = $_POST['data'];

function isJson($string) {
    return ((is_string($string) &&
            (is_object(json_decode($string)) ||
            is_array(json_decode($string))))) ? true : false;
}	
	
switch($type){
	case "generate":
		$sharesClass = new SHARES();
		$legalEntitiesClass = new LEGALENTITIES();

		$string = "";
		
		$result = true;
		
		$objJson = json_decode($json);
		$shareTypes = $objJson->params;
		$validator = $objJson->validator;
		$shares = $objJson->shares;

		
		$shareGroups = Array();
		for($i=0;$i<sizeof($shareTypes);$i++){
			$shareType = $shareTypes[$i];
			if($shareType[1] == 0) continue;
			
			$maxSharesInGroup = 0;
			switch($shareType[0]){
				case 1: $maxSharesInGroup = 2; break;
				case 2: $maxSharesInGroup = 1; break;
				case 3: $maxSharesInGroup = 0; break; //unlimited
				case 4: $maxSharesInGroup = 0; break; //unlimited
			}					
			
			if($maxSharesInGroup > 0){
				$shareGroupAmount = $shareType[1] / $maxSharesInGroup;
				for($j=0;$j<$shareGroupAmount;$j++){
					$arr = Array();
					$arr[0] = $shareType[0];
					$arr[1] = $maxSharesInGroup;
					array_push($shareGroups,$arr);
				}
			}
			else{
				$arr = Array();
				$arr[0] = $shareType[0];
				$arr[1] = $shareType[1];
				array_push($shareGroups,$arr);
			}
		}
		
		$ishare = 0;
		$arrShares = Array();
		for($i=0;$i<sizeof($shareGroups);$i++){
			$shareGroup = $shareGroups[$i];
			$shareTypeID = $shareGroup[0];			
			
			$arrGroup = Array();
			$arrGroup["shareTypeID"] = $shareTypeID;
			$arrGroup["shareTypeName"] = $sharesClass->getShareType($shareTypeID);
			$arrGroup["userID"] = 0;
			$arrGroup["userName"] = "";
			$arrGroup["userImg"] = "";
			if($shareTypeID == 2){
				$legalEntity = $legalEntitiesClass->getLegalEntity($validator[0]);
				$arrGroup["userID"] = $legalEntity["ID"];
				$arrGroup["userName"] = $legalEntity["firstname"]. " ". $legalEntity["lastname"];
				$arrGroup["userImg"] = $legalEntity["img"];
			}
			$arr = Array();
			for($j=0;$j<$shareGroup[1];$j++){
				$share = $shares[$ishare];
				$ishare++;
				$arr[$j] = $share;					
			}					
			$arrGroup["shares"] = $arr;
			array_push($arrShares,$arrGroup);
		}
		
		$string = json_encode($arrShares);
		
		break;
	case "validate":
		$shares = new SHARES();
		$string = "";
		$result = true;
		if(isJson($json)){
		$array = json_decode($json);

		$arrShares = array();
		foreach ($array as $key => $jsons) { // This will search in the 2 jsons
			foreach($jsons as $key => $val) {
				if($key == 'name' or $key == '$$hashKey') continue;
				
				$string .= "$key => $val\r\n";							
				array_push($arrShares, $val);				
			}
		}

		$output = $shares->validateShares($arrShares);
		$string = $output;
		}
		else{
			$result = false;
		}
	
		break;
	case "save":
		$result = true;
		$objJson = json_decode($json);
		$string = "";
		
		$shareGroupID = md5(uniqid(time()));
		$shares = new SHARES();
		$atl = 0;
		$shareGroup = "";
		for($i=0;$i<sizeof($objJson);$i++){
			$shareGroup = $objJson[$i];
			$shareTypeID = $shareGroup->shareTypeID;
			$userID = $shareGroup->userID;
			for($j=0;$j<sizeof($shareGroup->shares);$j++){
				$line = $j + 1;
				$arrShares = $shareGroup->shares;
				$share = $arrShares[$j];
				//addShares
				$atl++;
			}
		}
		
		$string = "Shares succesfully saved!";
		break;
	case "unlock":
		$shares = new SHARES();
		
		break;
	default:
		$_SESSION["error"]["code"] = "1";
		$_SESSION["error"]["message"] = "Unvalid type";
		break;
}

if(!$result){
	echo "ERROR (".$_SESSION["error"]["code"]."): ".$_SESSION["error"]["message"];
}
else{
	echo $string;
}


?>