<html>
<HEAD>
<title>用array（）函数结构PHP数组</title>
</HEAD>
<body>

<?php
$arr=array
(
0=>1,
2=>1.111e2,
1=>"php",
"str"=>"string",
);

for($i=0;$i<count($Arr);$i++)
{
$print=each($Arr);
echo"$print[value]<p>";
}


	
?>

</body>
</html>