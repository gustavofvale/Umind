<?php
require_once("Zend/Markup.php");

/**
 * Auxiliar para trazer o menu de navegação
 * Auxiliar da Camada de Visualização
 * @author Gustavo Vale
 */
class Zend_View_Helper_Menuitem extends Zend_View_Helper_Abstract {
	
	protected static $_menuitem = null;
	
    /**
     * Método Principal
     * @param string $value Valor para Formatação
     * @param string $format Formato de Saída
     * @return string Valor Formatado
     */
    public function menuitem($idcategoria){
    	$session = new Zend_Session_Namespace("login");
    	$perfil = $session->logged_usuario['idperfil'];
    	$model = new Admin_Model_Menusitens();
    	$select = $model->select()
    		->where("idcategoria = $idcategoria and idperfil <= $perfil")
			->order("iditem ASC");
		$lista = $model->fetchAll($select);
		return $lista;
    	
    }
}