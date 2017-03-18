<?php
$c =@mysql_connect("localhost","root","root");

mysql_select_db("bbs2",$c);
if($c)
echo "ok连接成功了"."<br><hr>";
/*$sql="INSERT INTO message(id,user,title,content,lastdate)
values('','wuhanya','renjianzhengdaoshicangshang','zhurongjirenmingdehaozongli',now())";
*/


/* 2 $sql="SELECT * FROM `message` ";
$back=mysql_query($sql,$c);
$row=mysql_fetch_row($back);
print_r($row);
echo $row[1];
*/

/*$sql="SELECT * FROM `message` ";
$back=mysql_query($sql,$c);
$row=mysql_fetch_array($back);
//print_r($row);
echo $row[user];//数字或者字段都可以
*/

mysql_num_rows;
mysql_insert_id;
mysql_tablename;
mysql_error;
mysql_close;

mysql_query("set names 'GBK'");
$sql="SELECT * FROM `message` ";
$back=mysql_query($sql,$c);
while($row=mysql_fetch_array($back)){
	echo $row[user] ."<br><hr>";
	}
echo mysql_num_rows($back);
//echo mysql_insert_id ;
//echo mysql_tablename ;
//mysql_close ($c);
?>
