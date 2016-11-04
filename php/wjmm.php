<?php
@header("content-type:text/html;charset=UTF-8");
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
error_reporting(E_ALL);
//利用后台php去访问数据库  
//链接在哪里  链接到ip localhost(127.0.0.1)
//拥有权限 知道用户名和密码（root 和 123456）
//打开指定的数据库（html5）
//然后到指定表中去翻江倒海（userinfo）
//新增一条数据  动态的数据 （用户名+密码 都为参数）

  $var_conn = mysql_connect("bdm249622333.my3w.com","bdm249622333","xwx719295");  //链接名称  用户  密码
  mysql_select_db("bdm249622333_db",$var_conn);//通过链接到达指定的数据库中去  
$var_username=$_GET["username"];
$var_pwd = $_GET["pwd"];

   if(existByUserName($var_username)){//如果该用户存在不能进行注册
        echo 2;
        $var_sql="UPDATE userinfo SET pwd=$var_pwd WHERE username=$var_username";
        $var_result = mysql_query($var_sql);

   }else{


echo 1;//修改未成功
}

function existByUserName($name){
  $var_sql2 = "select id from userinfo where username='$name'";
  $var_result2 = mysql_query($var_sql2);
  //返回一个结果集
  if(mysql_fetch_row($var_result2)){
    return  true;
  }else{
    return  false;
  };
}

?>