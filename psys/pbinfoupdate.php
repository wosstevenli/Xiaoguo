<?php 
$link =mysql_connect("localhost","root","root"); 
mysql_select_db("vptdatebase", $link); 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>移动电源参数更新-深圳市伟富创光电科技有限公司</title>
<script type="text/javascript" src="js/pbinfoinputchecker.js" ></script>
</head>
<script> 
function aa(obj,td_name) 
{ 
     var select_value=document.getElementById("where"); 
     var td_value = document.getElementById(td_name); 
     if(obj.checked == true){ 
    
          if(select_value.value.length>0){ 
              
               select_value.value+="," + td_value.innerText; 
          }else{ 
               select_value.value+=td_value.innerText; 
          } 
     }else{ 
               if(select_value.value.indexOf("," + td_value.innerText + ",") != -1){ 
                         select_value.value = select_value.value.replace("," + 

td_value.innerText,''); 
               }else if(select_value.value.indexOf("," + td_value.innerText) != -1){ 
                         select_value.value = select_value.value.replace("," + 

td_value.innerText,''); 
               }else if(select_value.value.indexOf(td_value.innerText + ",") != -1){ 
                    select_value.value = select_value.value.replace(td_value.innerText + ",",''); 
               }else if(select_value.value.indexOf(td_value.innerText) != -1){ 
                    select_value.value = select_value.value.replace(td_value.innerText,''); 
               } 
     } 

} 
function bb(){ 
     var obj = document.getElementById("ds"); 
     if(obj.style.display==""){ 
          obj.style.display="block"; 
     }else if(obj.style.display=="none"){ 
          obj.style.display="block"; 
     }else if(obj.style.display=="block"){ 
          obj.style.display="none"; 
     } 
    
     } 
    
     function inDaohang(divname,obj){ 
     var f = false; 
     while(obj.parentNode){ 
          if(obj.name==divname){ 
               return true; 
          } 
          obj = obj.parentNode; 
     } 
     return false; 
} 
function closeDaohang(e,divname,aname){ 
     if(e.id!=aname && e.id!='where' && e.id.indexOf("td") ==-1&& e.id.indexOf("check") ==-1) 
     if(!inDaohang(divname,e)){ 
          var a = document.getElementsByName(divname); 
          for(var i=0;i<a.length;i++){ 
               a[i].style.display='none'; 
          } 

     } 

} 
    
</script>
<style type="text/css"> 
body{ 
     margin:0px; 
     SCROLLBAR-FACE-COLOR: #e0edfd; 
     SCROLLBAR-HIGHLIGHT-COLOR: #dfe8f4; 
     SCROLLBAR-SHADOW-COLOR: #2c7cda; 
     SCROLLBAR-3DLIGHT-COLOR: #2c7cda; 
     SCROLLBAR-ARROW-COLOR: #14549f; 
     SCROLLBAR-TRACK-COLOR: #eaf5fd; 
     SCROLLBAR-DARKSHADOW-COLOR: #ffffff; 
     SCROLLBAR-BASE-COLOR: #e0edfd; 
} 
.menu{ 
    display:none; 
} 
input.blur{ 
     border:1px solid #99BBE8; 
     background:#FFFFFF; 
     height:18px; 
} 
.tableborder{ 
border:solid 1px #CCCCCC; 
border-collapse:collapse; 
font-size:12px; 

} 
</style>
<body onclick="closeDaohang(event.srcElement||event.target,'ds','xx')">
<div id="forminput">
<form action="pbinfoupdateinsert.php" method="post" name="pbupdate">
<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0>
  <tr>
    <th height="40" colspan="5" valign="middle" scope="col"><h2>深圳市伟富创光电科技有限公司</h2></th>
  </tr>
  <tr>
    <td colspan="5" align="center">移动电源参数录入</td>
  </tr>
  <tr>
    <td style="text-align:right">产品料号：</td>
    <td>
<!--数据库引用客户-->
<?php
$conne=mysql_connect('localhost','root','root');
if ($conne)
{ echo '<select name="tl_bm" id="pbupdate">';
  echo "<option value='0'>请选择产品</option>"; 
  mysql_select_db(vptdatebase, $conne);
  mysql_query("SET NAMES UTF8");
  $query = "select tl_bm from tl order by pro_id desc";
  if ($result=mysql_query($query))
  	{ $i=0;  while($rows=mysql_fetch_array($result))
			 {  echo "<option value='$rows[tl_bm]'>$rows[tl_bm]</option>";  }
				mysql_free_result($result);
				echo '</select>';}
		   else echo "执行SQL语句($query)失败：".mysql_error();	}
		   else echo '数据库连接失败！'; mysql_close(); ?>

<!--数据库引用客户-->
</td>
  </tr>
  <tr>
    <td style="text-align:right">电池类型：</td>
    <td><select name="btype">
<option value="18650">18650</option>
<option value="Polymer">聚合物</option>
</select></td>
  </tr>
  <tr>
    <td style="text-align:right">电池数量：</td>
    <td><input name="btnumb" type="text" /></td>
  </tr>
  <tr>
    <td style="text-align:right">电池容量：</td>
    <td><input name="btrl" type="text" /></td>
  </tr>
  <tr>
    <td style="text-align:right">套料价格：</td>
    <td><input name="tl_price" type="text" /></td>
  </tr>
  <tr>
    <td style="text-align:right">壳料材质：</td>
    <td><select name="shell">
<option value="Plastic">塑料</option>
<option value="Metal">金属</option>
</select></td>
  </tr>
  <tr>
    <td style="text-align:right">额定输入：</td>
    <td><select name="input">
<option value="DC5V/1A">DC5V/1A</option>
</select></td>
  </tr>
  <tr>
    <td style="text-align:right">额定输出：</td>
    <td><select name="output">
<option value="DC5V/0.7A">DC5V/0.7A</option>
<option value="DC5V/1A">DC5V/1A</option>
<option value="DC5V/1.5A">DC5V/1.5A</option>
<option value="DC5V/2A">DC5V/2A</option>
<option value="DC5V/2.1A">DC5V/2.1A</option>
<option value="DC5V/1A;DC5V/2.1A">DC5V/1A;DC5V/2.1A</option>
</select></td>
  </tr>
    <tr>
    <td style="text-align:right">供选颜色：</td>
    <td><form> 
<div id="xx"> 
<table> 
          <tr> 
               <td> 
                    <input type="text" id="where" name="colour" style="width:605px" onClick="bb()" 
onblur="this.className='blur'" onFocus="this.className='focus'" class="blur" readonly> 
               </td> 

</table> 
</div> 
     <div id="ds" style="display:none;padding:0px 0px 0px 0px; margin:0;"> 
          <table border="0" cellpadding="0" cellspacing="0" class="tableborder"> 
                    <tr><td id="td1"><input type="Checkbox" id="check1" name="idol02" value="RED" onclick="aa(this,'td1')">RED</td></tr> 
                    <tr><td id="td2"><input type="Checkbox" id="check2" name="idol02" value="ORANGE" onclick="aa(this,'td2')">ORANGE</td></tr> 
                    <tr><td id="td3"><input type="Checkbox" id="check3" name="idol02" value="YELLOW" onclick="aa(this,'td3')">YELLOW</td></tr>
                    <tr><td id="td4"><input type="Checkbox" id="check4" name="idol02" value="GREEN" onclick="aa(this,'td4')">GREEN</td></tr>
                    <tr><td id="td5"><input type="Checkbox" id="check5" name="idol02" value="BLUE" onclick="aa(this,'td5')">BLUE</td></tr>
                    <tr><td id="td6"><input type="Checkbox" id="check6" name="idol02" value="PINK" onclick="aa(this,'td6')">PINK</td></tr>
                    <tr><td id="td7"><input type="Checkbox" id="check7" name="idol02" value="GOLDEN" onclick="aa(this,'td7')">GOLDEN</td></tr>
                    <tr><td id="td8"><input type="Checkbox" id="check8" name="idol02" value="SILVER" onclick="aa(this,'td8')">SILVER</td></tr>
                    <tr><td id="td9"><input type="Checkbox" id="check9" name="idol02" value="BLACK" onclick="aa(this,'td9')">BLACK</td></tr>
                    <tr><td id="td10"><input type="Checkbox" id="check10" name="idol02" value="WHITE" onclick="aa(this,'td10')">WHITE</td></tr>
                    <tr><td id="td11"><input type="Checkbox" id="check11" name="idol02" value="ROSE" onclick="aa(this,'td11')">ROSE</td></tr>   
                    <tr><td id="td12"><input type="Checkbox" id="check12" name="idol02" value="PURPLE" onclick="aa(this,'td12')">PURPLE</td></tr>
                    <tr><td id="td13"><input type="Checkbox" id="check13" name="idol02" value="GLAY" onclick="aa(this,'td13')">GLAY</td></tr> 
     	 </table> 
          </div> 
     </form> </td>
    </tr>
    <tr>
    <td style="text-align:right">重量：</td>
    <td><input name="weight" type="text" /></td>
    </tr>
     <tr>
    <td style="text-align:right">尺寸：</td>
    <td><input name="size" type="text" /></td>
    </tr>
   <tr>
   <td colspan="5" align="center"><input name="Submit" type="submit" class="button" onclick="return check()" value="提交"></td>
   </tr>
</table>
</form>
</div>
</body>
</html>