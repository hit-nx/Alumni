<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会文章详情页model操作
 * @author  Noah
 */
class PassageModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('articles');
    }

    public function getArticleInfo($articleid) {

        $list = $this->_db->where('articleid = '.$articleid)->find();
        return $list;
    }

    
}
