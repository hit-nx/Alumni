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
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<title>哈尔滨工业大学（威海）校友网</title>
	<link rel="stylesheet" type="text/css" href="/Public/css/index/styles.css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/index/dayi.css" />
	<link rel="stylesheet" type="text/css" href="/Public/css/index/summary.css" />

	<script src="/Public/js/alumni/jquery-1.8.3.min.js"></script>
	<script src="/Public/js/alumni/banner.js"></script>
	<script src="/Public/js/alumni/menuFix.js"></script>

</head>

<body>

	<div class="banner">
		<div class="b-img">
			<a style="background:url(/Public/images/index/1.jpg) center no-repeat;">
			</a>
			<a style="background:url(/Public/images/index/2.jpg) center no-repeat;">
			</a>
			<a style="background:url(/Public/images/index/3.jpg) center no-repeat;">
			</a>
			<a style="background:url(/Public/images/index/4.jpg) center no-repeat;">
			</a>
			<a style="background:url(/Public/images/index/5.jpg) center no-repeat;">
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
							<div class="column_button">
								<div name="btnChangeCol" class="column_button_selected_sch" control-div="news_school" normal-state="column_button_normal_sch" click-state="column_button_selected_sch" clicked="clicked" onclick="changeColumn(this)">
									<h1>&nbsp校区新闻</h1>
								</div>
								<div name="btnChangeCol" class="column_button_normal_mate" control-div="news_mate" normal-state="column_button_normal_mate" click-state="column_button_selected_mate" onclick="changeColumn(this)">
									<h1>&nbsp校友新闻</h1>
								</div>
								<div name="btnChangeCol" class="column_button_normal_noti" control-div="news_notice" normal-state="column_button_normal_noti" click-state="column_button_selected_noti" onclick="changeColumn(this)">
									<h1>&nbsp通知公告</h1>
								</div>
							</div>
							<!--校区新闻-->
							<div class="column_content" id="news_school">
								
								<a href="/index.php?c=simpleList&columnid=3" class="b1link">+更多</a>

								<div class="display_news">
									<img class="display_news_picture" src="<?php echo ($onePicNew["picture_url"]); ?>" alt="">
									<a class="display_news_title" href="/index.php?c=passage&articleid=<?php echo ($onePicNew["articleid"]); ?>"><?php echo ($onePicNew["title"]); ?></a>
									<div class="display_news_content">
										<?php echo $contentes = strip_tags($onePicNew['content']) ?>
									</div>
									

								</div>

							<table class="blocktable">
								<tr>
									<td width="400px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($oneNews[0]['articleid']); ?>" class="blocklinktext0"><?php echo ($oneNews[0]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$oneNews[0]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="400px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($oneNews[1]['articleid']); ?>" class="blocklinktext0"><?php echo ($oneNews[1]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$oneNews[1]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($oneNews[2]['articleid']); ?>" class="blocklinktext0"><?php echo ($oneNews[2]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$oneNews[2]['publishdate']) ?>
										</a>
									</td>
								</tr>
							</table>
							</div>


							<!--校友新闻-->
							<div class="column_content" id="news_mate" style="display:none">
								
								<a href="/index.php?c=simpleList&columnid=2" class="b1link">+更多</a>

								<div class="display_news">
									<img class="display_news_picture" src="<?php echo ($twoPicNew['picture_url']); ?>" alt="">
									<a class="display_news_title" href="/index.php?c=passage&articleid=<?php echo ($twoPicNew["articleid"]); ?>"><?php echo ($twoPicNew['title']); ?></a>
									<p class="display_news_content"><?php echo $contentes = strip_tags($twoPicNew['content']) ?></p>

								</div>

							<table class="blocktable">
								<tr>
									<td width="400px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($twoNews[0]['articleid']); ?>" class="blocklinktext0"><?php echo ($twoNews[0]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$twoNews[0]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="400px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($twoNews[1]['articleid']); ?>" class="blocklinktext0"><?php echo ($twoNews[1]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$twoNews[1]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($twoNews[2]['articleid']); ?>" class="blocklinktext0"><?php echo ($twoNews[2]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$twoNews[2]['publishdate']) ?>
										</a>
									</td>
								</tr>
							</table>
							</div>


							<!--通知公告-->
							<div class="column_content" id="news_notice" style="display:none">
								
								<a href="/index.php?c=simpleList&columnid=4" class="b1link">+更多</a>

								<div class="display_news">
									<img class="display_news_picture" src="<?php echo ($threePicNew['picture_url']); ?>" alt="">
									<a class="display_news_title" href="/index.php?c=passage&articleid=<?php echo ($threePicNew["articleid"]); ?>"><?php echo ($threePicNew['title']); ?></a>
									<p class="display_news_content"><?php echo $contentes = strip_tags($threePicNew['content']) ?></p>

								</div>

							<table class="blocktable">
								<tr>
									<td width="400px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($threeNews[0]['articleid']); ?>" class="blocklinktext0"><?php echo ($threeNews[0]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$threeNews[0]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="400px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($threeNews[1]['articleid']); ?>" class="blocklinktext0"><?php echo ($threeNews[1]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$threeNews[1]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline">
										<a href="/index.php?c=passage&articleid=<?php echo ($threeNews[2]['articleid']); ?>" class="blocklinktext0"><?php echo ($threeNews[2]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline">
										<a href="" class="blocklinktext0">
											<?php echo date("Y-m-d",$threeNews[2]['publishdate']) ?>
										</a>
									</td>
								</tr>
							</table>
							</div>


						</div>


						<div class="block3">
							<h1 class="newsalumnus">
								<img src="/Public/images/index/contact.png">&nbsp校友通讯</h1>
							<a href="/index.php?c=communication" class="b3link">+更多</a>

							<div class="contact_content">

								<div class="contact_picture"></div>

								<div class="contact_article">

									<table>
										<?php if(is_array($periodical)): foreach($periodical as $key=>$periodicalItems): ?><tr>
											<td>
												<a href="/index.php?c=address&periodicalid=<?php echo ($periodicalItems["periodicalid"]); ?>"><?php echo ($periodicalItems["title"]); ?></a>
											</td>
										</tr><?php endforeach; endif; ?>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="block2_and_block4">
				<div class="block2_and_block4_container">
					<div class="block2">
						<div class="column_button">
							<div name="btnChangeCol" class="column_button_selected_alumni" control-div="alumni" normal-state="column_button_normal_alumni" click-state="column_button_selected_alumni" clicked="clicked" onclick="changeColumn(this)">
									<h1>&nbsp校友人物</h1>
							</div>

							<div name="btnChangeCol" class="column_button_normal_memory" control-div="hit_memory" normal-state="column_button_normal_memory" click-state="column_button_selected_memory" onclick="changeColumn(this)">
									<h1>&nbsp工大回忆</h1>
							</div>

							<div name="btnChangeCol" class="column_button_normal_organization" control-div="alumni_organization" normal-state="column_button_normal_organization" click-state="column_button_selected_organization" onclick="changeColumn(this)">
									<h1>&nbsp校友组织</h1>
							</div>
						</div>

						<!--校友人物-->
							<div class="column_content" id="alumni">
								
								<a href="/index.php?c=detailedList&columnid=11" class="b2link">+更多</a>

								<div class="display_news">
									<img class="display_news_picture" src="<?php echo ($fourPicNew["picture_url"]); ?>" alt="">
									<a class="display_news_title2" href="/index.php?c=passage&articleid=<?php echo ($fourPicNew["articleid"]); ?>"><?php echo ($fourPicNew["title"]); ?></a>
									<div class="display_news_content2">
										<?php echo $contentes = strip_tags($fourPicNew['content']) ?>
									</div>
									

								</div>

							<table class="blocktable">
								<tr>
									<td width="400px" class="buttomline2">
										<a href="/index.php?c=passage&articleid=<?php echo ($fourNews[0]['articleid']); ?>" class="blocklinktext2"><?php echo ($fourNews[0]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline2">
										<a href="" class="blocklinktext2">
											<?php echo date("Y-m-d",$fourNews[0]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="400px" class="buttomline2">
										<a href="/index.php?c=passage&articleid=<?php echo ($fourNews[1]['articleid']); ?>" class="blocklinktext2"><?php echo ($fourNews[1]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline2">
										<a href="" class="blocklinktext2">
											<?php echo date("Y-m-d",$fourNews[1]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline2">
										<a href="/index.php?c=passage&articleid=<?php echo ($fourNews[2]['articleid']); ?>" class="blocklinktext2"><?php echo ($fourNews[2]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline2">
										<a href="" class="blocklinktext2">
											<?php echo date("Y-m-d",$fourNews[2]['publishdate']) ?>
										</a>
									</td>
								</tr>
							</table>
							</div>


							<!--工大回忆-->
							<div class="column_content" id="hit_memory" style="display:none">
								
								<a href="/index.php?c=detailedList&columnid=17" class="b2link">+更多</a>

								<div class="display_news">
									<img class="display_news_picture" src="<?php echo ($fivePicNew['picture_url']); ?>" alt="">
									<a class="display_news_title2" href="/index.php?c=passage&articleid=<?php echo ($fivePicNew["articleid"]); ?>"><?php echo ($fivePicNew['title']); ?></a>
									<p class="display_news_content2"><?php echo $contentes = strip_tags($fivePicNew['content']) ?></p>

								</div>

							<table class="blocktable">
								<tr>
									<td width="400px" class="buttomline2">
										<a href="/index.php?c=passage&articleid=<?php echo ($fiveNews[0]['articleid']); ?>" class="blocklinktext2"><?php echo ($fiveNews[0]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline2">
										<a href="" class="blocklinktext2">
											<?php echo date("Y-m-d",$fiveNews[0]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="400px" class="buttomline2">
										<a href="/index.php?c=passage&articleid=<?php echo ($fiveNews[1]['articleid']); ?>" class="blocklinktext2"><?php echo ($fiveNews[1]['title']); ?></a>
									</td>
									<td width="155px" class="buttomline2">
										<a href="" class="blocklinktext2">
											<?php echo date("Y-m-d",$fiveNews[1]['publishdate']) ?>
										</a>
									</td>
								</tr>
								<tr>
									<td width="561.5px" class="buttomline2">
										<a href="/index.php?c=passage&articleid=<?php echo ($fiveNews[2]['articleid']); ?>" class="blocklinktext2"><?php echo ($fiveNews[2]['title']); ?></a>
									</td>
									<td width="105px" class="buttomline2">
										<a href="" class="blocklinktext2">
											<?php echo date("Y-m-d",$fiveNews[2]['publishdate']) ?>
										</a>
									</td>
								</tr>
							</table>
							</div>


							<!--校友组织-->
							<div class="column_content" id="alumni_organization" style="display:none">
								
								<a href="/index.php?c=organization&a=organizationList" class="b2link">+更多</a>

								<div class="organization_content">

									<table>

									<?php if(is_array($alumniList)): foreach($alumniList as $key=>$alumniItems): ?><tr>
											<td>
												<a href="/index.php?c=organization&a=otherOrganizationInfo&alumnis_id=<?php echo ($alumniItems["alumnis_id"]); ?>" class="blocklinktext3"><?php echo ($alumniItems["title"]); ?></a>
											</td>
										</tr><?php endforeach; endif; ?>

								</table>

								</div>
							</div>

					</div>
					<div class="block4">
						<h2 class="donatethanks">捐赠鸣谢</h2>
						<div class="donateList">
							<table class="donateTable" cellspacing="0" cellpadding="0">

								<!--生成捐赠列表-->
								<?php if(is_array($donationsList)): foreach($donationsList as $key=>$donationItems): ?><tr>
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

	<script language="javascript" type="text/javascript">

        function changeColumn(obj) {
            var col = $(obj);

            // not click
            if (col.prop('clicked') == undefined) {
                // remove current clicked
                var divToHide = null;
                col.parent().children("[name='btnChangeCol']").each(function () {
                    var e = $(this);
                    if (e.attr('clicked') != undefined) {
                        // remove clicked state
                        e.attr('class', e.attr('normal-state'));
                        e.removeAttr('clicked');

                        divToHide = '#' + e.attr('control-div');
                        return false; // break
                    }
                });

                // clicked this
                col.attr('class', col.attr('click-state'));
                col.attr('clicked', 'clicked');
                var divToShow = '#' + col.attr('control-div');

                $(divToHide).fadeOut('fast', function () {
                    $(divToShow).fadeIn('fast');
                });
            }
        }
	</script>

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