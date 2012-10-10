<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$title = $_GET['title'];
$content = $_GET['content'];
$userid= $_GET['userid'];

$sql="select * from lbs_bbs where userid='$userid' and title='$title' ";
$checkResult = $dbOperation->query($sql);

if($checkResult){
	$resultObj = $dbOperation->fetch_obj($checkResult);
	if ($resultObj){
		$id = $resultObj->id;
		$sql = "update lbs_bbs set content='$content',update_time=now() where id='$id' ";
		$dbOperation->query($sql);
  
	}else{
		$sql = "insert into lbs_bbs(userid,title,content,update_time,flag) values('$userid','$title','$content',now(),'0') ";
		$dbOperation->query($sql);
  
	}
	$resultJson = json_encode(array('regTag'=>1));
	echo $resultJson;
}else{	
	$resultJson = json_encode(array('regTag'=>0));
	echo $resultJson;
}
?>