<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class DetailedListController extends CommonController {
    public function index(){

        $columnid = $_GET['columnid'];

        $date_yearAndMouth = array();
        $date_day = array(); 

        //获取当前父栏目的子栏目
        $childColumns = D("DetailedList")->getChildColumns($columnid);

        //获取当前的父栏目
        $currentColumn = D("Column")->find($columnid);

        //获取当前父栏目的子栏目的id
        $childColumnsId = D("DetailedList")->getChildColumnsId($columnid);

        //新闻展示内容
        $getDisplayedNews = D("Article")->getDisplayedNews($childColumnsId);

        //新闻列表内容
        $getNewsList = D("Article")->getNewsList($childColumnsId);

        //获取热点新闻
        $hotNewsList = D("Article")->getMoreHotNewsList($childColumnsId);
        echo $hotNewsList[1]["title"];

        // $this->assign("childColumns",$childColumns);
        // $this->assign("currentColumn",$currentColumn);
        // $this->assign("getDisplayedNews",$getDisplayedNews);
        // $this->assign("getNewsList",$getNewsList);

        // $this->display("detailedList");
    }

}