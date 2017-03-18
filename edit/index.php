<?php
include_once("connect.php");
$query=mysql_query("select * from tl where pro_id=1");
$rs=mysql_fetch_array($query);
$LED=$rs['LED'];
$kind=$rs['kind'];
$ls=$rs['ls'];
$tl_bm=$rs['tl_bm'];
$tl_name=$rs['tl_name'];
$tl_price=$rs['tl_price'];
$btype=$rs['btype'];
$btnumb=$rs['btnumb'];
$btrl=$rs['btrl'];
$shell=$rs['shell'];
$input=$rs['input'];
$output=$rs['output'];
$weight=$rs['weight'];
$time=$rs['time'];
$uptime=$rs['uptime'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="jquery,php" />
<meta name="description" content="PHP内容编辑" />
<title>可编辑的表格</title>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jeditable.mini.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js'></script>
<script type="text/javascript">
$(function(){
	 $('.edit').editable('save.php', { 
		 width     :120,
		 height    :18,
		 //onblur    : "ignore",
         cancel    : '取消',
         submit    : '确定',
         indicator : '<img src="css/loader.gif">',
         tooltip   : '单击可以编辑...',
		 callback  : function(value, settings) {
			 $("#modifiedtime").html("刚刚");
         }

     });
	 $('.edit_select').editable('save.php', { 
		 loadurl   : 'json.php',
		 type      : "select",
		 cancel    : '取消',
         submit    : '确定',
         indicator : '<img src="css/loader.gif">',
         tooltip   : '单击可以编辑...',
		 style     : 'display: inline'
	 });
	 $(".datepicker").editable('save.php', { 
		 width     : 120,
		 type      : 'datepicker',
		 onblur    : "ignore",
		 cancel    : '取消',
         submit    : '确定',
         indicator : '<img src="css/loader.gif">',
         tooltip   : '单击可以编辑...',
		 style     : 'display: inline'
	 });
	 $(".textarea").editable('save.php', { 
		 type      : 'textarea',
		 rows      : 6,
		 cols      : 50,
		 onblur    : "ignore",
		 cancel    : '取消',
         submit    : '确定',
         indicator : '<img src="css/loader.gif">'
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
<div id="header">
   <div id="logo">
     <h1 style="text-align:center"><a href="http://192.168.0.111" title="返回helloweba首页">NEWS EDIT</a></h1></div>
</div>

<div id="main">
  <h2 class="top_title" style="text-align:center"><a href="http://192.168.0.111">可编辑的NEWS字段内容</a></h2>
  <div class="msg"><strong>提示</strong>：点击表格中字段对应的内容即可进行在线编辑。</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <thead>
    <tr class="table_title">
      <td colspan="4"><span class="open"></span>客户信息</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="20%" class="table_label">有无LED</td>
      <td width="30%" class="edit" id="LED"><?php echo $LED; ?></td>
      <td width="20%" class="table_label">外观类型</td>
      <td width="30%" class="edit" id="kind"><?php echo $kind; ?></td>
    </tr>
    <tr>
      <td class="table_label">流水号</td>
      <td class="edit" id="ls"><?php echo $ls; ?></td>
      <td class="table_label">套料编码</td>
      <td class="edit" id="tl_bm"><?php echo $tl_bm; ?></td>
    </tr>
    <tr>
      <td class="table_label">产品名称</td>
      <td class="edit" id="tl_name"><?php echo $tl_name; ?></td>
      <td class="table_label">套料价格</td>
      <td class="edit" id="tl_price"><?php echo $tl_price; ?></td>
    </tr>
    <tr>
      <td class="table_label">电池类型</td>
      <td class="edit_select" id="btype"><?php echo $btype; ?></td>
      <td class="table_label">电池数量</td>
      <?php /*?><td class="datepicker" id="btnumb"><?php echo $btnumb; ?></td><?php */?>
      <td class="edit" id="btnumb"><?php echo $btnumb; ?></td>
    </tr>
    <tr>
      <td class="table_label">电池容量</td>
      <td class="edit" id="btrl"><?php echo $btrl; ?></td>
      <td class="table_label">壳料材质</td>
      <td class="edit" id="shell"><?php echo $shell; ?></td>
    </tr>
    <tr>
      <td class="table_label">创建时间</td>
      <td><?php echo $time; ?></td>
      <td class="table_label">修改时间</td>
      <td id="uptime"><?php echo $uptime; ?></td>
    </tr>
    <tr>
      <td class="table_label">输出电压</td>
      <?php /*?><td class="textarea" id="output" colspan="3"><?php echo $output; ?></td><?php */?>
      <td class="edit" id="output" colspan="3"><?php echo $output; ?></td>
    </tr>
  </tbody>
</table>
<br />
<br />
<br />
<br />
<br />

</div>
<div id="footer">
    <p style="text-align:center">copyright 2014-2015 v-photron.com:<a href="http://www.helloweba.com">www.v-photron.com</a></p>
</div>
</body>
</body>
</html>