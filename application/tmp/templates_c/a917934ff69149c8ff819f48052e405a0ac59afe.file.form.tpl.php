<?php /* Smarty version Smarty-3.0.7, created on 2015-01-08 11:25:23
         compiled from "c:\wamp\www\framework/application/modules/admin/views/servicos/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2677354ae692362a206-17477742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a917934ff69149c8ff819f48052e405a0ac59afe' => 
    array (
      0 => 'c:\\wamp\\www\\framework/application/modules/admin/views/servicos/form.tpl',
      1 => 1417195992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2677354ae692362a206-17477742',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row">
	<div class="col-md-12">
	    <?php if ($_smarty_tpl->getVariable('idservico')->value){?>
	   	<form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/servicos/editar/idservico/<?php echo $_smarty_tpl->getVariable('idservico')->value;?>
" class="form-horizontal form-bordered form-row-stripped"> 
	    <?php }else{ ?>
		<form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/servicos/salvar" class="form-horizontal form-bordered form-row-stripped">	    
	    <?php }?>
	    	<div class="tabbable tabbable-custom boxless">
	    		<ul class="nav nav-tabs">
	            	<li class="active"><a href="#tab_0" data-toggle="tab">Geral</a></li>
	            	<li><a href="#tab_1" data-toggle="tab">Categorias</a></li>
	            	<li><a href="#tab_2" data-toggle="tab">Galeria de imagens</a></li>
	            	<li><a href="#tab_3" data-toggle="tab">Anexos</a></li>
	            	<li><a href="#tab_4" data-toggle="tab">Meta dados</a></li>
	            </ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_0">
						<div class="portlet box grey ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-reorder"></i>Cadastro de serviços
								</div>
								<div class="tools">
									<button type="submit" name="salvar" class="btn blue" style="position:absolute;right:350px;top:57px;padding:8px 20px;">
										<i class="icon-ok"></i> Salvar
									</button>
									<button type="submit" name="continuar" class="btn green" style="position:absolute;right:105px;top:57px;padding:8px 20px;">
										<i class="icon-refresh"></i> Salvar e continuar editando
									</button>
									<a class="btn red" href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/servicos/list" style="position:absolute;right:15px;top:57px;height:initial;line-height:0px;padding:11px 20px;">
										<i class="icon-remove-circle"></i> Sair
									</a>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="form-body">
									<div class="form-group" id="element-codigo">
										<label for="codigo" class="control-label col-md-3 optional">Código</label>
										<div class="col-md-9">
											<input type="text" name="codigo" id="codigo" value="<?php echo $_smarty_tpl->getVariable('servico')->value->codigo;?>
"
												field-type="text" class="varchar string form-control">
										</div>
									</div>
									<div class="form-group" id="element-titulo">
										<label for="titulo" class="control-label col-md-3 required">Título</label>
										<div class="col-md-9">
											<input type="text" name="titulo" id="titulo" value="<?php echo $_smarty_tpl->getVariable('servico')->value->titulo;?>
"
												field-type="text" class="varchar string form-control">
										</div>
									</div>
									<div class="form-group" id="element-subtitulo">
										<label for="subtitulo" class="control-label col-md-3 required">Subtitulo</label>
										<div class="col-md-9">
											<input type="text" name="subtitulo" id="subtitulo" value="<?php echo $_smarty_tpl->getVariable('servico')->value->subtitulo;?>
"
												field-type="text" class="varchar string form-control">
										</div>
									</div>
									<div class="form-group" id="element-descricao_curta">
										<label for="descricao_curta" class="control-label col-md-3 optional">Descrição curta</label>
										<div class="col-md-9">
											<input type="text" name="descricao_curta"
												id="descricao_curta" value="<?php echo $_smarty_tpl->getVariable('servico')->value->descricao_curta;?>
" field-type="text"
												class="varchar string form-control">
										</div>
									</div>
									<div class="form-group" id="element-descricao">
										<label for="descricao_geral" class="control-label col-md-3 optional">Descrição</label>
										<div class="col-md-9">
											<textarea name="descricao_geral" id="textarea"
												field-type="textarea" class="wysihtml5 form-control"
												rows="6" cols="80"><?php echo $_smarty_tpl->getVariable('servico')->value->descricao_geral;?>
</textarea>
										</div>
									</div>
									<div class="form-group" id="element-valor">
										<label for="valor" class="control-label col-md-3 optional">Valor</label>
										<div class="col-md-9">
											<input type="text" name="valor" id="valor" value="<?php echo $_smarty_tpl->getVariable('servico')->value->valor;?>
"
												field-type="text" class="varchar string form-control">
										</div>
									</div>
									<div class="form-group" id="element-video">
										<label for="video" class="control-label col-md-3 optional">Vídeo</label>
										<div class="col-md-9">
											<input type="text" name="video" id="video" value="<?php echo $_smarty_tpl->getVariable('servico')->value->video;?>
"
												field-type="text" class="varchar string form-control">
										</div>
									</div>
									<div class="form-group" id="element-destaque">
										<label for="destaque" class="control-label col-md-3 optional">Destaque</label>
										<div class="col-md-9">
											<?php if ($_smarty_tpl->getVariable('servico')->value->destaque){?>
												<input type="hidden" name="destaque" value="0">
												<input type="checkbox" name="destaque" id="destaque" value="1" checked="checked">
											<?php }else{ ?>
												<input type="hidden" name="destaque" value="0">
												<input type="checkbox" name="destaque" id="destaque" value="1">
											<?php }?>
										</div>
									</div>
									<div class="form-group" id="element-habilitado">
										<label for="habilitado" class="control-label col-md-3 optional">Habilitado</label>
										<div class="col-md-9">
											<?php if ($_smarty_tpl->getVariable('servico')->value->habilitado){?>
												<input type="hidden" name="habilitado" value="0">
												<input type="checkbox" name="habilitado" id="habilitado" value="1" checked="checked">
											<?php }else{ ?>
												<input type="hidden" name="habilitado" value="0">
												<input type="checkbox" name="habilitado" id="habilitado" value="1">
											<?php }?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="tab-pane" id="tab_1">
						<div class="portlet box grey ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-reorder"></i>Cadastro de serviços
								</div>
								<div class="tools">
									<button type="submit" name="salvar" class="btn blue" style="position:absolute;right:350px;top:57px;padding:8px 20px;">
										<i class="icon-ok"></i> Salvar
									</button>
									<button type="submit" name="continuar" class="btn green" style="position:absolute;right:105px;top:57px;padding:8px 20px;">
										<i class="icon-refresh"></i> Salvar e continuar editando
									</button>
									<a class="btn red" href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/servicos/list" style="position:absolute;right:15px;top:57px;height:initial;line-height:0px;padding:11px 20px;">
										<i class="icon-remove-circle"></i> Sair
									</a>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="form-body">
                                    <div class="form-group">
                                    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categorias')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
	                                    	<div class="form-group" id="element-categorias">
												<div class="col-md-12 categorias-pai">		
													<input type="checkbox" name="categoria[]" value="<?php echo $_smarty_tpl->getVariable('item')->value->idcategoria;?>
" <?php if (in_array($_smarty_tpl->getVariable('item')->value->idcategoria,$_smarty_tpl->getVariable('array_categoria')->value)){?>checked="checked"<?php }?>><?php echo $_smarty_tpl->getVariable('item')->value->nome_categoria_servico;?>

												</div>
												<div class="sub-filhos">
													<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('this')->value->subcategoriasservicos($_smarty_tpl->getVariable('item')->value->idcategoria); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
?>
														<div class="form-group" id="element-categorias">
															<div class="col-md-1">
															</div>
															<div class="col-md-11">		
																<input type="checkbox" name="subcategoria[]" class="sub-categoria" value="<?php echo $_smarty_tpl->getVariable('sub')->value->idsubcategoria;?>
" <?php if (in_array($_smarty_tpl->getVariable('sub')->value->idsubcategoria,$_smarty_tpl->getVariable('array_subcategoria')->value)){?>checked="checked"<?php }?>><?php echo $_smarty_tpl->getVariable('sub')->value->nome_subcategoria_servico;?>

															</div>
														</div>
													<?php }} ?>
												</div>
											</div>
										<?php }} ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="tab-pane" id="tab_2">
						<div class="portlet box grey ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-reorder"></i>Cadastro de serviços
								</div>
								<div class="tools">
									<button type="submit" name="salvar" class="btn blue" style="position:absolute;right:350px;top:57px;padding:8px 20px;">
										<i class="icon-ok"></i> Salvar
									</button>
									<button type="submit" name="continuar" class="btn green" style="position:absolute;right:105px;top:57px;padding:8px 20px;">
										<i class="icon-refresh"></i> Salvar e continuar editando
									</button>
									<a class="btn red" href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/servicos/list" style="position:absolute;right:15px;top:57px;height:initial;line-height:0px;padding:11px 20px;">
										<i class="icon-remove-circle"></i> Sair
									</a>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="form-body">
                                    <div class="form-group">
										<div class="form-group">
											<label class="control-label col-md-3">Cadastro de imagens</label>
											<div class="col-md-9">
												<input type="file" name="galeria_imagem[]" id="galeria_imagem" data-acao="<?php echo $_smarty_tpl->getVariable('idservico')->value;?>
" multiple>
											</div>
										</div>										
										<div class="form-group" id="sortable" data-qtd="<?php echo $_smarty_tpl->getVariable('total_itens')->value;?>
">
											<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, null);?>
											<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('galeria')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
												<div class="col-md-3 ui-state-default">
													<div class="fileupload">
														<input type="hidden" name="ordem[]" class="ordem" value="<?php echo $_smarty_tpl->getVariable('i')->value;?>
">
														<div style="max-width: 200px; max-height: 150px; line-height: 20px;">
															<img class="thumbnail" src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/uploads/servicos/<?php echo $_smarty_tpl->getVariable('item')->value->idservico;?>
/<?php echo $_smarty_tpl->getVariable('item')->value->imagem_path;?>
"/>
															<input type="hidden" name="existentes[<?php echo $_smarty_tpl->getVariable('i')->value;?>
]" value="<?php echo $_smarty_tpl->getVariable('item')->value->imagem_path;?>
">
														</div>
														<div>
															<a class="btn red" href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/servicos/excluirimg/idservico/<?php echo $_smarty_tpl->getVariable('idservico')->value;?>
/idgaleria/<?php echo $_smarty_tpl->getVariable('item')->value->idgaleria;?>
"><i class="icon-trash"></i></a>
															<input type="radio" <?php if ($_smarty_tpl->getVariable('item')->value->imagem_capa){?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->getVariable('i')->value;?>
" id="imagem_capa" style="margin-left:-2px !important;zoom:1.2;position:relative;top:-2px;" name="imagem_capa">Imagem da capa
															<textarea rows="4" name="descricao[<?php echo $_smarty_tpl->getVariable('i')->value;?>
]"><?php echo $_smarty_tpl->getVariable('item')->value->descricao;?>
</textarea>
														</div>
													</div>
												</div>
											<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>	
											<?php }} ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="tab-pane" id="tab_3">
						<div class="portlet box grey ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-reorder"></i>Cadastro de serviços
								</div>
								<div class="tools">
									<button type="submit" name="salvar" class="btn blue" style="position:absolute;right:350px;top:57px;padding:8px 20px;">
										<i class="icon-ok"></i> Salvar
									</button>
									<button type="submit" name="continuar" class="btn green" style="position:absolute;right:105px;top:57px;padding:8px 20px;">
										<i class="icon-refresh"></i> Salvar e continuar editando
									</button>
									<a class="btn red" href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/servicos/list" style="position:absolute;right:15px;top:57px;height:initial;line-height:0px;padding:11px 20px;">
										<i class="icon-remove-circle"></i> Sair
									</a>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="form-body">
                                    <div class="form-group">
                                    	<div class="form-group">
											<label class="control-label col-md-3">Título de documentos anexos</label>
											<div class="col-md-9">
												<input type="text" name="titulo_documento" id="titulo_documento" value="<?php echo $_smarty_tpl->getVariable('servico')->value->titulo_documento;?>
" class="varchar string form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3"></label>
											<div class="col-md-9">
												<input type="file" name="arquivo_path" id="arquivo_path">
											</div>
										</div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="tab-pane" id="tab_4">
						<div class="portlet box grey ">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-reorder"></i>Cadastro de serviços
								</div>
								<div class="tools">
									<button type="submit" name="salvar" class="btn blue" style="position:absolute;right:350px;top:57px;padding:8px 20px;">
										<i class="icon-ok"></i> Salvar
									</button>
									<button type="submit" name="continuar" class="btn green" style="position:absolute;right:105px;top:57px;padding:8px 20px;">
										<i class="icon-refresh"></i> Salvar e continuar editando
									</button>
									<a class="btn red" href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/servicos/list" style="position:absolute;right:15px;top:57px;height:initial;line-height:0px;padding:11px 20px;">
										<i class="icon-remove-circle"></i> Sair
									</a>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="form-body">
                                    <div class="form-group">
                                    	<div class="form-group" id="element-titulo">
											<label for="titulo" class="control-label col-md-3 required">Palavra-chave meta</label>
											<div class="col-md-9">
												<input type="text" name="palavra_chave" id="palavra-chave" value="<?php echo $_smarty_tpl->getVariable('servico')->value->palavra_chave;?>
"
													field-type="text" class="varchar string form-control">
											</div>
										</div>
										<div class="form-group" id="element-descricao">
											<label for="descricao_meta" class="control-label col-md-3 optional">Descrição meta</label>
											<div class="col-md-9">
												<textarea name="descricao_meta"
													field-type="textarea" class="wysihtml5 form-control"
													rows="6" cols="80"><?php echo $_smarty_tpl->getVariable('servico')->value->descricao_meta;?>
</textarea>
											</div>
										</div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</form>
	</div>
</div>
