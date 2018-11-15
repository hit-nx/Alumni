<?php
namespace Common\Model;
use Think\Model;//author 李锐焱

class EnterpriseModel extends  Model {
    private $_db = '';
    public function __construct() {
        $this->_db = M('enterprise');
    }

    public function insert($data = array()) {
        if(!$data || !is_array($data)) {
            return 0;
        }
        $data['time']  = time();
        $data['status'] = 1;
        return $this->_db->add($data);
    }

    public function getEnterprises($data,$page,$pageSize=10) {
        $conditions = $data;
        if(isset($data['name']) && $data['name']) {
            $conditions['name'] = array('like','%'.$data['name'].'%');
        }
        $conditions['status'] = array('neq',-1);
        $offset = ($page - 1) * $pageSize;
        $list = $this->_db->where($conditions)->order('enterprise_id desc')->limit($offset,$pageSize)->select();
        return $list;
    }

    public function getEnterprisesCount($data= array()) {
        $conditions = $data;
        if(isset($data['name']) && $data['name']) {
            $conditions['name'] = array('like','%'.$data['name'].'%');
        }
        $conditions['status'] = array('neq',-1);
        return $this->_db->where($conditions)->count();
    }
    public function find($id){
        if(!$id || !is_numeric($id)) {
            return array();
        }
        return $this->_db->where('enterprise_id='.$id)->find();
    }
    public function updateEnterpriseById($id, $data) {


        if(!$data || !is_array($data)) {
            throw_exception('更新的数据不合法');
        }

        return $this->_db->where('enterprise_id='.$id)->save($data);

    }
    public function updateStatusById($id, $status) {
         if(!is_numeric($status)) {
            throw_exception('status不能为非数字');
        }
        if(!$id || !is_numeric($id)) {
            throw_exception('id不合法');
        }
        $data['status'] = $status;
        return $this->_db->where('enterprise_id='.$id)->save($data);
     } 
}