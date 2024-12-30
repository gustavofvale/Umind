<?php

/**
 * Controlador dos banners
 *
 * @name Admin_bannersController
 */
class Admin_BannersController extends Deserto_Controller_Action {
	/**
	 * Armazena o model padrão da tela
	 *
	 * @access protected
	 * @name $_model
	 * @var Admin_Model_Banners
	 */
	protected $_model = NULL;

	/**
	 * Inicializa o controller
	 * 
	 * @name init
	 */
	public function init() {
		// Inicializa o model da tela
		$this->_model = new Admin_Model_Banners();
		
		// Continua o carregamento do controlador
		parent::init();
	}
}
