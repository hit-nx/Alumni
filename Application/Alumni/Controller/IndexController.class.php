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

        $onePicNew = D("Index")->getPicNewsByColumn(1);//校区新闻
        $twoPicNew = D("Index")->getPicNewsByColumn(2);//校友新闻
        $threePicNew = D("Index")->getPicNewsByColumn(3);//通知公告
        $fourPicNew = D("Index")->getPicNewsByColumn(4);//校友人物
        $fivePicNew = D("Index")->getPicNewsByColumn(5);//工大回忆

        $oneNews = D("Index")->getNewsByColumn(1, $onePicNew['articleid']);//校区新闻
        $twoNews = D("Index")->getNewsByColumn(2, $twoPicNew['articleid']);//校友新闻
        $threeNews = D("Index")->getNewsByColumn(3, $threePicNew['articleid']);//通知公告
        $fourNews = D("Index")->getNewsByColumn(4, $fourPicNew['articleid']);//校友人物
        $fiveNews = D("Index")->getNewsByColumn(5, $fivePicNew['articleid']);//工大回忆

        $alumniList = D("Alumnis")->select();//校友组织
        $periodical = D("Periodical")->getCommunicationList();//通讯录
        $donationsList = D("DonationInfo")->getDonationList();//捐赠列表

        $this->assign("onePicNew", $onePicNew);
        $this->assign("twoPicNew", $twoPicNew);
        $this->assign("threePicNew", $threePicNew);
        $this->assign("fourPicNew", $fourPicNew);
        $this->assign("fivePicNew", $fivePicNew);
        $this->assign("oneNews", $oneNews);
        $this->assign("twoNews", $twoNews);
        $this->assign("threeNews", $threeNews);
        $this->assign("fourNews", $fourNews);
        $this->assign("fiveNews", $fiveNews);

        $this->assign("alumniList", $alumniList);
        $this->assign("periodical", $periodical);
        $this->assign("donationsList", $donationsList);

        $this->display();
    }

}