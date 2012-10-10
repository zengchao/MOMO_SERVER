<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$uid = $_GET['uid'];
$name = $_GET['name'];

$sql = "insert into lbs_chewei(userid,name,status,update_time) value('$uid','$name',0,now())";
$dbOperation->query($sql);
	
$resultJson = json_encode(array('regTag'=>1));
echo $resultJson;
return ;

?>