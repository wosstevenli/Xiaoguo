<?php
$c =@mysql_connect("localhost","root","root");

/*or die (马的隔壁，出错了);
if($c)
echo "ok连接成功了";
*/
/*if($c)
echo "ok连接成功了";     */

mysql_select_db("test",$c);
if($c)
echo "ok连接成功了";

$sql="SELECT * FROM 'guestbook'";
$query=mysql_query($sql,$c);

  WHILE ($row = mysql_fetch_array($query));
{
echo $row[email]."<br><hr>";
}
echo mysql_num_rows($query);

?>