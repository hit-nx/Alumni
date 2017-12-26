<?php
namespace Common\Model;
use Think\Model;

/**
 * 用户组操作
 * @author  singwa
 */
class AdminModel extends Model {
	private $_db = '';

	public function __construct() {
		$this->_db = M('users');
	}
   
    public function getAdminByUsername($username='') {
        $res = $this->_db->where('username="'.$username.'"')->find();
        return $res;
    }
    public function getAdminByAdminId($adminId=0) {
        $res = $this->_db->where('admin_id='.$adminId)->find();
        return $res;
    }

    public function updateByAdminId($id, $data) {

        if(!$id || !is_numeric($id)) {
            throw_exception("ID不合法");
        }
        if(!$data || !is_array($data)) {
            throw_exception('更新的数据不合法');
        }
        return  $this->_db->where('admin_id='.$id)->save($data); // 根据条件更新记录
    }

    public function insert($data = array()) {
        if(!$data || !is_array($data)) {
            return 0;
        }
        return $this->_db->add($data);
    }

    public function getAdmins() {
        $data = array(
            'status' => array('neq',-1),
        );
        return $this->_db->where($data)->order('admin_id desc')->select();
    }
}
