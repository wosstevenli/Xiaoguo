<?php 
require '../config.inc.php';
mysql_query("SET NAMES utf8"); 
$id = $_GET['id'];
$sql_proinfo = "select * from pro where pro_id=".$id."";
$rs_proinfo = $db->select_onedata($sql_proinfo);
/*$rs_prolist = $db->select_alldata("select * from pro order by id desc ");*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><HEAD>
<TITLE><?php echo $rs_proinfo["pro_name"];?></TITLE>
<META http-equiv="Content-Type" content="text/html; charset=UTF8" />
<link href="../css/sys.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<div class="qrCode">
 <dl>
	<dt><a href="mailto:it@v-photron.com?subject=<?php echo $rs_proinfo["pro_name"];?> Infomation&body=Hello,I Need more infomation of <?php echo $rs_proinfo["pro_name"];?>：" target=_blank ><img src="../images/getinfo1.jpg" alt="获取产品资料" /></a></dt>
 </dl>
</div>
<?php include "head.php" ?>
<DIV id=newsmain class="Content">
<div id=newsinfoimg style="color:#FFF"><?php echo $rs_proinfo["pro_name"];?></div>
<DIV style="margin-top:5px;"></DIV>
<?php include "leftside.php" ?>
<div id=newscontents  style="float:right; margin-top:0px">
<table style="width:805px;">  
     <tr>
       <td><img src="../PowerBank/<?php echo $rs_proinfo["pro_name"];?>/<?php echo $rs_proinfo["pro_name"];?>.jpg" alt="<?php echo $rs_proinfo["pro_title"];?>" width="220" height="220"></td>
       <td width="625" align="center" valign="top">
         <div align="left"><span class="STYLE1">
         <span class="STYLE4">&nbsp;&nbsp;&nbsp; Model:</span> <span class="STYLE3"><?php echo $rs_proinfo["pro_name"];?></span><br>
         <span class="STYLE4">&nbsp;&nbsp;&nbsp; Lampshades Size:</span> <span class="STYLE3">15*600mm</span><br>
         <span class="STYLE4">&nbsp;&nbsp;&nbsp; Housing material: </span><span class="STYLE3">6063aluminum</span> <br>
         <span class="STYLE4">&nbsp;&nbsp;&nbsp; Basic Material:</span> <span class="STYLE3">PC</span><br>
         <span class="STYLE4">&nbsp;&nbsp;&nbsp; Protection class: </span><span class="STYLE3">IP40</span><br>
         <span class="STYLE4">&nbsp;&nbsp;&nbsp; Note:</span><span class="STYLE3">3-year warranty period;if the goods have a bad product,free of charge returned.
         OEM and ODM services,can receive small orders</span>.</span></div></td>
     </tr>
     <tr class="list2-subdiv">
       <td height="281" colspan="2">
       <div class="TabbedPanelsContentGroup">
      	  <div class="TabbedPanelsContent">
        <table width="100%" border="0">
          <tbody>
            <tr>
              <td valign="top" width="50%"><h3 class="STYLE1">物理参数:</h3>
                  <ul style="list-style-type:none">
                    <li class="STYLE1">单端供电输入:<?php echo $rs_proinfo["pro_vw"];?> </li>
                    <li class="STYLE1">灯罩尺寸:26*600mm</li>
                    <li class="STYLE1">外罩材料:6063铝</li>
                    <li class="STYLE1">基本材质:PC</li>
                    <li class="STYLE1">防护等级:IP40</li>
                    <li class="STYLE1">使用寿命:50,000小时</li>
                    <li class="STYLE1">净重:0.192kg</li>
                    <li class="STYLE1">表面温度:≤45℃</li>
                    <li class="STYLE1">灯球焊接点温度:≤48℃</li>
                    <li class="STYLE1">工作温度:-20℃~45℃</li>
                    <li class="STYLE1">储存温度:-20℃~80℃</li>
                    <li class="STYLE1">储存湿度:20%~80%</li>
                    <li class="STYLE1">工作湿度:10%~90%</li>
                    <li class="STYLE1">用于室内</li>
                    <li class="STYLE1">不会变形</li>
                  </ul>
              </td>
              <td valign="top" width="50%"><h3 class="STYLE1">电气参数:</h3>
                  <ul class="STYLE1" style="list-style-type:none">
                    <li>工作电压:<?php echo $rs_proinfo["pro_vw"];?></li>
                    <li>工作频率:50~60HZ</li>
                    <li>额定功率:10W</li>
                    <li>保护:输入输出过流保护,短路保护,输出电流保护</li>
                    <li>通过电磁干扰&amp;低电压测试</li>
                    <li>功率因数:0.9</li>
                    <li>恒流电源</li>
                  </ul>
                <h3 class="STYLE1">包装:</h3>
                <ul class="STYLE1" style="list-style-type:none">
                  <li>体积:20pcs/箱</li>
                  <li>毛重:8.26kg</li>
                  <li>箱子尺寸:L:616*W:245*H:213mm</li>
                  <li>包装方式:标准包装或据客户要求</li>
                </ul>
            </td>
          </tr>
          <!--dierhang-->
          <tr>
              <td height="189" valign="top"><h3 class="STYLE1">光电参数:</h3>
                  <ul style="list-style-type:none">
                    <li class="STYLE1">输出光通量:600lm(暖白),700lm(正白&amp;冷白)</li>
                    <li class="STYLE1">色温:暖白(3000~3500K),正白(4000~4500K),冷白(5500~6500K)可选</li>
                    <li class="STYLE1">发角角度:15/18/30/45/60角度可选</li>
                    <li class="STYLE1">光源(LED主芯片)品牌:CREE,Bridgelux,Edison</li>
                    <li class="STYLE1">LED数量:144pcs</li>
                    <li class="STYLE1">透镜类型:PMMA透镜</li>
                    <li class="STYLE1">显色指数:80+(暖白),70+(正白&amp;冷白)</li>
                    <li class="STYLE1">照度:240 LX @ 1.0M,70LX @2.0M,30LX @3.0M </li>
                    <li class="STYLE1">光效:70lm/w</li>
                  </ul>
              </td>
              <td valign="top"><h3 class="STYLE1">我们的竞争优势:</h3>
                	<span class="STYLE1">原产地:中国深圳<br />品牌:<strong>伟富创</strong>;可提供OEM和ODM服务<br />主要竞争优势:<br /></span>
                <ul class="STYLE1" style="list-style-type:none">
                  <li>及时发货</li>
                  <li>可接收小订单</li>
                  <li>3年保修期;若货物中有不良品,我司将寄重新寄良品给客户并付来回运费</li>
                  <li>符合基本标准</li>
                </ul>
                <span class="STYLE1">主要出口市场:北美,西欧,亚洲,南美,东欧</span>
             </td>
           </tr>
         </tbody>
      </table>
        <p>&nbsp;</p>
      </div>
      
      <div class="TabbedPanelsContent">
        <h3 class="STYLE1"><br><strong>装箱尺寸:</strong></h3>
        <table width="100%" style="border:groove;">
          <tbody>
            <tr>
              <td><div align="center" class="STYLE1">产品型号</div></td>
              <td><div align="center" class="STYLE1">Pcs/箱</div></td>
              <td><div align="center" class="STYLE1">尺寸（mm）长*宽*高</div></td>
              <td><div align="center" class="STYLE1">毛重</div></td>
              <td><div align="center" class="STYLE1">20’</div></td>
              <td><div align="center" class="STYLE1">40GP</div></td>
              <td><div align="center" class="STYLE1">40HQ</div></td>
            </tr>
            <tr>
              <td><div align="center" class="STYLE1">AH-T0806-14410A</div></td>
              <td><div align="center" class="STYLE1">144</div></td>
              <td><div align="center" class="STYLE1">L:616*W:228*H:208</div></td>
              <td><div align="center" class="STYLE1">8.26<br />
              </div></td>
              <td><div align="center" class="STYLE1">12300<br />
              </div></td>
              <td><div align="center" class="STYLE1">27000</div></td>
              <td><div align="center" class="STYLE1">31500</div></td>
            </tr>
            <tr>
              <td><div align="center" class="STYLE1">AH-F0806-14410A</div></td>
              <td><div align="center" class="STYLE1">144</div></td>
              <td><div align="center" class="STYLE1">L:616*W:245*H:213</div></td>
              <td><div align="center" class="STYLE1">8.26<br />
              </div></td>
              <td><div align="center" class="STYLE1">6500<br />
              </div></td>
              <td><div align="center" class="STYLE1">13500</div></td>
              <td><div align="center" class="STYLE1">15750</div></td>
            </tr>
          </tbody>
        </table>
        <br><h3 class="STYLE1">付款方式:</h3>
        <ol class="STYLE1">
          <li>支付方式:T/T,L/C</li>
          <li>最小起订量:100pcs</li>
          <li>价格:FOB深圳170-180元/pcs</li>
        </ol>
        <br><h3 class="STYLE1">发货细节:</h3>
        <ol class="STYLE1">
          <li>交货方式:快递,空运,海运</li>
          <li>运输时间:快递和空运7-15天,海运25-30天<br>
          </li>
        </ol>
      </div>
      
    </div>
  </div>  </td>
       </tr>
   </table>
</div><!--右侧内容结束-->
<DIV class="clearboth"></DIV>

</DIV>

<?php include "footer.php" ?>

<DIV class="clearboth"></DIV>

</BODY>
</HTML>
