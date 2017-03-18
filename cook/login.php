<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
</head>
<body>
<?php session_start(); ?>
<?php 
@mysql_connect("localhost", "root","root") 
or die("数据库服务器连接失败"); 
@mysql_select_db("vptdatebase")
or die("数据库不存在或不可用"); 

$_SESSION['username']=$_POST['username']; 
$_SESSION['password']=$_POST['password']; 
$_SESSION['cookie']=$_POST['cookie']; 

//获取用户输入 
$username = $_POST['username']; 
$password = $_POST['password']; 
$cookie = $_POST['cookie']; 

//执行SQL语句 
$query = @mysql_query("select username, userflag from user " ."where username = '$username' and password = '$password'") 
or die("SQL语句执行失败"); 

//判断用户是否存在，密码是否正确 
if($row = mysql_fetch_array($query)) 
{ 
if($row['userflag'] == 1 or $row['userflag'] == 0) //判断用户权限信息是否有效 
{ 
switch($cookie) //根据用户的选择设置cookie保存时间 
{ 
case 0: //保存Cookie为浏览器进程 
setcookie("username", $row['username']); 
break; 
case 1: //保存1天 
setcookie("username", $row['username'], time()+24*60*60); 
break; 
case 2: //保存30天 
setcookie("username", $row['username'], time()+30*24*60*60); 
break; 
case 3: //保存365天 
setcookie("username", $row['username'], time()+365*24*60*60); 
break; 
} 
header("location: main.php"); //自动跳转到main.php 
} 
else 
{ 
echo "用户权限信息不正确"; 
} 
} 
else 
{ 
echo "用户名或密码错误"; 
//添加跳转
header("location: index.php");
} 
?> 

</body>
</html>