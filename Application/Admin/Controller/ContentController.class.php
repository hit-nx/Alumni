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
class ContentController extends CommonController {


    public function index(){
        if($_POST) {

            if(!isset($_POST['id']) || !$_POST['id']) {
                return show(0,'文章栏目不存在');
            }

            if(!isset($_POST['content']) || !$_POST['content']) {
                return show(0,'content不存在');
            }

            return $this->save($_POST);
        }

        $id = (!isset($_GET['id']) || !$_GET['id']) ? 1 : $_GET['id'];
        $content=D("Content")->find($id);
        $menu=D("Content")->getBarMenus();


        $this->assign('Content',$content);
        $this->assign('ContentId',$id);
        $this->assign('webSiteMenu',$menu);
        $this->display();
    }

    public function save($data) {
        $newsId = $data['id'];

        try {
            $newsContentData['content'] = $data['content'];
            $condId = D("Content")->updateNewsById($newsId, $newsContentData);
            if($condId === false) {
                return show(0, '更新失败');
            }
            return show(1, '更新成功');
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }

    }

    
}