<?php

/**
 * Elemento numérico do formulario
 *
 * @name Deserto_Form_Integer
 * @package Deserto
 * @subpackage Form
 */
class Deserto_Form_Integer extends Zend_Form_Element_Text {
	/**
	 * Configura o elemento
	 * 
	 * @name init
	 */
	public function init() {
		parent::setAttrib("alt", "integer");
		parent::setAttrib("class", "integer");
		parent::setAttrib("field-type", "integer");
	}
}
