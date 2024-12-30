<?php /* Smarty version Smarty-3.0.7, created on 2014-11-28 17:02:49
         compiled from "c:\wamp\www\framework/application/modules/admin/views/index/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305985478aab9decd07-81687583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8884155c8e9cb612e3adef5b864368e4c9ba61d9' => 
    array (
      0 => 'c:\\wamp\\www\\framework/application/modules/admin/views/index/profile.tpl',
      1 => 1415878464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305985478aab9decd07-81687583',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-reorder"></i>Meus dados
		</div>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a> 
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body form">
		<!-- BEGIN FORM-->
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('usuario')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
		<form action="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/index/profile" class="horizontal-form" method="post" enctype="multipart/form-data">
			<div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<h3 class="form-section">Informações Pessoais</h3>						
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Sua Foto do Profile</label>
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div>
									<span class="btn default btn-file">
										<input type="hidden" name="MAX_FILE_SIZE" value="20971520" id="MAX_FILE_SIZE">
										<input type="file" name="imagem_path" id="logo_topo" field-type="file" class="varchar file default" 
											data-prev_file="thumb/usuarios/2/200/150/<?php echo $_smarty_tpl->getVariable('item')->value->imagem_path;?>
"/>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!--/span-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Seu Nome</label> 
							<input type="text" name="nome" class="form-control" placeholder="Nome completo" value="<?php echo $_smarty_tpl->getVariable('item')->value->nome;?>
" /> 
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Seu E-mail</label> 
							<input type="email" name="email" class="form-control" placeholder="Seu E-mail" value="<?php echo $_smarty_tpl->getVariable('item')->value->email;?>
" /> 
						</div>
					</div>
					<!--/span-->
				</div>
				<!--/row-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Nova Senha</label> 
							<input type="password" name="senha" class="form-control" placeholder="*******" />
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Confirmar Senha</label> 
							<input type="password" name="conf_senha" class="form-control" placeholder="Nova senha"/>
						</div>
					</div>
					<!--/span-->
				</div>
				<!--/row-->
			</div>
			<div class="form-actions right">
				<button type="submit" class="btn blue">
					<i class="icon-ok"></i> Salvar
				</button>
			</div>
		</form>
		<?php }} ?>
		<!-- END FORM-->
	</div>
</div>
