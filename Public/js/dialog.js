//layer.js封装
var dialog = {
	// 错误弹出层
	error: function (message){
		layer.open({
			content:message,
			icon:2,
			titile: '错误提示',

		});
	},

	//成功弹出层
	/**
	 * [success description]
	 * @param  {[type]} message 提示信息
	 * @param  {[type]} url     跳转地址
	 * @return {[type]}         [description]
	 */
	success: function(message,url){
		layer.open({
			content:message,
			icon:1,
			yes: function(){
				location.href=url;
			}
		});
	},

		// 确认弹出层
	confirm :function(message,url) {
		laye.open({
			content:message,
			icon:3,
			btm:['是','否'],
			yes:function(){
				location.href=url;
			},
		});
	},

	togo:function(message){
		layer.open({
			content:message,
			icon:3,
			btn:['确定'],
		});
	},
}