<?php 
$link =mysql_connect("localhost","root","root"); 
mysql_select_db("vptdatebase", $link); 
?> 
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
.menu{ 
    display:none; 
} 
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
<body onclick="closeDaohang(event.srcElement||event.target,'ds','xx')">
<div id="forminput">
<form action="postinsert.php" method="post" name="pbupdate" enctype="multipart/form-data">
<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0>
  <tr>
    <th height="40" colspan="5" valign="middle" scope="col"><h2>内容发布系统</h2></th>
  </tr>
  <tr>
    <td colspan="5" align="center">发布新内容</td>
  </tr>
  <tr>
    <td width="91" style="text-align:right">内容标题：</td>
    <td width="1303"><input name="title" type="text" size="20" maxlength="18" />(标题最长不得超过18个字)</td>
  </tr>
  <tr>
    <td width="91" style="text-align:right">信息图片：</td>
    <td width="1303"><input name="newsphoto" type="file" size="20" maxlength="52" /></td>
<!--<input name="newsphoto" type="text" size="20" maxlength="52" /></td>-->
  </tr>
  <tr>
    <td style="text-align:right">信息归属：</td>
    <td><select name="kind">
<option value="compint">公司介绍</option>
<option value="market">市场行情</option>
<option value="news">新闻中心</option>
<option value="offer">招贤纳士</option>
</select></td>
  </tr>
  <tr>
    <td height="483" style="text-align:right">信息内容：</td>
    <td><textarea name="contents" cols="183" rows="43"></textarea></td>
  </tr>
   <tr>
   <td colspan="5" align="center"><input name="Submit" type="submit" class="button" onclick="return check()" value="确定发布"></td>
   </tr>
</table>
</form>
</div>
<?PHP include "adminfooter.php"?>
</body>
</html>