<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内容发布录入-深圳市伟富创光电科技有限公司</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<?php 
$sheet=$_POST['kind'];
?>
</head>
<body>
<div id="top">
    <div id="tlogo"> <img src="../images/vptlogo.png"  /></div>
	<div id="ttitle">VPT内容发布录入</div>
    </div>
<div style="height:20px;"></div>
<div id="pbgx" style="text-align:center">
<!--添加上传图片-->
<?php
if ($_FILES["newsphoto"]["size"] < 1000000)
  {
  if ($_FILES["newsphoto"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["newsphoto"]["error"] . "<br />";
    }
  else
    {
    if (file_exists("../images/" . $_FILES["newsphoto"]["name"]))
      {
      echo $_FILES["newsphoto"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["newsphoto"]["tmp_name"],
      "../images/$sheet/" . $_FILES["newsphoto"]["name"]);
      }
    }
  }
else
  {
  echo "Invalid file/无效文件";
  }
?>
<!--添加上传图片-->
<?php echo "你好，你发表的【"; ?>
<?php echo $_POST['title']; ?>
<?php echo "】已经提交成功！"; ?>

<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vptdatebase", $con);
//$sheet=$_POST['type'];  //定义选择信息是哪一类从而上传到哪一个文件夹
//$folid=$_POST['newsphoto']; //定义上传文件夹

$sql="INSERT INTO $sheet (title,newsphoto,contents,postime)
VALUES
('$_POST[title]','".$_FILES["newsphoto"]["name"]."','$_POST[contents]',NOW())";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?>
</div>
<?php include"adminfooter.php" ?>
</body>
</html>