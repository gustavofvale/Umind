<?php /* Smarty version Smarty-3.0.7, created on 2014-11-27 16:40:58
         compiled from "c:\wamp\www\framework/application/layouts/paginator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109155477541ab6c608-53936987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3963748bdf456a35bae8b0e3c632edbacbc424a' => 
    array (
      0 => 'c:\\wamp\\www\\framework/application/layouts/paginator.tpl',
      1 => 1409753684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109155477541ab6c608-53936987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="col-md-7 col-sm-12">
	<div class="dataTables_paginate paging_bootstrap">
		<ul class="pagination">
			<li class="prev"><a <?php if (isset($_smarty_tpl->getVariable('previous',null,true,false)->value)){?>href="<?php echo $_smarty_tpl->getVariable('this')->value->url(array('page'=>$_smarty_tpl->getVariable('previous')->value));?>
"<?php }?> class="no-border"><i class="icon-angle-left"></i></a></li>
			
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pagesInRange')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->getVariable('this')->value->current){?>
					<li>
						<a href="<?php echo $_smarty_tpl->getVariable('this')->value->url(array('page'=>$_smarty_tpl->tpl_vars['page']->value));?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
					</li>
				<?php }else{ ?>
					<li>
						<a class="active" href="<?php echo $_smarty_tpl->getVariable('this')->value->url(array('page'=>$_smarty_tpl->tpl_vars['page']->value));?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
					</li>
				<?php }?>
			<?php }} ?>
			
			<li class="next"><a <?php if (isset($_smarty_tpl->getVariable('next',null,true,false)->value)){?>href="<?php echo $_smarty_tpl->getVariable('this')->value->url(array('page'=>$_smarty_tpl->getVariable('next')->value));?>
"<?php }?> class="no-border"><i class="icon-angle-right"></i></a></li>
		</ul>
	</div>
</div>
