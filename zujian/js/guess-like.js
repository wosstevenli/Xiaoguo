/* product-home/1.0.0 guess-like.js Date:2016-05-11 15:11:50 */
!function(){var a=!1;var b=readCookie("__jda");if(b){var c=pageConfig.getHashProbability(b.split(".")[1],1e4);(/testtag=1/.test(location.search)||c>2e3&&4e3>=c)&&(a=!0)}a?seajs.use(["jdf/1.0.0/unit/trimPath/1.0.0/trimPath","jdf/1.0.0/ui/lazyload/1.0.0/lazyload","jdf/1.0.0/unit/price/1.0.0/price"],function(a,b,c){var d=$("#lazy-guess-like");d.html('<div id="guessyou" class="m"></div>');var e=(document.characterSet||document.charset||"gbk").toLowerCase();"gb2312"==e&&(e="gbk");var f=$("#guessyou");var g=null;var h=null;var i=["b","c","d","e"];var j=pageConfig.wideVersion?5:4;var k=pageConfig.wideVersion?20:16;var l=0;var m={dataList:[],impr:null,pageNo:0,pageCount:0,len:0};var n=pageConfig.wideVersion?202:190;var o=150;var p=[];var q=["\u751f\u6d3b\u5bb6","\u54c1\u8d28\u751f\u6d3b","\u6709\u60c5\u8c03","\u51f9\u9020\u578b","\u6709\u8154\u8c03","\u5c45\u5bb6\u5e03\u827a","\u7231\u6237\u5916","\u4e2d\u56fd\u98ce","\u7115\u65b0\u989c","\u7231\u8fd0\u52a8","\u521b\u610f\u5bb6\u5c45","\u6570\u7801\u63a7"];q.sort(function(){return Math.random()>.5?-1:1}),p.push("#lazy-guess-like{height:317px;}"),p.push("#guessyou{height:297px;}"),p.push("#guessyou ul{height: 240px;}"),p.push(".root61 #guessyou li{_width: 199px;}"),p.push("#guessyou .mc{height:260px;_overflow: hidden;}"),p.push("#guessyou .p-img{margin-bottom: 20px;}"),p.push("#guessyou .p-name{height: 18px;margin-bottom: 15px;text-align: center;}"),p.push("#guessyou .p-price{font-size: 16px;text-align: center;color: #c81623;font-weight: bold;}"),p.push("#guessyou .p-info{border-left:none;padding: 0 25px;}"),p.push("#guess-like-tag-box{float:left;height: 100%;border-right: 1px solid #e6e6e6;}"),p.push("#guess-like-tag-box .guresslike-tag-mt{margin:36px auto 0 auto;height: 16px;width: 166px;background:url(//img10.360buyimg.com/da/jfs/t2155/248/1447460563/2782/36aadd75/56a5d4a6N3ee370d0.jpg) no-repeat}"),p.push("#guess-like-tag-box .guresslike-tag-mc{margin-top: 18px;padding-left: 1px;}"),p.push(".root61 #guess-like-tag-box .guresslike-tag-mc{padding-left: 7px;}"),p.push('#guess-like-tag-box .guresslike-tag-mc a{_display:inline;float:left;width:71px;height:31px;border:1px solid #ece8e7;color:#838282;font-family:"microsoft yahei";text-align: center;line-height: 31px;margin-top: 18px;margin-left: 14px;}'),p.push("#guess-like-tag-box .guresslike-tag-mc a:hover{border-color:#ffd4ca;color:#fe7758;}"),$('<style type="text/css">'+p.join("")+"</style>").appendTo($("head:eq(0)"));var r='<div id="guess-like-tag-box" style="width:'+n+'px;"><div class="guresslike-tag-mt"></div><div class="guresslike-tag-mc"></div></div>';var s="//diviner.jd.com/diviner?p=610009&uuid=12396477&sku=&skus=&&c1=&c2=&c3=&lid=1&lim="+k+"&sp=&hi=&fe=&fne=&ro=&ec="+e+"&ck=_pst,aview";var t="//diviner.jd.com/diviner?p=619027&uuid=-1&sku=&skus=&&c1=&c2=&c3=&lid=1&lim=6&sp=&hi=&fe=&fne=&ro=&ec="+e+"&ck=_pst,aview";var u="//mercury.jd.com/log.gif?t=rec.610009&v=src=rec$errorcode=";var v='			<li class="fore${index}" clstag="${clstag}">				<div class="p-img"><a data-clk="${clk}" href="//xihuan.jd.com/${sku}.html" target="_blank">{if type == 0}<img data-lazy-img="${imgRoot}${img}'+(pageConfig.superImgSuffix||"")+'" width='+o+" height="+o+' title="${t}">{else}<img src="${imgRoot}${img}'+(pageConfig.superImgSuffix||"")+'" width='+o+" height="+o+' title="${t}">{/if}</a></div>					<div class="p-info">					<div class="p-name"><a data-clk="${clk}" href="//xihuan.jd.com/${sku}.html" target="_blank" title="${t}">${t}</a></div>					{if jp == null}<div class="p-price" data-lazy-price="${sku}">&nbsp;</div>{else}{if jp && jp > 0}<div class="p-price"><i>\xa5</i>${jp}</div>{else}<div class="p-price" style="font-size: 14px;">\u6682\u65e0\u62a5\u4ef7</div>{/if}{/if}				</div>			</li>';f.html('<div class="mt"><h2>\u731c\u4f60\u559c\u6b22</h2><a href="javascript:;" class="extra" clstag="h|keycount|2015|12a">\u6362\u4e00\u6279</a></div><div class="mc"><div class="spacer"><i></i></div>'+r+'<ul style="display: inline-block;"></ul></div>'),g=$(".mc ul",f),h=$(".extra",f);var w=$("#guess-like-tag-box .guresslike-tag-mc");var x=function(){w.html(F(q))};$.getJSON(t+"&callback=?",function(a){if(a&&a.success&&a.data&&a.data.length){w.html(F(a.data)),w.delegate("a[clk]","click",function(){var a=$(this);D(a.attr("clk"))});var b=[];$.each(a.data,function(a,c){b.push(c.t)}),a.impr=a.impr.replace(/&(v=)|\?(v=)/,function(a){return a+"rtv="+encodeURIComponent(b.join("_"))+"$"}),D(a.impr)}else x()}).error(x);function y(a){var b=function(){if(m.len>=j){var b=l*j;var c=(l+1)*j;return c>=m.len&&(c=m.len),a(m.dataList.slice(b,c)),l++,l>=m.pageCount&&(l=0),!0}return!1};b()||(window.tempGuessLikeCallback=function(b){var c=-1;b&&b.success&&b.data&&b.data.length>0?($.each(b.data,function(a,b){b.jp=null}),m.dataList=b.data,m.len=m.dataList.length,m.pageCount=Math.ceil(m.dataList.length/j),m.impr=b.impr,c=b.impr.indexOf("$csku="),c>-1&&(m.impr=b.impr.substring(0,c+6)+"{j_csku}",m.impr+=b.impr.substring(b.impr.indexOf("$",c+6))),y(a),z(),D(b.impr),setTimeout(function(){$("#guessyou").lazyload({type:"fn",source:$("#guessyou li.fore1 .p-price"),onchange:function(){C()}})},0),$("#guessyou").lazyload({space:0})):d.hide(),E(b),window.tempGuessLikeCallback=void 0},$.ajax({url:s,dataType:"jsonp",jsonpCallback:"tempGuessLikeCallback",error:function(){d.hide(),E(null,"timeout"),window.tempGuessLikeCallback=function(){},setTimeout(function(){window.tempGuessLikeCallback=void 0},1e4)},timeout:1500}))}function z(){var a=[];$.each(m.dataList,function(b,c){a.push(c.sku)}),c.getPrices(a,function(a){a&&($.each(m.dataList,function(b,c){$.each(a,function(a,b){return"J_"+c.sku==b.id?(c.jp=b.p,!1):void 0})}),$(".p-price[data-lazy-price]",f).each(function(){var a=$(this);var b=a.attr("data-lazy-price");$.each(m.dataList,function(c,d){return b==d.sku?(a.removeAttr("data-lazy-price"),d.jp&&d.jp>0?a.html("<i>\xa5</i>"+d.jp):a.css("font-size","14px").html("\u6682\u65e0\u62a5\u4ef7"),a.show(),!1):void 0})}))},pageConfig.isEnablePDBP)}var A=[];function B(a){y(function(b){var c=[];A=[],$.each(b,function(b,d){A.push(d.sku),c.push(v.process($.extend({index:b+1,clstag:"h|keycount|2015|12"+i[l]+(b+1),imgRoot:pageConfig.FN_GetImageDomain(d.sku)+"n1/s150x150_",type:a},d)))}),g.html(c.join(""))})}function C(){var a=m.impr;a&&(a=a.replace("action=0","action=2$index="+m.pageNo).replace("{j_csku}",A.join(",")),D(a),m.pageNo+=1)}function D(a){if(a){var b=new Image;b.src=a+"&m=UA-J2011-1&ref="+encodeURIComponent(document.referrer)+"&random="+Math.random(),b=null}}function E(a,b){var c=u;a?a.success?a.data&&a.data.length||D(c+"2"):D(c+"1"):D("timeout"==b?c+"3":c+"4")}function F(a){var b=[];var c="a,b,c,d,e,f".split(",");var d;return $.each(a,function(a,e){return 6==a?!1:(d=e,$.isPlainObject(e)||(d={t:e}),d.clk=(d.clk||"").replace(/&(v=)|\?(v=)/,function(a){return a+"rtv="+encodeURIComponent(d.t)+"$"}),void b.push('<a href="//xihuan.jd.com/tag?tag='+encodeURIComponent(d.t)+'" target="_blank" clk="'+d.clk+'" clstag="h|keycount|2015|12b1'+c[a]+'">'+d.t+"</a>"))}),b.join("")}h.bind("click",function(a){B(1),C(),a.preventDefault()}),f.delegate("a[data-clk]","click",function(){D($(this).data("clk"))}),B(0),$("body").trigger("lazy-guess-like-load-after")}):seajs.use(["jdf/1.0.0/unit/trimPath/1.0.0/trimPath","jdf/1.0.0/ui/lazyload/1.0.0/lazyload","jdf/1.0.0/unit/price/1.0.0/price"],function(a,b,c){var d=$("#lazy-guess-like");d.html('<div id="guessyou" class="m"></div>');var e=(document.characterSet||document.charset||"gbk").toLowerCase();"gb2312"==e&&(e="gbk");var f=$("#guessyou");var g=null;var h=null;var i=["b","c","d","e"];var j=6;var k=0;var l={dataList:[],impr:null,pageNo:0,pageCount:0,len:0};var m="//diviner.jd.com/diviner?p=610009&uuid=12396477&sku=&skus=&&c1=&c2=&c3=&lid=1&lim=24&sp=&hi=&fe=&fne=&ro=&ec="+e+"&ck=_pst,aview";var n="//mercury.jd.com/log.gif?t=rec.610009&v=src=rec$errorcode=";var o='		<li class="fore${index}" clstag="${clstag}">			<div class="p-img"><a data-clk="${clk}" href="//item.jd.com/${sku}.html" target="_blank">{if type == 0}<img data-lazy-img="${imgRoot}${img}'+(pageConfig.superImgSuffix||"")+'" width=130 height=130 title="${t}">{else}<img src="${imgRoot}${img}'+(pageConfig.superImgSuffix||"")+'" width=130 height=130 title="${t}">{/if}</a></div>				<div class="p-info">				<div class="p-name"><a data-clk="${clk}" href="//item.jd.com/${sku}.html" target="_blank" title="${t}">${t}</a></div>				{if jp == null}<div class="p-price" data-lazy-price="${sku}">&nbsp;</div>{else}{if jp && jp > 0}<div class="p-price"><i>\xa5</i>${jp}</div>{else}<div class="p-price" style="font-size: 14px;">\u6682\u65e0\u62a5\u4ef7</div>{/if}{/if}			</div>		</li>';f.html('<div class="mt"><h2>\u731c\u4f60\u559c\u6b22</h2><a href="javascript:;" class="extra" clstag="h|keycount|2015|12a">\u6362\u4e00\u6279</a></div><div class="mc"><div class="spacer"><i></i></div><ul></ul></div>'),g=$(".mc ul",f),h=$(".extra",f);function p(a){var b=function(){if(l.len>=6){var b=k*j;var c=(k+1)*j;return c>=l.len&&(c=l.len),a(l.dataList.slice(b,c)),k++,k>=l.pageCount&&(k=0),!0}return!1};b()||(window.tempGuessLikeCallback=function(b){var c=-1;b&&b.success&&b.data&&b.data.length>0?($.each(b.data,function(a,b){b.jp=null}),l.dataList=b.data,l.len=l.dataList.length,l.pageCount=Math.ceil(l.dataList.length/j),l.impr=b.impr,c=b.impr.indexOf("$csku="),c>-1&&(l.impr=b.impr.substring(0,c+6)+"{j_csku}",l.impr+=b.impr.substring(b.impr.indexOf("$",c+6))),p(a),q(),u(b.impr),setTimeout(function(){$("#guessyou").lazyload({type:"fn",source:$("#guessyou li.fore1 .p-price"),onchange:function(){t()}})},0),$("#guessyou").lazyload({space:0})):d.hide(),v(b),window.tempGuessLikeCallback=void 0},$.ajax({url:m,dataType:"jsonp",jsonpCallback:"tempGuessLikeCallback",error:function(){d.hide(),v(null,"timeout"),window.tempGuessLikeCallback=function(){},setTimeout(function(){window.tempGuessLikeCallback=void 0},1e4)},timeout:1500}))}function q(){var a=[];$.each(l.dataList,function(b,c){a.push(c.sku)}),c.getPrices(a,function(a){a&&($.each(l.dataList,function(b,c){$.each(a,function(a,b){return"J_"+c.sku==b.id?(c.jp=b.p,!1):void 0})}),$(".p-price[data-lazy-price]",f).each(function(){var a=$(this);var b=a.attr("data-lazy-price");$.each(l.dataList,function(c,d){return b==d.sku?(a.removeAttr("data-lazy-price"),d.jp&&d.jp>0?a.html("<i>\xa5</i>"+d.jp):a.css("font-size","14px").html("\u6682\u65e0\u62a5\u4ef7"),a.show(),!1):void 0})}))},pageConfig.isEnablePDBP)}var r=[];function s(a){p(function(b){var c=[];r=[],$.each(b,function(b,d){r.push(d.sku),c.push(o.process($.extend({index:b+1,clstag:"h|keycount|2015|12"+i[k]+(b+1),imgRoot:pageConfig.FN_GetImageDomain(d.sku)+"n1/s130x130_",type:a},d)))}),g.html(c.join(""))})}function t(){var a=l.impr;a&&(a=a.replace("action=0","action=2$index="+l.pageNo).replace("{j_csku}",r.join(",")),u(a),l.pageNo+=1)}function u(a){if(a){var b=new Image;b.src=a+"&m=UA-J2011-1&ref="+encodeURIComponent(document.referrer)+"&random="+Math.random(),b=null}}function v(a,b){var c=n;a?a.success?a.data&&a.data.length||u(c+"2"):u(c+"1"):u("timeout"==b?c+"3":c+"4")}h.bind("click",function(a){s(1),t(),a.preventDefault()}),f.delegate("a[data-clk]","click",function(){u($(this).data("clk"))}),s(0),$("body").trigger("lazy-guess-like-load-after")})}();
