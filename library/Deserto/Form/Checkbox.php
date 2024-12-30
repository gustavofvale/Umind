<?php

/**
 * Elemento de checagem do formulario
 *
 * @name Deserto_Form_Checkbox
 * @package Deserto
 * @subpackage Form
 */
class Deserto_Form_Checkbox extends Zend_Form_Element_Checkbox {
	/**
	 * Configura o elemento
	 * 
	 * @name init
	 */
	public function init() {
		parent::setAttrib("field-type", "checkbox");
	}
}
