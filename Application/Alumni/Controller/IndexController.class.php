<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class IndexController extends CommonController {
    public function index(){   

        //数据库取数据
        $onePicNew = D("Index")->getPicNewsByColumn(1);//校区新闻   //D()方法访问模型层
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
        $periodical = D("Periodical")->select('',6);//通讯录
        //$donationsList = D("DonationInfo")->getDonationList();//捐赠列表
        $enterpriseList = D("EnterpriseInfo")->getEnterpriseList();
        $enterpriseListLeft = D("EnterpriseInfo")->getEnterpriseListLeft();
        $enterpriseListRight = D("EnterpriseInfo")->getEnterpriseListRight();

        //向前端绑定数据
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
        //$this->assign("donationsList", $donationsList);

        $this->assign("enterpriseList", $enterpriseList);//校友企业
        $this->assign("enterpriseListLeft", $enterpriseListLeft);//校友企业
        $this->assign("enterpriseListRight", $enterpriseListRight);//校友企业
        //显示对应前端网页
        $this->display();
    }

}