/*
Navicat MySQL Data Transfer

Source Server         : localhost_mysql5.7_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : avworld

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-08-03 18:14:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for aboutus
-- ----------------------------
DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE `aboutus` (
  `title1` varchar(100) DEFAULT NULL COMMENT '标题',
  `text1` varchar(500) DEFAULT NULL COMMENT '内容',
  `title2` varchar(100) DEFAULT NULL COMMENT '标题',
  `text2` varchar(500) DEFAULT NULL COMMENT '内容'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aboutus
-- ----------------------------
INSERT INTO `aboutus` VALUES ('公司信息', '北京艺美和文化产业有限公司是一家演艺科技类的专业公司。主要从事和演艺相关工程集成及施工。业务范围主要是剧场剧院、体育场馆、会议会展中心及酒店和旅游演艺等的灯光、音响、视频及舞台机械部分的工程项目。另外演出部业务范围主要在大型会议、论坛、展览展示、文艺晚会、开幕庆典、节日庆典、新闻发布会、客户联谊会、年会、酒会、设备租赁等各种活动专业设备安装和调试。', '公司信息2', 'aaaaaaaaa');

-- ----------------------------
-- Table structure for certificate
-- ----------------------------
DROP TABLE IF EXISTS `certificate`;
CREATE TABLE `certificate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `imgpath` varchar(100) DEFAULT NULL COMMENT '图片路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of certificate
-- ----------------------------
INSERT INTO `certificate` VALUES ('1', '1', 'resource/zhengshu/1.png');
INSERT INTO `certificate` VALUES ('2', '2', 'resource/zhengshu/2.png');
INSERT INTO `certificate` VALUES ('3', '3', 'resource/zhengshu/3.png');
INSERT INTO `certificate` VALUES ('5', '4', 'resource/zhengshu/4.png');
INSERT INTO `certificate` VALUES ('6', '5', 'resource/zhengshu/5.png');
INSERT INTO `certificate` VALUES ('7', '6', 'resource/zhengshu/6.png');
INSERT INTO `certificate` VALUES ('8', '7', 'resource/zhengshu/7.png');
INSERT INTO `certificate` VALUES ('9', '8', 'resource/zhengshu/7.png');
INSERT INTO `certificate` VALUES ('10', '9', 'resource/zhengshu/7.png');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `imgpath` varchar(100) DEFAULT NULL,
  `creattime` date DEFAULT NULL COMMENT '插入时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '名称', '内容', 'resource/news/news1.jpg', '2018-07-25');
INSERT INTO `news` VALUES ('2', '1', '2', 'resource/news/news12.jpg', '2018-07-25');
INSERT INTO `news` VALUES ('3', '1', '2', 'resource/news/news13.jpg', '2018-07-25');
INSERT INTO `news` VALUES ('4', '3', '44444444444444444444444爱上大声地阿萨德阿萨德阿萨德ad按时啊按时啊啊按时啊AAS啊带我去二多牵我的手多请问 ', 'resource/news/news2.png', '2018-07-25');
INSERT INTO `news` VALUES ('5', '3', '44444444444444444444444爱上大声地阿萨德阿萨德阿萨德ad按时啊按时啊啊按时啊AAS啊带我去二多牵我的手多请问 ', 'resource/news/news2.png', '2018-07-25');
INSERT INTO `news` VALUES ('6', '12', '2', 'resource/news/微信图片_20171226131509.png', '2018-07-30');

-- ----------------------------
-- Table structure for service
-- ----------------------------
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` int(11) DEFAULT NULL COMMENT '服务领域种类  1：商业会展 2 ： 主题  ',
  `service_title` varchar(255) DEFAULT NULL COMMENT '服务名',
  `service_img` varchar(255) DEFAULT NULL COMMENT '服务种类img',
  `service_des` text COMMENT '服务领域详细信息',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of service
-- ----------------------------
INSERT INTO `service` VALUES ('1', '1', '1', 'resource/service/marker.png', '2');

-- ----------------------------
-- Table structure for service_detail
-- ----------------------------
DROP TABLE IF EXISTS `service_detail`;
CREATE TABLE `service_detail` (
  `service_parent_id` int(11) NOT NULL COMMENT 'service 表中 id  ',
  `service_des` varchar(255) DEFAULT NULL COMMENT '服务领域详细信息',
  PRIMARY KEY (`service_parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of service_detail
-- ----------------------------

-- ----------------------------
-- Table structure for service_type
-- ----------------------------
DROP TABLE IF EXISTS `service_type`;
CREATE TABLE `service_type` (
  `service_type` int(11) NOT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `service_img` varchar(255) DEFAULT NULL COMMENT '服务领域 地址',
  PRIMARY KEY (`service_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of service_type
-- ----------------------------
INSERT INTO `service_type` VALUES ('1', '大型发布会！', 'resource/service/service_type/DZP\'S.png');
INSERT INTO `service_type` VALUES ('2', '文艺晚会', 'resource/service/service_type/DZP\'S.png');
INSERT INTO `service_type` VALUES ('3', '开幕庆典', 'resource/service/service_type/DZP\'S.png');
INSERT INTO `service_type` VALUES ('4', '设备租赁', 'resource/service/service_type/DZP\'S.png');
INSERT INTO `service_type` VALUES ('5', '其他', 'resource/service/service_type/DZP\'S.png');
