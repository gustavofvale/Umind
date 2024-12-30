<?php

/**
 * Modelo da tabela de Modulos
 *
 * @name Admin_Model_Modulos
 * @see Zend_Db_Table_Abstract
 */
class Admin_Model_Modulos extends Deserto_Db_Table {
	/**
	 * Armazena o nome da tabela
	 *
	 * @access protected
	 * @name $_name
	 * @var string
	 */
	protected $_name = "modulos";

	/**
	 * Armazena o nome do campo da tabela primaria
	 *
	 * @access protected
	 * @name $_primary
	 * @var string
	 */
	protected $_primary = "idmodulo";
	
	/**
	 * Inicializa o model
	 * 
	 * @name init
	 */
	public function init() {
		// Adiciona os campos ao model
		$this->setCampo("modulo", "Modulo");
		
		// Seta o campo de descrição da tabela
		$this->setDescription("modulo");
		
		
		// Continua o carregamento do model
		parent::init();
	}
}

