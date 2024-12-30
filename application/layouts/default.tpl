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
        <link href="{$basePath}/common/default/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{$basePath}/common/default/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="{$basePath}/common/default/assets/plugins/waves/waves.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="{$basePath}/common/default/assets/css/alpha.css" rel="stylesheet">
        <link href="{$basePath}/common/default/assets/css/custom.css" rel="stylesheet">	
		
		{$this->headLink()}
		
		<script type="text/javascript">
			document.basePath = '{$basePath}';
		</script>
	</head>
	<body class="mailbox">
	
		{$this->layout()->content}
		
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
		
		<script src="{$basePath}/common/default/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="{$basePath}/common/default/assets/plugins/bootstrap/popper.min.js"></script>
        <script src="{$basePath}/common/default/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{$basePath}/common/default/assets/plugins/waves/waves.min.js"></script>
        <script src="{$basePath}/common/default/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{$basePath}/common/default/assets/js/alpha.min.js"></script>
        <script src="{$basePath}/common/default/assets/js/pages/mailbox.js"></script>
		
		{$this->headScript()}
	</body>
</html>
