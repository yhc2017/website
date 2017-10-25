<?php include "../public/conn.php"?>
<!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title>研究人才队伍</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
		<link rel="stylesheet" href="css/amazeui.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<?php include ("header.php");?>
		<div class="toppic" style="margin-top: 80px;">
			<div class="am-container-1">
				<div class="toppic-title left">
					<i class="am-icon-dropbox toppic-title-i"></i>
					<span class="toppic-title-span">人才队伍</span>
					<p>TEAM</p>
				</div>
				<div class="right toppic-progress">
					<span><a href="index.php" class="w-white">首页</a></span>
					<i class=" am-icon-arrow-circle-right w-white"></i>
					<span><a href="product-show.html" class="w-white">人才队伍</a></span>
				</div>
			</div>
		</div>

		<div class="am-u-sm-0 am-u-md-0 am-u-lg-2" style="margin-left: 100px;">
        <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
            <h2 class="am-titlebar-title ">
                公告
            </h2>
        </div>
        <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg">
            <ul class="am-list"  >
                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class=" am-u-sm-8 am-list-main">
                        <h3 class="am-list-item-hd"><a href="team.html">&nbsp 人才队伍</a></h3>
                    </div>
                </li>
                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class=" am-u-sm-8 am-list-main">
                        <h3 class="am-list-item-hd"><a href="general-profile.html">&nbsp 中心概况</a></h3>
                    </div>
                </li>
            </ul>
        </div>
       </div>
		
		<div class="am-g am-container" style="margin-top: 50px;">
<!--    		<div class="am-u-sm-5 am-u-md-10 am-u-lg-9">-->
    		<div class="am-u-sm-5  " style="margin-left: -10%;width: 100%;">


                <div data-tab-panel-3 class="am-tab-panel " >
                    <div class="am-container-1" style="background: #0000CC;">
                        <ul class=" solutions-content-ul">

                            <li class="am-u-sm-12 am-u-md-6 am-u-lg-12">

                                <?php
                                $sql = mysqli_query($conn, "select team_name,team_abstract,team_photo from ins_team where team_name='{$_GET['name']}';");

                                while ($res = mysqli_fetch_array($sql)) {
                                    $res["team_name"];
                                    $res["team_abstract"];
                                    $res["team_photo"];
                                    ?>
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
                                        <img src="images/<?=$res["team_photo"];?>"/>
                                    </div>
                                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
                                        <h5><?= $_GET['name'];?></h5>
                                        <p><?=$res["team_abstract"];?></p>
                                    </div>
                                    <?php
                                }
                                ?>

                            </li>
                            <li class="am-u-sm-12 am-u-md-6 am-u-lg-12" style="background-color: rgba(0,0,0,0);">
                                <ul data-am-widget="pagination" class="am-pagination am-pagination-default c">

                                    <br><br><br><br>
                                    <li class="am-pagination-first "></li>
                                    <li class="am-pagination-prev "></li><li class=""></li>
                                    <li class="am-active"></li>
                                    <li class=""></li>
                                    <li class=""></li>
                                    <li class=""></li>
                                    <li class="am-pagination-next "></li>
                                    <li class="am-pagination-last "></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>


    		</div>
    	</div>
	

		<?php include ("footer_dome.php");?>

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