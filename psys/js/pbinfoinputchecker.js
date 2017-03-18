	function check()
{
   if(pbupdate.btype.value==""||pbupdate.btype.value==null)
   {
   	 alert("请选择电池类型！");
   	 return false;
   }
    if(pbupdate.shell.value==""||pbupdate.shell.value==null)
   {
   	 alert("请选择壳料材质！");
   	 return false;
   }
    if(pbupdate.input.value==""||pbupdate.input.value==null)
   {
   	 alert("请选择额定输入！");
   	 return false;
   }
    if(pbupdate.output.value==""||pbupdate.output.value==null)
   {
   	 alert("请选择额定输出！");
   	 return false;
   }
   if(pbupdate.colour.value==""||pbupdate.colour.value==null)
   {
   	 alert("请选择供选颜色！");
   	 return false;
   }
   if(pbupdate.weight.value==""||pbupdate.weight.value==null)
   {
   	 alert("请输入产品重量！");
   	 return false;
   }
   if(pbupdate.size.value==""||pbupdate.size.value==null)
   {
   	 alert("请输入产品体积！");
   	 return false;
   } 
}