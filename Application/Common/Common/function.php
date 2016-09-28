<?php
/**
 * 公共的方法
 *
 */
/**
 * 返回JSON的数据格式
 * @param  integer $code    [description]
 * @param  string $message [description]
 * @param  array  $data    [description]
 * @return JSON          [description]
 */
function show($code,$message,$data=array()){
	$result = array(
		'code'=>$code,
		'message'=>$message,
		'data'=>$data
	);
	exit(json_encode($result));
}

function md5Password($pass){
	return md5($pass.C('MD5_PRE'));
}