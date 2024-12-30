<?php /* Smarty version Smarty-3.0.7, created on 2015-01-08 11:25:20
         compiled from "c:\wamp\www\framework/application/layouts/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2808254ae6920943711-26881557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f509b7800ee33675e133a13e98395be0a2a0ab23' => 
    array (
      0 => 'c:\\wamp\\www\\framework/application/layouts/list.tpl',
      1 => 1417106520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2808254ae6920943711-26881557',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-edit"></i>
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>                  
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="btn-group">
						<a href="<?php echo $_smarty_tpl->getVariable('this')->value->CreateUrl("form",null,null,array());?>
/" id="sample_editable_1_new" class="btn green">
							Add Novo <i class="icon-plus"></i>
						</a>
					</div>
				</div>				
				<table class="table table-striped table-hover table-bordered" id="sample_1">
					<thead>
						<tr>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_model')->value->getCampo(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['column']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<?php if ($_smarty_tpl->getVariable('_model')->value->getVisibility($_smarty_tpl->tpl_vars['column']->value,'list')){?>
									<th>
										<?php echo $_smarty_tpl->tpl_vars['value']->value;?>

									</th>
								<?php }?>
							<?php }} ?>
							<th width="150">Opções</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paginator')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
							<tr>
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('_model')->value->getCampo(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['column']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
									<?php if ($_smarty_tpl->getVariable('_model')->value->getVisibility($_smarty_tpl->tpl_vars['column']->value,'list')){?>
									<td>
										<?php echo $_smarty_tpl->getVariable('this')->value->GetColumnValue($_smarty_tpl->tpl_vars['row']->value,$_smarty_tpl->tpl_vars['column']->value);?>
	
									</td>
									<?php }?>
								<?php }} ?>
								<td class="center">
									<a class="btn btn-sm yellow" href="<?php echo $_smarty_tpl->getVariable('this')->value->CreateUrl("form",null,null,array());?>
/<?php echo $_smarty_tpl->getVariable('primary')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->getVariable('primary')->value];?>
">Edit <i class="icon-edit"></i></a>
									<a class="btn btn-sm red" href="<?php echo $_smarty_tpl->getVariable('this')->value->CreateUrl("delete",null,null,array());?>
/<?php echo $_smarty_tpl->getVariable('primary')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->getVariable('primary')->value];?>
">Delete <i class="icon-remove"></i></a>
								</td>
							</tr>
						<?php }} ?>
					</tbody>
				</table>
			</div>
		</div>
	<!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>