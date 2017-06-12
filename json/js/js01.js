/*var JsonObject, i, x = "";
JsonObject = {
    "name": "JOHN WICK",
    "age": 35,
    "song": ["只想一生跟你走", "只愿一生爱一人", "如果这都不算爱"]
};
for (i in JsonObject.song) {  //for in循环
    x += JsonObject.song[i] + "<br>";
}

document.getElementById("xunhuan").innerHTML = x;*/

/*var JsonObject, i, x = "";
JsonObject = {
    "name": "JOHN WICK",
    "age": 35,
    "song": ["只想一生跟你走", "只愿一生爱一人", "如果这都不算爱"]
};
for (i = 0; i < JsonObject.song.length; i++) { //for循环
    x += JsonObject.song[i] + "<br>";
}

document.getElementById("xunhuan").innerHTML = x;*/

/*var JsonObject, x, i, j = "";
JsonObject = {
    "name": "JOHN WICK",
    "age": 55,
    "title": [
        { "name": "Google", "pro": ["Android", "GOOGLE", "youtube", "CAR"] },
        { "name": "TESTA", "pro": ["model s", "model x", "spacex"] },
        { "name": "facebook", "pro": ["facebook", "instrgam", "viem"] }
    ]
}
for (i in JsonObject.title) {
    x += "<h2>" + JsonObject.title[i].name + "</h2>";
    for (j in JsonObject.title[i].pro) {
        x += JsonObject.title[i].pro[j] + "<br>";
    }
}

document.getElementById("xunhuan").innerHTML = x;*/

/*var myObj, i, j, x = "";
myObj = {
    "name": "网站",
    "num": 3,
    "sites": [
        { "name": "Google", "info": ["Android", "Google 搜索", "Google 翻译"] },
        { "name": "Runoob", "info": ["菜鸟教程", "菜鸟工具", "菜鸟微信"] },
        { "name": "Taobao", "info": ["淘宝", "网购"] }
    ]
}

for (i in myObj.sites) {
    x += "<h1>" + myObj.sites[i].name + "</h1>";
    for (j in myObj.sites[i].info) {
        x += myObj.sites[i].info[j] + "<br>";
    }
}

document.getElementById("xunhuan").innerHTML = x;*/ //教程里的就不会出现undefined

/*var JsonObject, i, j, x = "";
JsonObject = {
    "name": "JPHN WICK",
    "age": 37,
    "title": [
        { "name": "Google", "pro": ["Android", "Google", "youtube", "CAR"] },
        { "name": "facebook", "pro": ["facebook", "instrgream", "viem"] },
        { "name": "tesla", "pro": ["model x", "model x", "model 3"] }
    ]
}

for (i in JsonObject.title) {
    x += "<h1>" + JsonObject.title[i].name + "</h1>";
    for (j in JsonObject.title[i].pro) {
        x += JsonObject.title[i].pro[j] + "<br>";
    }
}

document.getElementById("xunhuan").innerHTML = x;*/

/*var JsonObject = JSON.parse('{"name":"STEVEN","job":"DESIGNER","city":"WUHAN"}');
document.getElementById("div001").innerHTML = JsonObject.name + ":" + JsonObject.job + ":" + JsonObject.city;*/

/*var JsonObject = "";
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status === 200) {
        JsonObject = JSON.parse(this.responseText);
        document.getElementById("div001").innerHTML = JsonObject.name;
    }
};
// xmlhttp.open("GET", "20170611.txt", true);  //从服务端接收数组的 JSON 数据
xmlhttp.open("GET", "20170611.json", true); //也可以直接是json文件
xmlhttp.send();*/

/*var JsonObject = "";
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status === 200) {
        JsonObject = JSON.parse(this.responseText);
        document.getElementById("div001").innerHTML = JsonObject[0];
    }
};
xmlhttp.open("GET", "2017061101.txt", true);
xmlhttp.send();*/

/*var text = '{"name":"JOBS","date":"2017-06-11","list":"learn json"}';
//var text = '{"name":"JOBS","date":"Sun Jun 11 2017 08:00:00 GMT+0800 (中国标准时间)","list":"learn json"}';
var JsonObject = JSON.parse(text);
JsonObject.date = new Date(JsonObject.date); //没有这个则只会输入原始的2017-06-11相当于字符串输出，有则会输出日期时间星期等信息
document.getElementById("div001").innerHTML = JsonObject.name + ":" + JsonObject.date + "/" + JsonObject.list;*/

/*var text = '{"name":"JOBS","date":"2017-06-11","list":"learn json"}';
var JsonObject = JSON.parse(text, function(key, value) {
    if (key == "date") { //用什么表示都可以，但为了不引起误解，还是用initDate比较正规合适
        return new Date(value);
    } else {
        return value;
    }
});
document.getElementById("div001").innerHTML = JsonObject.name + ":" + JsonObject.date + "/" + JsonObject.list;*/

/*var text = '{"name":"JOBS","initDate":"2017-06-11","list":"learn json"}';
var JsonObject = JSON.parse(text, function(key, value) {
    if (key == "initDate") { //用什么表示都可以，但为了不引起误解，还是用initDate比较正规合适
        return new Date(value);
    } else {
        return value;
    }
});
document.getElementById("div001").innerHTML = JsonObject.name + ":" + JsonObject.initDate + "/" + JsonObject.list;*/

/*var text = '{"name":"JOBS","paiming":"function(){return 10000;}","list":"learn json"}';
var JsonObject = JSON.parse(text);
JsonObject.paiming = eval("(" + JsonObject.paiming + ")");
document.getElementById("div001").innerHTML = JsonObject.name + "排名是：" + JsonObject.paiming() + "/" + JsonObject.list;*/

/*var obj = { "name": "STEVEN", "alexa": 189, "title": "Designer" };
var myJson = JSON.stringify(obj);
document.getElementById("div001").innerHTML = myJson;*/

/*var arr = ["Google", "facebook", "twitter"];
var myJson = JSON.stringify(arr);//这个好像就是处理json和数组对象的函数
document.getElementById("div001").innerHTML = myJson;*/

//var arr = ["Google", "facebook", "twitter"];
//var obj = { "name": "STEVEN", "alexa": 189, "title": "Designer" };
//var myJson = JSON.stringify(arr);//这个好像就是处理json和数组对象的函数
//document.getElementById("div001").innerHTML = obj; //这个还必须经过stringify来处理输入，不然输出的将是字符串

//var obj = { "name": "steven", "initDate": new Date(), "JOB": "Designer" };
/*var obj = { "name": "steven", "initDate": "2017-06-12", "JOB": "Designer" };
var JsonObject = JSON.stringify(obj);
document.getElementById("div001").innerHTML = JsonObject;*/

/*var obj = { "name": "steven", "paiming": function() { return 1000 }, "title": "JUSTIN BIBER" };
var JsonObject = JSON.stringify(obj); //将删除对象中的函数
document.getElementById("div001").innerHTML = JsonObject;*/

/*var obj = { "name": "steven", "paiming": function() { return 1000 }, "title": "JUSTIN BIBER" };
obj.paiming = obj.paiming.toString(); //将paiming的值转化为string字符串
var JsonObject = JSON.stringify(obj);
document.getElementById("div001").innerHTML = JsonObject;*/

// var json001 = '{"name":[' + '{"people":"JOBS","GS":"Apple"},' + '{"people":"bill","GS":"microsoft"},' + '{"name":"max","GS":"TESTA"}]}';
/*var json001 = '{"name":[{"people":"JOBS","GS":"Apple"},{"people":"bill","GS":"microsoft"},{"name":"max","GS":"TESTA"}]}';
var JsonObject = eval("(" + json001 + ")");
document.getElementById("div001").innerHTML = JsonObject.name[1].people + JsonObject.name[2].GS;*/

/*function callbackFunction(result, methodName) {
    var html = '<ul>';
    for (var i = 0; i < result.length; i++) {
        html += '<li>' + result[i] + '</li>';
    }
    html += '</ul>';
    document.getElementById('div001').innerHTML = html;
};*/