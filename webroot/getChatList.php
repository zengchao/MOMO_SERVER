<?php
require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);
$userid = $_GET['u'];

/*$sql = "select id,sender_id,recver_id,send_date,recver_update_date,recver_status,
	sender_status,sender_update_date,content,getUserName(sender_id) as sender_name,
	getUserName(recver_id) as recver_name,getUserPic(sender_id) as sender_pic,
 	getUserPic(recver_id) as recver_pic,getDistance(sender_id,recver_id) as distance 
	from lbs_chat where sender_id = '$userid' or recver_id='$userid' order by id desc ";
	*/
$sql="select id,sender_id,recver_id,update_time,title,content,getUserPic(sender_id) as sender_pic,
 	getUserPic(recver_id) as recver_pic,getDistance(sender_id,recver_id) as distance from lbs_post where sender_id='$userid' or recver_id='$userid' order by id desc ";
//echo $sql;

$resultArr = $dbOperation->fetch_obj_arr($sql);
if (!$resultArr){
	$resultString = json_encode(QUERY_FAILD);
	echo $resultString;
	return;
}
if (count($resultArr)==0){
	$resultString = json_encode(QUERY_RESULT_IS_NULL);
	echo $resultString;
}else{
	for($i=0;$i<count($resultArr);$i++){
		$uid =  $resultArr[$i]->sender_id;
		$sql = "select * from lbs_member where userid='$uid'";
		$checkResult = $dbOperation->query($sql);
		if($checkResult){
			$resultObj = $dbOperation->fetch_obj($checkResult);
			if($resultObj){
				$sender_name = $resultObj->username;
				$resultArr[$i]->sender_name = $sender_name;
			}
		}
	  
	  $uid =  $resultArr[$i]->recver_id;
		$sql = "select * from lbs_member where userid='$uid'";
		$checkResult = $dbOperation->query($sql);
		if($checkResult){
			$resultObj = $dbOperation->fetch_obj($checkResult);
			if($resultObj){
				$sender_name = $resultObj->username;
				$resultArr[$i]->recver_name = $sender_name;
			}
		}
		 
 	}
	
	$resultJson = json_encode($resultArr);
	echo $resultJson;
}


?>