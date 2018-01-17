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

    	$this->_db = M('columns');

    	$list = $this->_db->where('column_parentid = '.$columnid)->select();

    	return $list;

    	// $this->_db = M('articles');

     //    $list = $this->_db->where('content_id = '.$contentid 'and picture_url != ""')->order('articleid desc')->limit(2)->select();
     //    return $list;
    }

    public function getChildColumnsId($columnid) {

    	$this->_db = M('columns');

    	$list = $this->_db->where('column_parentid = '.$columnid)->getField('column_id',true);

    	return $list;
    }


    
}