<?php 
require '../config.inc.php';
$rs_products = $db->select_alldata("SELECT * FROM  `news` ORDER BY  `news`.`id` desc");
$sql_bnavs = "select * from navs where id=3";
$rs_bnavs = $db->select_onedata($sql_bnavs);
	$sql_navs = "select * from navs where id=1";
$rs_navs = $db->select_onedata($sql_navs);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $rs_navs["nav7"];?></title>
<link href="../css/sys.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include "head.php"?>
<div class="Content">

        <div class="mb15"><img width="1000" height="250" alt="" src="../images/banner/<?php echo $rs_bnavs["nav7"];?>"></div>
        <!--左侧导航-->
		<?php include "leftside.php" ?>
        <!--左侧导航结束-->
        
        <!--右侧内容-->
        <div class="RightSide">
            <div class="Location">当前位置：<a href="/">首页</a> 〉<span class="Blue"><span id="labName"><?php echo $rs_navs["nav7"];?></span></span></div>
            <div class="pdl10 pdr20">
            <!--分页内容开始-->
			<?php include "t2.php" ?>
            <!--分页内容介绍-->
			</div>
       </div>
       <!--右侧内容结束-->
</div>
<!--contents结束-->

<div class="clearboth"></div>
<?php include "footer.php"?>

</body>
</html>