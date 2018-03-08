<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>哈尔滨工业大学（威海）校友网</title>
	<link rel="stylesheet" href="/Public/css/header/header.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/index/styles.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/dayi.css"/>
    <script src="/Public/js/alumni/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- <link href="/Public/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>
	<div id="headerBackgroundColor">
	    <div id="logoDivHeaderImg">
        <a href="/index.php"><img src="/Public/images/index/logo.png" class="headerImg"></a>
    </div>

    <div id="navi">
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
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/Public/css/organization/AlumniOrganization.css" />
	<link href="/Public/css/passage/passage.css"  rel="stylesheet" type="text/css" />
	<link href="/Public/css/passage/style.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css/passage/reset.css"  rel="stylesheet" type="text/css" />

	<script src="/Public/js/alumni/menuFix.js" type="text/javascript"></script>
	<script src="/Public/js/alumni/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="/Public/js/alumni/passage.js" type="text/javascript"></script>
</head>
<body>

	<div class="ahead">——————&nbsp;&nbsp;&nbsp;<?php echo ($parentColumn["column_name"]); ?>&nbsp;&nbsp;&nbsp;——————</div>

	<div style="text-align: center;">
		<div class="class">
			<?php if(is_array($brotherColumn)): foreach($brotherColumn as $key=>$brotherColumnItems): ?><li <?php echo (getChooseByArticle($brotherColumnItems["column_id"])); ?>>
				<a href="/index.php?c=simpleList&columnid=<?php echo ($brotherColumnItems["column_id"]); ?>"><?php echo ($brotherColumnItems["column_name"]); ?></a>
			</li><?php endforeach; endif; ?>
		</div>
	</div>
	<div class="room">
		<div class="content">
			<p class="name"><?php echo ($articleInfo["title"]); ?></p>

			<P class="writer">来源：<?php echo ($articleInfo["source"]); ?> 浏览量：<?php echo ($articleInfo["visitcount"]); ?><br></P>

			<div><?php echo (htmlspecialchars_decode($articleInfo["content"])); ?></div>

		</div>

		<div class="passageBottom">

			<div class="down">
				<a herf="">
					<img src="/Public/images/passage/download.png" >

					<span>下载附件</span>
				</a>
			</div>
<!-- 			<div class="like">
				<img src="/Public/images/passage/good.png" id="hand" onmouseover="Toblue()" onmouseout="Togray()" onmousedown="likeit()">
				<img class="bg_good" src="/Public/images/passage/havegood.png" id="hand" onmouseover="Toblue()" onmouseout="Togray()" onmousedown="likeit()">
				<span id="like_number"><?php echo ($articleInfo["likecount"]); ?></span>
				<input type="hidden" id="articleid" value="<?php echo ($articleInfo["articleid"]); ?>"/>
			</div> -->
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
        </dl>

    </div>
</footer>
</body>
</html>