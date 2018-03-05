<?php
/**
 * Created by PhpStorm.
 * User: 96561
 * Date: 2018/3/4
 * Time: 15:07
 */
namespace Alumni\Controller;
use Think\Controller;
class AddressController extends CommonController {
    public function index(){
        //获取id
        $periodicalid = $_GET['periodicalid'];
        //通过id获取相应id校友通讯的详细信息
        $result = D("Periodical")->find($periodicalid);
        $this->assign("periodicalDetails",$result);
        $this->display(address);
    }
}