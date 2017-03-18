<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>main</title>
</head>
<body>
<?php session_start(); ?>
<?php 
/*session_start(); */
error_reporting(E_ALL ^ E_NOTICE);  //屏蔽错误带代码
if(isset($_COOKIE['username'])) 
{@mysql_connect("localhost", "root","root") 
or die("数据库服务器连接失败"); 
@mysql_select_db("vptdatebase")
or die("数据库不存在或不可用"); 

//获取Session 
$username = $_COOKIE['username']; 
$password = $_COOKIE['password'];

//执行SQL语句获得userflag的值 
$query = @mysql_query("select userflag from user " ."where username = '$username'") or die("SQL语句执行失败");   //可行的语句
/*$query = @mysql_query("select userflag from user where username = '$username' and password = '$password'") or die("SQL语句执行失败"); */  //执行不成功
$row = mysql_fetch_array($query); 

//获得用户权限信息 
$flag = $row['userflag']; 

//根据userflag的值输出不同的欢迎信息 
if($flag == 1) 
echo "欢迎管理员".$_SESSION['username']."登录系统"; 
if($flag == 0) 
echo "欢迎用户".$_SESSION['username']."登录系统"; 
echo "<a href='logout.php' href='logout.php'>注销</a>"; 
/*echo "<a href='logout.php'>注销</a>";*/
} 
else 
{ 
echo "您没有权限访问本页面"; 
} 
?> 
</body>
</html>