/**
 * guoqingcun
 * 好东西-用户
 */
(function(w){
	if ('undefined' == typeof w.JD) {
		w.JD = {};// initialize page main object
	}
})(window);
(function () {
	/**
	 * JDUser100
	 */
    var JDUser100 = JD.JDUser100 = function () {
    	this.isLogin = false;
    	// 关注容器
    	this.attention_map = new Map();// as local cache, loaded when login
		// 点赞容器
		this.praise_map = new Map();// as local cache, loaded when login
    };
    JDUser100.prototype = {
	    checkLogin : function(fn){
	    	if(fn === undefined) {
	    		fn = function(){};
	        }
	    	var me = this;
	    	$.ajaxSettings.async = false;
	        $.getJSON('//passport.jd.com/loginservice.aspx?method=Login&callback=?', function(r) {
	            if (r.Identity.IsAuthenticated) {
	            	me.isLogin = true;
	            	fn();
	            }else{
	            	me.isLogin = false;
	            }
	        });
	    },
	    login : function(logedCallback,ele){
	    	var me = this;
	    	if(logedCallback === undefined) {
	    		logedCallback = function(){};
	        };
	        seajs.use('jdf/1.0.0/unit/login/1.0.0/login', function(login){
		        login({
		            modal: true,//false跳转,true显示登录注册弹层
		            complete: function() {
		            	if (arguments.lenth < 1) {
							return;
						} else {
							var hasLoged = false;
							try {
								hasLoged = arguments[0].Identity.IsAuthenticated;
							} catch (e) {
							}
							if (hasLoged) {// loged
								me.isLogin = true;
								logedCallback(ele);
							} else {
								me.isLogin = false;
							}
						}
		            }
		        });
		    });
	    }
    };
    
   
})();

var jdUser =new JD.JDUser100();
// if loged, set follow icon
//jdUser.checkLogin();