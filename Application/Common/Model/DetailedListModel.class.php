<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会详细列表主页model操作
 * @author  Noah
 */
class DetailedListModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('articles');
    }

    public function getChildColumns($columnid) {

    	$this->_db_columns = M('columns');

    	$childColumns = $this->_db_columns->where('column_parentid = '.$columnid)->select();

    	return $childColumns;

    	// $this->_db = M('articles');

     //    $list = $this->_db->where('content_id = '.$contentid 'and picture_url != ""')->order('articleid desc')->limit(2)->select();
     //    return $list;
    }

    public function getDonationList() {

    	$this->_db = M('donations');

        $list = $this->_db->where()->select();
        
        return $list;
    }

    
}