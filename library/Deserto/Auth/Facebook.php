<?php

// Inclui a classe do smarty
require_once("Deserto/Library/FbSDK/facebook.php");

/**
 * Método que faz autenticações no facebook
 *
 * @name Avadora_Auth_Facebook
 * @see Facebook
 */
class Deserto_Auth_Facebook extends Facebook {
	/**
	 * Construtor da classe
	 * 
	 * @name __construct
	 */
	public function __construct($config) {
		parent::__construct($config);
	}
}
