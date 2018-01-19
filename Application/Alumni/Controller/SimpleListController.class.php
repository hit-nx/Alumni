<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class SimpleListController extends CommonController {
    public function index(){

        $columnid = $_GET['columnid'];

        $date_yearAndMouth = array();
        $date_day = array(); 

        //获得当前栏目
        $currentColumn = D("Column")->find($columnid);

        //获得当前栏目的父栏目
        $parentColumn = D("Column")->find($currentColumn['column_parentid']);

        //得到当前栏目的兄弟栏目（包括自己）
        $brotherColumn = D("SimpleList")->getChildColumns($parentColumn['column_id']);

        //根据栏目id获取文章
        $newsList = D("Article")->getNewsByColumnId($columnid);


        // //获取当前父栏目的子栏目
        // $childColumns = D("DetailedList")->getChildColumns($columnid);

        // //获取当前的父栏目
        // $currentColumn = D("Column")->find($columnid);

        // //获取当前父栏目的子栏目的id
        // $childColumnsId = D("DetailedList")->getChildColumnsId($columnid);

        // //新闻展示内容
        // $getDisplayedNews = D("Article")->getDisplayedNews($childColumnsId);

        // //新闻列表内容
        // $getNewsList = D("Article")->getNewsList($childColumnsId);

        $this->assign("currentColumn",$currentColumn);
        $this->assign("parentColumn",$parentColumn);
        $this->assign("brotherColumn",$brotherColumn);
        $this->assign("newsList",$newsList);

        // $this->assign("childColumns",$childColumns);
        // $this->assign("currentColumn",$currentColumn);
        // $this->assign("getDisplayedNews",$getDisplayedNews);
        // $this->assign("getNewsList",$getNewsList);

        $this->display("simpleList");
    }

}