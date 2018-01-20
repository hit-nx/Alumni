/*
Navicat MySQL Data Transfer

Source Server         : MrssiP
Source Server Version : 50556
Source Host           : localhost:3306
Source Database       : alumni

Target Server Type    : MYSQL
Target Server Version : 50556
File Encoding         : 65001

Date: 2018-01-20 15:04:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for alumni_users
-- ----------------------------
DROP TABLE IF EXISTS `alumni_users`;
CREATE TABLE `alumni_users` (
  `userid` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT '',
  `password` varchar(50) DEFAULT '',
  `level` int(2) DEFAULT '3',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of alumni_users
-- ----------------------------
INSERT INTO `alumni_users` VALUES ('1', 'admin', 'jbgsn12345', '3');
INSERT INTO `alumni_users` VALUES ('3', '刘恺宸', '521darling', '3');
INSERT INTO `alumni_users` VALUES ('4', '张迪', 'zd123456', '3');
INSERT INTO `alumni_users` VALUES ('5', '郭佳宇', 'gjy7777777', '3');
INSERT INTO `alumni_users` VALUES ('6', '张玉', 's123456', '3');
INSERT INTO `alumni_users` VALUES ('7', 'test', '123', '3');
