<?php
include_once('../conn.php');

$page = intval($_POST['pageNum']);

$result = mysql_query("select id from news");
$total = mysql_num_rows($result);//总记录数

$pageSize = 3; //每页显示数
$totalPage = ceil($total/$pageSize); //总页数

$startPage = $page*$pageSize;
$arr['total'] = $total;
$arr['pageSize'] = $pageSize;
$arr['totalPage'] = $totalPage;
$query = mysql_query("select id,title,contents,postime from news order by id DESC limit $startPage,$pageSize");
while($row=mysql_fetch_array($query)){
	 $arr['list'][] = array(
	 	'id' => $row['id'],
		'title' => $row['title'],
		'postime' => $row['postime'],
	 );
}
echo json_encode($arr);
?>