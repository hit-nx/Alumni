<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>哈尔滨工业大学（威海）校友网</title>
	<link rel="stylesheet" href="/Public/css/header/header.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/index/styles.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/dayi.css"/>
</head>
<body>
	<div id="headerBackgroundColor">
	    <div id="logoDivHeaderImg">
        <a href="/index.php"><img src="/Public/images/index/logo.png" class="headerImg"></a>
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
            <li><a href="/index.php?c=organization&contentid=1">校友组织</a>
                <ul>
                    <li><a href="/index.php?c=organization&contentid=1">校友会简介</a></li>
                    <li><a href="/index.php?c=organization&contentid=2">组织机构</a></li>
                    <li><a href="/index.php?c=organization&contentid=3">规章制度</a></li>
                    <li><a href="/index.php?c=organization&a=organizationList">地方校友组织</a></li>
                    <li><a href="/index.php?c=organization&contentid=4">校友创业导师</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=detailedList&columnid=11">校友人物</a>
                <ul>
                    <li><a href="/index.php?c=simpleList&columnid=12">人物访谈</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=13">行业精英</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=14">大师风范</a></li>
<<<<<<< HEAD
                    <li><a href="/index.php?c=simpleList&columnid=15">海外情缘</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=16">校内学子</a></li>
=======
                    <li><a href="/index.php?c=simpleList&columnid=16">创业校友</a></li>
>>>>>>> fddb912665bafcf2453395c95cb47412de8413b1
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
<<<<<<< HEAD
            <li><a href="#contact">周年回顾</a>
                <ul>
                    <li><a href="#about">新闻动态</a></li>
                    <li><a href="#about">活动公告</a></li>
                    <li><a href="#about">30周年回顾</a></li>
=======
            <li><a href="/index.php?c=detailedList&columnid=22">周年回顾</a>
                <ul>
                    <li><a href="/index.php?c=simpleList&columnid=24">新闻动态</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=25">活动公告</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=22">30周年回顾</a></li>
>>>>>>> fddb912665bafcf2453395c95cb47412de8413b1
                </ul>
            </li>
            <li><a href="/index.php?c=communication">校友通讯</a>
            </li>
        </ul>
    </div>
    </div>
</body>
</html>
<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/Public/css/organization/AlumniOrganization.css" />
		<link rel="stylesheet" type="text/css" href="/Public/css/organization/style.css">
		<link rel="stylesheet" type="text/css" href="/Public/css/organization/reset.css">

		<script type="text/javascript" src="/Public/js/alumni/menuFix.js"></script>
		<script src="/Public/js/alumni/jquery-3.2.1.min.js" type="text/javascript"></script>
		<title>校友组织</title>
	</head>
	<body>

		<div class="ahead">——————&nbsp;&nbsp;&nbsp;校友组织&nbsp;&nbsp;&nbsp;——————</div>

		<div>
			<ul class="class">
				<li><a href="/index.php?c=organization&contentid=1">校友会简介</a></li>
				<li><a href="/index.php?c=organization&contentid=2">组织机构</a></li>
				<li><a href="/index.php?c=organization&contentid=3">规章制度</a></li>
				<li><a href="/index.php?c=organization&contentid=4">校友创业导师</a></li>
				<li><a href="/index.php?c=organization&a=organizationList">地方校友组织</a></li>
			</ul>			
		</div>
		<div class="line"><hr /></div>

		<div class="article">
<<<<<<< HEAD
			<?php echo ($organizationInfo["content"]); ?>
=======
			<?php echo (htmlspecialchars_decode($organizationInfo["content"])); ?>
>>>>>>> fddb912665bafcf2453395c95cb47412de8413b1
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
            <dt><a href="" style="text-decoration: none; color: #fff">快速链接</a></dt>
            <dd><a href="" style="text-decoration: none; color: #fff">学校官网</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">招标信息</a></dd>
<<<<<<< HEAD
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
=======
            <dd><a href="" style="text-decoration: none; color: #fff">工大小威</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">观海听涛论坛</a></dd>
        </dl>
        <dl class=others>
            <dt><a href="" style="text-decoration: none; color: #fff">捐赠</a></dt>
            <dd><a href="" style="text-decoration: none; color: #fff">管理方法</a></dd>
            <dd><a href="" style="text-decoration: none; color: #fff">鸣谢方法</a></dd>
<!--             <dd class=otherweb>
                <a href="" style="text-decoration: none; color: #fff"> &nbsp&nbsp&nbsp&nbsp其他校园网链接</a>
                <ul>
                    <li><a href="">web1</a></li>
                    <li><a href="">web2</a></li>
                    <li><a href="">web3</a></li>
                </ul>
            </dd> -->
>>>>>>> fddb912665bafcf2453395c95cb47412de8413b1
        </dl>

    </div>
</footer>
</body>
</html>