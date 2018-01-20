<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class CommunicationController extends CommonController {
    public function index(){

        $getCommunicationList = D('Periodical')->getCommunicationList();

        $this->assign("getCommunicationList",$getCommunicationList);

        $this->display("communication");
    }

}