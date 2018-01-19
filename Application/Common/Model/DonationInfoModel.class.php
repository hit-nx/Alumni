<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会文章详情页model操作
 * @author  Noah
 */
class DonationInfoModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('content');
    }

    public function getDonationInfo($contentid) {

        $list = $this->_db->where('content_id = '.$contentid)->find();
        return $list;
    }

    public function getDonationList() {

    	$this->_db = M('donations');

        $list = $this->_db->where()->select();
        
        return $list;
    }

    
}
