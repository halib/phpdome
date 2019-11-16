/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : testdemo

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-11-16 17:06:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'ee', 'eee', '12121');
INSERT INTO `user` VALUES ('2', 'uu', '33333333', '121212');
INSERT INTO `user` VALUES ('3', 'uu', 'wwwwww', '111111');
INSERT INTO `user` VALUES ('4', 'dd', 'rrrrrrrrrrrrr', '222222222222');
INSERT INTO `user` VALUES ('5', 'dd', 'rrrrrrrrrrrrr', '222222222222');
INSERT INTO `user` VALUES ('6', 'dd', '3333', '2222');
INSERT INTO `user` VALUES ('7', 'dd', '3333', '2222');
INSERT INTO `user` VALUES ('8', 'dd', '3333', '2222');
INSERT INTO `user` VALUES ('9', 'dd', '3333', '2222');
INSERT INTO `user` VALUES ('10', 'dd', '3333', '2222');
INSERT INTO `user` VALUES ('11', 'dd', '3333', '2222');
INSERT INTO `user` VALUES ('12', 'Username', 'Password', 'tel');
INSERT INTO `user` VALUES ('13', 'uu', '44444', '3333');
INSERT INTO `user` VALUES ('14', 'uu', '44444', '3333');
INSERT INTO `user` VALUES ('15', 'uu1', '111', '13724775601');
INSERT INTO `user` VALUES ('16', 'uu2', '111', '13724775601');
INSERT INTO `user` VALUES ('17', 'uu3', '11', '13724775601');
