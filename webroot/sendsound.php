<?php
require 'Class_DBOperation.php';
require 'global.php';
require 'inc_thumb.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$sender = $_GET['sender'];	
$recver = $_GET['recver'];

$target = "upload/";
$FileID=date("Ymd-His") . '-' . rand(100,999);
$target = $target . $FileID.basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
{	
	$sql="select * from lbs_post where (sender_id='$sender' and recver_id='$recver') or ( sender_id='$recver' and recver_id='$sender') ";
	$checkResult = $dbOperation->query($sql);
	if($checkResult){
		$resultObj = $dbOperation->fetch_obj($checkResult);
		if ($resultObj){
			$id = $resultObj->id;
			$sql = "insert into lbs_reply(post_id,sender_id,recver_id,content,update_time,type,sound) values('$id','$sender','$recver','',now(),'3','$target') ";
			$dbOperation->query($sql);
  
		}else{
			$sql = "insert into lbs_post(sender_id,recver_id,content,update_time,type,sound) values('$sender','$recver','',now(), '3','$target') ";
			$dbOperation->query($sql);
		}
		$resultJson = json_encode(array('regTag'=>1));
		echo $resultJson;
	}else{	
		$resultJson = json_encode(array('regTag'=>0));
		echo $resultJson;
	}
}else {
   	$resultJson = json_encode(array('regTag'=>-1));
	  echo $resultJson;
}





?> 