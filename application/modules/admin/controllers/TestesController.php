<?php

/**
 * Controlador dos testes
 *
 * @name Admin_TestesController
 */
class Admin_TestesController extends Deserto_Controller_Action {
	/**
	 * Armazena o model padrão da tela
	 *
	 * @access protected
	 * @name $_model
	 * @var Admin_Model_Testes
	 */
	protected $_model = NULL;

	/**
	 * Inicializa o controller
	 * 
	 * @name init
	 */
	public function init() {
		// Inicializa o model da tela
		$this->_model = new Admin_Model_Testes();
		
		// Continua o carregamento do controlador
		parent::init();
	}
}
