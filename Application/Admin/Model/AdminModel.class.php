<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
	private $_db;
	public function __construct(){
		$this->_db = M('admin');
	}
	public function getAdminByUsername($username){
		return $this->_db->where('username="'.$username.'"')->find();	
	}

	public function updateById($id,$data){
		if(!$id || !is_numeric($id)){
			E('Id不合法');
		}
		if(!$data || !is_array($data)){
			E('数据不合法');
		}
		return $this->_db->where('id='.$id)->save($data);
	}

}