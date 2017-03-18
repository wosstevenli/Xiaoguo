<?php 
$rs_flash = $db->select_alldata("SELECT * FROM  `compinfo` ORDER BY  `compinfo`.`id` ASC LIMIT 0 , 100");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>compinfo</title>
</head>

<body>
			<div class="Right">
                <div class="Title"><a href="../psys/contact.php">MORE</a>联系我们<span>CONTACT</span></div>
                <div class="pdlr15">
                	<?php
      	 			$ipro = 0;
	  	 			while($ipro<=0){
        			?>
                    <div class="Blue B ContactItem" style="padding-bottom:10px"><?php echo $rs_flash[$ipro]["compname"] ?></div>
                    <div class="ContactItem"><?php echo $rs_flash[$ipro]["add0"] ?>：<span class="Gray"><?php echo $rs_flash[$ipro]["add"] ?></span></div>
                    <div class="ContactItem">邮政编码：<span class="Gray"><?php echo $rs_flash[$ipro]["zip"] ?></span></div>
                    <div class="ContactItem">电　　话：<span class="Gray"><?php echo $rs_flash[$ipro]["tel"] ?></span></div>
                    <div class="ContactItem">传　　真：<span class="Gray"><?php echo $rs_flash[$ipro]["fax"] ?></span></div>
                    <?php $ipro++;}?>
                </div>
            </div>
</body>
</html>