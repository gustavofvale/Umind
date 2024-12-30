<?php

/**
 * Modelo da tabela de Links
 *
 * @name Admin_Model_Links
 * @see Zend_Db_Table_Abstract
 */
class Admin_Model_Links extends Deserto_Db_Table {
	/**
	 * Armazena o nome da tabela
	 *
	 * @access protected
	 * @name $_name
	 * @var string
	 */
	protected $_name = "links";

	/**
	 * Armazena o nome do campo da tabela primaria
	 *
	 * @access protected
	 * @name $_primary
	 * @var string
	 */
	protected $_primary = "idlink";
	
	/**
	 * Inicializa o model
	 * 
	 * @name init
	 */
	public function init() {
		// Adiciona os campos ao model
		$this->setCampo("link", "Link");
		
		// Seta o campo de descrição da tabela
		$this->setDescription("link");
		
		
		// Continua o carregamento do model
		parent::init();
	}
}

