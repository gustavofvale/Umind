<?php

/**
 * Controlador dos Links
 *
 * @name Admin_LinksController
 */
class Admin_LinksController extends Deserto_Controller_Action {
	/**
	 * Armazena o model padrão da tela
	 *
	 * @access protected
	 * @name $_model
	 * @var Admin_Model_Links
	 */
	protected $_model = NULL;

	/**
	 * Inicializa o controller
	 * 
	 * @name init
	 */
	public function init() {
		// Inicializa o model da tela
	    $this->_model = new Admin_Model_Links();
		
		// Continua o carregamento do controlador
		parent::init();
	}
}
