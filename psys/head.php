<?php 
$sql_navs = "select * from navs where id=1";
$rs_navs = $db->select_onedata($sql_navs);
/*$sql_enavs = "select * from navs where id=1";
$rs_enavs = $db->select_onedata($sql_enavs);*/   //不需要，在enav上进行自动加1
$rs_compinfo = $db->select_onedata("SELECT * FROM  `compinfo` where id=1");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>head</title>
<script type="text/javascript"> 
// 设置为主页 
function SetHome(obj,vrl){ 
try{ 
obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl); 
} 
catch(e){ 
if(window.netscape) { 
try { 
netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
} 
catch (e) { 
alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。"); 
} 
var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch); 
prefs.setCharPref('browser.startup.homepage',vrl); 
}else{ 
alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入："+vrl+"点击确定。"); 
} 
} 
} 
// 加入收藏 兼容360和IE6 
function shoucang(sTitle,sURL) 
{ 
try 
{ 
window.external.addFavorite(sURL, sTitle); 
} 
catch (e) 
{ 
try 
{ 
window.sidebar.addPanel(sTitle, sURL, ""); 
} 
catch (e) 
{ 
alert("加入收藏失败，请使用Ctrl+D进行添加"); 
} 
} 
} 
</script>  <!--添加收藏/设为主页-->
</head>

<body>
    <div class="TopPic"></div>
    <div class="Top">
        <div class="Logo"><a href="../psys/index.php"><img alt="公司LOGO" src="images/<?php echo $rs_compinfo["logo"];?>" / width="100" height="70"></a></div>
        <div class="float_r pdr10">
                <!--<div class="Text_r"><a href="../psys" target="_blank"><span class="Blue">English</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="Add" href="javascript:void(0)" onclick="SetHome(this,window.location)">设为首页</a><img alt="设为首页" src="../images/top_tel.gif" /></div>-->
                <div class="Text_r"><a href="../psys" target="_blank"><div style="float:right; margin-left:10px;"><span class="Blue">English</span></a><a class="Add" href="javascript:void(0)" onclick="SetHome(this,window.location)">设为首页</a></div><div>
    <form action="../psys/search_result.php" method="POST"> 
<input type="text" size=50 name="ename" value="">
		 <input type="submit" name="查询" value="查询"> 
	</form></div>
</div>

            <div class="Menu float_r">
            <?php
      	 		$ipro = 1;
	  	 		while($ipro<=7){
        	?>
                <a class="ot" href="../psys/<?php echo $rs_navs["enav$ipro"];?>.php"><?php echo $rs_navs["nav$ipro"];?></a>
                <?php $ipro++;}?>
            </div>
        </div>
        <div class="clearboth"></div>
    </div>
</body>
</html>