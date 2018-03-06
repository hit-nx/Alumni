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
                    <li><a href="/index.php?c=simpleList&columnid=22">30周年回顾</a></li>
                </ul>
            </li>
            <li><a href="/index.php?c=communication">校友通讯</a>
            </li>
        </ul>
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
    <title>Search</title>
    <link rel="stylesheet" href="/Public/css/search/search.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/page.css">

    <script type="text/javascript" src="/Public/js/alumni/menuFix.js"></script>
    <script src="/Public/js/alumni/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/Public/js/alumni/listIndex.js"></script>
    <script src="/Public/js/paging.js"></script>
</head>
<body>
    <div class="ahead">——————&nbsp;&nbsp;&nbsp;搜索结果&nbsp;&nbsp;&nbsp;——————</div>
    <input id="title"  class="form-control" name="title" type="hidden" placeholder="文章标题" value="<?php echo ($title); ?>" />
    <center>

        <?php if($isNull){ echo '<img src="/Public/images/search/nofound.jpg"><p class="empty-message">咦~怎么神马也没有！</p>'; } ?>

        <div class="search">
        <ul>
            <br>
            <br>

            <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><li class="news-item">
                    <div class="left-area">
                        <label class="year-month"><?php $time = date("Y-m-d",$news['publishdate']); echo substr($time,0,7) ?></label>
                        <label class="day"><?php echo substr($time,8,2) ?>日</label>
                    </div>
                    <div class="content-area">
                        <h2 class="news-title"><a href="/index.php?c=passage&articleid=<?php echo ($news['articleid']); ?>"><?php echo ($news['title']); ?></a> </h2>
                        <p class="article-content"><?php echo $contentes = strip_tags($news['content']) ?></p>
                    </div>
                    <label class="news-tag"><?php echo getColumnNameById($news['columnid']) ?></label>
                    <!--<div class="time_area">-->
                        <!--&lt;!&ndash;年月&ndash;&gt;-->
                        <!--<span class="time_month"><?php $time = date("Y-m-d",$news['publishdate']); echo substr($time,0,7) ?><br></span>-->
                        <!--&lt;!&ndash;日&ndash;&gt;-->
                        <!--<span class="time_date"><?php echo substr($time,8,2) ?>日</span>-->
                    <!--</div>-->
                    <!--<div class="word1" id="word1">-->
                        <!--&lt;!&ndash;标题&ndash;&gt;-->
                        <!--<a href="/index.php?c=passage&articleid=<?php echo ($news['articleid']); ?>" name="title">/index.php?c=passage&articleid=<?php echo ($news['articleid']); ?></a>-->
                        <!--&lt;!&ndash;内容&ndash;&gt;-->
                        <!--<p name="content"><?php echo $contentes = strip_tags($news['content']) ?></p>-->
                        <!--&lt;!&ndash;分区&ndash;&gt;-->
                        <!--<span class=label name=label><?php echo getColumnNameById($news['columnid']) ?></span>-->
                    <!--</div>-->
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
        <div class=change>
            <div id="page" class="page_div"></div>
        </div>
    </center>
</body>
<script>
    var title = document.getElementById("title").value;
    $("#page").paging({
            pageNo: <?php echo ($page["pageNow"]); ?>,
            totalPage: <?php echo ($page["pageTotal"]); ?>,
            totalSize: <?php echo ($page["pageRows"]); ?>,
            callback: function(num) {
                window.location.href = '/index.php?c=search&p=' + num + "&title="+title;

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