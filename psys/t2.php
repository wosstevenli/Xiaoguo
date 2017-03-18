<?php 
$sql_navs = "select * from navs where id=1";
$rs_navs = $db->select_onedata($sql_navs);
/*$sql_enavs = "select * from navs where id=2";
$rs_enavs = $db->select_onedata($sql_enavs);*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>compinfo</title>
</head>

<body>
			<div class="Right">
                <div class="Title"><a href="../psys/<?php echo $rs_navs["enav7"];?>.php">MORE</a><?php echo $rs_navs["nav7"];?><span><?php echo $rs_navs["enav7"];?></span></div>
                <div class="pdlr15">
					<?php
					/*require '../config.inc.php';*/
					$sql_cinfo = "select * from compinfo where id=1";
					$rs_cinfo = $db->select_onedata($sql_cinfo);
					?>
                    <div class="Blue B ContactItem" style="padding-bottom:10px"><?php echo $rs_cinfo["compname"];?></div>
                    <div class="ContactItem"><?php echo $rs_cinfo["tadd"];?>：<span class="Gray"><?php echo $rs_cinfo["add"];?></span></div>
                    <div class="ContactItem"><?php echo $rs_cinfo["tzip"];?>：<span class="Gray"><?php echo $rs_cinfo["zip"];?></span></div>
                    <div class="ContactItem"><?php echo $rs_cinfo["ttel"];?>：<span class="Gray"><?php echo $rs_cinfo["tel"];?></span></div>
                    <div class="ContactItem"><?php echo $rs_cinfo["tfax"];?>：<span class="Gray"><?php echo $rs_cinfo["fax"];?></span></div>
                </div>
            </div>
</body>
</html>