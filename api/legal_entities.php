<?php
require_once '../legal_entities/legal_entities.php';
require_once '../classes/class.legal_entities.php';

$legalEntityID = 0;
if(isset($_POST['legal_entity'])){
	$legalEntityID = $_POST['legal_entity'];
}

if(isset($legalEntityID) && $legalEntityID > 0){
	$legalEntitiesClass = new LEGALENTITIES();
	$legalEntity = $legalEntitiesClass->getLegalEntity($legalEntityID);
	$arrlegalEntity["userID"] = $legalEntity["ID"];
	$arrlegalEntity["userName"] = $legalEntity["firstname"]. " ". $legalEntity["lastname"];
	$arrlegalEntity["userImg"] = $legalEntity["img"];
	$string = json_encode($arrlegalEntity);
}
else{
	$string = json_encode($arrLegalEntities);
}

echo $string;
?>