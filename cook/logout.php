<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注销成功</title>
</head>
<body>
<?php 
$username = $_COOKIE['username']; 
//根据username是否存在判定是否注销
if(!$username =0)
{
setcookie("username"); 
echo "注销成功"; 
}
else { echo "您没有权限访问本页面"; } 

?> 
</body>
</html>