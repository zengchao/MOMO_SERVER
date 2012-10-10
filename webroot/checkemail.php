<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$email = $_GET['email'];
$sql = "select userid from lbs_member where email ='$email' ";
$checkResult = $dbOperation->query($sql);
$resultArr = $dbOperation->fetch_obj($checkResult);
if(!$resultArr){
	$resultJson = json_encode(array('checkemailTag'=>0));
	echo $resultJson;	
}else{
	$resultJson = json_encode(array('checkemailTag'=>1));
	echo $resultJson;
}

?>