<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会文章详情页model操作
 * @author  Noah
 */
class EnterpriseInfoModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('enterprise');
    }

    public function getEnterpriseList() {
        $data = array(
            'status' => array('eq',1),
        );
        return $this->_db->where($data)->select();
    }
    public function getEnterpriseListLeft() {
        $lr= '';
        $length =$this->_db->where("status=1")->count();
        if ($length%2==1){
            $lr=(int)($length/2)+1;
        }else {
            $lr=(int)($length/2);
        }
        $data = array(
            'status' => array('eq',1),
        );
        return $this->_db->where($data)->order("enterprise_id ASC")->limit("0,$lr")->select();
    }
    public function getEnterpriseListRight() {
        $lr= '';
        $length =$this->_db->where("status=1")->count();
        $lr=(int)($length/2);
        $data = array(
            'status' => array('eq',1),
        );
        return $this->_db->where($data)->order("enterprise_id DESC")->limit("0,$lr")->select();
    }
}
