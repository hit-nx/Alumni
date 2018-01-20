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

    	$otherOrganizations = D("Alumnis")->getOtherOrganizations();

    	$this->assign("otherOrganizations",$otherOrganizations);

        // $contentid = $_GET['contentid']; 

        // $organizationInfo = D("Organization")->getOrganizationInfo($contentid);

        // $this->assign("organizationInfo",$organizationInfo);

        $this->display("organizationList");
    }

    public function otherOrganizationInfo(){

        $alumnis_id = $_GET['alumnis_id']; 

    	$otherOrganizationContent = D("Alumnis")->getOrganizationContent($alumnis_id);

    	$this->assign("otherOrganizationContent",$otherOrganizationContent);

    	$this->display("otherOrganization");

    }

}