/**
 * 前端登录业务类
 * @author MrssiP
 */

$(".btn-lg").click(function(){
    var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();

        if(!username) {
            dialog.error('用户名不能为空');
        }
        if(!password) {
            dialog.error('密码不能为空');
        }

        // var url = "/admin.php?c=login&a=check";
        // var data = {'username':username,'password':password};
        
        // // 执行异步请求  $.post
        // $.post(url,data,function(result){
            // if(result.status == 0) {
            //     return dialog.error(result.message);
            // }
            // if(result.status == 1) {
            //     return dialog.success(result.message, '/admin.php?c=index');
            // }

        // },'JSON');

        // 通过Ajax方法
        $.ajax({
            type: "POST",
            url: "/admin.php?c=login&a=check",
            dataType: "json",
            data: {
                'username':username,
                'password':password
            },
            success: function(result){
                if(result.status == 0) {
                    return dialog.error(result.message);
                }
                if(result.status == 1) {
                    return dialog.success(result.message, '/admin.php?c=login');
                }
            },
            error: function(){
                alert("网络连接错误！");
            }
        });
});