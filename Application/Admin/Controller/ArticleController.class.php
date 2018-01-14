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
        $title = $_GET['title'];
        if($title) {
            $conds['title'] = $title;
            $this->assign("title",$conds['title']);
        }

        if($_GET['columnid']) {
            $conds['columnid'] = intval($_GET['columnid']);
            $this->assign('columnid',$conds['columnid']);
        }

        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = 10;

        $article = D("Article")->getArticle($conds,$page,$pageSize);
        $count = D("Article")->getArticleCount($conds);
        
        // 分页部分 使用插件
        $pageData = array(
            'pageNow' => $page,
            'pageTotal' =>  ceil($count / $pageSize),
            'pageRows' => $count
        );
        $this->assign('page', $pageData);
        $this->assign('article',$article);
        //$this->assign('positions', $positions);

        $this->assign('webSiteMenu',D("Column")->getBarMenus());
        $this->display();
    }
    public function add(){
        if($_POST) {
            if(!isset($_POST['Title']) || !$_POST['Title']) {
                return show(0,'标题不存在');
            }

            if(!isset($_POST['ColumnID']) || !$_POST['ColumnID']) {
                return show(0,'文章栏目不存在');
            }
            if(!isset($_POST['Keywords']) || !$_POST['Keywords']) {
                return show(0,'关键字不存在');
            }
            if(!isset($_POST['Content']) || !$_POST['Content']) {
                return show(0,'content不存在');
            }
            if($_POST['ArticleID']) {
                return $this->save($_POST);
            }
            $articleId = D("Article")->insert($_POST);
            if($articleId) {
//                $articleContentData['content'] = $_POST['content'];
//                $articleContentData['ArticleID'] = $articleId;
//                $cId = D("article")->insert($articleContentData);
//                if($cId){
//                    return show(1,'新增成功');
//                }else{
//                    return show(1,'主表插入成功，副表插入失败');
//                }
                return show(1,'操作成功！');

            }else{
                return show(0,'操作失败！');
            }

        }else {
            $webSiteMenu = D("Column")->getBarMenus();
            $titleFontColor = C("TITLE_FONT_COLOR");
            $copyFrom = C("COPY_FROM");
            $this->assign('webSiteMenu', $webSiteMenu);
            $this->assign('titleFontColor', $titleFontColor);
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
//        $articleContent = D("ArticleContent")->find($articleId);
//        if($articleContent) {
//            $article['content'] = $articleContent['content'];
//        }
        $webSiteMenu = D("Column")->getBarMenus();

        $this->assign("Title",$article['title']);
        $this->assign('webSiteMenu', $webSiteMenu);
        $this->assign('Source', C("COPY_FROM"));
        $this->assign('Keywords',$article['keywords']);
        $this->assign('PictureURL',$article['PictureURL']);
        $this->assign('Content',$article['Content']);

        $this->display();
    }

    public function save($data) {
        $articleId = $data['ArticleID'];
        unset($data['ArticleID']);

        try {
            $id = D("Article")->updateById($articleId, $data);
            $articleContentData['content'] = $data['content'];
            $condId = D("articleContent")->updateArticleById($articleId, $articleContentData);
            if($id === false || $condId === false) {
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
                    return show(1, '操作成功');
                } else {
                    return show(0, '操作失败');
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

    public function push() {
        $jumpUrl = $_SERVER['HTTP_REFERER'];
        $positonId = intval($_POST['position_id']);
        $articleId = $_POST['push'];

        if(!$articleId || !is_array($articleId)) {
            return show(0, '请选择推荐的文章ID进行推荐');

        }
        if(!$positonId) {
            return show(0, '没有选择推荐位');
        }
        try {
            $article = D("Article")->getArticleByNewsIdIn($articleId);
            if (!$article) {
                return show(0, '没有相关内容');
            }

            foreach ($article as $newarticle) {
                    $data = array(
                    'position_id' => $positonId,
                    'title' => $newarticle['title'],
                    'thumb' => $newarticle['thumb'],
                    'ArticleID' => $newarticle['ArticleID'],
                    //'status' => 1,
                    'PublishDate' => $newarticle['PublishDate'],
                );
                $position = D("PositionContent")->insert($data);
            }
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }

        return show(1, '推荐成功',array('jump_url'=>$jumpUrl));


    }
}