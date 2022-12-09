/*
Navicat MySQL Data Transfer

Source Server         : MYSQL (root@)
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : c1560393_ba2

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2022-12-09 10:49:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dihm_usuario
-- ----------------------------
DROP TABLE IF EXISTS `dihm_usuario`;
CREATE TABLE `dihm_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `clave` text NOT NULL,
  `apellido` text NOT NULL,
  `nombre` text NOT NULL,
  `usuario_tipo` int(11) DEFAULT NULL,
  KEY `ix_dihm_usuario_id` (`id`) USING BTREE,
  KEY `ix_dihm_usuario_apellido` (`apellido`(100)),
  KEY `ix_dihm_usuario_nombre` (`nombre`(100)),
  KEY `ix_dihm_usuario_login` (`login`(100)),
  KEY `fk_dihm_usuario_usuario_tipo` (`usuario_tipo`),
  CONSTRAINT `fk_dihm_usuario_usuario_tipo` FOREIGN KEY (`usuario_tipo`) REFERENCES `dihm_usuario_tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='Tabla de usuario de funcionarios del DIHM';

-- ----------------------------
-- Records of dihm_usuario
-- ----------------------------
INSERT INTO `dihm_usuario` VALUES ('1', 'admin', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', 'Administrador', 'Sistema', '1');
INSERT INTO `dihm_usuario` VALUES ('2', 'dario', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', 'Vergara', 'Dario', '2');
INSERT INTO `dihm_usuario` VALUES ('3', 'horacio', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', 'Cosenza', 'Horacio', '2');
INSERT INTO `dihm_usuario` VALUES ('4', 'carlosg', '*00A51F3F48415C7D4E8908980D443C29C69B60C9', 'Garcia', 'Carlos', '1');

-- ----------------------------
-- Table structure for dihm_usuario_tipo
-- ----------------------------
DROP TABLE IF EXISTS `dihm_usuario_tipo`;
CREATE TABLE `dihm_usuario_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  KEY `ix_dihm_usuario_tipo_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='Tipos de usuario; ej.: Funcionario, Administrador de sistema, Registro de industria, etc';

-- ----------------------------
-- Records of dihm_usuario_tipo
-- ----------------------------
INSERT INTO `dihm_usuario_tipo` VALUES ('1', 'Admin Sistema');
INSERT INTO `dihm_usuario_tipo` VALUES ('2', 'Funcionarios DIHM');
INSERT INTO `dihm_usuario_tipo` VALUES ('3', 'Registro de Industrias');
