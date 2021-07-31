/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50160
Source Host           : localhost:3306
Source Database       : zjy

Target Server Type    : MYSQL
Target Server Version : 50160
File Encoding         : 65001

Date: 2019-04-14 02:28:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `allusers`
-- ----------------------------
DROP TABLE IF EXISTS `allusers`;
CREATE TABLE `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of allusers
-- ----------------------------
INSERT INTO `allusers` VALUES ('2', 'hsg', 'hsg', '超级管理员', '2019-04-14 07:46:56');

-- ----------------------------
-- Table structure for `dingdan`
-- ----------------------------
DROP TABLE IF EXISTS `dingdan`;
CREATE TABLE `dingdan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dingdanhao` varchar(50) DEFAULT NULL,
  `jine` varchar(50) DEFAULT NULL,
  `dingdanneirong` varchar(500) DEFAULT NULL,
  `yonghuming` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `youjidizhi` varchar(300) DEFAULT NULL,
  `youbian` varchar(50) DEFAULT NULL,
  `dianhua` varchar(50) DEFAULT NULL,
  `kuaidileixing` varchar(50) DEFAULT NULL,
  `kuaidifeiyong` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(255) DEFAULT '否',
  `iszf` varchar(2) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of dingdan
-- ----------------------------
INSERT INTO `dingdan` VALUES ('20', '14911934753411', '88', '商品编号：14893682080040，件数：1;\r\n', '555', '何升高', '浙江', '325000', '13888888888', '邮政EMS15', '15', '2019-04-14 12:24:50', '是', '是');
INSERT INTO `dingdan` VALUES ('21', '14911959604135', '143', '商品编号：14893682080040，件数：1;\r\n商品编号：14893745099344，件数：1;\r\n', '555', '何升高', '浙江', '325000', '13888888888', '邮政EMS15', '15', '2019-04-14 01:06:14', '是', '是');
INSERT INTO `dingdan` VALUES ('22', '14911973487083', '129', '商品编号：14911961525920，件数：2;\r\n商品编号：14893728416047，件数：1;\r\n', '555', '何升高', '浙江', '325000', '13888888888', '邮政EMS15', '15', '2019-04-14 01:29:17', '是', '是');
INSERT INTO `dingdan` VALUES ('23', '14939790129237', '56', '图书编号：14911961525920，件数：1;\r\n图书编号：14893745099344，件数：1;\r\n', '555', '何升高', '浙江', '325000', '13888888888', '快递送货10', '10', '2019-04-14 18:10:23', '否', '是');

-- ----------------------------
-- Table structure for `dx`
-- ----------------------------
DROP TABLE IF EXISTS `dx`;
CREATE TABLE `dx` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dx
-- ----------------------------
INSERT INTO `dx` VALUES ('1', '系统简介', '<p>\r\n	系统简介fdw\r\n</p>', '2019-04-14 18:16:29');
INSERT INTO `dx` VALUES ('2', '系统公告', '<p>\r\n	欢迎大家登陆我站，我站主要是为广大朋友精心制作的一个系统，希望大家能够在我站获得一个好心情，谢谢！\r\n</p>\r\n<p>\r\n	自强不息，海纳百川，努力学习！we\r\n</p>', '2019-04-14 18:16:36');
INSERT INTO `dx` VALUES ('3', '中心介绍', '<p>\r\n	中心介绍 &nbsp;介绍内容请您自己在后台设置即可\r\n</p>\r\n<p>\r\n	<span>中心介绍 &nbsp;介绍内容请您自己在后台设置即可</span>\r\n</p>\r\n<p>\r\n	<span>中心介绍 &nbsp;介绍内容请您自己在后台设置即可</span>\r\n</p>\r\n<p>\r\n	<span>中心介绍 &nbsp;介绍内容请您自己在后台设置即可<span>中心介绍 &nbsp;介绍内容请您自己在后台设置即可</span></span>\r\n</p>\r\n<p>\r\n	<span><span>中心介绍 &nbsp;介绍内容请您自己在后台设置即可<span>中心介绍 &nbsp;介绍内容请您自己在后台设置即可<span>中心介绍 &nbsp;介绍内容请您自己在后台设置即可<span>中心介绍 &nbsp;介绍内容请您自己在后台设置即可</span></span></span></span></span>\r\n</p>\r\n<p>\r\n	<span><span><span><span><span>中心介绍 &nbsp;介绍内容请您自己在后台设置即可</span></span></span></span></span>\r\n</p>', '2019-04-14 07:46:56');
INSERT INTO `dx` VALUES ('4', '教学团队', '<table border=\"0\" class=\"ke-zeroborder\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<p class=\"STYLE23\">\r\n					<strong>课程负责人 </strong>\r\n				</p>\r\n			</td>\r\n			<td>\r\n				&nbsp;\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span class=\"STYLE47\">袁智敏</span>\r\n			</td>\r\n			<td>\r\n				<span class=\"STYLE50\">副教授</span>\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<img src=\"http://www.hunche0577.com/shiziduiwu/04.jpg\" width=\"200\" height=\"140\" />\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				男，汉族，（1954---），研究生学历，副教授。1982年7月毕业于杭州大学外语系，获文学士学位。2000-2001年浙江大学英语语言文学研究生班结业。2003-2005 年浙江大学高等教育研究生班结业。现为浙江旅游职业学院 学院首批学科带头人，“旅游英语”专业指导委员会副主任。主要从事应用语言学和特殊用途英语研究与英语导游、出境游领队、饭店英语教学工作。学术兼职有浙江省外文学会理事，浙江省大学生科技竞赛高职高专英语口语竞赛委员会成员，浙江省导游、出境游领队资深考评员。已发表学术论文数十篇；主编《领队英语》、《旅游英语》、《星级饭店英语》等专业教材5本；主持省级课题3项、院级课题3项。具有丰富的旅游教学与实践经验，为省内外行业知名“双师型”教师。\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				&nbsp;\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<span class=\"STYLE23\">主讲老师</span>\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span class=\"STYLE47\">王纯</span>\r\n			</td>\r\n			<td>\r\n				<span class=\"STYLE52\">副译审</span>\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<img src=\"http://www.hunche0577.com/shiziduiwu/02.jpg\" width=\"200\" height=\"142\" />\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				男，汉族（1955年―），本科学历，副译审。现为浙江职业学院外语系教师，1982年2月毕业于杭州大学外语系，获文学士学位，任浙江省海外旅游公司英语部经理。1995年评为副译审；1996年获得国家级高级英语导游员资格。自1988年起先后被浙江省及杭州市旅游局聘任为国家级导游（英语、法语、普通话）资格培训师及考评员；浙江省旅游局出国领队资格培训师及考评员；浙江省中级导游员资格考评委员会委员；浙江省专业技术人员中级职称评审委员会委员。在外事活动中多次担任省市主要领导及省旅游局领导的英语口译。2004年调入浙江旅游职业学院担任专业英语课程老师。2007年被评为学院优秀教师，获2007年奖教基金。现任浙江旅游职业学院“导游专业”及“旅游英语”专业指导委员会委员。曾多次担任省市导游大赛评委，为省内外行业知名“双师型”教师。\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<span class=\"STYLE38\"></span>\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span class=\"STYLE47\">王 君</span>\r\n			</td>\r\n			<td>\r\n				<span class=\"STYLE52\">副教授</span>\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<span class=\"STYLE38\"><img src=\"http://www.hunche0577.com/shiziduiwu/worker01.jpg\" width=\"200\" height=\"150\" /></span>\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				女，（1964---）硕士，教授 。1986年毕业于西安外国语大学英语专业，获文学学士学位。2006年10月获浙江大学硕士学位。学院第二批学科带头人，“旅游英语”专业指导委员会委员。主要讲授旅游英语和饭店英语等课程，主编《景区景点实用英语》、高职高专《大学英语》等12部专业教材，主持省旅游局和省教育厅课题2项,主持、参与院级课题3项。已发表《中国审美情趣与旅游》、《旅游英语专业人才培养模式和课程结构的理论与实践研究》等论文20余篇。多次担任各项英语比赛的策划与评委，被浙江省旅游局聘任为出国领队资格考评员，并邀为省内多家知名旅行社和饭店进行专业英语培训。\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<span class=\"STYLE38\"></span>\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<span class=\"STYLE47\">余益辉</span>\r\n			</td>\r\n			<td>\r\n				<span class=\"STYLE52\">讲师</span>\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				<img src=\"http://www.hunche0577.com/shiziduiwu/worker02.jpg\" width=\"200\" height=\"135\" />\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				男，（1965――），讲师，中级导游。本科学历。1984年-1988年就读于北京外国语学院英语系，获文学士学位。1988年-2003年在浙江省中国国际旅行社英语中心从事涉外旅游接待与销售工作，多次受到领导、同事和英美旅游者的好评，为浙江省知名英语导游。2003年7月调入浙江旅游职业学院外语系任教。主要从事旅游英语，出境领队英语教学，擅长导游实践教学。 著有论文《浙江省佛教文化旅游市场研究》等数篇，参编教材2本。\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n				&nbsp;\r\n			</td>\r\n			<td class=\"STYLE49\">\r\n				&nbsp;\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2019-04-14 07:46:56');
INSERT INTO `dx` VALUES ('5', '联系我们', '&nbsp; &nbsp;欢迎来到xxxxx有限公司<br />\r\n<br />\r\n在您对于我们公司产品购买过程中有任何问题可以通过如下方式和我们进行沟通协商：<br />\r\n<br />\r\n1. 电子邮箱： xxxxx@gmail.com<br />\r\n<br />\r\n2. QQ号码： &nbsp;xxxxxx<br />\r\n<br />\r\n3. 电 &nbsp; &nbsp; 话： &nbsp;020-xxxxx （产品售前咨询、报价）<br />\r\n<br />\r\n020-xxxxxxxxx-815<br />\r\n<br />\r\n4. 传 &nbsp; &nbsp; &nbsp;真： 020-xxxxxx-805<br />\r\n<div>\r\n	<br />\r\n</div>', '2019-04-14 06:20:22');
INSERT INTO `dx` VALUES ('6', '联系方式', '联系方式fafafdadfadfdaf', '2019-04-14 11:10:26');

-- ----------------------------
-- Table structure for `goumaijilu`
-- ----------------------------
DROP TABLE IF EXISTS `goumaijilu`;
CREATE TABLE `goumaijilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shangpinbianhao` varchar(50) DEFAULT NULL,
  `shangpinmingcheng` varchar(50) DEFAULT NULL,
  `shangpinleibie` varchar(50) DEFAULT NULL,
  `jiage` varchar(50) DEFAULT NULL,
  `shuliang` varchar(50) DEFAULT NULL,
  `jine` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `goumairen` varchar(50) DEFAULT NULL,
  `issh` varchar(10) DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of goumaijilu
-- ----------------------------
INSERT INTO `goumaijilu` VALUES ('19', '14893682080040', 'adfaf', '考试类', '88', '1', '88', '', '555', '是', '2019-04-14 12:24:20');
INSERT INTO `goumaijilu` VALUES ('20', '14893682080040', 'adfaf', '考试类', '88', '1', '88', 'adf', '555', '是', '2019-04-14 01:04:41');
INSERT INTO `goumaijilu` VALUES ('21', '14893745099344', 'adfdadf', '科技类', '55', '1', '55', '', '555', '是', '2019-04-14 01:04:54');
INSERT INTO `goumaijilu` VALUES ('22', '14911961525920', 'dfafdfa', '其他类', '15', '2', '30', '', '555', '是', '2019-04-14 01:27:57');
INSERT INTO `goumaijilu` VALUES ('23', '14893728416047', 'hgjdgjdgj', '考试类', '99', '1', '99', '', '555', '是', '2019-04-14 01:28:15');
INSERT INTO `goumaijilu` VALUES ('24', '14911975261382', 'fdfadfaf', '文学类', '14.4', '2', '28.8', '', 'hsg', '否', '2019-04-14 06:05:36');
INSERT INTO `goumaijilu` VALUES ('25', '14911961525920', 'dfafdfa', '其他类', '12', '1', '12', '', '555', '是', '2019-04-14 18:09:12');
INSERT INTO `goumaijilu` VALUES ('26', '14893745099344', 'adfdadf', '科技类', '44', '1', '44', '', '555', '是', '2019-04-14 18:09:57');

-- ----------------------------
-- Table structure for `liuyanban`
-- ----------------------------
DROP TABLE IF EXISTS `liuyanban`;
CREATE TABLE `liuyanban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `liuyan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `huifu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of liuyanban
-- ----------------------------
INSERT INTO `liuyanban` VALUES ('4', '555', 'uploadfile/13392103902z4y.jpg', '何升高', 'adfadfaf', '2019-04-14 09:11:07', 'afadff');
INSERT INTO `liuyanban` VALUES ('6', '555', 'uploadfile/13392103902z4y.jpg', '何升高', 'adfadfafd', '2019-04-14 01:29:29', 'fdafd');
INSERT INTO `liuyanban` VALUES ('7', '555', 'uploadfile/13392103902z4y.jpg', '何升高', 'adfadf', '2019-04-14 18:10:41', 'adfadf');

-- ----------------------------
-- Table structure for `pinglun`
-- ----------------------------
DROP TABLE IF EXISTS `pinglun`;
CREATE TABLE `pinglun` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `wenzhangID` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `pinglunneirong` varchar(1000) CHARACTER SET gb2312 DEFAULT NULL,
  `pinglunren` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `biao` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `pingfen` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pinglun
-- ----------------------------
INSERT INTO `pinglun` VALUES ('13', '11', 'afddaf', 'hsg', '2019-04-14 01:00:16', 'shangpinxinxi', '5');
INSERT INTO `pinglun` VALUES ('14', '13', 'afdafd', 'hsg', '2019-04-14 01:00:44', 'shangpinxinxi', '4');
INSERT INTO `pinglun` VALUES ('15', '2', 'adfafd', '555', '2019-04-14 01:04:26', 'shangpinxinxi', '5');
INSERT INTO `pinglun` VALUES ('17', '14', 'afdafd', '555', '2019-04-14 01:27:43', 'shangpinxinxi', '5');
INSERT INTO `pinglun` VALUES ('18', '20', 'afdfdafd', '555', '2019-04-14 01:30:38', 'dingdan', '3');
INSERT INTO `pinglun` VALUES ('19', '15', 'adfadf', '555', '2019-04-14 18:08:38', 'shangpinxinxi', '5');
INSERT INTO `pinglun` VALUES ('20', '21', 'adfadf', '555', '2019-04-14 18:17:23', 'dingdan', '4');

-- ----------------------------
-- Table structure for `rukujilu`
-- ----------------------------
DROP TABLE IF EXISTS `rukujilu`;
CREATE TABLE `rukujilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shangpinbianhao` varchar(50) DEFAULT NULL,
  `shangpinmingcheng` varchar(50) DEFAULT NULL,
  `shangpinleibie` varchar(50) DEFAULT NULL,
  `riqi` varchar(50) DEFAULT NULL,
  `jiage` varchar(50) DEFAULT NULL,
  `shuliang` varchar(50) DEFAULT NULL,
  `jine` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `jingshouren` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of rukujilu
-- ----------------------------
INSERT INTO `rukujilu` VALUES ('2', '14911975261382', 'fdfadfaf', '文学类', '2019-04-14', '12', '2', '24', '', 'hsg', '2019-04-14 06:05:07');
INSERT INTO `rukujilu` VALUES ('3', '14939792549130', 'dfadfadf', '财经类', '2019-04-14', '10', '5', '50', 'adfadf', 'hsg', '2019-04-14 18:15:40');
INSERT INTO `rukujilu` VALUES ('4', '14939792549130', 'dfadfadf', '财经类', '2019-04-14', '10', '7', '70', 'adfadf', 'hsg', '2019-04-14 18:16:02');

-- ----------------------------
-- Table structure for `shangpinleibie`
-- ----------------------------
DROP TABLE IF EXISTS `shangpinleibie`;
CREATE TABLE `shangpinleibie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shangpinleibie` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of shangpinleibie
-- ----------------------------
INSERT INTO `shangpinleibie` VALUES ('2', '财经类', '2019-04-14 09:22:20');
INSERT INTO `shangpinleibie` VALUES ('3', '科技类', '2019-04-14 09:22:26');
INSERT INTO `shangpinleibie` VALUES ('4', '考试类', '2019-04-14 11:08:26');
INSERT INTO `shangpinleibie` VALUES ('5', '其他类', '2019-04-14 01:09:00');
INSERT INTO `shangpinleibie` VALUES ('6', '文学类', '2019-04-14 01:31:51');

-- ----------------------------
-- Table structure for `shangpinxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `shangpinxinxi`;
CREATE TABLE `shangpinxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shangpinbianhao` varchar(50) DEFAULT NULL,
  `shangpinmingcheng` varchar(50) DEFAULT NULL,
  `shangpinleibie` varchar(50) DEFAULT NULL,
  `zhutu` varchar(50) DEFAULT NULL,
  `xiangqingmiaoshu` text,
  `jiage` varchar(50) DEFAULT NULL,
  `xiaoliang` float(50,0) DEFAULT NULL,
  `pingfen` float(50,0) DEFAULT NULL,
  `kucun` varchar(50) DEFAULT NULL,
  `faburen` varchar(50) DEFAULT NULL,
  `issh` varchar(10) DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of shangpinxinxi
-- ----------------------------
INSERT INTO `shangpinxinxi` VALUES ('2', '14893682080040', 'adfaf', '考试类', 'uploadfile/1489368240r8ur.jpg', 'afddaffa<img src=\"uploadfile/1489368240r8ur.jpg\" alt=\"\" />', '88', '15', '5', '100', 'hsg', '是', '2019-04-14 09:24:17');
INSERT INTO `shangpinxinxi` VALUES ('3', '14893726562441', 'dafadf', '考试类', 'uploadfile/1489372665btr6.jpg', '<img src=\"uploadfile/1489372665btr6.jpg\" alt=\"\" />', '35', '0', '0', '100', 'hsg', '是', '2019-04-14 10:38:01');
INSERT INTO `shangpinxinxi` VALUES ('4', '14893726823327', 'dfdafadf', '考试类', 'uploadfile/14893726977tro.jpg', '<img src=\"uploadfile/14893726977tro.jpg\" alt=\"\" />', '29', '0', '0', '100', 'hsg', '是', '2019-04-14 10:38:33');
INSERT INTO `shangpinxinxi` VALUES ('5', '14893727145986', 'dfdafadf', '考试类', 'uploadfile/14893727362fgi.jpg', '<img src=\"uploadfile/14893727362fgi.jpg\" alt=\"\" />', '98', '0', '0', '100', 'hsg', '是', '2019-04-14 10:39:17');
INSERT INTO `shangpinxinxi` VALUES ('6', '14893727585029', 'dfsgfhhs', '考试类', 'uploadfile/1489372771vlvp.jpg', '<img src=\"uploadfile/1489372771vlvp.jpg\" alt=\"\" />', '66', '6', '0', '100', 'hsg', '是', '2019-04-14 10:39:45');
INSERT INTO `shangpinxinxi` VALUES ('7', '14893727866725', 'hgjdgjdgj', '考试类', 'uploadfile/1489372806nd08.jpg', '<img src=\"uploadfile/1489372806nd08.jpg\" alt=\"\" />', '99', '0', '0', '100', 'hsg', '是', '2019-04-14 10:40:19');
INSERT INTO `shangpinxinxi` VALUES ('8', '14893728216194', 'hgjdgjdgj', '考试类', 'uploadfile/1489372828erv3.jpg', '<img src=\"uploadfile/1489372828erv3.jpg\" alt=\"\" />', '99', '3', '0', '100', 'hsg', '是', '2019-04-14 10:40:40');
INSERT INTO `shangpinxinxi` VALUES ('9', '14893728416047', 'hgjdgjdgj', '考试类', 'uploadfile/14893728504pgb.jpg', '<img src=\"uploadfile/14893728504pgb.jpg\" alt=\"\" />', '99', '8', '0', '100', 'hsg', '否', '2019-04-14 10:40:59');
INSERT INTO `shangpinxinxi` VALUES ('10', '14893728616564', 'hgjdgjdgj', '财经类', 'uploadfile/1489372952zc9s.jpg', '<img src=\"uploadfile/1489372952zc9s.jpg\" alt=\"\" />', '39', '5', '0', '100', 'hsg', '是', '2019-04-14 10:42:45');
INSERT INTO `shangpinxinxi` VALUES ('11', '14893729662479', 'hgjdgjdgj', '财经类', 'uploadfile/14893729881x4s.jpg', '<img src=\"uploadfile/14893729881x4s.jpg\" alt=\"\" />', '39', '5', '5', '100', 'hsg', '是', '2019-04-14 10:43:17');
INSERT INTO `shangpinxinxi` VALUES ('12', '14893745099344', 'adfdadf', '科技类', 'uploadfile/14893745278dtt.jpg', '<p>\r\n	<img src=\"uploadfile/14893745278dtt.jpg\" alt=\"\" />\r\n</p>\r\n<p>\r\n	afdafdadf\r\n</p>', '55', '10', '0', '99', 'hsg', '是', '2019-04-14 11:09:04');
INSERT INTO `shangpinxinxi` VALUES ('13', '14895404209141', 'ddafdadd', '科技类', 'uploadfile/14895404405e6w.jpg', '<img src=\"uploadfile/14895404405e6w.jpg\" alt=\"\" />', '88', '5', '4', '100', 'hsg', '是', '2019-04-14 09:14:15');
INSERT INTO `shangpinxinxi` VALUES ('14', '14911961525920', 'dfafdfa', '其他类', 'uploadfile/1491196170r51a.jpg', '<img src=\"uploadfile/1491196170r51a.jpg\" alt=\"\" />', '15', '3', '5', '98', 'hsg', '否', '2019-04-14 01:09:47');
INSERT INTO `shangpinxinxi` VALUES ('15', '14911975261382', 'fdfadfaf', '文学类', 'uploadfile/1491197542knp3.jpg', '<img src=\"uploadfile/1491197542knp3.jpg\" alt=\"\" />', '18', '2', '5', '100', 'hsg', '是', '2019-04-14 01:32:37');
INSERT INTO `shangpinxinxi` VALUES ('16', '14939792549130', 'dfadfadf', '财经类', 'uploadfile/1493979276fdvn.jpg', '<img src=\"uploadfile/1493979276fdvn.jpg\" alt=\"\" />', '15', '0', '0', '67', 'hsg', '是', '2019-04-14 18:14:48');

-- ----------------------------
-- Table structure for `shoucangjilu`
-- ----------------------------
DROP TABLE IF EXISTS `shoucangjilu`;
CREATE TABLE `shoucangjilu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `xwid` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  `biao` varchar(100) CHARACTER SET gb2312 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ziduan` varchar(255) CHARACTER SET gb2312 DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shoucangjilu
-- ----------------------------
INSERT INTO `shoucangjilu` VALUES ('3', '555', '6', 'shangpinxinxi', '2019-04-14 09:09:44', 'shangpinmingcheng');
INSERT INTO `shoucangjilu` VALUES ('4', '555', '2', 'shangpinxinxi', '2019-04-14 01:04:29', 'shangpinmingcheng');
INSERT INTO `shoucangjilu` VALUES ('5', '555', '14', 'shangpinxinxi', '2019-04-14 01:27:49', 'shangpinmingcheng');
INSERT INTO `shoucangjilu` VALUES ('6', '555', '15', 'shangpinxinxi', '2019-04-14 18:08:43', 'shangpinmingcheng');

-- ----------------------------
-- Table structure for `xinwentongzhi`
-- ----------------------------
DROP TABLE IF EXISTS `xinwentongzhi`;
CREATE TABLE `xinwentongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(500) CHARACTER SET gb2312 DEFAULT NULL,
  `leibie` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `neirong` text CHARACTER SET gb2312,
  `tianjiaren` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shouyetupian` varchar(50) DEFAULT NULL,
  `dianjilv` int(11) DEFAULT '1',
  `zhaiyao` varchar(800) CHARACTER SET gb2312 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=275 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of xinwentongzhi
-- ----------------------------
INSERT INTO `xinwentongzhi` VALUES ('207', '4款休闲卫衣混搭 实用搭配穿不腻', '促销活动', '<STRONG>&nbsp;卫衣无疑是时尚圈中生命力最强的元素之一。它简单而个性鲜明，无论T台还是街头，卫衣装似乎从未被抛离出流行的步履之外。当你面对芸芸衣饰而手足无措时，一条简单的卫衣总是及时将你搭救。</STRONG>\r\n<P align=right><A href=\"http://women.sohu.com/20110223/n279464952_1.shtml\"><STRONG><FONT color=#004276>下一页：卫衣+leggings</FONT></STRONG></A></P>\r\n<TABLE cellSpacing=0 cellPadding=0 align=center border=0>\r\n<TBODY>\r\n<TR>\r\n<TD align=middle>\r\n<TABLE cellSpacing=0 cellPadding=0 border=0>\r\n<TBODY>\r\n<TR>\r\n<TD><A href=\"http://women.sohu.com/20110223/n279464952_1.shtml\" target=_blank><FONT color=#004276><IMG alt=\"\" src=\"http://photocdn.sohu.com/20110222/Img279465364.jpg\" align=middle></FONT></A></TD></TR></TBODY></TABLE></TD></TR>\r\n<TR>\r\n<TD style=\"FONT-SIZE: 12px\" align=middle scw_ig=\"yes\"><FONT color=#004276></FONT></TD></TR></TBODY></TABLE>\r\n<P><STRONG>&nbsp;&nbsp;&nbsp; 小编点评：</STRONG>2月早晚温差还是有点大，卫衣单穿还是会感觉微凉，混搭羽绒马甲，既温暖又可爱。牛仔铅笔裤搭配及踝靴，大方又利落。</P>\r\n<P>&nbsp;</P>\r\n<TABLE cellSpacing=0 cellPadding=0 align=center border=0>\r\n<TBODY>\r\n<TR>\r\n<TD align=middle>\r\n<TABLE cellSpacing=0 cellPadding=0 border=0>\r\n<TBODY>\r\n<TR>\r\n<TD><A href=\"http://women.sohu.com/20110223/n279464952_1.shtml\" target=_blank><IMG alt=\"\" src=\"http://photocdn.sohu.com/20110222/Img279465365.jpg\" align=middle></A></TD></TR></TBODY></TABLE></TD></TR>\r\n<TR>\r\n<TD style=\"FONT-SIZE: 12px\" align=middle scw_ig=\"yes\"></TD></TR></TBODY></TABLE>\r\n<P><STRONG>&nbsp;&nbsp;&nbsp; 小编点评：</STRONG>铅笔裤搭配系带高跟短靴是绝佳的组合，可以拉长腿部的线条，让你变高挑美女。黑灰色卫衣外搭配翻领短外套，扁包与整体搭配形成高度统一，一副标准潮人装扮！ <BR>\r\n<TABLE cellSpacing=0 cellPadding=0 align=center border=0>\r\n<TBODY>\r\n<TR>\r\n<TD align=middle>\r\n<TABLE cellSpacing=0 cellPadding=0 border=0>\r\n<TBODY>\r\n<TR>\r\n<TD><A href=\"http://women.sohu.com/20110222/n279464952.shtml\" target=_blank><IMG alt=\"\" src=\"http://photocdn.sohu.com/20110222/Img279465366.jpg\" align=middle></A></TD></TR></TBODY></TABLE></TD></TR>\r\n<TR>\r\n<TD style=\"FONT-SIZE: 12px\" align=middle scw_ig=\"yes\"></TD></TR></TBODY></TABLE></P>\r\n<P><STRONG>&nbsp;&nbsp;&nbsp; 小编点评：</STRONG>明黄色的卫衣搭配牛仔裤动感活力十足。素色针织长围巾很百搭，衣橱里少了它，会错过很多精彩哦。</P>\r\n<P>&nbsp;</P>\r\n<P>\r\n<TABLE cellSpacing=0 cellPadding=0 align=center border=0>\r\n<TBODY>\r\n<TR>\r\n<TD align=middle>\r\n<TABLE cellSpacing=0 cellPadding=0 border=0>\r\n<TBODY>\r\n<TR>\r\n<TD><A href=\"http://women.sohu.com/20110222/n279464952.shtml\" target=_blank><IMG alt=\"\" src=\"http://photocdn.sohu.com/20110222/Img279465367.jpg\" align=middle></A></TD></TR></TBODY></TABLE></TD></TR>\r\n<TR>\r\n<TD style=\"FONT-SIZE: 12px\" align=middle scw_ig=\"yes\"></TD></TR></TBODY></TABLE></P>\r\n<P><STRONG>&nbsp;&nbsp;&nbsp; 小编点评：</STRONG>在冬日里要可爱又充满活力？首选字母帽衫+leggings和雪地靴的搭配。毛领外套外套起到调适作用，不让卫衣夺去你的女人味。</P>', 'hsg', '2019-04-14 06:35:58', 'uploadfile/1340069838pb96.jpg', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('208', '大棚“穿衣”保暖（图）', '促销活动', '<P align=center><IMG src=\"http://pic2.66wz.com/0/10/36/68/10366894_889890.jpg\" border=0> </P>\r\n<P></P><!--advertisement code begin--><!--advertisement code end-->\r\n<P>&nbsp;&nbsp;&nbsp; 1月20日消息：近日，冷空气不断影响我县，农民们积极做好农作物和畜牧保暖防冻工作，减少低温气候带来的影响。图为灵溪镇渎浦办事处的农民在加固西红柿种养大棚。（李士明/摄） <!--function: content() parse end  0ms cost! --></P>', 'hsg', '2019-04-14 06:35:58', 'uploadfile/13400699440gw0.jpg', '3', null);
INSERT INTO `xinwentongzhi` VALUES ('209', '从卡尔丹顿看中国品牌服装国际化', '促销活动', '&nbsp;&nbsp;&nbsp; 日前，国内知名高端服装品牌卡尔丹顿被部分媒体报道为所谓假洋品牌，这个稳居高端服装品牌行列已达10余年的卡尔丹顿在受到各方质疑的同时，也相对影射出了中国服装行业的国际化硬伤。\r\n<P>　<STRONG>　“洋商标”或“民族商标”</STRONG></P>\r\n<P>　　记者了解到，卡尔丹顿的品牌拥有者为一名中国香港商人，该品牌旗下服饰主要针对追求内在、奢华品质的成功人士，近十年在市场上备受中国成熟男士青睐。然而，卡尔丹顿虽为在中国、意大利注册品牌，但其服装主要生产地及主销地均在国内，而因此受到有些媒体的质疑。</P>\r\n<P>　　“实际上，服装届像卡尔丹顿这种非外国人拥有的境外品牌是普遍现象，例如美国著名的婚纱品牌“VERA WANG”实则中国人创立的，甚至我们熟悉的CATELO鳄鱼，BOSINI堡狮龙，JEAN WEST真维斯，JORDANO佐丹奴等境外品牌，其品牌拥有者皆为中国人士。”</P>\r\n<P>　　据悉，中国已成为一个“世界工厂“，在现有的全球化大背景下，包括耐克、阿迪达斯、德国大众等等国际知名品牌，各行业各品牌多数产品均产自国内。因此，一个品牌高低是取决于品牌的设计风格、使用人群、产品品质、服务质量及企业的运营模式等方面，而不是由其品牌持有人是否为中国人以及外销数量多少所决定，也正是这种正确品牌发展理念的缺失导致中国与欧洲时装差距甚大的关键因素。</P>\r\n<P>　　另外，销售区域在哪里，只是一个观察方面。国际化品牌经营，还要看他整个的生产经营活动中，有多少环节涉及国际化。类似卡尔丹顿这样的高端品牌，其面料来源、设计团队、生产合作工厂，早已经不局限于国内，而是直接从意大利甚至全球采购。在经济全球化的背景下，无论是国外名牌还是中国名牌，都是用全球资源整合的角度来悉心经营品牌，以此来满足顾客日益提升的消费需求。</P>', 'hsg', '2019-04-14 06:35:58', 'uploadfile/1340069970gp0a.jpg', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('210', '提升面料设计师的幸福指数', '促销活动', '　2011中国国际面料设计大赛启动仪式上，“面料设计师的幸福指数”话题成为专家和学者共同探讨的话题。\r\n<P>　　<STRONG>面料设计师的幸福指数</STRONG></P>\r\n<P><STRONG>　　不乐观</STRONG></P>\r\n<P>　　两年前，国内一知名的服装设计师前来柯桥考察，发出感叹：丰富的面料是我们服装设计师幸福指数的保证。然而，同是时尚产业的创意工作，人们却不难发现，相比服装设计界，面料设计师的幸福指数却远没有服装设计师来得乐观：他们总是深居简出，只是为他人做嫁衣，极少有机会走上风光的舞台。</P>\r\n<P>　　正因如此，造成了面料设计行业一个不容忽视的现象：设计不能与面料制造规模相匹配，“设计是一种生产力”更多地只停留于宣传。</P>\r\n<P>　　“面料设计师的幸福指数一定程度上衡量着纺织产业发展能力，”国家纺织工业协会副会长孙瑞哲说：“什么时候面料设计师的幸福指数提升了，我们设计产业就发展了。”</P>\r\n<P>　　<STRONG>保护不足</STRONG></P>\r\n<P><STRONG>　　是创意产业之欠缺</STRONG></P>\r\n<P>　　与制造业相比，设计产业相对落后，这一方面缘于对知识产权保护的不足，另一方面，则是对面料创意能力的忽视。</P>\r\n<P>　　“知识产权保护不够，造成企业对创意投入不足。”在孙瑞哲看来，一个地方知识产权保护得越好，创新和创意的能力就越强。</P>\r\n<P>　　同时，由于企业家本身的观念，大部分面料企业满足于制造或简单的拷贝，更多地视设计人才为人力成本，而不是人才资本。是成本还是资本，这只是一个观念，然而企业家这个观念的改变，却能改变一个行业发展的环境。</P>\r\n<P>　　纺织工业协会会长杜钰洲说，面料设计是纺织产业升级的第一生产力。近几年来，柯桥诸多纺织品贸易公司也深刻领悟了这一观点。他们通过加强面料设计，树立自己设计品牌，使自己从行业中脱颖而出。然而，从点到面上的扩展，却还有一个漫长的过程。</P>', 'hsg', '2019-04-14 06:35:58', 'uploadfile/1340070002x47w.jpg', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('211', '森马服饰今天上市', '促销活动', '&nbsp;&nbsp;&nbsp;&nbsp;3月10日晚，浙江森马服饰股份有限公司在深圳举行上市庆祝酒会，庆祝森马服饰（交易代码002563）今天（3月11日）在深交所敲钟上市。 \r\n<P>　　森马服饰此次发行数量为7000万股，其中网上发行5600万股，发行价每股67元。据介绍，3月2日公开发行，森马新股申购网上冻结资金1498.15亿元，网下冻结资金69.41亿元，合计冻结资金1567.56亿元，网上中签率为2.50%。今天上市后，若按发行价67元计算，公司市值高达448.9亿元，将成为我市市值最大的上市公司。</P>\r\n<P>　　据悉，本次募集资金，将用于购买63家店铺和信息化建设，其中51家合作加盟店将借助加盟商的力量来充分整合资源，加强对渠道的控制力和对品牌的影响力，提高公司品牌在两大细分市场的份额。</P>\r\n<P>　　森马服饰前身为温州森马童装，成立于2002年2月5日，于2007年7月2日整体变更设立为股份有限公司。其从事于休闲服饰和儿童服饰的经营，主营业务包括服饰设计与开发、外包生产、服饰营销和分销，拥有森马休闲服饰和巴拉巴拉儿童服饰两大知名品牌。近年来，公司发展势头强劲，截至去年6月30日，森马品牌的加盟店铺达到3433家，直营店铺达到123家；巴拉巴拉品牌的加盟店铺达到2136家，直营店铺达到117家。</P>\r\n<P>　　森马服饰股份有限公司常务副总裁刘丹静表示，森马的直营比例（10%不到）与同行其他上市公司相比算是比较低的（有的甚至高达40%），而且公司的生产是外包的，供应商有405家（其中，森马248家，巴拉巴拉157家），有今天这样的发展速度，不得不归功于品牌与代理商、供应商之间长期、共赢的合作模式。</P>\r\n<P>　　3月10日晚，在森马上市庆祝酒会现场，温州市人民政府与深圳证券交易举行了“企业上市培育工作合作备忘录”签约仪式。</P>\r\n<P>　　森马服饰是我市第八家上市企业。浙江证监局局长王宝桐说，温州市上市企业数量与温州市的经济地发展速度是不匹配的，未来五年到八年时间发展到30-50家上市公司，才是与温州经济发展相匹配的。市委副书记、市长赵一德表示，以森马服饰的上市为标志，今后温州企业上市将进入一个崭新的发展阶段。相信在不久的将来，上市企业中将会形成强有力的“温州板块”。（记者 朱庆荣）</P>\r\n<META name=ContentEnd><!--ZJEG_RSS.content.end--><!--<$[信息内容]>end-->', 'hsg', '2019-04-14 06:35:58', 'uploadfile/1340070029dc64.jpg', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('212', '南通家纺的“快乐老家”', '促销活动', '　今年两会依旧关注“民生”。家纺是劳动密集型产业，家纺人的民生问题解决得怎样？幸福指数多高？生产基地和专业市场可见一斑。据初步统计，南通大约有20万家纺产业大军，近千个家纺商标，两大专业市场里有数千个经营户，叫得响的品牌企业有数十个。行走在海门、通州两大家纺城中，招聘广告随处可见，路人行色匆匆，车辆川流不息，一路繁荣的景象。与店铺里的营业员、掌柜的聊一聊，他们诉说：“生意马马虎虎，但是招工难、原材料涨价……”满足和淡定背后有些无奈和迷茫。这繁荣与无奈的反差中，我们不禁要问：谁是南通家纺的“快乐老家”？\r\n<P align=left><STRONG>　　风调雨顺好扎根</STRONG></P>\r\n<P>　　南通人一般比较谦逊，回答这个问题大多都说：“你自己看嘛，要我说打工的比招工的快乐，我们这里连缝纫工都是香饽饽，人才更是抢手。”</P>\r\n<P>　　来自武汉的装饰设计师张建喜无疑是个幸福的人。他在电话中与朋友聊：“别到处跑了，南通这里挺好的。”学设计的他大学毕业后实习过许多工作，一旦踏入了家纺行业，便在南通落地生根。娶妻、生子，还参股了勤+缘装饰设计公司，与董事长于春荣齐心协力为南通家纺市场的企业、经营户做展厅的装饰装修，勤+缘装饰设计的品牌在市场得到迅速推广。张建喜深有感触地说：“这里气候宜人、治安好、人不复杂；大城市节奏快，压力大，幸福指数低。”</P>\r\n<P>　　南通是座位于长江入海口北岸的中小型城市，直至21世纪初苏通大桥通车，才将此小城与外界，特别是上海、苏南紧密联系起来。虽然近年来经济发展快速，外来人口涌入，但是，本土民风淳朴依旧。南通纺织、家纺产业的发展，既蕴含着男耕女织的农耕文化的浸润，又融入先贤张謇立志“实业救国”的崇高理想，取得了“纺织之乡”现当代纺织业的巨大成就。</P>\r\n<P>　　地理位置和人文环境造就了南通的江海文化。新世纪，南通人提炼出“包容会通，敢为人先”的南通精神，促使地域文化实现从“江”到“海”的拓展，其中，南通家纺人便是一群勇敢的实践者。一大批“富一代”掌门人在南通丰厚的纺织产业基础上寻求发展，在改革开放、市场经济蓬勃发展的机遇里，勤劳勇敢，锐意进取，善于学习，成为南通家纺产业发展的引领者和推动着。他们在开拓市场方面，内外销并举，内销有品牌，外销有商帮，本地人富裕起来；在招商引资方面，浙江、福建、广东、山东、辽宁等民资、民企纷纷入城并形成了浙江家纺商会和东北家纺商会，外地人在这里成功“掘金”。本刊79期中报道的《“粤欣雅”在南通家纺城幸福创业》的企业、经营户有很多很多。同时，通州、海门家纺商会与外地商人在竞争中合作、在合作中竞争，稳中求进的苏商与快速灵活的浙商互相促进，成为通州川姜和海门三星从“名镇”到“新城”升级的有生力量。</P>', 'hsg', '2019-04-14 06:35:58', '', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('213', '浅谈“薄衣御寒”的冬季养生之道', '促销活动', '冬季养生保健，“薄衣御寒”也是不错的养生保健之道。下面，小编为大家介绍冬季薄衣御寒的具体注意事项，关注养生保健的你千万不要错过。\r\n<P>　　●过度保暖反而会降低身体的免疫力，让人长期处于“温室花朵”的状态，变得脆弱而易病。</P><!--advertisement code begin--><!--advertisement code end-->\r\n<P>　　●“薄衣御寒”也属于养生之道，体质热者、小儿可适当挨冻，但要注意耐寒的同时别受风寒。</P>\r\n<P>　　日子一天天流逝，眼见已悄悄跨过农历“大雪”，朝着“冬至”一步步迈进。</P>\r\n<P>　　防寒保暖??这是西医尤其是心血管科、急诊科、儿科、呼吸科医生们每年冬季必要跟病患们反复念叨的四字箴言。然而也有专家提出，对于体质偏热者，或是没有心血管问题在身的老年人，以及青少年儿童，冬天循序渐进地适当“冻一冻”反而有助于增强免疫力。</P>\r\n<P>　　寒冷并不可怕，对环境的适应是人类的本能。挨冻和保暖并非完全的医学歧义，而是针对不同体质、年龄、身体条件的人群，提出的具体个性化要求，‘冻’并非人人能接受，相应的，‘暖’也不见得对每个人都有好处。过度保暖反而会降低身体的免疫力，让人长期处于‘温室花朵’的状态，变得脆弱而易病。“薄衣御寒”也属于养生之道，但如何在锻炼耐寒的同时别受风寒，确实是门技术活。</P><STRONG>　　小儿</STRONG> <STRONG>　　少穿一件好过多穿一件</STRONG> \r\n<P>　　别说冬天，就是春秋季节，也经常可以看到很多父母喜欢将孩子紧紧‘捂住’，似乎永远都比大人多穿一件或多盖一层，生怕孩子一不小心受凉感冒。</P>\r\n<P>　　日本儿童从很小就开始尝试身着短裤或者超短裙度过秋冬天了，虽然我们不提倡寒冷气候下露出膝关节，但这种观念还是可以借鉴的??婴幼儿脱离母体后，需要逐渐适应外界寒暖的变化，自己调节体温，如果从襁褓中就开始过度保暖不抗冻，日后会更加娇弱，罹患感冒的几率更大。</P>\r\n<P>　　青少年儿童正处于生长发育的高峰期，身体新陈代谢的速度远比成人快，所以体表热能挥发很大，这也是为什么孩子稍一活动就满身大汗的原因。如果衣服穿得过多，出汗不断而又未及时更衣的话，体液过度消耗，寒风一吹冷却下来，反而可能生病。</P>\r\n<P>　　所以对于青少年儿童来说，家长大可不必过于小心呵护，让其衣着轻便一点更好，即使偶尔感冒也不要太过紧张，毕竟广州的冬天并不算寒冷，如果他的机体从小就适应了一定的冷空气刺激，对于其日后习惯性抵御严寒大有裨益。而且这样能逐步提高孩子皮肤和鼻黏膜的耐寒力，对未来强身健体也有好处。</P>\r\n<P>　　不过，儿童的头部、胸部等部位如果“捂”多了容易心烦、内热，但孩子的腹部却一定要注意保暖，这是因为很多儿童存在脾胃较虚现象，当冷空气直接刺激腹部时，可能引起腹痛，从而损伤脾胃功能，使脾胃不能正常稳定运转。所以，“肚暖”依然是孩子冬天保健的重要一环。</P><STRONG>　　老人</STRONG> <STRONG>　　晨练或冬泳别太猛</STRONG> \r\n<P>　　虽然冬泳的确能强身健体，但还没有过此类经验的老人千万别轻易尝试，以免身体适应不了突然的冷刺激而生病。</P>\r\n<P>　　“防寒保暖”并非适用于所有老年人，对于没有心血管疾病如高血压、动脉粥样硬化的老年人而言，同样可以尝试抗寒锻炼。冬泳在我国南北方都有一定的群众基础，经常可以看到年过七旬的老者腊月里依然赤膊畅游。</P>\r\n<P>　　但每年送医的冬泳爱好者也不在少数，这类较为极端的抗寒锻炼，对于游泳技术一般，或是平时都习惯了用热水洗脸洗澡、从未尝试过冷水浴的人来说，实在不宜轻易尝试。专家介绍，耐寒锻炼必须循序渐进，不应随意挑战自己没有把握的极限强度。</P>\r\n<P>　　冬季晨练也要讲究个人条件，夏天每天爬山的人，不见得适合冬天上山。如果曾发生过面瘫或心血管疾病，以及有哮喘、咳嗽在身的老者，最好不要在清晨较寒冷时进行户外锻炼，而且山上温度较低，越发增加患病风险。</P>\r\n<P>　　如想“驯服”低温气候，身体健康的老人可从凉水洗脸、洗手做起，长此以往可增强抵抗力，减少感冒次数。而在“驯服”冷的过程中，老人会自然地增加耗氧量、提高基础代谢率，高水平的产热功能甚至可持续几个月之久，这对于延年益寿都有好处。</P><STRONG>　　体质偏热者</STRONG> <STRONG>　　较气虚阳虚者更适合耐寒训练</STRONG> \r\n<P>　　从中医角度分析，体质偏热的人群，较体质寒凉、气虚阳虚者，显然更适合进行耐寒训练。寒冷对前者是可利用的，对后者却是一种威胁。</P>\r\n<P>　　体质偏热者，受到同等程度的寒冷刺激时不会感到不适，反而会觉得很自在；而对于体质寒凉者来说，一旦稍受冷刺激，就可能产生腹泻、腹痛等诸多消化道反应。</P>\r\n<P>　　但凡本身就属于气虚阳虚的人群，不要违背自身客观条件而苛求耐寒训练，而对于体质偏热者，可以充分通过适当的穿薄衣、用凉水洗脸或擦身、多到冷空气环境锻炼等方式，在冬天进一步增强心肌功能和机体自控能力，人体血管弹性也会由此增强，血液流量增多，从而改善冠状动脉的供血，同时还可借此改善神经系统和内分泌系统的调节功能。</P>', 'hsg', '2019-04-14 06:35:58', '', '3', null);
INSERT INTO `xinwentongzhi` VALUES ('214', '冷空气开始影响温州 春天提前到来冬衣慢点脱去', '促销活动', '&nbsp;&nbsp;&nbsp; 据市气象台昨天上午发布的消息，目前北方有一股冷空气正在东移南下，预计于昨天夜里起开始影响我市。气温将逐渐下降，日平均过程降温幅度可达7℃?9℃，沿海海面有7?9级偏北大风。\r\n<P>　　另外，从23日开始至27日，市区已连续5天日平均气温维持在10℃以上，已进入气象意义上的春天，较往年明显偏早。往年，我市“入春”时间一般在2月底至3月初。气象专家提醒，我市虽已入春，但乍暖还寒，受这次冷空气南下影响，我市各地气温又会呈直线下降趋势，日平均气温可能会被打回至10℃以下。春天里天气多变，市民要根据天气变化，及时增减衣服，适当“捂一捂”，以防感冒。</P><!--advertisement code begin--><!--none--><!--advertisement code end-->\r\n<P>　　据了解，今年2月下旬平均气温为12.2℃，较常年明显偏高3.1℃，旬雨量较常年明显偏少，雨日偏少。市气象部门预计，我市3月上旬平均气温接近常年，雨量雨日偏少，本旬初和本旬后期各有一次冷空气影响过程。具体预测如下：</P>\r\n<P>　　3月1日，小雨止转阴到多云；2日，多云；3日，多云到阴局部有时有小雨；4日，多云；5日，暖区天气，湿度大，多云到阴局部有时有小雨；6日，受冷暖空气交汇影响，阴有雨； 7日，雨止转阴到多云；8?10日，多云。</P>', 'hsg', '2019-04-14 06:35:58', '', '2', null);
INSERT INTO `xinwentongzhi` VALUES ('215', '国际知名设计师7月云集深圳“把脉”潮流', '促销活动', '　 中国服装行业、深圳服装自主品牌将与国际时尚设计大师、国外服装行业、国外服装企业将开展对话，探讨深圳时尚创意如何发展。记者了解到，2011年7月服交会期间，由罗湖区政府、深圳服装行业协会、深圳报业集团主办，“深圳国际时尚设计高端论坛”，将在深圳会展中心隆重举行。多位国际知名设计师将和政府、协会、企业嘉宾一道出席论坛，围绕设计这一新的经济发展新动力，展开一次洲际间的交流活动，这也将是迄今为止深圳服交会最高规格的设计师交流活动。 \r\n<P>　　经过20多年的快速发展，深圳以服装业为主的时尚产业依托得天独厚的区位优势，逐步形成了十分明显的集聚优势，位居全国大中城市前列，引领着国内时尚的潮流，并日益从优势传统产业向高附加值、高文化含量的时尚创意产业转变。2008年12月8日，随着深圳被联合国教科文组织全球创意城市网络认定为“设计之都”，作为设计之都重要一支的深圳服装设计提出了全新的发展机遇与挑战。2011年，打造深圳“时尚创意之都”的目标，也已列入深圳政府“十二五”规划之中。如何应对新形势给深圳时装界和设计师带来的机遇和挑战？以及如何进一步促进深圳服装自主原创品牌的繁荣和设计水平的提高……都是深圳服装设计丞待解决的问题。 </P>\r\n<P>　　另一方面，中国经济经过30多年快速发展，中国时尚产业正面临着前所未有的机遇和挑战。面对强势的世界品牌潮水般涌入，中国时尚产业亟待突破设计和品牌发展的瓶颈，发展成熟的品牌经济，形成具有中国特色的时尚产业集群，在国际时尚领域奠定自己的地位。迈入十二五规划之后，中国服装将要以怎样的品牌姿态屹立于世界时尚之林，中国服装设计的方向和支点在哪里？面对危机时代新的规则，“国际时尚设计高端论坛”将关注新价值观下中国服装品牌的构建，结合新形势下服装产业面临的机遇和挑战，从设计管理、新消费趋势、渠道创新、资本抉择、创意跨界、组织变革、数字化生活、科技生产力、生态美学、引爆趋势等等多个角度深刻剖析我国服装品牌发展的未来方向和支撑力量。 </P>\r\n<P>　　本次论坛力求成为中国服装行业、深圳服装自主品牌与国际时尚设计大师、国外服装行业、国外服装企业对话、交流的重要平台，更是让国际认识深圳服装设计力量的展示平台，并逐步树立时尚应用和创新典范，促进时尚设计产业在国内以及亚洲地区，乃至国际市场的快速成长和发展，扩大时尚设计在各领域的影响力。同时，创意产业的思维逻辑和发展模式来改变自身的发展是深圳构建“时尚创意之都”急待解决的首要问题，深圳要有一批设计原创、文化价值含量高的品牌聚集，更要获得国际上掌握一流信息的专家指导，深圳需要形成独有的设计师群体。本论坛致力于打造高端的进行国际创意设计交流的平台，通过这个平台将汇聚各界设计精英，为深圳构筑“时尚创意之都”出谋划策。 </P>', 'hsg', '2019-04-14 06:35:58', '', '2', null);
INSERT INTO `xinwentongzhi` VALUES ('216', '宜山针织内衣企业更新缝纫设备：节能减排 提质提效', '促销活动', '<p>\r\n	苍南新闻网8月30日消息：今年，宜山镇针织内衣企业针对招工不足的现状，纷纷通过购进高效节能的缝纫机等新设备，来提高生产效率和生产质量，有效解决了企业用工不足和耗电量大这两大难题，这一举措成为宜山针织内衣行业一条节能减排的新路子。\r\n</p>\r\n<p>\r\n	日前，记者走进位于宜山镇环城南路的一家制衣厂，看到数十位工人正在包缝、加条、压针。记者注意到，在生产车间的缝纫机旁边，都安装了一个调频电脑显示器。当挡车女工不使用机器时，系统就停止工作，没有了待机的损耗，当挡车女工缝制布料的瞬间，指示灯马上亮起来，并随时检测缝制布料的厚薄，将信息实时传递给嵌入式软件，通过软件调节电机的输出转速和输出功率，使缝纫机工作始终处在最合理、最节能状态。该企业负责人方女士告诉笔者，他们厂里每年都要投入七八万元资金，用于更新、添置新款缝纫机，这不仅使产品质量大大提高了，做出来针织内衣针眼密，产品质量好，而且工人劳动强度也明显降低，工人不用带剪刀剪线头，现在无论包缝机、压针机、加条机等，比如说以前一天做一千件，现在要多增加二三百件很轻松，深受工人们的喜欢。\r\n</p>\r\n<!--advertisement code begin--><!--advertisement code end-->\r\n<p>\r\n	针织内衣行业是宜山镇的三大经济支柱行业之一。以前，宜山针织内衣企业采用的传统缝纫设备，其生产效率仅为40～50%，而且成品质量不精。随着市场竞争的加剧和生产成本增加，大量生产低价针织内衣企业难以生存，许多企业老板纷纷进行缝制设备的更新换代来带动企业发展，高效节能的缝制设备倍受企业喜爱，使得宜山缝制设备市场呈现出热销局面。据宜山一家缝纫机经销店黄师傅介绍，现在大部分都电脑自动化，高效节能缝纫机比传统的机子可以提高30%以上的效率。省工又省力，一年节省下来的工资费用，相当于买一台电脑缝纫机的成本。\r\n</p>\r\n<p>\r\n	通过缝纫机的更新换代发展，针织内衣行业的生产能力不断得到提高，产品质量也得到了市场的认可，高效节能缝纫机的使用降低了耗电量，也成为宜山针织内衣行业一条节能减排的新路子。（通讯员 爱选 成雷）\r\n</p>', 'hsg', '2019-04-14 06:35:59', '', '22', '今年，宜山镇针织内衣企业针对招工不足的现状，纷纷通过购进高效节能的缝纫机等新设备，来提高生产效率和生产质量，有效解决了企业用工不足和耗电量大这两大难题');
INSERT INTO `xinwentongzhi` VALUES ('217', '世界服装巨头H&M一季度净利下降30%', '促销活动', '　&nbsp; 北京时间3月31日下午消息，世界第三大时装零售商、瑞典服装零售巨头Hennes&amp;Mauritz AB公司周四公布了2011年第一季度的财报。数据显示，该公司本季度的净利润比去年同期下降了30%至26.2亿瑞典克朗（合4.15亿美元），在去年同期该公司的净利润为37.4亿瑞典克朗。\r\n<p>\r\n	Hennes&amp;Mauritz AB公司本季度盈利下滑主要是更高的成本及瑞典克朗的强势所致。数据显示，该公司本季度的销售额(不含增值税)从去年同期的248.5亿瑞典克朗下降至245亿瑞典克朗，降幅1.4%。FactSet调查的分析师此前预期该公司本季度的净利润为27.3亿瑞典克朗，预期本季度的销售额为249.2亿瑞典克朗。该公司表示，棉花价格大幅度上涨、剩余产能减少、运输成本更高以及美元带来了不利影响，这些因素导致其在今年第一季度的毛利率从去年同期的61.9%下降至57.8%。按本国货币计算，该公司2月的销售额比去年同期增长了9%，而从3月1日至3月29日的销售额仅比去年同期增长3%。该公司表示，其计划在今年第二季度新开97家店面同时关闭8家店面，预计中国、英国及美国是该公司2011年最大的扩张市场。\r\n</p>', 'hsg', '2019-04-14 06:35:59', '', '9', '　  北京时间3月31日下午消息，世界第三大时装零售商、瑞典服装零售巨头Hennes&Mauritz AB公司周四公布了2011年第一季度的财报。');
INSERT INTO `xinwentongzhi` VALUES ('218', '黑色衣装持续走俏 早春搭出新花样', '促销活动', '<strong> 在白色抢占T台的同时，黑色衣装在街头的出镜率依然不减。我们来看看好莱坞大咖们所偏爱的黑色，在早春时节如何被她们演绎出另一番风情。</strong> \r\n<p align=\"right\">\r\n	<strong><a href=\"http://women.sohu.com/20110223/n279460223_1.shtml\"><span>下一页：黑色针织衫内搭</span></a></strong>\r\n</p>\r\n<table cellspacing=\"0\" cellpadding=\"0\" align=\"center\" border=\"0\" class=\"ke-zeroborder\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"middle\">\r\n				<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"ke-zeroborder\">\r\n					<tbody>\r\n						<tr>\r\n							<td>\r\n								<a href=\"http://women.sohu.com/20110223/n279460223_1.shtml\" target=\"_blank\"><span><img alt=\"\" src=\"http://photocdn.sohu.com/20110222/Img279460916.jpg\" align=\"middle\" /></span></a>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"font-size:12px;\" align=\"middle\">\r\n				<span></span>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	<strong> 小编点评：</strong>底部镶满铆钉的Alexander Wang包包是去年爆款，在欧美明星手中辗转出镜在这里，Kate Bosworth的白色款搭配她这一身黑色外套，搭配紧身牛仔裤，优雅中带着点儿帅气劲儿。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<table cellspacing=\"0\" cellpadding=\"0\" align=\"center\" border=\"0\" class=\"ke-zeroborder\">\r\n	<tbody>\r\n		<tr>\r\n			<td align=\"middle\">\r\n				<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"ke-zeroborder\">\r\n					<tbody>\r\n						<tr>\r\n							<td>\r\n								<a href=\"http://women.sohu.com/20110223/n279460223_1.shtml\" target=\"_blank\"><img alt=\"\" src=\"http://photocdn.sohu.com/20110222/Img279460917.jpg\" align=\"middle\" /></a>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"font-size:12px;\" align=\"middle\">\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	<strong> 小编点评：</strong>整身黑色是显瘦的不二法宝！及膝长度风衣用做连衣裙的“裸穿”又是最风情万种的方式，腰带的随意系扎，系出了几分柔情，还将纤细腰身显现出来。 <br />\r\n	<table cellspacing=\"0\" cellpadding=\"0\" align=\"center\" border=\"0\" class=\"ke-zeroborder\">\r\n		<tbody>\r\n			<tr>\r\n				<td align=\"middle\">\r\n					<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"ke-zeroborder\">\r\n						<tbody>\r\n							<tr>\r\n								<td>\r\n									<a href=\"http://women.sohu.com/20110222/n279460223.shtml\" target=\"_blank\"><img alt=\"\" src=\"http://photocdn.sohu.com/20110222/Img279460918.jpg\" align=\"middle\" /></a>\r\n								</td>\r\n							</tr>\r\n						</tbody>\r\n					</table>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style=\"font-size:12px;\" align=\"middle\">\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</p>\r\n<p>\r\n	<strong> 小编点评：</strong>Jessica Alba最近爱上这款黑色金属角装饰的手袋，这款包包简约百搭，大小也正好实用，抢眼的装饰效果显得与众不同，是出街的不二法宝。黑色的针织衫内搭，搭配墨绿色针织开衫，上班出街不沉闷哦~\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<table cellspacing=\"0\" cellpadding=\"0\" align=\"center\" border=\"0\" class=\"ke-zeroborder\">\r\n		<tbody>\r\n			<tr>\r\n				<td align=\"middle\">\r\n					<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"ke-zeroborder\">\r\n						<tbody>\r\n							<tr>\r\n								<td>\r\n									<a href=\"http://women.sohu.com/20110222/n279460223.shtml\" target=\"_blank\"><img alt=\"\" src=\"http://photocdn.sohu.com/20110222/Img279460919.jpg\" align=\"middle\" /></a>\r\n								</td>\r\n							</tr>\r\n						</tbody>\r\n					</table>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style=\"font-size:12px;\" align=\"middle\">\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n</p>\r\n<p>\r\n	<strong> 小编点评：</strong>Kate Moss与Sadie Frost漫步街头。Kate女王斜挎一款Chanel经典菱格纹包包，在着装上她选择用黑色抓绒外套与Skinny牛仔裤的搭配，脚上穿的是一双质地硬朗的高筒靴。\r\n</p>', 'hsg', '2019-04-14 06:35:59', '', '31', '在白色抢占T台的同时，黑色衣装在街头的出镜率依然不减。我们来看看好莱坞大咖们所偏爱的黑色，在早春时节如何被她们演绎出另一番风情。');
INSERT INTO `xinwentongzhi` VALUES ('221', '图书馆阅读器受读者追捧', '新书公告', '　本报讯（记者李洋）“还有手持阅读器吗？”“没有。”“什么时候能有人还回来?”“最快两三天，也可能更久。”这样的询问在推出此项服务的国家图书馆和首都图书馆几乎每天都会发生。眼下，首图的40台阅读器、国图的80台阅读器基本都“飘”在外面，读者想借得碰运气。\r\n<P>　　手持阅读器类似电子书，最大的好处就是容量大、携带方便。“我下周要出差，觉得背几本书太沉，就想到去借阅读器。”首图的读者小谢说，一台电子书要上千元钱甚至更贵，图书馆却可以提供免费的，当然更愿意去图书馆借。小谢就听说，有些高校学生会在放寒暑假之前来借阅读器，这样整个假期都不愁在外没书看。</P>\r\n<P>　　记者了解到，在国图，只要是开通了中文图书外借功能的读者卡（此卡押金100元），在首图，只要持有北京市公共图书馆“一卡通”E级卡（此卡押金500元）的读者，都可以外借阅读器，无需另付费用。</P>\r\n<P>　　虽然两个图书馆的阅读器品牌和型号相同，但国图的阅读器因为插入一张4G的内存卡，预存了500本电子书在里面，更受欢迎。其80台阅读器长期处于借空状态，不过，查看借阅人次发现，月均只有40人。“因为很多读者都在长期重复外借、连续续借，让阅读器根本没有机会落入别人之手。”国图工作人员很无奈。同样的现象也发生在首图，目前，15％的读者会办理续借。为了等待有机器归还，首图的一位读者竟一天跑来三趟，但仍然没有等到。“用‘爱不释手’来形容最恰当不过。”工作人员说。</P>\r\n<P>　　手持阅读器是图书馆为培养读者使用电子资源的习惯而推出的服务，现在，读者的胃口被吊起来了，习惯养成了，阅读器却不够用了。</P>', 'hsg', '2019-04-14 05:45:18', 'uploadfile/1340069838pb96.jpg', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('238', '谷歌因违法网络广告被罚5亿美元', '新书公告', '&nbsp;&nbsp;&nbsp; 新华网华盛顿８月２４日电（记者任海军）美国司法部２４日宣布，互联网搜索引擎巨头谷歌公司已同意支付５亿美元罚款，以了结一项针对该公司在网络上违法发布药品广告的刑事调查。\r\n<P>&nbsp;&nbsp;&nbsp;&nbsp;美国司法部称，谷歌为加拿大网络药店发布了以美国消费者为目标群体的广告，违反了美国法律关于处方药进口的规定。</P>\r\n<P>&nbsp;&nbsp;&nbsp;&nbsp;谷歌支付的罚金总额与该公司收取的相关广告费及加拿大网络药店从美国消费者获得的收入总和相当。这笔罚金也是美国历史上针对违法网络广告开具的最大罚金之一。</P>\r\n<P>&nbsp;&nbsp;&nbsp;&nbsp;美国司法部副部长詹姆斯?科尔当天表示，迫使谷歌改变自己的不当广告策略，是为限制国外网络药店从美国消费者非法牟利的重要一步。</P>\r\n<P>&nbsp;&nbsp;&nbsp;&nbsp;谷歌在一份简短声明中说，一段时间前，谷歌已禁止了加拿大网络药店在美国打处方药广告。但很明显，我们也是事后才知道一开始就不该让这些广告出现在谷歌上。</P>\r\n<P>&nbsp;&nbsp;&nbsp;&nbsp;由于涉嫌利用搜索引擎上的非法医药广告获利，谷歌多年来一直受到美国联邦司法部的调查。谷歌５月初提交给美国证券交易委员会的文件显示，该公司已经在第一财季悄然拨备了５亿美元以应对司法部调查。</P>\r\n<P>&nbsp;&nbsp;&nbsp;&nbsp;谷歌２０１０年的总收入为２９０亿美元。</P>', 'hsg', '2019-04-14 11:35:46', 'uploadfile/1340069838pb96.jpg', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('239', '钱库城管中队台风前拆除违章建筑和破损广告牌', '新书公告', '<P>&nbsp;&nbsp;今天上午，钱库镇城管中队组织执法人员对全镇范围内的违章建筑和违章广告牌进行了拆除，以净化城市环境和消除安全隐患。</P>\r\n<P>&nbsp;&nbsp; 为巩固前段整治大行动成果，钱库镇城管中队组织执法人员对全镇范围内的违章建筑和违章广告牌进行了拆除。在拆除现场，执法人员对物主进行了教育，并积极配合城管人员主动对建筑物进行拆除，对置若罔闻的房主，执法人员当场对其进行强制拆除。台风临近，为了进一步消除安全隐患，城管中队同时还对全镇范围内的违章和破损广告牌进行了拆除。（通讯员 罗宏雷）</P>', 'hsg', '2019-04-14 11:35:46', 'uploadfile/13400699440gw0.jpg', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('240', '冯小刚谈“非2”指责 自称植入广告“非常正常”', '新书公告', '<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">昨天下午，热映电影《非诚勿扰2》的导演冯小刚来到北京电影学院和同学们交流。交流会上冯导称，《非3》会等老的时候再拍，自己已经过了“赢房子赢地”的时代，今后拍戏可能会更多地表现自己的想法。并称，《非2》中植入的广告非常正常。</P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\"><STRONG>《非3》15年后再见</STRONG></P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">昨天下午的交流会中，有人问及冯小刚近期是否有拍摄《非诚勿扰3》的打算。冯导明确表态，近期并没有这个打算，第三部就是“借壳下蛋”，继续这样拍下去“没什么意思”。但可能会等15年后，葛优七十多岁，舒淇五六十岁了，再拍他们老年时候的情景，“其实我特别想拍一部两个老年人时隔多年后又邂逅的故事。”</P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">冯导昨天透露，《非诚勿扰》中秦奋为临终前的李香山举办人生告别会的情节其实来源于自己的一个想法。他希望自己在“还能坐着和朋友说话聊天”的时候，把亲朋好友都请来，开一个告别会，而且“死了之后就不用再来了”，“我特别不喜欢看一个人躺在那里，大家向他告别，所以也不希望自己这样。”</P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\"><STRONG>可能拍不了多少了</STRONG></P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">年过半百的冯小刚，昨天谈到了自己将来创作的计划。冯导称，自己在创作初期是对拍电影迷恋，后来开始拍贺岁片的时候，发现拍电影能赚钱，而如今他已经过了“赢房子赢地”的时代，“我不想拍到大家都不爱看的时候还在拍，今后可能也拍不了多少电影了。”</P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">冯小刚说：“现在我拍电影挣的钱肯定这辈子花不完了，我又想开始回归，以后再拍电影可能会更多地融入自己生活中的体会和态度，会拍得‘任性一点’。”冯小刚还笑称，如果明天一纸文书下来，冯小刚不许拍电影了，“那我就打高尔夫去。”</P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\"><STRONG>针对我是心态问题</STRONG></P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">坐在台上的冯小刚本是靠在椅背上的，一听到记者问及广告植入的问题，立马坐了起来，并且说话语速明显加快。冯导称，电影中的广告植入非常正常，《非2》中的广告并没有影响情节发展，甚至是情节的需要。</P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">冯小刚说：“电影中需要汽车，任何一辆车都是有牌子的，即使是个卡车，也得是个东风的啊。并且电影中广告植入的程度都是有限制的，电影中姚晨是卖保险的，也只是一个文件夹上写个公司名，人物对话中都没提到。电影植入广告只要不影响情节，都是对中国电影的支持。”</P>\r\n<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">冯导还透露，某省会给他5000万元邀请他的戏到该省拍，电影中用某银行的卡，该银行给500万……“光这样的广告，收入就能够1个亿。”言外之意，冯导并不缺这点广告费。面对“攻击”他的媒体，冯导反击道，“好莱坞大片个个都有植入广告，你们偏偏把矛头指向我这里，我认为这是你们的心态问题。”此外，对于姜文导演拒收植入广告的事情，冯导表示，“希望他能继续保持下去。”</P><!-- end_ct -->', 'hsg', '2019-04-14 11:35:46', 'uploadfile/1340069970gp0a.jpg', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('241', '我镇就横幅制作、广告布设计喷绘及维护定点单位的招标公告', '新书公告', '<P align=center><FONT size=6><STRONG>招 标 公 告</STRONG></FONT></P>\r\n<P align=center><FONT size=3>招标编号：QK（2011）001<BR></FONT></P><BR>\r\n<P>&nbsp;&nbsp;&nbsp; 为节省政府运行成本，经镇三套班子研究，决定就横幅制作、广告布设计喷绘及维护定点单位对社会进行公开招投标，现将有关事项公告如下：</P>\r\n<P>&nbsp;&nbsp;&nbsp; 1、招标对象：具有从事广告经营资格的企业或个体工商户；具有良好的商业信誉；具有履行合同所必需的专业技术能力；法律法规规定的其他条件。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 2、招标内容：&nbsp;&nbsp;&nbsp;&nbsp; </P>\r\n<P>（1）、负责政府户外横幅标语、广告布设计喷绘发布的一切申办手续；&nbsp;&nbsp;&nbsp; </P>\r\n<P>（2）、对政府提供的标语、广告内容进行设计并按政府要求制作后在指定点投放；&nbsp;&nbsp;&nbsp; </P>\r\n<P>（3）、对户外横幅标语、广告布定期巡检、维护及更新。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 3、招标方式为明标暗投。投标人以招标人提供的投标书竞价，价低者中标。如投标单位少于三家，则另行组织招投标。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 4、本项目采用资格后审的方式确定合格投标人，其它要求详见招标文件。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 5、报名时间：2011年3月21日上午9:00---2011年3月23日下午17:00。请各有意向投标人携带相关资质证明材料复印件及原件，并填写报名表参加报名。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 6、报名地点：钱库镇招投标中心（钱库镇政府大院内）</P>\r\n<P>&nbsp;&nbsp;&nbsp; 7、其他事项：</P>\r\n<P>&nbsp;&nbsp;&nbsp; （1）、本项目需一次性交纳投标保证金人民币伍仟元整。如不按招标程序履行报名登记手续，或中标后弃标的，投标保证金不予退还。投标不中者，开标后5日内无息退还其交纳的投标保证金，</P>\r\n<P>&nbsp;&nbsp;&nbsp; （2）、本项目不接受挂靠。投标人必须符合相关规定。</P>\r\n<P>&nbsp;&nbsp;&nbsp; （3）、投标人有串标、围标、虚假投标及其它违法行为的，将不退还投标保证金。</P>\r\n<P>&nbsp;&nbsp;&nbsp; （4）、投标单位中标后，合同有效期为壹年。</P>\r\n<P>&nbsp;&nbsp;&nbsp; 8、联系方式：钱库镇宣传办：64489642</P>\r\n<P>&nbsp;&nbsp;&nbsp; 钱库镇招投标中心：64491101</P>\r\n<P>&nbsp;</P>\r\n<P align=right>钱库镇招投标中心</P>\r\n<P align=right>二?一一年三月十一日</P>', 'hsg', '2019-04-14 11:35:46', 'uploadfile/1340070002x47w.jpg', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('242', '县文明办与广告公司磋商 推动户外广告规范化', '新书公告', '&nbsp;&nbsp;&nbsp; 6月12日消息：昨天，县文明办举行户外广告整治座谈会，邀请了温州、平阳、苍南等地的广告公司负责人，就我县如何推动户外广告规范化进行座谈。\r\n<P>&nbsp;&nbsp;&nbsp; 清理户外广告及占道经营是我县“两城示范，十镇联创”文明创建工作考核评比的内容之一，主要考核中心镇城区内户外广告及主要街道、农贸市场、学校周边等地占道经营的整治管理情况。会议指出，我县要努力推动户外广告规范化，使其布局更合理，更大方，更漂亮，进一步提升苍南形象，促进文明创建工作。（记者 叶晔）</P>', 'hsg', '2019-04-14 11:35:46', 'uploadfile/1340070029dc64.jpg', '2', null);
INSERT INTO `xinwentongzhi` VALUES ('243', '广告公司毁绿 市委书记批示严查', '新书公告', '<TABLE align=center>\r\n<TBODY>\r\n<TR>\r\n<TD><IMG src=\"http://www.wenzhou.gov.cn/picture/0/101206060207547.jpg\" border=0></TD></TR></TBODY></TABLE><!--<$[信息内容]>begin--><!--ZJEG_RSS.content.begin-->\r\n<META name=ContentStart>\r\n<P align=center><FONT face=楷体_GB2312 color=#004080>8株榕树惨遭“截肢”。 （金鱼 摄）</FONT></P>\r\n<P>　　“疑为碍了广告牌，8株成年榕树遭截肢”，在全市还绿造绿如火如荼之时，有人却“顶风”毁绿。副省长、温州市委书记陈德荣对此高度重视，并作出批示，要求执法部门调查、严肃处理。市城市管理行政执法局决定，对当事人温州市嘉程广告有限公司处以19208元罚款。 </P>\r\n<P>　　上月23日，市政协公园绿化专项督察组在督查今冬明春绿化点状况时，意外发现三维桥西南桥边8株行道树遭人为恶意破坏。行政执法部门获悉后，迅速展开现场勘查取证，发现8株被修剪榕树平均胸径20cm，被修剪榕树枝干共计38枝，枝干截面直径均在8cm以上；此外汇昌河岸边有4棵野生的枸树同样被修剪。</P>\r\n<P>　　案件嫌疑人嘉程广告迫于压力，其负责人于26日主动投案。据执法部门调查，该公司设在三维桥西南首的广告位获批后，从今年7月份设立至今无法出租，负责该广告位的下属部门认为行道树的枝叶遮挡影响广告效果，一部门经理擅自请人于11月9日清晨，对遮挡的行道树进行修剪。</P>\r\n<P>　　执法部门依法向鹿城区价格认证鉴定中心提出树木受损鉴定申请。经专业调查取样和市场实际价值征询，鉴定结论判定，每棵受损榕树的价值为686元，8株榕树“截肢” 实际受损价值为5488元。城管执法局认为，性质较为恶劣，顶风作案，毁经济建设树木多，根据《浙江省城市绿化管理办法》第三十一条第一款规定，决定按照受损树木价值的3.5倍予以处罚，累计罚金共计19208元。</P>', 'hsg', '2017-05-05 11:35:46', '', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('244', '醒目“考研包过”广告充斥武汉高校校园(图)', '新书公告', '&nbsp; &nbsp; &nbsp; 2011年研究生(论坛) 考试即将举行，在考生紧张复习的校园内，“考研(论坛) 包过”的小广告也充斥校园，公告栏里、电线杆上甚至垃圾箱上贴的都是。昨日，记者在武汉一些高校内，看到如此“壮观”情景。<br />\r\n&nbsp; &nbsp; &nbsp;记者在武汉大学校园内看到，墙上用红纸黑字写着的“考研包过”广告格外醒目，还特意标明考中（带试卷）保通过。随后，记者以备考学生身份，与对方取得了联系。<br />\r\n&nbsp; &nbsp; &nbsp;&nbsp;一名男子称，他们的操作流程很简单，每一科考试开始后，有人将试卷通过投影传送到考场外。这时，高水平的“枪手”会迅速答题，然后通过防干扰的信号，将答案传送到考生的隐形耳机中。“安全方面绝对放心，我们已经操作过不少了。每门2000元钱，保证通过。”该男子说。<br />\r\n&nbsp; &nbsp; &nbsp; 除了武汉大学，在华中科技大学(微博)、湖北大学等高校，记者看到了类似的小广告。对于醒目的“考研包过”小广告，即将参加考试的学生态度如何呢？记者随机采访了武汉高校内的备考大学生，考生均表示不可相信。“我早就在网上知道考研包过的信息了，但从来没有动过这个念头。”武大的刘同学说。湖北大学的张同学则表示，考试要靠平时的积累和学习，考研包过那是自欺欺人。“每年考研前，学校里就会冒出这些扰人的广告。”武大的一名老师告诉记者，过去曾有学生因轻信广告而上当，不仅浪费了金钱，也耽误了学业。考研靠的是平时的努力，以正常的心态迎接考试才是正确的。<br />', 'hsg', '2017-05-05 11:35:46', '', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('245', '10月1日-31日：温州“营销、外贸、广告、财务、网络、物流”网上人才专场招聘会', '新书公告', '&nbsp;&nbsp;&nbsp; 一、举办时间及承办网站<BR>&nbsp;&nbsp;&nbsp; 举办时间： 2010年10月1日-31日<BR>&nbsp;&nbsp;&nbsp; 承办网站：温州人才网(<A href=\"http://www.wzrc.net/\">www.wzrc.net</A>)<BR>&nbsp;&nbsp;&nbsp; 二、服务内容及办理程序<BR>&nbsp;&nbsp;&nbsp; 1、服务内容：参加温州“营销、外贸、广告、财务、网络、物流”网上人才专场招聘会的单位可在温州人才网(www.wzrc.net)专场招聘频道显示招聘单位名称和招聘信息。<BR>&nbsp;&nbsp;&nbsp; 2、办理程序：携带营业执照和网上人才专场招聘会登记表电子版（可从本网下载，以下简称登记表）到温州人才市场服务大厅办理，或将登记表发送到电子邮箱: 513282458@qq.com，并将营业执照及汇款底单传真至88639522。<BR>&nbsp;&nbsp;&nbsp; 三、大会宣传<BR>&nbsp;&nbsp;&nbsp; 会前将在各新闻媒体及省内外主要知名人才网站等多种媒体上发布信息，进行广泛宣传。 <BR>&nbsp;&nbsp;&nbsp; 四、收费标准 <BR>&nbsp;&nbsp;&nbsp; 1、参加本次网上人才专场招聘会每个单位收费：200元/半个月；300元/月。 <BR>&nbsp;&nbsp;&nbsp; 2、温州人才网有效期内年度会员单位及半年以上高级会员单位将网上人才专场招聘会登记表发至 513282458@qq.com免费参加。<BR>&nbsp;&nbsp;&nbsp; 3、户 名：温州市人才开发服务中心 <BR>&nbsp;&nbsp;&nbsp; 开户银行：浦发银行温州分行<BR>&nbsp;&nbsp;&nbsp; 帐 号：528 429 101 3571<BR>&nbsp;&nbsp;&nbsp; 六、联系方式 <BR>&nbsp;&nbsp;&nbsp; 温州市人才开发服务中心(温州人才市场)<BR>&nbsp;&nbsp;&nbsp; 地址：学院中路5号温州人才大厦（杨府山，府东路口）<BR>&nbsp;&nbsp;&nbsp; 垂询电话：0577－88632738、88302738<BR>&nbsp;&nbsp;&nbsp; 客服QQ：513282458（申请加入请注明企业招聘）<BR>', 'hsg', '2017-05-05 11:35:46', '', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('246', '我市将全面开展城区户外广告设施专项整治', '新书公告', '<P>　　9月19日，记者从市文明办获悉，我市将全面开展城区户外广告设施专项整治，9月底前，全面拆除各类违法户外广告设施，年底前分期拆除各类到期户外广告设施；同时将整治工作列入单位考核，实行半月一督查，一月一通报，为市民清除视觉污染，改善城市景观形象。</P>\r\n<P>　　当前，我市户外广告存在着数量多、设置乱、商业广告多、公益广告少、科技含量低等问题，有的广告还存在一定的安全隐患。大量无序的户外广告占用了市民的城市公共空间。据统计，仅鹿城区就有706个户外广告，占地73310平方米，其中331个户外广告未经审批。</P>\r\n<P>　　9月19日下午，我市召开城区户外广告设施专项整治工作会议。会议透露，按照“违法必拆、到期即拆、应拆尽拆、鼓励自拆、依法强拆”的原则，9月底前将全面拆除各类违法户外广告设施；12月底前分期拆除各类到期户外广告设施。对规划范围内，且年底前合同未到期的已审批各类户外广告设施进行改造提升、规范整治；12月30日前未到审批合同期限的户外广告，按照城区户外广告设置规划，采取场地置换、平面改造等形式，先拆后补；在不占用城市公共空间而少量设置的高科技墙体广告，其收益主要用于为市民改造公共环境。</P>\r\n<P>　　“户外广告整治不是完全不许设置广告，而是要规范设置。”副市长章方璋说，城区户外广告专项整治要与城市品位形象相结合，与城市亮化相结合，同时改变我市广告产业低、小、散现状，推动产业转型升级。同时，对城区公益广告进行清理、规范，确保12月30日前全面整治好城区各类户外广告设施，净化城市空间环境。（记者 尤建明）</P>\r\n<P>　　　<STRONG>&gt;&gt;&gt;相关链接</STRONG></P>\r\n<P>　　<STRONG>&nbsp;重点整治区域</STRONG></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">1.市区北以瓯江为界，东至上江路、蒲中路，西至娄东大街、翠微大道，南至瓯海大道环线范围内所有主次干道。</SPAN></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">2.高速公路市区东、南、西出入口，机场大道、温瑞大道、温州大道、瓯海大道、过境公路等。</SPAN></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">3.河岸、绿化设施范围内。</SPAN></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">4.龙湾中心区路段、永强大道、滨海大道、南洋大道、永中罗东街等。</SPAN></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">5.瓯海区中心路段、铁路温州南站周边、西山路、宁波路、六虹桥路、温瞿路等。</SPAN></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">6.瓯江口新区、温州经济技术开发区、温州生态园（市高教园区）、温州高新技术园区中心路段。</SPAN></P>\r\n<P>　　<STRONG>下列位置严禁设置户外广告设施，已设置的分期、分批拆除：</STRONG></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">1.国家机关、文化教育场所、文物保护单位、名胜风景点及其建筑控制地带。</SPAN></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">2.城市主要道路、入城口两侧占用绿地、影响河道景观、山体视觉的。</SPAN></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">3.城市中心区设置的高立柱户外广告。</SPAN></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">4.交通信号设施、交通指路牌、交通标志牌、交通执勤岗设施、道路隔离栏、人行天桥护栏、道路及桥梁防撞墙与隔声窗。</SPAN></P>\r\n<P>　　<SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">5.危房或可能危及建（构）筑物和设施安全的位置。 </SPAN></P>\r\n<P><SPAN style=\"FONT-FAMILY: 楷体,楷体_GB2312\">&nbsp;&nbsp;&nbsp;&nbsp;6.违法建筑物墙体及屋顶位置。</SPAN></P>\r\n<META name=ContentEnd><!--ZJEG_RSS.content.end--><!--<$[信息内容]>end-->', 'hsg', '2017-05-05 11:35:46', '', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('247', '钱库整治乱搭棚和违章广告牌', '新书公告', '<DIV>&nbsp;&nbsp;&nbsp;&nbsp; 11.5日,钱库城管中队组织人员对钱库镇辖区内的乱搭简易棚和违章广告牌进行统一整治,进一步加大市容市貌的整治力度。</DIV>\r\n<DIV>&nbsp;&nbsp;&nbsp;&nbsp; 近期, 钱库城管中队检查人员在辖区内巡查时发现有擅自搭建简易棚和未批私做广告牌,在多次发出过停工书面通知，责令限期自行拆除无果后. 11.5日，钱库城管中队组织人员对城区户外广告牌和进行简易棚全面整治，在拆除现场，执法人员对房主进行了教育，并积极配合城管人员主动进行拆除，对个别置若罔闻的房主，执法人员当场进行强制拆除，此次行动一共强制拆除乱搭简易棚3个, 违章广告牌子10个.违章占道6处.<FONT face=\"Times New Roman\"> </FONT>维护了市容市貌，进一步消除了安全隐患。 (记者：罗宏雷)</DIV>\r\n<DIV>　　　　</DIV>', 'hsg', '2017-05-05 11:35:46', '', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('248', '北京户外广告滥用成语、炫富均封杀 最高罚3万', '新书公告', '　“钱途无量”、“与食俱进”，一些商家在户外广告上滥用成语或宣扬享乐、贵族等内容，这些现象将被整治，限期不改正最高可依法罚款3万元。昨天，北京市工商局表示，即日起在全市专项检查5大问题的经营性户外广告和自设性户外广告。 \r\n<P>　　<STRONG>宣扬享乐炫富均封杀</STRONG></P>\r\n<P>　　市工商局广告处负责人介绍，此次专项检查重点清理5大问题，其中清查户外广告中使用不规范用字、滥用成语等违反《语言文字管理规定》，及擅自改变企业名称字号的问题。</P>\r\n<P>　　滥用成语是户外广告的新特点，比如“钱途无量”、“与食俱进”、“咳不容缓”等，这些内容均违反《广告语言文字管理暂行规定》按此规定，广告中成语的使用必须符合有关规范，不得引起误导。</P>\r\n<P>　　另外，一些户外广告宣扬享乐、封建帝王、崇洋媚外等，比如“奢华”、“至尊”、“袭封地，承爵品”等炫富字眼在房产、洋酒、汽车等广告中不难找到，这种不符合精神文明建设要求的广告也是清查内容。</P>\r\n<P>　　<STRONG>限期不改正最高罚3万</STRONG></P>\r\n<P>　　市工商局表示，从现在起至4月15日前，户外广告经营单位需在“北京工商”网站下载填写《户外广告自查登记表》，报送所在辖区工商分局或工商所。自设性户外广告经营单位则针对上述问题进行自行检查和纠正。</P>\r\n<P>　　4月15日以后，工商部门将对全市户外广告进行全面检查。对依然存在问题的广告经营单位，将依法处理，最高可处以罚款3万元。（记者廖爱玲） </P><!-- end_ct -->', 'hsg', '2017-05-05 11:35:46', '', '3', null);
INSERT INTO `xinwentongzhi` VALUES ('273', 'afdad', '购物需知', 'afddadfafd', 'hsg', '2017-05-05 01:31:31', '', '1', null);
INSERT INTO `xinwentongzhi` VALUES ('274', 'adfad', '新书公告', 'adfadf', 'hsg', '2017-05-05 18:13:39', '', '1', null);

-- ----------------------------
-- Table structure for `yonghuzhuce`
-- ----------------------------
DROP TABLE IF EXISTS `yonghuzhuce`;
CREATE TABLE `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `diqu` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  `shouji` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of yonghuzhuce
-- ----------------------------
INSERT INTO `yonghuzhuce` VALUES ('26', '555', '555', '何升高', '男', '浙江', '13888888888', 'uploadfile/13392103902z4y.jpg', '2019-04-14 07:46:56', '是', '32235643');
INSERT INTO `yonghuzhuce` VALUES ('28', 'mygod', 'mygod', '陈德才', '男', '河南', '13999999999', 'uploadfile/1339211824lezl.gif', '2019-04-14 07:46:56', '是', '53464373');
INSERT INTO `yonghuzhuce` VALUES ('30', '888', '888', '张三', '男', '浙江', '13999999999', 'uploadfile/1489009703vaij.jpg', '2019-04-14 05:48:26', '是', null);
INSERT INTO `yonghuzhuce` VALUES ('32', '999', '999', '张三', '男', 'dfdfaa', '13999999999', 'uploadfile/1489374383vr9v.jpg', '2019-04-14 11:06:26', '是', null);
INSERT INTO `yonghuzhuce` VALUES ('34', '777', '777', '阮小七', '男', '浙江温州XXX', '88888888', 'uploadfile/1491196042k5ob.jpg', '2019-04-14 01:07:24', '否', null);
INSERT INTO `yonghuzhuce` VALUES ('35', '666', '666', '李四', '女', '浙江温州XXX', '88888888', 'uploadfile/1491197406ukzz.gif', '2019-04-14 01:30:10', '是', null);
INSERT INTO `yonghuzhuce` VALUES ('36', '333', '333', '张三', '男', '浙江温州XXX', '13777777777', 'uploadfile/1493979090uqky.jpg', '2019-04-14 18:11:33', '否', null);

-- ----------------------------
-- Table structure for `youqinglianjie`
-- ----------------------------
DROP TABLE IF EXISTS `youqinglianjie`;
CREATE TABLE `youqinglianjie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wangzhanmingcheng` varchar(50) DEFAULT NULL,
  `wangzhi` varchar(50) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of youqinglianjie
-- ----------------------------
INSERT INTO `youqinglianjie` VALUES ('16', '百度', 'http://www.baidu.com', '2019-04-14 07:46:56', 'uploadfile/baidu.gif');
INSERT INTO `youqinglianjie` VALUES ('17', '谷歌', 'http://www.google.cn', '2019-04-14 07:46:56', 'uploadfile/google.png');
INSERT INTO `youqinglianjie` VALUES ('18', '新浪', 'http://www.sina.com', '2019-04-14 07:46:56', 'uploadfile/sina.gif');
INSERT INTO `youqinglianjie` VALUES ('19', 'QQ', 'http://www.qq.com', '2019-04-14 07:46:56', 'uploadfile/qq.jpg');
INSERT INTO `youqinglianjie` VALUES ('20', '网易', 'http://www.163.com', '2019-04-14 07:46:56', 'uploadfile/163.png');
