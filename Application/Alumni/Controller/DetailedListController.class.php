<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class DetailedListController extends CommonController {
    public function index(){

        $columnid = $_GET['columnid']; 

        $childColumns = D("DetailedList")->getChildColumns($columnid);

        $this->assign("childColumns",$childColumns);

        $this->display("detailedList");
    }



}