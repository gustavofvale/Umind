CREATE TABLE IF NOT EXISTS `categorias_servicos` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria_servico` varchar(150) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `servicos` (
  `idservico` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `descricao_curta` varchar(250) DEFAULT NULL,
  `descricao_geral` text,
  `valor` varchar(50) DEFAULT NULL,
  `video` varchar(150) DEFAULT NULL,
  `destaque` tinyint(1) DEFAULT '0',
  `habilitado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`idservico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `servicos_categorias_subcategorias` (
  `idservico_categoria_subcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idservico` int(11) NOT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `idsubcategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idservico_categoria_subcategoria`),
  KEY `fk_servicos_servcatsub1` (`idservico`),
  KEY `fk_categoria_servcatsub1` (`idcategoria`),
  KEY `fk_subcategorias_servcatsub1` (`idsubcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `servicos_documentos` (
  `iddocumento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_documento` varchar(150) NOT NULL,
  `arquivo_path` varchar(45) DEFAULT NULL,
  `idservico` int(11) NOT NULL,
  PRIMARY KEY (`iddocumento`),
  KEY `fk_servicos_documentos1` (`idservico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `servicos_galeria` (
  `idgaleria` int(11) NOT NULL AUTO_INCREMENT,
  `idservico` int(11) NOT NULL,
  `imagem_path` varchar(45) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  `imagem_capa` tinyint(1) DEFAULT '0',
  `descricao` text,
  PRIMARY KEY (`idgaleria`),
  KEY `fk_servicos_galeria1` (`idservico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `servicos_metas` (
  `idmeta` int(11) NOT NULL AUTO_INCREMENT,
  `idservico` int(11) NOT NULL,
  `palavra_chave` text,
  `descricao_meta` text,
  PRIMARY KEY (`idmeta`),
  KEY `fk_servicos_metas1` (`idservico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `subcategorias_servicos` (
  `idsubcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `nome_subcategoria_servico` varchar(150) NOT NULL,
  PRIMARY KEY (`idsubcategoria`),
  KEY `fk_subcategoria_categorias1` (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


ALTER TABLE `servicos_categorias_subcategorias`
  ADD CONSTRAINT `fk_servicos_servcatsub1` FOREIGN KEY (`idservico`) REFERENCES `servicos` (`idservico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_categoria_servcatsub1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_servicos` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_subcategorias_servcatsub1` FOREIGN KEY (`idsubcategoria`) REFERENCES `subcategorias_servicos` (`idsubcategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `servicos_documentos`
  ADD CONSTRAINT `fk_servicos_documentos1` FOREIGN KEY (`idservico`) REFERENCES `servicos` (`idservico`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `servicos_galeria`
  ADD CONSTRAINT `fk_servicos_galeria1` FOREIGN KEY (`idservico`) REFERENCES `servicos` (`idservico`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `servicos_metas`
  ADD CONSTRAINT `fk_servicos_metas1` FOREIGN KEY (`idservico`) REFERENCES `servicos` (`idservico`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `subcategorias_servicos`
  ADD CONSTRAINT `fk_subcategoria_categorias1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_servicos` (`idcategoria`) ON DELETE NO ACTION ON UPDATE CASCADE;