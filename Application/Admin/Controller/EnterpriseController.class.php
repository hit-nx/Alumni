<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Exception;
class EnterpriseController extends CommonController {
    
    public function index(){

        $data=array();
        $page=$_REQUEST['p']?$_REQUEST['p']:1;
        $pageSize=$_REQUEST['pageSize']?$_REQUEST['pageSize']:10;
        $Enterprises=D("Enterprise")->getEnterprises($data,$page,$pageSize);
        $EnterprisesCount=D("Enterprise")->getEnterprisesCount($data);

        // 分页部分 使用插件
        $pageData = array(
            'pageNow' => $page,
            'pageTotal' =>  ceil($EnterprisesCount / $pageSize),
            'pageRows' => $EnterprisesCount
        );
        $this->assign('page', $pageData);

        $this->assign('Enterprises',$Enterprises);
        $this->display();
    }


    public function add(){
         if($_POST) {
            if(!isset($_POST['name']) || !$_POST['name']) {
                return show(0,'企业名称为空');
            }      
            if(!isset($_POST['enterprise_url']) || !$_POST['enterprise_url']) {
                return show(0,'官网链接不存在');
            }           
            $info = D("Upload")->fileUpload();
            if($info['picture_path']) {
                $_POST['picture_path'] = D("Upload")->getPath($info['picture_path']);
            }
            if($_POST['enterprise_id']) {
                return $this->save($_POST);
            }
            
            if(D("Enterprise")->insert($_POST)) {
                return show(1,'新增成功');
            }else{
                return show(0,'新增失败');
            }
        }else {

            $this->display();
        }
    }

    public function setStatus() {
        try {
            if ($_POST) {
                $id = $_POST['id'];
                $status = $_POST['status'];
                // 执行数据更新操作
                $res = D("Enterprise")->updateStatusById($id, $status);
                if ($res) {
                    return show(1, '操作成功');
                } else {
                    return show(0, '操作失败');
                }

            }
        }catch(Exception $e) {
            return show(0,$e->getMessage());
        }

        return show(0,'没有提交的数据');
    }

   public function edit() {

        $enterprise_id = $_GET['id'];

        if(!$enterprise_id) {
            // 执行跳转
            $this->redirect('/admin.php?c=enterprise');
        }
        $enterprise = D("Enterprise")->find($enterprise_id);

        if(!$enterprise) {
            $this->redirect('/admin.php?c=enterprise');
        }

        $this->assign('enterprise_id', $enterprise_id);
        $this->assign("name",$enterprise['name']);
        $this->assign("picture_path",$enterprise['picture_path']);
        $this->assign('enterprise_url',$enterprise['enterprise_url']);

        $this->display();
    }

     public function save($data) {
        $enterprise_id = $data['enterprise_id'];
        unset($data['enterprise_id']);

        $info = D("Upload")->fileUpload();
        if($info['picture_path']) {
            $data['picture_path'] = D("Upload")->getPath($info['picture_path']);
        }

        try {
            $id = D("Enterprise")->updateEnterpriseById($enterprise_id, $data);
            if($id === false) {
                return show(0, '更新失败');
            }
            return show(1, '更新成功');
        }catch(Exception $e) {
            return show(0, $e->getMessage());
        }
    }

}