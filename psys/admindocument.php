<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内容发布-深圳市伟富创光电科技有限公司</title>
</head>
<style type="text/css"> 
body{ 
     margin:0px; 
     SCROLLBAR-FACE-COLOR: #e0edfd; 
     SCROLLBAR-HIGHLIGHT-COLOR: #dfe8f4; 
     SCROLLBAR-SHADOW-COLOR: #2c7cda; 
     SCROLLBAR-3DLIGHT-COLOR: #2c7cda; 
     SCROLLBAR-ARROW-COLOR: #14549f; 
     SCROLLBAR-TRACK-COLOR: #eaf5fd; 
     SCROLLBAR-DARKSHADOW-COLOR: #ffffff; 
     SCROLLBAR-BASE-COLOR: #e0edfd; 
} 
.menu{ display:none; } 
input.blur{ 
     border:1px solid #99BBE8; 
     background:#FFFFFF; 
     height:18px; 
} 
.tableborder{ 
border:solid 1px #CCCCCC; 
border-collapse:collapse; 
font-size:12px; 
} 
</style>
<body>
<?php session_start(); ?>
<?php 
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
$query = @mysql_query("select userflag from user " ."where username = '$username'") or die("SQL语句执行失败");   //执行不成功
$row = mysql_fetch_array($query); 

//获得用户权限信息 
$flag = $row['userflag']; 

//根据userflag的值输出不同的欢迎信息 
if($flag == 1) {
echo '<div id="forminput">
<form action="admindocumentinsert.php" method="post" name="pbupdate">
<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0>
  <tr>
    <th height="40" colspan="5" valign="middle" scope="col"><h2>内容发布系统</h2></th>
  </tr>
  <tr>
    <td colspan="5" align="center">发布新内容</td>
  </tr>
  <tr>
    <td width="91" style="text-align:right">文章标题：</td>
    <td width="1303"><input name="title" type="text" size="20" maxlength="22" /></td>
  </tr>
  <tr>
    <td style="text-align:right">文章类型：</td>
    <td><select name="type">
		<option value="科技">科技</option>
		<option value="学术">学术</option>
		</select>
	</td>
  </tr>
  <tr>
    <td height="483" style="text-align:right">文章内容：</td>
    <td><textarea name="contents" cols="183" rows="43"></textarea></td>
  </tr>
   <tr>
   <td colspan="5" align="center"><input name="Submit" type="submit" class="button" onclick="return check()" value="确定发布"></td>
   </tr>
</table>
</form>
</div><br />';}

//修改原始判断
if($flag == 0) 
echo "欢迎用户".$_SESSION['username']."登录系统"; 
echo "<a href='logout.php' href='logout.php'>注销</a>"; 
} 
else 
{ 
echo "您没有权限访问本页面"; 
} 

?>
</body>
</html>