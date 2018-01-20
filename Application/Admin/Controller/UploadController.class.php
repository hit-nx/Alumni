<?php
/**
 * 图片相关
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;

/**
 * 文章内容管理
 */
class UploadController extends CommonController {

    public function kindupload(){
        $upload = D("Upload");
        $res = $upload->upload();
        if($res === false) {
            return showKind(1,'上传失败');
        }
        return showKind(0,$res);
    }

}