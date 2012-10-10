<?php
require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);
$userid = $_GET['u'];
$myid = $_GET['myid'];


$sql = "select * from lbs_member where userid='$userid' ";

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
	
	if($userid!=$myid)
	{
		$sql="select * from lbs_myfriends where userid='$myid' and fid='$userid' ";
		$resultArr2 = $dbOperation->fetch_obj_arr($sql);
		if (!$resultArr2){
			$resultArr[0]->relation='0';
		}else{
			$resultArr[0]->relation='1';
			$sql="select * from lbs_myfriends where userid='$userid' and fid='$myid' ";
			$resultArr2 = $dbOperation->fetch_obj_arr($sql);
			if ($resultArr2){
				$resultArr[0]->relation='2';
			}	
		}

		$sql="select getDistance('$userid','$myid') as distance ";
		$resultArr3 = $dbOperation->fetch_obj_arr($sql);
		if (!$resultArr3){
			$resultArr[0]->distance=$resultArr3[0]->distance;
		}else{
			$resultArr[0]->distance=$resultArr3[0]->distance;
		}
	}

	$resultJson = json_encode($resultArr);
	echo $resultJson;
}


?>