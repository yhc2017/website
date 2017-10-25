<?php
//        include "../public/conn.php";
//        $a_id = $_GET['id'];
//        $sql = mysqli_query($conn, "select a_title, a_time from article where a_id = ".$a_id.";");
//        $res = mysqli_fetch_array($sql);
//        $content = $res["a_title"].".txt";
////        echo "var detailUrl = \"../public/article/$content\";";
//
//?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>新闻详情预览页面</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <script type="text/javascript" src="../public/jquery-3.1.1.js"></script>
    <link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
    <link rel="stylesheet" href="css/amazeui.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php include ("header.php");?>
<div class="toppic" style="margin-top: 80px;">
    <div class="am-container-1">
        <div class="toppic-title left">
            <i class="am-icon-newspaper-o toppic-title-i"></i>
            <span class="toppic-title-span">新闻详情(预览界面)</span>
            <p>News Information</p>
        </div>
        <div class="right toppic-progress">
            <span><a href="news.html" class="w-white">新闻动态</a></span>
            <i class=" am-icon-arrow-circle-right w-white"></i>
            <span><a href="article_detail_preview.php" class="w-white">新闻详情</a></span>
        </div>
    </div>
</div>

<div class="am-container-1 margin-t30">
    <div class="words-title ">

        <!--标题-->
        		<span id="pretitle"></span>
<!--        <span>标题</span>-->
        <!--日期-->
        <div>
                        <?php
                        date_default_timezone_set('PRC');
                        $showtime = date("Y-m-d H:i:s");
                        echo $showtime ?>
<!--            日期-->
        </div>
    </div>
</div>

<article class="am-article">
    <!--新闻详细显示板块    div内不要设置其他样式，否则会冲突导致无法将内容居中显示-->
    <div id="showdetail"></div>
    <!--新闻详细显示板块end-->

    </div>
</article>



<footer class="footer">
			<ul>
				<li class="am-u-lg-6 am-u-md-6 am-u-sm-12 part-5-li2">
					<div class="part-5-title">联系我们</div>
					<div class="part-5-words2">
						<span>广东省广州市从化区经济开发区高技术产业园广从南路548号</span>
						<span>
							电话：020－87818918 
							传真：87818020  
							邮编：510990</span>
						<span></span>
					</div>
				</li>
				<li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
					<div class="part-5-title">相关链接</div>
					<div class="part-5-words2">
						<ul class="part-5-words2-ul">
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="http://www.sise.com.cn/">华软官网</a>
							</li>
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="http://home.sise.cn/">华软导航</a>
							</li>
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="http://soft.sise.cn/">软件工程系官网</a>
							</li>
							<li class="am-u-lg-4 am-u-md-6 am-u-sm-4">
								<a href="about-us.html">关于我们</a>
							</li>
							<div class="clear"></div>
						</ul>
					</div>
				</li>
				<div class="clear"></div>
			</ul>

		</footer>

<script type="text/javascript">
    $(document).ready(function(){
        var detailUrl = "../public/article/Temporary.txt";
        var pretitleUrl = "../public/article/TemporaryTitle.txt";
        $('#showdetail').load(detailUrl);
        $('#pretitle').load(pretitleUrl);
    });
</script>


</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="js/jquery.min.js"></script>
<!--<![endif]-->
<script src="js/amazeui.min.js"></script>


</html>
