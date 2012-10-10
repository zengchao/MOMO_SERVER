<?php
require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$uid = $_GET['uid'];
$cwid = $_GET['cwid'];

$dbOperation->query("set names utf8");
$sql="select a.userid,a.username,
       b.name as chewei_name,
       c.*,d.username as apply_username
  from lbs_member a,
  	   lbs_member d,
       lbs_chewei b,
       lbs_chewei_apply c
 where a.userid=b.userid
   and b.id=c.chewei_id
   and c.chewei_id='$cwid'
   and c.apply_userid=d.userid ";

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