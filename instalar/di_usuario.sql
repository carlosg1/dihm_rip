/*
Navicat MySQL Data Transfer

Source Server         : MYSQL (root@)
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : galeria2_orion47

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2022-12-09 09:13:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for di_usuario
-- ----------------------------
DROP TABLE IF EXISTS `di_usuario`;
CREATE TABLE `di_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) CHARACTER SET latin1 NOT NULL,
  `apellido` text CHARACTER SET latin1 NOT NULL,
  `nombre` text CHARACTER SET latin1 NOT NULL,
  `clave` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_di_usuario_id` (`id`) USING BTREE,
  UNIQUE KEY `ix_di_usuario_login` (`login`) USING BTREE,
  FULLTEXT KEY `ix_di_usuario_apellido` (`apellido`),
  FULLTEXT KEY `ix_di_usuario_nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of di_usuario
-- ----------------------------
INSERT INTO `di_usuario` VALUES ('1', 'admin', 'Garcia', 'Carlos', '*00A51F3F48415C7D4E8908980D443C29C69B60C9');
INSERT INTO `di_usuario` VALUES ('2', 'horacio', 'Cosenza', 'Horacio', '*00A51F3F48415C7D4E8908980D443C29C69B60C9');
INSERT INTO `di_usuario` VALUES ('3', 'dario', 'Vergara', 'Dario', '*00A51F3F48415C7D4E8908980D443C29C69B60C9');
INSERT INTO `di_usuario` VALUES ('4', 'carlosg', 'Garcia', 'Carlos', '*00A51F3F48415C7D4E8908980D443C29C69B60C9');
