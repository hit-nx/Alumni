<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>校友网后台管理平台</title>
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
    <link rel="stylesheet" type="text/css" href="/Public/css/page.css">

    <!-- jQuery -->
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/dialog/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <script src="/Public/js/paging.js"></script>

</head>

    



<body>
<div id="wrapper">

  <?php
 $navs = D("Menu")->getAdminMenus(); $username = getLoginUsername(); foreach($navs as $k=>$v) { if($v['c'] == 'admin' && $username != 'admin') { unset($navs[$k]); } } $index = 'index'; ?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    
    <a class="navbar-brand" >校友网内容管理平台</a>
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

	<div class="container-fluid">

	  <!-- Page Heading -->
	  <div class="row">
		<div class="col-lg-12">
		  <ol class="breadcrumb">
			  <li>
				  <i class="fa fa-dashboard"></i>  <a href="/admin.php?c=enterprise">企业管理</a>
			  </li>
			  <li class="active">
				  <i class="fa fa-table"></i>企业列表
			  </li>
		  </ol>
		</div>
	  </div>
	  <div>
		<button  id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			添加 
		</button>
	  </div>
	  <br>
	  <div class="row">
		<div class="col-lg-6">
		  <div class="table-responsive">
			<form id="singcms-listorder">
			  <table class="table table-bordered table-hover singcms-table" >
				<thead>
				  <tr>
					<th>公司名称</th>
					<th>logo路径</th>
					<th>公司官网</th>
					<th>时间</th>
					<th>操作</th>
				  </tr>
				</thead>
				<tbody>
				  <?php if(is_array($Enterprises)): $i = 0; $__LIST__ = $Enterprises;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$enterprise): $mod = ($i % 2 );++$i;?><tr>
					  <td><?php echo ($enterprise["name"]); ?></td>
					  <td><?php echo ($enterprise["picture_path"]); ?></td>
					  <td><?php echo ($enterprise["enterprise_url"]); ?></td>
					  <td><?php echo date("Y-m-d", $enterprise['time'])?></td>
					  <td>
						<span class="sing_cursor glyphicon glyphicon-edit" aria-hidden="true" id="singcms-edit" attr-id="<?php echo ($enterprise["enterprise_id"]); ?>" ></span>
						<a href="javascript:void(0)" id="singcms-delete"  attr-id="<?php echo ($enterprise["enterprise_id"]); ?>"  attr-message="删除">
						  <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
						</a>
					  </td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			  </table>
			  <nav>
				<ul>
				  <div id="page" class="page_div"></div>
				</ul>
			  </nav>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	<!-- /.container-fluid -->

  </div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script>

  $("#page").paging({
	pageNo: <?php echo ($page["pageNow"]); ?>,
	totalPage: <?php echo ($page["pageTotal"]); ?>,
	totalSize: <?php echo ($page["pageRows"]); ?>,
	callback: function(num) {
	  window.location.href = '/admin.php?c=enterprise&p=' + num;
	}
  })

  var SCOPE = {
	'add_url' : '/admin.php?c=enterprise&a=add',
	'edit_url' : '/admin.php?c=enterprise&a=edit',
	'set_status_url' : '/admin.php?c=enterprise&a=setStatus',
	'listorder_url' : '/admin.php?c=enterprise&a=listorder',
  }
</script>
<script src="/Public/js/admin/common.js"></script>

</body>

</html>