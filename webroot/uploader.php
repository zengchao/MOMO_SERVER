<?php
require 'Class_DBOperation.php';
require 'global.php';
require 'inc_thumb.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$email = $_POST['email'];
$target = "upload/";
$FileID=date("Ymd-His") . '-' . rand(100,999);
$thumb = $target .'thumb_'. $FileID.basename( $_FILES['uploaded']['name']) ;
$target = $target . $FileID.basename( $_FILES['uploaded']['name']) ;

if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
{
	makethumb($target,$thumb,"75","75");
	$sql = "select * from lbs_member where email='$email' ";
	$checkResult = $dbOperation->query($sql);

	$resultObj = $dbOperation->fetch_obj($checkResult);
	if ($resultObj){
		$userid = $resultObj->userid;
		$sql="insert into lbs_photo(userid,x_pic,d_pic) values('$userid','$thumb','$target') ";
		$dbOperation->query($sql);
	}
		
   	$sql = "update lbs_member set pic='$thumb',update_time=now() where email='$email' and pic='upload/no.jpg' ";
	$dbOperation->query($sql);
	$resultJson = json_encode(array('regTag'=>1));
	echo $resultJson;
}
else {
   	$resultJson = json_encode(array('regTag'=>-1));
	  echo $resultJson;
}





?> 