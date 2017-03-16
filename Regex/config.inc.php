<?php 
/*header("Content-Type:text/html;charset:utf-8");*/
$db_config["hostname"] = "localhost";
$db_config["username"] = "root";
$db_config["password"] = "root";
$db_config["database"] = "frontend";
$db_config["charset"] = "utf-8";
require('class/db.class.php');
$db = new db();
$db->connect($db_config);
mysql_query("set character set 'utf8'");
mysql_query("set names 'utf8'");
//white by stevenli
?>