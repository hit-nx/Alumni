$(function() {
    $('#attachment_upload').uploadify({
        'swf'      : SCOPE.ajax_upload_swf,
        'uploader' : SCOPE.ajax_upload_image_url,
        'buttonText': '上传附件',
        'fileTypeDesc': '文章附件',
        'fileObjName' : 'file',
        //允许上传的文件后缀
        'fileTypeExts': '*.doc; *.xlsx; *.pdf',
        'onUploadSuccess' : function(file,data,response) {
            // response true ,false
            if(response) {
                var obj = JSON.parse(data); //由JSON字符串转换为JSON对象

                console.log(data);
                $('#' + file.id).find('.data').html(' 上传完毕');

                $("#upload_org_code_atm").attr("src",obj.data);
                $("#file_upload_attachment").attr('value',obj.data);

            }else{
                alert('上传失败');
            }
        },
    });
});
