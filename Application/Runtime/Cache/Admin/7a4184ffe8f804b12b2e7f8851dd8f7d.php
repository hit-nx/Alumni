<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="/Public/css/page.css">

    <!-- jQuery -->
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/dialog/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <script src="/Public/js/paging.js"></script>
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
					  <i class="fa fa-dashboard"></i>  
					  <a href="/admin.php?c=article">文章管理</a>
				  </li>
				  <li class="active">
					  <i class="fa fa-table"></i>文章列表
				  </li>
			  </ol>
		  </div>
	  </div>
	  <!-- /.row -->
	  <div>
		  <button  id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加 
		  </button>
	  </div>
	  <br>
	  <div class="row">
		  <form action="/admin.php" method="get">
			  <div class="col-md-3">
				  <div class="input-group">
					  <span class="input-group-addon">栏目</span>
					  <select class="form-control" name="columnid">
						  <option value='' >请选择栏目</option>
						  <?php if(is_array($webSiteMenu)): foreach($webSiteMenu as $key=>$sitenav): ?><option value="<?php echo ($sitenav["column_id"]); ?>" <?php if($sitenav["column_id"] == $columnid): ?>selected="selected"<?php endif; ?>><?php echo ($sitenav["column_name"]); ?></option><?php endforeach; endif; ?>
					  </select>
				  </div>
			  </div>
			  <input type="hidden" name="c" value="article"/>
			  <input type="hidden" name="a" value="index"/>
			  <div class="col-md-3">
				  <div class="input-group">
					  <input class="form-control" name="title" type="text" placeholder="文章标题" value="<?php echo ($title); ?>"/>
					  <span class="input-group-btn">
						  <button id="sub_data" type="submit" class="btn btn-primary">
							  <i class="glyphicon glyphicon-search"></i>
						  </button>
					  </span>
				  </div>
			  </div>
		  </form>
	  </div>
	  <br>
	  <div class="row">
		  <div class="col-lg-6">
			  <div class="table-responsive">
				  <form id="singcms-listorder">
					  <table class="table table-bordered table-hover singcms-table">
						<thead>
						  <tr>
							  <!--<th width="14">排序</th>-->
							  <th>标题</th>
							  <th>来源</th>
							  <th>栏目</th>
							  <th>封面图</th>
							  <th>时间</th>
							  <th>操作</th>
						  </tr>
						</thead>
						<tbody>
						  <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><tr>
								  <!--<td><input type="checkbox" name="pushcheck" value="<?php echo ($new["ArticleID"]); ?>"></td>-->
								  <!--<td><?php echo ($new["articleid"]); ?></td>-->
								  <!--<td><input size=4 type='text'  name='listorder[<?php echo ($new["articleid"]); ?>]' value="<?php echo ($new["listorder"]); ?>"/></td>-->
								  <td><?php echo ($article["title"]); ?></td>
								  <td><?php echo ($article["source"]); ?></td>
								  <td><?php echo (getColumnName($webSiteMenu,$article["columnid"])); ?></td>
								  <td><?php echo (isThumb($article["picture_url"])); ?></td>
								  <td><?php echo ($article["publishdate"]); ?></td>
								  <td>
									  <span class="sing_cursor glyphicon glyphicon-edit" aria-hidden="true" id="singcms-edit" attr-id="<?php echo ($article["articleid"]); ?>" ></span>
									  <a href="javascript:void(0)" id="singcms-delete"  attr-id="<?php echo ($article["articleid"]); ?>"  attr-message="删除">
										  <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
									  </a>
								  </td>
							  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					  </table>
					  <nav>

						  <ul >
							  <div id="page" class="page_div"></div>
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
	$("#page").paging({
		pageNo: <?php echo ($page["pageNow"]); ?>,
		totalPage: <?php echo ($page["pageTotal"]); ?>,
		totalSize: <?php echo ($page["pageRows"]); ?>,
		callback: function(num) {
			window.location.href = '/admin.php?c=article&p=' + num;
		}
	});
	var SCOPE = {
		'edit_url' : '/admin.php?c=article&a=edit',
		'add_url' : '/admin.php?c=article&a=add',
		'set_status_url' : '/admin.php?c=article&a=setStatus',
		'sing_news_view_url' : '/index.php?c=view',
		'listorder_url' : '/admin.php?c=article&a=listorder',
		'push_url' : '/admin.php?c=article&a=push',
	};
</script>
<script src="/Public/js/admin/common.js"></script>

</body>

</html>