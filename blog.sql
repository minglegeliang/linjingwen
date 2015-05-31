/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-05-31 21:48:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bloglist
-- ----------------------------
DROP TABLE IF EXISTS `bloglist`;
CREATE TABLE `bloglist` (
  `Blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `Blog_header` varchar(255) NOT NULL,
  `Blog_content` varchar(255) NOT NULL,
  `Blog_time` datetime NOT NULL,
  PRIMARY KEY (`Blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bloglist
-- ----------------------------
INSERT INTO `bloglist` VALUES ('1', 'sadad', 'asdasdas', '0000-00-00 00:00:00');
INSERT INTO `bloglist` VALUES ('2', 'sadasda', 'qwdqwdw', '0000-00-00 00:00:00');
INSERT INTO `bloglist` VALUES ('3', 'fdsad', 'sdfasf', '0000-00-00 00:00:00');
INSERT INTO `bloglist` VALUES ('4', 'asdas', 'asdasdas', '0000-00-00 00:00:00');
INSERT INTO `bloglist` VALUES ('5', 'ds', 'asdasf', '0000-00-00 00:00:00');
INSERT INTO `bloglist` VALUES ('6', 'qq', 'qq', '0000-00-00 00:00:00');
INSERT INTO `bloglist` VALUES ('7', 'asdas', 'asdasda', '0000-00-00 00:00:00');
INSERT INTO `bloglist` VALUES ('8', 'vzcxbvc', 'asfdafa', '0000-00-00 00:00:00');
INSERT INTO `bloglist` VALUES ('9', 'dfsfds', 'asfasfas', '0000-00-00 00:00:00');
INSERT INTO `bloglist` VALUES ('10', 'qwerere', 'vfbvxcxvc', '2015-05-31 19:43:36');
INSERT INTO `bloglist` VALUES ('11', 'asdafacasc', 'nytjttuktr', '2015-05-31 19:44:16');

-- ----------------------------
-- Table structure for contactform
-- ----------------------------
DROP TABLE IF EXISTS `contactform`;
CREATE TABLE `contactform` (
  `ContactForm_id` int(11) NOT NULL AUTO_INCREMENT,
  `ContactForm_username` varchar(255) NOT NULL,
  `ContactForm_email` varchar(255) NOT NULL,
  `ContactForm_content` varchar(255) NOT NULL,
  `ContactForm_time` datetime NOT NULL,
  PRIMARY KEY (`ContactForm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contactform
-- ----------------------------
INSERT INTO `contactform` VALUES ('1', 'dsa', 'sdfa', 'asdf', '0000-00-00 00:00:00');
INSERT INTO `contactform` VALUES ('2', 'dsa', 'sdfa', 'asdf', '0000-00-00 00:00:00');
INSERT INTO `contactform` VALUES ('3', 'asa', 'asd', 'asdas', '0000-00-00 00:00:00');
INSERT INTO `contactform` VALUES ('4', 'weerger', 'safafas', 'sdfsdfs', '0000-00-00 00:00:00');
INSERT INTO `contactform` VALUES ('5', 'shijain ', 'asdasa', 'asdasdas', '0000-00-00 00:00:00');
INSERT INTO `contactform` VALUES ('6', 'dfsadad', 'asdf', 'asdfas', '0000-00-00 00:00:00');
INSERT INTO `contactform` VALUES ('7', 'lin', 'liln', 'in', '2015-05-31 15:23:53');

-- ----------------------------
-- Table structure for loginform
-- ----------------------------
DROP TABLE IF EXISTS `loginform`;
CREATE TABLE `loginform` (
  `LoginForm_id` int(11) NOT NULL AUTO_INCREMENT,
  `LoginForm_username` varchar(255) NOT NULL,
  `LoginForm_password` varchar(255) NOT NULL,
  PRIMARY KEY (`LoginForm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of loginform
-- ----------------------------
INSERT INTO `loginform` VALUES ('1', 'test', '12345');
INSERT INTO `loginform` VALUES ('2', 'test1', '12345');
INSERT INTO `loginform` VALUES ('3', 'test2 ', '1234');
INSERT INTO `loginform` VALUES ('4', 'test3', '12345');
INSERT INTO `loginform` VALUES ('5', 'test4', '123');
INSERT INTO `loginform` VALUES ('6', 'Lin', '123');
INSERT INTO `loginform` VALUES ('7', 'minglegeliang', '123456');
INSERT INTO `loginform` VALUES ('8', 'minglegeliang', '123456');
INSERT INTO `loginform` VALUES ('9', 'minglegeliang', '123456');
