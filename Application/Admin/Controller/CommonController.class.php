<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function __construct(){
		parent::__construct();
		$this->_init();
	}

	/**
	 * 初始化
	 * @return [type] [description]
	 */
	private function _init(){
		$isLogin = $this->isLogin();
		if(!$isLogin){
			header("location:".U('login/index','',''));
			//$this->redirect('/login/index');
		}
	}

	public function isLogin(){
		$user = session('adminUser');
		if($user && is_array($user)){
			return true;
		}
		return false;
	}
}