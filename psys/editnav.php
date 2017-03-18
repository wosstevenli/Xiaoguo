<?php
include_once("connect.php");
$query=mysql_query("select * from navs where id=1");
$rs=mysql_fetch_array($query);
$navs1=$rs['nav1'];
$navs2=$rs['nav2'];
$navs3=$rs['nav3'];
$navs4=$rs['nav4'];
$navs5=$rs['nav5'];
$navs6=$rs['nav6'];
$navs7=$rs['nav7'];
$navs8=$rs['nav8'];
$enavs1=$rs['enav1'];
$enavs2=$rs['enav2'];
$enavs3=$rs['enav3'];
$enavs4=$rs['enav4'];
$enavs5=$rs['enav5'];
$enavs6=$rs['enav6'];
$enavs7=$rs['enav7'];
$enavs8=$rs['enav8'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="jquery,php" />
<meta name="description" content="PHP内容编辑" />
<title>导航条目编辑</title>
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="../css/admin.css" />
<style type="text/css">
table{width:100%; margin:20px auto; border-collapse:collapse;}
table td{line-height:26px; padding:2px; padding-left:8px; border:1px solid #b6d6e6;}
.table_title{height:26px; line-height:26px; background:url(css/btn_bg.gif) repeat-x bottom; font-weight:bold; text-indent:.3em; outline:0;}
.table_label{background:#e8f5fe; text-align:right; }
.btn{height:24px; background:url(css/btn_bg.gif) repeat-x; padding:0 4px; font-size:12px; border:1px solid #ccc; cursor:pointer; margin-left:3px}
.input{border:1px solid #369; background:#ffc; padding:2px}
.msg{padding-left:30px; margin-top:20px}
textarea{font-size:12px}
</style>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.jeditable.mini.js"></script>
<!--<script type='text/javascript' src='../js/jquery-ui.min.js'></script>-->
<script type="text/javascript">
$(function(){
	 $('.edit').editable('navsave.php', {  //编辑文本框
		 width     :135,
		 height    :20,
		 //onblur    : "ignore",
         cancel    : '取消',
         submit    : '确定',
         indicator : '<img src="../css/loader.gif">',
         tooltip   : '单击可以编辑...',
		 callback  : function(value, settings) {
			 $("#modifiedtime").html("刚刚");
         }

     });
	 $('.edit_select').editable('save.php', { //编辑下拉菜单
		 loadurl   : 'json.php',
		 type      : "select",
		 cancel    : '取消',
         submit    : '确定',
         indicator : '<img src="../css/loader.gif">',
         tooltip   : '单击可以编辑...',
		 style     : 'display: inline'
	 });
	 $(".datepicker").editable('save.php', { //日历选择
		 width     : 120,
		 type      : 'datepicker',
		 onblur    : "ignore",
		 cancel    : '取消',
         submit    : '确定',
         indicator : '<img src="../css/loader.gif">',
         tooltip   : '单击可以编辑...',
		 style     : 'display: inline'
	 });
	 $(".textarea").editable('save.php', { //编辑文本域内容
		 type      : 'textarea',
		 rows      : 6,
		 cols      : 50,
		 onblur    : "ignore",
		 cancel    : '取消',
         submit    : '确定',
         indicator : '<img src="../css/loader.gif">'
	 });	 
});
//调用jquery ui的datepicker日历插件
$.editable.addInputType('datepicker', {
    element : function(settings, original) {
        var input = $('<input class="input" />');
		input.attr("readonly","readonly");
        $(this).append(input);
        return(input);
    },
    plugin : function(settings, original) {
		var form = this;
		$("input",this).datepicker();
    }
});
</script>
</head>

<body>
<?php include "thead.php"?>
<div id="main">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <td style="color:#F00">导航内容编辑-提示：点击表格中字段对应的内容即可进行在线编辑，英文必须和对应网页文件名称相同</td>
  </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <thead>
    <tr class="table_title">
      <td colspan="4"><span class="open"></span>编辑公司信息</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="25%" class="edit" id="nav1"><?php echo $navs1; ?></td>
      <td width="25%" class="edit" id="enav1"><?php echo $enavs1; ?></td>
      <td width="25%" class="edit" id="nav2"><?php echo $navs2; ?></td>
      <td width="25%" class="edit" id="enav2"><?php echo $enavs2; ?></td>
    </tr>
    <tr>
      <td class="edit" id="nav3"><?php echo $navs3; ?></td>
      <td class="edit" id="enav3"><?php echo $enavs3; ?></td>
      <td class="edit" id="nav4"><?php echo $navs4; ?></td>
      <td class="edit" id="enav4"><?php echo $enavs4; ?></td>
    </tr>
    <tr>
      <td class="edit" id="nav5"><?php echo $navs5; ?></td>
      <td class="edit" id="enav5"><?php echo $enavs5; ?></td>
      <td class="edit" id="nav6"><?php echo $navs6; ?></td>
      <td class="edit" id="enav6"><?php echo $enavs6; ?></td>
    </tr>
    <tr>
      <td class="edit" id="nav7"><?php echo $navs7; ?></td>
      <td class="edit" id="enav7"><?php echo $enavs7; ?></td>
      <td class="edit" id="nav8"><?php echo $navs8; ?></td>
      <td class="edit" id="enav8"><?php echo $enavs8; ?></td>
    </tr>
  </tbody>
</table>
<!--banner图片上传-->
<form action="editsave.php" method="post" name="pbupdate" enctype="multipart/form-data">
<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0>
  <tr>
    <td width="91" style="text-align:right">标题图片：</td>
    <td width="1303"><input name="newsphoto" type="file" size="20" maxlength="52" /></td>
  </tr>
  <tr>
    <td style="text-align:right">图片归属：</td>
    <td><select name="kind">
	<option value="nav1"><?php echo $navs1; ?></option>
    <option value="nav2"><?php echo $navs2; ?></option>
    <option value="nav3"><?php echo $navs3; ?></option>
    <option value="nav4"><?php echo $navs4; ?></option>
    <option value="nav5"><?php echo $navs5; ?></option>
    <option value="nav6"><?php echo $navs6; ?></option>
    <option value="nav7"><?php echo $navs7; ?></option>
    <option value="nav8"><?php echo $navs8; ?></option>
    </select></td>
  </tr>
   <tr>
   <td colspan="5" align="center"><input name="Submit" type="submit" class="button" onclick="return check()" value="确定上传"></td>
   </tr>
</table>
</form>
<!--banner图片上传结束-->
</div>
<?php include "adminfooter.php"?>
</body>
</html>