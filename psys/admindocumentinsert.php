<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内容发布录入-深圳市伟富创光电科技有限公司</title>
<link href="..//css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
    <div id="tlogo"> <img src="..//images/vptlogo.png"  /></div>
	<div id="ttitle">VPT内容发布录入</div>
    </div>
<div style="height:20px;"></div>
<div id="pbgx" style="text-align:center">

<?php
session_start();
if(!isset($_SESSION['username']))
	{
		header("Location:index.php");
		exit();
	}
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$title = $_POST['title'];

if(strlen($title) < 1){
	header("Location:index.php");
	exit('非法访问！<a href="javascript:history.back(-1);">返回</a>');
}

/*include('conn.php');*/
?>
<?php echo "你好，你发表的【"; ?>
<?php echo $_POST['title']; ?>
<?php echo "】已经提交成功！"; ?>

<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  { die('Could not connect: ' . mysql_error()); }
mysql_select_db("vptdatebase", $con);

$sql="INSERT INTO news (title,type,contents,postime)
VALUES ('$_POST[title]','$_POST[type]','$_POST[contents]',CURDATE())";

if (!mysql_query($sql,$con))
  { die('Error: ' . mysql_error()); }

mysql_close($con)
?>
</div>
<?php include"..//footer.php" ?>
</body>
</html>