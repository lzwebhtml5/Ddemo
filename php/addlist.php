<?php

	@header("content-type:text/html;charset=UTF-8");
	
	$var_conn = mysql_connect("bdm249622333.my3w.com","bdm249622333","xwx719295"); 
	
	mysql_select_db("bdm249622333_db",$var_conn);
	
	mysql_query("set names utf8");
	
	$sql="select * from addlist";
	
	$result=mysql_query($sql); 
	
	$json="";  //初始化一个数据类型
	
	
	$data=array();  // 定义好一个数组，php中 array相当于一个数据字典
	
	
	class Close{    //定义一个类，用到存放从数据库中取出的数据
		public $var_receiver;
		public $var_phonenum;
		public $var_diqu;
		public $var_address;
	}
	
	while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
	{
		$close=new Close();
		$close->var_receiver=$row["receiver"];
		$close->var_phonenum=$row["phonenum"];
		$close->var_diqu=$row["diqu"];
		$close->var_address=$row["address"];
		$data[]=$close;
	}
	
	$json=json_encode($data);        //将或去的数据通过json_encode导出来
	echo  $json;
//	echo "{".'"close"'.":".$json."}";
?>