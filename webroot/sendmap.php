<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$sender = $_GET['sender'];
$recver = $_GET['recver'];
$map= $_GET['map'];
$distance=$_GET['distance'];

$sql="select * from lbs_post where (sender_id='$sender' and recver_id='$recver') or ( sender_id='$recver' and recver_id='$sender') ";
$checkResult = $dbOperation->query($sql);
//echo $sql;
if($checkResult){
	$resultObj = $dbOperation->fetch_obj($checkResult);
	if ($resultObj){
		$id = $resultObj->id;
		$sql = "insert into lbs_reply(post_id,sender_id,recver_id,content,update_time,type,map,distance) values('$id','$sender','$recver','',now(),'2','$map','$distance' ) ";
		$dbOperation->query($sql);
  
	}else{
		$sql = "insert into lbs_post(sender_id,recver_id,content,update_time,type,map,distance) values('$sender','$recver','$content',now(),'2','$map','$distance') ";
		$dbOperation->query($sql);
  
	}
	$resultJson = json_encode(array('regTag'=>1));
	echo $resultJson;
}else{	
	$resultJson = json_encode(array('regTag'=>0));
	echo $resultJson;
}
?>