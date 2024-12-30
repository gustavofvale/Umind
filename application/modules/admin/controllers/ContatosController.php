<?php

/**
 * Controlador dos Contatos
 *
 * @name Admin_ContatosController
 */
class Admin_ContatosController extends Deserto_Controller_Action {
	/**
	 * Armazena o model padrão da tela
	 *
	 * @access protected
	 * @name $_model
	 * @var Admin_Model_Contatos
	 */
	protected $_model = NULL;

	/**
	 * Inicializa o controller
	 * 
	 * @name init
	 */
	public function init() {
		// Inicializa o model da tela
		$this->_model = new Admin_Model_Contatos();
		
		// Continua o carregamento do controlador
		parent::init();
	}
}
