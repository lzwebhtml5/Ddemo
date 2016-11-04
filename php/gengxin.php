<?php
@header("content-type:text/html;charset=UTF-8");
//获取数据库的用户名密码     登录
$conn = mysql_connect("bdm24962256.my3w.com","bdm24962256","lq811125");
//将数据库的文字编码；
mysql_query("set names utf8");
//访问数据库成功后找到指定的数据库资源
mysql_select_db("bdm24962256_db",$conn);
//创建变量来接收数据
$count=$_GET["count"];
$num=$_GET["num"];
//更新数量
$scount="UPDATE gouwuche SET count =$count where num='$num'";
//执行
$kcount= mysql_query($scount); 
	
?>

