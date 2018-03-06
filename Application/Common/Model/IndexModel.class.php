<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会主页model操作
 * @author  Noah
 */
class IndexModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('articles');
    }


    public function getCampusNews() {

        $list = $this->_db->where('columnid = 3')->order('articleid desc')->limit(8)->select();
        return $list;
    }

    public function getAlumniNews(){
    	$list = $this->_db->where('columnid = 2')->order('articleid desc')->limit(8)->select();
        return $list; 
    }

    public function getNoticeNews(){
    	$list = $this->_db->where('columnid = 4')->order('articleid desc')->limit(8)->select();
        return $list; 
    }

    public function getDonations(){

    	$list = $this->_db->where()->select();
        return $list; 
    }

    public function getAlumniPerson(){

    	$list = $this->_db->where('( columnid = 12 or columnid = 13 or columnid = 14 ) and picture_url != ""')->order('articleid desc')->limit(6)->select();
    	
        return $list; 

    }

    public function getHitMemory(){


    	$list = $this->_db->where('columnid = 18 OR columnid = 19 OR columnid = 20 ')->order('articleid desc')->limit(9)->select();

    	return $list;

    }

    public function getCampusBeauty(){

    	$list = $this->_db->where('columnid = 18 and picture_url != ""')->order('articleid desc')->limit(1)->select();
    	return $list;
    }

    //最新的图片新闻
    public function getPicNewsByColumn($columnid){

        switch ($columnid) {
            case 1:
                $list = $this->_db->where('picture_url != "" and columnid = 3')->order('articleid desc')->limit(1)->select();
                break;
            case 2:
                $list = $this->_db->where('picture_url != "" and columnid = 2')->order('articleid desc')->limit(1)->select();
                break;
            case 3:
                $list = $this->_db->where('picture_url != "" and columnid = 4')->order('articleid desc')->limit(1)->select();
                break;
            case 4:
                $list = $this->_db->where('picture_url != "" and columnid = 12 or columnid = 13 or columnid = 14 or columnid = 16')->order('articleid desc')->limit(1)->select();
                break;
            case 5:
                $list = $this->_db->where('picture_url != "" and columnid = 18 or columnid = 19 or columnid = 20')->order('articleid desc')->limit(1)->select();
                break;
        }

        return $list[0];
    }

    //排除第一条图片新闻的前三条
    public function getNewsByColumn($columnid, $picid){
        switch ($columnid) {
            case 1:
                $list = $this->_db->where('columnid = 3 and articleid !='.$picid)->order('articleid desc')->limit(3)->select();
                break;
            case 2:
                $list = $this->_db->where('columnid = 2 and articleid !='.$picid)->order('articleid desc')->limit(3)->select();
                break;
            case 3:
                $list = $this->_db->where('columnid = 4 and articleid !='.$picid)->order('articleid desc')->limit(3)->select();
                break;
            case 4:
                $list = $this->_db->where('columnid = 12 or columnid = 13 or columnid = 14 or columnid = 16 and articleid !='.$picid)->order('articleid desc')->limit(3)->select();
                break;
            case 5:
                $list = $this->_db->where('columnid = 18 or columnid = 19 or columnid = 20 and articleid !='.$picid)->order('articleid desc')->limit(3)->select();
                break;
        }

        return $list;
    }





}
