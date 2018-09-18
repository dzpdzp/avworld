/*
Navicat MySQL Data Transfer

Source Server         : localhost_mysql5.7_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : avworld

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-09-18 18:11:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ours_team
-- ----------------------------
DROP TABLE IF EXISTS `ours_team`;
CREATE TABLE `ours_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoname` varchar(255) NOT NULL COMMENT '画像名称',
  `path` varchar(255) NOT NULL COMMENT 'Path',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
