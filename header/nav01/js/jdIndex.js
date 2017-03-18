/**
 * guoqingcun
 * 好东西-首页
 */

(function(w){
	if ('undefined' == typeof w.JD) {
		w.JD = {};// initialize page main object
	}
})(window);
(function () {
	/**
	 * JDIndex
	 */

var slider_tpl = '\
	<div class="w">\
		<div class="tag">\
			<a href="${hotZuo.url}" target="_blank" title="${hotZuo.title}"><img src="${hotZuo.upimgurl}" width="316" height="366" alt="${hotZuo.title}"></a>\
			<dl>\
					<dt><a href="${hotZuo.url}" target="_blank" title="${hotZuo.title}">${hotZuo.title}</a></dt>\
				<dd>\
						{for item in hotTagList}\
					<a href="${item.url}" target="_blank" title="${item.title}">${item.title}</a>\
						{/for}\
				</dd>\
			</dl>\
		</div>\
		<div class="floor-slider">\
			<div class="hw-item-a ui-switchable-panel-main">\
				{for item in hotZhongList}\
				<div class="ui-switchable-panel">\
					<a href="${item.url}" target="_blank" title="${item.title}">\
						<img src="${item.upimgurl}" width="500" height="500" alt="${item.title}"/>\
						<div class="text">\
							<h3>${item.title}</h3>\
							<p>${item.remark}</p>\
						</div>\
						<i></i>\
						<div class="mask"></div>\
					</a>\
				</div>\
				{/for}\
			</div>\
			<div class="slider-trigger">\
				<a class="prev ui-switchable-prev" href="javascript:void(0)">&lt;</a>\
				<a class="next ui-switchable-prev" href="javascript:void(0)">&gt;</a>\
			</div>\
		</div>\
		<div class="list">\
			{for item in hotYouList}\
				{if item_index == 0}\
			<div class="hw-item-a">\
				<a href="${item.url}" target="_blank" title="${item.title}">\
					<img src="${item.upimgurl}" width="394" height="250" alt="${item.title}"/>\
					<div class="text">\
						<h3>${item.title}</h3>\
						<p>${item.remark}</p>\
					</div>\
					<i></i>\
					<div class="mask"></div>\
				</a>\
			</div>\
				{else}\
			<div class="hw-item">\
				<a href="${item.url}" target="_blank" title="${item.title}">\
					<img src="${item.upimgurl}" width="197" height="250" alt="${item.title}"/>\
					<div class="text">\
						<h3>${item.title}</h3>\
						<p>${item.remark}</p>\
					</div>\
					<i></i>\
					<div class="mask"></div>\
				</a>\
			</div>\
			{/if}\
		{/for}\
		</div>\
	</div>';

	var noslider_tpl = '\
	<div class="hw-floor m hw-news">\
		<div class="mc">\
			<div class="w">\
				<div class="tag">\
					<a href="${hotList[0].url}" target="_blank" title="${hotList[0].title}"><img src="${hotList[0].upimgurl}" width="316" height="366" alt="${hotList[0].title}"></a> \
					<dl>\
						<dt><a href="${hotList[0].url}" target="_blank" title="${hotList[0].title}">${hotList[0].title}</a></dt>\
						<dd>\
							{for item in hotTagList}\
							<a href="${item.url}" target="_blank" title="${item.title}">${item.title}</a>\
							{/for}\
						</dd>\
					</dl>\
				</div>\
				<div class="list list-a">\
					<div class="hw-item">\
						<a href="${hotList[1].url}" target="_blank" title="${hotList[1].title}">\
							<img src="${hotList[1].upimgurl}" width="568" height="248" alt="${hotList[1].title}">\
							<div class="text">\
								<h3>${hotList[1].title}</h3>\
								<p>${hotList[1].remark}</p>\
							</div>\
							<i></i>\
							<div class="mask"></div>\
						</a>\
					</div>\
					<div class="hw-item">\
						<a href="${hotList[2].url}" target="_blank" title="${hotList[2].title}">\
							<img src="${hotList[2].upimgurl}" width="318" height="248" alt="${hotList[2].title}">\
							<div class="text">\
								<h3>${hotList[2].title}</h3>\
								<p>${hotList[2].remark}</p>\
							</div>\
							<i></i>\
							<div class="mask"></div>\
						</a>\
					</div>\
					<div class="hw-item">\
						<a href="${hotList[3].url}" target="_blank" title="${hotList[3].title}">\
							<img src="${hotList[3].upimgurl}" width="282" height="248" alt="${hotList[3].title}">\
							<div class="text">\
								<h3>${hotList[3].title}</h3>\
								<p>${hotList[3].remark}</p>\
							</div>\
							<i></i>\
							<div class="mask"></div>\
						</a>\
					</div>\
					<div class="hw-item">\
						<a href="${hotList[4].url}" target="_blank" title="${hotList[4].title}">\
							<img src="${hotList[4].upimgurl}" width="282" height="248" alt="${hotList[4].title}">\
							<div class="text">\
								<h3>${hotList[4].title}</h3>\
								<p>${hotList[4].remark}</p>\
							</div>\
							<i></i>\
							<div class="mask"></div>\
						</a>\
					</div>\
					<div class="hw-item">\
						<a href="${hotList[5].url}" target="_blank" title="${hotList[5].title}">\
							<img src="${hotList[5].upimgurl}" width="318" height="248" alt="${hotList[5].title}">\
							<div class="text">\
								<h3>${hotList[5].title}</h3>\
								<p>${hotList[5].remark}</p>\
							</div>\
							<i></i>\
							<div class="mask"></div>\
						</a>\
					</div>\
				</div>\
			</div>\
		</div>\
	</div>';

	var JDIndex = JD.JDIndex = function () {
    	
    };
    JDIndex.prototype = {
        domain:"hao.jd.com",
		init:function(){
			var me = this;
		},
		/**
		 * 加载热门资讯
		 */
		loadHotInfo:function(floor){
			var me = this;
			$.ajax({
                type: 'get',
                url:'/getIndexHotInfoList.action?floor='+floor,
                dataType: 'jsonp',
                jsonp: "jsonpCallback",//服务端用于接收callback调用的function名的参数
                jsonpCallback:"loadHotInfoCallback" + floor,
                cache:true,
                success: function(r) {
                	me.fullHotInfoContent(r);
					$('#hotfloor' + floor).addClass('lazy-fn-done');
					$('#hotfloor' + floor).attr('data-lazyload-fn','done');
                }
            });
		},
		/**
		 * 页面构建热门资讯内容
		 */
		fullHotInfoContent:function(r){
			var me = this;
			if(r.ok){
				switch(r.obj.floor)
				{
					case 1:
					  var obj = r.obj;
						try {
							var floor1Html= slider_tpl.process(obj);
							$("#hotfloor1 .mc").html(floor1Html);
							initFloorSider($('#hotfloor1'));
							// 加入埋点
							$("#hotfloor1 .mc .w .tag>a").attr("clstag","secondtype|keycount|2016haosy_bjjx|tp01");
							$("#hotfloor1 .mc .w dd>a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_bjjx|bq0" + (idx + 1));
							});
							$("#hotfloor1 .mc .w .floor-slider .hw-item-a a").each(function(){
								$(this).attr("clstag","secondtype|keycount|2016haosy_bjjx|tp02");
							})
							$("#hotfloor1 .mc .w .list .hw-item-a a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_bjjx|tp0" + (idx + 3));
							});
							$("#hotfloor1 .mc .w .list .hw-item a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_bjjx|tp0" + (idx + 4));
							});
						}catch(e) {
							$("#hotfloor1").hide();
						}
					  break;
					case 2:
						var obj = r.obj;
						try {
							var floor2Html= noslider_tpl.process(obj);
							$("#hotfloor2 .mc").html(floor2Html);
							// 加入埋点
							$("#hotfloor2 .mc .w .tag>a").attr("clstag","secondtype|keycount|2016haosy_clkj|tp01");
							$("#hotfloor2 .mc .w dd>a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_clkj|bq0" + (idx + 1));
							});
							$("#hotfloor2 .mc .w .list a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_clkj|tp0" + (idx + 2));
							});
						}catch(e) {
							$("#hotfloor2").hide();
						}
					  break;
					case 3:
						var obj = r.obj;
						try {
							var floor3Html= slider_tpl.process(obj);
							$("#hotfloor3 .mc").html(floor3Html);
							initFloorSider($('#hotfloor3'));
							// 加入埋点
							$("#hotfloor3 .mc .w .tag>a").attr("clstag","secondtype|keycount|2016haosy_ajsh|tp01");
							$("#hotfloor3 .mc .w dd>a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_ajsh|bq0" + (idx + 1));
							});
							$("#hotfloor3 .mc .w .floor-slider .hw-item-a a").each(function(){
								$(this).attr("clstag","secondtype|keycount|2016haosy_ajsh|tp02");
							});
							$("#hotfloor3 .mc .w .list .hw-item-a a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_ajsh|tp0" + (idx + 3));
							});
							$("#hotfloor3 .mc .w .list .hw-item a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_ajsh|tp0" + (idx + 4));
							});
						}catch(e) {
							$("#hotfloor3").hide();
						}
						  break;
					case 4:
						var obj = r.obj;
						try {
							var floor4Html= noslider_tpl.process(obj);
							$("#hotfloor4 .mc").html(floor4Html);
							// 加入埋点
							$("#hotfloor4 .mc .w .tag>a").attr("clstag","secondtype|keycount|2016haosy_ms|tp01");
							$("#hotfloor4 .mc .w dd>a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_ms|bq0" + (idx + 1));
							});
							$("#hotfloor4 .mc .w .list a").each(function(idx,ele){
								$(this).attr("clstag","secondtype|keycount|2016haosy_ms|tp0" + (idx + 2));
							});
						}catch(e) {
							$("#hotfloor4").hide();
						}
						  break;
					default:
				}
			}
		},
		/**
		 * 加载推荐好物
		 */
		loadGoods:function(){
			var me = this;
			$.ajax({
                type: 'get',
                url:'/indexGoodsList.action',
                dataType: 'json',
		        cache:true,
                success: function(r) {
                	me.fullGoodsContent(r);
                }
            });
		},
		/**
		 * 页面构建好物内容
		 */
		fullGoodsContent:function(r){
			var me = this;
			if(r.ok){
				var obj = r.obj;
				var html = $('script[id="goods_template"]').html();
				var list = obj["goodsList"];
				if(list){
					$.each(list,function(i,ele){
						$("#goodsList").append(me.formatTemplate(ele, html));
					});
					// 加入埋点
					$("#goodsList .p-item").each(function(idx,ele){
						var clstag = "secondtype|keycount|2016haosy_fxhw|sku0"+(idx + 1);
						$(this).find(".sku-cls-tag").each(function(){
							$(this).attr("clstag",clstag);
						});
					});
					jd100.checkArticlePraiseState(1,"liked");
					jd100.doPraiseArticle(1,"liked");
					jd100.articlePraiseCount(1);
				}else{
					$("#hwRecommendDiv").remove();
				}
			}
		},
		/**
		 * 加载推荐达人
		 */
		loadTalent:function(){
			var me = this;
			$.ajax({
                type: 'get',
                url:'/indexTalentList.action',
                dataType: 'jsonp',
                jsonp: "jsonpCallback",//服务端用于接收callback调用的function名的参数
		        jsonpCallback:"loadTalentCallback",
		        cache:true,
                success: function(r) {
                	me.fullTalentContent(r);
                }
            });
		},
		/**
		 * 页面构建好物内容
		 */
		fullTalentContent:function(r){
			var me = this;
			if(r.ok){
				var obj = r.obj;
				var html = $('script[id="talent_template"]').html();
				if(obj){
					var len = obj.length;
					if(len > 4){
						var mainPanel = $(".hw-talent .mc .w .w-content .ui-switchable-panel-main");
						var factor = len / 4 - 1;
						var mod = len % 5;
						if(mod > 0){
							factor = factor + 1;
						}
						for(var f = 0;f<factor;f++){
							var switchPanel = [];
							switchPanel.push("<div class=\"ui-switchable-panel\">");
							switchPanel.push("<div class=\"accordion\">");
							switchPanel.push("<ul class=\"ui-accordion-main\">");
							for(var j = 0;j<5;j++){
								var idx = 5 * f + j;
								var ele = obj[idx];
								if(ele){
									var item = me.formatTemplate(ele, html);
									switchPanel.push(item);
								} else{
									break;
								}
							}
							switchPanel.push("</ul></div></div>");
							$(mainPanel).append(switchPanel.join(''));
						}
						// 增加埋点
						$("#talentDiv .ui-switchable-panel-main .talent-cls-tag").each(function(idx,ele){
							var myIdx = idx + 1;
							if(10 == idx){
								$(this).attr("clstag","secondtype|keycount|2016haosy_drtj|dr10");
								return false;
							} else {
								$(this).attr("clstag","secondtype|keycount|2016haosy_drtj|dr0" + myIdx);
							}
						});
						jd100.checkWriterAttentionState(1,"followed");
						jd100.doAttentionWriter(1,"followed");
					}else{
						$("#talentDiv").hide();
					}
				}else{
					$("#talentDiv").hide();
				}
			}else{
				$("#talentDiv").hide();
			}
			initAccordion($('#talentDiv'));
			initHwTalentcontent($('#talentDiv'));
		},
		/**
		 * 加载首页好口碑
		 */
		loadHearsay:function(){
			var me = this;
			$.ajax({
                type: 'get',
                url:'/hkb/indexContent.action',
                dataType: 'jsonp',
                jsonp: "jsonpCallback",//服务端用于接收callback调用的function名的参数
		        jsonpCallback:"jsonpCallback",
                success: function(r) {
                	me.fullGoodsContent(r);
                }
            });
		},
		/**
		 * 页面构建好口碑内容
		 * @param obj
		 */
		fullHearsayContent:function(obj){
			var me = this;
			if(obj){
				//$(".ui-switchable-panel:gt(0)").remove();
				var html = $('script[type="text/template"]').html();
			    var index = 0;
			    var categories = "";
			    $.each(obj,function(key, array){
			    	if("categories" == key){
			    		categories = array;
			    	}
			    });
			    
				$.each(obj,function(key, array){
					index++;
					var arr = [];
					if(index > 1){
						if("categories" != key){
							var headHtml = "<div class='more' clstag='secondtype|keycount|hao|hao_kb_more'><a href='/hkb/c1"+categories[index-2].categoryId+"_p1_scTIME_stDESC.html' target='_blank'>更多<i></i></a></div>";
							headHtml += "<ul class='praise-list'>";
							$.each(array,function(i,ele){
								arr.push(me.formatTemplate(ele, html));
							});
							
							var footerHtml = "</ul>";
							$('#hsContentDiv .ui-switchable-panel:eq(' + (index - 1) + ')').html(headHtml+arr.join('')+footerHtml); 
						}
					}
				});
			}
			
			jdPrice.init();//价格
			jdLike.setLike();//设置关注
		},
		formatTemplate:function(dta, tmpl){
			var format = {  
		        name: function(x) {  
		            return x  
		        }  
		    };  
		    return tmpl.replace(/{(\w|.+?)}/g, function(m1, m2) {  
		        if (!m2)  
		            return "";  
		        if (format && format[m2]) { 
		        	return format[m2](dta[m2]) 
	        	} else {
	        		
	        		if(m2.indexOf(".") == -1) {
	        			return dta[m2];
        			} else {
        				var arr = m2.split(".");
        				var tmp = dta;
        				for(var i = 0; i < arr.length; i++) {
        					if(tmp) {
        						tmp = tmp[arr[i]];	
        					} else {
        						return false;
        					}
        				}
        				return tmp;
        			}
        		};  
		    });  
		}
    };
})();
var jdIndex =new JD.JDIndex();
jdIndex.init();