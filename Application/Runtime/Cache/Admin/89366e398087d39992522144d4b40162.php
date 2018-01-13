<?php if (!defined('THINK_PATH')) exit();?>  <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>宁熙后台管理平台</title>
    <!-- Bootstrap Core CSS -->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/Public/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/Public/css/sing/common.css" />
    <link rel="stylesheet" href="/Public/css/party/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/party/uploadify.css">

    <!-- jQuery -->
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/dialog/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <script type="text/javascript" src="/Public/js/party/jquery.uploadify.js"></script>

</head>

    



<body>
<div id="wrapper">

  <?php
 $navs = D("Menu")->getAdminMenus(); $username = getLoginUsername(); foreach($navs as $k=>$v) { if($v['c'] == 'admin' && $username != 'admin') { unset($navs[$k]); } } $index = 'index'; ?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    
    <a class="navbar-brand" >宁熙内容管理平台</a>
  </div>
  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
    
    
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo getLoginUsername()?> <b class="caret"></b></a>
      <ul class="dropdown-menu">
<!--         <li>
          <a href="/admin.php?c=admin&a=personal"><i class="fa fa-fw fa-user"></i> 个人中心</a>
        </li> -->
       
        <li class="divider"></li>
        <li>
          <a href="/admin.php?c=login&a=loginout"><i class="fa fa-fw fa-power-off"></i> 退出</a>
        </li>
      </ul>
    </li>
  </ul>
  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav nav_list">
      <li <?php echo (getActive($index)); ?>>
        <a href="/admin.php"><i class="fa fa-fw fa-dashboard"></i> 首页</a>
      </li>
      <?php if(is_array($navs)): $i = 0; $__LIST__ = $navs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navo): $mod = ($i % 2 );++$i;?><li <?php echo (getActive($navo["c"])); ?>>
        <a href="<?php echo (getAdminMenuUrl($navo)); ?>"><i class="fa fa-fw fa-bar-chart-o"></i> <?php echo ($navo["name"]); ?></a>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
  </div>
  <!-- /.navbar-collapse -->
</nav>
  <div id="page-wrapper">

    <div class="container-fluid" >

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">

          <ol class="breadcrumb">
            <li>
              <i class="fa fa-dashboard"></i>  <a href="/admin.php?c=alumnis">校友会管理</a>
            </li>
            <li class="active">
              <i class="fa fa-table"></i> 校友会列表
            </li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <div>
        <button  id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
          添加 
        </button>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="table-responsive">
            <form id="singcms-listorder">
              <table class="table table-bordered table-hover singcms-table">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>标题</th>
                  <th>时间</th>
                  <th>显示</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($alumnis)): $i = 0; $__LIST__ = $alumnis;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$alumni): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($alumni["alumnis_id"]); ?></td>
                    <td><?php echo ($alumni["title"]); ?></td>
                    <td><?php echo (date("Y-m-d H:i",$alumni["createtime"])); ?></td>
                    <td>
                      <span  attr-status="<?php if($alumni['status'] == 1): ?>0<?php else: ?>1<?php endif; ?>"  attr-id="<?php echo ($alumni["alumnis_id"]); ?>" class="sing_cursor singcms-on-off" id="singcms-on-off" ><?php echo (status($alumni["status"])); ?>
                      </span>
                    </td>
                    <td>
                      <span class="sing_cursor glyphicon glyphicon-edit" aria-hidden="true" id="singcms-edit" attr-id="<?php echo ($alumni["alumnis_id"]); ?>" >
                      </span>
                      <a href="javascript:void(0)" id="singcms-delete"  attr-id="<?php echo ($alumni["alumnis_id"]); ?>"  attr-message="删除">
                        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">
                        </span>
                      </a>
<!--                       <a 
                      target="_blank" 
                      href="/index.php?c=detail&a=view&id=<?php echo ($alumni["alumnis_id"]); ?>" 
                      class="sing_cursor glyphicon glyphicon-eye-open" 
                      aria-hidden="true" >
                      </a> -->
                    </td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                </tbody>
              </table>
              <nav>
                <ul >
                  <?php echo ($pageres); ?>
                </ul>
              </nav>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script>
  var SCOPE = {
    'edit_url' : '/admin.php?c=alumnis&a=edit',
    'add_url' : '/admin.php?c=alumnis&a=add',
    'set_status_url' : '/admin.php?c=alumnis&a=setStatus',
    'sing_news_view_url' : '/index.php?c=view',
  }
</script>
<script src="/Public/js/admin/common.js"></script>

</body>

</html>