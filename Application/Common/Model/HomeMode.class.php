<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会内容model操作
 * @author  MrssiP
 */
class AlumnisModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('article');
    }




    public function getArticle($columnid) {

     
        $list = $this->_db->where()->select();
        return $list;
    }



}
