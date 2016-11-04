<?php
@header("content-type:text/html;charset=UTF-8");
//获取数据库的用户名密码     登录
$conn = mysql_connect("bdm24962256.my3w.com","bdm24962256","lq811125");
//将数据库的文字编码；
mysql_query("set names utf8");
//访问数据库成功后找到指定的数据库资源
mysql_select_db("bdm24962256_db",$conn);
//清空
$dle="DELETE FROM gouwuche";
//执行
$odle= mysql_query($dle); 
echo 1;
	
?>

