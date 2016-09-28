<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function index(){
		$this->display();
	}

	public function check(){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(!trim($username)){
			return show(0,'用户名不能为空');
		}
		if(!trim($password)){
			return show(0,'密码不能为空');
		}
		$res = D('Admin')->getAdminByUsername($username);
		if(!$res || $res['status']!=1){
			return show(0,'该用户不存在');
		}
		if($res['password']!=md5Password($password)){
			return show(0,'密码错误');
		}
		$lastloginip = get_client_ip();
		D('Admin')->updateById($res['id'],array('lastlogintime'=>time(),'lastloginip'=>$lastloginip));
		session('adminUser',$res);
		return show(1,'登入成功');
	}

	public function logout(){
		session('adminUser',null);
		//echo 'Ok';exit;
		header("location:".U('login/index','',''));
		//$this->redirect('login/index');
	}
}