<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$id = $_GET['id'];
$flag=$_GET['flag'];// 1:ok 0:no


	$sql = "update lbs_chewei_apply set verify_status='$flag',verify_time=now() where id='$id' ";
	$dbOperation->query($sql);
	$resultJson = json_encode(array('regTag'=>1));
	echo $resultJson;
	return ;




?>