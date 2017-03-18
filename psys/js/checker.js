	function check()
{
   if(staffinput.name.value==""||staffinput.name.value==null)
   {
   	 alert("请填写您的姓名");
   	 return false;
   }
    if(staffinput.job.value==""||staffinput.job.value==null)
   {
   	 alert("请填写您的职位");
   	 return false;
   }
    if(staffinput.ext.value==""||staffinput.ext.value==null)
   {
   	 alert("请填写你的分机！提示：未知分机号码，拨打#97即会电脑报出你的分机号");
   	 return false;
   }
   if(staffinput.ext.value.length!=3)
   {
   	 alert("请输入正确分机号码！提示：公司分机均为三位数未知分机号码，拨打#97即会电脑报出你的分机号");
   	 return false;
   }
   if(staffinput.mobile.value==""||staffinput.mobile.value==null)
   {
   	 alert("请填写您的手机号码！");
   	 return false;
   }
    if(staffinput.mobile.value.length<11)
   {
   	 alert("您的电话不全，请正确填写你的手机号码！");
   	 return false;
   }
   if(staffinput.mobile.value.length>11)
   {
   	 alert("您的电话超长，请正确填写你的手机号码！");
   	 return false;
   }
   if(staffinput.email.value==""||staffinput.email.value==null)
   {
   	 alert("请填写E-mail");
   	 return false;
   }
   if((staffinput.email.value.indexOf("@")<0)||(staffinput.email.value.indexOf(".")<0))
   {
        alert("E_Mail地址输入不合法，请重输!");
        return false;
   }

}