<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$id = $_GET['id'];

$sql = "delete from lbs_chewei where id='$id' ";
$dbOperation->query($sql);
	
$resultJson = json_encode(array('regTag'=>1));
echo $resultJson;
return ;

?>