// 2014-09-09 by stevenli
var addressInit = function(_cmbProvince, _cmbCity, _cmbArea, defaultProvince, defaultCity, defaultArea)
{
	var cmbProvince = document.getElementById(_cmbProvince);
	var cmbCity = document.getElementById(_cmbCity);
	var cmbArea = document.getElementById(_cmbArea);
	
	function cmbSelect(cmb, str)
	{
		for(var i=0; i<cmb.options.length; i++)
		{
			if(cmb.options[i].value == str)
			{
				cmb.selectedIndex = i;
				return;
			}
		}
	}
	function cmbAddOption(cmb, str, obj)
	{
		var option = document.createElement("OPTION");
		cmb.options.add(option);
		option.innerHTML = str;
		option.value = str;
		option.obj = obj;
	}
	
	function changeCity()
	{
		cmbArea.options.length = 0;
		if(cmbCity.selectedIndex == -1)return;
		var item = cmbCity.options[cmbCity.selectedIndex].obj;
		for(var i=0; i<item.areaList.length; i++)
		{
			cmbAddOption(cmbArea, item.areaList[i], null);
		}
		cmbSelect(cmbArea, defaultArea);
	}
	function changeProvince()
	{
		cmbCity.options.length = 0;
		cmbCity.onchange = null;
		if(cmbProvince.selectedIndex == -1)return;
		var item = cmbProvince.options[cmbProvince.selectedIndex].obj;
		for(var i=0; i<item.cityList.length; i++)
		{
			cmbAddOption(cmbCity, item.cityList[i].name, item.cityList[i]);
		}
		cmbSelect(cmbCity, defaultCity);
		changeCity();
		cmbCity.onchange = changeCity;
	}
	
	for(var i=0; i<provinceList.length; i++)
	{
		cmbAddOption(cmbProvince, provinceList[i].name, provinceList[i]);
	}
	cmbSelect(cmbProvince, defaultProvince);
	changeProvince();
	cmbProvince.onchange = changeProvince;
}

var provinceList = [
{name:'圆筒+LED灯', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'2节罗马仕', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']},
{name:'三星2200', areaList:['2']}
]},
{name:'6节钱包', cityList:[		   
{name:'1200', areaList:['6']},
{name:'2450', areaList:['6']},
{name:'1500', areaList:['6']},
{name:'1800', areaList:['6']},
{name:'2000', areaList:['6']},
{name:'2200', areaList:['6']},
{name:'2600', areaList:['6']}
]},
{name:'大钱包（印花）', cityList:[		   
{name:'1200', areaList:['6']},
{name:'2450', areaList:['6']},
{name:'1500', areaList:['6']},
{name:'1800', areaList:['6']},
{name:'2000', areaList:['6']},
{name:'2200', areaList:['6']},
{name:'2600', areaList:['6']}
]},
{name:'2节钱包', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'小米', cityList:[		   
{name:'1200', areaList:['4']},
{name:'2450', areaList:['4']},
{name:'1500', areaList:['4']},
{name:'1800', areaList:['4']},
{name:'2000', areaList:['4']},
{name:'2200', areaList:['4']},
{name:'2600', areaList:['4']}
]},
{name:'乐泡', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'小彩旗', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'信封', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'天书', cityList:[		   
{name:'天书6000', areaList:['1']},
{name:'天书8000', areaList:['1']}/*,
{name:'天书8200', areaList:['1']}*/
]},
{name:'乔威', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'方管带按键', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'香水', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'大馒头', cityList:[		   
{name:'1200', areaList:['6']},
{name:'2450', areaList:['6']},
{name:'1500', areaList:['6']},
{name:'1800', areaList:['6']},
{name:'2000', areaList:['6']},
{name:'2200', areaList:['6']},
{name:'2600', areaList:['6']}
]},
{name:'小金刚', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'彩虹', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'睫毛膏', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'青花瓷', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'小馒头', cityList:[		   
{name:'1200', areaList:['4']},
{name:'2450', areaList:['4']},
{name:'1500', areaList:['4']},
{name:'1800', areaList:['4']},
{name:'2000', areaList:['4']},
{name:'2200', areaList:['4']},
{name:'2600', areaList:['4']}
]},
{name:'圆筒无金边', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'足球', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'带白边超薄', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'塑料超薄', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'自带线超薄', cityList:[		   
/*{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}*/
]},
{name:'信用卡超薄', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'开关式', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'皮套魔镜', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'小鱼嘴', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'品能910', cityList:[		   
{name:'1200', areaList:['4']},
{name:'2450', areaList:['4']},
{name:'1500', areaList:['4']},
{name:'1800', areaList:['4']},
{name:'2000', areaList:['4']},
{name:'2200', areaList:['4']},
{name:'2600', areaList:['4']}
]},
{name:'魔方', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'大块头', cityList:[		   
{name:'大块头12000', areaList:['1']}
]},
{name:'二代鱼嘴', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'硬盘', cityList:[		   
{name:'1200', areaList:['4']},
{name:'2450', areaList:['4']},
{name:'1500', areaList:['4']},
{name:'1800', areaList:['4']},
{name:'2000', areaList:['4']},
{name:'2200', areaList:['4']},
{name:'2600', areaList:['4']}
]},
{name:'大金刚', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'小鱼嘴橡胶油', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'1H069', cityList:[		   
{name:'1200', areaList:['4']},
{name:'2450', areaList:['4']},
{name:'1500', areaList:['4']},
{name:'1800', areaList:['4']},
{name:'2000', areaList:['4']},
{name:'2200', areaList:['4']},
{name:'2600', areaList:['4']}
]},
{name:'1H075', cityList:[		   
{name:'1200', areaList:['4']},
{name:'2450', areaList:['4']},
{name:'1500', areaList:['4']},
{name:'1800', areaList:['4']},
{name:'2000', areaList:['4']},
{name:'2200', areaList:['4']},
{name:'2600', areaList:['4']}
]},
{name:'行李箱', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'大手指超薄', cityList:[		   
/*{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}*/
]},
{name:'心', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'自带线鼠标', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'三星', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'烟盒', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'保龄球', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'圆筒金边', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'1H001', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'大鱼嘴', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'皮质带显示', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'1H028', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'塑料超薄2', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'羽博魔方', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'品能913', cityList:[		   
{name:'1200', areaList:['4']},
{name:'2450', areaList:['4']},
{name:'1500', areaList:['4']},
{name:'1800', areaList:['4']},
{name:'2000', areaList:['4']},
{name:'2200', areaList:['4']},
{name:'2600', areaList:['4']}
]},
{name:'超薄', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'皮质', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'油面超薄', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'数显方块', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'梳子', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'跑马灯', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'方管无按键', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'口红', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'大鱼嘴橡胶油', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'五节魔方', cityList:[		   
{name:'1200', areaList:['5']},
{name:'2450', areaList:['5']},
{name:'1500', areaList:['5']},
{name:'1800', areaList:['5']},
{name:'2000', areaList:['5']},
{name:'2200', areaList:['5']},
{name:'2600', areaList:['5']}
]},
{name:'卡通超薄', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'1Q002', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'汽车', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'HelloKitty', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'猫头', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'小熊', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'宝马X6', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'小酒桶', cityList:[		   
{name:'1200', areaList:['1']},
{name:'2450', areaList:['1']},
{name:'1500', areaList:['1']},
{name:'1800', areaList:['1']},
{name:'2000', areaList:['1']},
{name:'2200', areaList:['1']},
{name:'2600', areaList:['1']}
]},
{name:'橡胶油', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'金刚8600', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'三洋', cityList:[		   
{name:'1200', areaList:['5']},
{name:'2450', areaList:['5']},
{name:'1500', areaList:['5']},
{name:'1800', areaList:['5']},
{name:'2000', areaList:['5']},
{name:'2200', areaList:['5']},
{name:'2600', areaList:['5']}
]},
{name:'车充', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'车充1', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'卡片8800', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'小鱼嘴橡胶油按', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'大鱼嘴橡胶油按', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'大蛮腰', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'小蛮腰', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'电小二橡胶油', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'卡通小鱼嘴', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'1H078', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'镜子', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'打火机', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'1Q006', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'电小二', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'开心果', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'金粉世家', cityList:[		   
{name:'1200', areaList:['2']},
{name:'2450', areaList:['2']},
{name:'1500', areaList:['2']},
{name:'1800', areaList:['2']},
{name:'2000', areaList:['2']},
{name:'2200', areaList:['2']},
{name:'2600', areaList:['2']}
]},
{name:'1Q010', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'小苹果', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'巧克力', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'2节小米', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'2节香水', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'6节罗马仕', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'5节罗马仕', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'4节钱包', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'超薄显示屏', cityList:[		   
{name:'超薄显示屏4000', areaList:['1']}
]},
{name:'金刚侠', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'SONY', cityList:[		   
{name:'3600', areaList:['1']},
{name:'4000', areaList:['1']},
{name:'7500', areaList:['1']},
{name:'8000', areaList:['1']}
]},
{name:'品能968', cityList:[		   
{name:'1200', areaList:['5']},
{name:'2450', areaList:['5']},
{name:'1500', areaList:['5']},
{name:'1800', areaList:['5']},
{name:'2000', areaList:['5']},
{name:'2200', areaList:['5']},
{name:'2600', areaList:['5']}
]},
{name:'4节罗马仕', cityList:[		   
{name:'1200', areaList:['4']},
{name:'2450', areaList:['4']},
{name:'1500', areaList:['4']},
{name:'1800', areaList:['4']},
{name:'2000', areaList:['4']},
{name:'2200', areaList:['4']},
{name:'2600', areaList:['4']}
]},
{name:'WK833', cityList:[		   
{name:'1200', areaList:['3']},
{name:'2450', areaList:['3']},
{name:'1500', areaList:['3']},
{name:'1800', areaList:['3']},
{name:'2000', areaList:['3']},
{name:'2200', areaList:['3']},
{name:'2600', areaList:['3']}
]},
{name:'8节小米', cityList:[		   
{name:'1200', areaList:['8']},
{name:'2450', areaList:['8']},
{name:'1500', areaList:['8']},
{name:'1800', areaList:['8']},
{name:'2000', areaList:['8']},
{name:'2200', areaList:['8']},
{name:'2600', areaList:['8']}
]},
{name:'三输出', cityList:[		   
{name:'1200', areaList:['5']},
{name:'2450', areaList:['5']},
{name:'1500', areaList:['5']},
{name:'1800', areaList:['5']},
{name:'2000', areaList:['5']},
{name:'2200', areaList:['5']},
{name:'2600', areaList:['5']}
]},
{name:'火焰石', cityList:[		   
{name:'1200', areaList:['5']},
{name:'2450', areaList:['5']},
{name:'1500', areaList:['5']},
{name:'1800', areaList:['5']},
{name:'2000', areaList:['5']},
{name:'2200', areaList:['5']},
{name:'2600', areaList:['5']}
]},
{name:'聚合物小苹果', cityList:[		   
{name:'聚合物小苹果4000', areaList:['1']}
]},
{name:'微米', cityList:[		   
{name:'微米4000', areaList:['1']}
]},
{name:'大方块', cityList:[		   
{name:'大方块4000', areaList:['1']}
]},
];