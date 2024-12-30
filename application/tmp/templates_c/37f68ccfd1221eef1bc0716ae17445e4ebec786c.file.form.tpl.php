<?php /* Smarty version Smarty-3.0.7, created on 2014-12-01 12:29:21
         compiled from "c:\wamp\www\framework/application/layouts/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25126547c5f21d43a23-08914441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37f68ccfd1221eef1bc0716ae17445e4ebec786c' => 
    array (
      0 => 'c:\\wamp\\www\\framework/application/layouts/form.tpl',
      1 => 1409753685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25126547c5f21d43a23-08914441',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="row">
	<div class="col-md-12">
    	<div class="tabbable tabbable-custom boxless">
    		<ul class="nav nav-tabs">
            	<li class="active"><a href="#tab_0" data-toggle="tab">Geral</a></li>
            </ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_0">
					<div class="portlet box blue ">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-reorder"></i>Formulário de cadastro
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a> 
								<a href="javascript:;" class="reload"></a> 
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->getVariable('form')->value->getAction();?>
" class="form-horizontal form-bordered form-row-stripped">
								<div class="form-body">
                                    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('form')->value->getElements(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
?>
										<?php if ($_smarty_tpl->getVariable('element')->value->getName()!="submit"&&$_smarty_tpl->getVariable('element')->value->getName()!="cancel"){?>
											<?php echo $_smarty_tpl->tpl_vars['element']->value;?>

										<?php }?>
									<?php }} ?>
								</div>
								<div class="form-actions fluid">
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">
													<i class="icon-ok"></i> Cadastrar
												</button>
												<button type="button" class="btn default" data-primary="<?php echo $_smarty_tpl->getVariable('primary')->value;?>
" data-url="<?php echo $_smarty_tpl->getVariable('this')->value->url(array('module'=>"admin",'controller'=>$_smarty_tpl->getVariable('controller')->value,'action'=>"list"),"default",false);?>
">Cancelar</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
