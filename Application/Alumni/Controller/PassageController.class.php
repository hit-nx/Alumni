<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class PassageController extends CommonController {
    public function index(){

    $getArticleId = $_GET['articleid'];

    $articleInfo = D("Passage")->getArticleInfo($getArticleId);

    $this->assign("articleInfo",$articleInfo);



        $this->display("passage");
    }

}