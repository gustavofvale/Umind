<?php

/**
 * Elemento file do formulario
 *
 * @name Deserto_Form_File
 * @package Deserto
 * @subpackage Form
 */
class Deserto_Form_File extends Zend_Form_Element_File {
	/**
	 * Configura o elemento
	 * 
	 * @name init
	 */
	public function init() {
		parent::setAttrib("field-type", "file");
		parent::setAttrib("class", "file");
	}
}
