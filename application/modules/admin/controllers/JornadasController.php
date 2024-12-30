<?php

/**
 * Controlador dos Jornadas
 *
 * @name Admin_JornadasController
 */
class Admin_JornadasController extends Deserto_Controller_Action {
	/**
	 * Armazena o model padrão da tela
	 *
	 * @access protected
	 * @name $_model
	 * @var Admin_Model_Jornadas
	 */
	protected $_model = NULL;

	/**
	 * Inicializa o controller
	 * 
	 * @name init
	 */
	public function init() {
		// Inicializa o model da tela
	    $this->_model = new Admin_Model_Jornadas();
		
		// Continua o carregamento do controlador
		parent::init();
	}
}
