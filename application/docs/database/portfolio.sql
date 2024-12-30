CREATE TABLE IF NOT EXISTS `categorias_portfolios` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria_portfolio` varchar(150) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `portfolios` (
  `idportfolio` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `data_hora` datetime DEFAULT NULL,  
  `cliente` varchar(150) DEFAULT NULL,
  `logo_cliente` varchar(45) DEFAULT NULL,
  `link_cliente` varchar(150) DEFAULT NULL,  
  `descricao_geral` text,
  `video` varchar(150) DEFAULT NULL,
  `destaque` tinyint(1) DEFAULT '0',
  `habilitado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`idportfolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `portfolios_categorias_subcategorias` (
  `idportfolio_categoria_subcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idportfolio` int(11) NOT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `idsubcategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idportfolio_categoria_subcategoria`),
  KEY `fk_portfolios_portcatsub1` (`idportfolio`),
  KEY `fk_categoria_portcatsub1` (`idcategoria`),
  KEY `fk_subcategorias_portcatsub1` (`idsubcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `portfolios_documentos` (
  `iddocumento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_documento` varchar(150) NOT NULL,
  `arquivo_path` varchar(45) DEFAULT NULL,
  `idportfolio` int(11) NOT NULL,
  PRIMARY KEY (`iddocumento`),
  KEY `fk_portfolios_documentos1` (`idportfolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `portfolios_galeria` (
  `idgaleria` int(11) NOT NULL AUTO_INCREMENT,
  `idportfolio` int(11) NOT NULL,
  `imagem_path` varchar(45) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  `imagem_capa` tinyint(1) DEFAULT '0',
  `descricao` text,
  PRIMARY KEY (`idgaleria`),
  KEY `fk_portfolios_galeria1` (`idportfolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `portfolios_metas` (
  `idmeta` int(11) NOT NULL AUTO_INCREMENT,
  `idportfolio` int(11) NOT NULL,
  `palavra_chave` text,
  `descricao_meta` text,
  PRIMARY KEY (`idmeta`),
  KEY `fk_portfolios_metas1` (`idportfolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `subcategorias_portfolios` (
  `idsubcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `nome_subcategoria_portfolio` varchar(150) NOT NULL,
  PRIMARY KEY (`idsubcategoria`),
  KEY `fk_subcategoria_categorias1` (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


ALTER TABLE `portfolios_categorias_subcategorias`
  ADD CONSTRAINT `fk_portfolios_portcatsub1` FOREIGN KEY (`idportfolio`) REFERENCES `portfolios` (`idportfolio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_categoria_portcatsub1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_portfolios` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_subcategorias_portcatsub1` FOREIGN KEY (`idsubcategoria`) REFERENCES `subcategorias_portfolios` (`idsubcategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `portfolios_documentos`
  ADD CONSTRAINT `fk_portfolios_documentos1` FOREIGN KEY (`idportfolio`) REFERENCES `portfolios` (`idportfolio`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `portfolios_galeria`
  ADD CONSTRAINT `fk_portfolios_galeria1` FOREIGN KEY (`idportfolio`) REFERENCES `portfolios` (`idportfolio`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `portfolios_metas`
  ADD CONSTRAINT `fk_portfolios_metas1` FOREIGN KEY (`idportfolio`) REFERENCES `portfolios` (`idportfolio`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `subcategorias_portfolios`
  ADD CONSTRAINT `fk_subcategoria_categorias1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_portfolios` (`idcategoria`) ON DELETE NO ACTION ON UPDATE CASCADE;