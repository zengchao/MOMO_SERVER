<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$email = $_GET['email'];
$pwd = $_GET['pwd'];

$sql = "insert into lbs_member(password,email,regdate,status) value('$pwd','$email',now(),0)";
$dbOperation->query($sql);
	
$resultJson = json_encode(array('regTag'=>1));
echo $resultJson;
return ;

?>