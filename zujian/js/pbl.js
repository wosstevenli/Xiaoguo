/**
 * Created by Steven on 2016/9/12.
 */
/*
$(document).ready(function(){

});*/
//方案一原生js控制
window.onload=function(){
    waterfall('main','box');
};
function waterfall(fu,box){
    var ofu=document.getElementById(fu);
    var oboxs=getByclass(ofu,box);
    //console.log(oboxs.length)
    var oboxw=oboxs[0].offsetWidth;
    //console.log(oboxw)
    var cols=Math.floor(document.documentElement.clientWidth/oboxw);
    //console.log(cols);
    ofu.style.cssText='width:'+oboxw*cols+'px;margin:0 auto'
    var harr=[];
    for(var i=0;i<oboxs.length;i++){
        if(i<cols){
            harr.push(oboxs[i].offsetHeight);
        }
        else{
            var minh=Math.min.apply(null,harr);
            console.log(minh)
        }
    }
    //console.log(harr)
}

function getByclass(fu,classname){
    var boxarr=new Array(),
        oElements=fu.getElementsByTagName("*");
    for(var i=0;i<oElements.length;i++){
        if(oElements[i].className==classname){
            boxarr.push(oElements[i]);
        }
    }
    return boxarr;
}