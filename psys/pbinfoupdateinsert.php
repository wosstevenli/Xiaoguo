<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>移动电源信息录入-深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
    <div id="tlogo"> <img src="images/vptlogo.png"  /></div>
	<div id="ttitle">VPT移动电源信息录入</div>
    </div>
<div style="height:20px;"></div>
<div id="pbgx" style="text-align:center">
<?php echo "你好，你录入的"; ?>
<?php echo $_POST['tl_bm']; ?>
<?php echo "信息已经更新，请继续修订该产品或更新其他产品"; ?>

<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vptdatebase", $con);

$sql="UPDATE tl SET btype = '$_POST[btype]',tl_price = '$_POST[tl_price]',btnumb = '$_POST[btnumb]',btrl = '$_POST[btrl]',shell = '$_POST[shell]',input = '$_POST[input]',output = '$_POST[output]',colour = '$_POST[colour]',weight = '$_POST[weight]',size = '$_POST[size]',uptime = NOW() WHERE tl_bm = '$_POST[tl_bm]' ";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?>
</div>
<?php include"footer.php" ?>
</body>
</html>