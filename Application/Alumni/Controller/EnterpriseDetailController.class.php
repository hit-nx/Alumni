<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class EnterpriseDetailController extends CommonController {
    public function index(){

        $getEnterpriseList = D('EnterpriseInfo')->getEnterpriseList();

        $this->assign("getEnterpriseList",$getEnterpriseList);

        $this->display("enterpriseDetail");
    }

}