<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class PassageController extends CommonController {
    public function index(){

	    $getArticleId = $_GET['articleid'];

        $passage = D("Passage")->getArticleById($getArticleId);

	    $articleInfo = D("Passage")->getArticleInfo($getArticleId);

        //获得当前栏目
        $currentColumn = D("Column")->find($passage['columnid']);

        //获得当前栏目的父栏目
        $parentColumn = D("Column")->find($currentColumn['column_parentid']);

        //得到当前栏目的兄弟栏目（包括自己）
        $brotherColumn = D("SimpleList")->getChildColumns($parentColumn['column_id']);

	    $this->assign("articleInfo",$articleInfo);
        $this->assign("parentColumn",$parentColumn);
        $this->assign("brotherColumn",$brotherColumn);

		
        //echo $currentColumn['column_name'];
        $this->display("passage");
    }

    public function like(){
    	$articleid = $_POST['articleid'];
    	D("Passage")->like($articleid);
    	return "";
    }

}