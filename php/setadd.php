<?php
	@header("content-type:text/html;charset=UTF-8");
	
	$var_conn = mysql_connect("bdm249622333.my3w.com","bdm249622333","xwx719295"); 
	
	mysql_select_db("bdm249622333_db",$var_conn);
	
	mysql_query("set names utf8");
	
	$var_receiver=$_GET["receiver"];
	$var_phonenum=$_GET["phonenum"];
	$var_diqu=$_GET["diqu"];
	$var_address=$_GET["address"];

//	$var_receiver="李强";
//	$var_phonenum="130000000";
//	$var_diqu="湖北";
//	$var_address="黄冈";

  	
  	$var_sql = "INSERT into addlist(receiver,phonenum,diqu,address) VALUES('$var_receiver','$var_phonenum','$var_diqu','$var_address')";  //执行的sql语句
  	$var_result = mysql_query($var_sql);
  	$var_id = mysql_insert_id();
  	if($var_id!=null){
        echo 1;
  }else{
        echo 0;
  }
	
?>