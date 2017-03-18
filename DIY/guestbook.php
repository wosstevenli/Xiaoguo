<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Guest Book</title>
<style type="text/css">

<!--
.style1 {
font-family: Arial, Helvetica, sans-serif;
font-weight: bold;
font-size: 24px;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
-->


</style>
</head>

<body>
<?php
# use phplib
class slashDB extends DB_Sql 
{ 

/* create table sql
CREATE TABLE `website`.`guestbook` (
`id` int(10) unsigned NOT NULL auto_increment,
`username` varchar(20) NOT NULL default 'guest',
`usermail` varchar(30) default '@',
`userface` int(10) unsigned NOT NULL default '0',
`usertitle` varchar(50) NOT NULL default '',
`usermessage` varchar(200) NOT NULL default '',
`deleteflag` int(10) unsigned NOT NULL default '0',
`lastupdatetime` datetime NOT NULL default '0000-00-00 00:00:00',
`ipadd` varchar(45) default '',
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='a guestbook datebase';
*/

# mysql server info
var $classname="slashDB"; 
var $Host = "localhost"; 
var $Database = "test";
var $User = "root";
var $Password = "root"; 

function halt($msg){ 
printf("数据库出现错误!: %s \n", $msg);
}
} 
?>


<?php
$result = new slashDB;
if(!empty($_POST['username']) && !empty($_POST['usermail']) && !empty($_POST['usermessage'])) 
{
# insert sql
$username = $_POST['username'];
$usermail = $_POST['usermail'];
$userface = $_POST['userface'];
$usertitle = $_POST['usertitle'];
$usermessage = $_POST['usermessage'];
# insert
$result->

query("insert into guest.book(username,usermail,userface,usertitle,usermessage,deleteflag,lastupdatetime,ipadd) values('$username','$usermail','$userface','$usertitle','$usermessage','0',now(),'{$_SERVER['REMOTE_ADDR']}')");
}
?>


<?php
# select sql
$result->query("SELECT * FROM guest.book where deleteflag='0'"); 
?>

<p align="center" class="style1">Guest Book<HR>
<table width="80%" border="1" align="center" cellpadding="10" bordercolor="#0099FF">
<?
while($result->next_record()) {
?>
<tr>
<td bordercolor="#0099FF"><table width="100%" border="0" cellpadding="0">
<tr>
<td>
<img src="face/<?php echo $result->Record["userface"]; ?>.gif" width="20" height="20" />
<?php echo $result->Record["username"]; ?> | <?php echo $result->Record["usermail"]; ?>
<hr />

<?php echo $result->Record["usertitle"]; ?><br /> 
<?php echo $result->Record["usermessage"]; ?></td>
</tr>
</table></td>
</tr>
<?
}
?>
<tr>
<td bordercolor="#0099FF">
<form action="<?php $PHP_SELF; ?>" method="post" name="userinput">
<table width="90%" border="0" align="center" cellpadding="10" cellspacing="0" bordercolor="#000000">
<tr>
<td><span class="style2">Name:</span>
<input name="username" type="text" size="15" /> 
<span class="style2">e-mail:</span> 
<input name="usermail" type="text" size="40" />
</td>
</tr>
<tr>
<td><table width="100%" border="0" cellpadding="0">
<tr>
<td><input name="userface" type="radio" value="1" checked="checked" />
<img src="1.jpg" width="20" height="15" /></td>
<td><input name="userface" type="radio" value="2" />
<img src="2.jpg" width="20" height="22" /></td>
<td><input name="userface" type="radio" value="3" />
<img src="3.jpg" width="20" height="16" /></td>
<td><input name="userface" type="radio" value="4" />
<img src="4.jpg" width="20" height="20" /></td>
<td><input name="userface" type="radio" value="5" />
<img src="5.jpg" width="20" height="17" /></td>
</tr>
<tr>
<td><input name="userface" type="radio" value="6" />
<img src="6.jpg" width="20" height="18" /></td>
<td><input name="userface" type="radio" value="7" />
<img src="7.jpg" width="20" height="20" /></td>
<td><input name="userface" type="radio" value="8" />
<img src="8.jpg" width="20" height="16" /></td>
<td><input name="userface" type="radio" value="9" />
<img src="9.jpg" width="20" height="20" /></td>
<td><input name="userface" type="radio" value="10" />
<a href="#" class="style2">more...</a></td>
</tr>
</table></td>
</tr>
<tr>
<td><span class="style2">Title:</span><br />
<input type="text" name="usertitle" size="80" />
<br />
<textarea name="usermessage" cols="80" rows="8"></textarea></td>
</tr>
<tr>
<td>

<div align="center">
<input type="button" name="Submit" value="Submit" onclick="pagesubmit();"/>
<input type="button" name="clear" value="Clear" onclick="document.all.username.value='';document.all.usermail.value='';document.all.usertitle.value='';document.all.usermessage.value='';" />
</div></td>
</tr>
</table>
<script language="javascript">
function pagesubmit(){
// check user input funciton
// add the logic here
if (document.all.username.value == "" || document.all.usermessage.value ==""|| document.all.usertitle.value =="") {
alert("please fill the box");
}else{
document.userinput.submit();
}
}
</script>

</form></td>
</tr>
</table>

</body>
</html> 