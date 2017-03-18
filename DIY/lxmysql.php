<?php
/*一$result = mysql_query("SELECT my_col FROM my_tbl")
    or die("Invalid query: " . mysql_error());



二$result = mysql_query("SELECT * WHERE 1=1")
    or die("Invalid query: " . mysql_error());


三/*

$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$sql = "CREATE DATABASE my_db";
if (mysql_query($sql,$con))
  {
  echo "Database my_db created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
  

四$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$sql = "SELECT user FROM message";

 mysql_query($sql,$con);

echo
mysql_close($con);
*/

$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$sql = "SELECT * FROM message";
mysql_query($sql,$con);

// 一些代码

mysql_close($con);



?> 