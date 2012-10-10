<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$mid = $_GET['mid'];
$uid = $_GET['uid'];

$sql = "select getDistance('$uid','$mid') as distance ";
$checkResult = $dbOperation->query($sql);
$resultArr = $dbOperation->fetch_obj($checkResult);
if(!$resultArr){
	$resultJson = json_encode(array('checkemailTag'=>0));
	echo $resultJson;	
}else{
	$resultJson = json_encode($resultArr);
	echo $resultJson;
}

?>