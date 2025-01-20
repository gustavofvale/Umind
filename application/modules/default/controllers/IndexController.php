<?php

/**
*
*/
class IndexController extends Zend_Controller_Action {
	/**
	 *
	 */
	public function init() {
	/* Initialize action controller here */
	}

	/**
	 *
	 */
	public function indexAction() {
	    $messages = new Zend_Session_Namespace("messages");
	    $apps = new Zend_Session_Namespace("log");
	    
	    // Verifica se já foi feito o login
	    if ($apps->logado != TRUE) {
	        // Redireciona
	        $messages->error = "You are not logged in! Please login.";
	        $this->_redirect("/index/login");
	        
	    }else{
	        $model_usuarios = new Admin_Model_Usuarios();
	        $select_user = $model_usuarios->select()
	        ->where("idusuario = $apps->id");
	        $user = $model_usuarios->fetchRow($select_user);
	        $this->view->user = $model_usuarios->fetchRow($select_user);
	        
	    }
	    
	    $model_j = new Admin_Model_Jornadas();
	    $select = $model_j->select()
	       ->where("idusuario = $apps->id")
	       ->order("data_cadastro DESC");
	    $lista = $model_j->fetchAll($select);
	    $this->view->jornadas = $lista;
	    $this->view->cont = count($lista);
	    
	    if ($this->_request->isPost()) {
	        $idmodulo = $this->_request->getParam("idmodulo");
	        $titulo = $this->_request->getParam("titulo");
	        $tema = $this->_request->getParam("tema");
	        $milestone = $this->_request->getParam("milestone");
	        $prompt = $this->_request->getParam("prompt");
	        $pergunta = $this->_request->getParam("pergunta");
	        
	        $tipo = $this->_request->getParam("tipo");
	        $link = $this->_request->getParam("link");

	        
	        $data = array(
	            'idusuario' => $apps->id,
	            'idmodulo' => $idmodulo,
	            'titulo' => $titulo,
	            'tema' => $tema,
	            'milestone' => $milestone,
	            'prompt' => $prompt,
	            'pergunta' => $pergunta,
	            'data_cadastro' => date("Y-m-d H:i:s")
	        );
	        $idjornada = $model_j->insert($data);
	        
	        $link = array(
	          'idjornada' => $idjornada,
	            'tipo' => $tipo,
	            'link' => $link
	        );
	        $model_l = new Admin_Model_Links();
	        $model_l->insert($link);
	        
	        $this->_redirect("/");
	    }
	    
	}
	
	/**
	 *
	 */
	public function loginAction() {
	    $messages = new Zend_Session_Namespace("messages");
	    $apps = new Zend_Session_Namespace("log");
	    
	    if ($this->_request->isPost()) {
	        $email = $this->_request->getParam("email");
	        $senha = $this->_request->getParam("senha");
	        
	        // Login como Pessoa Juridica
	        // Model de Pessoa Juridica
	        $model = new Admin_Model_Usuarios();
	        
	        // Consulta se usuario(email) existe na base
	        $resul = $model->fetchRow("email = '$email'");
	        
	        if(count($resul)){
	            // Cria o MD% da senha
	            $hash = md5($senha);
	            
	            // Verifica se as senham conferem
	            if($resul->senha == $hash){
	                // Crio a sessÃƒÂ£o
	                $apps->logado = TRUE;
	                // Atribuo o ID da pessoa logada a sessÃƒÂ£o
	                $apps->id = $resul->idusuario;
	                // Redireciona
	                $messages->success = "Login successfully!";
	                
	                $this->_redirect("/");
	                
	            }else{
	                $messages->error = "Invalid username / password! :(";
	                $this->_redirect($_SERVER['HTTP_REFERER']);
	            }
	        }else{
	            $messages->error = "Invalid user";
	            $this->_redirect($_SERVER['HTTP_REFERER']);
	        }
	        // Redireciona p/ pagina anterior
	        $this->_redirect($_SERVER['HTTP_REFERER']);
	    }
	}

	/**
	 * Cria os thumbs
 	 * 
	 * @name thumbAction
	 */
	public function thumbAction() {
		// Desabilita o layout
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender(TRUE);

		// Busca os parametros
		$file = $this->_request->getParam("imagem", "");
		$type = $this->_request->getParam("tipo", "");
		$width = $this->_request->getParam("largura", "");
		$height = $this->_request->getParam("altura", "");
		$crop = $this->_request->getParam("crop", 1);

		// Monta o caminho do arquivo
		$file = APPLICATION_PATH . "/../common/uploads/" . $type . "/" . $file;

		// Cria o objeto canvas
		$canvas = new Deserto_Image_Canvas($file);

		// Verifica se foi passada somente a largura
		if(($width != "") && ($height == "")) {
			$canvas->redimensiona($width);
		}
		// Verifica se foi passada somente a altura
		elseif($width == "" && $height != "") {
			$canvas->redimensiona('',$height);
		}
		// Verifica se foram passadas as duas dimensoes
		elseif($width != "" && $height != "") {
			if($crop == 0) {
				$canvas->redimensiona($width, $height);
			}
			elseif($crop == 1) {
				$canvas->redimensiona($width, $height, "crop");
			}
			elseif($crop == 2) {
				$canvas->hexa($cor);
				$canvas->redimensiona($width, $height, "preenchimento");
			}
		}
		else {
			$canvas->redimensiona($thumbs->largura, $thumbs->altura, "preenchimento");
		}

		// Mostra a imagem
		$canvas->grava("", 75);
	}
}

