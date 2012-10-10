<?php
require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);
$userid = $_GET['u'];

$sql = "select * from lbs_photo where userid='$userid' order by showorder ";
//echo $sql;

$resultArr = $dbOperation->fetch_obj_arr($sql);
if (!$resultArr){
	$sql = "select * from lbs_photo where userid='0' ";
	$resultArr = $dbOperation->fetch_obj_arr($sql);
	$resultJson = json_encode($resultArr);
	echo $resultJson;
}else{
	if (count($resultArr)==0)
	{
		$sql = "select * from lbs_photo where userid='0' ";
		$resultArr = $dbOperation->fetch_obj_arr($sql);
		$resultJson = json_encode($resultArr);
		echo $resultJson;
	}else{
		$resultJson = json_encode($resultArr);
		echo $resultJson;
	}
}

?>