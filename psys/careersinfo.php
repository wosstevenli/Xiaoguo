<?php 
require '../config.inc.php';
mysql_query("SET NAMES utf8"); 
$id = $_GET['id'];
$sql_offer = "select * from offer where id=".$id."";
$rs_offer = $db->select_onedata($sql_offer);
/*$rs_prolist = $db->select_alldata("select * from news order by id desc ");*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><HEAD>
<TITLE><?php echo $rs_offer["title"];?></TITLE>
<META http-equiv="Content-Type" content="text/html; charset=UTF8" />
<!--<link href="../css/style.css" rel="stylesheet" type="text/css" />-->  <!--和sys样式相互影响-->
<link href="../css/sys.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<div class="qrCode">
 <dl>
	<dt><a href="mailto:it@v-photron.com?subject=Interview<?php echo $rs_offer["title"];?>&body=Hello,This is my interview <?php echo $rs_offer["title"];?>resume：" target=_blank ><img src="../images/resume.jpg" alt="获取产品资料" /></a></dt>
 </dl>
</div>
<?php include "head.php" ?>
<DIV id=newsmain class="Content">
<div id=newsinfoimg style="color:#FFF"><?php echo $rs_offer["title"];?></div>
<div id=newscontents>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rs_offer["contents"];?></div>
<DIV class="clearboth"></DIV>

</DIV>

<?php include "footer.php" ?>

<DIV class="clearboth"></DIV>

</BODY>
</HTML>
