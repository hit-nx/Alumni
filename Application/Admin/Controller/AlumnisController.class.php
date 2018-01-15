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
class AlumnisController extends CommonController {

    public function index() {
        $conds = array();

        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = 10;

        $alumnis = D("Alumnis")->getAlumnis($conds,$page,$pageSize);
        $count = D("Alumnis")->getAlumnisCount($conds);

        // 分页部分 使用插件
        $pageData = array(
            'pageNow' => $page,
            'pageTotal' =>  ceil($count / $pageSize),
            'pageRows' => $count
        );
        $this->assign('page', $pageData);
        $this->assign('alumnis',$alumnis);

        $this->assign('webSiteMenu',D("Menu")->getBarMenus());
        $this->display();
    }

    public function add(){
        if($_POST) {
            if(!isset($_POST['title']) || !$_POST['title']) {
                return show(0,'标题不存在');
            }

            if(!isset($_POST['content']) || !$_POST['content']) {
                return show(0,'内容不存在');
            }

            if($_POST['alumnis_id']) {
                return $this->save($_POST);
            }

            if(D("Alumnis")->insert($_POST)) {
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
        $alumnisId = $data['alumnis_id'];
        unset($data['alumnis_id']);

        try {
            $id = D("Alumnis")->updateById($alumnisId, $data);
            if($id === false) {
                return show(0, '更新失败');
            }
            return show(1, '更新成功');
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }
    }

    public function edit() {
        $alumni_id = $_GET['id'];
        if(!$alumni_id) {
            // 执行跳转
            $this->redirect('/admin.php?c=alumnis');
        }
        $alumni = D("Alumnis")->find($alumni_id);
        if(!$alumni) {
            $this->redirect('/admin.php?c=alumnis');
        }

        $webSiteMenu = D("Menu")->getBarMenus();
        $this->assign('webSiteMenu', $webSiteMenu);
        $this->assign('alumni',$alumni);
        $this->display();
    }


    public function setStatus() {
        try {
            if ($_POST) {
                $id = $_POST['id'];
                $status = $_POST['status'];
                if (!$id) {
                    return show(0, 'ID不存在');
                }
                $res = D("Alumnis")->updateStatusById($id, $status);
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
}