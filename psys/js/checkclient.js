function check()
{
   if(salesinput.sales.value==""||salesinput.sales.value==null)
   {
   	 alert("请选择销售姓名！");
   	 return false;
   }
   if(salesinput.client.value==""||salesinput.client.value==null)
   {
   	 alert("请填写客户姓名！");
   	 return false;
   }
  if(salesinput.country.value==""||salesinput.country.value==null)
   {
   	 alert("请填写客户国籍！");
   	 return false;
   }
   if(salesinput.cphone.value==""||salesinput.cphone.value==null)
   {
   	 alert("请填写客户电话！");
   	 return false;
   }
   if(salesinput.cemail.value==""||salesinput.cemail.value==null)
   {
   	 alert("请填写客户E-mail！");
   	 return false;
   }

   if((salesinput.cemail.value.indexOf("@")<0)||(salesinput.cemail.value.indexOf(".")<0))
   {
        alert("E_Mail地址输入不合法，请重输！");
        return false;
   }
      if(salesinput.cfrom.value==""||salesinput.cfrom.value==null)
   {
   	 alert("请选择客户来源！");
   	 return false;
   }
   if(salesinput.cndtype.value==""||salesinput.cndtype.value==null)
   {
   	 alert("请选择客户产品需求类型！");
   	 return false;
   }
   if(salesinput.cndinfo.value==""||salesinput.cndinfo.value==null)
   {
   	 alert("请详细填写客户需求信息！");
   	 return false;
   }
     if(salesinput.success.value==""||salesinput.success.value==null)
   {
   	 alert("请详细填写客户需求信息！");
   	 return false;
   }
}