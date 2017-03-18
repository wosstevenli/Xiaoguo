/* 正则表达式 */
/* var box=new RegExp("BOX");   //第一个参数是模式字符串  单双引号均可
alert(box);                  // /BOX/两个反斜杠是正则表达式的字面量表示法 */

/* var box=new RegExp("BOX","ig");  //第二个参数可选模式 修饰符
alert(box);  */

/* var box= /BOX/ig;  //使用字面量方式的正则表达式
alert(box);  */

/* var moshi=new RegExp("BOX");  //大小写不一致不匹配
var bianliang="box";
alert(moshi.test(bianliang)); */

/* var moshi=new RegExp("BOX","i");  //忽略大小写则匹配
var bianliang="box";
alert(moshi.test(bianliang)); */

/* var moshi=/BOX/i;
var bl="box";
alert(moshi.test(bl)); */

/* var moshi=/BOX/;
var bl="box";
alert(moshi.test(bl)); */

/* var str1="BOX";
var str2="box";
alert(str1==str2); */

/* var str1=/BOX/i;
var str2="this is fantasic baby boxe";
alert(str1.test(str2)); */

/* var str1=/BOX/i;                    //返回匹配量，返回的是对象
var str2="this is fantasic baby boxe";
alert(typeof str1.exec(str2)); */

/* var str=/BOX/i;
var str2="This is a BOX,That is a boxo";
alert(str2.match(str)); */

/* var str=/BOX/ig;
var str2="This is a BOX,That is a boxo";
alert(str2.match(str)); */

/* var str=/BOX/ig;
var str2="This is a BOX,That is a boxo";
alert(typeof str2.match(str)); */

/* var str=/BOX/ig;
var str2="This is a BOX,That is a boxo";
var a=str2.match(str);
alert(a[1]); */

/* var zz1=/BOX/i;
var zz2="This is a BOXo,That is a boxo";
var a=zz2.match(zz1);
alert(a[0]); */

/* var str=/BOX/ig;
var str2="This is a BOX,That is a boxo";
alert(str2.search(str));    //找不到就返回-1 */

/* var str=/BOX/i;
var str2="This is a BOX,That is a boxo";
alert(str2.replace(str,"JACK"));  */

/* var str=/BOX/ig;
var str2="This is a BOX,That is a boxo";
alert(str2.replace(str,"JACK"));  */

/* var str=/!/ig;
var str2="This is a BOX!That is a boxo!";
alert(str2.split(str));  */

/* var str=/ /ig;   //可以用空格来拆分
var str2="This is a BOX!That is a boxo!";
alert(str2.split(str));  */

/* var str=/ /ig;   //可以用空格来拆分
var str2="This is a BOX!That is a boxo!";
alert(str2.split(str).length);  */

/* var str=/!/ig;   //可以用空格来拆分
var str2="This is a BOX!That is a boxo!";   
alert(str2.split(str)); 
alert(str2.split(str).length);   //把一个字符串通过正则表达式转化为数组  */

/* var str=/google/i;
var str1="This is Google WebMaster,GOOGLEEEE";
str.test(str1);   //必须执行一次，静态属性才能有效
alert(RegExp.input);
alert(RegExp.leftContext);
alert(RegExp.rightContext);
alert(RegExp.lastMatch); */

/* var str=/google/ig;
var str1="This is Google WebMaster,googlekk,GOOGLEEEE";
str.test(str1);   //必须执行一次，静态属性才能有效
alert(RegExp.lastMatch); */


/* var str=/(g)oogle/ig;
var str1="This is Google WebMaster,googlekk,GOOGLEEEE,HKKgOOGle";
str.test(str1);   //必须执行一次，静态属性才能有效
alert(RegExp.lastParen); */


/* var str=/google/ig;
var str1="This is Google WebMaster,googlekk,GOOGLEEEE";
str.test(str1);   //必须执行一次，静态属性才能有效
alert(RegExp.multiline); */


/* var str=/google/ig;
var str1="This is Google WebMaster,googlekk,GOOGLEEEE";
str.test(str1);   
alert(RegExp["$_"]);        //缩写的方式 */

/* var str=/google/ig;
var str1="This is Google WebMaster,googlekk,GOOGLEEEE";
str.test(str1);   
alert(RegExp["$&"]);        //缩写的方式 */

/* var str1=/g..gle/;          //匹配任意 字符
var str2="google";
alert(str1.test(str2)); */

/* var str1=/go*gle/;          //匹配任意 字符
var str2="google";
alert(str1.test(str2)); */

/* var str1=/go*gle/;          //匹配任意 字符
var str2="ggle";
alert(str1.test(str2)); */

/* var str1=/go+gle/;          //匹配至少一个字符
var str2="gooooooogle";
alert(str1.test(str2)); */

/* var str1=/go+gle/;          //o+表示匹配o至少一个字符
var str2="ggle";
alert(str1.test(str2)); */

/* var str1=/go?gle/;          //匹配至少一个字符
var str2="gooooooogle";
alert(str1.test(str2)); */

/* var str1=/go?gle/;          //匹配至少一个字符
var str2="gogle";
alert(str1.test(str2)); */

/* var str1=/go?gle/;          //o?表示匹配是否有o，有无o都可以，0个或1个
var str2="google";
alert(str1.test(str2)); */

/* var str1=/go{2,4}gle/;          //匹配区间字符数量与{m,n}之间，如例子2-4个均可
var str2="gooogle";
alert(str1.test(str2)); */

/* var str1=/go{2}gle/;          //匹配区间字符数量确定绝对数量，大于小于均不行
var str2="gooogle";
alert(str1.test(str2)); */

/* var str1=/go{5,}gle/;          //匹配区间字符数量5或者>5
var str2="gooogle";
alert(str1.test(str2)); */

/* var str1=/[a-z]oogle/;          //匹配区间字符数量5或者>5
var str2="gooooooogle";
alert(str1.test(str2)); */

/* var str1=/[0-9]oogle/;          //匹配区间字符数量5或者>5
var str2="9oogle";
alert(str1.test(str2)); */

/* var str1=/[a-z0-9]oogle/;          //匹配区间字符数量5或者>5
var str2="9oogle";
alert(str1.test(str2)); */

/* var str1=/[^a-z0-9]oogle/;          //匹配任意不在范围内的字符
var str2="Aoogle";
alert(str1.test(str2)); */

/* var str1=/^[a-z0-9]oogle/;          //从开始匹配字符
var str2="awwwoogle";
alert(str1.test(str2)); */

/* var str1=/^[a-z0-9]+oogle/;          //从开始匹配字符，一个或多个
var str2="awwwoogle";
alert(str1.test(str2)); */

/* var str1=/\w+oogle/;          //表示匹配a-z，A-Z，0-9 _字符 字母数字下划线
var str2="Gwwwoogle";
alert(str1.test(str2)); */

/* var str1=/\W+oogle/;          //表示非数字，字母，下划线
var str2="asd@oogle";
alert(str1.test(str2)); */

/* var str1=/\W+oogle/;          //表示非数字，字母，下划线
var str2="asd@oogle";
alert(str1.test(str2)); */

/* var str1=/\d+oogle/;          //表示匹配数字
var str2="9oogle";
alert(str1.test(str2)); */

/* var str1=/\D+oogle/;          //表示匹配非数字
var str2="-oogle";
alert(str1.test(str2)); */

/* var str1=/^google/;          //表示匹配行首
var str2="getAttentiongoogle";
alert(str1.test(str2)); */

/* var str1=/google$/;          //表示匹配行尾
var str2="getAttentiongoogle";
alert(str1.test(str2)); */

/* var str1=/^google$/;          //表示匹配行首行尾
var str2="google";
alert(str1.test(str2)); */

/* var pattern=/Goo\sgle/i;      // \s表示匹配空格
var str="goo gle";				//	\b表示判断是否到达边界
alert(pattern.test(str)); */

/* var pattern=/Google\b/i;   
var str="google";				//	\b表示判断是否到达边界
alert(pattern.test(str)); */

/* var pattern=/Google|baidu|bing/i;   
var str="google";				//	|表示或选择模式匹配
alert(pattern.test(str)); */

/* var pattern=/Google{4,8}/i;   
var str="googleeeeeeeeeee";				//	{4,8}表示匹配{}前字母出现4-8次
alert(pattern.test(str)); */

/* var pattern=/(Google){4,8}/i;   
var str="googlegooglegooglegooglegoogle";				//	(){4,8}表示匹配{} ()中的字母出现4-8次
alert(pattern.test(str)); */

/* var pattern=/8(.*)8/i;   
var str="8googleeeeeeeeee8e";				//	RegExp.$1表示获取模式中第一个分组对于的匹配字符
pattern.test(str);
alert(RegExp.$1); */

/* var pattern=/8(.*)8/i;   
var str='wuhan8googleeeeeeeeee8e';				//
document.write(str.replace(pattern,'<strong>$1</strong>')); */

/* var pattern=/8(.*)8/i;   
var str='wuhan8googleeeeeeeeee8e';				//替换
document.write(str.replace(pattern,'<strong>$1</strong>')); */

/* var pattern=/(.*)\s(.*)/i;   
var str='wuhan google';				//替换位置
alert(str.replace(pattern,'$2 $1')); */

/* var pattern=/[a-z]/;
var str="abcdefghi";
alert(str.replace(pattern,"9")); */

/* var pattern=/[a-z]+/;   //贪婪，将所有的替换为一个9
var str="abcdefghi";
alert(str.replace(pattern,"9")); */

/* var pattern=/[a-z]+?/;   //惰性，只替换为一个9
var str="abcdefghi";
alert(str.replace(pattern,"9")); */

/* var pattern=/[a-z]+?/g;   //惰性，开启全局每一个都只替换为9
var str="abcdefghi";
alert(str.replace(pattern,"9")); */

/* var pattern=/^[a-z]+\s[0-9]{4}$/;         //正则表达式严格匹配google 2016
var str="google 2016";
alert(pattern.test(str)); */

/* var pattern=/^[a-z]+\s[0-9]{4}$/;			//返回匹配的字符串
var str="google 2016";
alert(pattern.exec(str)); */

/* var pattern=/^([a-z]+)\s([0-9]{4})$/;			//返回匹配的字符串
var str="google 2016";
alert(pattern.exec(str)); */

/* var pattern=/^([a-z]+)\s([0-9]{4})$/;			//返回匹配的字符串
var str="google 2016";
var a=pattern.exec(str);
alert(a.length);
alert(a[0]);					//返回匹配到的整个字符串
alert(a[1]);					//返回匹配到的第一个字符串
alert(a[2]);					////返回匹配到的第二个字符串
alert(pattern.exec(str)); */

/* var pattern=/goo(?=gle)/;  		//前瞻性捕获，goo后面必须是gle才能匹配
var str="googleddd";
alert(pattern.exec(str)); */

/* var pattern=/\[/;  		//特殊字符用\来转义
var str="g[";
alert(pattern.exec(str)); */

/* var pattern=/[1-9][0-9]{5}/;		//匹配邮政编码
var sta="邮政编码430346";
alert(pattern.test(sta)); */

/* var pattern=/[\w\-]+\.zip|rar|7z|gz/;  		//检测文件压缩格式
var sta="2-13.zip";
alert(pattern.test(sta)); */

/* var pattern=/\s/g;			//清除空格
var sta="111 222 333 444";
alert(sta.replace(pattern,"")); */

/* var pattern=/^\s+/;				//去除首尾空格
var sta="               GOO             GLEEEE      ";
var result=sta.replace(pattern,"");
pattern=/\s+$/;
result=result.replace(pattern,"");
alert("|"+result+"|"); */

/* var pattern=/^\s+(.+?)\s+$/;   		//使用非贪婪模式的惰性模式
var sta="               GOO             GLEEEE      ";
var result=pattern.exec(sta)[1];
alert("|"+result+"|"); */

/* var pattern=/^\s+(.+?)\s+$/;   		//使用分组模式
var sta="               GOO             GLEEEE      ";
alert("|"+sta.replace(pattern,"$1")+"|"); */

