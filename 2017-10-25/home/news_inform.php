<?php
        include "../public/conn.php";
        $a_id = $_GET['id'];
        $sql = mysqli_query($conn, "select a_id, a_time, a_title from article where a_id = $a_id;");
        $res = mysqli_fetch_array($sql);
        $content = $res["a_id"].".txt";
//        echo "var detailUrl = \"../public/article/$content\";";

?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>新闻详情</title>
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
			<span class="toppic-title-span">新闻详情</span>
			<p>News Information</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="news.php" class="w-white">新闻动态</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="news_inform.php" class="w-white">新闻详情</a></span>
		</div>
	</div>
</div>

<div class="am-g am-container-1" style="background-color:#FFFFFF">
<!--<div class="am-container-1 margin-t30">-->
<!--	<div class="words-title ">-->
<!---->
<!---->
<!--		<!--标题-->
<!--		<span>--><?php //echo $res["a_title"] ?><!--</span>-->
<!--		<!--日期-->
<!--		<div>-->
<!--            --><?php
//            echo $res["a_time"] ?>
<!--        </div>-->
<!--	</div>-->
<!--</div>-->




<div class="am-u-sm-5 am-u-md-10 am-u-lg-9">
<!--        <a href="#"><img src="Temp-images/ad2.png" class="am-img-responsive" width="100%"/></a>-->




<!--    显示详细新闻部分*********************************************************-->
        <div class="words-title ">
            <!--标题-->
            <span><?php echo $res["a_title"] ?></span>
            <!--日期-->
            <div>
                <?php
                echo "发布时间：".$res["a_time"] ?>
            </div>
        </div>
        <!--内容-->
        <div class="contents">
<!--            <p dir="ltr">-->
            	<div id="showdetail"></div>
        </div>
<!--    显示详细新闻部分end******************************************************-->


        <div class="shang">
<!--            <img src="images/shang.png" >-->
        </div>
        <!--data-ds-short-name="amazeui" 多说的用户名-->
        <div data-am-widget="duoshuo" class="am-duoshuo am-duoshuo-default" data-ds-short-name="amazeui">
            <div class="ds-thread" >
            </div>
        </div>
    </div>



<div class="am-u-sm-0 am-u-md-0 am-u-lg-3">
        <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
            <h2 class="am-titlebar-title ">
                	最新要闻
            </h2>
            <nav class="am-titlebar-nav">
                <a href="news.php">more &raquo;</a>
            </nav>
        </div>

        <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg">
            <ul class="am-list"  >
                <li class="am-g am-list-item-desced">
                    <div class=" am-u-sm-12">
                        <div class="am-list-item-text">代码压缩和最小化</div>
                    </div>
                </li>
                <li class="am-g am-list-item-desced">
                    <div class=" am-u-sm-12">
                        <div class="am-list-item-text">代码压缩和最小化。</div>
                    </div>
                </li>
                <li class="am-g am-list-item-desced">
                    <div class=" am-u-sm-12">
                        <div class="am-list-item-text">了9个最好的JavaScript压缩工具将帮</div>
                    </div>
                </li>
                <li class="am-g am-list-item-desced">
                    <div class=" am-u-sm-12">
                        <div class="am-list-item-text">代码收集了9个最好的JavaScript压缩工具将帮</div>
                    </div>
                </li>
                <li class="am-g am-list-item-desced">
                    <div class=" am-u-sm-12">
                        <div class="am-list-item-text">代码压缩和最小化。在这里帮</div>
                    </div>
                </li>
                <li class="am-g am-list-item-desced">
                    <div class=" am-u-sm-12">
                        <div class="am-list-item-text">代码压缩和最小化。在这帮</div>
                    </div>
                </li>
            </ul>
        </div>
       </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        <?php
        echo "var detailUrl = \"../public/article/$content\";";
        ?>
        $('#showdetail').load(detailUrl);
    });
</script>


		<?php include ("footer_dome.php");?>
</body>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/amazeui.min.js"></script>


</html>
