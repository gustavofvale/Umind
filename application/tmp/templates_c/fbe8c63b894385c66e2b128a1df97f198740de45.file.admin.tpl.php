<?php /* Smarty version Smarty-3.0.7, created on 2015-01-12 11:42:19
         compiled from "c:\wamp\www\framework/application/layouts/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1355754b3b31b6d8942-89419568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbe8c63b894385c66e2b128a1df97f198740de45' => 
    array (
      0 => 'c:\\wamp\\www\\framework/application/layouts/admin.tpl',
      1 => 1417194156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1355754b3b31b6d8942-89419568',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\framework\library\Deserto\Library\Smarty\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\wamp\www\framework\library\Deserto\Library\Smarty\plugins\modifier.truncate.php';
?><!doctype html>
<html>
	<head>
		<?php echo $_smarty_tpl->getVariable('this')->value->headTitle();?>

		<?php echo $_smarty_tpl->getVariable('this')->value->headMeta();?>

		<?php echo $_smarty_tpl->getVariable('this')->value->headLink();?>

		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript">
			document.basePath = '<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
';
			document.openedController = '<?php echo $_smarty_tpl->getVariable('openedController')->value;?>
';
		</script>
		
		<script src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
		
	</head>
	
	<!-- BEGIN BODY -->
	<body class="page-header-fixed">
	   <!-- BEGIN HEADER -->   
	   <div class="header navbar navbar-inverse navbar-fixed-top">
	      <!-- BEGIN TOP NAVIGATION BAR -->
	      <div class="header-inner">
	         <!-- BEGIN LOGO -->  
	         <a class="navbar-brand" href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin">
	         <img src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/img/logo_la.png" alt="AgÃªncia LA" class="img-responsive" />
	         </a>
	         <!-- END LOGO -->
	         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
	         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	         <img src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/common/admin/img/menu-toggler.png" alt="" />
	         </a> 
	         <!-- END RESPONSIVE MENU TOGGLER -->
	         <!-- BEGIN TOP NAVIGATION MENU -->
	         <ul class="nav navbar-nav pull-right">
	            <!-- BEGIN INBOX DROPDOWN -->
	            <li class="dropdown" id="header_inbox_bar">
	               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
	                  data-close-others="true">
	               <i class="icon-comment"></i>
	               <span class="badge"></span>
	               </a>
	               <ul class="dropdown-menu extended inbox">
	                  <li>
	                     <p>VocÃª tem uma nova mensagem</p>
	                  </li>
	                  <li>
	                     <ul class="dropdown-menu-list scroller" style="height: 250px;">
	                     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chats')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>   
	                        <li>  
	                           <a href="inbox.html?a=view">
		                           <span class="photo"><img class="avatar img-responsive" alt="" src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/thumb/usuarios/1/45/45/<?php echo $_smarty_tpl->getVariable('item')->value->imagem_path;?>
" /></span>
		                           <span class="subject">
		                           <span class="from"><?php echo $_smarty_tpl->getVariable('item')->value->nome;?>
</span>
		                           <span class="time"> <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('item')->value->data,"%d/%m/%Y");?>
 </span>
		                           </span>
		                           <span class="message">
		                           	<?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('item')->value->mensagem,75,"...",true);?>

		                           </span>  
	                           </a>
	                        </li>
	                     <?php }} ?>
	                     </ul>
	                  </li>
	                  <li class="external">   
	                     <a href="#">Ver toda a conversa <i class="m-icon-swapright"></i></a>
	                  </li>
	               </ul>
	            </li>
	            <!-- END INBOX DROPDOWN -->
	            <!-- BEGIN USER LOGIN DROPDOWN -->
	            <li class="dropdown user">
	               <a href="http://aqueceenem.com.br" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
	               <img alt="" src="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/thumb/usuarios/2/29/29/<?php echo $_smarty_tpl->getVariable('logged_usuario')->value['imagem_path'];?>
" width="29" height="29"/>
	               <span class="username"><?php echo $_smarty_tpl->getVariable('logged_usuario')->value['nome'];?>
</span>
	               <i class="icon-angle-down"></i>
	               </a>
	               <ul class="dropdown-menu">
	                  <li><a href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/meus-dados"><i class="icon-user"></i> Meus dados</a></li>
	                  
	                  <li class="divider"></li>
	                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Tela cheia</a></li>
	                  <li>
	                  	<a href="<?php echo $_smarty_tpl->getVariable('this')->value->url(array('module'=>"admin",'controller'=>"usuarios",'action'=>"logout"),"default",true);?>
">
	                  		<i class="icon-key"></i> Sair
	                  	</a>
	                  </li>
	               </ul>
	            </li>
	            <!-- END USER LOGIN DROPDOWN -->
	         </ul>
	         <!-- END TOP NAVIGATION MENU -->
	      </div>
	      <!-- END TOP NAVIGATION BAR -->
	   </div>
	   <!-- END HEADER -->
	   <div class="clearfix"></div>
	   <!-- BEGIN CONTAINER -->
	   <div class="page-container">
	      <!-- BEGIN SIDEBAR -->
	      <div class="page-sidebar navbar-collapse collapse">
	         <!-- BEGIN SIDEBAR MENU -->        
	         <ul class="page-sidebar-menu">
	            <li>
	               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
	               <div class="sidebar-toggler hidden-phone"></div>
	               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
	            </li>
	            <br/>
	            <li class="start active ">
	               <a href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin">
	               <i class="icon-home"></i> 
	               <span class="title">Inicial</span>
	               <span class="selected"></span>
	               </a>
	            </li>
	            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(2, null, null);?>
	            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('this')->value->categoriasitem(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
	            	<li class="tooltips">
		               <a href="#">
		               	<?php if ($_smarty_tpl->getVariable('i')->value==2){?>
		               		<i class="icon-table"></i>
		               	<?php }elseif($_smarty_tpl->getVariable('i')->value==3){?>
		               		<i class="icon-th"></i>
		               	<?php }elseif($_smarty_tpl->getVariable('i')->value==4){?>
		               		<i class="icon-envelope-alt"></i>
		               	<?php }else{ ?>
		               		<i class="icon-file-text"></i>
		               	<?php }?> 
		               	<span class="title"><?php echo $_smarty_tpl->getVariable('item')->value->descricao;?>
</span>
		               	<span class="arrow "></span>
		               </a>
		               <ul class="sub-menu">
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('this')->value->menuitem($_smarty_tpl->getVariable('item')->value->idcategoria); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			                  <li >
			                     <a href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin/<?php echo $_smarty_tpl->getVariable('row')->value->controlador;?>
/<?php echo $_smarty_tpl->getVariable('row')->value->acao;?>
"><?php echo $_smarty_tpl->getVariable('row')->value->descricao;?>
</a>
			                  </li>
			           		<?php }} ?>
			           </ul>
		            </li>
		        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>	
	            <?php }} ?>
	         </ul>
	         <!-- END SIDEBAR MENU -->
	      </div>
	      <!-- END SIDEBAR -->
	      <!-- BEGIN PAGE -->
	      <div class="page-content">
	         <!-- BEGIN PAGE HEADER-->
	         <div class="row">
	            <div class="col-md-12">
	               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
	               <h3 class="page-title">
	                  Painel Administrativo <small>gerenciamento de conteúdo</small>
	               </h3>
	               <ul class="page-breadcrumb breadcrumb">
	                  <li>
	                     <a href="<?php echo $_smarty_tpl->getVariable('basePath')->value;?>
/admin"><i class="icon-home"></i></a> 
	                     <i class="icon-angle-right"></i>
	                  </li>
	                  <li>
	                  	<a href="#">
	                  		<?php echo $_smarty_tpl->getVariable('this')->value->navigation()->breadcrumbs()->setLinkLast(true)->setSeparator(' <i class="icon-angle-right"></i>  ')->setMinDepth(-1)->render();?>

	                  	</a>
	                  </li>
	                  <li class="pull-right">
	                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" style="display: block;">
	                        <?php echo date('d/m/Y');?>

	                        <span> </span>
	                        <i class="icon-calendar"> </i>
	                        <span> </span>
	                     </div>
	                  </li>
	               </ul>
	               <!-- END PAGE TITLE & BREADCRUMB-->
	            </div>
	         </div>
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
	         <!-- END PAGE HEADER-->
	         <div class="clearfix"></div>
	         <!-- BEGIN DASHBOARD STATS -->
	         
	         	<?php echo $_smarty_tpl->getVariable('this')->value->layout()->content;?>

	         
	      </div>
	      <!-- END PAGE -->
	   </div>
	   <!-- END CONTAINER -->
	   <!-- BEGIN FOOTER -->
	   <div class="footer">
	      <div class="footer-inner">
	         &copy; 2001 - 2014 Agência LA
	      </div>
	      <div class="footer-tools">
	         <span class="go-top">
	         <i class="icon-angle-up"></i>
	         </span>
	      </div>
	   </div>
	   <!-- END FOOTER -->
	   
	   <?php echo $_smarty_tpl->getVariable('this')->value->headScript();?>

	   
	   
		<script>
	      jQuery(document).ready(function() {    
	         // initiate layout and plugins
	         App.init();
	         FormSamples.init();
	         FormComponents.init();
	         TableManaged.init();
	         UIExtendedModals.init();
	      });
	   </script>
	   
		
		<script type="text/javascript">
			tinymce.init({
				mode : "exact",
				elements : "textarea",
				theme: "modern",
				height: 250,
				plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste jbimages"
				],
				toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages | media",
				image_advtab: true
				});

				window.onload = function(){
					$('.mce-menubar').hide();
				}
		</script>
		
	   <!-- END PAGE LEVEL SCRIPTS -->
	   <!-- END JAVASCRIPTS -->
	</body>
	<!-- END BODY -->
</html>