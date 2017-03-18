<?php
 $c =@mysql_connect("localhost","root","root");
 mysql_select_db("test",$c);
 $sql="SELECT * FROM `email` ";
mysql_query("set names 'GBK'");
$back=mysql_query($sql,$c);
$row=mysql_fetch_row($back);
print_r($row);

//echo $row[1];
?>