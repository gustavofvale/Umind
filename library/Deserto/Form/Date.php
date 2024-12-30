<?php

/**
 * Elemento date do formulario
 *
 * @name Deserto_Form_Date
 * @package Deserto
 * @subpackage Form
 */
class Deserto_Form_Date extends Zend_Form_Element_Text {
	/**
	 * Configura o elemento
	 * 
	 * @name init
	 */
	public function init() {
		parent::setAttrib("field-type", "date");
		parent::setAttrib("class", "date-picker");
	}
}
