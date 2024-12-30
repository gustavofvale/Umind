<?php /* Smarty version Smarty-3.0.7, created on 2024-12-27 03:35:54
         compiled from "c:\wamp64\www\yumid/application/layouts/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2106167426676e209a67d537-67851405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe8fac769d699d3eac7d389525423cc32c1baac5' => 
    array (
      0 => 'c:\\wamp64\\www\\yumid/application/layouts/default.tpl',
      1 => 1735269359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2106167426676e209a67d537-67851405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html lang="pt/BR">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Umind - criador de jornadas">
        <meta name="keywords" content="umind, jornadas">
        <meta name="author" content="Umind">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        
        <!-- Title -->
        <title>Umind - criador de jornadas</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/plugins/waves/waves.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/css/alpha.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/css/custom.css" rel="stylesheet">	
		
		<?php echo $_smarty_tpl->getVariable('this')->value->headLink();?>

		
		<script type="text/javascript">
			document.basePath = '<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
';
		</script>
	</head>
	<body class="mailbox">
	
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
		
		<script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/plugins/bootstrap/popper.min.js"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/js/alpha.min.js"></script>
        <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/assets/js/pages/mailbox.js"></script>
		
		<?php echo $_smarty_tpl->getVariable('this')->value->headScript();?>

	</body>
</html>
