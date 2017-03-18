/**
 * 好东西-关注，点赞模块
 */

(function(w){
	if ('undefined' == typeof w.JD) {
		w.JD = {};// initialize page main object
	}
})(window);
(function () {
	/**
	 * jd100
	 */
    var jd100 = JD.jd100 = function () {
    	this.domain = "//100.jd.com";
		this.praisePage = 1;
		this.attentionPage = 1;
    };
    jd100.prototype = {

		//显示登录框
		showLogin: function (fn,page,addClass) {
			seajs.use('jdf/1.0.0/unit/login/1.0.0/login.js', function (login) {
				login({
					modal: true,//false跳转,true显示登录注册弹层
					complete: function () {
						fn(page,addClass);
					}
				})
			})
		},

		/**
		 * 校验文章点赞状态(同步进行校验，阻塞下面事件绑定)
		 * @param page
		 * @param praiseClass
         */
		checkArticlePraiseState:function (page,praiseClass) {
			var ids = [];
			$('.article-praise-' + page).each(function () {
				ids.push($(this).attr("data-id"));
			});
			if(0 == ids.length){
				return;
			}
			$.ajaxSettings.async = false;
			$.ajax({
				type: 'get',
				url: '/article/arePraise',
				traditional: true,
				data: {
					ids: ids
				},
				dataType: 'json',
				success: function (r) {
					if (r && r.ok) {
						var data = r.objs;
						for (var i in data) {
							if (data[i].v) {
								$('.article-praise-state-' + data[i].k).each(function(){
									$(this).addClass(praiseClass);
								});
								// 两种方式点赞数显示
								$('.article-praise-count-' + data[i].k).each(function () {
									$(this).html('已点<i></i>赞');
								});
								
							} else {
								$('.article-praise-state-' + data[i].k).each(function () {
									$(this).removeClass(praiseClass);
								});
								// 两种方式点赞数显示
								$('.article-praise-count-' + data[i].k).each(function () {
									$(this).html('点个<i></i>呗');
								});
							}
						}
					} else{
						// 用户可能未登陆
					}
				}
			});
		},

		/**
		 * 添加点赞绑定操作
		 * @param page
		 * @param praiseClass
         */
		doPraiseArticle : function(page,praiseClass){
			var me = this;
			$('.article-praise-' + page).bind('click', function () {
				var articleId = $(this).attr('data-id');
				if ($(this).hasClass(praiseClass)) {
					$.ajax({
						type: 'get',
						url:'/article/doUnPraise?articleId='+articleId,
						dataType: 'json',
						success: function(r) {
							if (r && r.ok) {
								// 更新点赞数字
								$('.article-praise-c-' + articleId).each(function(){
									var pcount = $(this).text();
									var count = parseInt(pcount)-1;
									if(count >= 0){
										$(this).text(count);
									}
								});
								// 两种方式点赞数显示
								$('.article-praise-count-' + articleId).each(function () {
									$(this).html('点个<i></i>呗');
								});
								$('.article-praise-state-' + articleId).each(function(){
									$(this).removeClass(praiseClass);
								});
								
								// me.checkArticlePraiseState(page,praiseClass);
							} else if (r && !r.ok && !r.login) {
								//未登录
								var tmpPage = page;
								var tmpPraiseClass = praiseClass;
								me.showLogin(me.checkArticlePraiseState,tmpPage,tmpPraiseClass);
							}
						}
					});
				} else {
					$.ajax({
						type: 'get',
						url:'/article/doPraise?articleId='+articleId,
						dataType: 'json',
						success: function(r) {
							if (r && r.ok) {
								// 更新点赞数字
								$('.article-praise-c-' + articleId).each(function(){
									var pcount = $(this).text();
									var count = parseInt(pcount)+1;
									$(this).text(count);
								});
								// 两种方式点赞数显示
								$('.article-praise-count-' + articleId).each(function () {
									$(this).html('已点<i></i>赞');
								});
								$('.article-praise-state-' + articleId).each(function(){
									$(this).addClass(praiseClass);
								});
							} else if (r && !r.ok && !r.login) {
								//未登录
								var tmpPage = page;
								var tmpPraiseClass = praiseClass;
								me.showLogin(me.checkArticlePraiseState,tmpPage,tmpPraiseClass);
							}
						}
					});
				}
				
			});
		},

		/**
		 * 获取文章浏览量
		 * @param page
		 * @param praiseClass
		 */
		articleBrowseCount:function (page) {
			var ids = [];
			$('.article-browse-' + page).each(function () {
				ids.push($(this).attr("data-id"));
			});
			if(0 == ids.length){
				return;
			}
			$.ajax({
				type: 'get',
				url: '/article/mbrowseCount',
				traditional: true,
				data: {
					ids: ids
				},
				dataType: 'json',
				success: function (r) {
					if (r && r.ok) {
						var data = r.objs;
						for (var i in data) {
							$('.article-browse-count-' + data[i].k).each(function(){
								$(this).text(data[i].v);
							});
						}
					}
				}
			});
		},

		/**
		 * 获取文章点赞数
		 * @param page
		 * @param praiseClass
		 */
		articlePraiseCount:function (page) {
			var ids = [];
			$('.article-praise-' + page).each(function () {
				ids.push($(this).attr("data-id"));
			});
			if(0 == ids.length){
				return;
			}
			$.ajax({
				type: 'get',
				url: '/article/mpraiseCount',
				traditional: true,
				data: {
					ids: ids
				},
				dataType: 'json',
				success: function (r) {
					if (r && r.ok) {
						var data = r.objs;
						for (var i in data) {
							$('.article-praise-c-' + data[i].k).each(function(){
								$(this).text(data[i].v);
							});
						}
					}
				}
			});
		},
		
		/**
		 * 关注状态
		 */
		/**
		 * 校验达人关注状态(同步进行校验，阻塞下面事件绑定)
		 * @param page
		 * @param praiseClass
		 */
		checkWriterAttentionState:function (page,praiseClass) {
			var ids = [];
			$('.writer-attention-' + page).each(function () {
				ids.push($(this).attr("data-id"));
			});
			if(ids.length == 0){
				return;
			}
			$.ajaxSettings.async = false;
			$.ajax({
				type: 'get',
				url: '/writer/areAttention',
				traditional: true,
				data: {
					ids: ids
				},
				dataType: 'json',
				success: function (r) {
					if (r && r.ok) {
						var data = r.objs;
						for (var i in data) {
							if (data[i].v) {
								//已经关注过
								$('.writer-attention-state-' + data[i].k).each(function () {
									$(this).addClass(praiseClass);
								});
							
								$('.writer-attention-txt-' + data[i].k).each(function () {
									$(this).text("已关注");
								});
							} else {
								//已经关注过
								$('.writer-attention-state-' + data[i].k).each(function () {
									$(this).removeClass(praiseClass);
								});

								$('.writer-attention-txt-' + data[i].k).each(function () {
									$(this).text("+ 关注");
								});
							}
						}
					} else{
						// 用户可能未登陆
					}
				}
			});
		},

		/**
		 * 达人关注绑定
		 * @param page
		 * @param praiseClass
         */
		doAttentionWriter : function(page,praiseClass){
			var me = this;
			$('.writer-attention-' + page).bind('click', function () {
				var writerId = $(this).attr('data-id');
				if ($(this).hasClass(praiseClass)) {
					$.ajax({
						type: 'get',
						url:'/writer/doUnAttention?writerId='+writerId,
						dataType: 'json',
						success: function(r) {
							if (r && r.ok) {
								$('.writer-attention-state-' + writerId).each(function () {
									$(this).removeClass(praiseClass);
								});

								$('.writer-attention-txt-' + writerId).each(function () {
									$(this).text("+ 关注");
								});
								
							} else if (r && !r.ok && !r.login) {
								//未登录
								var tmpPage = page;
								var tmpPraiseClass = praiseClass;
								me.showLogin(me.checkWriterAttentionState,tmpPage,tmpPraiseClass);
							}
						}
					});
				} else {
					$.ajax({
						type: 'get',
						url:'/writer/doAttention?writerId='+writerId,
						dataType: 'json',
						success: function(r) {
							if (r && r.ok) {

								$('.writer-attention-state-' + writerId).each(function () {
									$(this).addClass(praiseClass);
								});

								$('.writer-attention-txt-' + writerId).each(function () {
									$(this).text("已关注");
								});
							} else if (r && !r.ok && !r.login) {
								//未登录
								var tmpPage = page;
								var tmpPraiseClass = praiseClass;
								me.showLogin(me.checkWriterAttentionState,tmpPage,tmpPraiseClass);
							}
						}
					});
				}

			});
		},

		/**
		 * 根据达人id获取其关注的达人数
		 * @param page
		 * @param praiseClass
		 */
		attentionWriterCount:function (page) {
			var ids = [];
			$('.writer-attention-' + page).each(function () {
				ids.push($(this).attr("data-id"));
			});
			if(0 == ids.length){
				return;
			}
			$.ajax({
				type: 'get',
				url: '/writer/mAttentionCount',
				traditional: true,
				data: {
					ids: ids
				},
				dataType: 'json',
				success: function (r) {
					if (r && r.ok) {
						var data = r.objs;
						for (var i in data) {
							$('.writer-attention-state-' + data[i].k).each(function () {
								$(this).text(data[i].v);
							});
						}
					}
				}
			});
		},

		/**
		 * 根据达人id获取其发布的文章数
		 * @param page
		 * @param praiseClass
		 */
		writerPublishCount:function (page) {
			var ids = [];
			$('.writer-publish-' + page).each(function () {
				ids.push($(this).attr("data-id"));
			});
			if(0 == ids.length){
				return;
			}
			$.ajax({
				type: 'get',
				url: '/writer/mPublishCount',
				traditional: true,
				data: {
					ids: ids
				},
				dataType: 'json',
				success: function (r) {
					if (r && r.ok) {
						var data = r.objs;
						for (var i in data) {
							$('.writer-publish-count-' + data[i].k).each(function () {
								$(this).text(data[i].v);
							});
						}
					}
				}
			});
		},

		/**
		 * 根据达人id获取其粉丝数
		 * @param page
		 * @param praiseClass
		 */
		writerFollowerCount:function (page) {
			var ids = [];
			$('.writer-follower-' + page).each(function () {
				ids.push($(this).attr("data-id"));
			});
			if(0 == ids.length){
				return;
			}
			$.ajax({
				type: 'get',
				url: '/writer/mFansCount',
				traditional: true,
				data: {
					ids: ids
				},
				dataType: 'json',
				success: function (r) {
					if (r && r.ok) {
						var data = r.objs;
						for (var i in data) {
							$('.writer-follower-count-' + data[i].k).each(function () {
								$(this).text(data[i].v);
							});
						}
					}
				}
			});
		}
    };
})();
var jd100 =new JD.jd100();