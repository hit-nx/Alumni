<?php
namespace Common\Model;
use Think\Model;

/**
 * 文章内容content model操作
 * @author  singwa
 */
class ArticleContentModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('articles');
    }
    public function insert($data=array()){
        if(!$data || !is_array($data)) {
            return 0;
        }
        $data['PublishDate'] = time();
        if(isset($data['content']) && $data['content']) {
            $data['content'] = htmlspecialchars($data['content']);
        }
        return $this->_db->add($data);

    }
    public function find($id) {
        return $this->_db->where('ArticleID='.$id)->find();
    }
    public function updateArticleById($id, $data) {
        if(!$id || !is_numeric($id) ) {
            throw_exception("ID不合法");
        }
        if(!$data || !is_array($data)) {
            throw_exception('更新数据不合法');
        }
        if(isset($data['content']) && $data['content']) {
            $data['content'] = htmlspecialchars($data['content']);
        }

        return $this->_db->where('ArticleID='.$id)->save($data);
    }




}
