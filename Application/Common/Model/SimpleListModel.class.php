<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会详细列表主页model操作
 * @author  Noah
 */
class SimpleListModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('articles');
    }

    //根据父栏目得到所有子栏目
    public function getChildColumns($columnid) {

    	$this->_db = M('columns');

    	$list = $this->_db->where('column_parentid = '.$columnid)->select();

    	return $list;

    }

    //获取当前栏目（子）
    public function getCurrentColumn($columnid){

        $this->_db = M('columns');

        $list = $this->_db->where('column_id = '.$columnid)->select();

        return $list;

    }
    
}