<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css" />
</head>
<body>
<div style="position:absolute;width:300px;left:44%;top:45%;margin: -60px 0px 0px -60px;">
<form name="form" method="post" action="login.php"> 
<table width="300" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor=#000000> 
<tr> 
<td width="150"><div align="right">登陆用户：</div></td> 
<td width="150"><input type="text" name="username"></td> 
</tr> 
<tr> 
<td><div align="right">登陆密码：</div></td> 
<td><input type="password" name="password"></td> 
</tr> 
<tr> 
<td><div align="right">保存时间：</div></td> 
<td><select name="cookie" id="cookie"> 
<option value="0" selected>浏览器进程</option> 
<option value="1">保存1天</option> 
<option value="2">保存30天</option> 
<option value="3">保存365天</option> 
</select></td> 
</tr> 
</table> 
<p align="center"> 
<input type="submit" name="Submit" value="登  陆"> 
<input type="reset" name="Reset" value="撤  销"> 
</p> 
</form> 
</div>
</body>
</html>