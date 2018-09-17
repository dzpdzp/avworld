/*
Navicat MySQL Data Transfer

Source Server         : localhost_mysql5.7_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : avworld

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-09-17 18:03:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for news_image
-- ----------------------------
DROP TABLE IF EXISTS `news_image`;
CREATE TABLE `news_image` (
  `news_id` int(11) NOT NULL,
  `imagecd` int(11) NOT NULL COMMENT '画像番号',
  `imagename` varchar(255) NOT NULL COMMENT '画像名称',
  `path` varchar(255) NOT NULL COMMENT 'Path',
  `type` smallint(6) NOT NULL COMMENT 'タイプ',
  PRIMARY KEY (`news_id`,`imagecd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
