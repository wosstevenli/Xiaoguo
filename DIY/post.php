<?php
$conn = mysql_connect("localhost","root","root"); 
$action = $_POST['action']; 
if($action == 'send')
{ 
$use_name = $_POST['username']; 
$password = $_POST['password']; 
mysql_select_db("business",$conn); 
$sql = "INSERT INTO guestbook  (use_name,password) VALUES ('$username','$password')"; 
$result = mysql_query($sql,$conn); 
} 
?> 

<html> 
<body> 
<form method="post" action="post.php"> 
<input type="text" name="username"> 
<input type="text" name="password"> 
<input type="hidden" name="action" value="send"> 
<input type="submit" name="Submit" value="Ìá½»"> 
</form> 
</body> 
</html>