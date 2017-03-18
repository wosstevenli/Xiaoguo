<?php 
$sql_navs = "select * from navs where id=1";
$rs_navs = $db->select_onedata($sql_navs);
/*$sql_enavs = "select * from navs where id=2";
$rs_enavs = $db->select_onedata($sql_enavs);*/  //全部读取第一行
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>leftside</title>
</head>

<body>
<!--左侧导航-->
        <div class="LeftSide">
            <div class="Title">返回主页</div>
            <div class="mb5">
            <?php
      	 		$ipro = 1;
	  	 		while($ipro<=7){
        	?>
                <div class="Item"><a class="cur" href="../psys/<?php echo $rs_navs["enav$ipro"];?>.php"><?php echo $rs_navs["nav$ipro"];?></a></div>
			<?php $ipro++;}?>            
            </div>
            <div class="mb10"><a href="../psys/<?php echo $rs_navs["enav7"];?>.php"><img alt="" src="../images/left_pic1.jpg"></a></div>
            <div><a href="../psys/<?php echo $rs_navs["enav6"];?>.php"><img alt="" src="../images/left_pic2.jpg"></a></div>
        </div>
        <!--左侧导航结束-->
</body>
</html>