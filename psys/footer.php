<?php
	$sql_cinfo = "select * from compinfo where id=1";
	$rs_cinfo = $db->select_onedata($sql_cinfo);
?>
<body>
<div class="Footer">
        <div class="ZiFooter">
            Copyright &copy;<?php echo $rs_cinfo["web"];?> All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp; 版权所有：2008-<?php echo date("Y")?><?php echo $rs_cinfo["compname"];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rs_cinfo["icp"];?><br />
            <a class="Green" href="/psys/aboutus.php" target="_blank"><u>Webdesigned by stevenli</u></a><br /><i style="color:#517503;padding-right:10px;">您是第<?php
date_default_timezone_set("Asia/Shanghai");
echo date("ymd")+365;
?>位访问者</i>
                <!--流量统计-->
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253873946'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1253873946%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    <!--流量统计-->
        </div>
		<div style="margin-top:10px;"></div>
    </div>
</body>
</html>