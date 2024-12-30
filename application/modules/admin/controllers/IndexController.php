<?php

/**
 *
 */
class Admin_IndexController extends Deserto_Controller_Action {
	/**
	 *
	 */
	public function init() {
	}

	/**
	 *
	 */
	public function indexAction() {
		
	}
	
	/**
	 * 
	 */
	public function profileAction(){
		$messages = new Zend_Session_Namespace("messages");
		
		$session = new Zend_Session_Namespace("login");
		$idusuario = $session->logged_usuario['idusuario'];
		
		$model_usuario = new Admin_Model_Usuarios();
		$select_usuario = $model_usuario->select()->where("idusuario = $idusuario");
		$lista_usuario = $model_usuario->fetchAll($select_usuario);
		$this->view->usuario = $lista_usuario;
		
		if($this->_request->isPost()) {
			$nome = $this->_request->getParam("nome");
			$email = $this->_request->getParam("email");
			$senha = $this->_request->getParam("senha");
			$conf_senha = $this->_request->getParam("conf_senha");

			if($senha != $conf_senha){
				$messages->error = "As senhas não conferem!!";
				$this->_redirect($_SERVER['HTTP_REFERER']);
			}
			
			if(!$senha){
				$senha = $lista_usuario[0]['senha'];
			}else{
				$senha = md5($senha);
			}
						
			if($_FILES['imagem_path']['name'] != ""){	
				// Recupero o nome do arquivo
				$arquivo = $_FILES['imagem_path']['name'];
				// Gravo qual a extensÃ£o do arquivo enviado
				$ext = substr($arquivo,(strlen($arquivo)-4),strlen($arquivo));
				// Troco o nome da imagem para a criptografia md5				
				$imagem_path = md5(time() . rand(1000, 9999)) . "" . $ext;
				// Move o arquivo para o diretÃ³rio
				move_uploaded_file($_FILES['imagem_path']['tmp_name'], APPLICATION_PATH . "/../common/uploads/usuarios/" . $imagem_path);
			}else{
				$imagem_path = $lista_usuario[0]['imagem_path'];
			}
			
			$data = array(
				'nome' => $nome,
				'email' => $email,
				'senha' => $senha,
				'imagem_path' => $imagem_path
			);
			
			$model_usuario->update($data, "idusuario = $idusuario");
			
			$messages->success = "Atualizado com sucesso";
			$this->_helper->redirector(NULL, NULL, "admin");
		}	
	}	
	
	/**
	 * Método que busca os auto completes
	 * 
	 * @name autocompleteAction
	 */
	public function autocompleteAction() {
		// Busca o termo passado
		$filter = $this->_request->getParam("term", "");
		
		// Inicializa os dados de retorno
		$data = array();
		
		// Busca o auto-complete passado
		$autocomplete = $this->_request->getParam("ac");

		// Verifica se existe tabela do autocomplete
		$ac_table = $this->_request->getParam("ac_table", NULL);
		if($ac_table !== NULL) {
			$ac_table = "U_" . $ac_table;
		}
		
		// Instancia o model
		$model = new $autocomplete($ac_table);
		
		// Verifica se existe query de autocomplete
		$ac_name = $this->_request->getParam("ac_name", "default");
		
		// Busca o select
		$select = $model->getQueryAutoComplete($ac_name);
		
		// Busca o campo da chave primaria
		$primary_field = $model->getPrimaryField();	
		$description_field = $model->getDescription();

		// Verifica se é um espaço, para mostrar tudo
		if($filter == " ") {
			$filter = "";
		}
		
		// Da o bind nos parametros like
		$select->where($description_field . " LIKE lower(?)", "%" . strtolower($filter) . "%");
		
		// Ordena
		$select->order($description_field);
		
		// Limita
		$select->limit(30);
		
		// Busca a query do auto-complete
		$records = $model->fetchAll($select);

		// Percorre os registros
		foreach($records as $row) {
			// Busca os valores iniciais
			$label = ($row[$description_field]);
			$value = $row[$primary_field[1]];
			$line = array('label' => $label, 'identifier' => $value);
			
			// Percorre as colunas para os valores adicionais
			foreach($row as $column_name => $column_value) {
				// Só adicionar caso não for chave primaria ou descrição da tabela
				if(($column_name != $description_field) && ($column_name != $primary_field[1])) {
					$line[$column_name] = $column_value;
				}
			}
			
			// Monta o vetor
			$data[] = $line;
		}
		
		// Desabilita o layout e da o parse para json
		$this->_helper->json($data);
	}
}

