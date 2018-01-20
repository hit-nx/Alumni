<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class OrganizationController extends CommonController {
    public function index(){

        $contentid = $_GET['contentid']; 

        $organizationInfo = D("Organization")->getOrganizationInfo($contentid);

        $this->assign("organizationInfo",$organizationInfo);

        $this->display("organization");
    }

    public function organizationList(){

        // $contentid = $_GET['contentid']; 

        // $organizationInfo = D("Organization")->getOrganizationInfo($contentid);

        // $this->assign("organizationInfo",$organizationInfo);

        $this->display("organizationList");
    }

}