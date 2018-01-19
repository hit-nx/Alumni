<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class DonationInfoController extends CommonController {
    public function index(){

    	$contentid = $_GET['contentid']; 

        $donationInfo = D("Conetnt")->find($contentid);

        $this->assign("donationInfo",$donationInfo);

        $this->display("donation");
    }

    public function donationList(){

        $data=array();
        if($_GET['name']) {
            $data['name'] = $_GET['name'];
            $this->assign("name",$data['name']);
        }
        $page=$_REQUEST['p']?$_REQUEST['p']:1;
        $pageSize=$_REQUEST['pageSize']?$_REQUEST['pageSize']:20;
        $donationList=D("Donation")->getDonations($data,$page,$pageSize);
        $donationsCount=D("Donation")->getDonationsCount($data);
        // 分页部分 使用插件
        $pageData = array(
            'pageNow' => $page,
            'pageTotal' =>  ceil($donationsCount / $pageSize),
            'pageRows' => $donationsCount
        );

        $this->assign('page', $pageData);
        $this->assign("donationList",$donationList);

        $this->display("donationList");
    }

}