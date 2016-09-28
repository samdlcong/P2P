<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	//echo md5Password('admin');exit;
        $this->display();


    }
}