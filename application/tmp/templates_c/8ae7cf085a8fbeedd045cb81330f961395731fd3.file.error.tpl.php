<?php /* Smarty version Smarty-3.0.7, created on 2015-01-12 11:42:20
         compiled from "c:\wamp\www\framework/application/modules/default/views/error/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2522654b3b31c678526-96132239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae7cf085a8fbeedd045cb81330f961395731fd3' => 
    array (
      0 => 'c:\\wamp\\www\\framework/application/modules/default/views/error/error.tpl',
      1 => 1420562275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2522654b3b31c678526-96132239',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<!-- Padrões -->
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="rating" content="general"/>
	<meta name="language" content="portuguese, PT"/>
	<meta name="robots" content="index,follow"/>
	<meta name="googlebot" content="index,follow"/>
	<meta name="revisit-after" content="5 days"/>
	<meta name="generator" content="Sublime Text 3"/>
	<meta http-equiv="content-language" content="pt-br"/>
	<meta name="publisher" content="ICOMP - www.icomp.com.br"/>
	<meta name="author" content="Agência Digital ICOMP®"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>	
	<!-- Metatags Safari -->
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="format-detection" content="telephone=no"/>
	<!-- Facebook -->
	<meta property="og:type" content="website"/>
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<!-- Twitter -->
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:url" content=""/>
	<meta name="twitter:title" content=""/>
	<meta name="twitter:description" content=""/>
	<meta name="twitter:image" content="http://www.placehold.it/100x100"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/application/css/default/error/error.css">
	<title>Erro</title>
</head>

<body>
	<div class="faixa">
		<img src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/error/ops.png" alt="Erro">
	</div>
	<div class="erro-negrito">Desculpe, esta página não está disponível.</div>
	<div class="posicao">
		<div class="mensagem">
			O link que você acessou pode estar quebrado ou esta página pode ter sido removida.
		</div>
	</div>
	<div class="botoes">
		<a href="javascript:history.back(1)">&lt Voltar à página anterior</a>
		<a href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/">Voltar à home &gt</a>
	</div>
	<div class="smile">
		<img src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/default/error/smile.png" alt="Erro">
	</div>
</body>
</html>