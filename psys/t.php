<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>compinfo</title>
</head>

<body>
			<div class="Right">
                <div class="Title"><a href="../psys/contact.php">MORE</a>联系我们<span>CONTACT</span></div>
                <div class="pdlr15">
					<?php
					/*require '../config.inc.php';*/
					$result = mysql_query("SELECT * FROM compinfo");
					while($row = mysql_fetch_array($result))
  					{
  					echo "公司名称：";echo $row['compname'];
					echo "<br />";
					echo $row['add'];
					echo "<br />";
					echo $row['zip'];
					echo "<br />";
					echo $row['tel'];
					echo "<br />";
					echo $row['fax'];
  					echo "<br />";
  					}
					?>
                </div>
            </div>
</body>
</html>