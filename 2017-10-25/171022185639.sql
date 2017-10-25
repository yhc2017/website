/*
MySQL Backup
Source Server Version: 5.7.3
Source Database: news3
Date: 2017/10/22 18:56:39
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
) ENGINE=InnoDB AUTO_INCREMENT=278 DEFAULT CHARSET=utf8;

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
--  Table structure for `footerinfo`
-- ----------------------------
DROP TABLE IF EXISTS `footerinfo`;
CREATE TABLE `footerinfo` (
  `footer_relation` text,
  `footer_cooperation` text
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
--  Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_sid` int(11) DEFAULT NULL,
  `menu_name` char(20) DEFAULT NULL,
  `menu_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

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
INSERT INTO `article` VALUES ('222','马达加斯加鼠疫蔓延已致57死 中使馆发安全提醒','../public/article/222.txt','admin','2017-10-15 19:28:45','','3'), ('246','“中国桥”的故事：神女应无恙 当惊世界殊','../public/article/246.txt','admin','2017-10-16 10:33:38','','1'), ('255','【中央电视台•新闻联播】华软学院梁冠军董事长出席国庆招待会暨海交会（图文）','../public/article/255.txt','admin','2017-10-16 11:48:35','','2'), ('256','华软学院举行2017级新生军训汇报演出（图文）','../public/article/256.txt','admin','2017-10-16 11:53:07','','1'), ('257','华软举行“纪念建军90周年”2017级新生军歌比赛（图文）','../public/article/257.txt','admin','2017-10-16 11:53:48','','1'), ('258','“砥砺奋进 携梦前行” 学院党委副书记张高峰讲授思政第一课(图文）','../public/article/258.txt','admin','2017-10-16 11:54:55','','1'), ('259','数码媒体系马建华教授作品入围首届全国美术教育教师作品展（图文）','../public/article/259.txt','admin','2017-10-16 11:55:53','','1'), ('260','华软学院举行2017级新生安全主题教育讲座（图文）','../public/article/260.txt','admin','2017-10-16 11:57:49','','3'), ('261','喜迎十九大 思政部出新意（图文）','../public/article/261.txt','admin','2017-10-16 11:58:20','','3'), ('262','援越老兵“做客”2017级新生军事理论课（图文）','../public/article/262.txt','admin','2017-10-16 11:58:46','','3'), ('263','我院9课题获广州市教育系统党建学会立项','../public/article/263.txt','admin','2017-10-16 11:59:34','','3'), ('264','我院部署并开展校园安全综合治理专项工作（图文）','../public/article/264.txt','admin','2017-10-16 12:00:30','','3'), ('265','顶呱呱服务队世界视觉日活动——爱眼护眼，从我做起（图文）','../public/article/265.txt','admin','2017-10-16 12:01:49','','2'), ('266','软件工程系召开“师德建设”主题会议（图文）','../public/article/266.txt','admin','2017-10-16 12:02:31','','2'), ('267','火辣辣的健身月，气汹汹的拔河赛（图文）','../public/article/267.txt','admin','2017-10-16 12:03:26','','2'), ('268','2017—2018年度软件工程系第一期主题团课','../public/article/268.txt','admin','2017-10-16 12:04:23','','2'), ('270','华软学子勇夺全国大学生物联网设计竞赛两项大奖（图文）','../public/article/270.txt','admin','2017-10-17 21:21:45','','2'), ('271','图书馆入馆教育引导新生“悦读”“会读”（图文）','../public/article/271.txt','snail','2017-10-17 21:23:03','','3'), ('277','5','../public/article/277.txt','admin','2017-10-22 18:05:50','','1');
INSERT INTO `footerinfo` VALUES ('<p>广东省广州市从化区经济开发区高技术产业园广从南路548号</p><p>电话：020－87818918&nbsp;</p><p>传真：87818020 &nbsp;</p><p>邮编：510990</p><p><br/></p>','<p>单位1</p><p>单位2</p><p>单位3</p><p>单位4</p>');
INSERT INTO `menu` VALUES ('1','0','首页',NULL), ('2','0','中心概况',NULL), ('3','0','新闻动态',NULL), ('4','0','人才队伍',NULL), ('5','0','关于我们',NULL), ('6','1','中心概况',NULL), ('7','1','宗旨目标',NULL), ('8','2','媒体报道',NULL), ('9','2','公告通知',NULL), ('10','9','第3级',NULL), ('11','4','研究成果',NULL), ('12','4','学术资源',NULL), ('13','10','di',NULL);
INSERT INTO `news` VALUES ('<p>sdadsasd</p>'), ('<p>llll</p>'), ('<p>656565655656</p>'), ('<p style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">656565655656</span></p>'), ('<p style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">656565655656<img src=\"/ueditor/php/upload/image/20171002/1506928873116000.png\" title=\"1506928873116000.png\" alt=\"banana_pic.png\"/></span></p>'), ('<p style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">656565655656<img src=\"/ueditor/php/upload/image/20171002/1506928873116000.png\" title=\"1506928873116000.png\" alt=\"banana_pic.png\"/></span></p>'), (''), (''), ('<p>33333333333333333333</p>'), (''), ('<p>14444444444444</p>'), (''), ('<p>555555<br/></p>'), ('<p>hghgfhfghfhfhhfghfhf</p>');
INSERT INTO `systemadmin` VALUES ('admin','$2y$10$bIgDzkAWkcflrmEoocKq8uo3g7h/ONIYhaQUlPmAPan.cBoh7XuGu','1'), ('snail','$2y$10$2ygoH38EidlHxswO66GTne6MhMLM1SS9Bwnb5U9NT3epm4xltWnze','2'), ('123','$2y$10$d8FeD7C3rcQZt0zrJXfYXOUi10g6O7rQL8qh6PcJwHm81L8b4RX/u','2');
