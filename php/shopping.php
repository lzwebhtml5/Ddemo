<?php
@header("content-type:text/html;charset=UTF-8");
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
error_reporting(E_ALL);

//获取数据库的用户名密码     登录
$conn = mysql_connect("bdm24962256.my3w.com","bdm24962256","lq811125");
//将数据库的文字编码；
mysql_query("set names utf8");
//访问数据库成功后找到指定的数据库资源
mysql_select_db("bdm24962256_db",$conn);
//创建变量来接收数据
$num=$_GET["num"];
$names=$_GET["names"];
$price=$_GET["price"];
$neicun=$_GET["neicun"];
$color=$_GET["color"];
$xinghao=$_GET["xinghao"];
$pic=$_GET["pic"];
$count=$_GET["count"];
//获取neicun
$oneicun="select neicun from gouwuche where num='$num'";
//获取color
$ocolor="select color from gouwuche where num='$num'";
//获取xinghao
$oxinghao="select xinghao from gouwuche where num='$num'";
//执行
 $aneicun= mysql_query($oneicun);
 $acolor= mysql_query($ocolor);
 $axinghao= mysql_query($oxinghao);
	 
 //mysql_fetch_row() 在数据库中一个一个查找，如果找到了就返回一个集合，没找到就返回一个false 
	 if(mysql_fetch_row($aneicun)&&mysql_fetch_row($acolor)&&mysql_fetch_row($axinghao)){
	 	//说明找到了，也就是说商品一模一样,则将数量更新。
	 	 $scount="UPDATE gouwuche SET count =count+$count where num='$num'";
	 	 //执行
	 	$kcount= mysql_query($scount); 
}else{
	//添加以上接收来的数据放入数据库中
   $var_sql = "INSERT into gouwuche(num,names,price,neicun,color,xinghao,pic,count) VALUES('$num','$names','$price','$neicun','$color','$xinghao','$pic','$count')";
	//执行即可
	$var_result = mysql_query($var_sql);
	//返回数组
};
	
?>

