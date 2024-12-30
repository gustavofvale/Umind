<?php

/**
 * Cria o helper do translate
 * 
 * @name Deserto_View_Helper_Translate
 */
class Deserto_View_Helper_Translate extends Zend_View_Helper_Abstract {
	/**
	 * Método da classe
	 * 
	 * @param string $string Texto para converter para translate
	 */
	public function translate($string) {
		// Assina o tradutor
		$translate = Zend_Registry::get("translate");
		
		// Traduz
		$string = $translate->translate($string);
		
		// Retorna a string formatada
		return $string;
	}
}