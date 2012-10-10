<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$sender = $_GET['sender'];
$recver = $_GET['recver'];
$content= $_GET['content'];
$distance= $_GET['distance'];
//echo $content;
$sql="select * from lbs_post where (sender_id='$sender' and recver_id='$recver') or ( sender_id='$recver' and recver_id='$sender') ";
$checkResult = $dbOperation->query($sql);
//echo $sql;
if($checkResult){
	$resultObj = $dbOperation->fetch_obj($checkResult);
	if ($resultObj){
		$id = $resultObj->id;
		$sql = "insert into lbs_reply(post_id,sender_id,recver_id,content,update_time,type,distance) values('$id','$sender','$recver','$content',now(),'0','$distance' ) ";
		$dbOperation->query($sql);
  
	}else{
		$sql = "insert into lbs_post(sender_id,recver_id,content,update_time,type,distance) values('$sender','$recver','$content',now(),'0','$distance' ) ";
		$dbOperation->query($sql);
  
	}
	$resultJson = json_encode(array('regTag'=>1));
	echo $resultJson;
}else{	
	$resultJson = json_encode(array('regTag'=>0));
	echo $resultJson;
}
?>