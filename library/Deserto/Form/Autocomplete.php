<?php

/**
 * Elemento autocomplete do formulario
 *
 * @name Deserto_Form_Autocomplete
 * @package Deserto
 * @subpackage Form
 */
class Deserto_Form_Autocomplete extends ZendX_JQuery_Form_Element_AutoComplete {
	/**
	 * Configura o elemento
	 * 
	 * @name init
	 */
	public function init() {
		parent::setAttrib("field-type", "integer");
		parent::setAttrib("class", "autocomplete");
	}
}
