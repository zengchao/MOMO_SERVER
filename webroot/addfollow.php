<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$my = $_GET['my'];
$u = $_GET['u'];

$sql="select * from lbs_myfriends where userid='$my' and fid='$u' ";
$resultArr = $dbOperation->fetch_obj_arr($sql);
if (!$resultArr){
	$sql = "insert into lbs_myfriends(userid,fid,update_time,status) values('$my','$u',now(),1) ";
	$dbOperation->query($sql);
	$sql="select * from lbs_myfriends where userid='$u' and fid='$my' ";
	$resultArr2 = $dbOperation->fetch_obj_arr($sql);
	if ($resultArr2){
		$resultJson = json_encode(array('regTag'=>2));
	}else{
		$resultJson = json_encode(array('regTag'=>1));
	}
	echo $resultJson;
	return ;
}
if (count($resultArr)==0){
	$sql = "insert into lbs_myfriends(userid,fid,update_time,status) values('$my','$u',now(),1) ";
	$dbOperation->query($sql);
	$sql="select * from lbs_myfriends where userid='$u' and fid='$my' ";
	$resultArr2 = $dbOperation->fetch_obj_arr($sql);
	if ($resultArr2){
		$resultJson = json_encode(array('regTag'=>2));
	}else{
		$resultJson = json_encode(array('regTag'=>1));
	}	
	echo $resultJson;
	return ;
}else{
	$sql="delete from lbs_myfriends where userid='$my' and fid='$u' ";
	$dbOperation->query($sql);
	$resultJson = json_encode(array('regTag'=>0));
	echo $resultJson;
	return ;
}

?>