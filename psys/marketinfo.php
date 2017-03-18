<?php 
require '../config.inc.php';
mysql_query("SET NAMES utf8"); 
$id = $_GET['id'];
$sql_market = "select * from market where id=".$id."";
$rs_market = $db->select_onedata($sql_market);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><HEAD>
<TITLE><?php echo $rs_market["title"];?></TITLE>
<META http-equiv="Content-Type" content="text/html; charset=UTF8" />
<link href="../css/sys.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<div class="qrCode">
 <dl>
	<dt><a href="mailto:it@v-photron.com?subject=Interview<?php echo $rs_market["title"];?>&body=Hello,This is my interview <?php echo $rs_market["title"];?>resume：" target=_blank ><img src="../images/getinfo12.jpg" alt="获取产品资料" /></a></dt>
 </dl>
</div>
<?php include "head.php" ?>
<DIV id=newsmain class="Content">
<div id=newsinfoimg style="color:#FFF"><?php echo $rs_market["title"];?></div>
<div id=newscontents>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rs_market["contents"];?></div>
<DIV class="clearboth"></DIV>

</DIV>

<?php include "footer.php" ?>

<DIV class="clearboth"></DIV>

</BODY>
</HTML>
