CREATE TABLE IF NOT EXISTS `categorias_noticias` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria_noticia` varchar(150) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `noticias` (
  `idnoticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `data_hora` datetime DEFAULT NULL,
  `autor` varchar(150) DEFAULT NULL,
  `fonte` varchar(150) DEFAULT NULL,
  `descricao_geral` text DEFAULT NULL,
  `video` varchar(150) DEFAULT NULL,
  `destaque` tinyint(1) DEFAULT '0',
  `habilitado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`idnoticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `noticias_categorias_subcategorias` (
  `idnoticia_categoria_subcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idnoticia` int(11) NOT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `idsubcategoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`idnoticia_categoria_subcategoria`),
  KEY `fk_noticias_notcatsub1` (`idnoticia`),
  KEY `fk_categoria_notcatsub1` (`idcategoria`),
  KEY `fk_subcategorias_notcatsub1` (`idsubcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `noticias_galeria` (
  `idgaleria` int(11) NOT NULL AUTO_INCREMENT,
  `idnoticia` int(11) NOT NULL,
  `imagem_path` varchar(45) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  `imagem_capa` tinyint(1) DEFAULT '0',
  `descricao` text,
  PRIMARY KEY (`idgaleria`),
  KEY `fk_noticias_galeria1` (`idnoticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `noticias_metas` (
  `idmeta` int(11) NOT NULL AUTO_INCREMENT,
  `idnoticia` int(11) NOT NULL,
  `palavra_chave` text,
  `descricao_meta` text,
  PRIMARY KEY (`idmeta`),
  KEY `fk_noticias_metas1` (`idnoticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `subcategorias_noticias` (
  `idsubcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `idcategoria` int(11) NOT NULL,
  `nome_subcategoria_noticia` varchar(150) NOT NULL,
  PRIMARY KEY (`idsubcategoria`),
  KEY `fk_subcategoria_categorias1` (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;


ALTER TABLE `noticias_categorias_subcategorias`
  ADD CONSTRAINT `fk_noticias_notcatsub1` FOREIGN KEY (`idnoticia`) REFERENCES `noticias` (`idnoticia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_categoria_notcatsub1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_noticias` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_subcategorias_notcatsub1` FOREIGN KEY (`idsubcategoria`) REFERENCES `subcategorias_noticias` (`idsubcategoria`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `noticias_galeria`
  ADD CONSTRAINT `fk_noticias_galeria1` FOREIGN KEY (`idnoticia`) REFERENCES `noticias` (`idnoticia`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `noticias_metas`
  ADD CONSTRAINT `fk_noticias_metas1` FOREIGN KEY (`idnoticia`) REFERENCES `noticias` (`idnoticia`) ON DELETE CASCADE ON UPDATE CASCADE;

  
ALTER TABLE `subcategorias_noticias`
  ADD CONSTRAINT `fk_subcategoria_categorias1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias_noticias` (`idcategoria`) ON DELETE NO ACTION ON UPDATE CASCADE;
