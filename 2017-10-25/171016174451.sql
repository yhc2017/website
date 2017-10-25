/*
MySQL Backup
Source Server Version: 5.7.3
Source Database: news3
Date: 2017/10/16 17:44:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `a_id` int(8) NOT NULL AUTO_INCREMENT,
  `a_title` varchar(100) DEFAULT NULL,
  `a_centUrl` text,
  `a_user` varchar(10) DEFAULT NULL,
  `a_time` datetime DEFAULT NULL,
  `a_coverUrl` char(30) DEFAULT NULL,
  `a_belong` char(20) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=270 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `board`
-- ----------------------------
DROP TABLE IF EXISTS `board`;
CREATE TABLE `board` (
  `b_id` int(4) NOT NULL,
  `b_name` varchar(20) DEFAULT NULL,
  `b_pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `button`
-- ----------------------------
DROP TABLE IF EXISTS `button`;
CREATE TABLE `button` (
  `B_code` int(4) NOT NULL,
  `B_title` varchar(20) DEFAULT NULL,
  `B_pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`B_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `gg`
-- ----------------------------
DROP TABLE IF EXISTS `gg`;
CREATE TABLE `gg` (
  `id` int(4) NOT NULL,
  `g_g` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `guestbook`
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `g_id` int(4) NOT NULL,
  `g_user` varchar(10) DEFAULT NULL,
  `g_type` varchar(10) DEFAULT NULL,
  `g_email` varchar(20) DEFAULT NULL,
  `g_web` varchar(20) DEFAULT NULL,
  `g_qq` int(10) DEFAULT NULL,
  `g_time` datetime DEFAULT NULL,
  `g_cent` text,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `link`
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `l_id` int(4) NOT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `l_url` varchar(20) DEFAULT NULL,
  `l_pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `systemadmin`
-- ----------------------------
DROP TABLE IF EXISTS `systemadmin`;
CREATE TABLE `systemadmin` (
  `sys_adminId` char(10) DEFAULT NULL,
  `sys_adminPwd` char(100) DEFAULT NULL,
  `sys_grade` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `article` VALUES ('52','测试标题','<p>测试内容</p>','','2017-10-03 22:26:44',NULL,NULL), ('53','测试标题2','<p>测试内容2</p>','','2017-10-03 22:31:49',NULL,NULL), ('55','广发华福','<p>刚刚</p>','','2017-10-03 22:34:15',NULL,NULL), ('56','测试标题9','<p>测试内容9</p>','','2017-10-04 17:21:53',NULL,NULL), ('57','测试标题10','<p>测试内容10**************************</p>','','2017-10-04 17:28:45',NULL,NULL), ('58','测试标题11','<p>测试标题11</p>','','2017-10-04 17:59:27',NULL,NULL), ('59','测试标题121','<p>测试内容12</p>','','2017-10-04 23:19:46',NULL,NULL), ('60','测试标题15','<p>测试内容15</p><p><span style=\"color: rgb(255, 0, 0);\">sdfsfsdfsdf</span></p>','','2017-10-05 00:00:25',NULL,NULL), ('61','测试标题16','<p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20171005/1507133053569482.png\" title=\"1507133053569482.png\" alt=\"apple_pic.png\"/><br/></p><p style=\"text-align: center;\"><span style=\"font-size: 36px;\">测试<span style=\"font-size: 36px; color: rgb(255, 0, 0);\">内容16</span></span></p><p style=\"text-align: center;\"><span style=\"font-size: 36px;\"><span style=\"font-size: 36px; color: rgb(255, 0, 0);\">\0</span></span></p><p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20171005/1507133120916921.png\" title=\"1507133120916921.png\"/>的个梵蒂冈<span style=\"text-decoration: underline; font-size: 24px;\"><em><span style=\"text-decoration: underline; color: rgb(255, 0, 0);\">格式分公司发给对方讽德诵功东</span></em></span>方故事的分工是大法官斯蒂芬</p><p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20171005/1507133120104102.png\" title=\"1507133120104102.png\"/></p><p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20171005/1507133120904441.png\" title=\"1507133120904441.png\"/></p><p style=\"text-align: center;\"><span style=\"font-size: 36px;\"><span style=\"font-size: 36px; color: rgb(255, 0, 0);\"><br/></span></span><br/></p>','','2017-10-05 00:06:02',NULL,NULL), ('62','测试标题17','<p style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">今年的中秋没看见好看的月亮，</span></p><p style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">下午见~~</span></p><p><img src=\"/ueditor/php/upload/image/20171005/1507133785745826.png\" title=\"1507133785745826.png\" alt=\"12.PNG\"/></p>','','2017-10-05 00:17:11',NULL,NULL), ('63','测试标题20','<p>测试内容20</p>','','2017-10-05 19:18:01',NULL,NULL), ('65','测试标题21','<p>测试内容21</p>','','2017-10-05 19:33:53',NULL,NULL), ('66','测试标题22','<p>测试内容22</p>','','2017-10-05 19:36:28',NULL,NULL), ('67','测试标题23','<p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20171005/1507203614389093.png\" title=\"1507203614389093.png\"/><img src=\"/ueditor/php/upload/image/20171005/1507203614113603.png\" title=\"1507203614113603.png\"/></p><p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20171005/1507203614381347.png\" title=\"1507203614381347.png\"/></p><p style=\"text-align: center;\"><img src=\"/ueditor/php/upload/image/20171005/1507203614243947.png\" title=\"1507203614243947.png\"/></p><p>测试内容23测试内容23测试内容<span style=\"font-size: 36px;\">23测<span style=\"font-size: 36px; color: rgb(0, 176, 240);\">试</span>内<span style=\"font-size: 36px; color: rgb(192, 0, 0);\">容</span></span>23测试内容23测试内<span style=\"font-family: 隶书, SimLi; font-size: 24px;\">容23测试内容23</span>测试内<span style=\"color: rgb(255, 0, 0);\">容23测试</span>内容23测试内容23测试内容23</p>','','2017-10-05 19:41:26',NULL,NULL), ('68','测试标题24','<p><img src=\"/ueditor/php/upload/image/20171005/1507203784113638.png\" title=\"1507203784113638.png\"/>测试内容2<span style=\"color: rgb(255, 0, 0);\">4测<span style=\"font-size: 36px;\">试内</span></span><span style=\"font-size: 36px;\">容</span>24测试<span style=\"color: rgb(79, 129, 189);\">内容24<span style=\"font-size: 24px;\">测</span></span><span style=\"font-size: 24px;\">试内容24测试</span>内容24测<span style=\"color: rgb(79, 129, 189);\">试内</span>容24测试试<span style=\"color: rgb(0, 176, 80);\">内容24</span>测内容24</p><p><img src=\"/ueditor/php/upload/image/20171005/1507203784129878.png\" title=\"1507203784129878.png\"/><img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/>\0<img src=\"http://img.baidu.com/hi/jx2/j_0027.gif\"/>\0</p><p><img src=\"/ueditor/php/upload/image/20171005/1507203784857365.png\" title=\"1507203784857365.png\"/></p><p><img src=\"/ueditor/php/upload/image/20171005/1507203784115066.png\" title=\"1507203784115066.png\"/></p><p><br/></p>','','2017-10-05 19:45:21',NULL,NULL), ('69','测试内容25','<p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/>\0<img src=\"http://img.baidu.com/hi/jx2/j_0016.gif\"/>\0<img src=\"http://img.baidu.com/hi/jx2/j_0039.gif\"/>\0<img src=\"http://img.baidu.com/hi/jx2/j_0059.gif\"/>\0<img src=\"http://img.baidu.com/hi/jx2/j_0081.gif\"/></p><p><img src=\"/ueditor/php/upload/image/20171005/1507204058126960.png\" title=\"1507204058126960.png\"/>测试内容25测试内容25测<span style=\"font-size: 36px;\">试<span style=\"font-size: 36px; color: rgb(192, 0, 0);\">内容2</span>5测<span style=\"font-size: 36px; color: rgb(79, 129, 189);\">试内容</span></span>25<span style=\"font-size: 36px;\">测试内<span style=\"font-size: 36px; color: rgb(192, 0, 0);\">容2</span>5测试内容25</span>测试内容25测试内容25</p><p><img src=\"/ueditor/php/upload/image/20171005/1507204058101064.png\" title=\"1507204058101064.png\"/></p><p><img src=\"/ueditor/php/upload/image/20171005/1507204058376958.png\" title=\"1507204058376958.png\"/></p><p><br/></p>','','2017-10-05 19:48:39',NULL,NULL), ('70','测试标题22','<p>22222222222222222222</p>','','2017-10-05 21:23:53',NULL,NULL), ('107','反反复复付','<p>反反复复方法付付付付付付付付付</p>','','2017-10-07 10:20:24',NULL,NULL), ('108','版本','<p>巴巴爸爸不不不不不不不不不不不</p>','','2017-10-07 10:21:00',NULL,NULL), ('112','测试55','<p>测试55</p>','','2017-10-07 10:28:52',NULL,NULL), ('114','测试标题28','<p>测试标题28</p>','','2017-10-07 11:49:37',NULL,NULL), ('115','测试标题29','<p>测试内容29</p>','','2017-10-07 11:53:09',NULL,NULL), ('118','测试标题30','<p>303030303030300303030303030303</p>','','2017-10-07 11:56:19',NULL,NULL), ('122','测试标题31','<p>测试内容31</p>','','2017-10-07 12:25:52',NULL,NULL), ('123','测试标题33','<p><img src=\"/ueditor/php/upload/image/20171007/1507360025146738.jpg\" title=\"1507360025146738.jpg\" alt=\"8.1.jpg\"/>斤斤计较军简介简介军军军军军军军军</p><p><img src=\"/ueditor/php/upload/image/20171007/1507360106202249.png\" title=\"1507360106202249.png\"/></p><p><img src=\"/ueditor/php/upload/image/20171007/1507360106130239.png\" title=\"1507360106130239.png\"/></p><p><img src=\"/ueditor/php/upload/image/20171007/1507360106133006.png\" title=\"1507360106133006.png\"/></p><p><br/></p>','','2017-10-07 15:08:58',NULL,NULL), ('125','方法','','','2017-10-07 15:12:16',NULL,NULL), ('140','测试36','测试36','','2017-10-07 21:29:27',NULL,NULL), ('141','高分是官方','高分是官方','','2017-10-09 09:26:56',NULL,NULL), ('144','测试37','测试37','','2017-10-09 09:29:07',NULL,NULL), ('145','测试38','测试38','','2017-10-09 09:33:37',NULL,NULL), ('146','测试标题39','测试标题39','','2017-10-09 09:39:18',NULL,NULL), ('147','测试标题44','测试标题44','','2017-10-09 10:25:27',NULL,NULL), ('148','测试标题45','测试标题45','','2017-10-09 10:27:22',NULL,'1'), ('149','测试标题46','../public/article/测试标题46.txt','','2017-10-09 10:31:04',NULL,'2'), ('152','测试55','../public/article/测试55.txt','','2017-10-10 14:07:51',NULL,'2'), ('153','测试56','../public/article/测试56.txt','','2017-10-10 14:09:44',NULL,'2'), ('154','测试标题57','../public/article/测试标题57.txt','','2017-10-10 14:10:45',NULL,'1'), ('155','测试标题58','../public/article/测试标题58.txt','','2017-10-10 14:11:37',NULL,'1'), ('156','测试标题60','../public/article/测试标题60.txt','','2017-10-10 14:13:19',NULL,'1'), ('157','测试标题61','../public/article/测试标题61.txt','','2017-10-10 14:14:58',NULL,'1'), ('158','测试标题62','../public/article/测试标题62.txt','','2017-10-10 14:16:30',NULL,'3'), ('159','测试长文章','../public/article/测试长文章.txt','','2017-10-10 14:17:10',NULL,'3'), ('160','测试长文章','../public/article/测试长文章.txt','','2017-10-10 14:17:45',NULL,'3'), ('161','方法','../public/article/方法.txt','','2017-10-10 14:20:04',NULL,'3'), ('162','测试','../public/article/测试.txt','','2017-10-10 14:25:15',NULL,'1'), ('163','测试标题63','../public/article/测试标题63.txt','','2017-10-10 14:36:07',NULL,'1'), ('164','测试标题22','../public/article/测试标题22.txt','','2017-10-10 14:37:13',NULL,'1'), ('175','水晶头故障','../public/article/水晶头故障.txt','','2017-10-10 15:56:46',NULL,'1'), ('177','测试标题222','../public/article/测试标题222.txt','','2017-10-10 17:29:45',NULL,'2'), ('182','测试发布长篇文章','../public/article/测试发布长篇文章.txt','','2017-10-10 18:02:11',NULL,'2'), ('183','test66666','../public/article/test66666.txt','','2017-10-10 22:43:52',NULL,'2'), ('184','测试长文章2','../public/article/测试长文章2.txt','','2017-10-11 17:19:07',NULL,'2'), ('186','测试长文章3','../public/article/测试长文章3.txt','','2017-10-11 19:19:48',NULL,'3'), ('187','测试长文章4','../public/article/测试长文章4.txt','','2017-10-11 19:23:30',NULL,'3'), ('189','测试长文章5','../public/article/测试长文章5.txt','','2017-10-11 20:05:33',NULL,'3'), ('190','测试长文章6','../public/article/测试长文章6.txt','','2017-10-11 20:09:26',NULL,'3'), ('191','测试复制张贴包含图片的新闻','../public/article/测试复制张贴包含图片的新闻.txt','','2017-10-11 20:11:31',NULL,'1'), ('192','测试复制张贴包含图片的新闻2','../public/article/测试复制张贴包含图片的新闻2.txt','','2017-10-11 20:14:59',NULL,'1'), ('193','测试复制张贴包含图片的新闻3','../public/article/测试复制张贴包含图片的新闻3.txt','','2017-10-11 20:17:32',NULL,'1'), ('194','测试复制张贴包含图片的新闻4','../public/article/测试复制张贴包含图片的新闻4.txt','','2017-10-11 20:20:06',NULL,'2'), ('195','测试复制张贴包含图片的新闻5','../public/article/测试复制张贴包含图片的新闻5.txt','','2017-10-11 20:28:50',NULL,'2'), ('196','中方如何评论美轰炸机飞临朝鲜外交部回应','111','','2017-10-11 20:33:50',NULL,'2'), ('204','测试改变文件名6','../public/article/204.txt','','2017-10-11 21:35:14',NULL,'3'), ('205','testtltie','../public/article/205.txt','','2017-10-11 21:38:13',NULL,'3'), ('206','印军又在克什米尔损兵折将','../public/article/206.txt','','2017-10-11 21:47:12',NULL,'1'), ('207','20171015-1.0','../public/article/207.txt','','2017-10-15 10:25:10',NULL,'1'), ('208','20171015-1.1','../public/article/208.txt','','2017-10-15 14:52:45','','2'), ('209','20171015-1.2','../public/article/209.txt','','2017-10-15 14:56:11','','3'), ('210','20171015-1.3','../public/article/210.txt','','2017-10-15 14:57:18','6666','2'), ('211','20171015-1.4','../public/article/211.txt','','2017-10-15 15:02:56','6666','1'), ('212','20171015-1.5','../public/article/212.txt','','2017-10-15 15:09:06','6666','2'), ('213','20171015-1.6','../public/article/213.txt','','2017-10-15 15:11:20','6666','3'), ('214','20171015-1.7','../public/article/214.txt','','2017-10-15 15:13:04','6666','3'), ('217','1.8','../public/article/217.txt','','2017-10-15 18:48:22','','2'), ('218','1.9','../public/article/218.txt','','2017-10-15 18:53:41','','1'), ('219','2.1','../public/article/219.txt','','2017-10-15 19:01:40','','1'), ('221','2.2','../public/article/221.txt','','2017-10-15 19:25:25','','2'), ('222','马达加斯加鼠疫蔓延已致57死 中使馆发安全提醒','../public/article/222.txt','','2017-10-15 19:28:45','','3'), ('223','2.3','../public/article/223.txt','','2017-10-15 20:12:46','','3'), ('224','2.4','../public/article/224.txt','','2017-10-15 20:13:24','','2'), ('225','2.5','../public/article/225.txt','','2017-10-15 20:22:50','','1'), ('226','2.6','../public/article/226.txt','','2017-10-15 20:25:19','','1'), ('227','2.7','../public/article/227.txt','','2017-10-15 20:31:40','','2'), ('228','2.8','../public/article/228.txt','','2017-10-15 20:33:22','','3'), ('229','2.9','../public/article/229.txt','','2017-10-15 20:38:17','','2'), ('230','3.0','../public/article/230.txt','','2017-10-15 20:40:23','','1'), ('231','3.1','../public/article/231.txt','','2017-10-15 20:41:56','','2'), ('232','3.3','../public/article/232.txt','','2017-10-15 20:42:32','','3'), ('239','3.4','../public/article/239.txt','','2017-10-15 20:50:06','','1'), ('240','3.5','../public/article/240.txt','','2017-10-15 20:50:23','','2'), ('241','3.6','../public/article/241.txt','','2017-10-15 20:50:39','','3'), ('242','3.7','../public/article/242.txt','','2017-10-15 20:57:02','','1'), ('243','3.8','../public/article/243.txt','','2017-10-15 21:28:15','','1'), ('244','动态2','../public/article/244.txt','','2017-10-15 21:34:58','','2'), ('245','aa','../public/article/245.txt','','2017-10-16 10:26:01','','1'), ('246','“中国桥”的故事：神女应无恙 当惊世界殊','../public/article/246.txt','','2017-10-16 10:33:38','','1'), ('255','【中央电视台•新闻联播】华软学院梁冠军董事长出席国庆招待会暨海交会（图文）','../public/article/255.txt','','2017-10-16 11:48:35','','1'), ('256','华软学院举行2017级新生军训汇报演出（图文）','../public/article/256.txt','','2017-10-16 11:53:07','','1'), ('257','华软举行“纪念建军90周年”2017级新生军歌比赛（图文）','../public/article/257.txt','','2017-10-16 11:53:48','','1'), ('258','“砥砺奋进 携梦前行” 学院党委副书记张高峰讲授思政第一课(图文）','../public/article/258.txt','','2017-10-16 11:54:55','','1');
INSERT INTO `article` VALUES ('259','数码媒体系马建华教授作品入围首届全国美术教育教师作品展（图文）','../public/article/259.txt','','2017-10-16 11:55:53','','1'), ('260','华软学院举行2017级新生安全主题教育讲座（图文）','../public/article/260.txt','','2017-10-16 11:57:49','','3'), ('261','喜迎十九大 思政部出新意（图文）','../public/article/261.txt','','2017-10-16 11:58:20','','3'), ('262','援越老兵“做客”2017级新生军事理论课（图文）','../public/article/262.txt','','2017-10-16 11:58:46','','3'), ('263','我院9课题获广州市教育系统党建学会立项','../public/article/263.txt','','2017-10-16 11:59:34','','3'), ('264','我院部署并开展校园安全综合治理专项工作（图文）','../public/article/264.txt','','2017-10-16 12:00:30','','3'), ('265','顶呱呱服务队世界视觉日活动——爱眼护眼，从我做起（图文）','../public/article/265.txt','','2017-10-16 12:01:49','','2'), ('266','软件工程系召开“师德建设”主题会议（图文）','../public/article/266.txt','','2017-10-16 12:02:31','','2'), ('267','火辣辣的健身月，气汹汹的拔河赛（图文）','../public/article/267.txt','','2017-10-16 12:03:26','','2'), ('268','2017—2018年度软件工程系第一期主题团课','../public/article/268.txt','','2017-10-16 12:04:23','','2'), ('269','软件系学生第一党支部专题学习民主生活会（图文）','../public/article/269.txt','','2017-10-16 12:04:53','','2');
INSERT INTO `news` VALUES ('<p>sdadsasd</p>'), ('<p>llll</p>'), ('<p>656565655656</p>'), ('<p style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">656565655656</span></p>'), ('<p style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">656565655656<img src=\"/ueditor/php/upload/image/20171002/1506928873116000.png\" title=\"1506928873116000.png\" alt=\"banana_pic.png\"/></span></p>'), ('<p style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">656565655656<img src=\"/ueditor/php/upload/image/20171002/1506928873116000.png\" title=\"1506928873116000.png\" alt=\"banana_pic.png\"/></span></p>'), (''), (''), ('<p>33333333333333333333</p>'), (''), ('<p>14444444444444</p>'), (''), ('<p>555555<br/></p>'), ('<p>hghgfhfghfhfhhfghfhf</p>');
INSERT INTO `systemadmin` VALUES ('33','$2y$10$PvUkDmk17OCIip3jHUZ1YesnjcE/jsvMAelZlOATLzITj63PFPmrW','1'), ('1','$2y$10$T3WTuP5ZkvlS2HAqRO4psuuG5DUcpe3.q.1EDO3ENWeAyxVELSJlW','2'), ('55','$2y$10$HM9kQbeBx2LS44gwXkAS0eDUCl1bz.dHdJddsic3kdlTA6GE/Kgf2','1'), ('66','$2y$10$yczWu0/XmNnxtKjrafGYd.FIuDBkMrXwXdftMVPYB5GcWhrouVDNe','2'), ('admin','$2y$10$bIgDzkAWkcflrmEoocKq8uo3g7h/ONIYhaQUlPmAPan.cBoh7XuGu','2'), ('snail','$2y$10$woAp7K3/b3giu/1HwUiOKeUJFDfVofUV/5OPHPaW7aXD3w7Es8ccC','2');
