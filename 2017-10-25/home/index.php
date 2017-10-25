<?php include "../public/conn.php";

$sql1 = mysqli_query($conn,"SELECT profile1,profile2,profile3 FROM ins_profile;");
$res1 = mysqli_fetch_array($sql1);

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!--<link rel="stylesheet" href="css/bootstrap.css" />-->
    <script type="text/javascript" src="../public/jquery-3.1.1.js"></script>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/lib.js"></script>-->
    <link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
    <link rel="stylesheet" href="css/amazeui.css"/>
    <link rel="stylesheet" href="css/style.css"/>


<body>
<!--回到顶部-->
<div data-am-widget="gotop" class="am-gotop am-gotop-fixed">
    <a href="#top" title="">
        <img class="am-gotop-icon-custom" src="images/topbule.png"/>
    </a>
</div>
<!-- 顶部的log区域  -->
<header class="container-top am-show-md-up" style="background: #0086DA;height: 170px;">
    <div class="enter">
        <a href="../admin/login.php">后台入口 </a>
    </div>
    <div class="toplogo"><a href="#"><img src="images/top_logo02_new.png"/></a></div>
</header>
<!-- 导航条 -->
<div class="nav-contain am-show-md-up">
    <div class="nav-inner">
<!--        这里下面是原本的代码-->
        <!--        <ul class="am-nav am-nav-pills am-nav-justify">-->
        <!--            <li style="border-top: 4px solid #0086DA;">-->
        <!--                <a href="index.php">首页</a></li>-->
        <!--            <li><a href="general-profile.php">研究所概况</a>-->
        <!--                <!-- sub-menu start-->
        <!--                <ul class="sub-menu">-->
        <!--                    <li class="menu-item"><a href="general-profile.php">研究所介绍</a></li>-->
        <!--                    <li class="menu-item"><a href="general-profile.php">研究内容</a></li>-->
        <!--                    <li class="menu-item"><a href="general-profile.php">课题项目</a></li>-->
        <!--                    <li class="menu-item"><a href="team.php">专家介绍</a></li>-->
        <!--                    <li class="menu-item"><a href="about-us.php">联系我们</a></li>-->
        <!--                </ul>-->
        <!--                <!-- sub-menu end-->
        <!--            </li>-->
        <!--            <li><a href="news.php">新闻动态 </a>-->
        <!--                <ul class="sub-menu">-->
        <!--                    <li class="menu-item"><a href="news.php">研究所新闻</a></li>-->
        <!--                    <li class="menu-item"><a href="news.php">学院新闻</a></li>-->
        <!--                    <li class="menu-item"><a href="news.php">系内热点</a></li>-->
        <!--                </ul>-->
        <!--            </li>-->
        <!--            <li><a href="#">研究成果</a>-->
        <!--                <ul class="sub-menu">-->
        <!--                    <li class="menu-item"><a href="#">成果介绍</a></li>-->
        <!--                    <li class="menu-item"><a href="#">成果展示</a></li>-->
        <!--                </ul>-->
        <!--            </li>-->
        <!--            <li><a href="#">开发交流 </a>-->
        <!--                <ul class="sub-menu">-->
        <!--                    <li class="menu-item"><a href="#">学术会议</a></li>-->
        <!--                    <li class="menu-item"><a href="#">学术论坛</a></li>-->
        <!--                </ul>-->
        <!--            </li>-->
        <!--            <li><a href="#">技术前沿 </a></li>-->
        <!--        </ul>-->
        <?php
//        这里是PHP的替换
        include "../public/conn.php";
        $sql="select * from menu";
        $sql = mysqli_query($conn,$sql);
        $data='';
        while($res = mysqli_fetch_array($sql)){
            $data[]=$res;
        }

        function getTree($data, $pId)
        {
            $tree = '';
            foreach($data as $k => $v)
            {
                if($v['menu_sid'] == $pId)
                { //父亲找到儿子
                    $v['menu_sid'] = getTree($data, $v['menu_id']);
                    $tree[] = $v;
                    //unset($data[$k]);
                }
            }
            return $tree;
        }
        $tree = getTree($data, 0);

        function procHtml($tree)
        {
            $html = '';
            foreach($tree as $t)
            {
                if($t['menu_sid'] == '')
                {
                    $html .= "<li class=\"menu-item\"><a href='{$t['menu_url']}' target='_blank'>{$t['menu_name']}</a></li>";
                }
                else
                {
                    $html .= "<li><a href='{$t['menu_url']}' target='_blank'>".$t['menu_name']."</a>";
                    $html .=  '<ul class="sub-menu">'.procHtml($t['menu_sid']).'</ul>';
                    $html = $html."</li>";
                }
            }
            return $html;
        }
        echo '<ul class="am-nav am-nav-pills am-nav-justify">'.procHtml($tree).'</ul>';

        ?>
    </div>
</div>
<!--nav end-->
<!--mobile header start-->
<div class="m-header am-show-sm-only">
    <div class="am-g">
        <header id="amz-header">
            <div class="amz-container am-cf" style="background: #0086DA;">
                <h1><a href="#"><img src="images/top_logo_sm.png" style="margin-left: 20px;height:80px;width: 400px;"/></a>
                </h1>
                <nav data-am-widget="menu" class="am-menu  am-menu-dropdown1" data-am-menu-collapse>
                    <a href="javascript: void(0)" class="am-menu-toggle">
                        <img src="images/menu.png"
                             style="height:45px;width: 45px; margin-right: 20px;margin-bottom: 20px;"
                             alt="Menu Toggle"/>
                    </a>


<!--                    <ul class="am-menu-nav am-avg-sm-1 am-collapse">-->
<!--                        <li>-->
<!--                            <a href="index.php">首页</a></li>-->
<!--                        <li class="am-parent">-->
<!--                            <a href="general-profile.php?id=1" class="">研究所概况</a>-->
<!--                            <ul class="am-menu-sub am-collapse  am-avg-sm-3 ">-->
<!--                                <li class="">-->
<!--                                    <a href="general-profile.php?id=1" class="">研究所介绍</a>-->
<!--                                </li>-->
<!--                                <li class="">-->
<!--                                    <a href="general-profile.php?id=2" class="">研究内容</a>-->
<!--                                </li>-->
<!--                                <li class="">-->
<!--                                    <a href="general-profile.php?id=3" class="">课题项目</a>-->
<!--                                </li>-->
<!--                                <li class="">-->
<!--                                    <a href="general-profile.php?id=4" class="">专家介绍</a>-->
<!--                                </li>-->
<!--                                <li class="">-->
<!--                                    <a href="general-profile.php?id=5" class="">联系我们</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="am-parent">-->
<!--                            <a href="news.php" class="">新闻动态</a>-->
<!--                            <ul class="am-menu-sub am-collapse  am-avg-sm-3 ">-->
<!--                                <li class="">-->
<!--                                    <a href="news.php" class="">研究所新闻</a>-->
<!--                                </li>-->
<!--                                <li class="">-->
<!--                                    <a href="news-2.php" class="">学院新闻</a>-->
<!--                                </li>-->
<!--                                <li class="">-->
<!--                                    <a href="news-3.php" class="">系内热点</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="am-parent">-->
<!--                            <a href="##" class="">研究成果</a>-->
<!--                            <ul class="am-menu-sub am-collapse  am-avg-sm-2 ">-->
<!--                                <li class="">-->
<!--                                    <a href="##" class="">成果介绍</a>-->
<!--                                </li>-->
<!--                                <li class="">-->
<!--                                    <a href="##" class="">成果展示</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="am-parent">-->
<!--                            <a href="general-profile.php" class="">开发交流</a>-->
<!--                            <ul class="am-menu-sub am-collapse  am-avg-sm-2 ">-->
<!--                                <li class="">-->
<!--                                    <a href="##" class="">学术会议</a>-->
<!--                                </li>-->
<!--                                <li class="">-->
<!--                                    <a href="##" class="">学术论坛</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="">-->
<!--                            <a href="##" class="">技术前沿</a>-->
<!--                        </li>-->
<!--                    </ul>-->

                    <?php
                    $sql="select * from menu_phone";
                    $sql = mysqli_query($conn,$sql);
                    $data='';
                    while($res = mysqli_fetch_array($sql)){
                        $data[]=$res;
                    }
                    $tree = getTree($data, 0);

                    function procHtml1($tree)
                    {
                        $html = '';
                        foreach($tree as $t)
                        {
                            if($t['menu_sid'] == '')
                            {
                                $html .= "<li class=\"\"><a href='{$t['menu_url']}'>{$t['menu_name']}</a></li>";
                            }
                            else
                            {
                                $html .= "<li class='am-parent'><a href='{$t['menu_url']}'>".$t['menu_name']."</a>";
                                $html .=  '<ul class="am-menu-sub am-collapse  am-avg-sm-3">'.procHtml1($t['menu_sid']).'</ul>';
                                $html = $html."</li>";
                            }
                        }
                        return $html;
                    }
                    echo '<ul class="am-menu-nav am-avg-sm-1 am-collapse">'.procHtml1($tree).'</ul>';


                    ?>
                </nav>


            </div>
        </header>

    </div>
    <!--mobile header end-->
</div>

<div class="rollpic">
    <div data-am-widget="slider" class="am-slider am-slider-c2" data-am-slider='{&quot;directionNav&quot;:false}'>
        <ul class="am-slides">
            <li>
                <img src="images/03.png">
                <div class="am-slider-desc" style="height: 50px;line-height:30px;"><h2>智能科技，畅想未来</h2></div>
            </li>
            <li>
                <img src="images/04.png">
                <div class="am-slider-desc" style="height: 50px;line-height:30px;"><h2>智能科技，畅想未来</h2></div>
            </li>
            <li>
                <img src="img/1.png">
                <div class="am-slider-desc" style="height: 80px;line-height:30px;"><h2>智能科技，畅想未来</h2></div>
            </li>
            <li>
                <img src="img/2.png">
                <div class="am-slider-desc" style="margin-bottom:95px;height: 50px;width:500px;line-height:30px;"><h2>智能科技，畅想未来</h2></div>
                <div class="am-slider-desc" style="height: 60px;line-height:30px;;"><h2>小数据，大世界，未来已来！</h2></div>
            </li>
        </ul>
    </div>
</div>

<div class="am-container-1">
    <div class="solutions part-all">
        <div class="part-title">
            <a href="general-profile.php">
                <i class="am-icon-lightbulb-o part-title-i"></i>
                <span class="part-title-span">研究所介绍</span>
                <p>Research institute</p>
            </a>
        </div>
        <ul class="am-g part-content solutions-content">
            <li class="am-u-sm-7 am-u-md-4 am-u-lg-4">
                <!--<i class="am-icon-safari solution-circle"></i>-->
                <img class="solution-circle" src="images/icon1.png"/>
                <!--<span class="solutions-title">网站、移动网站</span>-->
                <p><?=$res1['profile1'];?></p>
            </li>
            <li class="am-u-sm-6 am-u-md-4 am-u-lg-4">
                <!--<i class="am-icon-magic solution-circle"></i>-->
                <img class="solution-circle" src="images/icon2.png"/>
                <!--<span class="solutions-title">网站、移动网站</span>-->
                <p><?=$res1['profile2'];?></p>
            </li>
            <li class="am-u-sm-6 am-u-md-4 am-u-lg-4">
                <!--<i class="am-icon-phone solution-circle"></i>-->
                <img class="solution-circle" src="images/icon3.png"/>
                <!--<span class="solutions-title">网站、移动网站</span>-->
                <p><?=$res1['profile3'];?></p>
            </li>
        </ul>

    </div>
</div>

<div class="news-all" >
    <div class=" am-container-1">
        <div class="news part-all">
            <div class="part-title">
                <a href="news.html">
                    <i class="am-icon-newspaper-o part-title-i"></i>
                    <span class="part-title-span">新闻动态</span>
                    <p>News & Events</p>
                </a>
            </div>
            <div class="news-content">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                    <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
                        <h2 class="am-titlebar-title ">
                            研究所要闻
                        </h2>
                        <nav class="am-titlebar-nav">
                            <a target="_blank" href="news.html">more &raquo;</a>
                        </nav>
                    </div>

                    <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg">
                        <ul class="am-list">
                            <?php
                            $sql = mysqli_query($conn, "select * from article where a_belong = '1' group by a_id desc limit 0,5;");

                            while ($res = mysqli_fetch_array($sql)) {
                                $res["a_title"];
                                $res["a_id"];
                                $res["a_time"];
                                ?>
                                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                    <div class="am-u-sm-11" style="height: 60px;">
                                        <h3 class="am-list-item-hd">
                                            <a target="_blank" href="news_inform.php?id=<?php echo $res["a_id"] ?>"
                                               onclick="showdetail(this)"
                                               id="<?php echo $res["a_id"] ?>"><?php echo $res["a_title"] ?></a>
                                        </h3>
                                        <div class="am-list-item-text"><?php echo $res["a_time"] ?></div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>
                    </div>

                </div>


                <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                    <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
                        <h2 class="am-titlebar-title ">
                            学院新闻
                        </h2>
                        <nav class="am-titlebar-nav">
                            <a target="_blank" href="news.html">more &raquo;</a>
                        </nav>
                    </div>

                    <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg">
                        <ul class="am-list">
                            <?php
                            $sql = mysqli_query($conn, "select * from article where a_belong = '2' group by a_id desc limit 0,5;");

                            while ($res = mysqli_fetch_array($sql)) {
                                $res["a_title"];
                                $res["a_id"];
                                $res["a_time"];
                                ?>
                                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                    <div class=" am-u-sm-11" style="height: 60px;">
                                        <h3 class="am-list-item-hd">
                                            <a target="_blank" href="news_inform.php?id=<?php echo $res["a_id"] ?>"
                                               onclick="showdetail(this)"
                                               id="<?php echo $res["a_id"] ?>"><?php echo $res["a_title"] ?></a>
                                        </h3>
                                        <div class="am-list-item-text"><?php echo $res["a_time"] ?></div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="am-u-sm-12 am-u-md-12 am-u-lg-4">
                    <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default">
                        <h2 class="am-titlebar-title ">
                            系内热点
                        </h2>
                        <nav class="am-titlebar-nav">
                            <a href="news.html">more &raquo;</a>
                        </nav>
                    </div>

                    <div data-am-widget="list_news" class="am-list-news am-list-news-default right-bg">
                        <ul class="am-list">
                            <?php
                            $sql = mysqli_query($conn, "select * from article where a_belong = '3' group by a_id desc limit 0,5;");

                            while ($res = mysqli_fetch_array($sql)) {
                                $res["a_title"];
                                $res["a_id"];
                                $res["a_time"];
                                ?>
                                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                                    <div class=" am-u-sm-11" style="height: 60px;">
                                        <h3 class="am-list-item-hd">
                                            <a target="_blank" href="news_inform.php?id=<?php echo $res["a_id"] ?>"
                                               onclick="showdetail(this)"
                                               id="<?php echo $res["a_id"] ?>"><?php echo $res["a_title"] ?></a>
                                        </h3>
                                        <div class="am-list-item-text"><?php echo $res["a_time"] ?></div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>

<div class="part-all gray-li" style="margin: auto">
<div class="customer  am-container-1 am-u-sm-12 am-u-md-12 am-u-lg-12">
    <div class="part-title">
        <a href="team.php">
            <i class="am-icon-users part-title-i"></i>
            <span class="part-title-span">专家介绍</span>
            <p>Expert introduction</p>
        </a>
    </div>
</div>

<div id="category_top" style="background-image: url(images/zlbg.png); height: 370px;" class="am-u-sm-12 am-u-md-12 am-u-lg-12">
    <div class="am-container-1  am-slider " data-am-flexslider  >
        <ul class="am-u-sm-12 am-u-md-12 am-u-lg-12 am-thumbnails am-slides">
            <li>
                <ul class="am-avg-sm-4 am-avg-md-6 am-avg-lg-7 am-thumbnails" id="topface">
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044008834.bmp">
                                <h3 style="color: #0086DA;">张屹</h3>
                                <p>主任</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044022350.jpg">
                                <h3 style="color: #0086DA;">黄友谦</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044038374.bmp">
                                <h3 style="color: #0086DA;">侯广坤</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044055173.jpg">
                                <h3 style="color: #0086DA;">薛建民</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044108309.jpg">
                                <h3 style="color: #0086DA;">谭兆信</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044123118.jpg">
                                <h3 style="color: #0086DA;">姚恩建</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044108309.jpg">
                                <h3 style="color: #0086DA;">谭兆信</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044123118.jpg">
                                <h3 style="color: #0086DA;">姚恩建</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="am-avg-sm-4 am-avg-md-6 am-avg-lg-7 am-thumbnails" id="topface">
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044008834.bmp">
                                <h3 style="color: #0086DA;">张屹</h3>
                                <p>主任</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044022350.jpg">
                                <h3 style="color: #0086DA;">黄友谦</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044038374.bmp">
                                <h3 style="color: #0086DA;">侯广坤</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044055173.jpg">
                                <h3 style="color: #0086DA;">薛建民</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044108309.jpg">
                                <h3 style="color: #0086DA;">谭兆信</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044123118.jpg">
                                <h3 style="color: #0086DA;">姚恩建</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044108309.jpg">
                                <h3 style="color: #0086DA;">谭兆信</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="ctl">
                                <img src="images/20170501044123118.jpg">
                                <h3 style="color: #0086DA;">姚恩建</h3>
                                <p>教授</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


    </div>

</div>

</div>

<?php include("footer_dome.php"); ?>

<script>
    function showdetail(obj) {
        var id = obj.id;
        var kk = document.getElementById(id);
        var jj = kk.innerHTML;
        alert(jj);
    }
</script>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/amazeui.min.js"></script>
<script src="js/scroll.js"></script>
<script type="text/javascript">
</script>

</html>