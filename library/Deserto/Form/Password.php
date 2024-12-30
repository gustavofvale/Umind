<?php

/**
 * Elemento password do formulario
 *
 * @name Deserto_Form_Password
 * @package Deserto
 * @subpackage Form
 */
class Deserto_Form_Password extends Zend_Form_Element_Password {
	/**
	 * Configura o elemento
	 * 
	 * @name init
	 */
	public function init() {
		parent::setAttrib("field-type", "password");
		parent::setAttrib("class", "string password");
	}
}
