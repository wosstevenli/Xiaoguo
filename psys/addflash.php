<?php
include_once("connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="jquery,php" />
<meta name="description" content="PHP内容编辑" />
<title>导航条目编辑</title>
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="../css/admin.css" />
<style type="text/css">
table{width:100%; margin:20px auto; border-collapse:collapse;}
table td{line-height:26px; padding:2px; padding-left:8px; border:1px solid #b6d6e6;}
.table_title{height:26px; line-height:26px; background:url(css/btn_bg.gif) repeat-x bottom; font-weight:bold; text-indent:.3em; outline:0;}
.table_label{background:#e8f5fe; text-align:right; }
.btn{height:24px; background:url(css/btn_bg.gif) repeat-x; padding:0 4px; font-size:12px; border:1px solid #ccc; cursor:pointer; margin-left:3px}
.input{border:1px solid #369; background:#ffc; padding:2px}
.msg{padding-left:30px; margin-top:20px}
textarea{font-size:12px}
</style>
<!--<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.jeditable.mini.js"></script>-->
</head>

<body>
<?php include "thead.php"?>
<div id="main">
<!--banner图片上传-->
<form action="flashinsert.php" method="post" name="pbupdate" enctype="multipart/form-data">
<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0>
  <tr>
    <td width="91" style="text-align:right">标题图片：</td>
    <td ><input name="title" type="text" size="70" maxlength="18" /></td>
    <td width="842"><input name="newsphoto" type="file" size="20" maxlength="52" /></td>
  </tr>
   <tr>
   <td colspan="5" align="center"><input name="Submit" type="submit" class="button" onclick="return check()" value="确定上传"></td>
   </tr>
</table>
</form>
<!--banner图片上传结束-->
</div>
<?php include "adminfooter.php"?>
</body>
</html>