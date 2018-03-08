<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会主页model操作
 * @author  Noah
 */
class IndexModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('articles');
    }


    //最新的图片新闻
    public function getPicNewsByColumn($columnid){

        $conditions = array(
            'picture_url' => array('neq',""),
        ); 
        switch ($columnid) {
            case 1:
                $conditions['columnid'] = 3;
                break;
            case 2:
                $conditions['columnid'] = 2;
                break;
            case 3:
                $conditions['columnid'] = 4;
                break;
            case 4:
                $conditions['columnid'] = array(array('eq',12),array('eq',13),array('eq',14),array('eq',16), 'or');
                break;
            case 5:
                $conditions['columnid'] = array(array('eq',18),array('eq',19),array('eq',20), 'or');
                break;
        }

        $list = $this->_db->where($conditions)->order('articleid desc')->find();
        return $list;
    }

    //排除第一条图片新闻的前三条
    public function getNewsByColumn($columnid, $picid){
        $conditions = array(
            'articleid' => array('neq', $picid),
        ); 
        switch ($columnid) {
            case 1:
                $conditions['columnid'] = 3;
                break;
            case 2:
                $conditions['columnid'] = 2;
                break;
            case 3:
                $conditions['columnid'] = 4;
                break;
            case 4:
                $conditions['columnid'] = array(array('eq',12),array('eq',13),array('eq',14),array('eq',16), 'or');
                break;
            case 5:
                $conditions['columnid'] = array(array('eq',18),array('eq',19),array('eq',20), 'or');
                break;
        }

        $list = $this->_db->where($conditions)->order('articleid desc')->limit(3)->select();
        return $list;
    }





}
