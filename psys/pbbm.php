<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/checker.js" ></script>
<title>产品料号录入——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="top">
	<div id="tlogo"> <a href="index.php"><img border="0" src="images/vptlogo.png"  /></a></div>
	<div id="ttitle">VPT移动电源编码录入</div>
    </div>
<div id="pbbminput">
<form action="pbbminsert.php" method="post" name="pbbminput">
  <p>有无LED灯:<select name="LED">
<option value="0">无</option>
<option value="1">有</option>
</select>
  选择&nbsp;形状:<select name="kind">
<option value="H">盒装</option>
<option value="Z">柱状</option>
<option value="Q">其他</option>
</select>
产品名称:<input name="tl_name" type="text" />
  <input name="Submit" type="submit" class="button" onclick="return check()" value="提交"></p>
</form>
</div>
<?php
include "footer.php"
?>
</body>
</html>