<?php
/*do{
echo "ѭ��",$a++;}
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
 	echo "�������Լ��Զ���ĺ���";
 	}
 x_output();
 x_output();
  x_output();
*/
 
 /*function x_output(){
 	return "�������Լ��Զ���ĺ���";
 	}
 	$a=x_output();
 	echo $a;
*/

/*function x_output($val){
 	return "�������Լ��Զ���ĺ���".$val;
 	}
 	$a=x_output("�����Ǹ��ƣ�");
 	echo $a;
*/  /* �Զ��庯�������ڵĿ���ʡ�ԣ��˾���ʵ���Զ��庯�����
��������������û��ʡ�Ե�����*/

/*function x_output($val,$val2=1){
	$a=$val+$val2;
 	return $a;
 	}
 	$a=x_output(6);
 	echo $a;   */
 	
 	/*$a=x_output(6)����˼�Ǹ�$a��ֵ������output������������ֻ��
 һ��6��ʾ$val2=1���ֲ��䣬������$a=6+$val2=6+1=7 
 $��ֵʱ��val2�г�ʼֵʱ����ʡ�ԣ�����val2�޳�ʼֵʱ����ʡ��*/
 
 /*
 	function x_output($val,$val2=1){

	$a=$val+$val2;
 	return $a;
 	}
 if(function_exists('x_output'))
 	{echo "goodjob";}
 	else{
 		echo "�����Ц��";} 
 		/*�ж��Ƿ���� if(function_exists('x_output'))��x_output*/



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
	echo "�����еı���A������еı���B�ֱ�Ϊ<br>";
	echo "���� A��$A <br>";
	echo "���� B��$B <P>";
	}
	maren($A,$B);
	echo "�����еı���A������еı���B�ֱ�Ϊ<br>";
	echo "���� A��$A <br>";
	echo "���� B��$B <P>";
*/

$A="FUCK";
$B="YOU";
function maren($A,&$B)
{
	$B=$A."TOYOTA".$B;
	echo "�����еı���A������еı���B�ֱ�Ϊ<br>";
	echo "���� A��$A <br>";
	echo "���� B��$B <P>";
	}
	maren($A,$B);
	echo "�����еı���A������еı���B�ֱ�Ϊ<br>";
	echo "���� A��$A <br>";
	echo "���� B��$B <P>";
?>