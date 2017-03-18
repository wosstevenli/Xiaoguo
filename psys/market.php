<?php 
require '../config.inc.php';
$rs_products = $db->select_alldata("SELECT * FROM  `news` ORDER BY  `news`.`id` desc");
$sql_bnavs = "select * from navs where id=3";
$rs_bnavs = $db->select_onedata($sql_bnavs);
	$sql_navs = "select * from navs where id=1";
$rs_navs = $db->select_onedata($sql_navs);
$rs_compint = $db->select_onedata("SELECT * FROM  `compint` where id=2");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $rs_navs["nav3"];?></title>
<link href="../css/sys.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include "head.php"?>
<div class="Content">

        <div class="mb15"><img width="1000" height="250" alt="" src="../images/banner/<?php echo $rs_bnavs["nav3"];?>"></div>
        <!--左侧导航-->
		<?php include "leftside.php" ?>
        <!--左侧导航结束-->
        
        <!--右侧内容-->
        <div class="RightSide">
            <div class="Location">当前位置：<a href="/">首页</a> 〉<span class="Blue"><span id="labName"><?php echo $rs_navs["nav3"];?></span></span></div>
            <div class="pdl10 pdr20">
            <!--分页内容开始-->
           <table width="760" height="103" border="0" align="center" cellpadding="1" cellspacing="0" bgcolor="#ffffff"> 
<?php 
$link=MySQL_connect('localhost','root','root'); 
mysql_select_db('vptdatebase'); 
mysql_query('set names utf-8'); 

$Page_size=3; 

$result=mysql_query('select * from market'); 
$count = mysql_num_rows($result); 
$page_count = ceil($count/$Page_size); 

$init=1; 
$page_len=7; 
$max_p=$page_count; 
$pages=$page_count; 

//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 

$offset=$Page_size*($page-1); 
$sql="select * from market ORDER BY id desc limit $offset,$Page_size"; 
$result=mysql_query($sql,$link); 
while ($row=mysql_fetch_array($result)) { 
?> 
<tr> 
<td colspan="2" height="15px" width="780px"><div align="left"><a href="../psys/marketinfo.php?id=<?php echo $row['id'] ?>">  
&nbsp;&nbsp;&nbsp;&nbsp;<h3><?php echo $row['title']?></h3> 
</a></div></td><tr> 
<td bgcolor="#E0EEE"><div align="left"><a href="../psys/marketinfo.php?id=<?php echo $row['id'] ?>"> 
&nbsp;&nbsp;&nbsp;&nbsp;<span class="Blue"><?php echo $row['contents'] ?>... </span>
</a></div></td>
</tr> 
<?php 
} 
$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

$key='<div class="page">'; 
$key.="<span>$page/$pages</span> "; //第几页,共几页 
if($page!=1){ 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=1\">第一页</a> ";
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\">上一页</a>";
}else { 
$key.="第一页 "; 
$key.="上一页"; 
} 
if($pages>$page_len){ 
//如果当前页小于等于左偏移 
if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在时的计算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 
if($i==$page){ 
$key.=' <span>'.$i.'</span>'; 
} else { 
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".$i."\">".$i."</a>"; 
} 
} 
if($page!=$pages&&$pages!=0){ 
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\">下一页</a> ";//下一页 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page={$pages}\">最后一页</a>"; //最后一页 
}else { 
$key.="下一页 ";//下一页 
$key.="最后一页"; //最后一页 
} 
$key.='</div>'; 
?> 
<tr> 
<td colspan="2" bgcolor="#ffffff"><div align="center"><?php echo $key?></div></td> 
</tr> 
</table> 
            <!--分页内容介绍-->
			</div>
       </div>
       <!--右侧内容结束-->
</div>
<!--contents结束-->

<div class="clearboth"></div>
<?php include "footer.php"?>

</body>
</html>