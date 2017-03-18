<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单/样品生产单-深圳市伟富创光电科技有限公司</title>
</head>
<body>

<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0 >
  <tr>
    <th height="40" colspan="5" valign="middle" scope="col"><h2><a href="sampleform.php" style="text-decoration:none">深圳市伟富创光电科技有限公司</a></h2></th>
  </tr>
  <tr>
    <td height="33" colspan="5" align="center">订单/样品生产单</td>
  </tr>
  <tr>
    <td width="127" height="33">客户：</td>
    <td width="318"><?php echo $_POST['client']; ?></td>
    <td width="123">日期：</td>
    <td width="402"><?php echo date("Y/m/d"); ?></td>
    <td width="418">备注：</td>
  </tr>
  <tr>
    <td height="33">产品型号：</td>
    <td><?php echo $_POST["pro_bm"]; ?></td>
    <td>数量：</td>
    <td><?php echo $_POST["quantity"]; ?>Pcs</td>
    <td>1:</td>
  </tr>
  <tr>
    <td height="33">产品名称：</td>
    <td><?php echo $_POST["pro_name"]; ?></td>
    <td>样品/生产订单号：</td>
    <td><?php echo date("Ymdhi"); ?></td>
    <td>总经理审批：</td>
  </tr>
  <tr>
    <td rowspan="4">图片：</td>
    <td rowspan="4"><img src="PowerBank/<?php echo $_POST["pro_bm"]; ?>/<?php echo $_POST["pro_bm"]; ?>.jpg" width="320px", height="320px"  /></td>
    <td height="23">规格/容量：</td>
    <td><?php echo $_POST["ggrl"]; ?></td>
    <td>日期：</td>
  </tr>
  <tr>
    <td height="23">电压/电池数目：</td>
    <td><?php echo $_POST["dydc"]; ?>(V/Pcs)</td>
    <td>2：</td>
  </tr>
    <tr>
    <td height="23">色温/交货日期：</td>
    <td><?php echo $_POST["datetp"]; ?></td>
    <td>总经理审批：</td>
    </tr>
    <tr>
    <td height="267">细节要求：</td>
    <td><?php echo $_POST["claim"]; ?></td>
    <td>日期：</td>
    </tr>
  <tr>
    <td height="33" colspan="5" align="center">&nbsp;</td>
  </tr>
   <tr>
    <td></td>
    <td height="33" align="right">提交：</td>
    <td><?php echo $_POST["sales"]; ?></td>
    <td align="right">总经理审核：</td>
    <td></td>
  </tr>
    </tr>
   <tr>
    <td></td>
    <td height="33" align="right">日期：</td>
    <td><?php echo date("Y/m/d"); ?></td>
    <td align="right">日期：</td>
    <td></td>
  </tr>
   <tr>
    <td height="33" colspan="5" align="center">&nbsp;</td>
  </tr>
   <tr>
    <td height="33">出库生产审核：</td>
    <td></td>
    <td>出库业务审核：</td>
    <td></td>
    <td>出库财务审核：</td>
  </tr>
   <tr>
    <td height="33"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
    <tr>
    <td height="33" colspan="5" align="center">
    Copyright 2014 V-PHOTRON Technology(Shenzhen) CO.,LTD. All Reserved.</td>
  </tr>
</table>

<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vptdatebase", $con);

$sql="INSERT INTO sampleform (sales,client,pro_bm,quantity,pro_name,ggrl,dydc,datetp,claim,time)
VALUES
('$_POST[sales]','$_POST[client]','$_POST[pro_bm]','$_POST[quantity]','$_POST[pro_name]','$_POST[ggrl]','$_POST[dydc]','$_POST[datetp]','$_POST[claim]',NOW())";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?>

</body>
</html>