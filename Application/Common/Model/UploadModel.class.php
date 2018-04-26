<?php
namespace Common\Model;
use Think\Model;

/**
 * 上传图片类
 * @author  singwa
 */
class UploadModel extends Model {
    private $_uploadObj = '';
    private $_uploadImageData = '';

    const UPLOAD = 'upload';

    public function __construct() {
        $this->_uploadObj = new  \Think\Upload();

        $this->_uploadObj->maxSize   =  52428800;
        $this->_uploadObj->rootPath = './'.self::UPLOAD.'/';
        $this->_uploadObj->subName = date(Y) . '/' . date(m) .'/' . date(d);
    }

    public function fileUpload() {
        $res = $this->_uploadObj->upload();

        if($res) {
            // foreach ($res as $key => $value) {
            //     $key['path'] = '/' .self::UPLOAD . '/' . $key['savepath'] . $key['savename'];
            // }
            return $res;
            // return '/' .self::UPLOAD . '/' . $res['imgFile']['savepath'] . $res['imgFile']['savename'];
        }else{
            return false;
        }
    }

    public function upload() {
        $res = $this->_uploadObj->upload();
        if($res) {
            return '/' .self::UPLOAD . '/' . $res['imgFile']['savepath'] . $res['imgFile']['savename'];
        }else{
            return false;
        }
    }

    public function getPath($info){
        return '/' .self::UPLOAD . '/' . $info['savepath'] . $info['savename'];
    }

}
