<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>哈尔滨工业大学（威海）校友网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="/Public/css/header/header.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/index/styles.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/dayi.css"/>
    <script src="/Public/js/alumni/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- <link href="/Public/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
	<div id="headerBackgroundColor">
	    
    <div id="navi">
        <div id="logoDivHeaderImg">
            <a href="/index.php"><img src="/Public/images/index/logo.png" class="headerImg"></a>
        </div>

        <div class="right_navi">
        <div id="headerMenu">
        <ul id="menuUl">
            <li><a href="/index.php">首页</a></li>
            <li><a href="/index.php?c=detailedList&columnid=1">新闻中心</a>
                <ul>
                    <li><a href="/index.php?c=simpleList&columnid=2">校友新闻</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=3">校区新闻</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=4">通知公告</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=organization&contentid=1">校友组织</a>
                <ul>
                    <li><a href="/index.php?c=organization&contentid=1">校友会简介</a></li>
                    <li><a href="/index.php?c=organization&contentid=2">组织机构</a></li>
                    <li><a href="/index.php?c=organization&contentid=3">规章制度</a></li>
                    <li><a href="/index.php?c=organization&a=organizationList">地方校友会</a></li>
                    <li><a href="/index.php?c=organization&contentid=4">创业导师</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=detailedList&columnid=11">校友人物</a>
                <ul>
                    <li><a href="/index.php?c=simpleList&columnid=12">人物访谈</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=13">行业精英</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=14">大师风范</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=16">创业校友</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=detailedList&columnid=17">工大回忆</a>
                <ul>
                    <li><a href="/index.php?c=simpleList&columnid=18">工大美景</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=19">校友旧事</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=20">校园旧闻</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=donationInfo&content_id=5">校友捐赠</a>
                <ul>
                    <li><a href="/index.php?c=donationInfo&content_id=5">捐赠领域</a></li>
                    <li><a href="/index.php?c=donationInfo&content_id=6">鸣谢办法</a></li>
                    <li><a href="/index.php?c=donationInfo&a=donationList">捐赠名录</a></li>
                    <li><a href="/index.php?c=donationInfo&content_id=7">捐赠方式</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=detailedList&columnid=22">周年回顾</a>
                <ul>
                    <li><a href="/index.php?c=simpleList&columnid=24">新闻动态</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=25">活动公告</a></li>
                    <!-- <li><a href="/index.php?c=simpleList&columnid=22">30周年回顾</a></li> -->
                </ul>
            </li>
            <li><a href="/index.php?c=communication">校友通讯</a>
            </li>
        </ul>
        </div>

        <div id="headerSearch">
            <input id="searchContent" name="searchContent" type="text" placeholder="站内搜索" value="<?php echo ($searchContent); ?>"/>
            <img src="../Public/images/search.png" id="headerSearchBar">
        </div>
        </div>
    </div>
    </div>
</body>
<script>
    var content = document.getElementById("searchContent");

    $("#headerSearchBar").click(function(){
        if(content.value.length>0 &&content.value.trim().length>0){
            window.location.href = '/index.php?c=search&title='+content.value;
        }
        else{
            alert("输入不能为空");
        }
    })
    $('#searchContent').keypress(function(event){
        var keynum = (event.keyCode ? event.keyCode : event.which);
        if(keynum == '13'){
            $("#headerSearchBar").click();
        }
    });
</script>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- 以最高版本ie渲染，chrome版本为1开启chrome frame -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 适应屏幕宽度 -->
	<link href="/Public/css/detailedList/dentalListStyle.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css/detailedList/reset.css"  rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="/Public/css/page.css">


  <script type="text/javascript" src="/Public/js/alumni/menuFix.js"></script>
	<script src="/Public/js/alumni/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="/Public/js/alumni/listIndex.js"></script>
  <script src="/Public/js/paging.js"></script>
	<title></title>
</head>
<body>
		<div class="ahead">&nbsp;</div>

<!-- 		<div class=toppic>
			<span class="black"></span>
			<h1>——— <?php echo ($currentColumn["column_name"]); ?> ———</h1>
		</div> -->
		
	<div class=wrap2>
<!-- 		<div class="position">
			<p>
				<img src="/Public/images/detailedList/position.png">当前位置： <a href="/index.php">首页</a>><a href="#"><?php echo ($currentColumn["column_name"]); ?></a>
			</p>
		</div> -->
		
		<ul class=class>
            <?php if(is_array($childColumns)): foreach($childColumns as $key=>$childColumnsItems): ?><li>
					<a href="/index.php?c=simpleList&columnid=<?php echo ($childColumnsItems["column_id"]); ?>"><?php echo ($childColumnsItems["column_name"]); ?></a>
				</li><?php endforeach; endif; ?>
		</ul>

		<div class=news>
			<div class=new1>
				<img src="<?php echo ($getDisplayedNews[0]['picture_url']); ?>">
				<div class="cont fr">
					<span class="label fl"><?php echo getColumnNameById($getDisplayedNews[0]['columnid']) ?></span>
					<span class="time fl"><?php echo date("Y-m-d",$getDisplayedNews[0]['publishdate']) ?></span>
					<a class="fl cont_title" href="/index.php?c=passage&articleid=<?php echo ($getDisplayedNews[0]['articleid']); ?>"><?php echo ($getDisplayedNews[0]['title']); ?></a>
					<p class=fl>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $contentes = strip_tags($getDisplayedNews[0]['content']) ?></p>
					<a class=go href="">查看详情>></a>
				</div>
			</div>
			<div class=new2>
				<img src="<?php echo ($getDisplayedNews[1]['picture_url']); ?>">
				<div class="cont fl">
					<span class="label fl"><?php echo getColumnNameById($getDisplayedNews[1]['columnid']) ?></span>
					<span class="time fl"><?php echo date("Y-m-d",$getDisplayedNews[1]['publishdate']) ?></span>
					<a class="fl cont_title" href="/index.php?c=passage&articleid=<?php echo ($getDisplayedNews[1]['articleid']); ?>"><?php echo ($getDisplayedNews[1]['title']); ?></a>
					<p class=fl>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $contentes = strip_tags($getDisplayedNews[1]['content']) ?></p>
					<a class=go href="">查看详情>></a>
				</div>
			</div>
		</div>
		<div class=hot>
			<h4>热点新闻</h4>
			<ul>
				<?php if(is_array($hotNewsList)): $i = 0; $__LIST__ = $hotNewsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><li>
						<a class=fl href="/index.php?c=passage&articleid=<?php echo ($news['articleid']); ?>" ><?php echo ($news['title']); ?></a> 
						<span class="time1 fl"><?php echo date("Y-m-d",$news['publishdate']) ?></span>
						<p class=good><?php echo ($news['visitcount']); ?></p>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class=main>
			<span class=line1></span>
			<span class=line2></span>
			<span class=line3></span>
			<span class=line4></span>
			<h1>新闻概要</h1>
			<ul>
				<?php if(is_array($getNewsList)): $i = 0; $__LIST__ = $getNewsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><li>
						<div class=time_area>
							<!--年月-->
							<span class=time_month><?php $time = date("Y-m-d",$news['publishdate']); echo substr($time,0,7) ?><br></span>
							<!--日-->
							<span class=time_date><?php echo substr($time,8,2) ?>日</span>
						</div>
						<div class=word1 id=word1>
								<!--标题-->
							<a href="/index.php?c=passage&articleid=<?php echo ($news['articleid']); ?>" name=title><?php echo ($news['title']); ?></a>
							    <!--内容-->
							<p name=content><?php echo $contentes = strip_tags($news['content']) ?></p>
							    <!--分区-->
							<span class=label name=label><?php echo getColumnNameById($news['columnid']) ?></span>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class=change>
     	<div id="page" class="page_div"></div>
    </div>
	</div>
</body>
<script>
	$("#page").paging({
		pageNo: <?php echo ($page["pageNow"]); ?>,
		totalPage: <?php echo ($page["pageTotal"]); ?>,
		totalSize: <?php echo ($page["pageRows"]); ?>,
		callback: function(num) {
			var columnid = <?php echo ($currentColumn["column_id"]); ?>;
			window.location.href = '/index.php?c=detailedList&p=' + num + "&columnid=" +columnid;
		}
	});
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/Public/css/footer/footer.css" type="text/css" />
</head>
<body>
    <footer name=fixwide>
        <div class=wrap3>
            <p></p>
    <!--         <p>校友会的三行介绍，独家会觉得好似独家试爱和第哦啊是京东啊时间阿迪斯教授第哈怂的的巴萨和计划第哦啊是家啊是哦啊是的话就看少i上帝就是电话覅和发河北无办法对你撒娇好的</p> -->
            <dl class=connect>
                <!-- <dt>联系方式</dt> -->
                <dd>地址：威海市环翠区文化西路2号</dd>
                <dd>邮编：264209</dd>
                <dd>电话：80008208820</dd>
            </dl>
            <dl class=webs>
                <!-- <dt><a style="text-decoration: none; color: #fff">快速链接</a></dt> -->
                <dd><a href="http://www.hitwh.edu.cn/" style="text-decoration: none; color: #fff">学校官网</a></dd>
                <dd><a href="/admin.php" style="text-decoration: none; color: #fff">管理入口</a></dd>
    <!--             <dd><a href="http://news.hitwh.edu.cn/news_list.asp?id=13" style="text-decoration: none; color: #fff">招标信息</a></dd>
                <dd><a href="" style="text-decoration: none; color: #fff">工大小威</a></dd>
                <dd><a href="http://bbs.ghtt.net/forum.php" style="text-decoration: none; color: #fff">观海听涛论坛</a></dd> -->
                
            </dl>
            <!-- <dl class=others> -->
                <!-- <dt><a href="/index.php?c=donationInfo&content_id=5" style="text-decoration: none; color: #fff">捐赠</a></dt> -->
                <!-- <dd><a href="/index.php?c=donationInfo&content_id=5" style="text-decoration: none; color: #fff">管理方法</a></dd> -->
                <!-- <dd><a href="/index.php?c=donationInfo&content_id=6" style="text-decoration: none; color: #fff">鸣谢方法</a></dd> -->

                <!-- <dd class=otherweb> -->
                    <!-- <a href="" style="text-decoration: none; color: #fff"> &nbsp&nbsp&nbsp&nbsp其他校园网链接</a>
                    <ul>
                        <li><a href="">web1</a></li>
                        <li><a href="">web2</a></li>
                        <li><a href="">web3</a></li>
                    </ul>
                </dd> -->
            <!-- </dl> -->
        </div>
    </footer>
</body>
</html>