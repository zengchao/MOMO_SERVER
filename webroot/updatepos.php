<?php

$uid = $_GET['u'];
$pwd = $_GET['p'];
$x   = $_GET['x'];
$y   = $_GET['y'];
$s   = $_GET['s'];
$e   = $_GET['e'];
$sex = $_GET['sex'];
$in_time = $_GET['time'];

if($sex==0)
{
		$sex = "";
}else if($sex==1){
	  $sex = " and a.sex='0' ";
}else if($sex==2){
    $sex = " and a.sex='1' ";
}

if($in_time!='')
{
	 if($in_time=='0'){
			$in_time = " and a.update_time >= DATE_SUB(now(),interval 15 MINUTE ) ";
	 }else if($in_time=='1'){
			$in_time = " and a.update_time >= DATE_SUB(now(),interval 1 HOUR ) ";
	 }else if($in_time=='2'){
			$in_time = " and a.update_time >= DATE_SUB(now(),interval 1 DAY ) ";
	 }else if($in_time=='3'){
			$in_time = " and a.update_time >= DATE_SUB(now(),interval 3 DAY ) ";
	 }
}

if($s=='')$s=0;
if($e=='')$e=20;
$conn=mysql_connect("localhost", "root", "bjjtgl");
mysql_query("set names utf8");
if($uid==''){
}else{
  $sql="update `lbs_member` set xpos='$x',ypos='$y' where email='$uid' and password='$pwd' ";
  $result=mysql_db_query("demo", $sql, $conn);
}
//echo $sql;
if($uid!=''){
$sql="select a.*,uFn_CalcuDistance(a.xpos,a.ypos,$x,$y,'m') distance from lbs_member a 
	where a.email!='$uid' ".$sex.$in_time." and a.status=1 order by distance limit $s,$e";
//echo "1_".$sql;
}else{
$sql="select a.*,uFn_CalcuDistance(a.xpos,a.ypos,$x,$y,'m') distance from lbs_member a 
where a.status=1 ".$sex.$in_time." order by distance limit $s,$e";
}
//echo "2_".$sql;
mysql_select_db("demo");	
$obj_arr=array();
$res = mysql_query($sql);
while($row=mysql_fetch_object($res))
{
$obj_arr[]=$row;
}
$resultJson = json_encode($obj_arr);
echo $resultJson;
mysql_close($conn);
?>

