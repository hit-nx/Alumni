<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;

/**
 * 文章内容管理
 */
class PeriodicalController extends CommonController {

    public function index() {
        $conds = array();

        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = 4;

        $periodical = D("Periodical")->getPeriodical($conds,$page,$pageSize);
        $count = D("Periodical")->getPeriodicalCount($conds);

        $pageData = array(
            'pageNow' => $page,
            'pageTotal' =>  ceil($count / $pageSize),
            'pageRows' => $count,
        );

        $this->assign('page', $pageData);
        $this->assign('periodical',$periodical);

        $this->assign('webSiteMenu',D("Menu")->getBarMenus());

        $this->display();
    }

    public function add(){
        if($_POST) {
            if(!isset($_POST['title']) || !$_POST['title']) {
                return show(0,'标题不存在');
            }

            // if(!isset($_POST['content']) || !$_POST['content']) {
            //     return show(0,'内容不存在');
            // }

            if($_POST['periodicalid']) {
                return $this->save($_POST);
            }

            if(D("Periodical")->insert($_POST)) {
                return show(1,'新增成功');
            }else{
                return show(0,'新增失败');
            }

        }else {
            $webSiteMenu = D("Menu")->getBarMenus();
            $this->assign('webSiteMenu', $webSiteMenu);
            $this->display();
        }
    }

    public function save($data) {
        $periodicalId = $data['periodicalid'];
        unset($data['periodicalid']);

        try {
            $id = D("Periodical")->updateById($periodicalId, $data);
            if($id === false) {
                return show(0, '更新失败');
            }
            return show(1, '更新成功');
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }
    }

    // public function edit() {
    //     $alumni_id = $_GET['id'];
    //     if(!$alumni_id) {
    //         // 执行跳转
    //         $this->redirect('/admin.php?c=alumnis');
    //     }
    //     $alumni = D("Alumnis")->find($alumni_id);
    //     if(!$alumni) {
    //         $this->redirect('/admin.php?c=alumnis');
    //     }

    //     $webSiteMenu = D("Menu")->getBarMenus();
    //     $this->assign('webSiteMenu', $webSiteMenu);
    //     $this->assign('alumni',$alumni);
    //     $this->display();
    // }


    public function setStatus() {
        try {
            if ($_POST) {
                $id = $_POST['id'];
                $status = $_POST['status'];
                if (!$id) {
                    return show(0, 'ID不存在');
                }
                $res = D("Periodical")->updateStatusById($id, $status);
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
                foreach ($listorder as $newsId => $v) {
                    // 执行更新
                    $id = D("News")->updateNewsListorderById($newsId, $v);
                    if ($id === false) {
                        $errors[] = $newsId;
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
        $newsId = $_POST['push'];

        if(!$newsId || !is_array($newsId)) {
            return show(0, '请选择推荐的文章ID进行推荐');

        }
        if(!$positonId) {
            return show(0, '没有选择推荐位');
        }
        try {
            $news = D("News")->getNewsByNewsIdIn($newsId);
            if (!$news) {
                return show(0, '没有相关内容');
            }

            foreach ($news as $new) {
                $data = array(
                    'position_id' => $positonId,
                    'title' => $new['title'],
                    'thumb' => $new['thumb'],
                    'news_id' => $new['news_id'],
                    'status' => 1,
                    'create_time' => $new['create_time'],
                );
                $position = D("PositionContent")->insert($data);
            }
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }

        return show(1, '推荐成功',array('jump_url'=>$jumpUrl));


    }
}