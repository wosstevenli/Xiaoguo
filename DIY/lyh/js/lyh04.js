/* function box(a,b){				//普通函数声明
	return a+b;
}
alert(box(1,2)); */

/* var box=function(a,b){				//使用变量初始化函数
	return a+b;
}
alert(box(1,2)); */

/* var box=new Function("a","b","return a+b");
alert(box(1,2));
alert(typeof box(1,2)); */

/* function box(sum,num){
	return sum+num;
}

function sum(num){
	return num+10;
}
var result=box(sum(10),10);  //sum(10)这里传递的是函数的返回值，和普通的变量一样，没有区别
alert(result); */

//将函数本身作为参数传递
/* function box(sum,num){
	return sum(num)+num;
}

function sum(num){
	return num+10;
}
var result=box(sum,10);  //sum()这里传递的是函数，和普通的变量一样，没有区别
alert(result); */

/* function box(num){			//递归
	if(num<=1){
		return 1;
	}
	else{
		return num*box(num-1);
	}
}
alert(box(4)); */

/* function box(num){			//arguments.callee调用自身实现递归
	if(num<=1){
		return 1;
	}
	else{
		return num*arguments.callee(num-1);
	}
}
alert(box(4)); */

/* alert(window);
alert(typeof window);
alert(this);
alert(typeof this); */

/* var color="红色";
alert(window.color);
alert(this.color); */

/* window.color="红色";
//alert(this.color);

var box={
	color:"蓝色",
	sayColor:function(){
		alert(this.color);
	}
};

alert(this.color);
box.sayColor(); */

/* function box(a,b){
	return a+b;
}

function sum(c,d){
	return box.apply(this,[e,f]);
}
alert(sum(10,10)); */

function box(a,b){
	return a+b;
}

function sum(c,d){
	return box.apply(this,[c,d]);
}
alert(sum(10,10));