<?php
require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$dbOperation->query("set names utf8");
$sql="select id,title,content,update_time,flag,userid,getUsername(userid) as username from lbs_bbs where flag=1 order by id,update_time desc ";

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