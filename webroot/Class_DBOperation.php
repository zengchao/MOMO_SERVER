<?php

/*
 文件名：Class_DBOperation.php
 作用：数据库操作基础类
  作者：胡涛
 日期：2012-2-8
*/

/*
 * 安装说明：请在清楚情况下修改此文件，否则将导致服务器程序无法执行
 */

class class_DBOperation{	
	private $host;
	private $user_name;
	private $user_pwd;
	private $dest_db;
	private $charset;

	//创建连接数据库对象
	function class_DBOperation($host,$user,$pwd,$db,$charset){
	
		//获取属性
		$this->host = $host;
		$this->user_name = $user;
		$this->user_pwd = $pwd;
		$this->dest_db = $db;
		$this->charset = $charset;
			
		//检测是否能连接上数据库所在主机
		if (!mysql_connect($this->host,$this->user_name,$this->user_pwd)){
			echo '无法连接上主机';
			exit();
		}
	
		//创建数据库连接
		$conn = mysql_connect($this->host,$this->user_name,$this->user_pwd) or die('错误信息'.mysql_error());
	
		//选择数据库
		mysql_select_db($this->dest_db,$conn)or die('错误信息'.mysql_error());
	
		//设置字符集
		mysql_query("set names utf8") or die('错误信息'.mysql_error());
	}
	function __call($function_name, $args)
	{
		echo "<br><font color=#ff0000>你所调用的方法 $function_name 不存在</font><br>\n";
	}
	//执行sql语句方法
	function  query($sql){
		$result = mysql_query($sql)or die('错误信息'.mysql_error());
		return $result;
	} 
	function  fetch_array($sql){
		$result = mysql_query($sql) or die('错误信息'.mysql_error());
		$result_arry = mysql_fetch_array($result);
		return $result_arry;
	}
	function fetch_obj_arr($sql)
	{
		$obj_arr=array();
		$res=$this->query($sql);
		while($row=mysql_fetch_object($res))
		{
			$obj_arr[]=$row;
		}
		return $obj_arr;
	}
	function fetch_obj($result){
		return mysql_fetch_object($result);
	}
}
?>