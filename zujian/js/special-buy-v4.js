/* product-home/1.0.0 special-buy-v4.js Date:2016-05-13 09:05:08 */
define("product/home/1.0.0/widget/special-buy-v4/special-buy-v4.js",[],function(require,a,b){function c(a){"object"==typeof a&&d(a)}function d(a){var b=window.pageConfig.FN_GetRandomData;var c=b(a.vcid_10039);var d=b(a.vcid_13037);var e=b(a.vcid_13038);var f=b(a.vcid_10041);var g=b(a.vcid_10042);var h=b(a.vcid_10043);var i=b(a.vcid_13039);var j=b(a.vcid_13040);var k=b(a.brands);var l='<div class="home-special-buy-v4 w">		    <h2>\u4eac\u4e1c &middot; \u54c1\u8d28\u751f\u6d3b</h2>		    <div class="hs-content">		        <div class="has-col1">		            <a clstag="h|keycount|2015|13b" target="_blank" href="'+c.url+'" class="has-item">		                <p class="area-tit">'+c.title+'</p>		                <div class="sub-tit">		                    <p class="tit">'+c.name+'</p>		                    <p class="desc">'+c.desc[0]+'</p>		                    <p class="promotion">'+c.desc[1]+'</p>		                </div>		                <img src="'+c.upimgurl+'">		            </a>		            <a clstag="h|keycount|2015|13j" target="_blank" href="'+d.url+'" class="has-item-small">		                <div class="sub-tit">		                    <p class="tit">'+d.name+'</p>		                    <p class="desc">'+d.desc[0]+'</p>		                    <p class="promotion">'+d.desc[1]+'</p>		                </div>		                <img src="'+d.upimgurl+'">		            </a>		            <a clstag="h|keycount|2015|13d" target="_blank" href="'+e.url+'" class="has-item-small">		                <div class="sub-tit">		                    <p class="tit">'+e.name+'</p>		                    <p class="desc">'+e.desc[0]+'</p>		                    <p class="promotion">'+e.desc[1]+'</p>		                </div>		                <img src="'+e.upimgurl+'">		            </a>		        </div>		        <div class="has-col2">		            <a clstag="h|keycount|2015|13c" target="_blank" href="'+f.url+'" class="has-item">		                <p class="area-tit">'+f.title+'</p>		                <div class="sub-tit">		                    <p class="tit">'+f.name+'</p>		                    <p class="desc">'+f.desc[0]+'</p>		                    <p class="promotion">'+f.desc[1]+'</p>		                </div>		                <img src="'+f.upimgurl+'">		            </a>		            <a clstag="h|keycount|2015|13g" target="_blank" href="'+g.url+'" class="has-item-small">		                <div class="sub-tit">		                    <p class="tit">'+g.name+'</p>		                    <p class="desc">'+g.desc[0]+'</p>		                    <p class="promotion">'+g.desc[1]+'</p>		                </div>		                <img src="'+g.upimgurl+'">		            </a>		        </div>		        <div class="has-col3">		            <a clstag="h|keycount|2015|13a" target="_blank" href="'+h.url+'" class="has-item">		                <p class="area-tit">'+h.title+'</p>		                <div class="sub-tit">		                    <p class="tit">'+h.name+'</p>		                    <p class="desc">'+h.desc[0]+'</p>		                    <p class="promotion">'+h.desc[1]+'</p>		                </div>		                <img src="'+h.upimgurl+'">		            </a>		            <a clstag="h|keycount|2015|13f" target="_blank" href="'+i.url+'" class="has-item-small">		                <div class="sub-tit">		                    <p class="tit">'+i.name+'</p>		                    <p class="desc">'+i.desc[0]+'</p>		                    <p class="promotion">'+i.desc[1]+'</p>		                </div>		                <img src="'+i.upimgurl+'">		            </a>		            <a clstag="h|keycount|2015|13i" target="_blank" href="'+j.url+'" class="has-item-small">		                <div class="sub-tit">		                    <p class="tit">'+j.name+'</p>		                    <p class="desc">'+j.desc[0]+'</p>		                    <p class="promotion">'+j.desc[1]+'</p>		                </div>		                <img src="'+j.upimgurl+'">		            </a>		        </div>		        <div class="hs-brands">		            <div class="brands-left">		                <ul>{brandsLeft}</ul>		            </div>		            <div class="brands-right">		                <ul>{brandsRight}</ul>		            </div>		        </div>		    </div>		</div>';var m="";var n="";var o=["13f1","13f3","13f5","13f7","13f9","13f11","13f13","13f2","13f4","13f6","13f8","13f10","13f12","13f14"];for(var p=0;14>p;p++)7>p?m+='<li><a clstag="h|keycount|2015|'+o[p]+'" target="_blank" href="'+k[p].url+'" class="item"><img src="'+k[p].upimgurl+'"></a></li>':n+='<li><a clstag="h|keycount|2015|'+o[p]+'" target="_blank" href="'+k[p].url+'" class="item"><img src="'+k[p].upimgurl+'"></a></li>';l=l.replace("{brandsLeft}",m),l=l.replace("{brandsRight}",n),$("#lazy-special-buy-v4").html(l),$("body").trigger("lazy-special-buy-v4-load-after")}b.exports={init:c}});
