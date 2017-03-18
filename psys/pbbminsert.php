<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑产品料号——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="top">
    <div id="tlogo"> <img src="images/vptlogo.png"  /></div>
	<div id="ttitle">VPT产品编码录入</div>
    </div>
<div style=" height:15px;"></div>
<div id="feedback">
<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vptdatebase", $con);
$result = mysql_query("SELECT *  FROM `tl` WHERE `LED` = '$_POST[LED]' AND `kind` = '$_POST[kind]' order by ls desc limit 1");

while($row = mysql_fetch_array($result))
  {
  echo "你好，你输入的";
  echo "$_POST[tl_name]";
  echo "料号为:";
  echo $next=++$row['tl_bm'];
  echo ".流水号为:";
  echo $nextls=++$row['ls'];
  echo "已经录入数据库，请勿重复录入！";
  }
?>

<?php

$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vptdatebase", $con);

$sql="INSERT INTO tl (LED,kind,tl_name,ls,tl_bm,time)
VALUES
('$_POST[LED]','$_POST[kind]','$_POST[tl_name]','$nextls','$next',NOW())";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?>

</div>
<div id="foot">Copyright 2014 V-PHOTRON Technology(Shenzhen) CO.,LTD. All Reserved.</div>
</body>
</html>