<?php 
require '../config.inc.php';
$rs_pro = $db->select_alldata("SELECT * FROM  `pro` ORDER BY  `pro`.`pro_id` desc");

$sql_bnavs = "select * from navs where id=3";
	$rs_bnavs = $db->select_onedata($sql_bnavs);
$sql_navs = "select * from navs where id=1";
	$rs_navs = $db->select_onedata($sql_navs);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="PHP分页" />
<meta name="description" content="分页" />
<title><?php echo $rs_navs["nav2"];?></title>
<style type="text/css">
a:link { text-decoration: none;color: blue}
a:active { text-decoration:blink}
a:hover { text-decoration:underline;color: red} 
a:visited { text-decoration: none;color: green}
#list{width:1000px;margin:20px auto 2px auto; position:relative}
#list ul li{ float:left;width:1000px; margin:2px}
#list ul li p{line-height:22px}
#pagecount{width:1000px; margin:10px auto 2px auto; padding-bottom:20px; text-align:center}
#pagecount span{margin:4px; font-size:14px}
#list ul li#loading{width:320px; height:32px; line-height:32px; border:1px solid #d3d3d3; position:absolute; top:35%; left:42%; text-align:center; background:#f7f7f7 url(loading.gif) no-repeat 8px 8px;-moz-box-shadow:1px 1px 2px rgba(0,0,0,.2); -webkit-box-shadow:1px 1px 2px rgba(0,0,0,.2); box-shadow:1px 1px 2px rgba(0,0,0,.2);}
</style>
<link href="../css/sys.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.min.js"></script>
</head>

<body>

<?php  include "head.php"?>

<div class="Content">

        <div class="mb15"><img width="1000" height="250" alt="" src="../images/banner/<?php echo $rs_bnavs["nav2"];?>"></div>
		<?php include "leftside.php" ?>
        
        <div class="RightSide">
            <div class="Location">当前位置：<a href="/">首页</a> 〉<span class="Blue"><span id="labName"><?php echo $rs_navs["nav2"];?></span></span></div>
            <div class="pdl10 pdr20">
            <!--分页内容开始-->
            <?php 
$link=MySQL_connect('localhost','root','root'); 
mysql_select_db('vptdatebase'); 
mysql_query('set names utf-8'); 

$Page_size=12; 

$result=mysql_query('select * from pro'); 
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
$sql="select * from pro ORDER BY  pro_id desc limit $offset,$Page_size"; 
$result=mysql_query($sql,$link); 
while ($row=mysql_fetch_array($result)) { 
?> 
<!--<tr>-->
<td><div style="float:left; width:25%; text-align:center"><a href="../psys/productsinfo.php?id=<?php echo $row["pro_id"]?>"><img style=" width:180px; height:180px;" alt="详细内容" src="../PowerBank/<?php echo $row["pro_name"]?>/<?php echo $row['pro_name'] ?>.jpg" /></a><a href="../psys/productsinfo.php?id=<?php echo $row["pro_id"]?>"><span class="Blue"><?php echo $row['pro_name'] ?></span></a>
</div></td>
<!--</tr>--> 
<?php 
} 
$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

$key='<div class="page">'; 
$key.="<span>$page/$pages</span> "; //第几页,共几页 
if($page!=1){ 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=1\">第一页</a> "; //第一页 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\">上一页</a>"; //上一页 
}else { 
$key.="第一页 ";//第一页 
$key.="上一页"; //上一页 
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
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\">下一页</a> ";
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page={$pages}\">最后一页</a>"; 
}else { 
$key.="下一页 ";
$key.="最后一页"; 
} 
$key.='</div>'; 
?> 
<table width="760" border="0" align="center" cellpadding="1" cellspacing="0" bgcolor="#ffffff"> 
<tr>
<td colspan="3" bgcolor="#ffffff"><div align="center"><?php echo $key?></div></td> 
</tr>
</table>
            <!--分页内容介绍-->
			</div>
       </div>
       <!--右侧内容结束-->
</div>
<!--contents结束-->

<div class="clearboth"></div>

<?php include "footer.php" ?>

</body>
</html>