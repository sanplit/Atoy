/*
Navicat MySQL Data Transfer

Source Server         : Sole-1
Source Server Version : 50704
Source Host           : localhost:3306
Source Database       : wenwanhui

Target Server Type    : MYSQL
Target Server Version : 50704
File Encoding         : 65001

Date: 2016-05-13 19:58:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `name` varchar(16) DEFAULT NULL COMMENT '管理员用户名',
  `passwd` varchar(55) DEFAULT NULL COMMENT '管理员密码',
  `loginnum` int(11) DEFAULT NULL COMMENT '登录次数',
  `last_ip` varchar(25) DEFAULT NULL,
  `last_date` datetime DEFAULT NULL COMMENT '使用时间',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '0192023a7bbd73250516f069df18b500', '16', '127.0.0.1', '2016-05-13 12:33:45');
INSERT INTO `admin` VALUES ('2', 'Sanplit', 'e10adc3949ba59abbe56e057f20f883e', '2', '127.0.0.1', '2016-04-29 17:33:04');

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '购物车ID',
  `uid` int(11) DEFAULT NULL COMMENT '关联用户ID',
  `pid` int(11) DEFAULT NULL COMMENT '关联商品ID',
  `pname` varchar(25) DEFAULT NULL COMMENT '商品名',
  `price` double(11,0) DEFAULT NULL COMMENT '价格',
  `count` int(11) DEFAULT NULL COMMENT '购物数量',
  `pic` varchar(25) DEFAULT NULL COMMENT '商品图片路径',
  `date` datetime DEFAULT NULL COMMENT '购买时间',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='购物车表';

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('1', '2', '8', '星月菩提', '6600', '1', 'shops/pt_002.jpg', '2016-04-28 17:49:02');
INSERT INTO `cart` VALUES ('5', '1', '4', '阳翠手环', '15000', '1', 'shops/fc_004.jpg', '2016-05-11 00:55:22');
INSERT INTO `cart` VALUES ('14', '3', '3', '五龙瓶', '26000', '1', 'shops/fc_003.jpg', '2016-05-12 03:20:35');
INSERT INTO `cart` VALUES ('18', '3', '1', '高冰阳翠手环', '8000', '4', 'shops/fc_001.jpg', '2016-05-12 10:10:18');
INSERT INTO `cart` VALUES ('20', '4', '9', '精选藏式小金刚108颗', '880', '1', 'shops/pt_003.jpg', '2016-05-13 17:19:44');
INSERT INTO `cart` VALUES ('21', '4', '2', '黄翡观音手把件', '18000', '3', 'shops/fc_002.jpg', '2016-05-13 17:20:10');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT '类别ID',
  `name` varchar(16) DEFAULT NULL COMMENT '类名',
  `date` datetime DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '翡翠', '2016-04-22 09:53:12');
INSERT INTO `category` VALUES ('2', '菩提', '2016-04-22 09:54:52');
INSERT INTO `category` VALUES ('3', '葫芦', '2016-04-22 09:55:06');
INSERT INTO `category` VALUES ('4', '紫檀', '2016-04-22 09:57:18');

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言ID',
  `uid` int(11) DEFAULT NULL COMMENT '关联用户ID',
  `title` varchar(25) DEFAULT NULL COMMENT '留言标题',
  `content` tinytext COMMENT '留言内容',
  `date` datetime DEFAULT NULL COMMENT '留言时间',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='留言板表';

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '1', '测试第一', '留言测试成功啊', '2016-04-28 14:25:56');
INSERT INTO `message` VALUES ('2', '2', '这是真的？', '我读的书多，不会骗你~~~', '2016-04-28 14:28:05');
INSERT INTO `message` VALUES ('3', '4', '这是真的？', '我读的书多，不会骗你~~~', '2016-04-28 14:29:30');
INSERT INTO `message` VALUES ('4', '3', '这是真的？', '我读的书多，不会骗你~~~', '2016-04-28 14:30:39');
INSERT INTO `message` VALUES ('5', '1', '', 'dryg', '2016-04-28 14:45:10');
INSERT INTO `message` VALUES ('6', '3', '123', '13213213', '2016-04-28 14:50:11');
INSERT INTO `message` VALUES ('7', '3', '天黑了', '夜不够黑，烟火不会太完美。', '2016-04-29 10:41:46');
INSERT INTO `message` VALUES ('8', '3', '加油', '剩下的日子不多了，加油吧！', '2016-05-09 16:29:40');

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品ID',
  `cid` int(11) DEFAULT NULL COMMENT '商品关联类别',
  `count` int(11) DEFAULT NULL COMMENT '商品数',
  `title` varchar(25) DEFAULT NULL COMMENT '商品标题',
  `price` double(11,0) DEFAULT NULL COMMENT '商品价格',
  `pic` varchar(25) DEFAULT NULL COMMENT '商品图片',
  `decription` tinytext COMMENT '商品描述',
  `date` datetime DEFAULT NULL COMMENT '上架时间',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', '1', '12', '高冰阳翠手环', '8000', 'shops/fc_001.jpg', '高冰阳翠手环', '2016-04-24 16:53:27');
INSERT INTO `product` VALUES ('2', '1', '324', '黄翡观音手把件', '18000', 'shops/fc_002.jpg', '黄翡观音手把件', '2016-04-24 16:54:52');
INSERT INTO `product` VALUES ('3', '1', '4234', '五龙瓶', '26000', 'shops/fc_003.jpg', '五龙瓶', '2016-04-24 16:56:21');
INSERT INTO `product` VALUES ('4', '1', '465', '阳翠手环', '15000', 'shops/fc_004.jpg', '阳翠手环', '2016-04-24 16:57:49');
INSERT INTO `product` VALUES ('5', '1', '665', '冰种飘花手环', '10000', 'shops/fc_005.jpg', '冰种飘花手环', '2016-04-24 16:58:48');
INSERT INTO `product` VALUES ('6', '1', '65', '花开富贵', '18000', 'shops/fc_006.jpg', '花开富贵', '2016-04-24 16:59:49');
INSERT INTO `product` VALUES ('7', '2', '77', '千眼菩提持珠', '5880', 'shops/pt_001.jpg', '千眼菩提持珠', '2016-04-24 17:01:10');
INSERT INTO `product` VALUES ('8', '2', '88', '星月菩提', '6600', 'shops/pt_002.jpg', '星月菩提', '2016-04-24 17:03:25');
INSERT INTO `product` VALUES ('9', '2', '43', '精选藏式小金刚108颗', '880', 'shops/pt_003.jpg', '0.9 6瓣 精选藏式小金刚108颗', '2016-04-24 17:05:58');
INSERT INTO `product` VALUES ('10', '2', '547', '五瓣金刚菩提子', '220', 'shops/pt_003.jpg', '五瓣金刚菩提子', '2016-04-24 17:07:22');
INSERT INTO `product` VALUES ('11', '2', '45', '天然草金刚菩提子', '150', 'shops/pt_005.jpg', '天然草金刚菩提子0.35x216+1念珠', '2016-04-24 17:08:57');
INSERT INTO `product` VALUES ('12', '2', '96', '天然尼泊尔金刚菩提子', '330', 'shops/pt_006.jpg', '天然尼泊尔金刚菩提子1.7x15 手串 藏式 精磨', '2016-04-24 17:10:12');
INSERT INTO `product` VALUES ('13', '3', '34', '观音心经', '500', 'shops/hl_001.jpg', '观音心经', '2016-04-24 17:11:57');
INSERT INTO `product` VALUES ('14', '3', '26', '莲花心经', '500', 'shops/hl_002.jpg', '莲花心经', '2016-04-24 17:12:51');
INSERT INTO `product` VALUES ('15', '3', '505', '项链坠', '500', 'shops/hl_003.jpg', '项链坠', '2016-04-24 17:15:28');
INSERT INTO `product` VALUES ('16', '3', '50', '龙凤 一对 葫芦烙画', '300', 'shops/hl_004.jpg', '龙凤 一对 葫芦烙画', '2016-04-24 17:18:53');
INSERT INTO `product` VALUES ('17', '3', '60', '虎：卧看闲云', '1860', 'shops/hl_005.jpg', '虎：卧看闲云', '2016-04-24 17:20:19');
INSERT INTO `product` VALUES ('18', '3', '85', '招财进宝工艺葫芦', '320', 'shops/hl_006.jpg', '招财进宝工艺葫芦', '2016-04-24 17:21:55');
INSERT INTO `product` VALUES ('19', '4', '6', '爆满金星2.0佛珠', '5300', 'shops/zt_001.jpg', '【成得紫檀】爆满金星2.0佛珠', '2016-04-24 17:24:40');
INSERT INTO `product` VALUES ('20', '4', null, '小叶紫檀', '480', 'shops/zt_002.jpg', '野生林老料小叶紫檀 108颗6mm高密无棕眼', '2016-04-24 17:26:00');
INSERT INTO `product` VALUES ('21', '4', null, '紫檀木手串', '300', 'shops/zt_002.jpg', '紫檀木手串', '2016-04-24 17:26:58');
INSERT INTO `product` VALUES ('22', '4', null, ' 超极品出炉', '888', 'shops/zt_003.jpg', ' 超极品出炉、2.0超级爆满水波、360度爆满水波满金', '2016-04-24 17:28:29');
INSERT INTO `product` VALUES ('25', null, '123', '小炮', '123', '', null, '2016-05-13 12:48:59');
INSERT INTO `product` VALUES ('26', null, '123', '案说法', '1331', '', null, '2016-05-13 12:50:33');
INSERT INTO `product` VALUES ('27', '3', '123', '小萝卜', '123', '', null, '2016-05-13 12:57:09');
INSERT INTO `product` VALUES ('28', '1', '465', '阳翠手环', '15000', '', null, '2016-05-13 13:05:20');
INSERT INTO `product` VALUES ('29', '1', '1312', '213123123', '123123', '', null, '2016-05-13 16:45:41');
INSERT INTO `product` VALUES ('30', '1', '12', '高冰阳翠手环', '8000', '', null, '2016-05-13 16:47:22');
INSERT INTO `product` VALUES ('31', '1', '12', '高冰阳翠手环', '8000', '', null, '2016-05-13 16:48:18');
INSERT INTO `product` VALUES ('32', '1', '0', 'dasd', '0', '', null, '2016-05-13 17:08:53');
INSERT INTO `product` VALUES ('33', '1', '2423', '4234234', '23423', '', null, '2016-05-13 17:09:10');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(16) DEFAULT NULL COMMENT '用户名',
  `passwd` varchar(25) DEFAULT NULL COMMENT '用户密码',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `phone` int(12) DEFAULT NULL COMMENT '手机号',
  `sign` text COMMENT '个性签名',
  `frist_date` datetime DEFAULT NULL COMMENT '用户使用时间',
  `last_date` datetime DEFAULT NULL COMMENT '最后登录时间',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '张三', '123456', null, null, null, '2016-04-22 17:07:04', '2016-04-28 17:36:40');
INSERT INTO `user` VALUES ('2', 'sole', '123456', null, null, '笑一笑，十年少', '2016-04-22 17:07:15', '2016-04-28 17:36:44');
INSERT INTO `user` VALUES ('3', 'dugu', 'dugu123', null, null, '给你一张狗嘴，你也改不了吃屎', '2016-04-24 08:53:02', '2016-04-29 17:36:47');
INSERT INTO `user` VALUES ('4', 'qian', '123456', null, null, null, '2016-04-29 16:48:59', '2016-04-29 17:36:50');
INSERT INTO `user` VALUES ('5', 'qing', '435435345', null, null, null, '2016-04-14 17:34:31', '2016-04-29 17:36:53');
INSERT INTO `user` VALUES ('6', 'sanplit', '123', null, null, '瞅一瞅，光了头', '2016-04-29 17:34:35', '2016-04-29 17:36:56');
INSERT INTO `user` VALUES ('7', '2131', '312312', null, null, null, '2016-04-29 17:34:38', '2016-04-29 17:36:59');
INSERT INTO `user` VALUES ('8', '1234', '123456', null, null, null, '2016-04-29 16:49:04', '2016-04-29 17:37:01');
