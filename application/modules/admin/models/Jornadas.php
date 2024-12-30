<?php

/**
 * Modelo da tabela de Jornadas
 *
 * @name Admin_Model_Jornadas
 * @see Zend_Db_Table_Abstract
 */
class Admin_Model_Jornadas extends Deserto_Db_Table {
	/**
	 * Armazena o nome da tabela
	 *
	 * @access protected
	 * @name $_name
	 * @var string
	 */
	protected $_name = "jornadas";

	/**
	 * Armazena o nome do campo da tabela primaria
	 *
	 * @access protected
	 * @name $_primary
	 * @var string
	 */
	protected $_primary = "idjornada";
	
	/**
	 * Inicializa o model
	 * 
	 * @name init
	 */
	public function init() {
		// Adiciona os campos ao model
		$this->setCampo("titulo", "Título");
		
		// Seta o campo de descrição da tabela
		$this->setDescription("titulo");
		
		// Continua o carregamento do model
		parent::init();
	}
}

