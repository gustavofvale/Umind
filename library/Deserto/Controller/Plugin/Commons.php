<?php

/**
 * Cria o plugin do commons
 *
 * @name Deserto_Controller_Plugin_Commons
 */
class Deserto_Controller_Plugin_Commons extends Zend_Controller_Plugin_Abstract {
	/**
	 * Método da classe
	 *
	 * @name includejs
	 */
	public function preDispatch (Zend_Controller_Request_Abstract $request) {
		// Busca o view renderer
		$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper("viewRenderer");
		$viewRenderer->initView();
		$view = $viewRenderer->view;

		// Busca o basepath
		$options = Zend_Registry::get("config");
		$basePath = $options->deserto->config->basepath;

		// Busca os arquivos css do commons
		$config = new Zend_Config_Ini(APPLICATION_PATH . "/configs/commons.ini", "css");

		// Percorre os arquivos
		$module = (string)$request->getModuleName();
		foreach($config->$module as $file) {
			if(strpos($file, "http://") === FALSE) {
				// Troca a palavra chave do modulo
				$file = str_replace(":module", $module, $file);

				// Adiciona o arquivo
				$view->headLink()->appendStylesheet($basePath . "/" . $file);
			}
			else {
				// Adiciona o arquivo
				$view->headLink()->appendStylesheet($file);
			}
		}

		// Busca os arquivos js do commons
		$config = new Zend_Config_Ini(APPLICATION_PATH . "/configs/commons.ini", "js");

		// Percorre os arquivos js
		$module = (string)$request->getModuleName();
		foreach($config->$module as $file) {
			if(strpos($file, "http://") === FALSE) {
				// Troca a palavra chave do modulo
				$file = str_replace(":module", $module, $file);

				// Adiciona o arquivo
				$view->headScript()->appendFile($basePath . "/" . $file);
			}
			else {
				// Adiciona o arquivo
				$view->headScript()->appendFile($file);
			}
		}

		// Busca os titulos do commons
		$config = new Zend_Config_Ini(APPLICATION_PATH . "/configs/commons.ini", "title");

		// Percorre os arquivos js
		$module = (string)$request->getModuleName();
		$view->headTitle($config->$module)->setSeparator(" – ");
	}
}
