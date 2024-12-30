<?php

/**
 * Modelo da tabela de Banners
 *
 * @name Admin_Model_Banners
 * @see Zend_Db_Table_Abstract
 */
class Admin_Model_Banners extends Deserto_Db_Table {
	/**
	 * Armazena o nome da tabela
	 *
	 * @access protected
	 * @name $_name
	 * @var string
	 */
	protected $_name = "banners";

	/**
	 * Armazena o nome do campo da tabela primaria
	 *
	 * @access protected
	 * @name $_primary
	 * @var string
	 */
	protected $_primary = "idbanner";
	
	/**
	 * Inicializa o model
	 * 
	 * @name init
	 */
	public function init() {
		// Adiciona os campos ao model
		$this->setCampo("titulo", "Título");
		$this->setCampo("imagem_path", "Imagem");
		$this->setCampo("link", "Link");
		$this->setCampo("peso", "Peso");
		
		
		// Seta o campo de descrição da tabela
		$this->setDescription("titulo");
		
		// Seta os modificadores
		$this->setModifier("imagem_path", array(
				'type' => "file",
				'preview' => "common/uploads/banners",
				'destination' => APPLICATION_PATH . "/../common/uploads/banners"
		));
		
		$this->setVisibility("imagem_path", TRUE, TRUE, FALSE, FALSE);
		
		// Continua o carregamento do model
		parent::init();
	}
}

