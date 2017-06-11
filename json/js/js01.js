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
var JsonObject = "";
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status === 200) {
        JsonObject = JSON.parse(this.responseText);
        document.getElementById("div001").innerHTML = JsonObject.name;
    }
};
xmlhttp.open("GET", "20170611.txt", true);
xmlhttp.send();