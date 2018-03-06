<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>哈尔滨工业大学（威海）校友网</title>
	<link rel="stylesheet" href="/Public/css/header/header.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/index/styles.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/dayi.css"/>
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div id="headerBackgroundColor">
	    <div id="logoDivHeaderImg">
        <img src="/Public/images/index/logo.png" class="headerImg">
    </div>

    <div id="headerSearch">

        <input id="searchContent" name="searchContent" type="text" placeholder="站内搜索" value="<?php echo ($searchContent); ?>"/>
        <img src="../Public/images/search.png" id="headerSearchBar">
    </div>

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
            <li><a href="">校友组织</a>
                <ul>
                    <li><a href="/index.php?c=organization&contentid=1">校友会简介</a></li>
                    <li><a href="/index.php?c=organization&contentid=2">组织机构</a></li>
                    <li><a href="/index.php?c=organization&contentid=3">规章制度</a></li>
                    <li><a href="#">地方校友组织</a></li>
                    <li><a href="/index.php?c=organization&contentid=4">校友创业导师</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=detailedList&columnid=11">校友人物</a>
                <ul>
                    <li><a href="/index.php?c=simpleList&columnid=12">人物访谈</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=13">行业精英</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=14">大师风范</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=15">海外情缘</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=16">校内学子</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=detailedList&columnid=17">工大回忆</a>
                <ul>
                    <li><a href="/index.php?c=simpleList&columnid=18">工大美景</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=19">校友旧事</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=20">校园旧闻</a></li>
                </ul>
            </li>
            <li><a href="#about">校友捐赠</a>
                <ul>
                    <li><a href="/index.php?c=donationInfo&contentid=5">捐赠领域</a></li>
                    <li><a href="/index.php?c=donationInfo&contentid=6">鸣谢办法</a></li>
                    <li><a href="/index.php?c=donationInfo&a=donationList">捐赠名录</a></li>
                    <li><a href="/index.php?c=donationInfo&contentid=7">捐赠方式</a></li>
                </ul>
            </li>
            <li><a href="#contact">周年回顾</a>
                <ul>
                    <li><a href="#about">新闻动态</a></li>
                    <li><a href="#about">活动公告</a></li>
                    <li><a href="#about">30周年回顾</a></li>
                </ul>
            </li>
            <li><a href="#news">校友通讯</a>
            </li>
        </ul>
    </div>
    </div>
</body>
<script>
    var content = document.getElementById("searchContent");
    
        document.getElementById("headerSearchBar").onclick=function(){
            if(content.value.length>0 &&content.value.trim().length>0){
                window.location.href = '/index.php?c=search&title='+content.value;
            }
            else{
                alert("输入不能为空"); 
            }
        };
   
</script>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- 以最高版本ie渲染，chrome版本为1开启chrome frame -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 适应屏幕宽度 -->
	<link href="/Public/css/simpleList/horizontal.css"  rel="stylesheet" type="text/css" />
	<link href="/Public/css/simpleList/simpleListStyle.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css/simpleList/reset.css"  rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/Public/js/alumni/menuFix.js"></script>
	<script src="/Public/js/alumni/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="/Public/js/alumni/listIndex.js"></script>
	<title></title>
</head>
<body>
<<<<<<< HEAD

	<div class="ahead">——————&nbsp;&nbsp;&nbsp;<?php echo ($parentColumn["column_name"]); ?>&nbsp;&nbsp;&nbsp;——————</div>
	<div class=wrap2>
		<div class="position">
			<p><img src="/Public/images/simpleList/position.png">当前位置： <a href="/index.php">首页</a> > <a href="/index.php?c=detailedList&columnid=<?php echo ($parentColumn["column_id"]); ?>"><?php echo ($parentColumn["column_name"]); ?></a>><a href="#"><?php echo ($currentColumn["column_name"]); ?></a></p>
=======
		<div class=toppic>
			<span class="black"></span>
			<h1>——— <?php echo ($parentColumn["column_name"]); ?> ———</h1>
			<h3>News</h3>
>>>>>>> eddf7ec1fe794ac296fd0244cb3d771abf69a98b
		</div>
	<div class=wrap2>
		<p><img src="/Public/images/simpleList/position.png">当前位置： <a href="/index.php">首页</a> > <a href="detailListIndex.html"><?php echo ($parentColumn["column_name"]); ?></a>><a href="#"><?php echo ($currentColumn["column_name"]); ?></a></p>
		<ul class=class>

            <?php if(is_array($brotherColumn)): foreach($brotherColumn as $key=>$brotherColumnItems): ?><li><a href="/index.php?c=simpleList&columnid=<?php echo ($brotherColumnItems["column_id"]); ?>"><?php echo ($brotherColumnItems["column_name"]); ?></a></li><?php endforeach; endif; ?>
		</ul>
		<div class=hot>
			<h4>热点新闻</h4>
			<ul>
				<span class=first>
					<img class=fl src="img/book.png">
					<a class=fl href="passage.html" >{校友爱心捐书活动倡议书}</a> 
					<p class="fl words">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp峥嵘三十载，桃李遍五洲。哈工大（威海）自建校以来，已...</p>
					<span class="time1 fl">2017-11-16</span>
					<p class=good>666</p>
				</span>
				<li>
					<a class=fl href="passage.html" >校友爱心捐书活动倡议书</a> 
					<div class="fl">
						<span class="time1 fl">2017-11-16</span>
					    <p class=good>666</p>
					</div>
				</li>
				<li>
					<a class=fl href="passage.html" >校友爱心捐书活动倡议书</a> 
					<div class="fl">
						<span class="time1 fl">2017-11-16</span>
					    <p class=good>666</p>
					</div>
				<li>
					<a class=fl href="passage.html" >校友爱心捐书活动倡议书</a> 
					<div class="fl">
						<span class="time1 fl">2017-11-16</span>
					    <p class=good>666</p>
					</div>
				</li>
				<li>
					<a class=fl href="passage.html" >校友爱心捐书活动倡议书</a> 
					<div class="fl">
						<span class="time1 fl">2017-11-16</span>
					    <p class=good>666</p>
					</div>
				</li>
				<li>
					<a class=fl href="passage.html" >校友爱心捐书活动倡议书</a> 
					<div class="fl">
						<span class="time1 fl">2017-11-16</span>
					    <p class=good>666</p>
					</div>
				</li>
				<li>
					<a class=fl href="passage.html" >校友爱心捐书活动倡议书</a> 
					<div class="fl">
						<span class="time1 fl">2017-11-16</span>
					    <p class=good>666</p>
					</div>
				</li>
				<li>
					<a class=fl href="passage.html" >校友爱心捐书活动倡议书</a> 
					<div class="fl">
						<span class="time1 fl">2017-11-16</span>
					    <p class=good>666</p>
					</div>
				</li>
				<li>
					<a class=fl href="passage.html" >校友爱心捐书活动倡议书</a> 
					<div class="fl">
						<span class="time1 fl">2017-11-16</span>
					    <p class=good>666</p>
					</div>
				</li>
				<li>
					<a class=fl href="passage.html" >校友爱心捐书活动倡议书</a> 
					<div class="fl">
						<span class="time1 fl">2017-11-16</span>
					    <p class=good>666</p>
					</div>
				</li>
			</ul>
		</div>
		<div class=main>
			<span class=line1></span>
			<span class=line2></span>
			<span class=line3></span>
			<span class=line4></span>
			<h1>新闻概要</h1>
			<ul>
				<li>
					<div class=time_area>
						<span class=time_month><?php echo substr($newsList[0]['publishdate'],0,7) ?><br></span>
						<span class=time_date><?php echo substr($newsList[0]['publishdate'],8,2) ?>日</span>
					</div>
					<div class=word1 id=word1>
					<a href="/index.php?c=passage&articleid=<?php echo ($newsList[0]['articleid']); ?>" name=title><?php echo ($newsList[0]['title']); ?></a>
					<p name=content>巴拉巴拉巴拉吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼多撒后即可户口</p>
					<span class=label name=label><?php echo getColumnNameById($newsList[0]['columnid']) ?></span>
				</div>
				</li>
				<li>
					<div class=time_area>
						<span class=time_month><?php echo substr($newsList[1]['publishdate'],0,7) ?><br></span>
						<span class=time_date><?php echo substr($newsList[1]['publishdate'],8,2) ?>日</span>
					</div>
					<div class=word1 id=word1>
					<a href="/index.php?c=passage&articleid=<?php echo ($newsList[1]['articleid']); ?>" name=title><?php echo ($newsList[1]['title']); ?></a>
					<p name=content>巴拉巴拉巴拉吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼多撒后即可户口</p>
					<span class=label name=label><?php echo getColumnNameById($newsList[1]['columnid']) ?></span>
				</div>
				</li>
				<li>
					<div class=time_area>
						<span class=time_month><?php echo substr($newsList[2]['publishdate'],0,7) ?><br></span>
						<span class=time_date><?php echo substr($newsList[2]['publishdate'],8,2) ?>日</span>
					</div>
					<div class=word1 id=word1>
					<a href="/index.php?c=passage&articleid=<?php echo ($newsList[2]['articleid']); ?>" name=title><?php echo ($newsList[2]['title']); ?></a>
					<p name=content>巴拉巴拉巴拉吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼多撒后即可户口</p>
					<span class=label name=label><?php echo getColumnNameById($newsList[2]['columnid']) ?></span>
				</div>
				</li>
				<li>
					<div class=time_area>
						<span class=time_month><?php echo substr($newsList[3]['publishdate'],0,7) ?><br></span>
						<span class=time_date><?php echo substr($newsList[3]['publishdate'],8,2) ?>日</span>
					</div>
					<div class=word1 id=word1>
					<a href="/index.php?c=passage&articleid=<?php echo ($newsList[3]['articleid']); ?>" name=title><?php echo ($newsList[3]['title']); ?></a>
					<p name=content>巴拉巴拉巴拉吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼多撒后即可户口</p>
					<span class=label name=label><?php echo getColumnNameById($newsList[3]['columnid']) ?></span>
				</div>
				</li>
				<li>
					<div class=time_area>
						<span class=time_month><?php echo substr($newsList[4]['publishdate'],0,7) ?><br></span>
						<span class=time_date><?php echo substr($newsList[4]['publishdate'],8,2) ?>日</span>
					</div>
					<div class=word1 id=word1>
					<a href="/index.php?c=passage&articleid=<?php echo ($newsList[4]['articleid']); ?>" name=title><?php echo ($newsList[4]['title']); ?></a>
					<p name=content>巴拉巴拉巴拉吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼多撒后即可户口</p>
					<span class=label name=label><?php echo getColumnNameById($newsList[4]['columnid']) ?></span>
				</div>
				</li>
				<li>
					<div class=time_area>
						<span class=time_month><?php echo substr($newsList[5]['publishdate'],0,7) ?><br></span>
						<span class=time_date><?php echo substr($newsList[5]['publishdate'],8,2) ?>日</span>
					</div>
					<div class=word1 id=word1>
					<a href="/index.php?c=passage&articleid=<?php echo ($newsList[5]['articleid']); ?>" name=title><?php echo ($newsList[5]['title']); ?></a>
					<p name=content>巴拉巴拉巴拉吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼吼多撒后即可户口</p>
					<span class=label name=label><?php echo getColumnNameById($newsList[5]['columnid']) ?></span>
				</div>
				</li>
			</ul>
		</div>
		<div class=change>
			<a href="">首页</a>
			<a href="">上一页</a>
			<a class="page checked" href="">1</a>
			<a class=page href="">2</a>
			<a class=page href="">3</a>
			<a class=page href="">4</a>
			<a href="">下一页</a>
			<a href="">尾页</a>
		</div>
	</div>
</body>
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
        <p>校友会的三行介绍，独家会觉得好似独家试爱和第哦啊是京东啊时间阿迪斯教授第哈怂的的巴萨和计划第哦啊是家啊是哦啊是的话就看少i上帝就是电话覅和发河北无办法对你撒娇好的</p>
        <dl class=connect>
            <dt>联系方式</dt>
            <dd>地址：威海市环翠区文化西路2号</dd>
            <dd>邮编：264209</dd>
            <dd>电话：80008208820</dd>
        </dl>
        <dl class=webs>
<<<<<<< HEAD
            <dt><a style="text-decoration: none; color: #fff">快速链接</a></dt>
            <dd><a href="http://www.hitwh.edu.cn/" style="text-decoration: none; color: #fff">学校官网</a></dd>
            <dd><a href="http://news.hitwh.edu.cn/news_list.asp?id=13" style="text-decoration: none; color: #fff">招标信息</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">工大小威</a></dd>
            <dd><a href="http://bbs.ghtt.net/forum.php" style="text-decoration: none; color: #fff">观海听涛论坛</a></dd>
        </dl>
        <dl class=others>
            <dt><a href="/index.php?c=donationInfo&content_id=5" style="text-decoration: none; color: #fff">捐赠</a></dt>
            <dd><a href="" style="text-decoration: none; color: #fff">管理方法</a></dd>
            <dd><a href="/index.php?c=donationInfo&content_id=6" style="text-decoration: none; color: #fff">鸣谢方法</a></dd>
<!--             <dd class=otherweb>
                <a href="" style="text-decoration: none; color: #fff"> &nbsp&nbsp&nbsp&nbsp其他校园网链接</a>
                <ul>
                    <li><a href="">web1</a></li>
                    <li><a href="">web2</a></li>
                    <li><a href="">web3</a></li>
                </ul>
            </dd> -->
=======
            <dt><a href="" style="text-decoration: none; color: #fff">快速链接</a></dt>
            <dd><a href="" style="text-decoration: none; color: #fff">学校官网</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">招标信息</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">学生管理</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">观海听涛论坛</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">网络服务</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">教学在线</a></dd>
        </dl>
        <dl class=others>
            <dt><a href="" style="text-decoration: none; color: #fff">捐赠</a></dt>
            <dd><a href="" style="text-decoration: none; color: #fff">捐赠管理方法</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">鸣谢方法</a></dd>
            <dd class=otherweb><a href="" style="text-decoration: none; color: #fff"> &nbsp&nbsp&nbsp&nbsp其他校园网链接</a><ul>
                <li><a href="">web1</a></li>
                <li><a href="">web2</a></li>
                <li><a href="">web3</a></li>
            </ul></dd>
>>>>>>> eddf7ec1fe794ac296fd0244cb3d771abf69a98b
        </dl>

    </div>
</footer>
</body>
</html>