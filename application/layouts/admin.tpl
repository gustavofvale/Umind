<!doctype html>
<html>
	<head>
		{$this->headTitle()}
		{$this->headMeta()}
		{$this->headLink()}
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript">
			document.basePath = '{$basePath}';
			document.openedController = '{$openedController}';
		</script>
		
		<script src="{$basePath}/common/admin/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
		
	</head>
	
	<!-- BEGIN BODY -->
	<body class="page-header-fixed">
	   <!-- BEGIN HEADER -->   
	   <div class="header navbar navbar-inverse navbar-fixed-top">
	      <!-- BEGIN TOP NAVIGATION BAR -->
	      <div class="header-inner">
	         <!-- BEGIN LOGO -->  
	         <a class="navbar-brand" href="{$basePath}/admin">
	         <img src="{$basePath}/common/admin/img/logo_la.png" alt="AgÃªncia LA" class="img-responsive" />
	         </a>
	         <!-- END LOGO -->
	         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
	         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	         <img src="{$basePath}/common/admin/img/menu-toggler.png" alt="" />
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
	                     {foreach from=$chats item=item}   
	                        <li>  
	                           <a href="inbox.html?a=view">
		                           <span class="photo"><img class="avatar img-responsive" alt="" src="{$basePath}/thumb/usuarios/1/45/45/{$item->imagem_path}" /></span>
		                           <span class="subject">
		                           <span class="from">{$item->nome}</span>
		                           <span class="time"> {$item->data|date_format:"%d/%m/%Y"} </span>
		                           </span>
		                           <span class="message">
		                           	{$item->mensagem|truncate:75:"...":true}
		                           </span>  
	                           </a>
	                        </li>
	                     {/foreach}
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
	               <img alt="" src="{$basePath}/thumb/usuarios/2/29/29/{$logged_usuario['imagem_path']}" width="29" height="29"/>
	               <span class="username">{$logged_usuario['nome']}</span>
	               <i class="icon-angle-down"></i>
	               </a>
	               <ul class="dropdown-menu">
	                  <li><a href="{$basePath}/admin/meus-dados"><i class="icon-user"></i> Meus dados</a></li>
	                  
	                  <li class="divider"></li>
	                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Tela cheia</a></li>
	                  <li>
	                  	<a href="{$this->url(['module'=>"admin", 'controller'=>"usuarios", 'action'=>"logout"], "default", TRUE)}">
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
	               <a href="{$basePath}/admin">
	               <i class="icon-home"></i> 
	               <span class="title">Inicial</span>
	               <span class="selected"></span>
	               </a>
	            </li>
	            {assign var=i value=2}
	            {foreach from=$this->categoriasitem() item=item}
	            	<li class="tooltips">
		               <a href="#">
		               	{if $i == 2}
		               		<i class="icon-table"></i>
		               	{else if $i == 3}
		               		<i class="icon-th"></i>
		               	{else if $i == 4}
		               		<i class="icon-envelope-alt"></i>
		               	{else}
		               		<i class="icon-file-text"></i>
		               	{/if} 
		               	<span class="title">{$item->descricao}</span>
		               	<span class="arrow "></span>
		               </a>
		               <ul class="sub-menu">
							{foreach from=$this->menuitem($item->idcategoria) item=row}
			                  <li >
			                     <a href="{$basePath}/admin/{$row->controlador}/{$row->acao}">{$row->descricao}</a>
			                  </li>
			           		{/foreach}
			           </ul>
		            </li>
		        {assign var=i value=$i+1}	
	            {/foreach}
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
	                     <a href="{$basePath}/admin"><i class="icon-home"></i></a> 
	                     <i class="icon-angle-right"></i>
	                  </li>
	                  <li>
	                  	<a href="#">
	                  		{$this->navigation()->breadcrumbs()->setLinkLast(TRUE)->setSeparator(' <i class="icon-angle-right"></i>  ')->setMinDepth(-1)->render()}
	                  	</a>
	                  </li>
	                  <li class="pull-right">
	                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" style="display: block;">
	                        {date('d/m/Y')}
	                        <span> </span>
	                        <i class="icon-calendar"> </i>
	                        <span> </span>
	                     </div>
	                  </li>
	               </ul>
	               <!-- END PAGE TITLE & BREADCRUMB-->
	            </div>
	         </div>
	         {if $success|default:"" != ""}
				<div id="msg-box" class="msg-success">
					{$success}
				</div>
			{/if}
			{if $error|default:"" != ""}
				<div id="msg-box" class="msg-error">
					{$error}
				</div>
			{/if}
	         <!-- END PAGE HEADER-->
	         <div class="clearfix"></div>
	         <!-- BEGIN DASHBOARD STATS -->
	         
	         	{$this->layout()->content}
	         
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
	   
	   {$this->headScript()}
	   
	   {literal}
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
	   {/literal}
		{literal}
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
		{/literal}
	   <!-- END PAGE LEVEL SCRIPTS -->
	   <!-- END JAVASCRIPTS -->
	</body>
	<!-- END BODY -->
</html>