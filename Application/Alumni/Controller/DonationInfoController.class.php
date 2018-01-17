<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class DonationInfoController extends CommonController {
    public function index(){

    	$contentid = $_GET['contentid']; 

        $donationInfo = D("DonationInfo")->getDonationInfo($contentid);

        $this->assign("donationInfo",$donationInfo);

        $this->display("donation");
    }

    public function donationList(){

    	$donationList = D("DonationInfo")->getDonationList();

		$this->assign("donationList",$donationList);

    	$this->display("donationList");
    }

}