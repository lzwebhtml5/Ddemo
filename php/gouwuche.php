<?php
@header("content-type:text/html;charset=UTF-8");
//获取数据库的用户名密码     登录
$conn = mysql_connect("bdm24962256.my3w.com","bdm24962256","lq811125");
//将数据库的文字编码；
mysql_query("set names utf8");
//访问数据库成功后找到指定的数据库资源
mysql_select_db("bdm24962256_db",$conn);
//获取数据库中的所有数据
$sql="select * from gouwuche"; 
	//执行即可
	$result = mysql_query($sql);
$json="";  //初始化一个数据类型
	
	$data=array();  // 定义好一个数组，php中 array相当于一个数据字典

	class Close{    //定义一个类，用到存放从数据库中取出的数据
		public $num;
		public $names;
		public $price;
		public $neicun;
		public $color;
		public $xinghao;
		public $pic;
		public $count;
	}

	while ($row = mysql_fetch_array($result,MYSQL_ASSOC))  //遍历数据库中通过执行sql语句所获取的数据
	{
		$close=new Close();
		$close->num=$row["num"];
		$close->names=$row["names"];
		$close->price=$row["price"];
		$close->neicun=$row["neicun"];
		$close->color=$row["color"];
		$close->xinghao=$row["xinghao"];
		$close->pic=$row["pic"];
		$close->count=$row["count"];
		$data[]=$close;
	}
	
	$json=json_encode($data);        //将或去的数据通过json_encode导出来
	echo $json;

	
	?>

