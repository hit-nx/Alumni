<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会文章校友组织model操作
 * @author  Noah
 */
class OrganizationModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('content');
    }

    public function getOrganizationInfo($contentid) {

        $list = $this->_db->where('content_id = '.$contentid)->find();
        return $list;
    }

    
}
