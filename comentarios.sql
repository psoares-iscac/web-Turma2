-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `eventoId` int(10) unsigned NOT NULL DEFAULT 0,
  `email` varchar(250) DEFAULT '0',
  `mensagem` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `comentarios` VALUES ('1', '5', 'psoares@iscac.pt', 'Palestras e seminários muitio interessantes, com uma excelente organização. Recomendo vivamente a todos os que se preocupam com o seu bem estar.', '2024-07-23 00:00:00');
INSERT INTO `comentarios` VALUES ('2', '5', 'Anónimo', 'Não gostei nada, foi uma autêntica vergonha. A organização falhou em muitos aspectos. Enormes filas para participar em qualquer uma das atividades.', '2024-08-10 00:00:00');
INSERT INTO `comentarios` VALUES ('6', '5', 'Anónimo', 'srfhgsdfhdfh', '2024-12-12 17:58:07');

