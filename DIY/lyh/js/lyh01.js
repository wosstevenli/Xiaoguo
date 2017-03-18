/* var box=new Object();
box.name="微软";
box.price=2800;
alert(box.price+box.name); */

/* var box=Object();
box.name="microsoft";
box.price="2888";
alert(box.name+box.price);
alert(typeof box.price) */

//var box=new Array("李爽",30,"武汉","亚历山大");
/* alert(box); */
//alert(box[0]);

/* var box=Array("李爽",30,"武汉","亚历山大");
alert(box); */

/* var box=new Array(10);
box[5]="李爽";
alert(box); */

/* var box=["李爽",30,"湖北",30,"湖北"];
box[box.length]="武汉";
alert(box); */

/* var box=[21,5,68,35,79,-5];
box.reverse();  //逆向排列
alert(box);
alert(box.reverse()); */

/* var box=[15,24,33,72,91];
alert(box.sort()); */

/* var box=[2,6,8,3,9];
alert(box.sort()); */

/* function compale(value1,value2){
	if(value1<value2){
		return -1;
	}
	else if(value1>value2){
		return 1;
	}
	else{
		return 0;
	}
		
}
var box=[-2,61,18,35,49,9];
alert(box.sort(compale));
alert(box.reverse(compale)); */

/* var box=["湖北","武汉","黄陂",35,"Iphone"];
var box1=box.concat(5100);
alert(box);
alert(box1); */

/* var box=["湖北","武汉","黄陂",35,"Iphone"];
var box1=box.slice(3);   //从第三位开始取，后面没有数字表示一直到最后
alert(box);
alert(box1); */

/* var box=["湖北","武汉","黄陂",35,"Iphone"];
var box1=box.slice(1,3);   //从第三位开始取，后面没有数字表示一直到最后
alert(box);                //表示从第一位取到第三位
alert(box1); */

/* var box=["湖北","武汉","黄陂",35,"Iphone"];
var box1=box.splice(0,2);  //表示从第0位开始取2位，同时原数组发生改变
alert(box);
alert(box1); */

/* var box=["湖北","武汉","黄陂",35,"Iphone"];
var box1=box.splice(0,0,"广东","深圳");
alert(box);
alert(box1); */