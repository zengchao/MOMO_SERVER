<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$uid = $_GET['uid'];
$id = $_GET['id'];

$sql="select * from lbs_chewei_apply where chewei_id='$id' and apply_userid='$uid' ";
$checkResult = $dbOperation->query($sql);
$resultArr = $dbOperation->fetch_obj($checkResult);
if(!$resultArr){
	$sql = "insert into lbs_chewei_apply(chewei_id,apply_userid,apply_time) values('$id','$uid',now()) ";
	$dbOperation->query($sql);
	$resultJson = json_encode(array('regTag'=>1));
	echo $resultJson;
	return ;
	
}else{
	$resultJson = json_encode(array('regTag'=>0));
	echo $resultJson;
}




?>