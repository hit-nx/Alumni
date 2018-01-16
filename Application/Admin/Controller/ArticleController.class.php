<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Exception;

/**
 * 文章内容管理
 */
class ArticleController extends CommonController {

    public function index() {
        $conds = array();
        if($_GET['title']) {
            $conds['title'] = $_GET['title'];
            $this->assign("title",$conds['title']);
        }

        // if($_GET['column_parentid']) {
        //     $conds['column_parentid'] = intval($_GET['column_parentid']);

        //     $this->assign('parentColumn',$conds['column_parentid']);
        // }

        if($_GET['columnid']) {
            $conds['columnid'] = intval($_GET['columnid']);
            $this->assign('columnid',$conds['columnid']);
        }

        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = 10;

        $articles = D("Article")->getArticle($conds,$page,$pageSize);
        $count = D("Article")->getArticleCount($conds);
        
        // 分页部分 使用插件
        $pageData = array(
            'pageNow' => $page,
            'pageTotal' =>  ceil($count / $pageSize),
            'pageRows' => $count
        );

        $this->assign('page', $pageData);
        $this->assign('articles',$articles);
        
        $this->assign('webSiteMenu',D("Column")->getColumn());

        $this->display();
    }
    public function add(){
        if($_POST) {
            if(!isset($_POST['title']) || !$_POST['title']) {
                return show(0,'标题不存在');
            }
            if(!isset($_POST['columnid']) || !$_POST['columnid']) {
                return show(0,'文章栏目不存在');
            }
            if(!isset($_POST['source']) || !$_POST['source']) {
                return show(0,'来源不存在');
            }
            if(!isset($_POST['keywords']) || !$_POST['keywords']) {
                return show(0,'关键字不存在');
            }
            if(!isset($_POST['content']) || !$_POST['content']) {
                return show(0,'content不存在');
            }
            if($_POST['articleid']) {
                return $this->save($_POST);
            }

            if(D("Article")->insert($_POST)) {
                return show(1,'新增成功！');

            }else{
                return show(0,'新增失败！');
            }

        }else {
            $webSiteMenu = D("Column")->getColumn();

            $this->assign('webSiteMenu', $webSiteMenu);
            $this->assign('Source', $copyFrom);
            $this->display();
        }
    }

    public function edit() {

        $articleId = $_GET['id'];
        if(!$articleId) {
            // 执行跳转
            $this->redirect('/admin.php?c=article');
        }
        $article = D("Article")->find($articleId);

        if(!$article) {
            $this->redirect('/admin.php?c=article');
        }

        $webSiteMenu = D("Column")->getColumn();

        $this->assign('articleId', $articleId);
        $this->assign("Title",$article['title']);
        $this->assign('webSiteMenu', $webSiteMenu);
        $this->assign('ColumnId', $article['columnid']);
        $this->assign('Source', $article['source']);
        $this->assign('Keywords',$article['keywords']);
        $this->assign('PictureURL',$article['picture_url']);
        $this->assign('Content',$article['content']);

        $this->display();
    }

    public function save($data) {
        $articleId = $data['articleid'];
        unset($data['articleid']);

        try {
            $id = D("Article")->updateById($articleId, $data);
            if($id === false) {
                return show(0, '更新失败');
            }
            return show(1, '更新成功');
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }
    }
    public function setStatus() {
        try {
            if ($_POST) {
                $id = $_POST['id'];
                if (!$id) {
                    return show(0, 'ID不存在');
                }
                $res = D("Article")->DeleteById($id);
                if ($res) {
                    return show(1, '删除成功');
                } else {
                    return show(0, '删除失败');
                }
            }
            return show(0, '没有提交的内容');
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }
    }

    public function listorder() {
        $listorder = $_POST['listorder'];
        $jumpUrl = $_SERVER['HTTP_REFERER'];
        $errors = array();
        try {
            if ($listorder) {
                foreach ($listorder as $articleId => $v) {
                    // 执行更新
                    $id = D("Article")->updateArticleListorderById($articleId, $v);
                    if ($id === false) {
                        $errors[] = $articleId;
                    }
                }
                if ($errors) {
                    return show(0, '排序失败-' . implode(',', $errors), array('jump_url' => $jumpUrl));
                }
                return show(1, '排序成功', array('jump_url' => $jumpUrl));
            }
        }catch (Exception $e) {
            return show(0, $e->getMessage());
        }
        return show(0,'排序数据失败',array('jump_url' => $jumpUrl));
    }

}