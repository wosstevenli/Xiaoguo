
/**
 * JSͼƬ�ӳټ���
 * @constructor {DataLazyLoad}
 * @param {options} ���󴫲�
 * @time 2014-1-10
 */
/*
 * �ӳټ��ص�ԭ������ʱ�������ص���Դ��������������˵ľ��� - threshold <= ���������������������˵ľ��� true �ͼ���
 * ����Ļ� ������
 */
 function DataLazyLoad(options){
	
	this.config = {

		container      :   window,   //���� Ĭ��Ϊwindow
		threshold      :   0,        // �����������ȾͼƬ
		event          :  'scroll',  // Ĭ��Ϊscroll(����)
		effect         :  'fadeIn',  // Ĭ��Ϊshow Ҳ����ΪfadeIn, slideDown �� jQuery �Դ���Ч��
		effectspeed    :  1000,      // ʱ��  
		suffix         :  'img',     // img���� Ĭ����data-img Ҳ�����Զ����׺
		skip_invisible : true       // ���img��ǩΪ���ص� ��ô��ǿ�Ƽ���
	};

	this.cache = {};

	this.init(options);
 }
 
 DataLazyLoad.prototype = {
	
	init: function(options){
		
		this.config = $.extend(this.config, options || {});
		var self = this,
			_config = self.config,
			_cache = self.cache;
		
		// ����ʱ(���������¼�) �����¼�
		$(_config.container).unbind(_config.event);
		$(_config.container).bind(_config.event,function(){
			self._update();
		});
	},
	/*
	 * ���ض�Ӧ��ͼƬ
	 */
	_eachImg: function(item) {
		var self = this,
			_config = self.config,
			_cache = self.cache;
		
		if($(item).attr('isload') == 'false') {
			var dataImg = $(item).attr('data-'+_config.suffix),
				src = $(item).attr('src');
			 $(item).hide();
			 $(item).attr('src',dataImg);
			 $(item).attr('data-'+_config.suffix,'');
			 $(item)[_config.effect](_config.effectspeed);
			 $(item).attr('isload','true');
		} 
	},
	_update:function(){
		var self = this,
			_config = self.config,
			_cache = self.cache;
		 if(_config.container === window) {
			 
			 $('img').each(function(index,item){
				// ���ͼƬ���ص� ��ô��ǿ�Ƽ���
				if(_config.skip_invisible && !$('img').is(":visible")) {
					return;
				}
				if (self._abovethetop(item) ||
					self._leftofbegin(item)) {
						// ʲô��������
				} else if (self._belowthefold(item) &&
					self._belowthefold(item)) {
						self._eachImg(item);
				} 
			})
			
		 }else {
			$('img',$(_config.container)).each(function(index,item){
				// ���ͼƬ���ص� ��ô��ǿ�Ƽ���
				if(_config.skip_invisible && !$('img').is(":visible")) {
					return;
				}
				if (self._abovethetop(item) ||
					self._leftofbegin(item)) {
						
				} else if (self._belowthefold(item) &&
					self._rightoffold(item)) {
						self._eachImg(item);
				} 

			})
		 }
		 
	},
	/*
	 * ���¹���ʱ �жϴ����ص�Ԫ���Ƿ��ڿ���������
	 * @return {Boolean}
	 */
	_belowthefold: function(elem){
		var self = this,
			_config = self.config;
		var fold;
		if(_config.container === window) {
			fold = $(window).height() + $(window).scrollTop();
		}else {
			fold = $(_config.container).offset().top + $(_config.container).height();
		}

		return fold >= $(elem).offset().top - _config.threshold;
	},
	/* 
	 * ���ҹ���ʱ �жϴ����ص�Ԫ���Ƿ��ڿ���������
	 * @return {Boolean}
	 */
	_rightoffold: function(elem){
		var self = this,
			_config = self.config;
		var fold;
		if(_config.container === window) {
			fold = $(window).width() + $(window).scrollLeft();
		}else {
			fold = $(_config.container).offset().left + $(_config.container).width();
		}
		
		return fold >= $(elem).offset().left - _config.threshold;
	},
	/*
	 * ���Ϲ���
	 * @return {Boolean}
	 */
	_abovethetop: function(elem){
		var self = this,
			_config = self.config;
		var fold;
		if(_config.container === window) {
			fold = $(window).scrollTop();
		}else {
			fold = $(_config.container).offset().top;
		}
		return fold >= $(elem).offset().top + _config.threshold  + $(elem).height();
	},
	/*
	 * �������
	 * @return {Boolean}
	 */
	_leftofbegin: function(elem) {
		var self = this,
			_config = self.config;
		var fold;
        
        if (_config.container === window) {
            fold = $(window).scrollLeft();
        } else {
            fold = $(_config.container).offset().left;
        }
        return fold >= $(elem).offset().left + _config.threshold + $(elem).width();
	}
	
 };

 // ��ʼ���ķ�ʽ
 $(function(){
	
	var datalazy = new DataLazyLoad({
		container: '#demo'
	});
 });