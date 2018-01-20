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
        $list["visitcount"] = $list["visitcount"] + 1;
        $this->_db->where('articleid = '.$articleid)->save($list);
        return $list;
    }

    public function like($articleid){
        $list = $this->_db->where('articleid = '.$articleid)->find();
        $list["likecount"] = $list["likecount"] + 1;
        $this->_db->where('articleid = '.$articleid)->save($list);
        return $list;
    }

    public function getArticleById($id){

        $list = $this->_db->where('articleid = '.$id)->find();

        return $list;

    }


    
}
