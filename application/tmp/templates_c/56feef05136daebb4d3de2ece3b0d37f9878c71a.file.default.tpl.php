<?php /* Smarty version Smarty-3.0.7, created on 2015-01-08 11:25:00
         compiled from "c:\wamp\www\framework/application/layouts/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1720854ae690c6c65d3-81752417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56feef05136daebb4d3de2ece3b0d37f9878c71a' => 
    array (
      0 => 'c:\\wamp\\www\\framework/application/layouts/default.tpl',
      1 => 1346416230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1720854ae690c6c65d3-81752417',
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
