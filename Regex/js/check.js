var user = document.getElementById('user');

user.onblur=function(){
    var user_name = user.value;
    var ajax = false;

    //1.根据浏览器的不同，使用不同的方法创建对象
    if(window.ActiveXObject){
    ajax = new ActiveXObject('Microsoft.XMLHTTP');
    }else if(window.XMLHttpRequest){
    ajax = new XMLHttpRequest();
    }

    //2.创建请求
    ajax.open('post','post.php',true);

    //3.发送请求，send里面的参数只能通过post方法发送
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    // ajax.send();当方式为get的时候用这个
    ajax.send('user='+user_name);//当方式为post的时候用这个

    //4.判断请求的状态和请求结果
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4 && ajax.status==200){
            var message = ajax.responseText;
            console.log(message);
            if(message==1){
            user.nextSibling.innerHTML='<font color="red">×,不可以注册</font>';
            }else{
            user.nextSibling.innerHTML='<font color="green">√,可以注册</font>';
            }
        }
    }
}