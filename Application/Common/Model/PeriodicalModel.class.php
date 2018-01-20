<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会通讯录model操作
 * @author  LRyan
 */
class PeriodicalModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('periodical');
    }
    public function select($data = array(), $limit = 100) {

        $conditions = $data;
        $list = $this->_db->where($conditions)->order('periodicalid desc')->limit($limit)->select();
        return $list;

    }
    public function insert($data = array()) {
        if(!is_array($data) || !$data) {
            return 0;
        }
        $data['time']  = time();
        $data['status'] = 1;
        return $this->_db->add($data);
    }
    public function getPeriodical($data,$page,$pageSize=4) {
        $conditions = $data;
        $conditions['status'] = array('neq',-1);

        $offset = ($page - 1) * $pageSize;
        $list = $this->_db->where($conditions)
            ->order('periodicalid desc')
            ->limit($offset,$pageSize)
            ->select();

        return $list;

    }


    public function getPeriodicalCount($data = array()){
        $conditions = $data;
        $conditions['status'] = array('neq',-1);

        return $this->_db->where($conditions)->count();
    }

    public function find($id) {
        $data = $this->_db->where('periodicalid='.$id)->find();
        return $data;
    }

    public function updateById($id, $data) {
        if(!$id || !is_numeric($id) ) {
            throw_exception("ID不合法");
        }
        if(!$data || !is_array($data)) {
            throw_exception('更新数据不合法');
        }

        return $this->_db->where('periodicalid='.$id)->save($data);
    }

    public function updateStatusById($id, $status) {
        if(!is_numeric($status)) {
            throw_exception('status不能为非数字');
        }
        if(!$id || !is_numeric($id)) {
            throw_exception('id不合法');
        }
        $data['status'] = $status;

        return $this->_db->where('periodicalid='.$id)->save($data);
    }


    public function getNewsByNewsIdIn($periodicalIds) {
        if(!is_array($periodicalIds)) {
            throw_exception("参数不合法");
        }

        $data = array(

            'periodicalid' => array('in',implode(',', $periodicalIds)),
        );

        return $this->_db->where($data)->select();
    }


    public function updateCount($id, $count) {
        if(!$id || !is_numeric($id)) {
            throw_exception("ID 不合法");

        }
        if(!is_numeric($count)) {
            throw_exception("count不能为非数字");
        }

        $data['count'] = $count;
        return $this->_db->where('periodicalid='.$id)->save($data);

    }

    public function maxcount() {
        $data = array(
            'status' => 1,
        );
        return $this->_db->where($data)->order('count desc')->limit(1)->find();
    }

    public function getCommunicationList(){

        $list = $this->_db->where()->order('periodicalid')->select();
        
        return $list;
    }


}
