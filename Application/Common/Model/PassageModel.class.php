<?php
namespace Common\Model;
use Think\Model;

/**
 * 校友会文章详情页model操作
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

    	$this->_db = M('donations');

    	$list = $this->_db->where()->select();
        return $list; 
    }

    public function getAlumniPerson(){

    	$this->_db = M('articles');

    	$list = $this->_db->where('( columnid = 12 or columnid = 13 or columnid = 14 ) and picture_url != ""')->order('articleid desc')->limit(6)->select();
    	
        return $list; 

    }

    public function getHitMemory(){

    	$this->_db = M('articles');

    	$list = $this->_db->where('columnid = 18 OR columnid = 19 OR columnid = 20 ')->order('articleid desc')->limit(9)->select();

    	return $list;

    }

    public function getCampusBeauty(){

    	$this->_db = M('articles');

    	$list = $this->_db->where('columnid = 18 and picture_url != ""')->order('articleid desc')->limit(1)->select();

    	return $list;

    }

    	





}
