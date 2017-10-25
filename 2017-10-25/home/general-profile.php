<?php
include "../public/conn.php";
$sql = mysqli_query($conn, "select photo_url from ins_profile;");
$sql2 = mysqli_query($conn, "select * from ins_profile;");
$res2 = mysqli_fetch_array($sql2);

?>


<?php
				$i = 1;
				if(is_array($_GET)&&count($_GET)>0){
					$i = $_GET["id"];
					$class = "am-active";
				}
	?>
<!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title>研究所概况</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<script type="text/javascript" src="../public/jquery-3.1.1.js"></script>
		<script src="js/lib.js"></script>
		<link rel="stylesheet" href="css/amazeui.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<?php include ("header.php");?>

		<div class="toppic" style="margin-top: 80px;">
			<div class="am-container-1">
				<div class="toppic-title left">
					<i class="am-icon-lightbulb-o toppic-title-i"></i>
					<span class="toppic-title-span">研究所概况</span>
					<p>Research overview</p>
				</div>
				<div class="right toppic-progress">
					<span><a href="index.php" class="w-white">首页</a></span>
					<i class=" am-icon-arrow-circle-right w-white"></i>
					<span><a href="solutions.html" class="w-white">研究所概况</a></span>
				</div>
			</div>
		</div>

		<div data-am-widget="tabs" class="am-tabs am-tabs-d2" style="background: #FFFFFF;">

			<ul class="am-tabs-nav am-cf solutions-tabs-ul ">
				<li class="<?php if($i == 1){ echo $class;} ?> solutions-tabs-ul-li1">
					<a href="[data-tab-panel-0]"><i class=" am-icon-arrows-v"></i><span>研究所介绍</span></a>
				</li>
				<li class="<?php if($i == 2){ echo $class;} ?> solutions-tabs-ul-li2">
					<a href="[data-tab-panel-1]"><i class=" am-icon-arrows-h"></i><span>研究内容</span></a>
				</li>
				<li class="<?php if($i == 3){ echo $class;} ?> solutions-tabs-ul-li3">
					<a href="[data-tab-panel-2]"><i class=" am-icon-backward"></i><span>课题项目</span></a>
				</li>
				<li class="<?php if($i == 4){ echo $class;} ?> solutions-tabs-ul-li4">
					<a href="[data-tab-panel-3]"><i class=" am-icon-bar-chart"></i><span>专家介绍</span></a>
				</li>
				<li class="<?php if($i == 5){ echo $class;} ?> solutions-tabs-ul-li5">
					<a href="[data-tab-panel-4]"><i class=" am-icon-bar-chart-o"></i><span>联系我们</span></a>
				</li>
			</ul>

			<div class="am-tabs-bd solutions-tabs-content ">

				<div data-tab-panel-0 class="am-tab-panel am-active">

					<div>
						<div class="am-article-hd" style="text-align: center;">
							<h1 class="am-article-title" style="color: #330352;">研究所介绍</h1>
							<p class="am-article-meta" style="border-bottom: 1px solid #555555;">Research institute</p>

						</div>
						<article class="am-article" style="margin-left: 100px; margin-right: 100px;">

							<div>
								<div class="left am-u-sm-12 am-u-md-12 am-u-lg-6 " style="margin-top: 50px;">
									<table>
										<td>
											<div class="am-article-hd">
												<h1 class="am-article-title"><img src="images/icon1.png" ></h1>

											</div>
										</td>
										<td>

										</td>
										<td>
											<div class="am-article-bd" style="">
                                                <p style="margin-left: 20px;"><?=$res2['profile1'];?></p>
                                            </div>
										</td>
									</table>
									<table style="margin-top: 20px;">
										<td>
											<div class="am-article-hd">
												<h1 class="am-article-title"><img src="images/icon2.png" ></h1>

											</div>
										</td>
										<td>

										</td>
										<td>
											<div class="am-article-bd">
                                                <p style="margin-left: 20px;"><?=$res2['profile2'];?></p>
                                            </div>
										</td>
									</table>
									<table style="margin-top: 20px;">
										<td>
											<div class="am-article-hd">
												<h1 class="am-article-title"><img src="images/icon3.png" ></h1>

											</div>
										</td>
										<td>

										</td>
										<td>
											<div class="am-article-bd">
                                                <p style="margin-left: 20px;"><?=$res2['profile3'];?></p>
                                            </div>
										</td>
									</table>

								</div>
								<div class="right am-u-sm-12 am-u-md-12 am-u-lg-5 " style="margin-top: 100px;">
									<img src="images/<?php
                                    if($res = mysqli_fetch_array($sql)){
                                        echo $res['photo_url'];
                                    }
                                    else {
                                        echo "defaulephoto.png";
                                    }

                                    ?>" style="width: 350px;height: 250px;" />
								</div>
								<div class="clear"></div>
							</div>

					</div>

				</div>

				<!--data-tab-panel-1-->

				<div data-tab-panel-1 class="am-tab-panel ">
					<div>

						<div class="left am-u-sm-12 am-u-md-12 am-u-lg-6 product-content-left">
							<article class="am-article">
								<div class="am-article-hd">
									<h1 class="am-article-title" style="color: #330352;">宗旨目标</h1>
									<p class="am-article-meta" style="border-bottom: 1px solid #555555;">OBJECTIVE GOAL</p>
								</div>

								<div class="product-show-content" style="margin-top: 15px;">
									<div class="am-article-bd">
										<p style="padding: 15px; background: rgba(255,255,255,0.5);">
											研究中心将建设形成在 学科、学术、技术、产业、机制 五方面均在国内具有引领地位的大型创新平台 搭建具有广泛普适性的存储、计算、分析和可视化平台 提升大数据技术的基础研究能力 提高学校在国际上的学术知名度 促进国家产业标准和产业政策的形成
										</p>
									</div>
								</div>

								<div class="product-show-content" style="margin-top: 15px;">
									<div class="am-article-bd">
										<p style="padding: 15px; background: rgba(255,255,255,0.5);">
											研究中心将建设形成在 学科、学术、技术、产业、机制 五方面均在国内具有引领地位的大型创新平台 搭建具有广泛普适性的存储、计算、分析和可视化平台 提升大数据技术的基础研究能力 提高学校在国际上的学术知名度 促进国家产业标准和产业政策的形成
										</p>
									</div>
								</div>
						</div>
						<div class="right am-u-sm-12 am-u-md-12 am-u-lg-6 product-content-right" style="margin-top: 15px;">
							<img width="500px" ;hheight="500px" ; src="images/img05.jpg" />
						</div>
						<div class="clear"></div>
					</div>
				</div>

          <div data-tab-panel-2 class="am-tab-panel ">
          	<div class="am-article-hd" >
								    <h1 class="am-article-title" style="color: #330352;">组织结构</h1>
								    <p class="am-article-meta" style="border-bottom: 1px solid #555555;width: 200px;" >ORGANIZATION STRUCTRUE</p>
								    
						    </div>
          	
          	<img class="am-round" src="images/zzjgt.png" style="margin-top: 10px;"/>
            
          </div>
          

				<!--data-tab-panel-3-->
				<div data-tab-panel-3 class="am-tab-panel " >
					<div class="am-container-1" style="background: #0000CC;">
						<ul class=" solutions-content-ul">
							<a href="#">
								<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
									<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
										<img src="images/thumb_320_224_20150520034101936.png" />
									</div>
									<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
										<h5>复杂网络链路可预测性</h5>
										<p>链路预测（Link Prediction）是网络科学中一个基础性的重要问题。该问题从已经观察到的网络结构入手，预测可能被观察漏掉的，或未来会出现的链路。精准的预测结果可以指导生物网络结构验证实验，大幅度节省实验成本和提高实验效率；可以进行在线社交网络的好友推荐；还可以挖掘出网络生长的内在机制。
										</p>
									</div>
							</a>
							</li>
							<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
								<a href="#">
									<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
										<img src="images/20150520033804497.png" />
									</div>
									<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
										<h5>多路数据分析中的贝叶斯非参方法</h5>
										<p>科学进步和经济发展的过程中总是伴随着海量的、动态的、结构复杂的数据的产生，人们称之为大数据。大数据是数字化生存时代的新型战略资源，是驱动创新的重要因素，正在改变人类的生产和生活方式。除了大数据的5V(Volume, Velocity, Variety, Veracity, Value)特性外，含有丰富数据的现实系统通常还具有：(1)高度复杂性，即数据由多个数据源或者多个方面组成；(2)数据存在显著稀疏性或不完整性。例如淘宝网会员超过3.7 亿人，在线商品超过8.8 亿件，每天交易数千万笔，产生约20TB数据；这里，
											<用户-商品-交易-时间>也构成一个多元稀疏关系。深刻理解这些多元关系中互动行为有助于把握隐藏在数据中的知识和掌握数据的变化规律。</p>
									</div>
								</a>
							</li>
							<li class="am-u-sm-12 am-u-md-6 am-u-lg-12" style="background-color: rgba(0,0,0,0);">
								<ul data-am-widget="pagination" class="am-pagination am-pagination-default c">

									<li class="am-pagination-first ">
										<a href="#" class="">第一页</a>
									</li>

									<li class="am-pagination-prev ">
										<a href="#" class="">上一页</a>
									</li>

									<li class="">
										<a href="#" class="">1</a>
									</li>
									<li class="am-active">
										<a href="#" class="am-active">2</a>
									</li>
									<li class="">
										<a href="#" class="">3</a>
									</li>
									<li class="">
										<a href="#" class="">4</a>
									</li>
									<li class="">
										<a href="#" class="">5</a>
									</li>

									<li class="am-pagination-next ">
										<a href="#" class="">下一页</a>
									</li>

									<li class="am-pagination-last ">
										<a href="#" class="">最末页</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					
				</div>
				
				
				<div data-tab-panel-4 class="am-tab-panel">

					<div>
						<div class="am-article-hd" style="text-align: center;">
							<h1 class="am-article-title" style="color: #330352;">研究所介绍</h1>
							<p class="am-article-meta" style="border-bottom: 1px solid #555555;">Research institute</p>

						</div>
						<article class="am-article" style="margin-left: 100px; margin-right: 100px;">

							<div>
								<div class="left am-u-sm-12 am-u-md-12 am-u-lg-6 " style="margin-top: 50px;">
									<table>
										<td>
											<div class="am-article-hd">
												<h1 class="am-article-title"><img src="images/icon1.png" ></h1>

											</div>
										</td>
										<td>

										</td>
										<td>
											<div class="am-article-bd" style="">
												<p style="margin-left: 20px;">目前国内规模最大、架构最完整的大数据产学研一体化机构,由国内大数据领域领军专家周涛教授组建并担任中心主任,致力于构建大数据行业的“贝尔实验室”</p>
											</div>
										</td>
									</table>
									<table style="margin-top: 20px;">
										<td>
											<div class="am-article-hd">
												<h1 class="am-article-title"><img src="images/icon2.png" ></h1>

											</div>
										</td>
										<td>

										</td>
										<td>
											<div class="am-article-bd">
												<p style="margin-left: 20px;">作为校级研究中心，拥有国家级人才12名，包括 2名长江学者，8名千人计划和1名万人计划获得者，中心成员曾获得1项国家自然科学二等奖，2项国家科技进步二等奖，11项省部级科技奖励一等奖。</p>
											</div>
										</td>
									</table>
									<table style="margin-top: 20px;">
										<td>
											<div class="am-article-hd">
												<h1 class="am-article-title"><img src="images/icon3.png" ></h1>

											</div>
										</td>
										<td>

										</td>
										<td>
											<div class="am-article-bd">
												<p style="margin-left: 20px;">定位为连接政府、企业、高校、研究院所、资本和创业型企业的纽带和中枢，致力建设成为在学科、学术、技术、产业、机制五方面均在国内具有引领地位的大型创新平台。</p>
											</div>
										</td>
									</table>

								</div>
								<div class="right am-u-sm-12 am-u-md-12 am-u-lg-5 " style="margin-top: 100px;">
									<img src="images/img04.jpg" style="width: 350px;height: 250px;" />
								</div>
								<div class="clear"></div>
							</div>

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