<?php

require 'Class_DBOperation.php';
require 'global.php';

$dbOperation = new class_DBOperation(DBHOST,DBUSER,DBPWD,DBNAME,DBCHARSET);

$username = $_GET['username'];
$sex = $_GET['sex'];
$b_date = $_GET['b_date'];
$qianming = $_GET['qianming'];
$aihao = $_GET['aihao'];
$zhiye = $_GET['zhiye'];
$gongsi = $_GET['gongsi'];
$xuexiao = $_GET['xuexiao'];
$difang = $_GET['difang'];
$zhuye = $_GET['zhuye'];
$email = $_GET['email'];
$sina = $_GET['sina'];
$renren = $_GET['renren'];
$douban = $_GET['douban'];
$startposx=$_GET['spx'];
$endposx=$_GET['epx'];
$startposy=$_GET['spy'];
$endposy=$_GET['epy'];
$startposname=$_GET['spn'];
$endposname=$_GET['epn'];
$startoff_time=$_GET['st'];
$backoff_time=$_GET['bt'];
$req_sex=$_GET['rse'];
$req_smoke=$_GET['rsm'];
$req_fee=$_GET['rf'];
$req_peoples=$_GET['rp'];
$zuojia=$_GET['zj'];
$jialing=$_GET['jl'];
$weihao=$_GET['wh'];

$sql = "update lbs_member set ";
if($username!=''){
	 $sql = $sql . " username='$username',";
}
if($sex!=''){
	 $sql = $sql . " sex='$sex',";
}
if($b_date!=''){
	 $sql = $sql . " b_date='$b_date',";
}
if($qianming!=''){
	 $sql = $sql . " qianming='$qianming',";
}
if($aihao!=''){
	 $sql = $sql . " aihao='$aihao',";
}
if($zhiye!=''){
	 $sql = $sql . " zhiye='$zhiye',";
}
if($gongsi!=''){
	 $sql = $sql . " gongsi='$gongsi',";
}
if($xuexiao!=''){
	 $sql = $sql . " xuexiao='$xuexiao',";
}
if($difang!=''){
	 $sql = $sql . " difang='$difang',";
}
if($zhuye!=''){
	 $sql = $sql . " zhuye='$zhuye',";
}
if($sina!=''){
	 $sql = $sql . " sina_weibo_id='$sina',";
}
if($renren!=''){
	 $sql = $sql . " renren_id='$renren',";
}
if($douban!=''){
	 $sql = $sql . " douban_id='$douban',";
}
if($startposx!=''){
	 $sql = $sql . " startposx='$startposx',";
}
if($startposy!=''){
	 $sql = $sql . " startposy='$startposy',";
}
if($endposx!=''){
	 $sql = $sql . " endposx='$endposx',";
}
if($endposy!=''){
	 $sql = $sql . " endposy='$endposy',";
}

if($startposname!=''){
	 $sql = $sql . " startposname='$startposname',";
}
if($endposname!=''){
	 $sql = $sql . " endposname='$endposname',";
}
if($startoff_time!=''){
	 $sql = $sql . " startoff_time='$startoff_time',";
}
if($backoff_time!=''){
	 $sql = $sql . " backoff_time='$backoff_time',";
}
if($req_sex!=''){
	 $sql = $sql . " req_sex='$req_sex',";
}
if($req_smoke!=''){
	 $sql = $sql . " req_smoke='$req_smoke',";
}
if($req_fee!=''){
	 $sql = $sql . " req_fee='$req_fee',";
}
if($req_peoples!=''){
	 $sql = $sql . " req_peoples='$req_peoples',";
}
if($zuojia!=''){
	 $sql = $sql . " zuojia='$zuojia',";
}
if($jialing!=''){
	 $sql = $sql . " jialing='$jialing',";
}
if($weihao!=''){
	 $sql = $sql . " weihao='$weihao',";
}

$sql = $sql." update_time=now() where email='$email' ";

//echo json_encode($sql);

$dbOperation->query($sql);
	
$resultJson = json_encode(array('regTag'=>1));
echo $resultJson;

?>