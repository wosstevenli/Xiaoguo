<?PHP
error_reporting(0);
$action = $_POST['action'];
if($action == "sendaction"){
	$username = $_POST['username'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$hometel = $_POST['hometel'];
	$tel = $_POST['tel'];
	$city = $_POST['city'];
	$address = $_POST['address']; 

	if($username != "" && $email != "" && $tel != ""){ 
		$template = file_get_contents('template.html');
		$template = str_replace('{username}',$username,$template);
		$template = str_replace('{sex}',$sex,$template);
		$template = str_replace('{age}',$age,$template);
		$template = str_replace('{email}',$email,$template);
		$template = str_replace('{hometel}',$hometel,$template);
		$template = str_replace('{tel}',$tel,$template);
		$template = str_replace('{city}',$city,$template);
		$template = str_replace('{address}',$address,$template); 
		
		$content = $template;
		
		
		include("sendmail.php");//发送邮件类
		####################--发邮件--####################		
		$smtpserver 	= 	"smtp.163.com";//SMTP服务器
		$smtpserverport =	25;//SMTP服务器端口
		$smtpusermail 	= 	"13510765087@163.com";//SMTP服务器的用户邮箱
		$smtpuser 		= 	"13510765087@163.com";//SMTP服务器的用户帐号
		$smtppass 		= 	"WHrzxf501-@$";//SMTP服务器的用户密码

		$smtpemailto 	= 	"809889839@qq.com";//发送给谁
		$mailsubject 	= 	$username.'报名!';//邮件主题
		$mailtime		=	date("Y-m-d H:i:s");
		$mailbody 		= 	$content;//邮件内容
		 
		$utfmailbody	=	iconv("UTF-8","GB2312",$mailbody);//转换邮件编码 
		$mailtype 		= 	"HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
		 
		
		$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
		$smtp->debug = FALSE;//是否显示发送的调试信息 FALSE or TRUE
		if($smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $utfmailbody, $mailtype))
		{
			echo '<script>alert("报名成功");window.location="/";</script>';
		}else
		{
			echo '<script>alert("报名失败");window.histroy.back(-1);</script>';
		} 
	}else{
		echo '<script>alert("邮件地址，主题，内容不能为空");history.back();</script>';
	}
}

?>
<html>
<head>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
table {background:#f4f4f4}
table td{height:40px; vertical-align:middle}
.red{color:#F00; font-size:14px;}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 报名系统 </title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
<script language="javascript">
function checkform()
{
	if($('#username').val()=='')
	{
		alert('请填写姓名');
		return false;
	}
	if($('#email').val()=='')
	{
		alert('请填写邮件地址');
		return false;
	}
	if($('#tel').val()=='')
	{
		alert('请填写手机号码');
		return false;
	}
}
</script>
</head>
<body>

<form id="form1" name="form1" method="post" action="index.php" onSubmit="return checkform()">
  <input name="action" type="hidden" value="sendaction" />
  <table width="800" border="0" align="center" cellpadding="0" cellspacing="0" >
    
    <tr>
      <td width="96" align="right">姓&nbsp;&nbsp;&nbsp;&nbsp;名：</td>
      <td width="704"><input name="username" type="text" id="username" />
       <span class="red"> *</span></td>
    </tr>
    <tr>
      <td align="right">性&nbsp;&nbsp;&nbsp;&nbsp;别：</td>
      <td><input type="radio" name="sex"   value="radio" checked>
        男<input type="radio" name="sex"   value="radio">
        女</td>
   
    <tr>
      <td align="right">年&nbsp;&nbsp;&nbsp;&nbsp;龄：</td>
      <td><input name="age" type="text" id="age" /></td>
    </tr>
    <tr>
      <td align="right">电子邮件：</td>
      <td><input name="email" type="text" id="email" /><span class="red"> *</span></td>
    </tr>
    <tr>
      <td align="right">家庭电话：</td>
      <td><input name="hometel" type="text" id="hometel" /></td>
    </tr>
    <tr>
      <td align="right">移动电话：</td>
      <td><input name="tel" type="text" id="tel" /><span class="red"> *</span></td>
    </tr>
    <tr>
      <td align="right">所&nbsp;在&nbsp;地：</td>
      <td><input name="city" type="text" id="city" /></td>
    </tr>
    <tr>
      <td align="right">联系地址：</td>
      <td><input name="address" type="text" id="address" style="width:300px;" /></td>
    </tr>
    
    <tr>
      <td align="right"><input type="submit" name="button" id="button" value="提交" /></td>
      <td>&nbsp;</td>
    </tr>    
  </table>
</form>
</body>
</html>
