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

        //获取热点新闻
        $hotNewsList = D("Article")->getHotNewsList($columnid);

        //分页
        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = 6;

        $newsList = D("Article")->getArticle($_GET,$page,$pageSize);

        $count = D("Article")->getArticleCount($_GET);

        // 分页部分 使用插件
        $pageData = array(
            'pageNow' => $page,
            'pageTotal' =>  ceil($count / $pageSize),
            'pageRows' => $count
        );
        $this->assign('page', $pageData);        



        $this->assign("currentColumn",$currentColumn);
        $this->assign("parentColumn",$parentColumn);
        $this->assign("brotherColumn",$brotherColumn);
        $this->assign("newsList",$newsList);
        $this->assign("hotNewsList",$hotNewsList);

        $this->display("simpleList");
    }

}