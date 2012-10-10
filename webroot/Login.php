<?php

require 'Class_DBOperation.php';
require 'global.php';

//创建数据库连接
$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

//接收客户端参数
$user_name = $_GET['name'];
$user_pwd = $_GET['pwd'];

$sqlCheck = "select userid from lbs_member where email = '$user_name'";
//echo $sqlCheck ;
$check = $dbOperation->query($sqlCheck);
$checkObj = $dbOperation->fetch_obj($check);
if (!$checkObj){
	//用户id尚未注册
	$resultJson = json_encode(array('loginTag'=>LOGIN_UNREGISTE_FAILD));
	echo $resultJson;
	return ;
}
$sqlQuery = "select userid from lbs_member where email = '$user_name' and password = '$user_pwd'";
$checkResult = $dbOperation->query($sqlQuery);
$resultObj = $dbOperation->fetch_obj($checkResult);
if ($resultObj){
    $sql="update lbs_member set update_time=now() where email='$user_name' ";
    $dbOperation->query($sql);
    $resultJson = json_encode(array('loginTag'=>LOGIN_SUCCESS,'login_user_id'=>$resultObj->userid));
    echo $resultJson;
}else{
 	$resultJson = json_encode(array('loginTag'=>LOGIN_FAILD));
 	echo $resultJson;
 	return ;
}
?>