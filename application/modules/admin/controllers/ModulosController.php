<?php

/**
 * Controlador dos Modulos
 *
 * @name Admin_ModulosController
 */
class Admin_ModulosController extends Deserto_Controller_Action {
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
	    $this->_model = new Admin_Model_Modulos();
		
		// Continua o carregamento do controlador
		parent::init();
	}
}
