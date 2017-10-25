<?php
/**
 * wgx
 * 修改：把菜单栏替换成PHP
 * 2017年10月24日17点24分
 */
?>
<header class="am-topbar header">
	<div class="am-container-1">
		<div class="left hw-logo">
			<img class="logo " src="images/huaruan.jpg" style="font-family: Helvetica Neue;">软件生态与人工智能研究所</img>
		</div>
		<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
  class="am-icon-bars"></span></button>

		<div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">

			<div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
<!--				<ul class="am-nav am-nav-pills am-topbar-nav hw-menu">-->
<!--					<li>-->
<!--						<a href="index.php">首页</a>-->
<!--					</li>-->
<!--					<li>-->
<!--						<a href="general-profile.php?id=1">研究所概况</a>-->
<!--					</li>-->
<!--					<li>-->
<!--						<a href="news.php">新闻动态 </a>-->
<!--					</li>-->
<!--					<li>-->
<!--						<a href="achievement.php">研究成果</a>-->
<!--					</li>-->
<!--					<li>-->
<!--						<a href="open-exchange.php">开放交流</a>-->
<!--					</li>-->
<!--					<li>-->
<!--						<a href="technology-frontier.php">技术前沿</a>-->
<!--					</li>-->
<!--				</ul>-->
				<?php
                include_once ("../public/conn.php");
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

				function procHtml1($tree)
				{
					$html = '';
					foreach($tree as $t)
					{
							$html .= "<li class=\"\"><a href='{$t['menu_url']}'>{$t['menu_name']}</a></li>";
					}
					return $html;
				}
				echo '<ul class="am-nav am-nav-pills am-topbar-nav hw-menu">'.procHtml1($tree).'</ul>';
				?>
			</div>

		</div>
	</div>
</header>