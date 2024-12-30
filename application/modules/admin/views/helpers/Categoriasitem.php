<?php
require_once("Zend/Markup.php");

/**
 * Auxiliar para trazer o menu de navegação
 * Auxiliar da Camada de Visualização
 * @author Gustavo Vale
 */
class Zend_View_Helper_Categoriasitem extends Zend_View_Helper_Abstract {
	
	protected static $_categoriasitem = null;
	
    /**
     * Método Principal
     * @param string $value Valor para Formatação
     * @param string $format Formato de Saída
     * @return string Valor Formatado
     */
    public function categoriasitem(){
    	
    	$model_cat_menu = new Admin_Model_Menuscategorias();
		$select_cat_menu = $model_cat_menu->select()
			->order("idcategoria ASC");
		$lista_cat_menu = $model_cat_menu->fetchAll($select_cat_menu);
		return $lista_cat_menu;
    	
    }
}