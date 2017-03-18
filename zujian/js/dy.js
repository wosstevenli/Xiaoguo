/**
 * Created by Steven on 2016/9/11.
 */
/*$(document).ready(function(){
    $(window).scroll(function(){
        var top =$(document).scrollTop();
        var menu =$("#menu");
        var items =$("#content").find(".item");
        var currentId ="";
        items.each(function(){
            var m =$(this);
            var itemTop = m.offset().top;
            //console.log(itemTop)
            if (top > m.itemTop){
                currentId = "#"+ m.attr("id");
            }
            else{
                return false;
            }
        });
        //console.log(top)

        var currentLink = menu.find(".current");
        if (currentId&&currentLink.attr("href") !=currentId){
            currentLink.removeClass("current");
            menu.find("[href="+currentId+"]").addClass("current");
        }
    });
});*/

//慕课示例
/*
$(document).ready(function () {
    $(window).scroll(function () {
        var items = $("#content").find(".item");
        var menu = $("#menu");
        var top = $(document).scrollTop();
        var currentId = ""; //滚动条现在所在位置的item id
        items.each(function () {
            var m = $(this);
            //注意：m.offset().top代表每一个item的顶部位置
            if (top > m.offset().top - 300) {
                currentId = "#" + m.attr("id");
            } else {
                return false;
            }
        });

        var currentLink = menu.find(".current");
        if (currentId && currentLink.attr("href") != currentId) {
            currentLink.removeClass("current");
            menu.find("[href=" + currentId + "]").addClass("current");
        }
    });
});*/

$(document).ready(function(){
   $(window).scroll(function(){
       var top = $(document).scrollTop();
       //console.log(top);
       var menu = $("#menu");
       var items = $("#content").find(".item");
       var currentId = "";  //获取当前所在楼层的item ID
       items.each(function(){
           var m = $(this);
           var itemtop = m.offset().top;
           //console.log(itemtop);
           if(top > itemtop - 200){
               currentId = "#" + m.attr("id");
           }
           else{
               return false;
           }
       });

       var currentLink = menu.find(".current");
       if (currentId && currentLink.attr("href") != currentId){
           currentLink.removeClass("current");
           menu.find('[href="+currentId+"]').addClass("current");
       }
   });
});