<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class IndexController extends CommonController {
    public function index(){   

    	$campusNewsList = D("Index")->getCampusNews();
    	$alumniNewsList = D("Index")->getAlumniNews();
    	$noticeNewsList = D("Index")->getNoticeNews();
    	$donationsList = D("Index")->getDonations();
    	$hitMemoryList = D("Index")->getHitMemory();
    	$campusBeauty = D("Index")->getCampusBeauty();
    	$alumniPersonList = D("Index")->getAlumniPerson();

    	$this->assign("campusNews",$campusNewsList);
		$this->assign("alumniNews",$alumniNewsList);
		$this->assign("noticeNews",$noticeNewsList);
		$this->assign("donations",$donationsList);
		$this->assign("hitMemory",$hitMemoryList);
		$this->assign("campusBeauty",$campusBeauty);
		$this->assign("alumniPerson",$alumniPersonList);

        $this->display();
    }

}