
<?php
/*$link = mysql_connect ( "localhost", "root", "root" ) ;
if ( !$link ) die ( "连接MySQL服务器失败：" . mysql_error() ) ;
echo "连接MySQL服务器成功！" ;
mysql_close ( $link ) ; 
*/

 /*$q=2;
 if ($q=2)
    echo "正确";
    else
    echo "错误";
*/
/*
<?php
    $lianjie = mysql_connect("localhost", "root", "root")
        or die("Could not connect: " . mysql_error());
    print ("Connected successfully");
    mysql_close($lianjie);
?> 
*/


/*

1,连接数据库服务器
2，连接数据库
3，编码设置
4，执行sql语句
5，凌厉得到最终的数据库记录结果

还有一些关于数据库安全的东西



$link = mysql_connect("localhost", "root", "root");
if(!$link)
{
//连接不成功
echo "连接数据库失败！";
exit;
}



//选择数据库
mysql_select_db("test" ,$link);

//编码设置
mysql_query("SET NAMES 'gbk'",$link);

//对我们的数据库进行操作
mysql_query("INSERT INTO admin(usename,password) VALUES("张三","111111")");


//数据库更新
mysql_query("UPDATE admin SET usename='abc' WHERE usename='张三'");


mysql_close($link);
*/

?>

