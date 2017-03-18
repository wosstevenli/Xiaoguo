<?php 
$link =mysql_connect("localhost","root","root"); 
mysql_select_db("vptdatebase", $link); 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单/样品生产单-深圳市伟富创光电科技有限公司</title>
<script type="text/javascript" src="js/formchecker.js" ></script>
</head>
<body>
<div id="forminput">
<form action="forminsert.php" method="post" name="forminput">
<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0>
  <tr>
    <th height="40" colspan="5" valign="middle" scope="col"><h2>深圳市伟富创光电科技有限公司</h2></th>
  </tr>
  <tr>
    <td colspan="5" align="center">订单/样品生产单</td>
  </tr>
  <tr>
    <td>客户：</td>
    <td>
<!--数据库引用客户-->
<?php
$conne=mysql_connect('localhost','root','root');
if ($conne)
{ echo '<select name="client" id="select2">';
  echo "<option value='0'>请选择客户</option>"; 
  mysql_select_db(vptdatebase, $conne);
  mysql_query("SET NAMES UTF8");
  $query = "select client from clientinfo order by id desc";
  if ($result=mysql_query($query))
  	{ $i=0;  while($rows=mysql_fetch_array($result))
			 {  echo "<option value='$rows[client]'>$rows[client]</option>";  }
				mysql_free_result($result);
				echo '</select>';}
		   else echo "执行SQL语句($query)失败：".mysql_error();	}
		   else echo '数据库连接失败！'; mysql_close(); ?>

<!--数据库引用客户-->
</td>
    <td>日期：</td>
    <td>无需手动填写</td>
    <td>备注：</td>
  </tr>
  <tr>
    <td>产品型号：</td>
    <td><input name="pro_bm" type="text" /></td>
    <td>数量：</td>
    <td><input name="quantity" type="text" /></td>
    <td>1:</td>
  </tr>
  <tr>
    <td>产品名称：</td>
    <td><input name="pro_name" type="text" /></td>
    <td>样品/生产订单号：</td>
    <td>时间无需手动填写</td>
    <td>总经理审批：</td>
  </tr>
  <tr>
    <td rowspan="4">图片：</td>
    <td rowspan="4">无需手动输入</td>
    <td>规格/容量：</td>
    <td><input name="ggrl" type="text" /></td>
    <td>日期：</td>
  </tr>
  <tr>
    <td>电压/电池数目：</td>
    <td><input name="dydc" type="text" />(V/Pcs)</td>
    <td>2：</td>
  </tr>
    <tr>
    <td>色温/交货日期：</td>
    <td><input name="datetp" type="text" /></td>
    <td>总经理审批：</td>
    </tr>
    <tr>
    <td>细节要求：</td>
    <td><textarea name="claim"></textarea></td>
    <td>日期：</td>
    </tr>
  <tr>
    <td colspan="5" align="center">&nbsp;</td>
  </tr>
   <tr>
    <td></td>
    <td align="right">提交：</td>
    <td><select name="sales">
<option value="庄敏炫">庄敏炫</option>    
<option value="黄学敏">黄学敏</option>
<option value="卢便金">卢便金</option>
<option value="李兵">李兵</option>
<option value="阙亮松">阙亮松</option>
<option value="刘娜">刘娜</option>
<option value="全芳">全芳</option>
<option value="杨鑫">杨鑫</option>
</select></td>
    <td>总经理审核：</td>
    <td></td>
  </tr>
    </tr>
   <tr>
    <td></td>
    <td align="right">日期：</td>
    <td>无需手动填写</td>
    <td>日期：</td>
    <td></td>
  </tr>
   <tr>
    <td colspan="5" align="center">&nbsp;</td>
  </tr>
   <tr>
    <td>出库生产审核：</td>
    <td></td>
    <td>出库业务审核：</td>
    <td></td>
    <td>出库财务审核：</td>
  </tr>
   <tr>
    <td>___________</td>
    <td></td>
    <td>___________</td>
    <td></td>
    <td>___________</td>
  </tr>
    <tr>
    <td colspan="5" align="center">
  <input name="Submit" type="submit" class="button" onclick="return check()" value="提交">
	</td>
  </tr>
</table>
</form>
</div>
</body>
</html>