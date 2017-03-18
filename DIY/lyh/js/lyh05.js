function box(a,b){
	return a+b;
}

function sum(c,d){
	return box.apply(this,[c,d]);
}
alert(sum(10,10));