<?php
namespace Common\Model;
use Think\Model;

/**
 * 文章内容model操作
 * @author  singwa.
 */
class ArticleModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('articles');
    }
    public function select($data = array(), $limit = 100) {
        $conditions = $data;
        $list = $this->_db->where($conditions)->order('articleid desc')->limit($limit)->select();
        return $list;
    }
    public function insert($data = array()) {
        if(!is_array($data) || !$data) {
            return 0;
        }
        // $data['PublishDate']  = time();
        $data['PublishUserID'] =  getLoginUsername();
        return $this->_db->add($data);
    }

    public function getArticle($data,$page,$pageSize=10) {
        
        $conditions = $data;
        if(isset($data['title']) && $data['title']) {
            $conditions['title'] = array('like','%'.$data['title'].'%');
        }
        if(isset($data['columnid']) && $data['columnid'])  {
            $conditions['columnid'] = intval($data['columnid']);
        }

        // if(isset($data['column_parentid']) && $data['column_parentid'])  {
        //     $conditions['column_parentid'] = intval($data['column_parentid']);
        // }
//        $conditions['status'] = array('neq',-1);

        $offset = ($page - 1) * $pageSize;
        $list = $this->_db->where($conditions)
            ->order('articleid')
            ->limit($offset,$pageSize)
            ->select();

        return $list;

    }


    public function getArticleCount($data = array()){
        $conditions = $data;
        if(isset($data['title']) && $data['title']) {
            $conditions['title'] = array('like','%'.$data['title'].'%');
        }
        if(isset($data['columnid']) && $data['columnid'])  {
            $conditions['columnid'] = intval($data['columnid']);
        }
//        $conditions['status'] = array('neq',-1);

        return $this->_db->where($conditions)->count();
    }

    public function find($id) {
        $data = $this->_db->where('articleid='.$id)->find();
        return $data;
    }

    public function updateById($id, $data) {
        if(!$id || !is_numeric($id) ) {
            throw_exception("ID不合法");
        }
        if(!$data || !is_array($data)) {
            throw_exception('更新数据不合法');
        }

        return $this->_db->where('articleid='.$id)->save($data);
    }

    public function DeleteById($id) {
        if(!$id){
            return show(0,"id不存在");
        }else{
            $this->_db->where('articleid='.$id)->delete();
            return show(1,"操作成功！");
        }
    }

//    public function updateArticleListorderById($id, $listorder) {
//        if(!$id || !is_numeric($id)) {
//            throw_exception('ID不合法');
//        }
//        $data = array('listorder'=>intval($listorder));
//        return $this->_db->where('ArticleID='.$id)->save($data);
//    }
    public function getArticleByNewsIdIn($articleIds) {
        if(!is_array($articleIds)) {
            throw_exception("参数不合法");
        }

        $data = array(

            'articleid' => array('in',implode(',', $articleIds)),
        );

        return $this->_db->where($data)->select();
    }

    /**
     * 获取排行的数据
     * @param array $data
     * @param int $limit
     * @return array
     */
    public function getRank($data = array(), $limit = 100) {
        $list = $this->_db->where($data)->order('VisitCount desc,articleid desc ')->limit($limit)->select();
        return $list;
    }

    public function updateCount($id, $count) {
        if(!$id || !is_numeric($id)) {
            throw_exception("ID 不合法");

        }
        if(!is_numeric($count)) {
            throw_exception("count不能为非数字");
        }

        $data['count'] = $count;
        return $this->_db->where('articleid='.$id)->save($data);

    }

    public function maxcount() {
        $data = array(
            'status' => 1,
        );
        return $this->_db->where($data)->order('VisitCount desc')->limit(1)->find();
    }

    public function getDisplayedNews($columns_id){

        if(!is_array($columns_id)) {
            throw_exception("参数不合法");
        }

        $data = array(

            'columnid' => array('in',implode(',', $columns_id)),'picture_url != ""'
        );

        return $this->_db->where($data)->order('articleid desc')->limit(2)->select();

    }

    public function getNewsList($columns_id){

        if(!is_array($columns_id)) {
            throw_exception("参数不合法");
        }

        $data = array(

            'columnid' => array('in',implode(',', $columns_id)),
        );

        return $this->_db->where($data)->order('articleid desc')->select();

    }

    public function getNewsByColumnId($columns_id){

        return $this->_db->where('columnid = '.$columns_id)->order('articleid desc')->select();

    }


}
