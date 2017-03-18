<?php
include_once("connect.php");
$field=$_POST['id'];
$val=$_POST['value'];
$val = htmlspecialchars($val, ENT_QUOTES);
if($field=="note"){
	if(strlen($val)>100){
		echo "您输入的字符大于100字了";
		exit;
	}
}
$time=date("Y-m-d H:i:s");
if(empty($val)){
    echo "不能为空";
}else{
	$query=mysql_query("update `vptdatebase`.`tl` set $field='$val' where pro_id=1");
	if($query){
	   echo $val;
	}else{
	   echo "数据出错";	
	}
}
?>