<!--后台主页-->
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>研究所后台管理中心</title>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>   
</head>

<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />研究所后台管理中心</h1>
  </div>
  <div class="head-l">
      <a class="button button-little bg-green" href="../home/index.php" target="_blank">
          <span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;
<!--      <a href="##" class="button button-little bg-blue">-->
<!--          <span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;-->
      <a class="button button-little bg-red" href="login.php">
          <span class="icon-power-off"></span> 退出登录</a> </div>
</div>

<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>

<!--    <h2><span class="icon-pencil-square-o"></span>文章上传管理</h2>-->
<!--    <ul>-->
<!--        <li><a href="article_up.php?aa=1" target="right"><span class="icon-caret-right"></span>上传学院要闻文章</a></li>-->
<!--        <li><a href="article_up.php?aa=2" target="right"><span class="icon-caret-right"></span>上传系内热点文章</a></li>-->
<!--        <li><a href="article_up.php?aa=3" target="right"><span class="icon-caret-right"></span>上传校园快讯文章</a></li>-->
<!--<!--        <li><a href="article_admin.php" target="right"><span class="icon-caret-right"></span>文章管理</a></li>-->
<!--        <li><a href="article_column.php" target="right"><span class="icon-caret-right"></span>各栏目文章管理</a></li>-->
<!--    </ul>-->

    <h2><span class="icon-pencil-square-o"></span>栏目菜单管理</h2>
    <ul>
        <li><a href="column_add.php" target="right"><span class="icon-caret-right"></span>栏目添加</a></li>
        <li><a href="column_look.php" target="right"><span class="icon-caret-right"></span>栏目浏览</a></li>
        <li><a href="column_edit.php" target="right"><span class="icon-caret-right"></span>各栏目菜单编辑</a></li>
    </ul>

    <h2><span class="icon-pencil-square-o"></span>系统信息管理</h2>
    <ul>
<!--        <li><a href="pass.php" target="right"><span class="icon-caret-right"></span>用户名密码修改</a></li>-->
        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>用户名密码修改</a></li>
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>上传文件管理</a></li>-->
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>占用空间管理</a></li>-->
    </ul>

    <h2><span class="icon-pencil-square-o"></span>管理员信息管理</h2>
    <ul>
        <li><a href="admin_add.php" target="right"><span class="icon-caret-right"></span>添加管理员</a></li>
        <li><a href="admin_select.php" target="right"><span class="icon-caret-right"></span>查看管理员</a></li>
        <li><a href="admin_delect.php" target="right"><span class="icon-caret-right"></span>修改管理员</a></li>
    </ul>

<!--    对应导航栏六大板块-->
    <h2><span class="icon-pencil-square-o"></span>首页</h2>
    <ul>
        <li><a href="footer_edit.php" target="right"><span class="icon-caret-right"></span>编辑脚部内容</a></li>
<!--        <li><a href="profile_edit.php" target="right"><span class="icon-caret-right"></span>编辑研究所概况内容</a></li>-->
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>查看管理员</a></li>-->
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>修改管理员</a></li>-->
    </ul>

    <h2><span class="icon-pencil-square-o"></span>研究所概况</h2>
    <ul>
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>研究所介绍</a></li>-->
        <li><a href="profile_edit.php" target="right"><span class="icon-caret-right"></span>研究所介绍</a></li>
        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>研究内容</a></li>
        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>课题项目</a></li>
        <li><a href="team_edit.php" target="right"><span class="icon-caret-right"></span>专家介绍</a></li>
        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>联系我们</a></li>
    </ul>

    <h2><span class="icon-pencil-square-o"></span>新闻动态</h2>
    <ul>
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>研究所新闻</a></li>-->
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>学院新闻</a></li>-->
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>系内热点</a></li>-->

        <li><a href="article_up.php?aa=1" target="right"><span class="icon-caret-right"></span>上传研究所新闻</a></li>
        <li><a href="article_up.php?aa=2" target="right"><span class="icon-caret-right"></span>上传学院新闻</a></li>
        <li><a href="article_up.php?aa=3" target="right"><span class="icon-caret-right"></span>上传系内热点</a></li>
        <!--        <li><a href="article_admin.php" target="right"><span class="icon-caret-right"></span>文章管理</a></li>-->
        <li><a href="article_column.php" target="right"><span class="icon-caret-right"></span>各栏目文章管理</a></li>


    </ul>

    <h2><span class="icon-pencil-square-o"></span>研究成果</h2>
    <ul>
        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>成果介绍</a></li>
        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>成果展示</a></li>
    </ul>

    <h2><span class="icon-pencil-square-o"></span>开放交流</h2>
    <ul>
        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>学术会议</a></li>
        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>学术论坛</a></li>
    </ul>

    <h2><span class="icon-pencil-square-o"></span>技术前沿</h2>
    <ul>
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>添加管理员</a></li>-->
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>查看管理员</a></li>-->
<!--        <li><a href="no.php" target="right"><span class="icon-caret-right"></span>修改管理员</a></li>-->
    </ul>

<!--    对应导航栏六大板块end-->



</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="{:U('Index/info')}" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
<!--  <li><b>当前语言：</b><span style="color:red;">中文</php></span>-->
<!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>-->
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="article_up.php?aa=1" name="right" width="100%" height="100%"></iframe>
</div>
<!--<div style="text-align:center;">-->
<!--<!--<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>-->
<!--</div>-->
</body>
</html>