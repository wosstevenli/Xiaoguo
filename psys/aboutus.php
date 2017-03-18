<?php 
require '../config.inc.php';
$rs_products = $db->select_alldata("SELECT * FROM  `news` ORDER BY  `news`.`id` desc");
$sql_bnavs = "select * from navs where id=3";
$rs_bnavs = $db->select_onedata($sql_bnavs);
	$sql_navs = "select * from navs where id=1";
$rs_navs = $db->select_onedata($sql_navs);
$rs_compint = $db->select_onedata("SELECT * FROM  `compint` where id=1");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $rs_navs["nav4"];?></title>
<link href="../css/sys.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include "head.php"?>
<div class="Content">

        <div class="mb15"><img width="1000" height="250" alt="" src="../images/banner/<?php echo $rs_bnavs["nav4"];?>"></div>
        <!--左侧导航-->
		<?php include "leftside.php" ?>
        
        <!--右侧内容-->
        <div class="RightSide">
            <div class="Location">当前位置：<a href="/">首页</a> 〉<span class="Blue"><span id="labName"><?php echo $rs_navs["nav4"];?></span></span></div>
            <div class="pdl10 pdr20">
            <!--分页内容开始-->
			<h2><?php echo $rs_compint["title"]; ?></h2>
            <div class="introduce"><?php echo $rs_compint["contents"]; ?></div>
            <!--分页内容介绍-->
            <div class="DashedLine mb20"></div>
			</div>
       </div>
       <!--右侧内容结束-->
</div>
<!--contents结束-->

<div class="clearboth"></div>
<?php include "footer.php"?>

</body>
</html>