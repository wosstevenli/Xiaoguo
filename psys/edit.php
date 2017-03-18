<?php
include_once("connect.php");
$query=mysql_query("select * from compinfo where id=1");
$rs=mysql_fetch_array($query);
$compname=$rs['compname'];
$add=$rs['add'];
$zip=$rs['zip'];
$tel=$rs['tel'];
$fax=$rs['fax'];
$email=$rs['email'];
$web=$rs['web'];
$icp=$rs['icp'];
/*内容提示项目亦可以编辑*/
/*$query=mysql_query("select * from compinfo where id=2");
$rs=mysql_fetch_array($query);*/
$tcompname=$rs['tcompname'];
$tadd=$rs['tadd'];
$tzip=$rs['tzip'];
$ttel=$rs['ttel'];
$tfax=$rs['tfax'];
$temail=$rs['temail'];
$tweb=$rs['tweb'];
$ticp=$rs['ticp'];
$logo=$rs['logo']
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="jquery,php" />
<meta name="description" content="PHP内容编辑" />
<title>公司信息编辑</title>
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="../css/admin.css" />
<style type="text/css">
table{width:96%; margin:20px auto; border-collapse:collapse;}
table td{line-height:26px; padding:2px; padding-left:8px; border:1px solid #b6d6e6;}
.table_title{height:26px; line-height:26px; background:url(css/btn_bg.gif) repeat-x bottom; font-weight:bold; text-indent:.3em; outline:0;}
.table_label{background:#e8f5fe; text-align:right; }
.btn{height:24px; background:url(css/btn_bg.gif) repeat-x; padding:0 4px; font-size:12px; border:1px solid #ccc; cursor:pointer; margin-left:3px}
.input{border:1px solid #369; background:#ffc; padding:2px}
.msg{padding-left:30px; margin-top:20px}
textarea{font-size:12px}
</style>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.jeditable.mini.js"></script>
<!--<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js'></script>-->
<script type='text/javascript' src='../js/jquery-ui.min.js'></script>
<script type="text/javascript">
$(function(){
	 $('.edit').editable('save.php', {  //编辑文本框
		 width     :220,
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
  <td style="color:#F00">公司信息编辑-提示：点击表格中字段对应的内容即可进行在线编辑</td>
  </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <thead>
    <tr class="table_title">
      <td colspan="4"><span class="open"></span>编辑公司信息</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="25%" class="edit" id="tcompname"><?php echo $tcompname; ?></td>
      <td width="25%" class="edit" id="compname"><?php echo $compname; ?></td>
      <td width="25%" class="edit" id="tadd"><?php echo $tadd; ?></td>
      <td width="25%" class="edit" id="add"><?php echo $add; ?></td>
    </tr>
    <tr>
      <td class="edit" id="tzip"><?php echo $tzip; ?></td>
      <td class="edit" id="zip"><?php echo $zip; ?></td>
      <td class="edit" id="ttel"><?php echo $ttel; ?></td>
      <td class="edit" id="tel"><?php echo $tel; ?></td>
    </tr>
    <tr>
      <td class="edit" id="tfax"><?php echo $tfax; ?></td>
      <td class="edit" id="fax"><?php echo $fax; ?></td>
     <td class="edit" id="temail"><?php echo $temail; ?></td>
      <td class="edit" id="email"><?php echo $email; ?></td>
    </tr>
    <tr>
      <!--<td class="table_label">网站地址</td>
      <td class="edit_select" id="web">-->
      <td class="edit" id="tweb"><?php echo $tweb; ?></td>
      <td class="edit" id="web"><?php echo $web; ?></td>
      <td class="edit" id="ticp"><?php echo $ticp; ?></td>
      <td class="edit" id="icp"><?php echo $icp; ?></td>
    </tr>
    <td>公司LOGO</td>
    <!--上传新LOGO-->
		<form action="logoinsert.php" method="post" name="pbupdate" enctype="multipart/form-data">
    	<td width="842"><input name="newsphoto" type="file" size="20" maxlength="52" /></td>
   		<td colspan="5" align="center"><input name="Submit" type="submit" class="button" onclick="return check()" value="确定上传"></td>
		</form>
		<!--上传新LOGO-->
  </tbody>
</table>
<br />
<br />
<br />
<br />
<br />

</div>
<?php include "adminfooter.php"?>
</body>
</body>
</html>