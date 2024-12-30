<?php /* Smarty version Smarty-3.0.7, created on 2015-01-12 11:41:55
         compiled from "c:\wamp\www\framework/application/modules/admin/views/usuarios/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2015854b3b303cfc523-58398844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c400ce50cf76372c5bad48b33dae28d3c2e8f40f' => 
    array (
      0 => 'c:\\wamp\\www\\framework/application/modules/admin/views/usuarios/login.tpl',
      1 => 1421062911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015854b3b303cfc523-58398844',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
	<head>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	    <!-- END GLOBAL MANDATORY STYLES -->
	    <!-- BEGIN PAGE LEVEL STYLES --> 
	    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/select2/select2_metro.css" />
	    <!-- END PAGE LEVEL SCRIPTS -->
	    <!-- BEGIN THEME STYLES --> 
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/css/style.css" rel="stylesheet" type="text/css"/>
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/css/plugins.css" rel="stylesheet" type="text/css"/>
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
	    <link href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/css/custom.css" rel="stylesheet" type="text/css"/>
	    <!-- END THEME STYLES -->		
	
		<?php echo $_smarty_tpl->getVariable('this')->value->headTitle();?>

		<?php echo $_smarty_tpl->getVariable('this')->value->headMeta();?>

		<script type="text/javascript">
			document.basePath = '<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
';
		</script>
	</head>
	<body class="login">
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
	   	<!-- BEGIN LOGO -->
	   	<div class="logo">
	   		<img src="http://agenciala.com.br/wp-content/uploads/2014/04/LA-publicidade-propaganda-marketing.png" alt="" /> 
	   	</div>
	   	<!-- END LOGO -->
	   	<!-- BEGIN LOGIN -->
	   	<div class="content">
	      	<!-- BEGIN LOGIN FORM -->
	      	<form class="login-form" enctype="application/x-www-form-urlencoded" action="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/usuarios/login" method="post">
	    		<h3 class="form-title">Login para sua conta</h3>
		        <div class="alert alert-error hide">
		           	<button class="close" data-dismiss="alert"></button>
		           	<span>Entre com o seu login e senha.</span>
		        </div>
	         	<div class="form-group">
	            	<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
	            	<label class="control-label visible-ie8 visible-ie9">E-mail</label>
	            	<div class="input-icon">
	               		<i class="icon-user"></i>
	               		<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="E-mail" name="login"/>
	            	</div>
	         	</div>
		        <div class="form-group">
		            <label class="control-label visible-ie8 visible-ie9">Senha</label>
		            <div class="input-icon">
		               <i class="icon-lock"></i>
		               <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Senha" name="senha"/>
		            </div>
		        </div>
		        <div class="form-actions">
		            <label class="checkbox">
		            	
		            </label>
		            <button type="submit" class="btn blue pull-right">
		            	Acessar <i class="m-icon-swapright m-icon-white"></i>
		            </button>            
		        </div>
		        <div class="forget-password">
		            <h4>Não lembra da sua senha ?</h4>
		            <p>
		               sem problemas, clique <a href="javascript:;"  id="forget-password">aqui</a>
		               Para enviarmos uma nova senha.
		            </p>
		        </div>
	      	</form>
	      	<!-- END LOGIN FORM -->        
	      	<!-- BEGIN FORGOT PASSWORD FORM -->
		    <form class="forget-form" action="index.html" method="post">
		    	<h3 >Lembrar Senha ?</h3>
		        <p>Digite o e-mail cadastrado para enviarmos uma nova senha.</p>
		        <div class="form-group">
		        	<div class="input-icon">
		               <i class="icon-envelope"></i>
		               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
		            </div>
		         </div>
		         <div class="form-actions">
		            <button type="button" id="back-btn" class="btn">
		          		<i class="m-icon-swapleft"></i> Voltar
		            </button>
		            <button type="submit" class="btn blue pull-right">
		            	Enviar <i class="m-icon-swapright m-icon-white"></i>
		            </button>            
		         </div>
		    </form>
	      	<!-- END FORGOT PASSWORD FORM -->
	   </div>
	   <!-- END LOGIN -->
	   <!-- BEGIN COPYRIGHT -->
	   <div class="copyright">
	      &copy; 2001 - 2014 Agência LA
	   </div>
	   <!-- END COPYRIGHT -->
	   
	   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	   <!-- BEGIN CORE PLUGINS -->   
	   <!--[if lt IE 9]>
	   <script src="assets/plugins/respond.min.js"></script>
	   <script src="assets/plugins/excanvas.min.js"></script> 
	   <![endif]-->   
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	   <!-- END CORE PLUGINS -->
	   <!-- BEGIN PAGE LEVEL PLUGINS -->
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	   <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/select2/select2.min.js"></script>
	   <!-- END PAGE LEVEL PLUGINS -->
	   <!-- BEGIN PAGE LEVEL SCRIPTS -->
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/js/app.js" type="text/javascript"></script>
	   <script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/js/login-soft.js" type="text/javascript"></script>      
	   <!-- END PAGE LEVEL SCRIPTS --> 
	   <script>
	      jQuery(document).ready(function() {     
	        App.init();
	        Login.init();
	      });
	   </script>
	   <!-- END JAVASCRIPTS -->
	   
	</body>
</html>
