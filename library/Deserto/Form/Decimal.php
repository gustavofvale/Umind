<?php

/**
 * Elemento numérico decimal do formulario
 *
 * @name Deserto_Form_Decimalr
 * @package Deserto
 * @subpackage Form
 */
class Deserto_Form_Decimal extends Zend_Form_Element_Text {
	/**
	 * Configura o elemento
	 * 
	 * @name init
	 */
	public function init() {
		parent::setAttrib("alt", "decimal");
		parent::setAttrib("class", "decimal");
		parent::setAttrib("field-type", "decimal");
	}
}
