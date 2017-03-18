<?php 
require 'config.inc.php';
$rs_flash = $db->select_alldata("SELECT * FROM  `flash` ORDER BY  `flash`.`fs_id` desc LIMIT 0 , 100");
$rs_pro = $db->select_alldata("SELECT * FROM  `pro` ORDER BY  `pro`.`pro_id` desc LIMIT 0 , 100");
$rs_news = $db->select_alldata("SELECT * FROM  `news` ORDER BY  `news`.`id` desc LIMIT 0 , 100");
$sql_navs = "select * from navs where id=1";
$rs_navs = $db->select_onedata($sql_navs);
$sql_enavs = "select * from navs where id=2";
$rs_enavs = $db->select_onedata($sql_enavs);
$rs_compint = $db->select_onedata("SELECT * FROM  `compint` ORDER BY  `compint`.`id` desc LIMIT 0 , 100");
/*$rs_compinfo = $db->select_onedata("SELECT * FROM  `compinfo` ORDER BY  `compinfo`.`id` desc LIMIT 0 , 100");*/
$rs_market = $db->select_alldata("SELECT * FROM  `market` ORDER BY  `market`.`id` desc LIMIT 0 , 100");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>完整网站，后台管理，内容发布，身份登录</title>
<meta name="keywords" content="一步一步解决小模块合成完整系统" />
<meta name="description" content="一步一步解决小模块合成完整系统" />
<link href="css/sys.css" rel="stylesheet" type="text/css" />
<script src="js/Jquery.js" type="text/javascript"></script>
<script src="js/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
        $(function () {
            num = $("#PicCont .Pic").size();
            i = 0;
            for (i = 0; i < num; i++) {}
            theInt = null;
            $("#PicCont .Pic").eq(0).fadeIn(1000);
            HuanDeng = function (p) {
                clearInterval(theInt);
                theInt = setInterval(function () {
                    p++;
                    if (p < num) {
                        $("#PicCont .Pic").fadeOut(1000);
                        $("#PicCont .Pic").eq(p).fadeIn(1000);
                    } else {
                        p = 0
                        $("#PicCont .Pic").fadeOut(1000);
                        $("#PicCont .Pic").eq(p).fadeIn(1000);
                    }
                }, 5000);
            }
            HuanDeng(0);
        })
</script>
</head>
<body>
    <?php include "head.php" ?>
    <?php include "qrcode.php" ?>
<!--内容开始-->
    <div class="Content">
        <!--banner开始-->
        <div id="Banner">
            <div id="PicCont">
            <?php
      	 		$ipro = 0;
	  	 		while($ipro<=2){
        	?>
            	<div class="Pic">
                <a href="../psys/newsinfo.php?id=<?php echo $rs_flash[$ipro]["fs_id"] ?>" target="_blank">
                <img alt="<?php echo $rs_flash[$ipro]["title"]?>" src="../images/flash/<?php echo $rs_flash[$ipro]["img"]?>" /></a></div>
        	<?php $ipro++;}?>
            </div>
        </div>
        <!--banner结束-->
        <div class="IndexDiv1">
            <div class="Left mr15">
                <div class="Title"><a href="../psys/<?php echo $rs_navs["enav5"];?>.php">MORE</a><?php echo $rs_navs["nav5"];?><span><?php echo $rs_navs["enav5"];?></span></div>
                <div class="pdlr15">
                <table class="div100 mb15" cellpadding="0" cellspacing="0">
                <tr><?php
      	 		$ipro = 0;
	  	 		while($ipro<=0){
				?>
                <td class="pdr15" style="width:110px;">
                <div><a href="../psys/newsinfo.php?id=<?php echo $rs_news[$ipro]["id"] ?>"><img alt="" width="110" height="75" src="../images/news/<?php echo $rs_news[$ipro]["newsphoto"] ?>" onerror="this.src='../images/default.JPG'" /></a></div>
                </td>
                <td><div class="mb5"><a class="B" href="../psys/newsinfo.php?id=<?php echo $rs_news[$ipro]["id"] ?>"><?php echo $rs_news[$ipro]["title"] ?></a></div>
                       <div class="Gray lh180"><?php echo substr($rs_news[$ipro]["contents"],0,44); ?>......<a class="GrayMore" href="../psys/newsinfo.php?id=<?php echo $rs_news[$ipro]["id"] ?>"><span class="Blue">[详情]</span></a></div>
                </td>
                                       		  <?php $ipro++;}?>
                </tr>
                </table>  
                <?php
      	 		$ipro = 1;
	  	 		while($ipro<=2){
        		?>
                <div><span class="float_r Gray"><?php echo $rs_news[$ipro]["postime"] ?></span><a class="IndexGrayArr" href="../psys/newsinfo.php?id=<?php echo $rs_news[$ipro]["id"] ?>"><?php echo $rs_news[$ipro]["title"] ?></a></div>
                <?php $ipro++;}?>
            </div>                
       </div>
       
       <div class="Center">
          <div class="Title" style="margin-bottom:26px;"><a href="../psys/<?php echo $rs_navs["enav4"];?>.php">MORE</a><?php echo $rs_navs["nav4"];?><span><?php echo $rs_navs["enav4"];?></span></div>
          <div class="pdlr15 Em2 Gray"><a class="IndexGrayArr" href="../psys/<?php echo $rs_navs["enav4"];?>.php"><?php echo substr($rs_compint["contents"],0,370); ?>......</a></div>
       </div>
       
       <div class="Right">
          <div class="Title"><a href="../psys/<?php echo $rs_navs["enav3"];?>.php">MORE</a><?php echo $rs_navs["nav3"];?><span><?php echo $rs_navs["enav3"];?></span></div>
          <div class="pdlr15">
             <div class="mb15">
             <?php
      	 		$ipro = 0;
	  	 		while($ipro<=1){
        		?>
             	<a href="../psys/marketinfo.php?id=<?php echo $rs_market[$ipro]["id"] ?>"><img alt="" width="140" height="74" src="../images/market/<?php echo $rs_market[$ipro]["newsphoto"] ?>" onerror="this.src='../images/default.JPG'" /></a>
                <?php $ipro++;}?>
             </div>
             <?php
      	 		$ipro = 0;
	  	 		while($ipro<=0){
				?>
             <div><a class="IndexGrayArr" href="../psys/marketinfo.php?id=<?php echo $rs_market[$ipro]["id"] ?>"><?php echo substr($rs_market[$ipro]["contents"],0,90); ?>...</a></div>
             <?php $ipro++;}?>
          </div>
       </div>
            
            <div class="clearboth"></div>
        
        </div>
        
        <!--IndexDiv2-->
        <div class="IndexDiv2">
            <div class="Left">
                <div class="Title Title2"><a href="../psys/<?php echo $rs_navs["enav2"];?>.php">MORE</a><?php echo $rs_navs["nav2"];?><span><?php echo $rs_navs["enav2"];?></span></div>  
                <?php
      	 		$ipro = 0;
	  	 		while($ipro<=3){
        		?>              
                <div class="ProductItem">
                    <div><a href="../psys/productsinfo.php?id=<?php echo $rs_pro[$ipro]["pro_id"] ?>"><img width="142" height="142" alt="<?php echo $rs_pro[$ipro]["pro_name"] ?>" src="../PowerBank/<?php echo $rs_pro[$ipro]["pro_name"] ?>/<?php echo $rs_pro[$ipro]["pro_name"] ?>.jpg" /></a></div>
                    <div class="ProductTitle">
                        <div class="PngBg"></div>
                        <a href="../psys/productsinfo.php?id=<?php echo $rs_pro[$ipro]["pro_id"] ?>"><?php echo $rs_pro[$ipro]["pro_name"] ?></a>
                    </div>
                </div>
                <?php $ipro++;}?> 
            </div>
            
            <?php include"t2.php" ?>
            <div class="clearboth"></div>
            
        </div>
    </div>
<!--内容结束-->
    <?php  include "footer.php"?>
</body>
</html>