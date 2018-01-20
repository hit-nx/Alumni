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

        //获取热点新闻
        $hotNewsList = D("Article")->getHotNewsList($columnid);


        $this->assign("currentColumn",$currentColumn);
        $this->assign("parentColumn",$parentColumn);
        $this->assign("brotherColumn",$brotherColumn);
        $this->assign("newsList",$newsList);

        $this->display("simpleList");
    }

}