<?php
/**
 * Created by PhpStorm.
 * User: 96561
 * Date: 2018/3/4
 * Time: 20:37
 */
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class SearchController extends CommonController {
    public function index(){
        $conds = array();

            $conds['title'] = $_GET['title'];
            $title=$_GET['title'];


        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = 6;

        $articles = D("Article")->getArticle($conds,$page,$pageSize);
        //获取返回记录的总数
        $isNull = count($articles)==0;
        $count = D("Article")->getArticleCount($conds);

        // 分页部分 使用插件
        $pageData = array(
            'pageNow' => $page,
            'pageTotal' =>  ceil($count / $pageSize),
            'pageRows' => $count
        );
        $this->assign('title',$title);
        $this->assign('page', $pageData);
        $this->assign('articles',$articles);
        $this->assign('webSiteMenu',D("Column")->getColumn());
        $this->assign('isNull',$isNull);

        $this->display(search);
    }
}