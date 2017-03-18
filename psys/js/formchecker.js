	function check()
{
   if(forminput.client.value==""||forminput.client.value==null)
   {
   	 alert("请选择客户姓名！");
   	 return false;
   }
    if(forminput.pro_bm.value==""||forminput.pro_bm.value==null)
   {
   	 alert("请正确输入产品料号！");
   	 return false;
   }
    if(forminput.quantity.value==""||forminput.quantity.value==null)
   {
   	 alert("请输入数量！");
   	 return false;
   }
    if(forminput.pro_name.value==""||forminput.pro_name.value==null)
   {
   	 alert("请输入产品名称！");
   	 return false;
   }
   if(forminput.ggrl.value==""||forminput.ggrl.value==null)
   {
   	 alert("请输入规格/电池容量！");
   	 return false;
   }
   if(forminput.dydc.value==""||forminput.drdc.value==null)
   {
   	 alert("请输入电压/电池数量！");
   	 return false;
   }
   if(forminput.datetp.value==""||forminput.datetp.value==null)
   {
   	 alert("请输入交货日期/色温！");
   	 return false;
   } 
}