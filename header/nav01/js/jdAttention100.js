/**
 * guoqingcun
 * 好东西-关注
 */

(function(w){
	if ('undefined' == typeof w.JD) {
		w.JD = {};// initialize page main object
	}
})(window);
(function () {
	/**
	 * JDAttention100
	 */
    var JDAttention100 = JD.JDAttention100 = function () {
    	this.domain = "//100.jd.com";
		this.page = 1;
    };
    JDAttention100.prototype = {
    	/**
    	 * 默认回调
    	 */
        callback:function($ele){
        	var id = $ele.attr("value");
    		
    		var flag = false;
    		if($ele.hasClass("attentioned")){
    			//取消关注操作
    			$ele.removeClass("followed");
    			$ele.removeClass("attentioned");
    			$ele.text("+ 关注");
    		}else{
    			//关注操作
    			$ele.addClass("followed");
    			$ele.addClass("attentioned");
    			$ele.text("已关注");
    		}
    	},
		init:function(){
			var me = this;
			//绑定事件
			/*$(".follow").live("click",function(){
				me.doAttention(this);	
			});*/
			//绑定事件
			$(".attentione").live("click",function(){
				me.doAttention(this);	
			});
		},
	    doAttention : function(obj){
	    	var ts = this;
	    	var me = obj;
	    	if(!jdUser.isLogin){
	    		jdUser.login(jdAttention100.doAttention,me);
	    	}else{
	    		var $ele = $(me);
	    		var id = $ele.attr("value");
	    		
	    		var flag = false;
	    		if($ele.hasClass("attentioned")){
	    			//取消关注操作
//	    			$ele.removeClass("attentioned");
	    			flag = false;
	    		}else{
	    			//关注操作
//	    			$ele.addClass("attentioned");
	    			flag = true;
	    		}
	    		if(flag){
	    			//添加关注
	    			$.ajax({
		                type: 'post',
		                url:'/my/doAttentioned?talentId='+id+'&jsonpCallback=?',
		                dataType: 'jsonp',
		                success: function(r) {
		                    if(r.ok){
//		                    	$ele.text("已关注");
		                    	jdAttention100.callback($ele);
		                        
		                    }
		                }
		            });
	    		}else{
	    			//取消关注
	    			$.ajax({
		                type: 'post',
		                url:'/my/doUnAttentioned?talentId='+id+'&jsonpCallback=?',
		                dataType: 'jsonp',
		                success: function(r) {
		                	if(r.ok){
		                		jdAttention100.callback($ele);
		                        
		                    }else{
		                    	console.log(r);
		                    }
		                }
		            });
	    		}
	    		
	    	}
	    },
	    setAttenttion:function(){
	    	var me = this;
	    	//初始化数据
			if(jdUser.isLogin){
				//封装id
				var idArray = $(".attentione");
				$.each(idArray,function(i,e){
					var $ele = $(e);
					if($ele.attr("class")){
						
						jdUser.attention_map.put(parseInt($ele.attr("value")),'');
					}
					
				});
				//设置已经关注
				$.ajax({
	                type: 'post',
	                url:'/my/getAllAttentionedList?jsonpCallback=?',
	                dataType: 'jsonp',
	                success: function(r) {
	                    if(r.ok){
	                        var list = r.obj;
	                        if(list){
	                        	
	                        	$.each(list,function(i,e){
	                        		if(jdUser.attention_map.containsKey(e)){
	                        			var $ele = $("#"+e+"_attention");
	                        			$ele.addClass("followed");
	                        			$ele.addClass("attentioned");
	                        			$ele.text("已关注");
	                        		}
	                        	});
	                        }
	                    }
	                }
	            });
			}
			
            
	    }
    };
})();
var jdAttention100 =new JD.JDAttention100();
jdAttention100.init();
