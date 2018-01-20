<?php
namespace Common\Model;
use Think\Model;

class DonationModel extends  Model {
    private $_db = '';
    public function __construct() {
        $this->_db = M('donations');
    }



    public function insert($data = array()) {
        if(!$data || !is_array($data)) {
            return 0;
        }
 //如果捐赠时间是时间戳的话加=>       $data['date']  = time();
        return $this->_db->add($data);
    }

    // public function uuu(){
    //     $articles = $this->_db->select();
    //     for ($i = 600; $i < 780; $i++) { 
    //         $articles[$i]['date'] = strtotime($articles[$i]['date']);
    //         M('donations_copy')->field('date')->data($articles[$i])->add();
    //     }
    // }

    public function getDonations($data,$page,$pageSize=10) {
        $conditions = $data;
        if(isset($data['name']) && $data['name']) {
            $conditions['name'] = array('like','%'.$data['name'].'%');
        }
        $offset = ($page - 1) * $pageSize;
        $list = $this->_db->where($conditions)->order('donationid desc')->limit($offset,$pageSize)->select();
        return $list;
    }

    public function getDonationsCount($data= array()) {
        $conditions = $data;
        if(isset($data['name']) && $data['name']) {
            $conditions['name'] = array('like','%'.$data['name'].'%');
        }
        return $this->_db->where($conditions)->count();
    }
    public function find($id){
        if(!$id || !is_numeric($id)) {
            return array();
        }
        return $this->_db->where('donationid='.$id)->find();
    }
    public function updateDonationsById($id, $data) {


        if(!$data || !is_array($data)) {
            throw_exception('更新的数据不合法');
        }

        return $this->_db->where('donationid='.$id)->save($data);

    }

    public function updateStatussById($id, $status) {
        if(!is_numeric($id) || !$id) {
            throw_exception("donationid不合法");
        }
        
        return $this->_db->where('donationid='.$id)->delete();
     }
     
    public function updateMenuListorderById($id, $listorder) {
        if(!$id || !is_numeric($id)) {
            throw_exception('ID不合法');
        }

        $data = array(
            'listorder' => intval($listorder),
        );

        return $this->_db->where('menu_id='.$id)->save($data);
    }

    
    public function getAdminDonation() {
         $data = array(
            'status' => array('neq',-1),
            'type' => 1,
        );       

        return $this->_db->where($data)->select();
    }
 
    public function getBarMenus() {
        $data = array(
            'status' => 1,
            'type' => 0,
        );

        $res = $this->_db->where($data)
            ->order('listorder desc,menu_id desc')
            ->select();
        return $res;
    }

    public function getMenus($data,$page,$pageSize=10){
        $data['status']=array('neq',-1);
        $offset=($page-1)*$pageSize;
        $list=$this->_db->where($data)->order('DonationId desc')->limit($offset,$pageSize)->select();
        return $list;
    }

    public function getMenusCount($data=array()){
        $data['status']=array('neq',-1);
        return $this->_db->where($data)->count();
    }

}