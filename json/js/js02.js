$(function() {
    var url = "http://api.flickr.com/services/feeds/photos_public.gne?tags=cat&tagmode=any&format=json&jsoncallback=?"
    $.getJSON(　　　　 //使用getJSON方法取得JSON数据
        url,
        function(data) { //处理数据 data指向的是返回来的JSON数据
            var tit = "<a href='" + data.link + "'>" + data.title + "<\/a>"; //生成标题和标题连接
            $("h1").html(tit);　　　　 //出现在指定位置H1 内
            $("#ginfo").find("p").eq(0).html(data.modified);
            $("#ginfo").find("p").eq(1).html(data.generator);
            var lis = "";　　　 //li 列表项目
            $(data.items).each(function(i, ite) {　　　　 //遍历JSON数据得到所需形式
                lis += "<li>";
                lis += "<a href='" + ite.link + "'><img src='" + ite.media.m + "' title='" + ite.title + "'><\/><\/a>";
                lis += "<div>";
                lis += ite.description;
                lis += "<\/div><\/li>";
            })
            $("ul").html(lis);　　　 //将遍历出来的数据呈现在所需位置
            $("li").hover(function() { $(this).addClass("hov") }, function() { $(this).removeClass("hov") });
        }
    )
})