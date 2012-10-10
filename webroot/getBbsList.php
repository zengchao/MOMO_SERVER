<?php
require 'Class_DBOperation.php';
require 'global.php';

//创建数据库连接
$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);
$sql="select id,title,content,update_time,userid,flag from lbs_bbs order by id desc ";
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
	$resultJson = json_encode($resultArr);
	echo $resultJson;
}


?>