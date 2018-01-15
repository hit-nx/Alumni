<?php
namespace Alumni\Controller;
use Think\Controller;
use Think\Exception;

class PassageController extends CommonController {
    public function index(){

        $this->display("passage");
    }

}