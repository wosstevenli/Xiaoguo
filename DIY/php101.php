<?php
$c =@mysql_connect("localhost","root","root");

/*or die (��ĸ��ڣ�������);
if($c)
echo "ok���ӳɹ���";
*/
/*if($c)
echo "ok���ӳɹ���";     */

mysql_select_db("test",$c);
if($c)
echo "ok���ӳɹ���";

$sql="SELECT * FROM 'guestbook'";
$query=mysql_query($sql,$c);

  WHILE ($row = mysql_fetch_array($query));
{
echo $row[email]."<br><hr>";
}
echo mysql_num_rows($query);

?>