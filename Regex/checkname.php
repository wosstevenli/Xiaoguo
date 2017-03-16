<?php
    mysql_connect("localhost",'root','root');
    mysql_select_db('frontend');
    $sql="select * from user where username='$_GET[id]'";
    $query=mysql_query($sql);
    if(is_array(mysql_fetch_array($query))){
        echo "<font color=red>用户名已存在</font>";
    }else{
        echo "<font color=green>用户名可以使用</font>";
    }
?>