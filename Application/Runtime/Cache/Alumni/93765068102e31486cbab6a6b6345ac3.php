<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>哈尔滨工业大学（威海）校友网</title>
	<link rel="stylesheet" href="/Public/css/header/header.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/index/styles.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/dayi.css"/>
<<<<<<< HEAD
=======
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
>>>>>>> fddb912665bafcf2453395c95cb47412de8413b1
</head>
<body>
	<div id="headerBackgroundColor">
	    <div id="logoDivHeaderImg">
        <a href="/index.php"><img src="/Public/images/index/logo.png" class="headerImg"></a>
    </div>
<<<<<<< HEAD
=======

    <div id="headerSearch">

        <input id="searchContent" name="searchContent" type="text" placeholder="站内搜索" value="<?php echo ($searchContent); ?>"/>
        <img src="../Public/images/search.png" id="headerSearchBar">
    </div>

>>>>>>> fddb912665bafcf2453395c95cb47412de8413b1
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
            <li><a href="/index.php?c=detailedList&columnid=22">周年回顾</a>
                <ul>
                    <li><a href="/index.php?c=simpleList&columnid=24">新闻动态</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=25">活动公告</a></li>
                    <li><a href="/index.php?c=simpleList&columnid=22">30周年回顾</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=communication">校友通讯</a>
            </li>
        </ul>
    </div>
    </div>
</body>
<<<<<<< HEAD
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>哈尔滨工业大学（威海）校友网</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/styles.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/dayi.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/summary.css"/>
=======
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
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>哈尔滨工业大学（威海）校友网</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/styles.css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/index/dayi.css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/index/summary.css" />
>>>>>>> fddb912665bafcf2453395c95cb47412de8413b1

	<script src="/Public/js/alumni/jquery-1.8.3.min.js"></script>
	<script src="/Public/js/alumni/banner.js"></script>
	<script src="/Public/js/alumni/menuFix.js"></script>

</head>
<<<<<<< HEAD
<body>

<div class="banner">
	<div class="b-img">
		<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[0]['articleid']); ?>" style="background:url(/Public/images/index/1.jpg) center no-repeat;">
			<div class="summary">
				<p class="s_title"><?php echo ($campusNews[0]['title']); ?></p>
				<p class="s_writer"></p>
				<p class="s_article"><?php echo strip_tags($campusNews[0]['content']) ?></p>
			</div>
		</a>
		<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[0]['articleid']); ?>" style="background:url(/Public/images/index/2.jpg) center no-repeat;">
			<div class="summary">
				<p class="s_title"><?php echo ($alumniNews[0]['title']); ?></p>
				<p class="s_writer"></p>
				<p class="s_article"><?php echo strip_tags($alumniNews[0]['content']) ?></p>
			</div>
		</a>
		<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[0]['articleid']); ?>" style="background:url(/Public/images/index/3.jpg) center no-repeat;">
			<div class="summary">
				<p class="s_title"><?php echo ($noticeNews[0]['title']); ?></p>
				<p class="s_writer"></p>
				<p class="s_article"><?php echo strip_tags($noticeNews[0]['content']) ?></p>
			</div>
		</a>
		<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[1]['articleid']); ?>" style="background:url(/Public/images/index/4.jpg) center no-repeat;">
			<div class="summary">
				<p class="s_title"><?php echo ($campusNews[1]['title']); ?></p>
				<p class="s_writer"></p>
				<p class="s_article"><?php echo strip_tags($campusNews[0]['content']) ?></p>
			</div>
		</a>
		<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[1]['articleid']); ?>" style="background:url(/Public/images/index/5.jpg) center no-repeat;">
			<div class="summary">
				<p class="s_title"><?php echo ($alumniNews[1]['title']); ?></p>
				<p class="s_writer"></p>
				<p class="s_article"><?php echo strip_tags($alumniNews[0]['content']) ?></p>
			</div>
		</a>
	</div>
	<div class="b-list"></div>
	<a class="bar-left" href="#"><em></em></a>
	<a class="bar-right" href="#"><em></em></a>
</div>



<div class="blocks">
	<div class="blockscenter">
		<div class="block1">
			 <h1 class="newsweihai">校区新闻</h1>
				<a href="/index.php?c=simpleList&columnid=3" class="b1link">+更多</a>
				<table class="blocktable">
					<tr>
						 <td width="400px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($campusNews[0]['articleid']); ?>" class="blocklinktext"><?php echo ($campusNews[0]['title']); ?></a></td>
						<td width="155px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$campusNews[0]['publishdate']) ?></a></td>
					</tr>
					<tr>
						<td width="400px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($campusNews[1]['articleid']); ?>" class="blocklinktext"><?php echo ($campusNews[1]['title']); ?></a></td>
						<td width="155px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$campusNews[1]['publishdate']) ?></a></td>
					</tr>
					<tr>
						<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($campusNews[2]['articleid']); ?>" class="blocklinktext"><?php echo ($campusNews[2]['title']); ?></a></td>
						<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$campusNews[2]['publishdate']) ?></a></td>
					</tr>
					<tr>
						<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($campusNews[3]['articleid']); ?>" class="blocklinktext"><?php echo ($campusNews[3]['title']); ?></a></td>
						<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$campusNews[3]['publishdate']) ?></a></td>
					</tr>
					<tr>
						<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($campusNews[4]['articleid']); ?>" class="blocklinktext"><?php echo ($campusNews[4]['title']); ?></a></td>
						<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$campusNews[4]['publishdate']) ?></a></td>
					</tr>
					<tr>
						<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($campusNews[5]['articleid']); ?>" class="blocklinktext"><?php echo ($campusNews[5]['title']); ?></a></td>
						<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$campusNews[5]['publishdate']) ?></a></td>
					</tr>
					<tr>
						<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($campusNews[6]['articleid']); ?>" class="blocklinktext"><?php echo ($campusNews[6]['title']); ?></a></td>
						<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$campusNews[6]['publishdate']) ?></a></td>
					</tr>
					<tr>
						<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($campusNews[7]['articleid']); ?>" class="blocklinktext"><?php echo ($campusNews[7]['title']); ?></a></td>
						<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$campusNews[7]['publishdate']) ?></a></td>
					</tr>
				</table>
		</div>
		<div class="block3">
			<h1 class="newsalumnus">校友新闻</h1>
			<a href="/index.php?c=simpleList&columnid=2" class="b3link">+更多</a>
			<table class="blocktable">
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[0]['articleid']); ?>" class="blocklinktext"><?php echo ($alumniNews[0]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$alumniNews[0]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[1]['articleid']); ?>" class="blocklinktext"><?php echo ($alumniNews[1]['title']); ?></a></td>
					<td width="155px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$alumniNews[1]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[2]['articleid']); ?>" class="blocklinktext"><?php echo ($alumniNews[2]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$alumniNews[2]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[3]['articleid']); ?>" class="blocklinktext"><?php echo ($alumniNews[3]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$alumniNews[3]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[4]['articleid']); ?>" class="blocklinktext"><?php echo ($alumniNews[4]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$alumniNews[4]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[5]['articleid']); ?>" class="blocklinktext"><?php echo ($alumniNews[5]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$alumniNews[5]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[6]['articleid']); ?>" class="blocklinktext"><?php echo ($alumniNews[6]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$alumniNews[6]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[7]['articleid']); ?>" class="blocklinktext"><?php echo ($alumniNews[7]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$alumniNews[7]['publishdate']) ?></a></td>
				</tr>
			</table>
		</div>
		<div class="block2">
			<h1 class="infos">通知公告</h1>
			<a href="/index.php?c=simpleList&columnid=4" class="b2link">+更多</a>
			<table class="blocktable">
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[0]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[0]['title']); ?></a></td>
					<td width="155px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$noticeNews[0]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[1]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[1]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$noticeNews[1]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[2]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[2]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$noticeNews[2]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[3]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[3]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$noticeNews[3]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[4]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[4]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$noticeNews[4]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[5]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[5]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$noticeNews[5]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[6]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[6]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$noticeNews[6]['publishdate']) ?></a></td>
				</tr>
				<tr>
					<td width="561.5px" class="buttomline"><a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[7]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[7]['title']); ?></a></td>
					<td width="105px" class="buttomline"><a href="" class="blocklinktext"><?php echo date("Y-m-d",$noticeNews[7]['publishdate']) ?></a></td>
				</tr>
			</table>
		</div>
		<div class="block4">
			<h1 class="donatethanks" >捐赠鸣谢</h1>
			<div class="donateList">
			<table class="donateTable" cellspacing="0" cellpadding="0">
				
			<!--生成捐赠列表-->
			<?php if(is_array($donations)): foreach($donations as $key=>$donationItems): ?><tr>
					<td class="listName"><?php echo ($donationItems["name"]); ?></td>
					<td class="listMoney"><?php echo ($donationItems["amount"]); ?></td>
				</tr><?php endforeach; endif; ?>
			
			</table>
			</div>
		</div>
	</div>
</div>

<div class="alumnus">
	<div class="alumnuscenter"><h1 class="alumnustitle">|校友人物|</h1>
		<div class="alumnusoutside">
			<div class="alumnusin1">
				<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[0]['articleid']); ?>" class="alumnuslink">
				<img src="<?php echo ($alumniPerson[0]["picture_url"]); ?>" class="alumnuspics">
				<h1 class="alumnustitle1"><?php echo ($alumniPerson[0]["title"]); ?></h1><p class="altime"><?php echo date("Y-m-d",$alumniPerson[0]['publishdate']) ?></p>
				<p class="alumnustext"><?php echo $contentes = strip_tags($alumniPerson[0]['content']) ?></p>

				</a>
			</div>
			<div class="alumnusin2">
				<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[1]['articleid']); ?>" class="alumnuslink">
					<img src="<?php echo ($alumniPerson[1]["picture_url"]); ?>" class="alumnuspics">
					<h1 class="alumnustitle1"><?php echo ($alumniPerson[1]["title"]); ?></h1><p class="altime"><?php echo date("Y-m-d",$alumniPerson[1]['publishdate']) ?></p>
					<p class="alumnustext"><?php echo $contentes = strip_tags($alumniPerson[1]['content']) ?></p>

				</a></div>
			<div class="alumnusin3">
				<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[2]['articleid']); ?>" class="alumnuslink"><img src="<?php echo ($alumniPerson[2]["picture_url"]); ?>" class="alumnuspics">
					<h1 class="alumnustitle1"><?php echo ($alumniPerson[2]["title"]); ?></h1><p class="altime"><?php echo date("Y-m-d",$alumniPerson[2]['publishdate']) ?></p>
					<p class="alumnustext"><?php echo $contentes = strip_tags($alumniPerson[2]['content']) ?></p>

				</a></div>
			<div class="alumnusin4">
				<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[3]['articleid']); ?>" class="alumnuslink"><img src="<?php echo ($alumniPerson[3]["picture_url"]); ?>" class="alumnuspics">
					<h1 class="alumnustitle1"><?php echo ($alumniPerson[3]["title"]); ?></h1><p class="altime"><?php echo date("Y-m-d",$alumniPerson[3]['publishdate']) ?></p>
					<p class="alumnustext"><?php echo $contentes = strip_tags($alumniPerson[3]['content']) ?></p>

				</a></div>
			<div class="alumnusin5">
				<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[4]['articleid']); ?>" class="alumnuslink">
					<img src="<?php echo ($alumniPerson[4]["picture_url"]); ?>" class="alumnuspics">
					<h1 class="alumnustitle1"><?php echo ($alumniPerson[4]["title"]); ?></h1><p class="altime"><?php echo date("Y-m-d",$alumniPerson[4]['publishdate']) ?></p>
					<p class="alumnustext"><?php echo $contentes = strip_tags($alumniPerson[4]['content']) ?></p>

				</a></div>
			<div class="alumnusin6">
				<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[5]['articleid']); ?>" class="alumnuslink"><img src="<?php echo ($alumniPerson[5]["picture_url"]); ?>" class="alumnuspics">
					<h1 class="alumnustitle1"><?php echo ($alumniPerson[5]["title"]); ?></h1><p class="altime"><?php echo date("Y-m-d",$alumniPerson[5]['publishdate']) ?></p>
					<p class="alumnustext"><?php echo $contentes = strip_tags($alumniPerson[5]['content']) ?></p>
				</a></div>
		</div>
	</div>
</div>

<div class="reminding">
	<div class="remindcenter">
		<h1 class="remindtitle">|工大回忆|</h1>
		<div class="remindpicnews"><a href="/index.php?c=passage&articleid=<?php echo ($campusBeauty[0]['articleid']); ?>" class="remindlink"><img src="<?php echo ($campusBeauty[0]["picture_url"]); ?>" width="400px" height="280px">
			<p class="remindpicnewstxt"><?php echo ($campusBeauty[0]["title"]); ?></p></a>
		</div>
		<table class="remindnews" cellspacing="0" cellpadding="0">
			<tr>
				<td width="300px"></td>
				<td width="105px"></td>
			</tr>
			<tr>
				<td height="30px"><a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[0]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[0]["title"]); ?></a></td>
				<td><a href="" class="remindlink"><?php echo date("Y-m-d",$hitMemory[0]['publishdate']) ?></a></td>
			</tr>
			<tr>
				<td height="30px"><a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[1]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[1]["title"]); ?></a></td>
				<td><a href="" class="remindlink"><?php echo date("Y-m-d",$hitMemory[1]['publishdate']) ?></a></td>
			</tr>
			<tr>
				<td height="30px"><a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[2]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[2]["title"]); ?></td>
				<td><a href="" class="remindlink"><?php echo date("Y-m-d",$hitMemory[2]['publishdate']) ?></a></td>
			</tr>
			<tr>
				<td height="30px"><a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[3]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[3]["title"]); ?></td>
				<td><a href="" class="remindlink"><?php echo date("Y-m-d",$hitMemory[3]['publishdate']) ?></a></td>
			</tr>
			<tr>
				<td height="30px"><a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[4]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[4]["title"]); ?></td>
				<td><a href="" class="remindlink"><?php echo date("Y-m-d",$hitMemory[4]['publishdate']) ?></a></td>
			</tr>
			<tr>
				<td height="30px"><a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[5]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[5]["title"]); ?></td>
				<td><a href="" class="remindlink"><?php echo date("Y-m-d",$hitMemory[5]['publishdate']) ?></a></td>
			</tr>
			<tr>
				<td height="30px"><a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[6]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[6]["title"]); ?></td>
				<td><a href="" class="remindlink"><?php echo date("Y-m-d",$hitMemory[6]['publishdate']) ?></a></td>
			</tr>
			<tr>
				<td height="30px"><a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[7]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[7]["title"]); ?></td>
				<td><a href="" class="remindlink"><?php echo date("Y-m-d",$hitMemory[7]['publishdate']) ?></a></td>
			</tr>
			<tr>
				<td height="30px"><a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[8]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[8]["title"]); ?></td>
				<td><a href="" class="remindlink"><?php echo date("Y-m-d",$hitMemory[8]['publishdate']) ?></a></td>
			</tr>
		</table>
	</div>
</div>

</body>
=======

<body>

	<div class="banner">
		<div class="b-img">
			<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[0]['articleid']); ?>" style="background:url(/Public/images/index/1.jpg) center no-repeat;">
				<div class="summary">
					<p class="s_title"><?php echo ($campusNews[0]['title']); ?></p>
					<p class="s_writer"></p>
					<p class="s_article">
						<?php echo strip_tags($campusNews[0]['content']) ?>
					</p>
				</div>
			</a>
			<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[0]['articleid']); ?>" style="background:url(/Public/images/index/2.jpg) center no-repeat;">
				<div class="summary">
					<p class="s_title"><?php echo ($alumniNews[0]['title']); ?></p>
					<p class="s_writer"></p>
					<p class="s_article">
						<?php echo strip_tags($alumniNews[0]['content']) ?>
					</p>
				</div>
			</a>
			<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[0]['articleid']); ?>" style="background:url(/Public/images/index/3.jpg) center no-repeat;">
				<div class="summary">
					<p class="s_title"><?php echo ($noticeNews[0]['title']); ?></p>
					<p class="s_writer"></p>
					<p class="s_article">
						<?php echo strip_tags($noticeNews[0]['content']) ?>
					</p>
				</div>
			</a>
			<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[1]['articleid']); ?>" style="background:url(/Public/images/index/4.jpg) center no-repeat;">
				<div class="summary">
					<p class="s_title"><?php echo ($campusNews[1]['title']); ?></p>
					<p class="s_writer"></p>
					<p class="s_article">
						<?php echo strip_tags($campusNews[0]['content']) ?>
					</p>
				</div>
			</a>
			<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[1]['articleid']); ?>" style="background:url(/Public/images/index/5.jpg) center no-repeat;">
				<div class="summary">
					<p class="s_title"><?php echo ($alumniNews[1]['title']); ?></p>
					<p class="s_writer"></p>
					<p class="s_article">
						<?php echo strip_tags($alumniNews[0]['content']) ?>
					</p>
				</div>
			</a>
		</div>
		<div class="b-list"></div>
		<a class="bar bar-left" href="#">
			<em></em>
		</a>
		<a class="bar bar-right" href="#">
			<em></em>
		</a>
	</div>

	<div class="blocks">
		<div class="blockscenter">
			<div class="block1_and_block3">
				<div class="block1_and_block3_background">
					<div class="block1_and_block3_container">
						<div class="block1">
							<h1 class="newsweihai">
								<img src="/Public/images/index/newsweihai.png">&nbsp校区新闻</h1>
							<a href="/index.php?c=simpleList&columnid=3" class="b1link">+更多</a>
							<table class="blocktable">
								<tr>
									<td width="400px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[0]['articleid']); ?>" class="blocklinktext0"><?php echo ($campusNews[0]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$campusNews[0]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="400px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[1]['articleid']); ?>" class="blocklinktext0"><?php echo ($campusNews[1]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$campusNews[1]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[2]['articleid']); ?>" class="blocklinktext0"><?php echo ($campusNews[2]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$campusNews[2]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[3]['articleid']); ?>" class="blocklinktext0"><?php echo ($campusNews[3]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$campusNews[3]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[4]['articleid']); ?>" class="blocklinktext0"><?php echo ($campusNews[4]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$campusNews[4]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[5]['articleid']); ?>" class="blocklinktext0"><?php echo ($campusNews[5]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$campusNews[5]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[6]['articleid']); ?>" class="blocklinktext0"><?php echo ($campusNews[6]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$campusNews[6]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($campusNews[7]['articleid']); ?>" class="blocklinktext0"><?php echo ($campusNews[7]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$campusNews[7]['publishdate']) ?>
										</a>
									</td>
								</tr>
							</table>
						</div>
						<div class="block3">
							<h1 class="newsalumnus">
								<img src="/Public/images/index/newsalumnus.png">&nbsp校友新闻</h1>
							<a href="/index.php?c=simpleList&columnid=2" class="b3link">+更多</a>
							<table class="blocktable">
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[0]['articleid']); ?>" class="blocklinktext0"><?php echo ($alumniNews[0]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$alumniNews[0]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[1]['articleid']); ?>" class="blocklinktext0"><?php echo ($alumniNews[1]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$alumniNews[1]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[2]['articleid']); ?>" class="blocklinktext0"><?php echo ($alumniNews[2]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$alumniNews[2]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[3]['articleid']); ?>" class="blocklinktext0"><?php echo ($alumniNews[3]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$alumniNews[3]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[4]['articleid']); ?>" class="blocklinktext0"><?php echo ($alumniNews[4]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$alumniNews[4]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[5]['articleid']); ?>" class="blocklinktext0"><?php echo ($alumniNews[5]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$alumniNews[5]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[6]['articleid']); ?>" class="blocklinktext0"><?php echo ($alumniNews[6]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$alumniNews[6]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($alumniNews[7]['articleid']); ?>" class="blocklinktext0"><?php echo ($alumniNews[7]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$alumniNews[7]['publishdate']) ?>
										</a>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="block2_and_block4">
				<div class="block2_and_block4_container">
					<div class="block2">
						<h1 class="infos">
							<img src="/Public/images/index/infos.png">&nbsp通知公告</h1>
						<a href="/index.php?c=simpleList&columnid=4" class="b2link">+更多</a>
						<table class="blocktable">
							<tr>
								<td width="561.5px" class="buttomline1">
									<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[0]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[0]['title']); ?></a>
								</td>
								<td width="155px" class="buttomline1">
									<a href="" class="blocklinktext">
										<?php echo date("Y-m-d",$noticeNews[0]['publishdate']) ?>
									</a>
								</td>
							</tr>
							<tr>
								<td width="561.5px" class="buttomline1">
									<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[1]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[1]['title']); ?></a>
								</td>
								<td width="105px" class="buttomline1">
									<a href="" class="blocklinktext">
										<?php echo date("Y-m-d",$noticeNews[1]['publishdate']) ?>
									</a>
								</td>
							</tr>
							<tr>
								<td width="561.5px" class="buttomline1">
									<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[2]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[2]['title']); ?></a>
								</td>
								<td width="105px" class="buttomline1">
									<a href="" class="blocklinktext">
										<?php echo date("Y-m-d",$noticeNews[2]['publishdate']) ?>
									</a>
								</td>
							</tr>
							<tr>
								<td width="561.5px" class="buttomline1">
									<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[3]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[3]['title']); ?></a>
								</td>
								<td width="105px" class="buttomline1">
									<a href="" class="blocklinktext">
										<?php echo date("Y-m-d",$noticeNews[3]['publishdate']) ?>
									</a>
								</td>
							</tr>
							<tr>
								<td width="561.5px" class="buttomline1">
									<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[4]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[4]['title']); ?></a>
								</td>
								<td width="105px" class="buttomline1">
									<a href="" class="blocklinktext">
										<?php echo date("Y-m-d",$noticeNews[4]['publishdate']) ?>
									</a>
								</td>
							</tr>
							<tr>
								<td width="561.5px" class="buttomline1">
									<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[5]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[5]['title']); ?></a>
								</td>
								<td width="105px" class="buttomline1">
									<a href="" class="blocklinktext">
										<?php echo date("Y-m-d",$noticeNews[5]['publishdate']) ?>
									</a>
								</td>
							</tr>
							<tr>
								<td width="561.5px" class="buttomline1">
									<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[6]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[6]['title']); ?></a>
								</td>
								<td width="105px" class="buttomline1">
									<a href="" class="blocklinktext">
										<?php echo date("Y-m-d",$noticeNews[6]['publishdate']) ?>
									</a>
								</td>
							</tr>
							<tr>
								<td width="561.5px" class="buttomline1">
									<a href="/index.php?c=passage&articleid=<?php echo ($noticeNews[7]['articleid']); ?>" class="blocklinktext"><?php echo ($noticeNews[7]['title']); ?></a>
								</td>
								<td width="105px" class="buttomline1">
									<a href="" class="blocklinktext">
										<?php echo date("Y-m-d",$noticeNews[7]['publishdate']) ?>
									</a>
								</td>
							</tr>
						</table>
					</div>
					<div class="block4">
						<h2 class="donatethanks">捐赠鸣谢</h2>
						<div class="donateList">
							<table class="donateTable" cellspacing="0" cellpadding="0">

								<!--生成捐赠列表-->
								<?php if(is_array($donations)): foreach($donations as $key=>$donationItems): ?><tr>
										<td class="listName"><?php echo ($donationItems["name"]); ?></td>
										<td class="listMoney"><?php echo ($donationItems["amount"]); ?></td>
									</tr><?php endforeach; endif; ?>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="alumnus">
		<div class="alumnuscenter">
			<h1 class="alumnustitle">|校友人物|</h1>
			<div class="alumnusoutside">
				<div class="alumnusin1">
					<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[0]['articleid']); ?>" class="alumnuslink">
						<img src="<?php echo ($alumniPerson[0]["picture_url"]); ?>" class="alumnuspics">
						<h1 class="alumnustitle0"><?php echo ($alumniPerson[0]["title"]); ?></h1>
						<p class="altime0">
							<?php echo date("Y-m-d",$alumniPerson[0]['publishdate']) ?>
						</p>
						<p class="alumnustext0">
							<?php echo $contentes = strip_tags($alumniPerson[0]['content']) ?>
						</p>

					</a>
				</div>
				<div class="alumnusin2">
					<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[1]['articleid']); ?>" class="alumnuslink">
						<img src="<?php echo ($alumniPerson[1]["picture_url"]); ?>" class="alumnuspics">
						<h1 class="alumnustitle1"><?php echo ($alumniPerson[1]["title"]); ?></h1>
						<p class="altime">
							<?php echo date("Y-m-d",$alumniPerson[1]['publishdate']) ?>
						</p>
						<p class="alumnustext">
							<?php echo $contentes = strip_tags($alumniPerson[1]['content']) ?>
						</p>

					</a>
				</div>
				<div class="alumnusin3">
					<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[2]['articleid']); ?>" class="alumnuslink">
						<img src="<?php echo ($alumniPerson[2]["picture_url"]); ?>" class="alumnuspics">
						<h1 class="alumnustitle1"><?php echo ($alumniPerson[2]["title"]); ?></h1>
						<p class="altime">
							<?php echo date("Y-m-d",$alumniPerson[2]['publishdate']) ?>
						</p>
						<p class="alumnustext">
							<?php echo $contentes = strip_tags($alumniPerson[2]['content']) ?>
						</p>

					</a>
				</div>
				<div class="alumnusin4">
					<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[3]['articleid']); ?>" class="alumnuslink">
						<img src="<?php echo ($alumniPerson[3]["picture_url"]); ?>" class="alumnuspics">
						<h1 class="alumnustitle0"><?php echo ($alumniPerson[3]["title"]); ?></h1>
						<p class="altime0">
							<?php echo date("Y-m-d",$alumniPerson[3]['publishdate']) ?>
						</p>
						<p class="alumnustext0">
							<?php echo $contentes = strip_tags($alumniPerson[3]['content']) ?>
						</p>

					</a>
				</div>
				<div class="alumnusin5">
					<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[4]['articleid']); ?>" class="alumnuslink">
						<img src="<?php echo ($alumniPerson[4]["picture_url"]); ?>" class="alumnuspics">
						<h1 class="alumnustitle0"><?php echo ($alumniPerson[4]["title"]); ?></h1>
						<p class="altime0">
							<?php echo date("Y-m-d",$alumniPerson[4]['publishdate']) ?>
						</p>
						<p class="alumnustext0">
							<?php echo $contentes = strip_tags($alumniPerson[4]['content']) ?>
						</p>

					</a>
				</div>
				<div class="alumnusin6">
					<a href="/index.php?c=passage&articleid=<?php echo ($alumniPerson[5]['articleid']); ?>" class="alumnuslink">
						<img src="<?php echo ($alumniPerson[5]["picture_url"]); ?>" class="alumnuspics">
						<h1 class="alumnustitle1"><?php echo ($alumniPerson[5]["title"]); ?></h1>
						<p class="altime">
							<?php echo date("Y-m-d",$alumniPerson[5]['publishdate']) ?>
						</p>
						<p class="alumnustext">
							<?php echo $contentes = strip_tags($alumniPerson[5]['content']) ?>
						</p>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="reminding">
		<div class="remindcenter">
			<h1 class="remindtitle">|工大回忆|</h1>
			<div class="remindpicnews">
				<a href="/index.php?c=passage&articleid=<?php echo ($campusBeauty[0]['articleid']); ?>" class="remindlink">
					<img src="<?php echo ($campusBeauty[0]["picture_url"]); ?>" width="400px" height="280px">
					<p class="remindpicnewstxt"><?php echo ($campusBeauty[0]["title"]); ?></p>
				</a>
			</div>
			<table class="remindnews" cellspacing="0" cellpadding="0">
				<tr>
					<td width="300px"></td>
					<td width="105px"></td>
				</tr>
				<tr>
					<td height="30px">
						<a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[0]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[0]["title"]); ?></a>
					</td>
					<td>
						<a href="" class="remindlink">
							<?php echo date("Y-m-d",$hitMemory[0]['publishdate']) ?>
						</a>
					</td>
				</tr>
				<tr>
					<td height="30px">
						<a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[1]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[1]["title"]); ?></a>
					</td>
					<td>
						<a href="" class="remindlink">
							<?php echo date("Y-m-d",$hitMemory[1]['publishdate']) ?>
						</a>
					</td>
				</tr>
				<tr>
					<td height="30px">
						<a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[2]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[2]["title"]); ?></a>
					</td>
					<td>
						<a href="" class="remindlink">
							<?php echo date("Y-m-d",$hitMemory[2]['publishdate']) ?>
						</a>
					</td>
				</tr>
				<tr>
					<td height="30px">
						<a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[3]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[3]["title"]); ?></a>
					</td>
					<td>
						<a href="" class="remindlink">
							<?php echo date("Y-m-d",$hitMemory[3]['publishdate']) ?>
						</a>
					</td>
				</tr>
				<tr>
					<td height="30px">
						<a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[4]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[4]["title"]); ?></a>
					</td>
					<td>
						<a href="" class="remindlink">
							<?php echo date("Y-m-d",$hitMemory[4]['publishdate']) ?>
						</a>
					</td>
				</tr>
				<tr>
					<td height="30px">
						<a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[5]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[5]["title"]); ?></a>
					</td>
					<td>
						<a href="" class="remindlink">
							<?php echo date("Y-m-d",$hitMemory[5]['publishdate']) ?>
						</a>
					</td>
				</tr>
				<tr>
					<td height="30px">
						<a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[6]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[6]["title"]); ?></a>
					</td>
					<td>
						<a href="" class="remindlink">
							<?php echo date("Y-m-d",$hitMemory[6]['publishdate']) ?>
						</a>
					</td>
				</tr>
				<tr>
					<td height="30px">
						<a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[7]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[7]["title"]); ?></a>
					</td>
					<td>
						<a href="" class="remindlink">
							<?php echo date("Y-m-d",$hitMemory[7]['publishdate']) ?>
						</a>
					</td>
				</tr>
				<tr>
					<td height="30px">
						<a href="/index.php?c=passage&articleid=<?php echo ($hitMemory[8]['articleid']); ?>" class="remindlink"><?php echo ($hitMemory[8]["title"]); ?></a>
					</td>
					<td>
						<a href="" class="remindlink">
							<?php echo date("Y-m-d",$hitMemory[8]['publishdate']) ?>
						</a>
					</td>
				</tr>
			</table>
		</div>
	</div>

</body>

>>>>>>> fddb912665bafcf2453395c95cb47412de8413b1
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
=======
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
>>>>>>> fddb912665bafcf2453395c95cb47412de8413b1
        </dl>

    </div>
</footer>
</body>
</html>