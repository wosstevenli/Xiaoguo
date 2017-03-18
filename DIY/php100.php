<?php
/*do{
echo "循环",$a++;}
while($a<4)*/

/*$s=100;
			$s+=10;
			echo $s;
		*/
		
			 // phpinfo();

// $a=date("y-m-d"); 	echo $a;		

/*$a=md5("lishuang");
echo $a;
*/

/*function x_output(){
 	echo "这是我自己自定义的函数";
 	}
 x_output();
 x_output();
  x_output();
*/
 
 /*function x_output(){
 	return "这是我自己自定义的函数";
 	}
 	$a=x_output();
 	echo $a;
*/

/*function x_output($val){
 	return "这是我自己自定义的函数".$val;
 	}
 	$a=x_output("神马都是浮云！");
 	echo $a;
*/  /* 自定义函数（）内的可以省略，此句是实现自定义函数输出
在其输出语句后加上没有省略的内容*/

/*function x_output($val,$val2=1){
	$a=$val+$val2;
 	return $a;
 	}
 	$a=x_output(6);
 	echo $a;   */
 	
 	/*$a=x_output(6)的意思是给$a赋值，但是output有两个变量，只有
 一个6表示$val2=1保持不变，运算结果$a=6+$val2=6+1=7 
 $赋值时当val2有初始值时可以省略，但是val2无初始值时不能省略*/
 
 /*
 	function x_output($val,$val2=1){

	$a=$val+$val2;
 	return $a;
 	}
 if(function_exists('x_output'))
 	{echo "goodjob";}
 	else{
 		echo "你真搞笑！";} 
 		/*判断是否存在 if(function_exists('x_output'))，x_output*/



/*$b=100;
function x_output($val,$val2=1){
	global $b;
	$a=$val+$val2+$b;
 	return $a;
 	}
 
 	echo x_output(3,8);
*/

/*$A="FUCK";
$B="YOU";
function maren($A,$B)
{
	$B=$A."TOYOTA".$B;
	echo "程序中的变量A与程序中的变量B分别为<br>";
	echo "变量 A：$A <br>";
	echo "变量 B：$B <P>";
	}
	maren($A,$B);
	echo "程序中的变量A与程序中的变量B分别为<br>";
	echo "变量 A：$A <br>";
	echo "变量 B：$B <P>";
*/

$A="FUCK";
$B="YOU";
function maren($A,&$B)
{
	$B=$A."TOYOTA".$B;
	echo "程序中的变量A与程序中的变量B分别为<br>";
	echo "变量 A：$A <br>";
	echo "变量 B：$B <P>";
	}
	maren($A,$B);
	echo "程序中的变量A与程序中的变量B分别为<br>";
	echo "变量 A：$A <br>";
	echo "变量 B：$B <P>";
?>