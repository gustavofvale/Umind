<?php

/**
 * Modelo da tabela de Contatos
 *
 * @name Admin_Model_Contatos
 * @see Zend_Db_Table_Abstract
 */
class Admin_Model_Contatos extends Deserto_Db_Table {
	/**
	 * Armazena o nome da tabela
	 *
	 * @access protected
	 * @name $_name
	 * @var string
	 */
	protected $_name = "contatos";

	/**
	 * Armazena o nome do campo da tabela primaria
	 *
	 * @access protected
	 * @name $_primary
	 * @var string
	 */
	protected $_primary = "idcontato";
	
	/**
	 * Inicializa o model
	 * 
	 * @name init
	 */
	public function init() {
		// Adiciona os campos ao model
		$this->setCampo("nome", "Nome");
		$this->setCampo("email", "Email");
		$this->setCampo("telefone", "Telefone");
		$this->setCampo("celular", "Celular");
		$this->setCampo("cidade", "Cidade");
		$this->setCampo("estado", "Estado");
		$this->setCampo("pais", "País");
		$this->setCampo("empresa", "Empresa");
		$this->setCampo("assunto", "Assunto");
		$this->setCampo("mensagem", "Mensagem");
		$this->setCampo("data_envio", "Data de envio");
		
		// Seta o campo de descrição da tabela
		$this->setDescription("nome");
		
		$this->setVisibility("mensagem", TRUE, TRUE, FALSE, FALSE);		
		
		// Continua o carregamento do model
		parent::init();
	}
}

