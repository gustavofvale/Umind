<?php

/**
 * Cria o plugin da verificação do usuario
 *
 * @name Deserto_Controller_Plugin_Userverify
 */
class Deserto_Controller_Plugin_Userverify extends Zend_Controller_Plugin_Abstract {
	/**
	 * Método da classe
	 * 
	 * @name includejs
	 */
	public function preDispatch(Zend_Controller_Request_Abstract $request) {
		// Busca o view
		$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper("viewRenderer");
		$viewRenderer->initView();
		$view = $viewRenderer->view;
		
		// Verifica se é o admin
		if($request->getModuleName() == "admin") {
			// Busca a sessão
			$session = new Zend_Session_Namespace("login");
		
			$auth = Zend_Auth::getInstance();
			if($auth->hasIdentity()) {
				// Assina as variaveis
				$view->logged = TRUE;
				$view->logged_usuario = $session->logged_usuario;
			}
			else {
				// Busca o basepath
				$options = Zend_Registry::get("config");
				$basePath = $options->deserto->config->basepath;
				
				// Adiciona o arquivo
				$view->headLink()->setStylesheet($basePath . "/common/admin/css/login.css");
					
				// Verifica se o modulo acessado é o de login
				if(($request->getModuleName() != "usuarios") && ($request->getActionName() != "login")) {
					$this->getResponse()->setRedirect($basePath . "/admin/usuarios/login")->sendResponse();
				}
			}
		}	
	}

}
