<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$username = $_GET['username'];
$sex = $_GET['sex'];
$b_date = $_GET['b_date'];
$email = $_GET['email'];

$sql = "update lbs_member set username='$username' ,sex='$sex', b_date='$b_date',update_time=now(),status=1,xpos=0,ypos=0,qianming='',aihao='',xuexiao='',difang='',zhiye='',gongsi='',zhuye='',startposname='',endposname='',zuojia='',weihao='',restday='',pic='upload/no.jpg' where email='$email' ";
//echo $sql;
$dbOperation->query($sql);
	
$resultJson = json_encode(array('regTag'=>1));
echo $resultJson;

?>