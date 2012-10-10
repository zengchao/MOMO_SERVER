<?php
require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);
$id = $_GET['id'];
$sender=$_GET['sender'];
$recver=$_GET['recver'];

$sql = " select id,sender_id,recver_id,update_time,title,content,distance,getUserPic(sender_id) as sender_pic,
 	getUserPic(recver_id) as recver_pic,pic,map,type,sound 
 	from lbs_post where (sender_id='$sender' and recver_id='$recver') or ( sender_id='$recver' and recver_id='$sender') 
 	
 	union
 	
 	select post_id as id ,sender_id,recver_id,update_time,title,content,distance,getUserPic(sender_id) as sender_pic,
 	getUserPic(recver_id) as recver_pic,pic,map,type,sound from lbs_reply 
 	where (sender_id='$sender' and recver_id='$recver') or ( sender_id='$recver' and recver_id='$sender') order by id  ";
 	

$resultArr = $dbOperation->fetch_obj_arr($sql);
if (!$resultArr){
	$resultString = json_encode(QUERY_FAILD);
	echo $resultString;
	return ;
}
if (count($resultArr)==0){
	$resultString = json_encode(QUERY_RESULT_IS_NULL);
	echo $resultString;
	return ;
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
	  
	  	$mid =  $resultArr[$i]->recver_id;
		$sql = "select * from lbs_member where userid='$mid'";
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