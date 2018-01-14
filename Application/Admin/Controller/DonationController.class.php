<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
class DonationController extends CommonController {
    
    public function index(){

        $data=array();
        $page=$_REQUEST['p']?$_REQUEST['p']:1;
        $pageSize=$_REQUEST['pageSize']?$_REQUEST['pageSize']:10;
        $menus=D("Donation")->getMenus($data,$page,$pageSize);
        $menusCount=D("Donation")->getMenusCount($data);

        // 分页部分 使用插件
        $pageData = array(
            'pageNow' => $page,
            'pageTotal' =>  ceil($menusCount / $pageSize),
            'pageRows' => $menusCount
        );
        $this->assign('page', $pageData);
        $this->assign('menus',$menus);
        $this->display();
    }
    public function add(){
        if($_POST) {
            if(!isset($_POST['name']) || !$_POST['name']) {
                return show(0,'捐赠人名或组织不能为空');
            }
            if(!isset($_POST['amount']) || !$_POST['amount']) {
                return show(0,'捐赠金额不能为空');
            }
            if(!isset($_POST['date']) || !$_POST['date']) {
                return show(0,'捐赠日期不能为空');
            }
            
            if($_POST['donationid']) {
                return $this->save($_POST);
            }
            $donationid = D("Donation")->insert($_POST);
            if($donationid) {
                return show(1,'新增成功',$donationid);
            }
            return show(0,'新增失败',$donationid);

        }else {
            $this->display();
        }
        //echo "welcome to singcms";
    }
    public function setStatus() {
        try {
            if ($_POST) {
                $id = $_POST['id'];
                $status = $_POST['status'];
                // 执行数据更新操作
                $res = D("Donation")->updateStatussById($id, $status);
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
        $donationid = $_GET['id'];

        $donation = D("Donation")->find($donationid);
        $this->assign('juan', $donation);
        $this->display();
    }
    public function save($data) {
        $donationid = $data['donationid'];
        unset($data['donationid']);
        try {
            $id = D("Donation")->updateDonationsById($donationid, $data);
            if($id === false) {
                return show(0,'修改失败');
            }
            return show(1,'修改成功');
        }catch(Exception $e) {
            return show(0,$e->getMessage());
        }

    }

}