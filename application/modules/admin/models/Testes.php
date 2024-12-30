<?php

/**
 * Modelo da tabela de testes
 *
 * @name Admin_Model_Testes
 * @see Zend_Db_Table_Abstract
 */
class Admin_Model_Testes extends Deserto_Db_Table {
	/**
	 * Armazena o nome da tabela
	 *
	 * @access protected
	 * @name $_name
	 * @var string
	 */
	protected $_name = "testes";

	/**
	 * Armazena o nome do campo da tabela primaria
	 *
	 * @access protected
	 * @name $_primary
	 * @var string
	 */
	protected $_primary = "idteste";
	
	/**
	 * Inicializa o model
	 * 
	 * @name init
	 */
	public function init() {
		// Adiciona os campos ao model
		$this->setCampo("data", "Data");
		$this->setCampo("path", "Arquivo");
		$this->setCampo("texto", "Texto");
		
		// Seta o campo de descrição da tabela
		$this->setDescription("data");
		
		// Seta os modificadores
		$this->setModifier("path", array(
				'type' => "file",
				'preview' => "common/uploads/teste",
				'destination' => APPLICATION_PATH . "/../common/uploads/teste"
		));
		
		// Continua o carregamento do model
		parent::init();
	}
}

