<?php 
header("Content-Type:text/html;charset:utf-8");
include_once('sql.class.php');

$mysql = new mysql('localhost','root','root','frontend','utf8');
$user_name = $_POST['user_name'];
$sql = 'SELECT * FROM wdo_admin WHERE admin_name = "'.$user_name.'"';
$result = $mysql->get_one($sql);
if($result){
	echo 1;
}else{
	echo 0;
}

 ?>