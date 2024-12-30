<?php /* Smarty version Smarty-3.0.7, created on 2014-09-05 19:53:27
         compiled from "c:\wamp\www\artluz.com.br/application/layouts/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25217540a14b7a579a8-39781609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '260086d2ff16faac0c51ef494034d37a73356aa6' => 
    array (
      0 => 'c:\\wamp\\www\\artluz.com.br/application/layouts/default.tpl',
      1 => 1346416230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25217540a14b7a579a8-39781609',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
	<head>
		<?php echo $_smarty_tpl->getVariable('this')->value->headTitle();?>

		<?php echo $_smarty_tpl->getVariable('this')->value->headMeta();?>

		<?php echo $_smarty_tpl->getVariable('this')->value->headLink();?>

		<?php echo $_smarty_tpl->getVariable('this')->value->headScript();?>

		<script type="text/javascript">
			document.basePath = '<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
';
		</script>
	</head>
	<body>
		<?php echo $_smarty_tpl->getVariable('this')->value->layout()->content;?>

		
		<?php if ((($tmp = @$_smarty_tpl->getVariable('success')->value)===null||$tmp==='' ? '' : $tmp)!=''){?>
			<div id="msg-box" class="msg-success">
				<?php echo $_smarty_tpl->getVariable('success')->value;?>

			</div>
		<?php }?>
		<?php if ((($tmp = @$_smarty_tpl->getVariable('error')->value)===null||$tmp==='' ? '' : $tmp)!=''){?>
			<div id="msg-box" class="msg-error">
				<?php echo $_smarty_tpl->getVariable('error')->value;?>

			</div>
		<?php }?>
	</body>
</html>
