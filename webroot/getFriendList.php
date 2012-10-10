<?php
require 'Class_DBOperation.php';
require 'global.php';

//创建数据库连接
$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

//接收客户端参数
$userid = $_GET['u'];
$flag = $_GET['flag'];//0 关注 1粉丝
$order = $_GET['order'];//0 位置距离 1登录时间 2添加顺序


if($flag==0){
$sql = "select a.*,b.username as fname,b.pic as friend_pic,getDistance(a.userid,a.fid) as distance ,
	b.sex,b.qianming 
	from lbs_myfriends a,lbs_member b where a.userid = '$userid' and a.fid=b.userid  ";
}else{
$sql = "select a.*,b.username as fname,b.pic as friend_pic,getDistance(a.userid,a.fid) as distance ,
	b.sex,b.qianming 
	from lbs_myfriends a,lbs_member b where a.fid = '$userid' and a.fid=b.userid  ";

}
if($order==0){
	$sql = $sql ." order by distance "; 
}else if($order==1){
  $sql = $sql ." order by b.update_time ";
}else if($order==2){
  $sql = $sql ." order by a.id ";
}
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