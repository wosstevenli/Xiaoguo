<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$_POST[ename]"; ?>-LED查询结果</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/sys.css" rel="stylesheet" type="text/css" />
</head>
<!--chagetou-->
<div class="Top">
        <div class="Logo"><a href="../psys/index.php"><img alt="公司LOGO" src="../images/logo.jpg" width="100" height="70"></a></div>
        <div class="float_r pdr10">
                <div class="Text_r"><a href="../psys" target="_blank"></a><div style="float:right; margin-left:10px;"><a href="../psys" target="_blank"><span class="Blue">English</span></a><a class="Add" href="javascript:void(0)" onclick="SetHome(this,window.location)">设为首页</a></div><div>
    <form action="../psys/search_result.php" method="POST"> 
<input type="text" size="50" name="ename" value="">
		 <input type="submit" name="查询" value="查询"> 
	</form></div>
</div>

            <div class="Menu float_r">
                            <a class="ot" href="../psys/COMPANY.php">公司介绍</a>
                                <a class="ot" href="../psys/PRODUCTS.php">产品中心</a>
                                <a class="ot" href="../psys/MARKET.php">行情市况</a>
                                <a class="ot" href="../psys/ABOUTUS.php">关于我们</a>
                                <a class="ot" href="../psys/NEWS.php">新闻中心</a>
                                <a class="ot" href="../psys/CAREERS.php">招贤纳士</a>
                                <a class="ot" href="../psys/CONTACTS.php">联系我们</a>
                            </div>
        </div>
        <div class="clearboth"></div>
    </div>
<!--chagetou-->
	<div id="formtitle"><?php echo "$_POST[ename]"; ?>-LED参数查询</div>
<?php 
$link =mysql_connect("localhost","root","root"); 
mysql_select_db("vptdatebase", $link); 
?>  

<?php 
$ename=$_POST["ename"]; 
if($ename != null){ 
$b = " and pro_name like '%$ename%' OR pro_zkind like '%$ename%' OR pro_mate like '%$ename%' OR pro_price like '%$ename%' OR pro_vw like '%$ename%' OR pro_pty like '%$ename%' OR pro_ledtype like '%$ename%' OR pro_lm like '%$ename%'OR pro_wtemp like '%$ename%'OR pro_ctemp like '%$ename%'OR pro_ra like '%$ename%' OR pro_size like '%$ename%' OR pro_power like '%$ename%' OR pro_mate like '%$ename%' OR pro_life like '%$ename%' OR pro_color like '%$ename%' OR pro_kind like '%$ename%' OR pro_weight like '%$ename%' ";} 
$q = "SELECT * FROM pro where (1=1)"; 
$q .=$b; 

mysql_query("SET NAMES GB2312"); 
$rs = mysql_query($q, $link); 
echo "<table width=1440 border=1 cellspacing=0 cellpadding=0 bordercolor=#000000>"; 
echo "<tr><td>产品料号</td><td>产品类型</td><td>灯座类型</td><td>价格</td><td>电压</td><td>灯珠数目</td><td>LED类型</td><td>流明值</td><td>工作温度</td><td>色温范围</td><td>显色指数</td><td>尺寸</td><td>功率</td><td>材质</td><td>质保期</td><td>颜色</td><td>重量</td></tr>"; 
while($row = mysql_fetch_object($rs)) echo "<tr><td><a href='PowerBank/$row->pro_name/$row->pro_name.jpg' target=_blank>$row->pro_name</a></td><td>$row->pro_kind</td><td>$row->pro_zkind</td><td>$row->pro_price</td><td>$row->pro_vw</td><td>$row->pro_pty</td><td>$row->pro_ledtype</td><td>$row->pro_lm</td><td>$row->pro_wtemp</td><td>$row->pro_ctemp</td><td>$row->pro_ra</td><td>$row->pro_size</td><td>$row->pro_power</td><td>$row->pro_mate</td><td>$row->pro_life</td><td>$row->pro_color</td><td>$row->pro_weight</td></tr>"; 
echo "</table>"; 

mysql_close($link); 

?> 
<!--chagewei-->
<div class="Footer">
        <div class="ZiFooter">
            Copyright ©v-photron.com All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp; 版权所有：2008-2014深圳市伟富创光电科技有限公司&nbsp;&nbsp;&nbsp;&nbsp;粤ICP备09058391号<br>
            <a class="Green" href="/psys/aboutus.php" target="_blank"><u>Webdesigned by stevenli</u></a><br><i style="color:#517503;padding-right:10px;">您是第141583位访问者</i>
                <!--流量统计-->
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253873946'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1253873946%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1253873946"><a href="http://www.cnzz.com/stat/website.php?web_id=1253873946" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="http://icon.cnzz.com/img/pic.gif"></a></span><script src=" http://s95.cnzz.com/z_stat.php?id=1253873946&amp;show=pic" type="text/javascript"></script><script src="http://c.cnzz.com/core.php?web_id=1253873946&amp;show=pic&amp;t=z" charset="utf-8" type="text/javascript"></script>
    <!--流量统计-->
        </div>
		<div style="margin-top:10px;"></div>
    </div>
<!--chagewei-->
</html>